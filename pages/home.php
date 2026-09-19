<?php
$pageTitle = 'Milestone School - Humble Grooming for a Bright Future | Kabwe, Zambia';
$metaDescription = 'Milestone School in Kabwe, Zambia offers quality education with a focus on holistic development. Discover our academic programs, extracurricular activities, and nurturing learning environment.';
$metaKeywords = 'Milestone School, Kabwe, Zambia, education, primary school, secondary school, quality education, holistic development';
$ogTitle = 'Milestone School - Humble Grooming for a Bright Future';
$ogDescription = 'Quality education in Kabwe, Zambia. Discover our academic programs, extracurricular activities, and nurturing learning environment.';
$canonicalPath = '/';
$activeNav = 'home';
$bodyClass = 'home-page-bg bg-cover bg-center bg-no-repeat';
$bodyStyle = '';
$mainClass = '';
$darkOverlay = '<div class="bg-black bg-opacity-70 h-full w-full rounded">';
$afterSkipLink = <<<'HTML'
  <!-- Preloader -->
  <div id="preloader" role="status" aria-label="Loading page">
    <div id="spinner"></div>
  </div>
HTML;
$extraHead = <<<'HTML'
  <meta name="author" content="Milestone School">
  <meta property="og:site_name" content="Milestone School">
  <meta property="og:locale" content="en_US">

  <!-- Structured Data (JSON-LD) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "EducationalOrganization",
    "name": "Milestone School",
    "alternateName": "Milestone School Kabwe",
    "url": "https://milestoneschool.education",
    "logo": "https://milestoneschool.education/assets/logo.png",
    "description": "Milestone School offers quality education with a focus on holistic development in Kabwe, Zambia.",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "House No. 31 Holly Street",
      "addressLocality": "Kabwe",
      "addressCountry": "ZM"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+260-978-443-323",
      "contactType": "Administrative",
      "email": "milestoneschool.education@gmail.com"
    },
    "sameAs": [
      "https://www.facebook.com/share/1CVBoLNmru/",
      "https://wa.me/260978443323"
    ]
  }
  </script>

  <!-- Preload only truly critical resources -->
  <link rel="preload" href="/assets/logo.png" as="image">
HTML;
require __DIR__ . '/../includes/header.php';
?>
      <!-- Hero Section with Particles Background -->
