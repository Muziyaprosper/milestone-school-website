<?php
$pageTitle = 'Graduation - Milestone School';
$metaDescription = 'Celebrate Milestone School\'s graduation ceremonies, honoring our learners\' achievements and the start of their next chapter.';
$canonicalPath = '/graduation';
$activeNav = '';
require __DIR__ . '/../includes/header.php';
?>
    <!-- Hero Section -->
    <section class="text-center mb-16">
      <div class="mb-4" data-aos="fade-up">
        <span class="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold">
          Graduation Gallery
        </span>
      </div>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 bg-gradient-to-r from-primary via-teal-500 to-accent bg-clip-text text-transparent" data-aos="fade-up" data-aos-delay="100">
        Graduation Ceremonies
      </h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto italic" data-aos="fade-up" data-aos-delay="200">
        Celebrating achievements and milestones as learners transition to new chapters in their educational journey
      </p>
    </section>
    
    <!-- Filter Buttons -->
    <div class="flex flex-wrap justify-center gap-3 mb-12" data-aos="fade-up" data-aos-delay="300">
      <a href="gallery" class="px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        All
      </a>
      <a href="academics" class="px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Academic Life
      </a>
      <a href="cultural" class="px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Events
      </a>
      <a href="sports" class="px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Sports
      </a>
      <a href="community" class="px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Community
      </a>
      <a href="graduation" class="px-6 py-2 bg-gradient-to-r from-primary to-teal-500 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
        Graduation
      </a>
      <a href="classroom" class="px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Classroom
      </a>
      <a href="science" class="px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Science
      </a>
    </div>

    <!-- Gallery Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-16">
      <a href="graduation" class="group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
        <div class="relative overflow-hidden">
          <img src="assets/prom.webp" alt="Graduation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Graduation Ceremony</p>
          </div>
        </div>
      </a>
    </div>
    
    <!-- Quote Section -->
    <section class="mt-16 text-center max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="900">
      <div class="bg-gradient-to-br from-primary/10 via-teal-50 to-accent/10 p-10 rounded-2xl border-l-4 border-primary">
        <blockquote class="italic text-xl md:text-2xl text-gray-700 font-medium">
          "Every graduation is a milestone—a celebration of growth, achievement, and the bright futures that lie ahead."
        </blockquote>
        <p class="mt-4 text-gray-600 font-semibold">— Milestone School</p>
      </div>
    </section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
