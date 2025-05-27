<!DOCTYPE html>
<html lang="en" data-theme="dark">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service | SIAN ROLEPLAY</title>
    <link rel="icon" type="image/x-icon" href="https://r2.fivemanage.com/w25XuiZ98xRs3Ksv57fIz/New_Project-Photoroom.png">
    <meta name="description" content="Terms of Service for SIAN ROLEPLAY - The most immersive FiveM roleplay experience."/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: '#fd7e14',
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
    <nav class="bg-dark-light/80 backdrop-blur-md shadow-lg fixed w-full z-10">
      <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
          <div class="flex items-center">
            <a href="index.php" class="text-2xl font-bold flex items-center gap-1" data-server-name data-split>
              <span class="text-[#fd7e14]">SIAN</span> <span class="text-white">ROLEPLAY</span>
            </a>
          </div>
          <div class="hidden md:flex space-x-6">
            <a href="index.php" class="text-white hover:text-orange-500 transition duration-300">Home</a>
            <a href="about.php" class="text-orange-500 border-b-2 border-orange-500 pb-1 transition duration-300">About</a>
            <a href="shop.php" class="text-white hover:text-orange-500 transition duration-300">Shop</a>
            <!-- <a href="server.php" class="text-white hover:text-orange-500 transition duration-300">Server</a> -->
            <!-- <a href="gallery.php" class="text-white hover:text-orange-500 transition duration-300">Gallery</a>
            <a href="contact.php" class="text-white hover:text-orange-500 transition duration-300">Contact</a> -->
            <div class="relative group hidden md:block">
              <button class="text-white hover:text-orange-500 transition duration-300 flex items-center gap-1">
                Legal
                <i class="fas fa-chevron-down text-xs transition-transform duration-300 group-hover:rotate-180"></i>
              </button>
              <div class="absolute left-0 mt-2 w-48 bg-[#1a1d24]/95 backdrop-blur-md rounded-lg shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                <a href="terms.php" class="block px-4 py-2 text-white hover:text-orange-500 hover:bg-dark/50 transition duration-300 flex items-center gap-2">
                  <i class="fas fa-file-contract text-xs"></i>
                  Terms of Service
                </a>
                <a href="privacy.php" class="block px-4 py-2 text-white hover:text-orange-500 hover:bg-dark/50 transition duration-300 flex items-center gap-2">
                  <i class="fas fa-shield-alt text-xs"></i>
                  Privacy Policy
                </a>
                <a href="rules.php" class="block px-4 py-2 text-white hover:text-orange-500 hover:bg-dark/50 transition duration-300 flex items-center gap-2">
                  <i class="fas fa-gavel text-xs"></i>
                  Rules
                </a>
              </div>
            </div>
          </div>
          <div class="md:hidden flex items-center">
            <button id="mobile-menu-button" class="text-white hover:text-orange-500 focus:outline-none p-2">
              <i class="fas fa-bars text-xl"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Mobile Menu -->
      <div id="mobile-menu" class="hidden md:hidden fixed inset-x-0 top-[73px] bg-dark-light/95 backdrop-blur-md transition-all duration-300 ease-in-out transform translate-x-full">
        <div class="px-4 py-2 space-y-1">
          <a href="index.php" class="block px-4 py-3 text-primary font-medium rounded-lg bg-dark/50 transition duration-300">Home</a>
          <a href="about.php" class="block px-4 py-3 text-white hover:text-primary hover:bg-dark/50 rounded-lg transition duration-300">About</a>
          <a href="server.php" class="block px-4 py-3 text-white hover:text-primary hover:bg-dark/50 rounded-lg transition duration-300">Server</a>
          <a href="shop.php" class="block px-4 py-3 text-white hover:text-primary hover:bg-dark/50 rounded-lg transition duration-300">Shop</a>
          <!-- <a href="gallery.php" class="block px-4 py-3 text-white hover:text-primary hover:bg-dark/50 rounded-lg transition duration-300">Gallery</a>
          <a href="contact.php" class="block px-4 py-3 text-white hover:text-primary hover:bg-dark/50 rounded-lg transition duration-300">Contact</a> -->
          <!-- Legal dropdown in Mobile Menu (hidden on mobile) -->
          <div class="mobile-dropdown legal-dropdown">
            <button class="w-full text-left px-4 py-3 text-white hover:text-primary hover:bg-dark/50 rounded-lg transition duration-300 flex items-center justify-between">
              <div class="flex items-center">
                <i class="fas fa-gavel mr-2"></i> Legal
              </div>
              <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
            </button>
            <div class="hidden px-4 py-2 ml-4 space-y-2 border-l-2 border-dark/50">
              <a href="terms.php" class="block px-4 py-2 text-white hover:text-primary transition duration-300">
                <i class="fas fa-file-contract mr-2 text-xs"></i> Terms of Service
              </a>
              <a href="privacy.php" class="block px-4 py-2 text-white hover:text-primary transition duration-300">
                <i class="fas fa-user-shield mr-2 text-xs"></i> Privacy Policy
              </a>
              <a href="rules.php" class="block px-4 py-2 text-white hover:text-primary transition duration-300">
                <i class="fas fa-gavel mr-2 text-xs"></i> Rules
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="relative pt-24 pb-16 md:pt-32 md:pb-24 bg-dark-light">
      <div class="absolute inset-0 overflow-hidden opacity-20">
        <img src="https://r2.fivemanage.com/1B6peXm4G5YHsX5ZWqMIT/SaveClip.App_386237321_2894299487368061_6255518422014938498_n.jpg" alt="Background" class="w-full h-full object-cover">
      </div>
      <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">About <span class="text-primary">Us</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
          Uncover the journey of SIAN ROLEPLAY where our passion meets purpose to craft the ultimate FiveM roleplaying experience 
        </p>
      </div>
    </header>

    <!-- Our Story -->
    <section class="py-16 bg-dark">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
          <div class="relative group" data-aos="fade-right">
            <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-transparent rounded-lg group-hover:opacity-100 opacity-0 transition-opacity duration-300"></div>
            <div class="relative overflow-hidden rounded-lg shadow-xl">
              <img src="https://r2.fivemanage.com/1B6peXm4G5YHsX5ZWqMIT/20f623-unknown.webp">
            </div>
          </div>
          <div data-aos="fade-left">
            <h2 class="text-3xl font-bold mb-6">Our <span class="text-primary">Story</span></h2>
            <p class="text-gray-300 mb-6">
              Our server focuses on vehicle-based roles, from street racers and custom car builders to delivery workers, police officers, and medical professionals. Every system is carefully designed with realism in mind to support true Serious Roleplay allowing players to fully immerse themselves in their character’s role and emotions.
            </p>
            <div class="grid grid-cols-2 gap-6">
              <div class="bg-dark-light p-4 rounded-lg hover:bg-dark-light/80 transition duration-300">
                <div class="text-primary text-2xl mb-2">
                  <i class="fas fa-users"></i>
                </div>
                <h3 class="font-bold mb-1">900+</h3>
                <p class="text-gray-400 text-sm">Active Community</p>
              </div>
              <div class="bg-dark-light p-4 rounded-lg hover:bg-dark-light/80 transition duration-300">
                <div class="text-primary text-2xl mb-2">
                  <i class="fas fa-code"></i>
                </div>
                <h3 class="font-bold mb-1">100+</h3>
                <p class="text-gray-400 text-sm">Custom Scripts</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Mission -->
    <section class="py-16 bg-dark-light">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">Our <span class="text-primary">Mission</span></h2>
          <p class="text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            To provide an unparalleled roleplay experience through innovation, community engagement, and continuous improvement.
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-dark p-6 rounded-lg shadow-lg" data-aos="fade-up">
            <div class="text-primary text-3xl mb-4">
              <i class="fas fa-star"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Quality First</h3>
            <p class="text-gray-300">We prioritize quality in every aspect, from server performance to roleplay standards.</p>
          </div>
          <div class="bg-dark p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
            <div class="text-primary text-3xl mb-4">
              <i class="fas fa-heart"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Community Focus</h3>
            <p class="text-gray-300">Our community is at the heart of everything we do, driving our decisions and development.</p>
          </div>
          <div class="bg-dark p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
            <div class="text-primary text-3xl mb-4">
              <i class="fas fa-rocket"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Continuous Growth</h3>
            <p class="text-gray-300">We're constantly evolving, adding new features and improving existing ones.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Server Requirements -->
    <section class="py-16 bg-dark">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-12 text-center" data-aos="fade-up">Server <span class="text-primary">Requirements</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
          <!-- Minimum Requirements -->
          <div class="bg-dark-light p-6 rounded-lg" data-aos="fade-up">
            <div class="text-primary text-3xl mb-4">
              <i class="fas fa-microchip"></i>
            </div>
            <h3 class="font-bold mb-4">Minimum Requirements</h3>
            <ul class="space-y-2 text-gray-300">
              <li><i class="fas fa-check text-primary mr-2"></i>CPU: Intel i5-4460</li>
              <li><i class="fas fa-check text-primary mr-2"></i>RAM: 8GB</li>
              <li><i class="fas fa-check text-primary mr-2"></i>GPU: GTX 760</li>
              <li><i class="fas fa-check text-primary mr-2"></i>Storage: 120GB</li>
            </ul>
          </div>

          <!-- Recommended Requirements -->
          <div class="bg-dark-light p-6 rounded-lg" data-aos="fade-up" data-aos-delay="100">
            <div class="text-primary text-3xl mb-4">
              <i class="fas fa-desktop"></i>
            </div>
            <h3 class="font-bold mb-4">Recommended Requirements</h3>
            <ul class="space-y-2 text-gray-300">
              <li><i class="fas fa-check text-primary mr-2"></i>CPU: Intel i7-8700K</li>
              <li><i class="fas fa-check text-primary mr-2"></i>RAM: 16GB</li>
              <li><i class="fas fa-check text-primary mr-2"></i>GPU: RTX 2060</li>
              <li><i class="fas fa-check text-primary mr-2"></i>Storage: 250GB SSD</li>
            </ul>
          </div>

          <!-- Software Requirements -->
          <div class="bg-dark-light p-6 rounded-lg" data-aos="fade-up" data-aos-delay="200">
            <div class="text-primary text-3xl mb-4">
              <i class="fas fa-download"></i>
            </div>
            <h3 class="font-bold mb-4">Required Software</h3>
            <ul class="space-y-2 text-gray-300">
              <li><i class="fas fa-check text-primary mr-2"></i>GTA V (Legal Copy)</li>
              <li><i class="fas fa-check text-primary mr-2"></i>FiveM Client</li>
              <li><i class="fas fa-check text-primary mr-2"></i>Discord App</li>
              <li><i class="fas fa-check text-primary mr-2"></i>Teamspeak 3</li>
            </ul>
          </div>

          <!-- Additional Info -->
          <div class="bg-dark-light p-6 rounded-lg" data-aos="fade-up" data-aos-delay="300">
            <div class="text-primary text-3xl mb-4">
              <i class="fas fa-info-circle"></i>
            </div>
            <h3 class="font-bold mb-4">Important Notes</h3>
            <ul class="space-y-2 text-gray-300">
              <li><i class="fas fa-check text-primary mr-2"></i>Stable Internet Connection</li>
              <li><i class="fas fa-check text-primary mr-2"></i>Working Microphone</li>
              <li><i class="fas fa-check text-primary mr-2"></i>Age: 18+</li>
              <li><i class="fas fa-check text-primary mr-2"></i>English Communication</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Server Rules & Information -->
    <section class="py-16 bg-dark-light">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-12 text-center" data-aos="fade-up">Server <span class="text-primary">Guidelines</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Server Rules -->
          <div class="bg-dark p-6 rounded-lg" data-aos="fade-up">
            <div class="text-primary text-3xl mb-4">
              <i class="fas fa-gavel"></i>
            </div>
            <h3 class="text-xl font-bold mb-4">Server Rules</h3>
            <ul class="space-y-3 text-gray-300">
              <li><i class="fas fa-check text-primary mr-2"></i>No RDM (Random Death Match)</li>
              <li><i class="fas fa-check text-primary mr-2"></i>No VDM (Vehicle Death Match)</li>
              <li><i class="fas fa-check text-primary mr-2"></i>No Breaking Character</li>
              <li><i class="fas fa-check text-primary mr-2"></i>Respect Other Players</li>
              <li><i class="fas fa-check text-primary mr-2"></i>No Exploiting or Hacking</li>
              <li><i class="fas fa-check text-primary mr-2"></i>Follow Staff Instructions</li>
            </ul>
          </div>

          <!-- Roleplay Guidelines -->
          <div class="bg-dark p-6 rounded-lg" data-aos="fade-up" data-aos-delay="100">
            <div class="text-primary text-3xl mb-4">
              <i class="fas fa-theater-masks"></i>
            </div>
            <h3 class="text-xl font-bold mb-4">Roleplay Guidelines</h3>
            <ul class="space-y-3 text-gray-300">
              <li><i class="fas fa-check text-primary mr-2"></i>Stay In Character At All Times</li>
              <li><i class="fas fa-check text-primary mr-2"></i>Use /me For Actions</li>
              <li><i class="fas fa-check text-primary mr-2"></i>Realistic Scenarios Only</li>
              <li><i class="fas fa-check text-primary mr-2"></i>No Powergaming</li>
              <li><i class="fas fa-check text-primary mr-2"></i>No Metagaming</li>
              <li><i class="fas fa-check text-primary mr-2"></i>Value Your Life (VL)</li>
            </ul>
          </div>

          <!-- Important Information -->
          <div class="bg-dark p-6 rounded-lg" data-aos="fade-up" data-aos-delay="200">
            <div class="text-primary text-3xl mb-4">
              <i class="fas fa-info-circle"></i>
            </div>
            <h3 class="text-xl font-bold mb-4">Important Information</h3>
            <ul class="space-y-3 text-gray-300">
              <li><i class="fas fa-check text-primary mr-2"></i>Whitelist Required</li>
              <li><i class="fas fa-check text-primary mr-2"></i>Character Creation Approval</li>
              <li><i class="fas fa-check text-primary mr-2"></i>Regular Server Updates</li>
              <li><i class="fas fa-check text-primary mr-2"></i>Active Staff Support</li>
              <li><i class="fas fa-check text-primary mr-2"></i>Community Events</li>
              <li><i class="fas fa-check text-primary mr-2"></i>Discord Integration</li>
            </ul>
          </div>
        </div>

        <!-- Additional Notes -->
        <div class="mt-12 bg-dark p-6 rounded-lg text-center" data-aos="fade-up">
          <p class="text-gray-300">For detailed information about our rules and guidelines, please visit our Discord server.</p>
          <a href="#" class="inline-flex items-center mt-4 text-primary hover:text-primary/80 transition-colors">
            <i class="fab fa-discord mr-2"></i>
            Join Our Discord
          </a>
          
          <!-- Copyright -->
          <div class="mt-6 pt-2 text-center opacity-60 hover:opacity-100 transition-opacity duration-300 copyright-holder">
            <a href="https://discord.gg/U7cMp4WZXC" target="_blank" class="hover:no-underline cursor-pointer">
              <p class="text-xs text-gray-400 relative z-10 hover:scale-105 transition-transform duration-300 copyright-text">
                <span class="bg-gradient-to-r from-[#fd7e14] via-[#fd7e14] to-[#fd7e14] bg-clip-text text-transparent font-semibold">Copyright by</span>
                <span class="text-white font-semibold tracking-wide"> sawadeekubpommhee</span>
              </p>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark py-8">
      <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
          <!-- Column 1 -->
          <div>
            <a href="index.php" class="text-2xl font-bold text-primary">SIAN<span class="text-white">ROLEPLAY</span></a>
            <p class="mt-4 text-gray-400">Experience the most immersive FiveM roleplay server with custom scripts, vehicles, and active community.</p>
          </div>
          
          <!-- Column 2 -->
          <div>
            <h4 class="text-white font-bold mb-4">Navigation</h4>
            <ul class="space-y-2">
              <li><a href="index.php" class="text-gray-400 hover:text-primary transition duration-300">Home</a></li>
              <li><a href="about.php" class="text-primary transition duration-300">About</a></li>
              <!-- <li><a href="server.php" class="text-gray-400 hover:text-primary transition duration-300">Server</a></li> -->
              <!-- <li><a href="gallery.php" class="text-gray-400 hover:text-primary transition duration-300">Gallery</a></li>
              <li><a href="contact.php" class="text-gray-400 hover:text-primary transition duration-300">Contact</a></li> -->
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
              <a href="#" class="group relative p-2 rounded-lg transition-all duration-300 hover:bg-[#5865F2]/10">
                <i class="fab fa-discord text-xl text-gray-400 group-hover:text-[#5865F2] transition-all duration-300 group-hover:scale-125"></i>
                <span class="absolute inset-0 rounded-lg bg-[#5865F2]/0 group-hover:bg-[#5865F2]/5 transition-colors duration-300"></span>
                <span class="absolute -inset-1 rounded-xl bg-[#5865F2]/0 group-hover:bg-[#5865F2]/10 blur-sm transition-all duration-300 -z-10"></span>
              </a>
              <a href="#" class="group relative p-2 rounded-lg transition-all duration-300 hover:bg-gradient-to-br hover:from-[#833AB4]/10 hover:via-[#FD1D1D]/10 hover:to-[#F77737]/10">
                <i class="fab fa-instagram text-xl text-gray-400 group-hover:text-[#E1306C] transition-all duration-300 group-hover:scale-125"></i>
                <span class="absolute inset-0 rounded-lg bg-gradient-to-br from-[#833AB4]/0 via-[#FD1D1D]/0 to-[#F77737]/0 group-hover:from-[#833AB4]/5 group-hover:via-[#FD1D1D]/5 group-hover:to-[#F77737]/5 transition-colors duration-300"></span>
                <span class="absolute -inset-1 rounded-xl bg-gradient-to-br from-[#833AB4]/0 via-[#FD1D1D]/0 to-[#F77737]/0 group-hover:from-[#833AB4]/10 group-hover:via-[#FD1D1D]/10 group-hover:to-[#F77737]/10 blur-sm transition-all duration-300 -z-10"></span>
              </a>
              <a href="#" class="group relative p-2 rounded-lg transition-all duration-300 hover:bg-[#FF0000]/10">
                <i class="fab fa-youtube text-xl text-gray-400 group-hover:text-[#FF0000] transition-all duration-300 group-hover:scale-125"></i>
                <span class="absolute inset-0 rounded-lg bg-[#FF0000]/0 group-hover:bg-[#FF0000]/5 transition-colors duration-300"></span>
                <span class="absolute -inset-1 rounded-xl bg-[#FF0000]/0 group-hover:bg-[#FF0000]/10 blur-sm transition-all duration-300 -z-10"></span>
              </a>
              <a href="#" class="group relative p-2 rounded-lg transition-all duration-300 hover:bg-[#1DA1F2]/10">
                <i class="fab fa-twitter text-xl text-gray-400 group-hover:text-[#1DA1F2] transition-all duration-300 group-hover:scale-125"></i>
                <span class="absolute inset-0 rounded-lg bg-[#1DA1F2]/0 group-hover:bg-[#1DA1F2]/5 transition-colors duration-300"></span>
                <span class="absolute -inset-1 rounded-xl bg-[#1DA1F2]/0 group-hover:bg-[#1DA1F2]/10 blur-sm transition-all duration-300 -z-10"></span>
              </a>
            </div>
            <!-- Footer IP -->
            <div class="mt-4">
              <p class="text-gray-400">Server IP:</p>
              <div class="flex items-center mt-1">
                <code class="text-[#fd7e14] text-sm server-connection select-all cursor-pointer">fivem://connect/kj656a</code>
                <button class="copy-button text-gray-400 hover:text-[#10b981] p-2 rounded-lg transition-all duration-300 hover:bg-[#10b981]/10 group/btn cursor-pointer ml-2">
                  <i class="fas fa-copy group-hover/btn:scale-110 transition-transform duration-300"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <hr class="border-gray-800 my-6">
        
        <div class="text-center text-gray-500 text-sm">
          <p>&copy; 2025 SIAN ROLEPLAY. All rights reserved.</p>
          <p class="mt-2">Not affiliated with Rockstar Games, Inc. or Take-Two Interactive Software, Inc.</p>
        </div>
      </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
  </body>
</html> 
