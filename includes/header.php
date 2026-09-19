<?php
/**
 * Shared page header: <head> + site nav.
 * Required: $pageTitle, $metaDescription, $canonicalPath
 * Optional: $metaKeywords, $ogTitle, $ogDescription, $ogImage, $bodyClass, $bodyStyle, $navParent, $activeNav, $extraHead
 */
$metaKeywords    = $metaKeywords    ?? '';
$ogTitle         = $ogTitle         ?? $pageTitle;
$ogDescription   = $ogDescription   ?? $metaDescription;
$ogImage         = $ogImage         ?? 'assets/logo.png';
$bodyClass       = $bodyClass       ?? 'bg-cover bg-center bg-no-repeat lg:bg-fixed';
$bodyStyle       = $bodyStyle       ?? "background-image: url('/assets/wallpaper.webp');";
$navParent       = $navParent       ?? '';
$activeNav       = $activeNav       ?? '';
$extraHead       = $extraHead       ?? '';
$darkOverlay     = $darkOverlay     ?? false; // false, or an opening <div ...> tag string
$afterSkipLink   = $afterSkipLink   ?? '';

$siteUrl = 'https://milestoneschool.education';
$canonicalUrl = $siteUrl . $canonicalPath;
$ogImageUrl = (strpos($ogImage, 'http') === 0) ? $ogImage : $siteUrl . '/' . ltrim($ogImage, '/');

$navItems = [
  'home'       => ['label' => 'Home',       'href' => '/',          'icon' => 'fa-home'],
  'about'      => ['label' => 'About Us',   'href' => 'about',      'icon' => 'fa-info-circle'],
  'academics'  => ['label' => 'Academics',  'href' => 'academics',  'icon' => 'fa-graduation-cap'],
  'admissions' => ['label' => 'Admissions', 'href' => 'admissions', 'icon' => 'fa-user-plus'],
  'events'     => ['label' => 'Events',     'href' => 'events',     'icon' => 'fa-calendar-alt'],
  'gallery'    => ['label' => 'Gallery',    'href' => 'gallery',    'icon' => 'fa-images'],
  'staff'      => ['label' => 'Staff',      'href' => 'staff',      'icon' => 'fa-users'],
];

$isNavActive = function (string $key) use ($activeNav, $navParent): bool {
  return $key === $activeNav || ($navParent !== '' && $key === $navParent);
};
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary Meta Tags -->
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta name="description" content="<?= htmlspecialchars($metaDescription) ?>">
  <?php if ($metaKeywords !== ''): ?>
  <meta name="keywords" content="<?= htmlspecialchars($metaKeywords) ?>">
  <?php endif; ?>
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
  <meta property="og:title" content="<?= htmlspecialchars($ogTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($ogDescription) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($ogImageUrl) ?>">
  <meta property="og:site_name" content="Milestone School">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
  <meta property="twitter:title" content="<?= htmlspecialchars($ogTitle) ?>">
  <meta property="twitter:description" content="<?= htmlspecialchars($ogDescription) ?>">
  <meta property="twitter:image" content="<?= htmlspecialchars($ogImageUrl) ?>">
  <?= $extraHead ?>

  <!-- Performance Optimizations -->
  <link rel="dns-prefetch" href="https://fonts.googleapis.com">
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
  <link rel="dns-prefetch" href="https://unpkg.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://cdnjs.cloudflare.com">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"></noscript>
  <link rel="stylesheet" href="/src/input.css">
  <link href="/dist/output.css" rel="stylesheet">
  <link href="/styles/custom.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" type="image/x-icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/favicon.ico">
  <link rel="manifest" href="/manifest.json">
  <link rel="sitemap" type="application/xml" href="/sitemap.xml">

  <!-- Scripts -->
  <script src="/cookie-consent.js" defer></script>
  <script src="/scripts.js" defer></script>
</head>

<body class="<?= htmlspecialchars($bodyClass) ?>"<?= $bodyStyle !== '' ? ' style="' . htmlspecialchars($bodyStyle) . '"' : '' ?><?= $navParent !== '' ? ' data-nav-parent="' . htmlspecialchars($navParent) . '"' : '' ?>>

  <!-- Skip to main content link for accessibility -->
  <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:px-4 focus:py-2 focus:bg-primary focus:text-white focus:rounded-lg focus:shadow-lg">Skip to main content</a>

  <?= $afterSkipLink ?>
<?php if ($darkOverlay): ?>
  <?= $darkOverlay === true ? '<div class="min-h-screen bg-slate-950/55">' : $darkOverlay ?>