<section class="relative min-h-[85vh] flex items-center overflow-hidden bg-gradient-to-br from-primary via-teal-500 to-accent">
  <!-- Animated Background Elements -->
  <div class="absolute inset-0">
    <div class="absolute top-20 left-10 w-72 h-72 bg-white/10 rounded-full mix-blend-overlay filter blur-3xl animate-pulse-slow"></div>
    <div class="absolute bottom-20 right-10 w-72 h-72 bg-secondary/20 rounded-full mix-blend-overlay filter blur-3xl animate-pulse-slow delay-1000"></div>
    <div class="absolute top-1/2 left-1/3 w-64 h-64 bg-accent/30 rounded-full mix-blend-overlay filter blur-3xl animate-pulse-slow delay-500"></div>
  </div>

  <div class="slide-in-left container relative mx-auto px-4 sm:px-6 py-20">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <!-- Left Content -->
      <div class="relative z-20 slide-in-left text-white animate-slide-up">
        <span class="inline-flex items-center px-4 py-2 rounded-full bg-white/20 backdrop-blur-sm text-sm font-semibold mb-6 animate-fade-in">
          <i class="fas fa-star mr-2 text-secondary"></i>
          Excellence in Education Since 2009
        </span>
        
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
          Shaping Tomorrow's
          <span class="block text-secondary animate-float">Leaders Today</span>
        </h1>
        
        <p class="text-xl mb-8 text-white/90 max-w-2xl">
          At Milestone School, we blend modern teaching methods with traditional values to provide holistic education that nurtures curiosity, discipline, and creativity in every learner.
        </p>
        
        <div class="relative z-30 flex max-w-full flex-wrap items-center gap-2 lg:flex-nowrap lg:gap-3" data-hero-actions>
          <a href="admissions" 
             class="inline-flex shrink-0 items-center whitespace-nowrap px-4 py-3 text-sm bg-white text-primary font-bold rounded-full shadow-hard hover:shadow-glow transform hover:-translate-y-1 transition-all duration-300 group">
            Start Your Journey
            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
          </a>
          
          <a href="about" 
             class="inline-flex shrink-0 items-center whitespace-nowrap px-4 py-3 text-sm bg-transparent border-2 border-white/50 text-white font-semibold rounded-full hover:bg-white/10 hover:border-white transition-all duration-300 group">
            <i class="fas fa-play-circle mr-2"></i>
            Explore Our Campus
          </a>

          <a href="https://portal.milestoneschoolzambia.com"
             target="_blank"
             rel="noopener noreferrer"
             class="inline-flex shrink-0 items-center whitespace-nowrap px-4 py-3 text-sm bg-secondary text-white font-bold rounded-full shadow-hard hover:shadow-glow transform hover:-translate-y-1 transition-all duration-300 group">
            <i class="fas fa-user-graduate mr-2"></i>
            Student Portal
            <i class="fas fa-arrow-up-right-from-square ml-2 text-sm group-hover:translate-x-1 transition-transform"></i>
          </a>
        </div>

        <!-- Stats Counter -->
        <div class="mt-12 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
          <div class="rounded-2xl border border-white/15 bg-white/10 px-5 py-6 text-center shadow-hard backdrop-blur-sm">
            <div class="text-3xl md:text-4xl font-bold text-secondary mb-2 counter" data-target="400">0</div>
            <p class="text-sm font-medium tracking-wide text-white/80">Students Enrolled</p>
          </div>
          <div class="rounded-2xl border border-white/15 bg-white/10 px-5 py-6 text-center shadow-hard backdrop-blur-sm">
            <div class="text-3xl md:text-4xl font-bold text-secondary mb-2 counter" data-target="35">0</div>
            <p class="text-sm font-medium tracking-wide text-white/80">Qualified Staff</p>
          </div>
          <div class="rounded-2xl border border-white/15 bg-white/10 px-5 py-6 text-center shadow-hard backdrop-blur-sm sm:col-span-2 lg:col-span-1">
            <div class="text-3xl md:text-4xl font-bold text-secondary mb-2 counter" data-target="17">0</div>
            <p class="text-sm font-medium tracking-wide text-white/80">Years Excellence</p>
          </div>
        </div>
      </div>

      <!-- Right Content - 3D Image/Illustration -->
      <div class="relative isolate px-4 py-4 md:px-6 md:py-6 animate-slide-up delay-300">
        <div class="relative z-0 overflow-hidden rounded-2xl">
          <div class="absolute -inset-4 z-0 bg-gradient-to-r from-secondary to-orange-400 rounded-3xl blur-2xl opacity-30 animate-pulse"></div>
          <img id="slideshow"
                 src="assets/pupils-hero.webp" 
                 alt="Milestone School Students"
                 class="relative z-10 block w-full aspect-[14/9] max-h-[42vw] rounded-2xl shadow-2xl object-cover transition-opacity duration-1000 ease-in-out"
                 width="1400" height="900"
                 loading="eager"
                 decoding="async"
                 onerror="this.src='assets/pupils.jpg'">

          <img id="slide-next"
                 src="assets/pupils-hero.webp"
                 class="absolute inset-0 z-10 block w-full h-full object-cover rounded-2xl opacity-0 transition-opacity duration-1000 ease-in-out pointer-events-none"
                 alt="Next Slide"
                 width="1400" height="900"
                 loading="lazy"
                 decoding="async"
                 aria-hidden="true"
                 onerror="this.src='assets/pupils.jpg'">
        </div>
        
        <!-- Floating Badges -->
        <div class="absolute z-30 top-0 right-0 bg-white p-4 rounded-2xl shadow-hard animate-float">
          <div class="flex items-center space-x-3">
            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
              <i class="fas fa-award text-primary text-xl"></i>
            </div>
            <div>
              <p class="font-bold text-dark">Top Rated</p>
              <p class="text-sm text-gray-500">School in Kabwe</p>
            </div>
          </div>
        </div>
        
        <div class="absolute z-30 bottom-0 left-0 bg-white p-4 rounded-2xl shadow-hard animate-float delay-1000">
          <div class="flex items-center space-x-3">
            <div class="w-12 h-12 bg-accent/10 rounded-full flex items-center justify-center">
              <i class="fas fa-users text-accent text-xl"></i>
            </div>
            <div>
              <p class="font-bold text-dark">100%</p>
              <p class="text-sm text-gray-500">Parent Satisfaction</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Scroll Indicator -->
  <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce-slow">
    <a href="#about" class="text-white/70 hover:text-white transition-colors">
      <i class="fas fa-chevron-down text-2xl"></i>
    </a>
  </div>
