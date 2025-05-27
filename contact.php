<!DOCTYPE html>
<html lang="en" data-theme="dark">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | EYES ROLEPLAY</title>
    <link rel="icon" type="image/x-icon" href="https://r2.fivemanage.com/2P9FjNbfkvdwqJtyhr4v5/sitelogo.webp">
    <meta name="description" content="Get in touch with the EYES ROLEPLAY team for support, questions, or feedback."/>
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
    <nav class="bg-dark-light/80 backdrop-blur-md shadow-lg fixed w-full z-10">
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
            <a href="index.php" class="text-white hover:text-primary transition duration-300">Home</a>
            <a href="about.php" class="text-white hover:text-primary transition duration-300">About</a>
            <a href="server.php" class="text-white hover:text-primary transition duration-300">Server</a>
            <a href="gallery.php" class="text-white hover:text-primary transition duration-300">Gallery</a>
            <a href="contact.php" class="text-primary border-b-2 border-primary pb-1 transition duration-300">Contact</a>
            <div class="relative group hidden md:block">
              <button class="text-white hover:text-primary transition duration-300 flex items-center gap-1">
                Legal
                <i class="fas fa-chevron-down text-xs transition-transform duration-300 group-hover:rotate-180"></i>
              </button>
              <div class="absolute left-0 mt-2 w-48 bg-[#1a1d24]/95 backdrop-blur-md rounded-lg shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                <a href="terms.php" class="block px-4 py-2 text-white hover:text-primary hover:bg-dark/50 transition duration-300 flex items-center gap-2">
                  <i class="fas fa-file-contract text-xs"></i>
                  Terms of Service
                </a>
                <a href="privacy.php" class="block px-4 py-2 text-white hover:text-primary hover:bg-dark/50 transition duration-300 flex items-center gap-2">
                  <i class="fas fa-shield-alt text-xs"></i>
                  Privacy Policy
                </a>
                <a href="rules.php" class="block px-4 py-2 text-white hover:text-primary hover:bg-dark/50 transition duration-300 flex items-center gap-2">
                  <i class="fas fa-gavel text-xs"></i>
                  Rules
                </a>
              </div>
            </div>
          </div>
          <div class="md:hidden flex items-center">
            <button id="mobile-menu-button" class="text-white hover:text-primary focus:outline-none p-2">
              <i class="fas fa-bars text-xl"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Mobile Menu -->
      <div id="mobile-menu" class="hidden md:hidden fixed inset-x-0 top-[73px] bg-[#1a1d24]/95 backdrop-blur-md transition-all duration-300 ease-in-out">
        <div class="px-6 py-4 space-y-3">
          <div class="text-2xl font-bold mb-6">
            <span class="text-white">Contact</span>
            <span class="text-[#10b981]">Us</span>
          </div>
          <p class="text-gray-400 text-sm mb-8">Get in touch with our team for support</p>
          
          <!-- Navigation Links -->
          <div class="space-y-3">
            <a href="index.php" class="block text-lg text-white hover:text-[#10b981] transition duration-300">Home</a>
            <a href="about.php" class="block text-lg text-white hover:text-[#10b981] transition duration-300">About</a>
            <a href="server.php" class="block text-lg text-white hover:text-[#10b981] transition duration-300">Server</a>
            <a href="gallery.php" class="block text-lg text-white hover:text-[#10b981] transition duration-300">Gallery</a>
            <a href="contact.php" class="block text-lg text-[#10b981] font-medium">Contact</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="relative pt-24 pb-16 md:pt-32 md:pb-24 bg-dark-light">
      <div class="absolute inset-0 overflow-hidden opacity-20">
        <img src="https://forum.cfx.re/uploads/default/original/4X/7/5/e/75e7441dcd9f8a3a10cba5b43955edb414f87eb5.jpeg" alt="Background" class="w-full h-full object-cover">
      </div>
      <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Contact <span class="text-primary">Us</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
          Get in touch with our team for support, questions, or feedback
        </p>
      </div>
    </header>

    <!-- Contact Form -->
    <section class="py-16 bg-dark">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          <div class="bg-dark-light/50 backdrop-blur-sm p-8 rounded-xl shadow-xl" data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-8 text-center">Send Us a <span class="text-primary">Message</span></h2>
            <form id="contact-form" class="space-y-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Name</label>
                  <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg bg-dark border border-gray-700 focus:border-primary focus:ring-2 focus:ring-primary/20 transition duration-300" required>
                </div>
                <div>
                  <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                  <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg bg-dark border border-gray-700 focus:border-primary focus:ring-2 focus:ring-primary/20 transition duration-300" required>
                </div>
              </div>
              <div>
                <label for="subject" class="block text-sm font-medium text-gray-300 mb-2">Subject</label>
                <input type="text" id="subject" name="subject" class="w-full px-4 py-3 rounded-lg bg-dark border border-gray-700 focus:border-primary focus:ring-2 focus:ring-primary/20 transition duration-300" required>
              </div>
              <div>
                <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Message</label>
                <textarea id="message" name="message" rows="6" class="w-full px-4 py-3 rounded-lg bg-dark border border-gray-700 focus:border-primary focus:ring-2 focus:ring-primary/20 transition duration-300" required></textarea>
              </div>
              <div class="text-center">
                <button type="submit" class="bg-primary hover:bg-green-600 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Support Options -->
    <section class="py-16 bg-dark-light">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-12 text-center" data-aos="fade-up">Support <span class="text-primary">Options</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Option 1 -->
          <div class="bg-dark p-6 rounded-lg shadow-lg" data-aos="fade-up">
            <div class="text-primary text-3xl mb-4">
              <i class="fab fa-discord"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Discord Support</h3>
            <p class="text-gray-300 mb-4">Join our Discord server for real-time support and community interaction.</p>
            <a href="#" class="text-primary hover:text-green-600 transition duration-300">
              Join Discord <i class="fas fa-arrow-right ml-2"></i>
            </a>
          </div>

          <!-- Option 2 -->
          <div class="bg-dark p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
            <div class="text-primary text-3xl mb-4">
              <i class="fas fa-ticket-alt"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Support Tickets</h3>
            <p class="text-gray-300 mb-4">Submit a support ticket for detailed assistance with your issue.</p>
            <a href="#" class="text-primary hover:text-green-600 transition duration-300">
              Create Ticket <i class="fas fa-arrow-right ml-2"></i>
            </a>
          </div>

          <!-- Option 3 -->
          <div class="bg-dark p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
            <div class="text-primary text-3xl mb-4">
              <i class="fas fa-book"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Knowledge Base</h3>
            <p class="text-gray-300 mb-4">Browse our knowledge base for answers to common questions.</p>
            <a href="#" class="text-primary hover:text-green-600 transition duration-300">
              View Articles <i class="fas fa-arrow-right ml-2"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Staff Information -->
    <section class="py-16 bg-dark">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-12 text-center" data-aos="fade-up">Meet Our <span class="text-primary">Staff</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Staff Member 1 -->
          <div class="bg-dark-light p-6 rounded-lg shadow-lg" data-aos="fade-up">
            <div class="flex items-center mb-4">
              <img src="https://i.imgur.com/qK1fBv4.png" alt="Staff Member" class="w-16 h-16 rounded-full mr-4">
              <div>
                <h3 class="font-bold">Alex Wright</h3>
                <p class="text-primary text-sm">Server Owner</p>
              </div>
            </div>
            <p class="text-gray-300 mb-4">Contact for server-related inquiries and business opportunities.</p>
            <div class="flex space-x-3">
              <a href="#" class="text-gray-400 hover:text-primary transition">
                <i class="fab fa-discord"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-primary transition">
                <i class="fab fa-twitter"></i>
              </a>
            </div>
          </div>

          <!-- Staff Member 2 -->
          <div class="bg-dark-light p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
            <div class="flex items-center mb-4">
              <img src="https://i.imgur.com/r43KAjI.png" alt="Staff Member" class="w-16 h-16 rounded-full mr-4">
              <div>
                <h3 class="font-bold">Sarah Chen</h3>
                <p class="text-primary text-sm">Community Manager</p>
              </div>
            </div>
            <p class="text-gray-300 mb-4">Contact for community-related issues and event coordination.</p>
            <div class="flex space-x-3">
              <a href="#" class="text-gray-400 hover:text-primary transition">
                <i class="fab fa-discord"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-primary transition">
                <i class="fab fa-twitter"></i>
              </a>
            </div>
          </div>

          <!-- Staff Member 3 -->
          <div class="bg-dark-light p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
            <div class="flex items-center mb-4">
              <img src="https://i.imgur.com/7JRCuGQ.png" alt="Staff Member" class="w-16 h-16 rounded-full mr-4">
              <div>
                <h3 class="font-bold">Michael Torres</h3>
                <p class="text-primary text-sm">Lead Developer</p>
              </div>
            </div>
            <p class="text-gray-300 mb-4">Contact for technical issues and development inquiries.</p>
            <div class="flex space-x-3">
              <a href="#" class="text-gray-400 hover:text-primary transition">
                <i class="fab fa-discord"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-primary transition">
                <i class="fab fa-github"></i>
              </a>
            </div>
          </div>

          <!-- Staff Member 4 -->
          <div class="bg-dark-light p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="300">
            <div class="flex items-center mb-4">
              <img src="https://i.imgur.com/kJwm4PS.png" alt="Staff Member" class="w-16 h-16 rounded-full mr-4">
              <div>
                <h3 class="font-bold">Emma Johnson</h3>
                <p class="text-primary text-sm">Head Administrator</p>
              </div>
            </div>
            <p class="text-gray-300 mb-4">Contact for administrative issues and rule enforcement.</p>
            <div class="flex space-x-3">
              <a href="#" class="text-gray-400 hover:text-primary transition">
                <i class="fab fa-discord"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-primary transition">
                <i class="fab fa-twitter"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-dark-light">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-12 text-center" data-aos="fade-up">Frequently Asked <span class="text-primary">Questions</span></h2>
        <div class="max-w-3xl mx-auto space-y-4">
          <!-- FAQ Item 1 -->
          <div class="bg-dark p-6 rounded-lg shadow-lg" data-aos="fade-up">
            <button class="faq-btn w-full text-left flex justify-between items-center">
              <h3 class="text-lg font-bold">How do I join the server?</h3>
              <i class="fas fa-chevron-down text-primary"></i>
            </button>
            <div class="faq-content hidden mt-4">
              <p class="text-gray-300">To join our server, you need to have FiveM installed and join our Discord server. After that, you'll need to complete the whitelist application process.</p>
            </div>
          </div>

          <!-- FAQ Item 2 -->
          <div class="bg-dark p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
            <button class="faq-btn w-full text-left flex justify-between items-center">
              <h3 class="text-lg font-bold">What are the server rules?</h3>
              <i class="fas fa-chevron-down text-primary"></i>
            </button>
            <div class="faq-content hidden mt-4">
              <p class="text-gray-300">Our server rules can be found in the #rules channel on our Discord server. They include guidelines for roleplay, behavior, and server etiquette.</p>
            </div>
          </div>

          <!-- FAQ Item 3 -->
          <div class="bg-dark p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
            <button class="faq-btn w-full text-left flex justify-between items-center">
              <h3 class="text-lg font-bold">How do I report a player?</h3>
              <i class="fas fa-chevron-down text-primary"></i>
            </button>
            <div class="faq-content hidden mt-4">
              <p class="text-gray-300">You can report players through our Discord server using the #report channel or by submitting a ticket through our support system.</p>
            </div>
          </div>

          <!-- FAQ Item 4 -->
          <div class="bg-dark p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="300">
            <button class="faq-btn w-full text-left flex justify-between items-center">
              <h3 class="text-lg font-bold">What are the server requirements?</h3>
              <i class="fas fa-chevron-down text-primary"></i>
            </button>
            <div class="faq-content hidden mt-4">
              <p class="text-gray-300">You need a valid copy of GTA V, the latest version of FiveM, and a Discord account. A microphone is recommended for voice chat.</p>
            </div>
          </div>
        </div>
        
        <!-- Copyright -->
        <div class="mt-12 pt-2 text-center opacity-60 hover:opacity-100 transition-opacity duration-300 copyright-holder">
          <a href="https://discord.gg/EkwWvFS" target="_blank" class="hover:no-underline cursor-pointer">
            <p class="text-xs text-gray-400 relative z-10 hover:scale-105 transition-transform duration-300 copyright-text">
              <span class="bg-gradient-to-r from-[#059669] via-[#10b981] to-[#34d399] bg-clip-text text-transparent font-semibold">Copyright by</span>
              <span class="text-white font-semibold tracking-wide"> eyestore</span>
            </p>
          </a>
        </div>
      </div>
    </section>

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
              <li><a href="gallery.php" class="text-gray-400 hover:text-primary transition duration-300">Gallery</a></li>
              <li><a href="contact.php" class="text-primary transition duration-300">Contact</a></li>
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
