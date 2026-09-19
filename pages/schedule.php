<?php
$pageTitle = 'Schedule - Milestone School | School Routine & Calendar';
$metaDescription = 'View Milestone School\'s daily routine, weekly structure, co-curricular activities schedule, and term calendar in Kabwe, Zambia.';
$metaKeywords = 'Milestone School schedule, school routine, term calendar, Kabwe school timetable';
$ogTitle = 'Schedule - Milestone School';
$ogDescription = 'View Milestone School\'s daily routine, weekly structure, and term calendar in Kabwe, Zambia.';
$canonicalPath = '/schedule';
$activeNav = 'schedule';
$bodyClass = 'bg-cover bg-center bg-no-repeat bg-fixed';
require __DIR__ . '/../includes/header.php';
?>
    <!-- Hero Section -->
    <section class="text-center mb-16">
      <div class="mb-4" data-aos="fade-up">
        <span class="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold">
            Schedule
        </span>
      </div>
      <p class="text-xxl md:text-5xl lg:text-6xl font-bold mb-6 bg-gradient-to-r from-primary via-teal-500 to-accent bg-clip-text text-transparent" data-aos="fade-up" data-aos-delay="100">
        School Schedule & Routine
      </p>
      <p class="text-xl text-primary max-w-3xl mx-auto italic" data-aos="fade-up" data-aos-delay="200">
        At Milestone School, we believe that a well-structured schedule helps learners develop discipline, focus, and a balanced approach to learning. Our timetable is carefully planned to ensure that academic lessons, co-curricular activities, and personal development programs receive equal attention.
      </p>
    </section>

  <div class="grid md:grid-cols-2 gap-8 mb-12">
    
    <div data-aos="fade-up" data-aos-delay="100" class="group bg-white p-8 rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2 border border-gray-100">
      <div class="flex items-center mb-6">
        <div class="w-14 h-14 bg-gradient-to-br from-primary to-teal-500 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-calendar-day text-white text-xl"></i>
        </div>
        <h2 class="text-2xl font-bold text-gray-700 text-shadow-sm">
          Daily Routine
        </h2>
      </div>
      <ul class="space-y-4 text-gray-600">
        <li class="flex items-start">
          <i class="fas fa-sun text-yellow-500 mt-1 mr-3 text-lg"></i>
          <span><strong class="text-gray-800">Morning:</strong> Assembly, core subjects, and a short break.</span>
        </li>
        <li class="flex items-start">
          <i class="fas fa-laptop-code text-blue-500 mt-1 mr-3 text-lg"></i>
          <span><strong class="text-gray-800">Midday:</strong> ICT, Creative Arts, and reading programs.</span>
        </li>
        <li class="flex items-start">
          <i class="fas fa-futbol text-green-500 mt-1 mr-3 text-lg"></i>
          <span><strong class="text-gray-800">Afternoon:</strong> Sports, clubs, and homework supervision.</span>
        </li>
      </ul>
    </div>

    <div data-aos="fade-up" data-aos-delay="200" class="group bg-white p-8 rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2 border border-gray-100">
      <div class="flex items-center mb-6">
        <div class="w-14 h-14 bg-gradient-to-br from-primary to-teal-500 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-calendar-week text-white text-xl"></i>
        </div>
        <h2 class="text-2xl font-bold text-gray-700 text-shadow-sm">
          Weekly Structure
        </h2>
      </div>
      <ul class="space-y-4 text-gray-600">
        <li class="flex items-start">
          <i class="fas fa-calendar-check text-primary mt-1 mr-3 text-lg"></i>
          <span><strong class="text-gray-800">Monday to Thursday:</strong> Core academic focus with selected co-curriculars.</span>
        </li>
        <li class="flex items-start">
          <i class="fas fa-star text-secondary mt-1 mr-3 text-lg"></i>
          <span><strong class="text-gray-800">Friday:</strong> Club meetings, sports training, and special programs.</span>
        </li>
      </ul>
    </div>

    <div data-aos="fade-up" data-aos-delay="300" class="group bg-white p-8 rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2 border border-gray-100">
      <div class="flex items-center mb-6">
        <div class="w-14 h-14 bg-gradient-to-br from-secondary to-orange-400 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-puzzle-piece text-white text-xl"></i>
        </div>
        <h2 class="text-2xl font-bold text-gray-700 text-shadow-sm">
          Co-Curricular Activities
        </h2>
      </div>
      <p class="text-gray-600 mb-4">
        We promote all-round development through engaging after-class programs, including:
      </p>
      <ul class="space-y-3 text-gray-600">
        <li class="flex items-center">
          <i class="fas fa-check-circle text-primary mr-3"></i>
          <span>ICT & Science Clubs</span>
        </li>
        <li class="flex items-center">
          <i class="fas fa-check-circle text-primary mr-3"></i>
          <span>Debate and Public Speaking</span>
        </li>
        <li class="flex items-center">
          <i class="fas fa-check-circle text-primary mr-3"></i>
          <span>Chess Club & Sports</span>
        </li>
        <li class="flex items-center">
          <i class="fas fa-check-circle text-primary mr-3"></i>
          <span>Cultural and Music Activities</span>
        </li>
      </ul>
    </div>

    <div data-aos="fade-up" data-aos-delay="400" class="group bg-white p-8 rounded-2xl shadow-soft hover:shadow-hard transform transition-all duration-500 hover:-translate-y-2 border border-gray-100">
      <div class="flex items-center mb-6"> 
        <div class="w-14 h-14 bg-gradient-to-br from-primary to-teal-500 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-clipboard-check text-white text-xl"></i>
        </div>
        <h2 class="text-2xl font-bold text-gray-700 text-shadow-sm">
          Assessments & Exams
        </h2>
      </div>
      <p class="text-gray-600">
        Tests and examinations are scheduled termly to evaluate academic progress. Parents are informed in advance, and timetables are shared in class and online to ensure everyone is prepared.
      </p>
    </div>
  </div>

  <div data-aos="fade-up" data-aos-delay="500" class="text-center mb-12">
    <div class="mb-6">
      <span class="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-4">
        Academic Calendar
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 text-shadow-sm">Term Calendar</h2>
      <p class="text-gray-600 max-w-3xl mx-auto">
        A detailed term calendar including opening/closing dates, holidays, and examination periods is shared with parents at the beginning of each term and is available at the school office.
      </p>
    </div>
    
    <div data-aos="fade-up" data-aos-delay="600" class="max-w-4xl mx-auto">
      <div class="bg-gradient-to-br from-primary/10 via-teal-50 to-accent/10 p-8 rounded-2xl border-l-4 border-primary shadow-soft">
        <blockquote class="text-xl md:text-2xl italic text-gray-700 leading-relaxed">
          <i class="fas fa-quote-left text-primary text-3xl mb-4 block"></i>
          Our schedule reflects our values: discipline, productivity, and care for the learner's holistic growth.
          <i class="fas fa-quote-right text-primary text-3xl mt-4 block text-right"></i>
        </blockquote>
      </div>
    </div>
  </div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