</section> 

      <!-- Why Choose Us Cards -->
      <section id="why-us" class="py-20 relative overflow-hidden bg-gradient-to-br from-gray-50 via-white to-teal-50">
        <!-- Decorative Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
          <div class="absolute top-0 right-0 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
          <div class="absolute bottom-0 left-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
        </div>
        
        <div data-aos="fade-up" data-aos-delay="100" class="font-semibold container mx-auto text-center relative z-10">
          <div class="mb-4">
            <span class="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-4">
              Why Choose Us
            </span>
          </div>
          <h2 class="font-bold mb-16 text-gray-800 text-4xl md:text-5xl">
            Excellence in Every Aspect
          </h2>
          <div class="grid md:grid-cols-3 gap-8 px-6">

            <div data-aos="fade-up" data-aos-delay="100" class="group bg-white p-8 rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2 border border-gray-100">
              <div class="w-16 h-16 bg-gradient-to-br from-primary to-teal-500 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-book-open text-white text-2xl"></i>
              </div>
              <h3 class="text-2xl font-bold text-gray-800 mb-4">Quality Education</h3>
              <p class="text-gray-600 leading-relaxed">We focus on holistic learning to prepare students for a successful future with innovative teaching methods.</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="200" class="group bg-white p-8 rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2 border border-gray-100">
              <div class="w-16 h-16 bg-gradient-to-br from-secondary to-orange-400 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-user-tie text-white text-2xl"></i>
              </div>
              <h3 class="text-2xl font-bold text-gray-800 mb-4">Experienced Staff</h3>
              <p class="text-gray-600 leading-relaxed">Our teachers are passionate about inspiring and guiding young learners toward excellence.</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="300" class="group bg-white p-8 rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2 border border-gray-100">
              <div class="w-16 h-16 bg-gradient-to-br from-accent to-teal-400 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-users text-white text-2xl"></i>
              </div>
              <h3 class="text-2xl font-bold text-gray-800 mb-4">Community Spirit</h3>
              <p class="text-gray-600 leading-relaxed">We nurture respect, teamwork, and inclusivity in a supportive environment.</p>
            </div>

          </div>

          <!-- Join Us Now Button -->
          <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="400">
            <a href="https://wa.me/260978443323?text=Hello%20Milestone%20School%2C%20I%20would%20like%20to%20make%20an%20enquiry." target="_blank" class="group/btn inline-flex items-center px-8 py-4 bg-gradient-to-r from-green-500 to-green-600 text-white font-bold rounded-full shadow-hard hover:shadow-glow transform hover:scale-105 transition-all duration-300">
              <i class="fab fa-whatsapp mr-2"></i>
              Join Us Now
              <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
            </a>
          </div>
        </div>
      </section>

      <!-- About Us Cards -->
      <section id="about" class="py-20 relative overflow-hidden bg-gradient-to-br from-primary via-teal-600 to-accent">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
          <div class="absolute inset-0" style="background-image: url('assets/stem.webp'); background-size: cover; background-position: center; filter: blur(2px);"></div>
        </div>
        
        <div class="container mx-auto text-center px-6 relative z-10">
          <div class="mb-4">
            <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm text-white rounded-full text-sm font-semibold mb-4">
              Our Story
            </span>
          </div>
          <h2 data-aos="fade-up" class="text-white text-4xl md:text-5xl font-bold mb-16 text-shadow-lg">About Us</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start pb-20">

            <div data-aos="fade-up" data-aos-delay="100" class="group bg-white/95 backdrop-blur-sm p-8 rounded-2xl shadow-hard transform transition-all duration-500 hover:-translate-y-2 hover:shadow-glow text-left h-full border border-white/20">
              <div class="flex items-center justify-center mb-6">
                <div class="w-14 h-14 bg-gradient-to-br from-primary to-teal-500 rounded-xl flex items-center justify-center">
                  <i class="fas fa-history text-white text-xl"></i>
                </div>
              </div>
              <h2 class="text-2xl font-bold text-primary mb-6 text-center">Our History</h2>
              <p class="text-gray-700 leading-relaxed mb-6">Founded in 2009, Milestone School began as a modest educational initiative with a clear vision...</p>
              <div class="flex justify-center">
                <a href="about#history" class="group/btn inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-teal-500 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                  Read More
                  <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
                </a>
              </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="200" class="group bg-white/95 backdrop-blur-sm p-8 rounded-2xl shadow-hard transform transition-all duration-500 hover:-translate-y-2 hover:shadow-glow text-left h-full border border-white/20">
              <div class="flex items-center justify-center mb-6">
                <div class="w-14 h-14 bg-gradient-to-br from-secondary to-orange-400 rounded-xl flex items-center justify-center">
                  <i class="fas fa-bullseye text-white text-xl"></i>
                </div>
              </div>
              <h2 class="text-2xl font-bold text-primary mb-4 text-center">Our Mission</h2>
              <p class="text-gray-700 leading-relaxed mb-6">At Milestone School, our mission is to provide a holistic education that goes beyond academic success...</p>
              <div class="flex justify-center">
                <a href="about#mission" class="group/btn inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-teal-500 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                  Read More
                  <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
                </a>
              </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="300" class="group bg-white/95 backdrop-blur-sm p-8 rounded-2xl shadow-hard transform transition-all duration-500 hover:-translate-y-2 hover:shadow-glow text-left h-full border border-white/20">
              <div class="flex items-center justify-center mb-6">
                <div class="w-14 h-14 bg-gradient-to-br from-accent to-teal-400 rounded-xl flex items-center justify-center">
                  <i class="fas fa-eye text-white text-xl"></i>
                </div>
              </div>
              <h2 class="text-2xl font-bold text-primary mb-4 text-center">Our Vision</h2>
              <p class="text-gray-700 leading-relaxed mb-6">We aspire to be a leading educational institution in Central Province, recognized for excellence and innovation...</p>
              <div class="flex justify-center">
                <a href="about#vision" class="group/btn inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-teal-500 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                  Read More
                  <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
                </a>
              </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="400" class="group bg-white/95 backdrop-blur-sm p-8 rounded-2xl shadow-hard transform transition-all duration-500 hover:-translate-y-2 hover:shadow-glow text-left h-full border border-white/20">
              <div class="flex items-center justify-center mb-6">
                <div class="w-14 h-14 bg-gradient-to-br from-primary to-accent rounded-xl flex items-center justify-center">
                  <i class="fas fa-heart text-white text-xl"></i>
                </div>
              </div>
              <h2 class="text-2xl font-bold text-primary mb-4 text-center">Our Core Values</h2>
              <ul class="list-none space-y-3 text-gray-700 mb-6">
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-teal-500 mt-1 mr-3 text-lg"></i>
                  <div><strong class="text-primary">Integrity:</strong> Upholding honesty and strong moral principles in all we do.</div>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-teal-500 mt-1 mr-3 text-lg"></i>
                  <div><strong class="text-primary">Excellence:</strong> Striving for the highest standards in academics and personal growth.</div>
                </li>
              </ul>
              <div class="flex justify-center">
                <a href="about#values" class="group/btn inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-teal-500 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                  Read More
                  <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
                </a>
              </div>
            </div>

            <!-- Commitment -->
            <div data-aos="fade-up" data-aos-delay="500" class="md:col-span-2 mb-12 bg-white/95 backdrop-blur-sm p-10 rounded-2xl shadow-hard max-w-4xl mx-auto text-center md:mt-8 border border-white/20">
              <div class="flex items-center justify-center mb-6">
                <div class="w-16 h-16 bg-gradient-to-br from-secondary to-orange-400 rounded-2xl flex items-center justify-center">
                  <i class="fas fa-handshake text-white text-2xl"></i>
                </div>
              </div>
              <h2 class="text-3xl font-bold text-primary mb-6">Our Commitment</h2>
              <p class="text-gray-700 leading-relaxed text-lg mb-8 max-w-2xl mx-auto">Milestone School continues to build upon its legacy by integrating ICT education and modern teaching methodologies to prepare students for the future.</p>
              <div class="flex justify-center">
                <a href="about#commitment" class="group/btn inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary to-teal-500 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                  Read More
                  <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
                </a>
              </div>
            </div>

            <!-- Duties -->
            <div data-aos="fade-up" data-aos-delay="600" class="md:col-span-2 mb-20 bg-white/95 backdrop-blur-sm p-10 rounded-2xl shadow-hard max-w-4xl mx-auto text-center md:mt-8 border border-white/20">
              <div class="flex items-center justify-center mb-6">
                <div class="w-16 h-16 bg-gradient-to-br from-accent to-teal-400 rounded-2xl flex items-center justify-center">
                  <i class="fas fa-tasks text-white text-2xl"></i>
                </div>
              </div>
              <h2 class="text-3xl font-bold text-primary mb-6">Our Duties</h2>
              <p class="text-gray-700 leading-relaxed text-lg mb-8 max-w-2xl mx-auto">At Milestone School, our duties focus on creating a nurturing environment that fosters academic excellence and personal growth.</p>
              <div class="flex justify-center">
                <a href="about#duties" class="group/btn inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary to-teal-500 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                  Read More
                  <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
                </a>
              </div>
            </div>

   <div data-aos="fade-up" data-aos-delay="700"
     class="md:col-span-2 mb-20 bg-white/95 backdrop-blur-sm p-16 md:p-20 shadow-hard max-w-5xl mx-auto border border-white/20">

  <div class="flex flex-col md:flex-row justify-center items-center gap-12 px-4 md:px-8">
