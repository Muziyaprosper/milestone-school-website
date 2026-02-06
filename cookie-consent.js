// Cookie Consent Manager for Milestone School
(function() {
  'use strict';

  const COOKIE_CONSENT_KEY = 'milestone_cookie_consent';
  const COOKIE_PREFERENCES_KEY = 'milestone_cookie_preferences';
  const COOKIE_EXPIRY_DAYS = 365;

  // Cookie utility functions
  function setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = `expires=${date.toUTCString()}`;
    document.cookie = `${name}=${value};${expires};path=/;SameSite=Lax`;
  }

  function getCookie(name) {
    const nameEQ = name + '=';
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) === ' ') c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  }

  function deleteCookie(name) {
    document.cookie = `${name}=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;`;
  }

  // Check if consent has been given
  function hasConsent() {
    return getCookie(COOKIE_CONSENT_KEY) === 'accepted';
  }

  // Save consent preferences
  function savePreferences(preferences) {
    setCookie(COOKIE_CONSENT_KEY, 'accepted', COOKIE_EXPIRY_DAYS);
    setCookie(COOKIE_PREFERENCES_KEY, JSON.stringify(preferences), COOKIE_EXPIRY_DAYS);
  }

  // Get saved preferences
  function getPreferences() {
    const prefs = getCookie(COOKIE_PREFERENCES_KEY);
    return prefs ? JSON.parse(prefs) : null;
  }

  // Create cookie consent banner
  function createCookieBanner() {
    if (hasConsent()) {
      return; // Don't show if already consented
    }

    const banner = document.createElement('div');
    banner.id = 'cookie-consent-banner';
    banner.className = 'fixed bottom-4 right-4 z-50 bg-white shadow-2xl border border-gray-200 rounded-lg max-w-sm transform translate-x-full opacity-0 transition-all duration-300';
    banner.setAttribute('role', 'dialog');
    banner.setAttribute('aria-label', 'Cookie consent');
    banner.innerHTML = `
      <div class="p-4">
        <div class="flex items-start gap-3 mb-3">
          <div class="flex-shrink-0 w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center">
            <i class="fas fa-cookie-bite text-primary text-sm"></i>
          </div>
          <div class="flex-1 min-w-0">
            <h3 class="text-sm font-bold text-gray-900 mb-1">We Use Cookies</h3>
            <p class="text-xs text-gray-600 leading-relaxed">
              We use cookies to enhance your experience. 
              <a href="/privacy.html" class="text-primary hover:underline">Learn more</a>
            </p>
          </div>
        </div>
        <div class="flex gap-2">
          <button id="cookie-accept-necessary" 
                  class="flex-1 px-3 py-1.5 text-xs bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200 transition-colors font-medium">
            Necessary
          </button>
          <button id="cookie-accept-all" 
                  class="flex-1 px-3 py-1.5 text-xs bg-gradient-to-r from-primary to-teal-500 text-white rounded-md hover:shadow-md transition-all font-medium">
            Accept All
          </button>
        </div>
      </div>
    `;

    document.body.appendChild(banner);

    // Show banner after a short delay
    setTimeout(() => {
      banner.classList.remove('translate-x-full', 'opacity-0');
      banner.classList.add('translate-x-0', 'opacity-100');
    }, 500);

    // Accept all cookies
    document.getElementById('cookie-accept-all').addEventListener('click', () => {
      savePreferences({
        necessary: true,
        analytics: true,
        marketing: true
      });
      hideBanner();
    });

    // Accept necessary only
    document.getElementById('cookie-accept-necessary').addEventListener('click', () => {
      savePreferences({
        necessary: true,
        analytics: false,
        marketing: false
      });
      hideBanner();
    });

    function hideBanner() {
      banner.classList.remove('translate-x-0', 'opacity-100');
      banner.classList.add('translate-x-full', 'opacity-0');
      setTimeout(() => {
        banner.remove();
      }, 300);
    }
  }

  // Initialize on DOM ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', createCookieBanner);
  } else {
    createCookieBanner();
  }

  // Export functions for external use
  window.CookieConsent = {
    hasConsent,
    getPreferences,
    savePreferences,
    setCookie,
    getCookie,
    deleteCookie
  };
})();