<?php endif; ?>

  <!-- Enhanced Header with Glass Morphism -->
  <header class="sticky top-0 z-50 backdrop-blur-lg bg-white/90 supports-backdrop-blur:bg-white/95 shadow-soft">
    <nav class="container mx-auto px-4 sm:px-6 py-3" aria-label="Main navigation">
      <div class="flex items-center justify-between">

        <!-- Logo with Animation -->
        <a href="/" class="flex items-center space-x-3 group">
          <div class="relative">
            <div class="absolute inset-0 bg-gradient-to-r from-primary to-accent rounded-full blur opacity-30 group-hover:opacity-50 transition duration-500"></div>
            <img src="/assets/logo.png" alt="Milestone School Logo"
                 class="relative h-12 w-12 object-contain transition-transform duration-700 group-hover:rotate-12 group-hover:scale-110" width="48" height="48">
          </div>
          <div class="flex flex-col">
            <span class="text-2xl font-bold bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">
              Milestone School
            </span>
            <span class="text-xs text-gray-500 tracking-wider font-medium">Humble Grooming for a Bright Future</span>
          </div>
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex items-center space-x-0.5">
          <?php foreach ($navItems as $key => $item): $active = $isNavActive($key); ?>
          <a href="<?= htmlspecialchars($item['href']) ?>"
             class="nav-link group relative px-3 py-2 text-sm font-medium <?= $active ? 'text-primary font-semibold' : 'text-gray-700 hover:text-primary' ?> transition-colors duration-300">
            <i class="fas <?= $item['icon'] ?> mr-1.5 text-xs"></i>
            <?= htmlspecialchars($item['label']) ?>
            <span class="nav-underline"></span>
          </a>
          <?php endforeach; ?>

          <a href="https://portal.milestoneschoolzambia.com" target="_blank" rel="noopener noreferrer"
             class="portal-nav-link ml-3 px-5 py-2 text-sm border border-primary/20 bg-primary/5 text-primary font-semibold rounded-full transition-all duration-300 hover:-translate-y-0.5 hover:border-primary/40 hover:bg-primary/10">
            Student Portal
          </a>

          <!-- CTA Button -->
          <a href="contact"
             class="ml-3 px-5 py-2 text-sm bg-gradient-to-r from-secondary to-orange-400 text-white font-semibold rounded-full
                    shadow-hard hover:shadow-glow transform hover:-translate-y-0.5 transition-all duration-300
                    hover:from-orange-400 hover:to-secondary">
            Contact
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button"
                class="lg:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100 transition-colors"
                aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">
          <i class="fas fa-bars text-xl" aria-hidden="true"></i>
        </button>
      </div>

      <!-- Mobile Menu -->
      <div id="mobile-menu"
           class="lg:hidden hidden mt-4 py-4 px-6 bg-white rounded-xl shadow-hard border border-gray-100 animate-slide-up">
        <div class="space-y-2">
          <?php foreach ($navItems as $key => $item): $active = $isNavActive($key); ?>
          <a href="<?= htmlspecialchars($item['href']) ?>"
             class="mobile-nav-link flex items-center space-x-3 px-4 py-3 rounded-lg <?= $active ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-primary/5 text-gray-700 hover:text-primary' ?> transition-colors">
            <i class="fas <?= $item['icon'] ?> w-5 text-center"></i>
            <span><?= htmlspecialchars($item['label']) ?></span>
          </a>
          <?php endforeach; ?>
          <a href="https://portal.milestoneschoolzambia.com" target="_blank" rel="noopener noreferrer"
             class="portal-mobile-link mobile-nav-link flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-primary/5 text-gray-700 hover:text-primary transition-colors">
            <i class="fas fa-user-graduate w-5 text-center"></i>
            <span>Student Portal</span>
          </a>
          <a href="contact"
             class="mobile-nav-link flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-primary/5 text-gray-700 hover:text-primary transition-colors">
            <i class="fas fa-envelope w-5 text-center"></i>
            <span>Contact</span>
          </a>
        </div>
      </div>
    </nav>
  </header>

  <style>
  .nav-underline {
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    transform: translateX(-50%);
    background: linear-gradient(to right, var(--color-primary), var(--color-accent));
    transition: width 0.3s ease;
  }

  .group:hover .nav-underline,
  .nav-link.active .nav-underline {
    width: 75%;
  }

  .nav-link.active {
    color: var(--color-primary);
    font-weight: 600;
  }

  .mobile-nav-link.active {
    background-color: rgb(20 184 166 / 0.1);
    color: var(--color-primary);
    font-weight: 600;
  }
  </style>

  <main id="main-content" class="<?= htmlspecialchars($mainClass ?? 'container mx-auto px-4 sm:px-6 py-12') ?>" role="main">
