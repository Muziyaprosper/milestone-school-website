const STATIC_CACHE = 'milestone-static-v1.1.0';
const PAGE_CACHE = 'milestone-pages-v1.1.0';
const RUNTIME_CACHE = 'milestone-runtime-v1.1.0';

const PRECACHE_URLS = [
  '/',
  '/index.html',
  '/dist/output.css',
  '/src/input.css',
  '/styles/custom.css',
  '/scripts.js',
  '/cookie-consent.js',
  '/manifest.json',
  '/favicon.ico',
  '/assets/logo.png'
];

self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(STATIC_CACHE).then((cache) => cache.addAll(PRECACHE_URLS)).catch(() => Promise.resolve())
  );
  self.skipWaiting();
});

self.addEventListener('activate', (event) => {
  const validCaches = new Set([STATIC_CACHE, PAGE_CACHE, RUNTIME_CACHE]);
  event.waitUntil(
    caches.keys().then((cacheNames) =>
      Promise.all(
        cacheNames.map((cacheName) => {
          if (!validCaches.has(cacheName)) {
            return caches.delete(cacheName);
          }
          return Promise.resolve();
        })
      )
    )
  );
  self.clients.claim();
});

function isHtmlRequest(request) {
  return request.mode === 'navigate' || (request.headers.get('accept') || '').includes('text/html');
}

function isCacheableAsset(requestUrl) {
  return /\.(?:css|js|png|jpg|jpeg|gif|webp|svg|ico|woff2?|ttf)$/i.test(requestUrl.pathname);
}

async function networkFirst(request, cacheName) {
  const cache = await caches.open(cacheName);
  try {
    const response = await fetch(request);
    if (response && response.ok) {
      cache.put(request, response.clone());
    }
    return response;
  } catch (error) {
    const cachedResponse = await cache.match(request);
    if (cachedResponse) {
      return cachedResponse;
    }
    throw error;
  }
}

async function staleWhileRevalidate(request, cacheName) {
  const cache = await caches.open(cacheName);
  const cachedResponse = await cache.match(request);

  const networkResponsePromise = fetch(request)
    .then((response) => {
      if (response && response.ok) {
        cache.put(request, response.clone());
      }
      return response;
    })
    .catch(() => null);

  return cachedResponse || networkResponsePromise;
}

self.addEventListener('fetch', (event) => {
  const { request } = event;
  if (request.method !== 'GET') return;

  const requestUrl = new URL(request.url);
  if (requestUrl.origin !== self.location.origin) return;

  if (request.headers.has('range') || /\.(?:mp4|webm|ogg)$/i.test(requestUrl.pathname)) {
    return;
  }

  if (isHtmlRequest(request)) {
    event.respondWith(
      networkFirst(request, PAGE_CACHE).catch(async () => {
        return caches.match(request) || caches.match('/index.html');
      })
    );
    return;
  }

  if (isCacheableAsset(requestUrl)) {
    event.respondWith(staleWhileRevalidate(request, RUNTIME_CACHE));
  }
});
