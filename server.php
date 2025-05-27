<!DOCTYPE html>
<html lang="en" data-theme="dark">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server | SIAN ROLEPLAY</title>
    <link rel="icon" type="image/x-icon" href="https://r2.fivemanage.com/w25XuiZ98xRs3Ksv57fIz/New_Project-Photoroom.png">
    <meta name="description" content="Connect to SIAN ROLEPLAY - The most immersive FiveM roleplay experience."/>
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
              secondary: '#e68432',
              tertiary: '#fd7e14',
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
              <span class="text-[#fd7e14]">SIAN</span> <span class="text-white">ROLEPLAY</span>
              <div class="flex items-center gap-1 ml-2">
                <span class="relative group">
                  <span class="absolute -inset-1 bg-gradient-to-r from-[#f59e0b] to-[#d97706] rounded-full blur opacity-30 group-hover:opacity-60 transition duration-300"></span>
                  <!-- <i class="fas fa-crown text-[#f59e0b] text-xs group-hover:scale-110 transition-all duration-300"></i> -->
                </span>
                <span class="relative group">
                  <span class="absolute -inset-1 bg-gradient-to-r from-[#fd7e14] to-[#059669] rounded-full blur opacity-30 group-hover:opacity-60 transition duration-300"></span>
                  <!-- <i class="fas fa-star text-[#fd7e14] text-xs group-hover:scale-110 transition-all duration-300"></i> -->
                </span>
                <span class="relative group">
                  <span class="absolute -inset-1 bg-gradient-to-r from-[#3b82f6] to-[#2563eb] rounded-full blur opacity-30 group-hover:opacity-60 transition duration-300"></span>
                  <!-- <i class="fas fa-gem text-[#3b82f6] text-xs group-hover:scale-110 transition-all duration-300"></i> -->
                </span>
              </div>
            </a>
          </div>
          <div class="hidden md:flex space-x-6">
            <a href="index.php" class="text-white hover:text-[#fd7e14] transition duration-300">Home</a>
            <a href="about.php" class="text-white hover:text-[#fd7e14] transition duration-300">About</a>
            <a href="server.php" class="text-[#fd7e14] border-b-2 border-[#fd7e14] pb-1 transition duration-300">Server</a>
            <a href="shop.php" class="text-white hover:text-[#fd7e14] transition duration-300">Shop</a>
            <a href="gallery.php" class="text-white hover:text-[#fd7e14] transition duration-300">Gallery</a>
            <a href="contact.php" class="text-white hover:text-[#fd7e14] transition duration-300">Contact</a>
            <div class="relative group hidden md:block">
              <button class="text-white hover:text-[#fd7e14] transition duration-300 flex items-center gap-1">
                Legal
                <i class="fas fa-chevron-down text-xs transition-transform duration-300 group-hover:rotate-180"></i>
              </button>
              <div class="absolute left-0 mt-2 w-48 bg-[#1a1d24]/95 backdrop-blur-md rounded-lg shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                <a href="terms.php" class="block px-4 py-2 text-white hover:text-[#fd7e14] hover:bg-dark/50 transition duration-300 flex items-center gap-2">
                  <i class="fas fa-file-contract text-xs"></i>
                  Terms of Service
                </a>
                <a href="privacy.php" class="block px-4 py-2 text-white hover:text-[#fd7e14] hover:bg-dark/50 transition duration-300 flex items-center gap-2">
                  <i class="fas fa-shield-alt text-xs"></i>
                  Privacy Policy
                </a>
                <a href="rules.php" class="block px-4 py-2 text-white hover:text-[#fd7e14] hover:bg-dark/50 transition duration-300 flex items-center gap-2">
                  <i class="fas fa-gavel text-xs"></i>
                  Rules
                </a>
              </div>
            </div>
          </div>
          <div class="md:hidden flex items-center">
            <button id="mobile-menu-button" class="text-white hover:text-[#10b981] focus:outline-none p-2 relative group">
              <div class="absolute -inset-1 bg-primary/20 rounded-full blur opacity-0 group-hover:opacity-50 transition-all duration-300"></div>
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
          <a href="server.php" class="block px-4 py-3 text-primary bg-dark/50 rounded-lg transition duration-300 flex items-center" data-mobile-link="true">
            <i class="fas fa-server mr-2"></i> Server
          </a>
          <a href="gallery.php" class="block px-4 py-3 text-white hover:text-primary hover:bg-dark/50 rounded-lg transition duration-300 flex items-center" data-mobile-link="true">
            <i class="fas fa-images mr-2"></i> Gallery
          </a>
          <a href="contact.php" class="block px-4 py-3 text-white hover:text-primary hover:bg-dark/50 rounded-lg transition duration-300 flex items-center" data-mobile-link="true">
            <i class="fas fa-envelope mr-2"></i> Contact
          </a>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="relative pt-24 pb-12 md:pt-32 md:pb-16 bg-dark-light">
      <div class="absolute inset-0 overflow-hidden opacity-20">
        <img src="https://r2.fivemanage.com/1B6peXm4G5YHsX5ZWqMIT/6d70e6-1.webp" alt="Background" class="w-full h-full object-cover">
      </div>
      <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Server <span class="text-primary">Information</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
          Connect to our FiveM server and start your roleplay adventure
        </p>
      </div>
    </header>

    <!-- Quick Connect -->
    <section class="py-12 bg-dark">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          <div class="bg-[#1a1d24]/95 backdrop-blur-md rounded-2xl shadow-2xl overflow-hidden border border-primary/20 hover:border-primary/40 transition-all duration-500" data-aos="fade-up">
            <div class="p-6 md:p-8">
              <!-- Header -->
              <div class="flex items-center justify-between mb-8">
                <div>
                  <h2 class="text-3xl font-bold bg-gradient-to-r from-primary via-secondary to-tertiary bg-clip-text text-transparent">Quick Connect</h2>
                  <p class="text-gray-400 mt-1">Join our server instantly</p>
                </div>
                <div class="relative group">
                  <div class="absolute -inset-1 bg-gradient-to-r from-primary via-secondary to-tertiary rounded-full blur opacity-40 group-hover:opacity-75 transition duration-500"></div>
                  <div class="relative w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center group-hover:bg-primary/20 transition-all duration-300">
                    <i class="fas fa-plug text-primary text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                  </div>
                </div>
              </div>

              <!-- Server Status -->
              <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                <div class="bg-dark/50 backdrop-blur-sm p-4 rounded-xl border border-primary/10 hover:border-primary/30 transition-all duration-300">
                  <div class="flex items-center gap-3">
                    <div class="bg-primary/10 p-2 rounded-lg">
                      <i class="fas fa-users text-primary"></i>
                    </div>
                    <div>
                      <p class="text-gray-400 text-sm">Players</p>
                      <p class="text-primary font-bold quick-stats-players">0/64</p>
                    </div>
                  </div>
                </div>
                
                <div class="bg-dark/50 backdrop-blur-sm p-4 rounded-xl border border-secondary/10 hover:border-secondary/30 transition-all duration-300">
                  <div class="flex items-center gap-3">
                    <div class="bg-secondary/10 p-2 rounded-lg">
                      <i class="fas fa-signal text-secondary"></i>
                    </div>
                    <div>
                      <p class="text-gray-400 text-sm">Ping</p>
                      <p class="text-secondary font-bold quick-stats-ping">32ms</p>
                    </div>
                  </div>
                </div>
                
                <div class="bg-dark/50 backdrop-blur-sm p-4 rounded-xl border border-tertiary/10 hover:border-tertiary/30 transition-all duration-300">
                  <div class="flex items-center gap-3">
                    <div class="bg-tertiary/10 p-2 rounded-lg">
                      <i class="fas fa-circle text-tertiary animate-pulse"></i>
                    </div>
                    <div>
                      <p class="text-gray-400 text-sm">Status</p>
                      <p class="text-tertiary font-bold">Online</p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Connection Info -->
              <div class="bg-dark/50 backdrop-blur-sm p-6 rounded-xl border border-primary/10 hover:border-primary/30 transition-all duration-300">
                <div class="flex flex-col md:flex-row items-center gap-4">
                  <div class="flex-1 w-full">
                    <div class="relative">
                      <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-link text-primary"></i>
                      </div>
                      <input type="text" value="fivem://connect/kj656a" readonly class="w-full bg-dark/50 border border-primary/20 text-primary rounded-lg pl-10 pr-20 py-3 focus:outline-none focus:border-primary/40 transition-all duration-300 server-connection" />
                      <button class="copy-button absolute right-2 top-1/2 -translate-y-1/2 text-gray-400 hover:text-primary p-2 rounded-lg transition-all duration-300 hover:bg-primary/10">
                        <i class="fas fa-copy"></i>
                      </button>
                    </div>
                  </div>
                  
                  <a href="fivem://connect/kj656a" class="join-now-btn bg-gradient-to-r from-primary via-secondary to-tertiary hover:from-primary/90 hover:via-secondary/90 hover:to-tertiary/90 text-white px-8 py-3 rounded-lg transition-all duration-300 flex items-center gap-2 shadow-lg shadow-primary/20 hover:shadow-xl hover:shadow-primary/30 hover:scale-105 whitespace-nowrap">
                    <i class="fas fa-play"></i>
                    Join Now
                  </a>
                </div>
              </div>

              <!-- Additional Info -->
              <div class="mt-6 text-center">
                <p class="text-gray-400 text-sm">
                  <i class="fas fa-info-circle text-primary mr-2"></i>
                  Need help connecting? Check our <a href="#" class="text-primary hover:text-secondary transition-colors duration-300">connection guide</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Server Status & Features -->
    <section class="py-12 bg-dark-light">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <!-- Server Status -->
          <div class="bg-dark/50 backdrop-blur-sm rounded-xl shadow-xl overflow-hidden" data-aos="fade-up">
            <div class="p-4">
              <div class="flex items-center justify-between mb-4">
                <div>
                  <h2 class="text-xl font-bold mb-1">Server Status</h2>
                  <p class="text-gray-400 text-sm">Real-time statistics</p>
                </div>
                <div class="flex items-center">
                  <div class="w-2 h-2 rounded-full mr-2 animate-pulse" style="background-color: #fd7e14;"></div>
                  <span class="text-sm" style="color: #fd7e14;">Online</span>
                </div>
              </div>
              
              <div class="grid grid-cols-2 gap-2">
                <!-- Modernize edilmiş Active Players paneli -->
                <div class="relative bg-dark p-3 rounded-lg group hover:bg-dark-light/80 transition duration-300 overflow-hidden">
                  <div class="absolute inset-0 bg-gradient-to-r from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                  <div class="relative z-10">
                    <div class="flex items-center">
                      <div class="bg-primary/20 text-primary p-1.5 w-8 h-8 flex items-center justify-center rounded-lg mr-2 group-hover:bg-primary/30 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-users text-sm group-hover:text-white transition-all duration-300"></i>
                      </div>
                      <div>
                        <div class="text-lg font-bold relative group">
                          <span class="text-primary transition-all duration-300 player-count">0/64</span>
                          <div class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-primary to-transparent scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                        <p class="text-gray-400 text-xs">Active Players</p>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Server Region paneli -->
                <div class="relative bg-dark p-3 rounded-lg group hover:bg-dark-light/80 transition duration-300 overflow-hidden">
                  <div class="absolute inset-0 bg-gradient-to-r from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                  <div class="relative z-10">
                    <div class="flex items-center">
                      <div class="bg-primary/20 text-primary p-1.5 w-8 h-8 flex items-center justify-center rounded-lg mr-2 group-hover:bg-primary/30 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-globe text-sm group-hover:text-white transition-all duration-300"></i>
                      </div>
                      <div>
                        <div class="text-lg font-bold relative group truncate max-w-[100px]">
                          <span class="text-primary transition-all duration-300 server-region">TH</span>
                          <div class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-primary to-transparent scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                        <p class="text-gray-400 text-xs">Server Region</p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Server Score paneli -->
                <div class="relative bg-dark p-3 rounded-lg group hover:bg-dark-light/80 transition duration-300 overflow-hidden">
                  <div class="absolute inset-0 bg-gradient-to-r from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                  <div class="relative z-10">
                    <div class="flex items-center">
                      <div class="bg-primary/20 text-primary p-1.5 w-8 h-8 flex items-center justify-center rounded-lg mr-2 group-hover:bg-primary/30 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-star text-sm group-hover:text-white transition-all duration-300"></i>
                      </div>
                      <div>
                        <div class="text-lg font-bold relative group">
                          <span class="text-primary transition-all duration-300 server-score">11,862</span>
                          <div class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-primary to-transparent scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                        <p class="text-gray-400 text-xs">Server Score</p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Resources paneli -->
                <div class="relative bg-dark p-3 rounded-lg group hover:bg-dark-light/80 transition duration-300 overflow-hidden">
                  <div class="absolute inset-0 bg-gradient-to-r from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                  <div class="relative z-10">
                    <div class="flex items-center">
                      <div class="bg-primary/20 text-primary p-1.5 w-8 h-8 flex items-center justify-center rounded-lg mr-2 group-hover:bg-primary/30 group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-cube text-sm group-hover:text-white transition-all duration-300"></i>
                      </div>
                      <div>
                        <div class="text-lg font-bold relative group">
                          <span class="text-primary transition-all duration-300 resource-count">298</span>
                          <div class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-primary to-transparent scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                        <p class="text-gray-400 text-xs">Resources</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Oyuncu İstatistikleri -->
              <div id="player-stats" class="mt-4"></div>

              <!-- Sunucu Detayları -->
              <div class="mt-4 text-sm space-y-2">
                <div class="grid grid-cols-2 gap-x-6 gap-y-2">
                  <div class="bg-dark p-2 rounded-lg">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-400">Last Restart</span>
                      <span class="text-primary" id="last-restart">1 days ago</span>
                    </div>
                  </div>
                  <div class="bg-dark p-2 rounded-lg">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-400">Next Maintenance</span>
                      <span class="text-primary" id="next-maintenance">5 days</span>
                    </div>
                  </div>
                  <div class="bg-dark p-2 rounded-lg">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-400">Version</span>
                      <span class="text-primary" id="server-version">v1.8.5</span>
                    </div>
                  </div>
                  <div class="bg-dark p-2 rounded-lg">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-400">Average Ping</span>
                      <span class="text-primary" id="average-ping">32-60ms</span>
                    </div>
                  </div>
                  <div class="bg-dark p-2 rounded-lg">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-400">Server Location</span>
                      <span class="text-primary" id="server-location">Frankfurt, DE</span>
                    </div>
                  </div>
                  <div class="bg-dark p-2 rounded-lg">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-400">Backup Frequency</span>
                      <span class="text-primary" id="backup-frequency">Every 6h</span>
                    </div>
                  </div>
                  <div class="bg-dark p-2 rounded-lg">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-400">DDoS Protection</span>
                      <span class="text-primary" id="ddos-protection">Enabled</span>
                    </div>
                  </div>
                  <div class="bg-dark p-2 rounded-lg">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-400">Server Type</span>
                      <span class="text-primary" id="server-type">Dedicated</span>
                    </div>
                  </div>
                  <div class="bg-dark p-2 rounded-lg">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-400">Server Region</span>
                      <span class="text-primary" id="server-region">Thailand</span>
                    </div>
                  </div>
                  <div class="bg-dark p-2 rounded-lg">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-400">Server Provider</span>
                      <span class="text-primary" id="server-provider">OVH</span>
                    </div>
                  </div>
                  <div class="bg-dark p-2 rounded-lg">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-400">Server Uptime</span>
                      <span class="text-primary" id="server-uptime">99.9%</span>
                    </div>
                  </div>
                  <!-- Yeni eklenen bilgiler -->
                  <div class="bg-dark p-2 rounded-lg">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-400">Framework</span>
                      <span class="text-primary" id="server-framework">QBCORE</span>
                    </div>
                  </div>
                  <div class="bg-dark p-2 rounded-lg">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-400">Script Version</span>
                      <span class="text-primary" id="script-version">1.9.4</span>
                    </div>
                  </div>
                  <div class="bg-dark p-2 rounded-lg">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-400">Game Version</span>
                      <span class="text-primary" id="game-version">1.68</span>
                    </div>
                  </div>
                  <div class="bg-dark p-2 rounded-lg">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-400">Voice System</span>
                      <span class="text-primary" id="voice-system">Mumble 2.0</span>
                    </div>
                  </div>
                  <div class="bg-dark p-2 rounded-lg">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-400">Anti-Cheat</span>
                      <span class="text-primary" id="anticheat">SIANAC v1</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Quick Features -->
          <div class="bg-dark/50 backdrop-blur-sm rounded-xl shadow-xl overflow-hidden" data-aos="fade-up">
            <div class="p-4">
              <div class="flex items-center justify-between mb-1">
                <div>
                  <h2 class="text-xl font-bold mb-1">Featured Features</h2>
                  <p class="text-gray-400 text-sm">Our best features</p>
                </div>
                <div class="bg-primary/20 text-primary p-2 rounded-full">
                  <i class="fas fa-star text-sm"></i>
                </div>
              </div>
              
              <div class="space-y-2">
                <div class="flex items-center bg-dark p-3 rounded-lg hover:bg-dark-light transition duration-300">
                  <div class="bg-primary/20 text-primary p-1.5 rounded-lg mr-3">
                    <i class="fas fa-car text-sm"></i>
                  </div>
                  <div>
                    <h3 class="font-bold text-sm">Custom Vehicles Mod</h3>
                    <p class="text-gray-400 text-xs">50+ custom vehicles mod</p>
                  </div>
                </div>
                
                <div class="flex items-center bg-dark p-3 rounded-lg hover:bg-dark-light transition duration-300">
                  <div class="bg-primary/20 text-primary p-1.5 rounded-lg mr-3">
                    <i class="fas fa-briefcase text-sm"></i>
                  </div>
                  <div>
                    <h3 class="font-bold text-sm">Job System</h3>
                    <p class="text-gray-400 text-xs">30+ different jobs</p>
                  </div>
                </div>
                
                <div class="flex items-center bg-dark p-3 rounded-lg hover:bg-dark-light transition duration-300">
                  <div class="bg-primary/20 text-primary p-1.5 rounded-lg mr-3">
                    <i class="fas fa-home text-sm"></i>
                  </div>
                  <div>
                    <h3 class="font-bold text-sm">Housing System</h3>
                    <p class="text-gray-400 text-xs">1000+ custom houses</p>
                  </div>
                </div>

                <div class="flex items-center bg-dark p-3 rounded-lg hover:bg-dark-light transition duration-300">
                  <div class="bg-primary/20 text-primary p-1.5 rounded-lg mr-3">
                    <i class="fas fa-shield-alt text-sm"></i>
                  </div>
                  <div>
                    <h3 class="font-bold text-sm">Police System</h3>
                    <p class="text-gray-400 text-xs">Advanced police system with realistic features</p>
                  </div>
                </div>

                <div class="flex items-center bg-dark p-3 rounded-lg hover:bg-dark-light transition duration-300">
                  <div class="bg-primary/20 text-primary p-1.5 rounded-lg mr-3">
                    <i class="fas fa-store text-sm"></i>
                  </div>
                  <div>
                    <h3 class="font-bold text-sm">Market System</h3>
                    <p class="text-gray-400 text-xs">50+ custom stores</p>
                  </div>
                </div>

                <div class="flex items-center bg-dark p-3 rounded-lg hover:bg-dark-light transition duration-300">
                  <div class="bg-primary/20 text-primary p-1.5 rounded-lg mr-3">
                    <i class="fas fa-ambulance text-sm"></i>
                  </div>
                  <div>
                    <h3 class="font-bold text-sm">EMS System</h3>
                    <p class="text-gray-400 text-xs">Advanced medical system</p>
                  </div>
                </div>

                <div class="flex items-center bg-dark p-3 rounded-lg hover:bg-dark-light transition duration-300">
                  <div class="bg-primary/20 text-primary p-1.5 rounded-lg mr-3">
                    <i class="fas fa-gavel text-sm"></i>
                  </div>
                  <div>
                    <h3 class="font-bold text-sm">Justice System</h3>
                    <p class="text-gray-400 text-xs">Court and penalty system</p>
                  </div>
                </div>

                <div class="flex items-center bg-dark p-3 rounded-lg hover:bg-dark-light transition duration-300">
                  <div class="bg-primary/20 text-primary p-1.5 rounded-lg mr-3">
                    <i class="fas fa-warehouse text-sm"></i>
                  </div>
                  <div>
                    <h3 class="font-bold text-sm">Business System</h3>
                    <p class="text-gray-400 text-xs">Own and manage your business</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Server Rules -->
          <div class="bg-dark/50 backdrop-blur-sm rounded-xl shadow-xl overflow-hidden" data-aos="fade-up">
            <div class="p-4">
              <div class="flex items-center justify-between mb-4">
                <div>
                  <h2 class="text-xl font-bold mb-1">Server Rules</h2>
                  <p class="text-gray-400 text-sm">Important guidelines</p>
                </div>
                <div class="bg-primary/20 text-primary p-2 rounded-full">
                  <i class="fas fa-gavel text-sm"></i>
                </div>
              </div>
              
              <div class="space-y-2">
                <div class="bg-dark p-3 rounded-lg hover:bg-dark-light transition duration-300">
                  <div class="flex items-center mb-2">
                    <div class="bg-primary/20 text-primary p-1.5 rounded-lg mr-2">
                      <i class="fas fa-exclamation-circle text-sm"></i>
                    </div>
                    <h3 class="font-bold text-sm">General Rules</h3>
                  </div>
                  <ul class="space-y-1 text-gray-300 text-xs">
                    <li class="flex items-start">
                      <i class="fas fa-check text-primary mt-0.5 mr-1.5"></i>
                      <span>Respect all players</span>
                    </li>
                    <li class="flex items-start">
                      <i class="fas fa-check text-primary mt-0.5 mr-1.5"></i>
                      <span>No cheating or exploits</span>
                    </li>
                    <li class="flex items-start">
                      <i class="fas fa-check text-primary mt-0.5 mr-1.5"></i>
                      <span>Follow roleplay rules</span>
                    </li>
                  </ul>
                </div>
                
                <div class="bg-dark p-3 rounded-lg hover:bg-dark-light transition duration-300">
                  <div class="flex items-center mb-2">
                    <div class="bg-primary/20 text-primary p-1.5 rounded-lg mr-2">
                      <i class="fas fa-microphone text-sm"></i>
                    </div>
                    <h3 class="font-bold text-sm">Voice Chat</h3>
                  </div>
                  <ul class="space-y-1 text-gray-300 text-xs">
                    <li class="flex items-start">
                      <i class="fas fa-check text-primary mt-0.5 mr-1.5"></i>
                      <span>Use push-to-talk</span>
                    </li>
                    <li class="flex items-start">
                      <i class="fas fa-check text-primary mt-0.5 mr-1.5"></i>
                      <span>No background noise</span>
                    </li>
                    <li class="flex items-start">
                      <i class="fas fa-check text-primary mt-0.5 mr-1.5"></i>
                      <span>Stay in character</span>
                    </li>
                  </ul>
                </div>

                <div class="bg-dark p-3 rounded-lg hover:bg-dark-light transition duration-300">
                  <div class="flex items-center mb-2">
                    <div class="bg-primary/20 text-primary p-1.5 rounded-lg mr-2">
                      <i class="fas fa-user-shield text-sm"></i>
                    </div>
                    <h3 class="font-bold text-sm">Staff Rules</h3>
                  </div>
                  <ul class="space-y-1 text-gray-300 text-xs">
                    <li class="flex items-start">
                      <i class="fas fa-check text-primary mt-0.5 mr-1.5"></i>
                      <span>Respect staff decisions</span>
                    </li>
                    <li class="flex items-start">
                      <i class="fas fa-check text-primary mt-0.5 mr-1.5"></i>
                      <span>No staff impersonation</span>
                    </li>
                    <li class="flex items-start">
                      <i class="fas fa-check text-primary mt-0.5 mr-1.5"></i>
                      <span>Report issues properly</span>
                    </li>
                  </ul>
                </div>

                <div class="bg-dark p-3 rounded-lg hover:bg-dark-light transition duration-300">
                  <div class="flex items-center mb-2">
                    <div class="bg-primary/20 text-primary p-1.5 rounded-lg mr-2">
                      <i class="fas fa-user-edit text-sm"></i>
                    </div>
                    <h3 class="font-bold text-sm">Character Development</h3>
                  </div>
                  <ul class="space-y-1 text-gray-300 text-xs">
                    <li class="flex items-start">
                      <i class="fas fa-check text-primary mt-0.5 mr-1.5"></i>
                      <span>Create realistic backstories</span>
                    </li>
                    <li class="flex items-start">
                      <i class="fas fa-check text-primary mt-0.5 mr-1.5"></i>
                      <span>Maintain consistent character traits</span>
                    </li>
                    <li class="flex items-start">
                      <i class="fas fa-check text-primary mt-0.5 mr-1.5"></i>
                      <span>No powergaming or metagaming</span>
                    </li>
                  </ul>
                </div>
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
              <li><a href="server.php" class="text-primary transition duration-300">Server</a></li>
              <!-- <li><a href="gallery.php" class="text-gray-400 hover:text-primary transition duration-300">Gallery</a></li>
              <li><a href="contact.php" class="text-gray-400 hover:text-primary transition duration-300">Contact</a></li> -->
              <!-- <li><a href="terms.php" class="text-gray-400 hover:text-primary transition duration-300">Legal</a></li> -->
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
          <p>&copy; 2023 SIAN ROLEPLAY. All rights reserved.</p>
          <p class="mt-2">Not affiliated with Rockstar Games, Inc. or Take-Two Interactive Software, Inc.</p>
        </div>
      </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="mobile-menu.js"></script>
    <script src="script.js"></script>
  </body>
</html> 
