<!DOCTYPE html>
<html lang="en" data-theme="dark">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | EYES ROLEPLAY</title>
    <link rel="icon" type="image/x-icon" href="https://r2.fivemanage.com/2P9FjNbfkvdwqJtyhr4v5/sitelogo.webp">
    <meta name="description" content="View our gallery of server screenshots, videos, and community content from EYES ROLEPLAY."/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: '#10b981',
              secondary: '#22d3ee',
              tertiary: '#0ea5e9',
              dark: '#0f172a',
              'dark-light': '#1e293b'
            },
            fontFamily: {
              sans: ['Montserrat', 'sans-serif'],
            }
          }
        }
      }
    </script>
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body class="bg-dark text-white font-sans">
    <!-- Scroll Buttons -->
    <div class="fixed right-6 bottom-24 z-[9999] hidden md:block">
      <button id="scrollToTop" class="bg-primary/20 backdrop-blur-xl p-4 rounded-full shadow-2xl hover:bg-primary/30 transition-all duration-300 group opacity-0 invisible scale-90 hover:scale-110">
        <i class="fas fa-chevron-up text-xl text-primary group-hover:text-white transition-all duration-300"></i>
        <div class="absolute -inset-1 bg-primary/20 rounded-full blur opacity-0 group-hover:opacity-50 transition-all duration-300"></div>
      </button>
    </div>
    <div class="fixed right-6 top-1/2 -translate-y-1/2 z-[9999] hidden md:block">
      <button id="scrollToBottom" class="bg-primary/20 backdrop-blur-xl p-4 rounded-full shadow-2xl hover:bg-primary/30 transition-all duration-300 group opacity-0 invisible scale-90 hover:scale-110">
        <i class="fas fa-chevron-down text-xl text-primary group-hover:text-white transition-all duration-300"></i>
        <div class="absolute -inset-1 bg-primary/20 rounded-full blur opacity-0 group-hover:opacity-50 transition-all duration-300"></div>
      </button>
    </div>

    <!-- Navbar -->
    <nav class="bg-[#1a1d24]/95 backdrop-blur-md shadow-lg fixed w-full z-10">
      <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
          <div class="flex items-center">
            <a href="index.php" class="text-2xl font-bold flex items-center gap-1">
              <span class="text-[#10b981]">EYES</span> <span class="text-white">ROLEPLAY</span>
              <div class="flex items-center gap-1 ml-2">
                <span class="relative group">
                  <span class="absolute -inset-1 bg-gradient-to-r from-[#f59e0b] to-[#d97706] rounded-full blur opacity-30 group-hover:opacity-60 transition duration-300"></span>
                  <i class="fas fa-crown text-[#f59e0b] text-xs group-hover:scale-110 transition-all duration-300"></i>
                </span>
                <span class="relative group">
                  <span class="absolute -inset-1 bg-gradient-to-r from-[#10b981] to-[#059669] rounded-full blur opacity-30 group-hover:opacity-60 transition duration-300"></span>
                  <i class="fas fa-star text-[#10b981] text-xs group-hover:scale-110 transition-all duration-300"></i>
                </span>
                <span class="relative group">
                  <span class="absolute -inset-1 bg-gradient-to-r from-[#3b82f6] to-[#2563eb] rounded-full blur opacity-30 group-hover:opacity-60 transition duration-300"></span>
                  <i class="fas fa-gem text-[#3b82f6] text-xs group-hover:scale-110 transition-all duration-300"></i>
                </span>
              </div>
            </a>
          </div>
          <div class="hidden md:flex space-x-6">
            <a href="index.php" class="text-white hover:text-[#10b981] transition duration-300">Home</a>
            <a href="about.php" class="text-white hover:text-[#10b981] transition duration-300">About</a>
            <a href="server.php" class="text-white hover:text-[#10b981] transition duration-300">Server</a>
            <a href="gallery.php" class="text-[#10b981] border-b-2 border-[#10b981] pb-1 transition duration-300">Gallery</a>
            <a href="contact.php" class="text-white hover:text-[#10b981] transition duration-300">Contact</a>
            <div class="relative group hidden md:block">
              <button class="text-white hover:text-[#10b981] transition duration-300 flex items-center gap-1">
                Legal
                <i class="fas fa-chevron-down text-xs transition-transform duration-300 group-hover:rotate-180"></i>
              </button>
              <div class="absolute left-0 mt-2 w-48 bg-[#1a1d24]/95 backdrop-blur-md rounded-lg shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                <a href="terms.php" class="block px-4 py-2 text-white hover:text-[#10b981] hover:bg-dark/50 transition duration-300 flex items-center gap-2">
                  <i class="fas fa-file-contract text-xs"></i>
                  Terms of Service
                </a>
                <a href="privacy.php" class="block px-4 py-2 text-white hover:text-[#10b981] hover:bg-dark/50 transition duration-300 flex items-center gap-2">
                  <i class="fas fa-shield-alt text-xs"></i>
                  Privacy Policy
                </a>
                <a href="rules.php" class="block px-4 py-2 text-white hover:text-[#10b981] hover:bg-dark/50 transition duration-300 flex items-center gap-2">
                  <i class="fas fa-gavel text-xs"></i>
                  Rules
                </a>
              </div>
            </div>
          </div>
          <div class="md:hidden flex items-center">
            <button id="mobile-menu-button" class="text-white hover:text-[#10b981] focus:outline-none p-2">
              <i class="fas fa-bars text-xl"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Mobile Menu -->
      <div id="mobile-menu" class="hidden md:hidden fixed inset-x-0 top-[73px] bg-[#1a1d24]/95 backdrop-blur-md transition-all duration-300 ease-in-out">
        <div class="px-6 py-4 space-y-3">
          <div class="text-2xl font-bold mb-6">
            <span class="text-white">Gallery</span>
            <span class="text-[#10b981]">Showcase</span>
          </div>
          <p class="text-gray-400 text-sm mb-8">View our server screenshots and media content</p>
          
          <!-- Navigation Links -->
          <div class="space-y-3">
            <a href="index.php" class="block text-lg text-white hover:text-[#10b981] transition duration-300">Home</a>
            <a href="about.php" class="block text-lg text-white hover:text-[#10b981] transition duration-300">About</a>
            <a href="server.php" class="block text-lg text-white hover:text-[#10b981] transition duration-300">Server</a>
            <a href="gallery.php" class="block text-lg text-[#10b981] font-medium">Gallery</a>
            <a href="contact.php" class="block text-lg text-white hover:text-[#10b981] transition duration-300">Contact</a>
            <!-- Legal links removed from mobile menu -->
          </div>



          <!-- Server Status -->
          
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="relative pt-24 pb-16 md:pt-32 md:pb-24 bg-dark-light">
      <div class="absolute inset-0 overflow-hidden opacity-20">
        <img src="https://preview.redd.it/ru3zrlk8iz051.png?auto=webp&s=2f8789bc2ee6dc11102f273dae3ee7582b0f7340" alt="Background" class="w-full h-full object-cover">
      </div>
      <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Server <span class="text-primary">Gallery</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
          Explore our collection of server screenshots, videos, and community content
        </p>
      </div>
    </header>
    
    <!-- Main Content Container -->
    <div class="lg:pr-80">
      <!-- Gallery Section -->
      <section class="py-16 bg-dark">
        <div class="container mx-auto px-4">
          <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold" data-aos="fade-up">Gallery</h2>
            <div class="w-24 h-1 bg-primary mx-auto mt-4" data-aos="fade-up" data-aos-delay="200"></div>
          </div>

          <!-- Gallery Filters -->
          <div class="flex flex-wrap justify-center gap-2 md:gap-4 mb-8 px-2" data-aos="fade-up">
            <button class="filter-btn active px-3 py-2 md:px-4 md:py-2 text-sm md:text-base rounded-lg bg-primary text-white shadow-md" data-filter="all">
              <i class="fas fa-th-large mr-1"></i> All
            </button>
            <button class="filter-btn px-3 py-2 md:px-4 md:py-2 text-sm md:text-base rounded-lg bg-dark-light hover:bg-primary/20 transition duration-300 shadow-md" data-filter="vehicles">
              <i class="fas fa-car mr-1"></i> Vehicles
            </button>
            <button class="filter-btn px-3 py-2 md:px-4 md:py-2 text-sm md:text-base rounded-lg bg-dark-light hover:bg-primary/20 transition duration-300 shadow-md" data-filter="locations">
              <i class="fas fa-map-marker-alt mr-1"></i> Locations
            </button>
            <button class="filter-btn px-3 py-2 md:px-4 md:py-2 text-sm md:text-base rounded-lg bg-dark-light hover:bg-primary/20 transition duration-300 shadow-md" data-filter="events">
              <i class="fas fa-calendar-alt mr-1"></i> Events
            </button>
          </div>

          <!-- Gallery Slider -->
          <div class="gallery-slider-container overflow-hidden mb-8 md:mb-12 px-2 md:px-0" data-aos="fade-up">
            <div id="gallerySlider" class="flex gap-3 md:gap-6 transition-transform duration-1000 ease-in-out touch-pan-x snap-x snap-mandatory">
              <!-- Gallery Items -->
              <div class="min-w-[250px] md:min-w-[300px] relative overflow-hidden rounded-lg group cursor-pointer snap-center shadow-lg" data-category="vehicles" data-type="image">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/bcadbf134903405.61de5597972dc.png" 
                     alt="Custom Vehicle" 
                     class="w-full h-[220px] md:h-[300px] object-cover transition-transform duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-300">
                  <div class="absolute bottom-0 left-0 right-0 p-3 md:p-4 transform md:translate-y-full md:group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-lg font-bold text-white mb-1">Custom Vehicle</h3>
                    <p class="text-sm text-gray-300">High-performance sports car</p>
                  </div>
                </div>
              </div>

              <div class="min-w-[250px] md:min-w-[300px] relative overflow-hidden rounded-lg group cursor-pointer snap-center shadow-lg" data-category="vehicles" data-type="image">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/721cf0144447875.628cc73e8e7a3.png" 
                     alt="Luxury Vehicle" 
                     class="w-full h-[220px] md:h-[300px] object-cover transition-transform duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-300">
                  <div class="absolute bottom-0 left-0 right-0 p-3 md:p-4 transform md:translate-y-full md:group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-lg font-bold text-white mb-1">Luxury Vehicle</h3>
                    <p class="text-sm text-gray-300">Premium car collection</p>
                  </div>
                </div>
              </div>

              <div class="min-w-[250px] md:min-w-[300px] relative overflow-hidden rounded-lg group cursor-pointer snap-center shadow-lg" data-category="locations" data-type="image">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/08bbfd132332239.61a6f77851b88.png" 
                     alt="Downtown Area" 
                     class="w-full h-[220px] md:h-[300px] object-cover transition-transform duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-300">
                  <div class="absolute bottom-0 left-0 right-0 p-3 md:p-4 transform md:translate-y-full md:group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-lg font-bold text-white mb-1">Downtown Area</h3>
                    <p class="text-sm text-gray-300">City center exploration</p>
                  </div>
                </div>
              </div>

              <div class="min-w-[250px] md:min-w-[300px] relative overflow-hidden rounded-lg group cursor-pointer snap-center shadow-lg" data-category="locations" data-type="image">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/030622144447875.628cc7377efdd.png" 
                     alt="Car Area" 
                     class="w-full h-[220px] md:h-[300px] object-cover transition-transform duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-300">
                  <div class="absolute bottom-0 left-0 right-0 p-3 md:p-4 transform md:translate-y-full md:group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-lg font-bold text-white mb-1">Car Showcase</h3>
                    <p class="text-sm text-gray-300">Vehicle display area</p>
                  </div>
                </div>
              </div>

              <div class="min-w-[250px] md:min-w-[300px] relative overflow-hidden rounded-lg group cursor-pointer snap-center shadow-lg" data-category="events" data-type="image">
                <img src="https://s3-gallery.int-cdn.lcpdfrusercontent.com/monthly_2022_07/large.1213235336_2022-07-1702_23_17-FiveMbyCfx.re-KreationsDevelopmentServer.png.86c2716e2d183549b5bd471a2a8c1bd7.png" 
                     alt="Community Event" 
                     class="w-full h-[220px] md:h-[300px] object-cover transition-transform duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-300">
                  <div class="absolute bottom-0 left-0 right-0 p-3 md:p-4 transform md:translate-y-full md:group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-lg font-bold text-white mb-1">Community Event</h3>
                    <p class="text-sm text-gray-300">Monthly gatherings</p>
                  </div>
                </div>
              </div>

              <div class="min-w-[250px] md:min-w-[300px] relative overflow-hidden rounded-lg group cursor-pointer snap-center shadow-lg" data-category="events" data-type="image">
                <img src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/156558976/original/5541e4abbe0496ce7de8418286c9ca876ab917a1/make-you-professional-car-or-object-photo-for-your-fivem-server.png" 
                     alt="Community Event" 
                     class="w-full h-[220px] md:h-[300px] object-cover transition-transform duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-300">
                  <div class="absolute bottom-0 left-0 right-0 p-3 md:p-4 transform md:translate-y-full md:group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-lg font-bold text-white mb-1">Special Event</h3>
                    <p class="text-sm text-gray-300">Exclusive gatherings</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Filtered Gallery Grid -->
          <div id="filteredGallery" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 px-2 md:px-0 hidden" data-aos="fade-up">
            <!-- Vehicles Category -->
            <div class="gallery-item relative overflow-hidden rounded-lg group cursor-pointer" data-category="vehicles" data-type="image">
              <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/bcadbf134903405.61de5597972dc.png" 
                   alt="Custom Vehicle" 
                   class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                  <h3 class="text-xl font-bold text-white mb-2">Custom Vehicle</h3>
                  <p class="text-gray-300">High-performance sports car</p>
                </div>
              </div>
            </div>

           <!-- Vehicles Category -->
           <div class="gallery-item relative overflow-hidden rounded-lg group cursor-pointer" data-category="vehicles"
             data-type="image">
             <img src="https://i.etsystatic.com/49914222/r/il/85dbf8/5974292028/il_fullxfull.5974292028_ozuh.jpg" alt="Custom Vehicle"
               class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
             <div
               class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
               <div
                 class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                 <h3 class="text-xl font-bold text-white mb-2">Super Vehicle</h3>
                 <p class="text-gray-300">High-performance super car</p>
               </div>
             </div>
           </div>



            <div class="gallery-item relative overflow-hidden rounded-lg group cursor-pointer" data-category="vehicles" data-type="image">
              <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/721cf0144447875.628cc73e8e7a3.png" 
                   alt="Luxury Vehicle" 
                   class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                  <h3 class="text-xl font-bold text-white mb-2">Luxury Vehicle</h3>
                  <p class="text-gray-300">Premium car collection</p>
                </div>
              </div>
            </div>

            <!-- Locations Category -->
            <div class="gallery-item relative overflow-hidden rounded-lg group cursor-pointer" data-category="locations" data-type="image">
              <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/08bbfd132332239.61a6f77851b88.png" 
                   alt="Downtown Area" 
                   class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                  <h3 class="text-xl font-bold text-white mb-2">Downtown Area</h3>
                  <p class="text-gray-300">City center exploration</p>
                </div>
              </div>
            </div>

            <!-- Locations Category -->
            <div class="gallery-item relative overflow-hidden rounded-lg group cursor-pointer" data-category="locations"
              data-type="image">
              <img src="https://img.gta5-mods.com/q95/images/ubermacht-cypher-mx2-supremocustoms-fivem-add_on-tuning-liverys/8de0a5-20250113221243_1.jpg" alt="Downtown Area"
                class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
              <div
                class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div
                  class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                  <h3 class="text-xl font-bold text-white mb-2">Downtown Area</h3>
                  <p class="text-gray-300">City center exploration</p>
                </div>
              </div>
            </div>

            <div class="gallery-item relative overflow-hidden rounded-lg group cursor-pointer" data-category="locations" data-type="image">
              <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/030622144447875.628cc7377efdd.png" 
                   alt="Car Area" 
                   class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                  <h3 class="text-xl font-bold text-white mb-2">Car Showcase</h3>
                  <p class="text-gray-300">Vehicle display area</p>
                </div>
              </div>
            </div>

            <!-- Events Category -->
            <div class="gallery-item relative overflow-hidden rounded-lg group cursor-pointer" data-category="events" data-type="image">
              <img src="https://s3-gallery.int-cdn.lcpdfrusercontent.com/monthly_2022_07/large.1213235336_2022-07-1702_23_17-FiveMbyCfx.re-KreationsDevelopmentServer.png.86c2716e2d183549b5bd471a2a8c1bd7.png" 
                   alt="Community Event" 
                   class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                  <h3 class="text-xl font-bold text-white mb-2">Community Event</h3>
                  <p class="text-gray-300">Monthly gatherings</p>
                </div>
              </div>
            </div>

            <!-- Events Category -->
            <div class="gallery-item relative overflow-hidden rounded-lg group cursor-pointer" data-category="events"
              data-type="image">
              <img
                src="https://img.gta5-mods.com/q95/images/ultra-music-festival-in-los-santos/b19110-20240515075404_1.jpg"
                alt="Community Event" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
              <div
                class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div
                  class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                  <h3 class="text-xl font-bold text-white mb-2">Community Event</h3>
                  <p class="text-gray-300">Weekly gatherings</p>
                </div>
              </div>
            </div>

            <div class="gallery-item relative overflow-hidden rounded-lg group cursor-pointer" data-category="events" data-type="image">
              <img src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/156558976/original/5541e4abbe0496ce7de8418286c9ca876ab917a1/make-you-professional-car-or-object-photo-for-your-fivem-server.png" 
                   alt="Special Event" 
                   class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                  <h3 class="text-xl font-bold text-white mb-2">Special Event</h3>
                  <p class="text-gray-300">Exclusive gatherings</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Image/Video Modal -->
      <div id="mediaModal" class="fixed inset-0 bg-black/95 z-50 hidden">
        <div class="flex items-center justify-center min-h-screen">
          <div class="relative">
            <!-- Previous Button -->
            <button id="prevButton" class="absolute -left-16 top-1/2 -translate-y-1/2 bg-dark-light/50 hover:bg-dark-light/80 text-white/70 hover:text-white p-4 rounded-xl backdrop-blur-sm transition-all duration-300 group">
              <i class="fas fa-chevron-left text-3xl group-hover:scale-110 transition-transform"></i>
            </button>

            <!-- Content and Caption Container -->
            <div class="flex flex-col items-center">
              <div id="modalContent" class="relative">
                <!-- Content will be dynamically inserted here -->
              </div>
              <div id="modalCaption" class="w-full bg-dark-light/80 backdrop-blur-sm rounded-lg p-4 mt-4">
                <!-- Caption will be dynamically inserted here -->
              </div>
            </div>

            <!-- Next Button -->
            <button id="nextButton" class="absolute -right-16 top-1/2 -translate-y-1/2 bg-dark-light/50 hover:bg-dark-light/80 text-white/70 hover:text-white p-4 rounded-xl backdrop-blur-sm transition-all duration-300 group">
              <i class="fas fa-chevron-right text-3xl group-hover:scale-110 transition-transform"></i>
            </button>
          </div>
        </div>

        <!-- Navigation Info -->
        <div class="absolute top-4 left-1/2 transform -translate-x-1/2 text-gray-400 text-sm">
          <span class="bg-dark-light/50 backdrop-blur-sm px-4 py-2 rounded-full">
            <i class="fas fa-arrow-left mr-2"></i> Use arrow keys to navigate
            <i class="fas fa-arrow-right ml-2"></i>
          </span>
        </div>

        <!-- Close Info -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-gray-400 text-sm">
          <span class="bg-dark-light/50 backdrop-blur-sm px-4 py-2 rounded-full">
            <i class="fas fa-times mr-2"></i> Press ESC or click outside to close
          </span>
        </div>
      </div>

      <!-- Featured Videos -->
      <section class="py-16 bg-dark">
        <div class="container mx-auto px-4">
          <h2 class="text-4xl font-bold mb-12 text-center" data-aos="fade-up">Featured <span class="text-primary">Videos</span></h2>
          <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <!-- Video 1 -->
              <div class="video-container group" data-aos="fade-up">
                <div class="aspect-w-16 aspect-h-9 rounded-xl overflow-hidden bg-dark-light shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-[1.02]">
                  <iframe 
                    class="w-full h-[400px]"
                    src="https://www.youtube.com/embed/yIXi_0fC3P0"
                    title="Server Trailer"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                  </iframe>
                </div>
                <div class="mt-6 bg-dark-light/50 backdrop-blur-sm p-4 rounded-lg transform hover:-translate-y-1 transition-all duration-300">
                  <h3 class="text-2xl font-bold text-white group-hover:text-primary transition-colors duration-300">Server Trailer 2023</h3>
                  <p class="text-gray-400 mt-2 text-lg">Official server trailer showcasing our features and community</p>
                  <div class="flex items-center mt-3 text-primary">
                    <i class="fas fa-play-circle mr-2"></i>
                    <span class="text-sm">Watch Now</span>
                  </div>
                </div>
              </div>

              <!-- Video 2 -->
              <div class="video-container group" data-aos="fade-up" data-aos-delay="100">
                <div class="aspect-w-16 aspect-h-9 rounded-xl overflow-hidden bg-dark-light shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-[1.02]">
                  <iframe 
                    class="w-full h-[400px]"
                    src="https://www.youtube.com/embed/LI-lh9IooYY"
                    title="Community Highlights"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                  </iframe>
                </div>
                <div class="mt-6 bg-dark-light/50 backdrop-blur-sm p-4 rounded-lg transform hover:-translate-y-1 transition-all duration-300">
                  <h3 class="text-2xl font-bold text-white group-hover:text-primary transition-colors duration-300">Community Highlights</h3>
                  <p class="text-gray-400 mt-2 text-lg">Best moments from our community events and roleplay sessions</p>
                  <div class="flex items-center mt-3 text-primary">
                    <i class="fas fa-play-circle mr-2"></i>
                    <span class="text-sm">Watch Now</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Community Showcase -->
      <section class="py-16 bg-dark-light">
        <div class="container mx-auto px-4">
          <h2 class="text-3xl font-bold mb-12 text-center" data-aos="fade-up">Community <span
              class="text-primary">Showcase</span></h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Showcase 1 -->
            <div class="bg-dark p-6 rounded-lg shadow-lg" data-aos="fade-up">
              <div class="flex items-center mb-4">
                <img
                  src="https://pyxis.nymag.com/v1/imgs/27c/add/0e2874a07812c2486740677c6ed0439eb2-23-you-season-1-recap.rsquare.w400.jpg"
                  alt="Player Avatar" class="w-12 h-12 rounded-full mr-4">
                <div>
                  <h3 class="font-bold">@SunneRTV06</h3>
                  <p class="text-gray-400 text-sm">Roleplay Enthusiast</p>
                </div>
              </div>
              <p class="text-gray-300 mb-4">"Eyes Roleplay offers an unparalleled roleplaying experience. The community is
                welcoming, and the features are exceptional!"</p>
              <div class="flex space-x-2">
                <span class="text-primary">#Roleplay</span>
                <span class="text-primary">#Community</span>
              </div>
            </div>
      
            <!-- Showcase 2 -->
            <div class="bg-dark p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
              <div class="flex items-center mb-4">
                <img
                  src="https://pyxis.nymag.com/v1/imgs/da9/66a/10dda991321ec0f8049eac6dd3c07caf33-28-you-lail.rsquare.w400.jpg"
                  alt="Player Avatar" class="w-12 h-12 rounded-full mr-4">
                <div>
                  <h3 class="font-bold">@Dex</h3>
                  <p class="text-gray-400 text-sm">Content Creator</p>
                </div>
              </div>
              <p class="text-gray-300 mb-4">"Creating content on this server has been an absolute pleasure. The custom
                vehicles and features provide excellent material for my videos!"</p>
              <div class="flex space-x-2">
                <span class="text-primary">#Content</span>
                <span class="text-primary">#FiveM</span>
              </div>
            </div>
      
            <!-- Showcase 3 -->
            <div class="bg-dark p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
              <div class="flex items-center mb-4">
                <img src="https://i.pinimg.com/736x/7d/a3/aa/7da3aaed604707b8e1fe70915699ccc0.jpg" alt="Player Avatar"
                  class="w-12 h-12 rounded-full mr-4">
                <div>
                  <h3 class="font-bold">@ravev0</h3>
                  <p class="text-gray-400 text-sm">Roleplay Veteran</p>
                </div>
              </div>
              <p class="text-gray-300 mb-4">"The attention to detail in the roleplay systems at Eyes Roleplay is remarkable.
                It's evident that the staff is dedicated to providing an immersive experience."</p>
              <div class="flex space-x-2">
                <span class="text-primary">#Roleplay</span>
                <span class="text-primary">#FiveM</span>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Footer -->
    <footer class="bg-dark py-8">
      <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
          <!-- Column 1 -->
          <div>
            <a href="index.php" class="text-2xl font-bold text-primary">EYES<span class="text-white">ROLEPLAY</span></a>
            <p class="mt-4 text-gray-400">Experience the most immersive FiveM roleplay server with custom scripts, vehicles, and active community.</p>
          </div>
          
          <!-- Column 2 -->
          <div>
            <h4 class="text-white font-bold mb-4">Navigation</h4>
            <ul class="space-y-2">
              <li><a href="index.php" class="text-gray-400 hover:text-primary transition duration-300">Home</a></li>
              <li><a href="about.php" class="text-gray-400 hover:text-primary transition duration-300">About</a></li>
              <li><a href="server.php" class="text-gray-400 hover:text-primary transition duration-300">Server</a></li>
              <li><a href="gallery.php" class="text-primary transition duration-300">Gallery</a></li>
              <li><a href="contact.php" class="text-gray-400 hover:text-primary transition duration-300">Contact</a></li>
            </ul>
          </div>
          
          <!-- Column 3 -->
          <div>
            <h4 class="text-white font-bold mb-4">Legal</h4>
            <ul class="space-y-2">
              <li><a href="terms.php" class="text-gray-400 hover:text-primary transition duration-300">Terms of Service</a></li>
              <li><a href="privacy.php" class="text-gray-400 hover:text-primary transition duration-300">Privacy Policy</a></li>
              <li><a href="rules.php" class="text-gray-400 hover:text-primary transition duration-300">Rules</a></li>
            </ul>
          </div>
          
          <!-- Column 4 -->
          <div>
            <h4 class="text-white font-bold mb-4">Connect</h4>
            <div class="flex space-x-4">
              <a href="#" class="text-gray-400 hover:text-primary transition duration-300">
                <i class="fab fa-discord text-xl"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-primary transition duration-300">
                <i class="fab fa-instagram text-xl"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-primary transition duration-300">
                <i class="fab fa-youtube text-xl"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-primary transition duration-300">
                <i class="fab fa-twitter text-xl"></i>
              </a>
            </div>
            <!-- Footer IP -->
            <div class="mt-4">
              <p class="text-gray-400">Server IP:</p>
              <div class="flex items-center mt-1">
                <code class="text-[#10b981] text-sm server-connection select-all cursor-pointer">fivem://connect/53m5qd</code>
                <button class="copy-button text-gray-400 hover:text-[#10b981] p-2 rounded-lg transition-all duration-300 hover:bg-[#10b981]/10 group/btn cursor-pointer ml-2">
                  <i class="fas fa-copy group-hover/btn:scale-110 transition-transform duration-300"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <hr class="border-gray-800 my-6">
        
        <div class="text-center text-gray-500 text-sm">
          <p>&copy; 2023 EYES ROLEPLAY. All rights reserved.</p>
          <p class="mt-2">Not affiliated with Rockstar Games, Inc. or Take-Two Interactive Software, Inc.</p>
        </div>
      </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
  </body>
</html> 
