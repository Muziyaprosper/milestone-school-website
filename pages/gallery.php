<?php
$pageTitle = 'Gallery - Milestone School | Photo Gallery & Visual Stories';
$metaDescription = 'Explore Milestone School\'s photo gallery featuring sports events, graduation ceremonies, cultural activities, classroom learning, science fairs, and community events in Kabwe, Zambia.';
$metaKeywords = 'Milestone School gallery, school photos, Kabwe school images, sports events, graduation photos';
$ogTitle = 'Gallery - Milestone School';
$ogDescription = 'Explore Milestone School\'s photo gallery featuring events, activities, and campus life in Kabwe, Zambia.';
$canonicalPath = '/gallery';
$activeNav = 'gallery';
require __DIR__ . '/../includes/header.php';
?>
    <!-- Hero Section -->
    <section class="text-center mb-16">
      <div class="mb-4" data-aos="fade-up">
        <span class="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold">
          Gallery
        </span>
      </div>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 bg-gradient-to-r from-primary via-teal-500 to-accent bg-clip-text text-transparent" data-aos="fade-up" data-aos-delay="100">
        Our School Gallery
      </h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto italic" data-aos="fade-up" data-aos-delay="200">
        The Milestone School Gallery captures the spirit, energy, and diversity of our learning community. Every photograph tells a story of growth, creativity, and shared experiences that make Milestone a truly special place to learn and grow.
      </p>
    </section>

    <section class="mb-16">
      <div class="grid gap-8 lg:grid-cols-[1.15fr_0.85fr] lg:items-center">
        <div data-aos="fade-up" class="rounded-[2rem] border border-white/60 bg-white/90 p-8 shadow-soft backdrop-blur-sm md:p-10">
          <span class="inline-flex items-center rounded-full bg-primary/10 px-4 py-2 text-sm font-semibold text-primary">
            Visual Stories
          </span>
          <h2 class="mt-5 text-3xl font-bold text-gray-800 md:text-4xl">
            Explore school life through moments that matter
          </h2>
          <p class="mt-5 text-lg leading-relaxed text-gray-700">
            This gallery brings together classroom learning, celebrations, sports, leadership, reading, transport, meals, and day-to-day experiences that reflect the Milestone School journey.
          </p>
          <p class="mt-4 leading-relaxed text-gray-600">
            Use the category filters to move quickly through the parts of school life that matter most to your family.
          </p>
        </div>

        <div data-aos="fade-up" data-aos-delay="100" class="grid gap-4 sm:grid-cols-2 lg:grid-cols-1">
          <article class="rounded-3xl border border-white/60 bg-white/90 p-6 shadow-soft backdrop-blur-sm">
            <div class="flex items-center gap-4">
              <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-primary to-teal-500 text-white shadow-lg">
                <i class="fas fa-camera text-xl"></i>
              </div>
              <div>
                <p class="text-3xl font-bold text-gray-800">School life</p>
                <p class="text-sm font-medium uppercase tracking-[0.2em] text-gray-500">Learning, events, and campus moments</p>
              </div>
            </div>
          </article>
          <article class="rounded-3xl border border-white/60 bg-white/90 p-6 shadow-soft backdrop-blur-sm">
            <div class="flex items-center gap-4">
              <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-secondary to-orange-400 text-white shadow-lg">
                <i class="fas fa-filter text-xl"></i>
              </div>
              <div>
                <p class="text-3xl font-bold text-gray-800">Quick filters</p>
                <p class="text-sm font-medium uppercase tracking-[0.2em] text-gray-500">Browse by category</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>
    
    <!-- Filter Buttons -->
    <section class="mb-12" data-aos="fade-up" data-aos-delay="300">
    <div class="mb-5 text-center">
      <span class="inline-block rounded-full bg-secondary/10 px-4 py-2 text-sm font-semibold text-secondary">
        Browse by Category
      </span>
      <p class="mx-auto mt-4 max-w-3xl text-gray-600">
        Choose a gallery theme to focus on the moments you want to see first.
      </p>
    </div>
    <div class="flex flex-wrap justify-center gap-3">
      <button data-filter="all" class="gallery-filter px-6 py-2 bg-gradient-to-r from-primary to-teal-500 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 active">
        All
      </button>
      <button data-filter="academic" class="gallery-filter px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Academic Life
      </button>
      <button data-filter="cultural" class="gallery-filter px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Events
      </button>
      <button data-filter="sports" class="gallery-filter px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Sports
      </button>
      <button data-filter="community" class="gallery-filter px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Community
      </button>
      <button data-filter="graduation" class="gallery-filter px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Graduation
      </button>
      <button data-filter="classroom" class="gallery-filter px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Classroom
      </button>
      <button data-filter="science" class="gallery-filter px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Science
      </button>
      <button data-filter="arts" class="gallery-filter px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Arts & Creativity
      </button>
      <button data-filter="fieldtrips" class="gallery-filter px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Field Trips
      </button>
      <button data-filter="leadership" class="gallery-filter px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Leadership & Clubs
      </button>
      <button data-filter="facilities" class="gallery-filter px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Campus & Facilities
      </button>
      <button data-filter="staff" class="gallery-filter px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Staff
      </button>
      <button data-filter="literacy" class="gallery-filter px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Literacy and Reading
      </button>
         <button data-filter="transport" class="gallery-filter px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Transportation
      </button>
         <button data-filter="lunch" class="gallery-filter px-6 py-2 bg-white text-gray-700 font-semibold rounded-full shadow-soft hover:shadow-hard border border-gray-200 hover:border-primary transform hover:scale-105 transition-all duration-300">
        Meals
      </button>
    </div>
    </section>

    <!-- Gallery Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-16" id="gallery-grid">
      <!-- Academic Life -->
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="academic" data-aos="fade-up" data-aos-delay="100">
        <div class="relative overflow-hidden">
          <img src="assets/classroom.webp" alt="Academic Life" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Academic Life</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="academic" data-aos="fade-up" data-aos-delay="150">
        <div class="relative overflow-hidden">
          <img src="assets/pupils.jpg" alt="Academic Life 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Academic Life</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="academic" data-aos="fade-up" data-aos-delay="150">
        <div class="relative overflow-hidden">
          <img src="assets/classroom-2.webp" alt="Academic Life 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Academic Life</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="academic" data-aos="fade-up" data-aos-delay="200">
        <div class="relative overflow-hidden">
          <img src="assets/pupils-2.webp" alt="Academic Life 3" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Academic Life</p>
          </div>
        </div>
      </div>

      <!-- Events / Cultural -->
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/teachers-day.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/teachersday.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="300">
        <div class="relative overflow-hidden">
          <img src="assets/painting-1.webp" alt="Events 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/painting.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/spellingbee.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/spellingbee-1.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/spellingbee-2.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/spellingbee-3.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/chef.jpg" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/chef-1.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/livingstone.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/livingstone-1.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/livingstone-2.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/livingstone-3.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/culture.jpg" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/cooking.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/cooking-1.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/cooking-2.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/cooking-3.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/indepenceday.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/concert.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/concert-1.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/safariday.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/animalday.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/careersday.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/careersday-1.jpg" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/careersday-2.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/swimming.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/steam.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/steam-1.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/steam-2.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="cultural" data-aos="fade-up" data-aos-delay="250">
        <div class="relative overflow-hidden">
          <img src="assets/steam-3.webp" alt="Cultural Events" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Events</p>
          </div>
        </div>
      </div>

      <!-- Sports -->
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="sports" data-aos="fade-up" data-aos-delay="350">
        <div class="relative overflow-hidden">
          <img src="assets/sports.webp" alt="Sports Activity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Sports</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="sports" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/sportsday-1.jpg" alt="Sports 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Sports</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="sports" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/sportsday-2.webp" alt="Sports 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Sports</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="sports" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/sportsday-3.webp" alt="Sports 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Sports</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="sports" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/sportsday-4.webp" alt="Sports 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Sports</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="sports" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/sportsday-5.webp" alt="Sports 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Sports</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="sports" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/sportsday-6.webp" alt="Sports 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Sports</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="sports" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/sportsday-7.webp" alt="Sports 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Sports</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="sports" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/sportsday-8.webp" alt="Sports 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Sports</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="sports" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/sportsday-9.webp" alt="Sports 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Sports</p>
          </div>
        </div>
      </div>



      <!-- Community -->
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="community" data-aos="fade-up" data-aos-delay="450">
        <div class="relative overflow-hidden">
          <img src="assets/funding.webp" alt="Community Service" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Community</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="community" data-aos="fade-up" data-aos-delay="500">
        <div class="relative overflow-hidden">
          <img src="assets/child-fund.webp" alt="Community 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Community</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="community" data-aos="fade-up" data-aos-delay="500">
        <div class="relative overflow-hidden">
          <img src="assets/teachers-day.webp" alt="Community 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Community</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="community" data-aos="fade-up" data-aos-delay="500">
        <div class="relative overflow-hidden">
          <img src="assets/spicefm.webp" alt="Community 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Community</p>
          </div>
        </div>
      </div>

      <!-- Graduation -->
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="graduation" data-aos="fade-up" data-aos-delay="550">
        <div class="relative overflow-hidden">
          <img src="assets/prom.webp" alt="Graduation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Graduation</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="graduation" data-aos="fade-up" data-aos-delay="600">
        <div class="relative overflow-hidden">
          <img src="assets/prom-girls.webp" alt="Graduation 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Graduation</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="graduation" data-aos="fade-up" data-aos-delay="600">
        <div class="relative overflow-hidden">
          <img src="assets/graduation.webp" alt="Graduation 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Graduation</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="graduation" data-aos="fade-up" data-aos-delay="600">
        <div class="relative overflow-hidden">
          <img src="assets/graduation-1.webp" alt="Graduation 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Graduation</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="graduation" data-aos="fade-up" data-aos-delay="600">
        <div class="relative overflow-hidden">
          <img src="assets/graduation-2.webp" alt="Graduation 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Graduation</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="graduation" data-aos="fade-up" data-aos-delay="600">
        <div class="relative overflow-hidden">
          <img src="assets/graduation-3.webp" alt="Graduation 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Graduation</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="graduation" data-aos="fade-up" data-aos-delay="600">
        <div class="relative overflow-hidden">
          <img src="assets/graduation-4.webp" alt="Graduation 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Graduation</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="graduation" data-aos="fade-up" data-aos-delay="600">
        <div class="relative overflow-hidden">
          <img src="assets/graduation-5.webp" alt="Graduation 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Graduation</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="graduation" data-aos="fade-up" data-aos-delay="600">
        <div class="relative overflow-hidden">
          <img src="assets/graduation-6.webp" alt="Graduation 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Graduation</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="graduation" data-aos="fade-up" data-aos-delay="600">
        <div class="relative overflow-hidden">
          <img src="assets/graduation-7.webp" alt="Graduation 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Graduation</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="graduation" data-aos="fade-up" data-aos-delay="600">
        <div class="relative overflow-hidden">
          <img src="assets/graduation-8.webp" alt="Graduation 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Graduation</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="graduation" data-aos="fade-up" data-aos-delay="600">
        <div class="relative overflow-hidden">
          <img src="assets/graduation-9.webp" alt="Graduation 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Graduation</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="graduation" data-aos="fade-up" data-aos-delay="600">
        <div class="relative overflow-hidden">
          <img src="assets/graduation-10.webp" alt="Graduation 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Graduation</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="graduation" data-aos="fade-up" data-aos-delay="600">
        <div class="relative overflow-hidden">
          <img src="assets/drnene.webp" alt="Graduation 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Graduation</p>
          </div>
        </div>
      </div>
       <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="graduation" data-aos="fade-up" data-aos-delay="600">
        <div class="relative overflow-hidden">
          <img src="assets/Dr. Nene.webp" alt="Graduation 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Graduation</p>
          </div>
        </div>
      </div>

      <!-- Classroom -->
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="classroom" data-aos="fade-up" data-aos-delay="650">
        <div class="relative overflow-hidden">
          <img src="assets/classroom-2.webp" alt="Classroom Learning" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Classroom</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="classroom" data-aos="fade-up" data-aos-delay="700">
        <div class="relative overflow-hidden">
          <img src="assets/classroom.webp" alt="Classroom 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Classroom</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="classroom" data-aos="fade-up" data-aos-delay="700">
        <div class="relative overflow-hidden">
          <img src="assets/class.webp" alt="Classroom 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Classroom</p>
          </div>
        </div>
      </div>


      <!-- Science -->
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="science" data-aos="fade-up" data-aos-delay="750">
        <div class="relative overflow-hidden">
          <img src="assets/steam-3.webp" alt="Science Fair" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Science & STEM</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="science" data-aos="fade-up" data-aos-delay="800">
        <div class="relative overflow-hidden">
          <img src="assets/chef-1.webp" alt="Science 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Science</p>
          </div>
        </div>
      </div>

      <!-- Arts & Creativity -->
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="arts" data-aos="fade-up" data-aos-delay="820">
        <div class="relative overflow-hidden">
          <img src="assets/painting.webp" alt="Arts & Creativity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Arts & Creativity</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="arts" data-aos="fade-up" data-aos-delay="840">
        <div class="relative overflow-hidden">
          <img src="assets/painting-1.webp" alt="Arts & Creativity 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Arts & Creativity</p>
          </div>
        </div>
      </div>

      <!-- Field Trips -->
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="fieldtrips" data-aos="fade-up" data-aos-delay="860">
        <div class="relative overflow-hidden">
          <img src="assets/livingstone-2.webp" alt="Field Trips" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Field Trips</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="fieldtrips" data-aos="fade-up" data-aos-delay="880">
        <div class="relative overflow-hidden">
          <img src="assets/livingstone-3.webp" alt="Field Trips 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Field Trips</p>
          </div>
        </div>
      </div>

      <!-- Leadership & Clubs -->
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="leadership" data-aos="fade-up" data-aos-delay="900">
        <div class="relative overflow-hidden">
          <img src="assets/spellingbee.webp" alt="Leadership & Clubs" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Leadership & Clubs</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="leadership" data-aos="fade-up" data-aos-delay="920">
        <div class="relative overflow-hidden">
          <img src="assets/careersday.webp" alt="Leadership & Clubs 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Leadership & Clubs</p>
          </div>
        </div>
      </div>

      <!-- Campus & Facilities -->
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="facilities" data-aos="fade-up" data-aos-delay="940">
        <div class="relative overflow-hidden">
          <img src="assets/Milestone.webp" alt="Campus & Facilities" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Campus & Facilities</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="facilities" data-aos="fade-up" data-aos-delay="960">
        <div class="relative overflow-hidden">
          <img src="assets/Background-school.webp" alt="Campus & Facilities 2" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Campus & Facilities</p>
          </div>
        </div>
      </div>

      <!-- Staff -->
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="staff" data-aos="fade-up" data-aos-delay="850">
        <div class="relative overflow-hidden">
          <img src="assets/staff.webp" alt="Staff" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Staff</p>
          </div>
        </div>
      </div>
            <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="staff" data-aos="fade-up" data-aos-delay="890">
        <div class="relative overflow-hidden">
          <img src="assets/Mr. Prosper Muziya.jpg" alt="Staff - Mr. Muziya" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Staff</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="staff" data-aos="fade-up" data-aos-delay="890">
        <div class="relative overflow-hidden">
          <img src="assets/mrchola.webp" alt="Staff - Mr. Muziya" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Staff</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="staff" data-aos="fade-up" data-aos-delay="890">
        <div class="relative overflow-hidden">
          <img src="assets/mrkunda.webp" alt="Staff - Mr. Muziya" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Staff</p>
          </div>
        </div>
      </div>

      <!-- Literacy and Reading -->
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="literacy" data-aos="fade-up" data-aos-delay="980">
        <div class="relative overflow-hidden">
          <img src="assets/reading.webp" alt="Literacy and Reading" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Literacy and Reading</p>
          </div>
        </div>
      </div>
  