<!-- Image section -->
<div class="relative max-w-xl group">
  <div class="absolute -inset-2 bg-gradient-to-r from-primary to-teal-500 rounded-3xl blur-xl opacity-30 group-hover:opacity-60 transition-opacity duration-500"></div>
  <img
      src="assets/school.webp"
      alt="Milestone school campus"
      class="relative shadow-hard w-200px h-100px object-cover transform group-hover:scale-105 transition-transform duration-500"
      width="1200" height="900"
      loading="lazy"
      decoding="async"
    >
</div>

    <!-- Text section -->
    <div class="max-w-xl text-left px-4 md:px-0">
      <h2 class="text-6xl text-primary font-bold mb-4">
        Milestone School
      </h2>

      <h3 class="text-2xl font-semibold mb-4 text-primary-light italic">
        Humble grooming for a Bright Future...<br>
        Nurturing Excellence Since 2009
      </h3>

      <p class="text-gray-700 leading-relaxed mb-8">
        Milestone School provides a learner centered environment that promotes academic
        excellence, strong ,<br> character, and practical skills for life beyond the classroom.
        Our dedicated staff guides each learner with <br> care, creativity, and purpose,
        using innovative teaching methods and a balanced, holistic approach to education.
        We encourage curiosity, discipline, and confidence, helping every child grow
        into a responsible, capable, and forward thinking individual.
        Join us as we nurture minds, shape values, and prepare tomorrow's leaders today.
      </p>
        <div class="flex justify-center mb-6">
                <a href="about" class="group/btn inline-flex items-center px-6 py-2 bg-gradient-to-r from-secondary to-orange-400 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                  Read More
                  <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
                </a>
              </div>
    </div>

  </div>
