# Website Optimization Guide

## Overview
This document outlines the optimizations implemented to improve website performance, including WebP images, WebM videos, caching, and cookie management.

## Image Conversion to WebP

### Current Status
All image references in the HTML have been updated to use WebP format with JPG/PNG fallbacks using the `<picture>` element.

### Required Actions
**You need to convert your actual image files to WebP format.** The HTML is ready, but the WebP files don't exist yet.

### How to Convert Images

#### Option 1: Using Online Tools
1. Visit https://cloudconvert.com/jpg-to-webp or https://convertio.co/jpg-webp/
2. Upload your images
3. Download the converted WebP files
4. Place them in the `assets/` folder with the same names (e.g., `pupils.webp`, `school.webp`)

#### Option 2: Using Command Line (if you have ImageMagick installed)
```bash
magick convert assets/pupils.jpg assets/pupils.webp
magick convert assets/school.jpg assets/school.webp
# Repeat for all images
```

#### Option 3: Using Node.js (sharp package)
```bash
npm install sharp
node convert-images.js
```

### Images That Need Conversion
- `assets/logo.png` → `assets/logo.webp`
- `assets/pupils.jpg` → `assets/pupils.webp`
- `assets/school.jpg` → `assets/school.webp`
- `assets/reading.jpg` → `assets/reading.webp`
- `assets/classroom.jpg` → `assets/classroom.webp`
- `assets/class.jpg` → `assets/class.webp`
- `assets/milestone-thumb.jpg` → `assets/milestone-thumb.webp`
- `assets/Milestonevideo-thumb.jpg` → `assets/Milestonevideo-thumb.webp`
- `assets/Transport (20).jpg` → `assets/Transport (20).webp`
- `assets/Transport (26).jpg` → `assets/Transport (26).webp`
- `assets/Transport (39).jpg` → `assets/Transport (39).webp`
- `assets/Transport (14).jpg` → `assets/Transport (14).webp`
- All slideshow images: `funding.jpg`, `pupils-2.jpg`, `sports.jpg`, `cooking-3.jpg`, `livingstone-1.jpg`, `safariday.jpg`

## Video Conversion to WebM

### Current Status
All video references have been updated to use WebM format with MP4 fallbacks.

### Required Actions
**You need to convert your video files to WebM format.**

### How to Convert Videos

#### Option 1: Using FFmpeg (Recommended)
```bash
# Install FFmpeg first, then:
ffmpeg -i assets/milestone.mp4 -c:v libvpx-vp9 -crf 30 -b:v 0 -c:a libopus assets/milestone.webm
ffmpeg -i assets/Milestonevideo.mp4 -c:v libvpx-vp9 -crf 30 -b:v 0 -c:a libopus assets/Milestonevideo.webm
```

#### Option 2: Using Online Tools
1. Visit https://cloudconvert.com/mp4-to-webm
2. Upload your videos
3. Download the converted WebM files
4. Place them in the `assets/` folder

### Videos That Need Conversion
- `assets/milestone.mp4` → `assets/milestone.webm`
- `assets/Milestonevideo.mp4` → `assets/Milestonevideo.webm`

## Caching Implementation

### Service Worker (sw.js)
- **Location**: `/sw.js`
- **Purpose**: Client-side caching for offline support and faster loading
- **Status**: ✅ Implemented and registered in `index.html`
- **Cache Strategy**: Cache-first with network fallback

### Server-Side Caching (.htaccess)
- **Location**: `/.htaccess`
- **Purpose**: Browser caching headers for static assets
- **Status**: ✅ Created
- **Note**: Only works on Apache servers. For Nginx, use equivalent configuration.

### Manifest (manifest.json)
- **Location**: `/manifest.json`
- **Purpose**: PWA support and app-like experience
- **Status**: ✅ Created and linked in `index.html`

## Cookie Consent

### Implementation
- **File**: `cookie-consent.js`
- **Status**: ✅ Implemented and loaded in `index.html`
- **Features**:
  - GDPR-compliant cookie consent banner
  - Options: "Accept All" or "Necessary Only"
  - Saves preferences for 365 days
  - Accessible via `window.CookieConsent` API

### Cookie Management
The cookie consent system provides:
- `CookieConsent.hasConsent()` - Check if user has consented
- `CookieConsent.getPreferences()` - Get saved preferences
- `CookieConsent.setCookie(name, value, days)` - Set a cookie
- `CookieConsent.getCookie(name)` - Get a cookie value
- `CookieConsent.deleteCookie(name)` - Delete a cookie

## Performance Benefits

### WebP Images
- **Size Reduction**: 25-35% smaller than JPG/PNG
- **Quality**: Maintains visual quality
- **Browser Support**: 97%+ of browsers (with fallback)

### WebM Videos
- **Size Reduction**: 30-50% smaller than MP4
- **Quality**: Excellent compression
- **Browser Support**: 95%+ of browsers (with MP4 fallback)

### Caching
- **First Load**: Normal speed
- **Subsequent Loads**: 50-80% faster
- **Offline Support**: Basic functionality available offline

## Testing

### Test WebP Support
1. Open browser DevTools
2. Check Network tab
3. Look for `.webp` requests
4. Verify fallback to `.jpg` if WebP not supported

### Test Service Worker
1. Open DevTools → Application → Service Workers
2. Verify `sw.js` is registered
3. Check Cache Storage for cached files

### Test Cookie Consent
1. Clear browser cookies
2. Reload page
3. Verify banner appears
4. Accept and verify it doesn't show again

## Next Steps

1. ✅ HTML updated for WebP/WebM
2. ⏳ Convert images to WebP format
3. ⏳ Convert videos to WebM format
4. ✅ Service Worker implemented
5. ✅ Cookie consent implemented
6. ✅ Caching headers configured

## Notes

- The website will work without WebP/WebM files (fallbacks will be used)
- Performance improvements will be maximized once files are converted
- Service Worker requires HTTPS in production (works on localhost for testing)
- Cookie consent is GDPR-compliant but you may want to customize the privacy policy link