<!--Transport-->
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (5).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (3).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
    
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (38).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
     
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (34).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (24).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (19).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
    
    
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (27).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (15).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (34).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (33).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (39).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (43).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (23).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (40).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
   
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (2).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (19).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (20).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (16).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (14).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (13).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (12).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (11).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>
        <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="transport" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/Transport (10).webp" alt="transportation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Transportation</p>
          </div>
        </div>
      </div>

      <!-- Meals / Lunch -->
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="lunch" data-aos="fade-up" data-aos-delay="400">
        <div class="relative overflow-hidden">
          <img src="assets/meal.webp" alt="Meals" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Meals</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="lunch" data-aos="fade-up" data-aos-delay="420">
        <div class="relative overflow-hidden">
          <img src="assets/meal1.webp" alt="Meals" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Meals</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="lunch" data-aos="fade-up" data-aos-delay="440">
        <div class="relative overflow-hidden">
          <img src="assets/meal2.webp" alt="Meals" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Meals</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="lunch" data-aos="fade-up" data-aos-delay="460">
        <div class="relative overflow-hidden">
          <img src="assets/meal3.webp" alt="Meals" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Meals</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="lunch" data-aos="fade-up" data-aos-delay="480">
        <div class="relative overflow-hidden">
          <img src="assets/meal4.webp" alt="Meals" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Meals</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="lunch" data-aos="fade-up" data-aos-delay="500">
        <div class="relative overflow-hidden">
          <img src="assets/meal5.webp" alt="Meals" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Meals</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="lunch" data-aos="fade-up" data-aos-delay="520">
        <div class="relative overflow-hidden">
          <img src="assets/meal6.webp" alt="Meals" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Meals</p>
          </div>
        </div>
      </div>
      <div class="gallery-item group block overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2" data-category="lunch" data-aos="fade-up" data-aos-delay="540">
        <div class="relative overflow-hidden">
          <img src="assets/meal7.webp" alt="Meals" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="font-semibold">Meals</p>
          </div>
        </div>
      </div>
        </div>


    <!-- Quote Section -->
    <section class="mt-16 text-center max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="900">
      <div class="bg-gradient-to-br from-primary/10 via-teal-50 to-accent/10 p-10 rounded-2xl border-l-4 border-primary">
        <blockquote class="italic text-xl md:text-2xl text-gray-700 font-medium">
          "Every photograph is a milestone, a reflection of our journey, our achievements, and our shared commitment to shaping bright futures."
        </blockquote>
        <p class="mt-4 text-gray-600 font-semibold">Milestone School</p>
      </div>
    </section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