</div>

<div class="md:col-span-2 mb-20 bg-white/95 backdrop-blur-sm p-10 shadow-hard max-w-5xl mx-auto text-center border border-white/20" data-aos="fade-up">
 <div class="w-16 h-16 bg-gradient-to-br from-accent to-primary rounded-2xl flex items-center justify-center mb-6 mx-auto">
                <i class="fas fa-play-circle text-white text-2xl"></i>
              </div>
  <h2 class="text-3xl font-bold text-primary mb-6">
    Milestone School Video
  </h2>

  <p class="text-gray-700 leading-relaxed text-lg mb-8 max-w-2xl mx-auto">
    Experience life at Milestone School through this short video that reflects
    our learning environment.
  </p>

  <div class="relative w-full max-w-2xl mx-auto overflow-hidden shadow-hard rounded-2xl video-thumbnail-container" data-video-src="assets/milestone-optimized.mp4">
    <div class="video-thumbnail-wrapper relative w-full cursor-pointer group">
      <img src="assets/milestone-thumb.webp" alt="Milestone School Video Thumbnail" class="w-full h-auto rounded-2xl" width="1280" height="960" loading="lazy" decoding="async" onerror="this.src='assets/pupils-hero.webp'">
      <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-colors rounded-2xl"></div>
      <div class="absolute inset-0 flex items-center justify-center">
        <div class="w-20 h-20 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform shadow-2xl">
          <i class="fas fa-play text-primary text-3xl ml-1"></i>
        </div>
      </div>
    </div>
    <video class="hidden w-full h-auto rounded-2xl" controls controlsList="nodownload noremoteplayback" disablePictureInPicture oncontextmenu="return false" preload="none" poster="assets/milestone-thumb.webp" width="1280" height="960">
      <source src="assets/milestone-optimized.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>

</div>

