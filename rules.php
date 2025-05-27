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
            <a href="about.php" class="text-white hover:text-orange-500 transition duration-300">About</a>
            <a href="shop.php" class="text-white hover:text-orange-500 transition duration-300">Shop</a>
            <!-- <a href="server.php" class="text-white hover:text-orange-500 transition duration-300">Server</a> -->
            <!-- <a href="gallery.php" class="text-white hover:text-orange-500 transition duration-300">Gallery</a>
            <a href="contact.php" class="text-white hover:text-orange-500 transition duration-300">Contact</a> -->
            <div class="relative group hidden md:block">
              <button class="text-orange-500 border-b-2 border-orange-500 pb-1 hover:text-orange-500 transition duration-300 flex items-center gap-1">
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
      <div id="mobile-menu" class="hidden md:hidden fixed inset-x-0 top-[73px] bg-dark-light/95 backdrop-blur-md transition-all duration-300 ease-in-out transform translate-y-[-20px] opacity-0 rounded-b-xl shadow-lg border border-white/5">
        <div class="px-4 py-4 space-y-2">
          <a href="index.php" class="block px-4 py-3 text-white hover:text-primary hover:bg-dark/50 rounded-lg transition duration-300 flex items-center" data-mobile-link="true">
            <i class="fas fa-home mr-2"></i> Home
          </a>
          <a href="about.php" class="block px-4 py-3 text-white hover:text-primary hover:bg-dark/50 rounded-lg transition duration-300 flex items-center" data-mobile-link="true">
            <i class="fas fa-info-circle mr-2"></i> About
          </a>
          <a href="shop.php" class="block px-4 py-3 text-white hover:text-primary hover:bg-dark/50 rounded-lg transition duration-300 flex items-center" data-mobile-link="true">
            <i class="fas fa-info-circle mr-2"></i> Shop
          </a>
          <!-- <a href="server.php" class="block px-4 py-3 text-white hover:text-primary hover:bg-dark/50 rounded-lg transition duration-300 flex items-center" data-mobile-link="true">
            <i class="fas fa-server mr-2"></i> Server
          </a>
          <a href="gallery.php" class="block px-4 py-3 text-white hover:text-primary hover:bg-dark/50 rounded-lg transition duration-300 flex items-center" data-mobile-link="true">
            <i class="fas fa-images mr-2"></i> Gallery
          </a>
          <a href="contact.php" class="block px-4 py-3 text-white hover:text-primary hover:bg-dark/50 rounded-lg transition duration-300 flex items-center" data-mobile-link="true">
            <i class="fas fa-envelope mr-2"></i> Contact
          </a> -->
          
          <!-- Legal Dropdown in Mobile Menu -->
          <div class="mobile-dropdown">
            <button class="w-full text-left px-4 py-3 text-primary bg-dark/50 rounded-lg transition duration-300 flex items-center justify-between">
              <div class="flex items-center">
                <i class="fas fa-gavel mr-2"></i> Legal
              </div>
              <i class="fas fa-chevron-down transition-transform duration-300"></i>
            </button>
            <div class="mobile-dropdown-content pl-8 space-y-2 mt-1 overflow-hidden">
              <a href="terms.php" class="block px-4 py-2 text-white hover:text-primary hover:bg-dark/50 rounded-lg transition duration-300 flex items-center" data-mobile-link="true">
                <i class="fas fa-file-contract mr-2 text-xs"></i> Terms
              </a>
              <a href="privacy.php" class="block px-4 py-2 text-white hover:text-primary hover:bg-dark/50 rounded-lg transition duration-300 flex items-center" data-mobile-link="true">
                <i class="fas fa-shield-alt mr-2 text-xs"></i> Privacy
              </a>
              <a href="rules.php" class="block px-4 py-2 text-primary hover:bg-dark/50 rounded-lg transition duration-300 flex items-center" data-mobile-link="true">
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
        <img src="https://r2.fivemanage.com/1B6peXm4G5YHsX5ZWqMIT/make-an-edit-for-gta-5-fivem-csgo.png" alt="Background" class="w-full h-full object-cover">
      </div>
      <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Server <span class="text-primary">Rules</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
          Guidelines and regulations for a better roleplay experience
        </p>
      </div>
    </header>

    <!-- Rules Content -->
    <section class="py-16 bg-dark">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          <div class="bg-dark-light/50 backdrop-blur-sm p-8 rounded-xl shadow-xl space-y-8" data-aos="fade-up">
            <!-- General Rules -->
            <div>
              <h2 class="text-2xl font-bold mb-4">1. General Rules</h2>
              <ul class="list-disc list-inside text-gray-300 space-y-2">
                <li>Respect all players and staff members</li>
                <li>No harassment, discrimination, or hate speech</li>
                <li>No cheating, hacking, or exploiting</li>
                <li>No advertising other servers or services</li>
                <li>Follow staff instructions at all times</li>
                <li>English or Turkish communication only</li>
                <li>Minimum age requirement: 16 years</li>
              </ul>
            </div>

            <!-- Roleplay Rules -->
            <div>
              <h2 class="text-2xl font-bold mb-4">2. Roleplay Rules</h2>
              <ul class="list-disc list-inside text-gray-300 space-y-2">
                <li>Stay in character at all times</li>
                <li>No Random Death Match (RDM)</li>
                <li>No Vehicle Death Match (VDM)</li>
                <li>No breaking character (OOC) in IC situations</li>
                <li>Use /me for actions when necessary</li>
                <li>No powergaming or unrealistic actions</li>
                <li>No metagaming (using OOC information IC)</li>
                <li>Value your life (VL) in all situations</li>
              </ul>
            </div>

            <!-- Vehicle Rules -->
            <div>
              <h2 class="text-2xl font-bold mb-4">3. Vehicle Rules</h2>
              <ul class="list-disc list-inside text-gray-300 space-y-2">
                <li>No vehicle ramming or intentional crashes</li>
                <li>Follow realistic driving behavior</li>
                <li>Respect vehicle ownership and territories</li>
                <li>No vehicle spawning without proper roleplay</li>
                <li>Report vehicle bugs to staff immediately</li>
              </ul>
            </div>

            <!-- Combat Rules -->
            <div>
              <h2 class="text-2xl font-bold mb-4">4. Combat Rules</h2>
              <ul class="list-disc list-inside text-gray-300 space-y-2">
                <li>No combat logging</li>
                <li>Maintain roleplay during combat situations</li>
                <li>No using exploits or glitches in combat</li>
                <li>Respect safe zones and neutral areas</li>
                <li>Follow weapon restrictions and regulations</li>
              </ul>
            </div>

            <!-- Business Rules -->
            <div>
              <h2 class="text-2xl font-bold mb-4">5. Business Rules</h2>
              <ul class="list-disc list-inside text-gray-300 space-y-2">
                <li>Maintain professional roleplay in businesses</li>
                <li>Follow business ownership guidelines</li>
                <li>No unrealistic business practices</li>
                <li>Respect business territories and competition</li>
                <li>Keep proper records and documentation</li>
              </ul>
            </div>

            <!-- Communication Rules -->
            <div>
              <h2 class="text-2xl font-bold mb-4">6. Communication Rules</h2>
              <ul class="list-disc list-inside text-gray-300 space-y-2">
                <li>Use appropriate channels for communication</li>
                <li>No spam or excessive noise</li>
                <li>Keep radio communications realistic</li>
                <li>No offensive or inappropriate names</li>
                <li>Report issues through proper channels</li>
              </ul>
            </div>

            <!-- Consequences -->
            <div>
              <h2 class="text-2xl font-bold mb-4">7. Rule Violations</h2>
              <p class="text-gray-300 mb-4">Consequences for rule violations may include:</p>
              <ul class="list-disc list-inside text-gray-300 space-y-2">
                <li>Verbal warnings</li>
                <li>Temporary bans</li>
                <li>Permanent bans</li>
                <li>Character resets</li>
                <li>Property confiscation</li>
              </ul>
            </div>

            <!-- Staff Authority -->
            <div>
              <h2 class="text-2xl font-bold mb-4">8. Staff Authority</h2>
              <ul class="list-disc list-inside text-gray-300 space-y-2">
                <li>Staff decisions are final</li>
                <li>Appeals must follow proper procedures</li>
                <li>Staff may modify rules as needed</li>
                <li>Respect staff authority at all times</li>
              </ul>
            </div>

            <!-- Last Updated -->
            <div class="pt-8 border-t border-gray-700">
              <p class="text-gray-400 text-sm">Last updated: January 2024</p>
              <p class="text-gray-400 text-sm mt-2">Note: Rules are subject to change. Check Discord for the most up-to-date information.</p>
              
              <!-- Copyright -->
              <div class="mt-6 pt-2 text-center opacity-60 hover:opacity-100 transition-opacity duration-300 copyright-holder">
                <a href="https://discord.gg/EkwWvFS" target="_blank" class="hover:no-underline cursor-pointer">
                  <p class="text-xs text-gray-400 relative z-10 hover:scale-105 transition-transform duration-300 copyright-text">
                    <span class="bg-gradient-to-r from-[#fd7e14] via-[#fd7e14] to-[#fd7e14] bg-clip-text text-transparent font-semibold">Copyright by</span>
                    <span class="text-white font-semibold tracking-wide"> sawadeekubpommhee</span>
                  </p>
                </a>
              </div>
            </div>
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
              <li><a href="about.php" class="text-gray-400 hover:text-primary transition duration-300">About</a></li>
              <!-- <li><a href="server.php" class="text-gray-400 hover:text-primary transition duration-300">Server</a></li>
              <li><a href="gallery.php" class="text-gray-400 hover:text-primary transition duration-300">Gallery</a></li>
              <li><a href="contact.php" class="text-gray-400 hover:text-primary transition duration-300">Contact</a></li> -->
            </ul>
          </div>
          
          <!-- Column 3 -->
          <div>
            <h4 class="text-white font-bold mb-4">Legal</h4>
            <ul class="space-y-2">
              <li><a href="terms.php" class="text-gray-400 hover:text-primary transition duration-300">Terms of Service</a></li>
              <li><a href="privacy.php" class="text-gray-400 hover:text-primary transition duration-300">Privacy Policy</a></li>
              <li><a href="rules.php" class="text-primary transition duration-300">Rules</a></li>
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
            <div class="mt-4">
              <p class="text-gray-400">Server IP:</p>
              <div class="flex items-center mt-1">
                <code class="text-[#fd7e14] text-sm">fivem://connect/kj656a</code>
                <button class="copy-ip-footer ml-2 text-gray-400 hover:text-[#fd7e14] transition duration-300 p-2 hover:bg-[#fd7e14]/5 rounded-lg group">
                  <i class="fas fa-copy group-hover:scale-110 transition-transform duration-300"></i>
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
