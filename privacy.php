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
      <div id="mobile-menu" class="hidden md:hidden fixed inset-x-0 top-[73px] bg-[#1a1d24]/95 backdrop-blur-md transition-all duration-300 ease-in-out">
        <div class="px-6 py-4 space-y-3">
          <div class="text-2xl font-bold mb-6">
            <span class="text-white">Privacy</span>
            <span class="text-[#10b981]">Policy</span>
          </div>
          <p class="text-gray-400 text-sm mb-8">How we handle your data</p>
          
          <!-- Navigation Links -->
          <div class="space-y-3">
            <a href="index.php" class="block text-lg text-white hover:text-[#10b981] transition duration-300">Home</a>
            <a href="about.php" class="block text-lg text-white hover:text-[#10b981] transition duration-300">About</a>
            <a href="shop.php" class="block text-lg text-white hover:text-[#10b981] transition duration-300">Shop</a>
            <a href="server.php" class="block text-lg text-white hover:text-[#10b981] transition duration-300">Server</a>
            <a href="gallery.php" class="block text-lg text-white hover:text-[#10b981] transition duration-300">Gallery</a>
            <a href="contact.php" class="block text-lg text-white hover:text-[#10b981] transition duration-300">Contact</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="relative pt-24 pb-16 md:pt-32 md:pb-24 bg-dark-light">
      <div class="absolute inset-0 overflow-hidden opacity-20">
        <img src="https://r2.fivemanage.com/1B6peXm4G5YHsX5ZWqMIT/SaveClip.App_371177827_986722192563279_1156816684786578399_n.jpg" alt="Background" class="w-full h-full object-cover">
      </div>
      <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Privacy <span class="text-primary">Policy</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
          How we collect, use, and protect your information
        </p>
      </div>
    </header>

    <!-- Privacy Content -->
    <section class="py-16 bg-dark">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          <div class="bg-dark-light/50 backdrop-blur-sm p-8 rounded-xl shadow-xl space-y-8" data-aos="fade-up">
            <!-- Introduction -->
            <div>
              <h2 class="text-2xl font-bold mb-4">1. Introduction</h2>
              <p class="text-gray-300">This Privacy Policy explains how SIAN ROLEPLAY collects, uses, and protects your personal information. We are committed to ensuring your privacy and protecting any data you share with us.</p>
            </div>

            <!-- Information We Collect -->
            <div>
              <h2 class="text-2xl font-bold mb-4">2. Information We Collect</h2>
              <ul class="list-disc list-inside text-gray-300 space-y-2">
                <li>Account information (username, email)</li>
                <li>Game-related data (playtime, in-game actions)</li>
                <li>Discord information when you join our server</li>
                <li>IP addresses and device information</li>
                <li>Communication records from support tickets</li>
              </ul>
            </div>

            <!-- How We Use Your Information -->
            <div>
              <h2 class="text-2xl font-bold mb-4">3. How We Use Your Information</h2>
              <ul class="list-disc list-inside text-gray-300 space-y-2">
                <li>To provide and maintain our services</li>
                <li>To improve user experience</li>
                <li>To communicate with you about updates and changes</li>
                <li>To enforce our rules and policies</li>
                <li>To prevent fraud and abuse</li>
              </ul>
            </div>

            <!-- Data Security -->
            <div>
              <h2 class="text-2xl font-bold mb-4">4. Data Security</h2>
              <p class="text-gray-300">We implement appropriate security measures to protect your information:</p>
              <ul class="list-disc list-inside text-gray-300 space-y-2 mt-2">
                <li>Secure data encryption</li>
                <li>Regular security audits</li>
                <li>Limited staff access to personal data</li>
                <li>Secure server infrastructure</li>
              </ul>
            </div>

            <!-- Data Sharing -->
            <div>
              <h2 class="text-2xl font-bold mb-4">5. Data Sharing</h2>
              <p class="text-gray-300">We do not sell or share your personal information with third parties except:</p>
              <ul class="list-disc list-inside text-gray-300 space-y-2 mt-2">
                <li>When required by law</li>
                <li>To protect our rights and safety</li>
                <li>With your explicit consent</li>
              </ul>
            </div>

            <!-- Your Rights -->
            <div>
              <h2 class="text-2xl font-bold mb-4">6. Your Rights</h2>
              <p class="text-gray-300">You have the right to:</p>
              <ul class="list-disc list-inside text-gray-300 space-y-2 mt-2">
                <li>Access your personal data</li>
                <li>Request data correction or deletion</li>
                <li>Opt-out of marketing communications</li>
                <li>Request data portability</li>
              </ul>
            </div>

            <!-- Cookies -->
            <div>
              <h2 class="text-2xl font-bold mb-4">7. Cookies</h2>
              <p class="text-gray-300">We use cookies to improve your experience:</p>
              <ul class="list-disc list-inside text-gray-300 space-y-2 mt-2">
                <li>Essential cookies for site functionality</li>
                <li>Analytics cookies to understand usage</li>
                <li>Preference cookies to remember settings</li>
              </ul>
            </div>

            <!-- Contact -->
            <div>
              <h2 class="text-2xl font-bold mb-4">8. Contact Us</h2>
              <p class="text-gray-300">For privacy-related questions or concerns, please contact our privacy team through Discord or our contact form.</p>
            </div>

            <!-- Last Updated -->
            <div class="pt-8 border-t border-gray-700">
              <p class="text-gray-400 text-sm">Last updated: May 2025</p>
              
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
              <li><a href="privacy.php" class="text-primary transition duration-300">Privacy Policy</a></li>
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
