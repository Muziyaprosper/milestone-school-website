// scripts.js - Enhanced with modern features
document.addEventListener('DOMContentLoaded', () => {
  const PORTAL_URL = 'https://milestone.portal.com';
  const COOKIE_CONSENT_SCRIPT = 'cookie-consent.js';
  let preloaderHidden = false;

  function ensureCookieConsentScript() {
    if (window.CookieConsent || document.querySelector(`script[src="${COOKIE_CONSENT_SCRIPT}"]`)) {
      return;
    }

    const script = document.createElement('script');
    script.src = COOKIE_CONSENT_SCRIPT;
    script.defer = true;
    document.head.appendChild(script);
  }

  function registerServiceWorker() {
    if (!('serviceWorker' in navigator)) return;

    const startRegistration = () => {
      navigator.serviceWorker.register('sw.js').catch(() => {});
    };

    if ('requestIdleCallback' in window) {
      requestIdleCallback(startRegistration);
    } else {
      setTimeout(startRegistration, 1200);
    }
  }

  // Initialize AOS
  if (window.AOS) {
    AOS.init({
      duration: 800,
      once: true,
      mirror: false,
      offset: 100
    });
  }

  // Set current year
  const yearEl = document.getElementById('date');
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }

  // Mobile Menu Toggle
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  
  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', () => {
      const isHidden = mobileMenu.classList.contains('hidden');
      mobileMenu.classList.toggle('hidden');
      const icon = mobileMenuButton.querySelector('i');
      if (icon) {
        icon.classList.toggle('fa-bars');
        icon.classList.toggle('fa-times');
      }
      
      // Update ARIA attributes for accessibility
      mobileMenuButton.setAttribute('aria-expanded', String(isHidden));
      mobileMenu.setAttribute('aria-hidden', String(!isHidden));
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
        mobileMenu.classList.add('hidden');
        const icon = mobileMenuButton.querySelector('i');
        if (icon) {
          icon.classList.add('fa-bars');
          icon.classList.remove('fa-times');
        }
        mobileMenuButton.setAttribute('aria-expanded', 'false');
        mobileMenu.setAttribute('aria-hidden', 'true');
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key !== 'Escape' || mobileMenu.classList.contains('hidden')) return;
      mobileMenu.classList.add('hidden');
      const icon = mobileMenuButton.querySelector('i');
      if (icon) {
        icon.classList.add('fa-bars');
        icon.classList.remove('fa-times');
      }
      mobileMenuButton.setAttribute('aria-expanded', 'false');
      mobileMenu.setAttribute('aria-hidden', 'true');
      mobileMenuButton.focus();
    });
  }

  function showToast(message, type = 'success') {
    const toast = document.createElement('div');
    toast.className = `fixed top-4 right-4 z-50 px-6 py-3 rounded-lg shadow-hard transform translate-x-full opacity-0 transition-all duration-500 ${
      type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
    }`;
    toast.innerHTML = `
      <div class="flex items-center space-x-3">
        <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i>
        <span>${message}</span>
      </div>
    `;

    document.body.appendChild(toast);

    setTimeout(() => {
      toast.classList.remove('translate-x-full', 'opacity-0');
      toast.classList.add('translate-x-0', 'opacity-100');
    }, 10);

    setTimeout(() => {
      toast.classList.remove('translate-x-0', 'opacity-100');
      toast.classList.add('translate-x-full', 'opacity-0');
      setTimeout(() => toast.remove(), 500);
    }, 3000);
  }

  function applyExternalLinkSecurity() {
    document.querySelectorAll('a[target="_blank"]').forEach((link) => {
      const existingRel = link.getAttribute('rel') || '';
      const relTokens = new Set(existingRel.split(/\s+/).filter(Boolean));
      relTokens.add('noopener');
      relTokens.add('noreferrer');
      link.setAttribute('rel', Array.from(relTokens).join(' '));
    });
  }

  function initPlaceholderLinks() {
    document.querySelectorAll('a[href="#"]').forEach((link) => {
      const label = link.getAttribute('aria-label') || link.textContent.trim() || 'This link';
      link.setAttribute('role', 'button');
      link.setAttribute('aria-disabled', 'true');
      link.addEventListener('click', (e) => {
        e.preventDefault();
        showToast(`${label} will be updated soon. Use WhatsApp or the portal for assistance.`, 'error');
      });
    });
  }

  function injectPortalLinks() {
    const desktopNav = document.querySelector('header .hidden.lg\\:flex, header .hidden.md\\:flex');
    const existingDesktopPortalLink = desktopNav
      ? desktopNav.querySelector(`a[href="${PORTAL_URL}"], a[href="${PORTAL_URL}/"], .portal-nav-link`)
      : null;
    if (existingDesktopPortalLink) {
      existingDesktopPortalLink.classList.add('portal-nav-link');
    }
    if (desktopNav && !existingDesktopPortalLink) {
      const portalLink = document.createElement('a');
      portalLink.href = PORTAL_URL;
      portalLink.target = '_blank';
      portalLink.className = desktopNav.className.includes('lg:flex')
        ? 'portal-nav-link nav-link group relative px-4 py-2 text-sm font-medium text-gray-700 hover:text-primary transition-colors duration-300 portal-nav-item'
        : 'portal-nav-link px-4 py-2 text-sm font-semibold text-gray-700 hover:text-primary transition-colors duration-300';
      portalLink.innerHTML = desktopNav.className.includes('lg:flex')
        ? '<i class="fas fa-user-graduate mr-1.8 text-xs" aria-hidden="true"></i>Student Portal<span class="nav-underline"></span>'
        : 'Student Portal';

      const contactButton = desktopNav.querySelector('a[href="contact.html"]');
      if (contactButton && desktopNav.className.includes('lg:flex')) {
        desktopNav.insertBefore(portalLink, contactButton);
      } else {
        desktopNav.appendChild(portalLink);
      }
    }

    const mobileMenuEl = document.getElementById('mobile-menu');
    const existingMobilePortalLink = mobileMenuEl
      ? mobileMenuEl.querySelector(`a[href="${PORTAL_URL}"], a[href="${PORTAL_URL}/"], .portal-mobile-link`)
      : null;
    if (existingMobilePortalLink) {
      existingMobilePortalLink.classList.add('portal-mobile-link');
    }
    if (mobileMenuEl && !existingMobilePortalLink) {
      const mobilePortalLink = document.createElement('a');
      mobilePortalLink.href = PORTAL_URL;
      mobilePortalLink.target = '_blank';
      mobilePortalLink.className = mobileMenuEl.querySelector('.mobile-nav-link')
        ? 'portal-mobile-link mobile-nav-link flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-primary/5 text-gray-700 hover:text-primary transition-colors'
        : 'portal-mobile-link block px-4 py-2 text-gray-700 hover:bg-gray-100';
      mobilePortalLink.innerHTML = mobileMenuEl.querySelector('.mobile-nav-link')
        ? '<i class="fas fa-user-graduate w-5 text-center" aria-hidden="true"></i><span>Student Portal</span>'
        : 'Student Portal';
      mobileMenuEl.appendChild(mobilePortalLink);
    }
  }

  function setFieldState(field, errorEl, message = '') {
    if (!field || !errorEl) return;
    field.setAttribute('aria-invalid', message ? 'true' : 'false');
    errorEl.textContent = message;
  }

  function initAdmissionsForm() {
    const form = document.getElementById('admissions-enquiry-form');
    if (!form) return;

    const statusEl = document.getElementById('admissions-form-status');

    form.addEventListener('submit', (e) => {
      e.preventDefault();

      const formData = new FormData(form);
      const fields = [
        { name: 'guardianName', label: 'Parent or guardian name' },
        { name: 'learnerName', label: 'Learner name' },
        { name: 'gradeLevel', label: 'Preferred grade' },
        { name: 'phoneNumber', label: 'Phone number' },
        { name: 'message', label: 'Admissions enquiry' }
      ];

      let hasError = false;

      fields.forEach(({ name, label }) => {
        const field = form.elements[name];
        const errorEl = form.querySelector(`[data-error-for="${name}"]`);
        const value = String(formData.get(name) || '').trim();
        if (!value) {
          hasError = true;
          setFieldState(field, errorEl, `${label} is required.`);
        } else {
          setFieldState(field, errorEl);
        }
      });

      const emailField = form.elements.emailAddress;
      const emailError = form.querySelector('[data-error-for="emailAddress"]');
      const emailValue = String(formData.get('emailAddress') || '').trim();
      if (emailValue && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailValue)) {
        hasError = true;
        setFieldState(emailField, emailError, 'Enter a valid email address or leave this field empty.');
      } else {
        setFieldState(emailField, emailError);
      }

      if (hasError) {
        if (statusEl) {
          statusEl.className = 'status-message error';
          statusEl.textContent = 'Please correct the highlighted fields before continuing.';
        }
        return;
      }

      const message = [
        'Hello Milestone School, I would like admissions guidance.',
        `Parent/Guardian: ${formData.get('guardianName')}`,
        `Learner: ${formData.get('learnerName')}`,
        `Preferred Grade: ${formData.get('gradeLevel')}`,
        `Phone: ${formData.get('phoneNumber')}`,
        `Email: ${emailValue || 'Not provided'}`,
        `Message: ${formData.get('message')}`
      ].join('\n');

      if (statusEl) {
        statusEl.className = 'status-message success';
        statusEl.textContent = 'Your enquiry is ready. We are opening WhatsApp with your admissions message.';
      }

      window.open(`https://wa.me/260978443323?text=${encodeURIComponent(message)}`, '_blank', 'noopener,noreferrer');
      form.reset();
    });
  }

  applyExternalLinkSecurity();
  initPlaceholderLinks();
  injectPortalLinks();
  initAdmissionsForm();
  ensureCookieConsentScript();
  registerServiceWorker();

  function hidePreloader() {
    if (preloaderHidden) return;
    const preloader = document.getElementById('preloader');
    if (!preloader) return;
    preloaderHidden = true;
    preloader.classList.add('opacity-0', 'pointer-events-none');
    setTimeout(() => {
      preloader.style.display = 'none';
    }, 180);
    document.body.classList.add('loaded');
  }

  // Hide the loader as soon as the DOM is ready instead of waiting for all media.
  hidePreloader();
  window.addEventListener('load', hidePreloader, { once: true });
  window.setTimeout(hidePreloader, 1800);

  // Back to Top Button
  const scrollTopBtn = document.getElementById('scrollTopBtn');
  if (scrollTopBtn) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 300) {
        scrollTopBtn.classList.remove('opacity-0', 'invisible');
        scrollTopBtn.classList.add('opacity-100', 'visible');
      } else {
        scrollTopBtn.classList.add('opacity-0', 'invisible');
        scrollTopBtn.classList.remove('opacity-100', 'visible');
      }
    });
    
    scrollTopBtn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // Counter Animation
  function animateCounter() {
    const counters = document.querySelectorAll('.counter');
    if (!counters.length) return;
    
    counters.forEach(counter => {
      const target = +counter.getAttribute('data-target');
      const increment = target / 100;
      let current = 0;
      
      const updateCounter = () => {
        if (current < target) {
          current += increment;
          counter.textContent = Math.ceil(current);
          setTimeout(updateCounter, 20);
      } else {
        counter.textContent = target.toLocaleString() + '+';
      }
      };
      
      // Start counter when in viewport
      const observer = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting) {
          updateCounter();
          observer.unobserve(counter);
        }
      }, { threshold: 0.5 });
      
      observer.observe(counter);
    });
  }
  
  // Initialize counters
  animateCounter();

  // Gallery Lightbox
  const galleryItems = document.querySelectorAll('.gallery-item');
  const lightbox = document.getElementById('lightbox');
  const lightboxImage = document.getElementById('lightbox-image');
  const imageCaption = document.getElementById('image-caption');
  const closeLightbox = document.getElementById('close-lightbox');
  const prevBtn = document.getElementById('prev-btn');
  const nextBtn = document.getElementById('next-btn');
  
  let currentImageIndex = 0;
  const images = Array.from(galleryItems).map(item => ({
    src: item.querySelector('img').src,
    alt: item.querySelector('img').alt,
    caption: item.querySelector('h3')?.textContent || ''
  }));
  
  if (galleryItems.length && lightbox) {
    galleryItems.forEach((item, index) => {
      item.querySelector('.view-image')?.addEventListener('click', () => {
        openLightbox(index);
      });
      
      item.querySelector('img')?.addEventListener('click', () => {
        openLightbox(index);
      });
    });
    
    function openLightbox(index) {
      currentImageIndex = index;
      updateLightbox();
      lightbox.classList.remove('hidden');
      document.body.style.overflow = 'hidden';
    }
    
    function updateLightbox() {
      lightboxImage.src = images[currentImageIndex].src;
      lightboxImage.alt = images[currentImageIndex].alt;
      imageCaption.textContent = images[currentImageIndex].caption;
    }
    
    function closeLightboxFunc() {
      lightbox.classList.add('hidden');
      document.body.style.overflow = 'auto';
    }
    
    function showNext() {
      currentImageIndex = (currentImageIndex + 1) % images.length;
      updateLightbox();
    }
    
    function showPrev() {
      currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
      updateLightbox();
    }
    
    // Event listeners
    closeLightbox?.addEventListener('click', closeLightboxFunc);
    prevBtn?.addEventListener('click', showPrev);
    nextBtn?.addEventListener('click', showNext);
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
      if (lightbox.classList.contains('hidden')) return;
      
      if (e.key === 'Escape') closeLightboxFunc();
      if (e.key === 'ArrowRight') showNext();
      if (e.key === 'ArrowLeft') showPrev();
    });
    
    // Close on backdrop click
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox) closeLightboxFunc();
    });
  }

  // Gallery Filter
  const filterButtons = document.querySelectorAll('.gallery-filter');
  const galleryItemsAll = document.querySelectorAll('.gallery-item');
  
  // Function to filter gallery items
  function filterGallery(filter) {
    // Update URL without reload
    const url = new URL(window.location);
    if (filter === 'all') {
      url.searchParams.delete('filter');
    } else {
      url.searchParams.set('filter', filter);
    }
    window.history.pushState({}, '', url);
    
    // Remove active styling from all buttons
    filterButtons.forEach(btn => {
      btn.classList.remove('active', 'bg-gradient-to-r', 'from-primary', 'to-teal-500', 'text-white', 'shadow-lg');
      btn.classList.add('bg-white', 'text-gray-700', 'shadow-soft');
    });
    
    // Add active styling to selected button
    const activeButton = Array.from(filterButtons).find(btn => btn.getAttribute('data-filter') === filter);
    if (activeButton) {
      activeButton.classList.remove('bg-white', 'text-gray-700', 'shadow-soft');
      activeButton.classList.add('active', 'bg-gradient-to-r', 'from-primary', 'to-teal-500', 'text-white', 'shadow-lg');
    }
    
    // Filter items with smooth animation
    galleryItemsAll.forEach(item => {
      if (filter === 'all' || item.getAttribute('data-category') === filter) {
        item.style.display = 'block';
        item.style.opacity = '0';
        item.style.transform = 'scale(0.9)';
        setTimeout(() => {
          item.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
          item.style.opacity = '1';
          item.style.transform = 'scale(1)';
        }, 10);
      } else {
        item.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
        item.style.opacity = '0';
        item.style.transform = 'scale(0.9)';
        setTimeout(() => {
          item.style.display = 'none';
        }, 300);
      }
    });
  }
  
  if (filterButtons.length) {
    // Check URL parameter on page load
    const urlParams = new URLSearchParams(window.location.search);
    const filterParam = urlParams.get('filter') || 'all';
    filterGallery(filterParam);
    
    // Add click handlers to filter buttons
    filterButtons.forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault();
        const filter = button.getAttribute('data-filter');
        filterGallery(filter);
      });
    });
  }

  // Load More Button for Gallery
  const loadMoreBtn = document.getElementById('load-more');
  if (loadMoreBtn) {
    loadMoreBtn.addEventListener('click', () => {
      // Simulate loading more items
      loadMoreBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Loading...';
      loadMoreBtn.disabled = true;
      
      setTimeout(() => {
        // Add more items here
        loadMoreBtn.innerHTML = 'No More Photos <i class="fas fa-check ml-2"></i>';
        loadMoreBtn.classList.remove('from-primary', 'to-accent');
        loadMoreBtn.classList.add('bg-gray-300', 'text-gray-600');
        loadMoreBtn.disabled = true;
      }, 1500);
    });
  }

  // Hero Slideshow - use a stable crossfade so the hero stays centered and polished.
  function initSlideshow() {
    const slideshow = document.getElementById('slideshow');
    const slideNext = document.getElementById('slide-next');
    if (!slideshow || !slideNext) return;
    
    // Use lighter WebP slideshow assets on the homepage.
    const images = [
      'assets/pupils-hero.webp',
      'assets/funding.webp',
      'assets/pupils-2.webp',
      'assets/sports.webp',
      'assets/cooking-3.webp',
      'assets/livingstone-1.webp',
      'assets/safariday.webp'
    ];
    
    let nextIndex = 1;
    let isTransitioning = false;
    
    // Preload only the next image
    function preloadNext() {
      const img = new Image();
      img.src = images[nextIndex];
    }
    
    // Preload first next image
    preloadNext();
    
    setInterval(() => {
      if (isTransitioning) return;
      isTransitioning = true;

      slideNext.src = images[nextIndex];
      slideNext.alt = `Milestone School slideshow image ${nextIndex + 1}`;

      requestAnimationFrame(() => {
        slideNext.classList.remove('opacity-0');
        slideNext.classList.add('opacity-100');
        slideshow.classList.remove('opacity-100');
        slideshow.classList.add('opacity-0');
      });

      setTimeout(() => {
        slideshow.src = images[nextIndex];
        slideshow.alt = slideNext.alt;
        slideshow.classList.remove('opacity-0');
        slideshow.classList.add('opacity-100');
        slideNext.classList.remove('opacity-100');
        slideNext.classList.add('opacity-0');

        nextIndex = (nextIndex + 1) % images.length;
        preloadNext();
        isTransitioning = false;
      }, 700);
    }, 5000);
  }
  
  initSlideshow();

  // Video Thumbnail Click-to-Play
  function initVideoThumbnails() {
    const videoContainers = document.querySelectorAll('.video-thumbnail-container');
    let currentlyPlayingVideo = null;
    
    // Function to pause all videos except the one specified
    function pauseAllVideos(exceptVideo = null) {
      videoContainers.forEach(container => {
        const video = container.querySelector('video');
        if (video && video !== exceptVideo && !video.paused) {
          video.pause();
        }
      });
    }
    
    videoContainers.forEach(container => {
      const thumbnailWrapper = container.querySelector('.video-thumbnail-wrapper');
      const video = container.querySelector('video');
      const videoSrc = container.getAttribute('data-video-src');
      
      if (!thumbnailWrapper || !video || !videoSrc) return;
      
      // Handle thumbnail click
      thumbnailWrapper.addEventListener('click', () => {
        if (!video.dataset.loaded) {
          const sources = video.querySelectorAll('source');
          if (sources.length >= 1) {
            sources[0].src = videoSrc;
            sources[0].type = 'video/mp4';
            if (sources.length >= 2) {
              sources[1].remove();
            }
          } else {
            const mp4Source = document.createElement('source');
            mp4Source.src = videoSrc;
            mp4Source.type = 'video/mp4';
            video.appendChild(mp4Source);
          }
          video.dataset.loaded = 'true';
        }

        // Pause any currently playing video
        pauseAllVideos();
        
        // Hide thumbnail
        thumbnailWrapper.style.display = 'none';
        
        // Show and play video
        video.classList.remove('hidden');
        video.load(); // Load the video
        currentlyPlayingVideo = video;
        video.play().catch(err => {
          console.log('Video autoplay prevented:', err);
          currentlyPlayingVideo = null;
          // If autoplay fails, user can still click play button
        });
      });
      
      // Handle video play event (when user clicks play button)
      video.addEventListener('play', () => {
        // If a different video is playing, pause it
        if (currentlyPlayingVideo && currentlyPlayingVideo !== video) {
          currentlyPlayingVideo.pause();
        }
        currentlyPlayingVideo = video;
      });
      
      // Handle video pause event
      video.addEventListener('pause', () => {
        if (currentlyPlayingVideo === video) {
          currentlyPlayingVideo = null;
        }
      });
      
      // Handle video end event
      video.addEventListener('ended', () => {
        if (currentlyPlayingVideo === video) {
          currentlyPlayingVideo = null;
        }
      });
    });
  }
  
  initVideoThumbnails();

  // Normalize desktop nav links so the underline tracks the text label, not the icon.
  document.querySelectorAll('.nav-link').forEach((link) => {
    const underline = link.querySelector('.nav-underline');
    if (!underline) return;

    let label = link.querySelector('.nav-link-label');
    if (!label) {
      label = document.createElement('span');
      label.className = 'nav-link-label';

      const nodesToMove = [];
      link.childNodes.forEach((node) => {
        if (node === underline) return;
        if (node.nodeType === Node.TEXT_NODE && !node.textContent.trim()) return;
        if (node.nodeType === Node.ELEMENT_NODE && node.tagName === 'I') return;
        nodesToMove.push(node);
      });

      const icon = link.querySelector('i');
      if (icon?.nextSibling) {
        link.insertBefore(label, icon.nextSibling);
      } else {
        link.insertBefore(label, underline);
      }

      nodesToMove.forEach((node) => {
        if (node.parentNode === link) {
          label.appendChild(node);
        }
      });
    }

    if (!label.contains(underline)) {
      label.appendChild(underline);
    }
  });

  // Active Navigation Link Highlighting
  const currentPage = window.location.pathname.split('/').pop();
  const navParentPage = document.body?.dataset?.navParent || '';
  const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');
  
  navLinks.forEach(link => {
    const rawHref = link.getAttribute('href');
    if (!rawHref) return;

    let linkPage = rawHref;
    try {
      const resolvedUrl = new URL(rawHref, window.location.href);
      if (resolvedUrl.origin !== window.location.origin) return;
      linkPage = resolvedUrl.pathname.split('/').pop() || 'index.html';
    } catch (error) {
      return;
    }

    if (linkPage === currentPage ||
        (navParentPage && linkPage === navParentPage) ||
        (currentPage === '' && linkPage === 'index.html') ||
        (currentPage === 'index.html' && linkPage === 'index.html')) {
      link.classList.add('active');
    }
  });

  // Newsletter Form
  const newsletterForm = document.getElementById('footer-newsletter');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const emailInput = newsletterForm.querySelector('input[type="email"]');
      const submitBtn = newsletterForm.querySelector('button[type="submit"]');
      
      if (!emailInput.value) {
        showToast('Please enter your email address', 'error');
        return;
      }
      
      // Save original button text
      const originalText = submitBtn.textContent;
      submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Subscribing...';
      submitBtn.disabled = true;
      
      // Simulate API call
      setTimeout(() => {
        showToast('Thank you for subscribing to our newsletter!', 'success');
        emailInput.value = '';
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
      }, 1500);
    });
  }

  // Parallax Effect on Hero Section
  const heroSection = document.querySelector('.hero-section');
  if (heroSection) {
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      const rate = scrolled * -0.5;
      heroSection.style.transform = `translate3d(0, ${rate}px, 0)`;
    });
  }

  // Floating WhatsApp Button
  const whatsappBtn = document.createElement('a');
  whatsappBtn.href = 'https://wa.me/260978443323';
  whatsappBtn.target = '_blank';
  whatsappBtn.className = 'fixed bottom-6 right-6 z-40 w-14 h-14 bg-green-500 rounded-full shadow-hard flex items-center justify-center text-white text-2xl animate-float hover:shadow-glow hover:scale-110 transition-all duration-300';
  whatsappBtn.innerHTML = '<i class="fab fa-whatsapp"></i>';
  whatsappBtn.title = 'Chat with us on WhatsApp';
  document.body.appendChild(whatsappBtn);

});

// Initialize when page loads
window.addEventListener('load', () => {
  // Add loaded class for CSS transitions
  document.body.classList.add('loaded');
});