<div data-aos="fade-up" data-aos-delay="800" class="md:col-span-2 mb-24 bg-white/95 backdrop-blur-sm p-10 shadow-hard max-w-5xl mx-auto text-center border border-white/20">
 <div class="w-16 h-16 bg-gradient-to-br from-accent to-primary rounded-2xl flex items-center justify-center mb-6 mx-auto">
                <i class="fas fa-play-circle text-white text-2xl"></i>
              </div>
  <!-- Heading -->
  <h2 class="text-3xl font-bold text-primary mb-6">Reading in Action</h2>

  <!-- Optional Description -->
  <p class="text-gray-700 leading-relaxed text-lg mb-8 max-w-2xl mx-auto">
    Watch our learners engage with literacy activities and reading programs.
  </p>

  <!-- Video -->
  <div class="relative w-full max-w-6xl mx-auto overflow-hidden rounded-2xl shadow-hard video-thumbnail-container" data-video-src="assets/Milestonevideo-optimized.mp4">
    <div class="video-thumbnail-wrapper relative w-full cursor-pointer group">
      <img src="assets/Milestonevideo-thumb.webp" alt="Milestone School Video Thumbnail" class="w-full h-auto rounded-2xl" width="852" height="480" loading="lazy" decoding="async" onerror="this.src='assets/pupils-hero.webp'">
      <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-colors rounded-2xl"></div>
      <div class="absolute inset-0 flex items-center justify-center">
        <div class="w-24 h-24 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform shadow-2xl">
          <i class="fas fa-play text-primary text-4xl ml-1"></i>
        </div>
      </div>
    </div>
    <video class="hidden w-full h-auto rounded-2xl" controls controlsList="nodownload noremoteplayback" disablePictureInPicture oncontextmenu="return false" preload="none" poster="assets/Milestonevideo-thumb.webp" width="852" height="480">
      <source src="assets/Milestonevideo-optimized.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>

