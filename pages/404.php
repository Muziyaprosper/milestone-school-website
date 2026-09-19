<?php
$pageTitle = 'Page Not Found - Milestone School';
$metaDescription = 'The page you are looking for could not be found.';
$canonicalPath = '/404';
require __DIR__ . '/../includes/header.php';
?>

<section class="text-center py-20">
  <p class="text-lg font-semibold text-secondary mb-2">404</p>
  <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800">Page not found</h1>
  <p class="text-lg text-gray-600 max-w-xl mx-auto mb-8">
    Sorry, we couldn't find the page you were looking for. It may have moved or no longer exists.
  </p>
  <a href="/" class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-secondary to-orange-400 px-6 py-3 font-semibold text-white shadow-hard transition-all duration-300 hover:-translate-y-0.5 hover:shadow-glow">
    <i class="fas fa-home"></i>
    Back to Home
  </a>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