</div>

      </section>

      <!-- Literacy and Reading Section -->
      <!-- our services -->
      <section id="what-we-offer" class="py-20 relative overflow-hidden bg-gradient-to-br from-gray-50 via-white to-teal-50">
        <!-- Decorative Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
          <div class="absolute top-0 right-0 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
          <div class="absolute bottom-0 left-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
        </div>
        

        <div class="container mx-auto px-6 relative z-10">
          <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-4">
              What we Offer
            </span>
            <h2 data-aos="fade-up" class="text-primary text-4xl md:text-5xl font-bold mb-4">Foundation of Learning</h2>
            <p class="text-primary-light text-lg max-w-3xl mx-auto italic">Building strong reading, writing, and comprehension skills from the early years</p>
          </div>

          <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
            <!-- Content -->
            <div data-aos="fade-up" data-aos-delay="100">
              <div class="bg-white p-8 rounded-2xl shadow-soft border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-primary to-accent rounded-2xl flex items-center justify-center mb-6">
                  <i class="fas fa-book-open text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Our Literacy Approach</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                  Literacy and reading form the foundation of learning at Milestone School. From the early years, learners are systematically guided to develop strong reading, writing, and comprehension skills through structured phonics, guided reading, and regular practice across all subjects. Our approach emphasizes understanding, fluency, and confidence, enabling learners to read with purpose rather than simply recognize words. As a result of this consistent and focused approach, over 99 percent of our learners are able to read at or above their expected level, providing a strong academic base that supports success in all areas of learning.
                </p>

                <div class="flex flex-wrap gap-4">
                <a href="gallery?filter=literacy" class="group/btn inline-flex items-center px-6 py-2 bg-gradient-to-r from-primary to-accent text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                  View Reading Gallery
                  <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
                </a>
                 <a href="admissions" class="group/btn inline-flex items-center px-6 py-2 bg-gradient-to-r from-secondary to-orange-400 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 ml-4">
                  Join Us Today
                  <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
                  </a>
              </div>
            </div>
          </div>

            <!-- Photos Grid -->
            <div data-aos="fade-up" data-aos-delay="200">
              <div class="grid grid-cols-2 gap-4">
                <div class="group overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2">
                  <img src="assets/reading.webp" alt="Reading Activity" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" width="300" height="192" loading="lazy">
                </div>
                <div class="group overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2">
                  <img src="assets/classroom.webp" alt="Classroom Reading" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" width="300" height="192" loading="lazy">
                </div>
                <div class="group overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2">
                  <img src="assets/pupils.jpg" alt="Students Reading" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" width="300" height="192" loading="lazy">
                </div>
                <div class="group overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2">
                  <img src="assets/class.webp" alt="Reading Session" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" width="300" height="192" loading="lazy">
                </div>
              </div>
            </div>
          </div>

        </div>

           <h2 data-aos="fade-up" class="text-primary text-4xl md:text-5xl font-bold mb-4 text-center">School Lunch Program</h2>
            <p class="text-primary-light text-lg max-w-3xl mx-auto mb-20 text-center italic">Nourishing young minds with healthy and balanced meals</p>

      <div class="grid lg:grid-cols-2 gap-12 items-center mb-16 mt-16">
            <!-- Content -->
            <div data-aos="fade-up" data-aos-delay="100">
              <div class="bg-white p-8 rounded-2xl shadow-soft border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-primary to-accent rounded-2xl flex items-center justify-center mb-6">
                  <i class="fas fa-utensils text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Healthy Meals for Growing Minds</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                 Lunch services at Milestone School are designed to support the health, growth, and concentration of our learners throughout the school day. We provide balanced and nutritious meals that meet the needs of growing children, prepared with careful attention to hygiene, portion control, and dietary balance. Our lunch program follows a structured weekly menu system, ensuring variety and consistency while introducing learners to well planned meals across the week. This approach helps learners remain energized, focused, and ready to participate fully in learning activities. By promoting healthy eating habits at school, we contribute to both strong academic performance and the overall wellbeing of every learner.
                </p>

                <div class="flex flex-wrap gap-4">
                <a href="gallery?filter=lunch" class="group/btn inline-flex items-center px-6 py-2 bg-gradient-to-r from-primary to-accent text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                  View Lunch Gallery
                  <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
                </a>
                  <a href="assets/2026 LUNCH MENU.pdf" class="group/btn inline-flex items-center px-6 py-2 bg-gradient-to-r from-primary to-accent text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 ml-4">
                  View Menu
                  </a>
                 <a href="admissions" class="group/btn inline-flex items-center px-6 py-2 bg-gradient-to-r from-secondary to-orange-400 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 ml-4">
                  Join Us Today
                  <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
                  </a>

              </div>
            </div>
            </div>

            <!-- Photos Grid -->
            <div data-aos="fade-up" data-aos-delay="200">
              <div class="grid grid-cols-2 gap-4">
                <div class="group overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2">
                  <img src="assets/meal.webp" alt="Healthy Meal" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" width="300" height="192" loading="lazy">
                </div>
                <div class="group overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2">
                  <img src="assets/meal1.webp" alt="Healthy Meal" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" width="300" height="192" loading="lazy">
                </div>
                <div class="group overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2">
                  <img src="assets/meal2.webp" alt="Healthy Meal" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" width="300" height="192" loading="lazy">
                </div>
                <div class="group overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2">
                  <img src="assets/meal3.webp" alt="Healthy Meal" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" width="300" height="192" loading="lazy">
                </div>
              </div>
            </div>
          </div>

             <h2 data-aos="fade-up" class="text-primary text-4xl md:text-5xl font-bold mb-4 text-center">School Transport Services</h2>
            <p class="text-primary-light text-lg max-w-3xl mx-auto mb-16 text-center italic">Ensuring safe and reliable transportation for our learners</p>

          <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
            <!-- Content -->
            <div data-aos="fade-up" data-aos-delay="100">
              <div class="bg-white p-8 rounded-2xl shadow-soft border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-primary to-accent rounded-2xl flex items-center justify-center mb-6">
                  <i class="fas fa-bus text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Safe and Reliable School Transport</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                Transport services at Milestone School are provided to ensure the safe, reliable, and timely movement of learners to and from school. Our school transport system follows planned routes and schedules that are designed to support punctuality and reduce daily travel stress for both learners and parents. We operate under clear safety guidelines, with responsible supervision to ensure learners are well cared for during transit. By offering an organized and dependable transport service, the school supports regular attendance, learner safety, and peace of mind for families.
                </p>
              
                <div class="flex flex-wrap gap-4">
                <a href="gallery?filter=transport" class="group/btn inline-flex items-center px-6 py-2 bg-gradient-to-r from-primary to-accent text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                  View Transport Gallery
                  <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
                </a>
                <a href="admissions" class="group/btn inline-flex items-center px-6 py-2 bg-gradient-to-r from-secondary to-orange-400 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 ml-4">
                  Join Us Today
                  <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
                  </a>
              </div>
            </div>
            </div>  

            <!-- Photos Grid -->
            <div data-aos="fade-up" data-aos-delay="200">
              <div class="grid grid-cols-2 gap-4">
                <div class="group overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2">
                  <img src="assets/Transport (20).webp" alt="Transport Activity" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" width="300" height="192" loading="lazy">
                </div>
                <div class="group overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2">
                  <img src="assets/Transport (26).webp" alt="Transport Service" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" width="300" height="192" loading="lazy">
                </div>
                <div class="group overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2">
                  <img src="assets/Transport (39).webp" alt="School Transport" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" width="300" height="192" loading="lazy">
                </div>
                <div class="group overflow-hidden rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2">
                  <img src="assets/Transport (14).webp" alt="Transport Fleet" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" width="300" height="192" loading="lazy">
                </div>
              </div>
            </div>
          </div>
      </section>

      <!-- Academics Cards -->
      <section id="academics" class="py-20 relative overflow-hidden bg-gradient-to-br from-gray-50 via-white to-primary/5">
        <!-- Decorative Background -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
          <div class="absolute top-20 right-20 w-72 h-72 bg-accent/10 rounded-full blur-3xl"></div>
          <div class="absolute bottom-20 left-20 w-72 h-72 bg-secondary/10 rounded-full blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
          <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-4">
              Our Programs
            </span>
            <h2 data-aos="fade-up" class="text-gray-800 text-4xl md:text-5xl font-bold mb-4">Academics</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Comprehensive educational programs designed to nurture excellence and innovation</p>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start pb-20 mb-20">

            <div data-aos="fade-up" data-aos-delay="100" class="group bg-white text-center p-8 rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2 border border-gray-100">
              <div class="w-16 h-16 bg-gradient-to-br from-primary to-teal-500 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-book text-white text-2xl"></i>
              </div>
              <h2 class="text-2xl font-bold text-gray-800 mb-4">Overview of Curriculum</h2>
              <p class="text-gray-600 leading-relaxed mb-6">Our curriculum blends the Zambian system with Cambridge framework to provide a comprehensive education.</p>
              <a href="academics#overview" class="group/btn inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-teal-500 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                Read More
                <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
              </a>
            </div>

            <div data-aos="fade-up" data-aos-delay="200" class="group bg-white text-center p-8 rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2 border border-gray-100 md:translate-y-8">
              <div class="w-16 h-16 bg-gradient-to-br from-secondary to-orange-400 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-chalkboard-teacher text-white text-2xl"></i>
              </div>
              <h2 class="text-2xl font-bold text-gray-800 mb-4">Teaching Methodologies</h2>
              <p class="text-gray-600 leading-relaxed mb-6">Teaching goes beyond textbooks combining active learning, experimentation, and problem-solving.</p>
              <a href="academics#methodologies" class="group/btn inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-teal-500 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                Read More
                <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
              </a>
            </div>

            <div data-aos="fade-up" data-aos-delay="300" class="group bg-white text-center p-8 rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2 border border-gray-100">
              <div class="w-16 h-16 bg-gradient-to-br from-accent to-teal-400 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-futbol text-white text-2xl"></i>
              </div>
              <h2 class="text-2xl font-bold text-gray-800 mb-4">Extracurricular Activities</h2>
              <p class="text-gray-600 leading-relaxed mb-6">Our extracurricular program nurtures talents, builds confidence, and promotes teamwork.</p>
              <a href="academics#activities" class="group/btn inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-teal-500 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                Read More
                <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
              </a>
            </div>

            <div data-aos="fade-up" data-aos-delay="400" class="group bg-white text-center p-8 rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2 border border-gray-100 md:translate-y-8">
              <div class="w-16 h-16 bg-gradient-to-br from-primary to-accent rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-laptop text-white text-2xl"></i>
              </div>
              <h2 class="text-2xl font-bold text-gray-800 mb-4">Learning Resources</h2>
              <p class="text-gray-600 leading-relaxed mb-6">We provide a well-equipped learning environment supporting academic excellence and personal growth.</p>
              <a href="academics#resources" class="group/btn inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-teal-500 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                Read More
                <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
              </a>
            </div>

            <div data-aos="fade-up" data-aos-delay="500" class="md:col-span-2 group bg-gradient-to-br from-primary via-teal-500 to-accent text-white text-center p-10 rounded-2xl shadow-hard max-w-4xl mx-auto md:mt-12 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-glow">
              <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-microscope text-white text-3xl"></i>
              </div>
              <h2 class="text-3xl font-bold mb-4">ICT & STEM Programs</h2>
              <p class="text-white/90 leading-relaxed text-lg mb-8 max-w-2xl mx-auto">Our ICT and STEM programs prepare learners for the digital world and promote critical thinking, innovation, and problem-solving skills.</p>
              <a href="academics#ict-stem" class="group/btn inline-flex items-center px-4 py-2 bg-white text-primary font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                Read More
                <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
              </a>
            </div>

          </div>
        </div>
      </section>


<?php require __DIR__ . '/../includes/footer.php'; ?>
