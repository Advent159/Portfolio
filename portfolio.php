<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Saya</title>
    <link rel="icon" type="image/png" href="img/Adventio.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Animate.css untuk animasi saat website dimuat -->
    <!--link Font Awesome di head dengan versi terbaru -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AOS (Animate On Scroll) untuk animasi saat scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- particles.js -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="style.css">
    
</head>
<body class="bg-gray-100">
      <!-- Navbar -->
      <nav id="navbar" class="navbar navbar-expand-lg navbar-dark navbar-home show">
        <div class="container">
             <!-- Logo Branding -->
        <a class="navbar-brand" href="#">
            <img src="img/Adventio.png" alt="Adventio A.P" class="brand-logo">
            <span class="brand-text">Adventio Permana</span>
        </a>
           <button class="navbar-toggler" type="button" onclick="toggleSidebar()" aria-label="Toggle navigation">
    <span class="burger-line line-top"></span>
    <span class="burger-line line-middle"></span>
    <span class="burger-line line-bottom"></span>
</button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><i class="fas fa-user"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects"><i class="fas fa-briefcase"></i> Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><i class="fas fa-envelope"></i> Contact</a>
                    </li>
                </ul>
                 <div class="ml-auto flex items-center">
    <a href="file/Adventio Aleqi Permana Resume Jobstreet .docx" download class="download-cv-btn hidden md:flex">
        <i class="fas fa-download mr-2"></i> Download CV
    </a>
</div>
            </div>
        </div>
       
        
    </nav>

    <!-- Sidebar untuk tampilan mobile -->
    <div class="sidebar" id="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#home"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about"><i class="fas fa-user"></i> About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#projects"><i class="fas fa-briefcase"></i> Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact"><i class="fas fa-envelope"></i> Contact</a>
            </li>
            <li>
    <a href="file/Adventio Aleqi Permana Resume Jobstreet .docx" download class="nav-link download-cv-btn-mobile">
        <i class="fas fa-download mr-3"></i> Download CV
    </a>
</li>
        </ul>
    </div>

    <!-- Overlay untuk sidebar -->
    <div class="overlay" id="overlay" onclick="toggleSidebar()"></div>

    <!-- Home Section -->
   <section id="home" style="position:relative; overflow:hidden;">
    <!-- Fade Overlay untuk animasi PPT -->
    <div id="home-fade-overlay"
        style="
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: #1a1a2e;
            z-index: 100;
            opacity: 1;
            pointer-events: none;
            transition: opacity 1s cubic-bezier(.4,0,.2,1);
        ">
    </div>

    <div class="floating-elements">
        <!-- Floating Icons -->
        <div class="floating-icon html-icon" data-aos="fade-up" data-aos-delay="400">
            <i class="fab fa-html5"></i>
        </div>
        <div class="floating-icon css-icon" data-aos="fade-up" data-aos-delay="500">
            <i class="fab fa-css3-alt"></i>
        </div>
        <div class="floating-icon js-icon" data-aos="fade-up" data-aos-delay="600">
            <i class="fab fa-js"></i>
        </div>
        <div class="floating-icon php-icon" data-aos="fade-up" data-aos-delay="700">
            <i class="fab fa-php"></i>
        </div>
        <!-- Floating Tech Icons -->
        <div class="floating-tech-icon" data-tech="react">
            <i class="fab fa-react"></i>
        </div>
        <div class="floating-tech-icon" data-tech="python">
            <i class="fab fa-python"></i>
        </div>
        <div class="floating-tech-icon" data-tech="database">
            <i class="fas fa-database"></i>
        </div>
        <div class="floating-tech-icon" data-tech="ai">
            <i class="fas fa-robot"></i>
        </div>
        <div class="floating-tech-icon" data-tech="cloud">
            <i class="fas fa-cloud"></i>
        </div>
    </div>

    <header class="hero h-screen flex items-center justify-center text-white animate__animated animate__fadeIn animate__slow">
        <canvas id="starsCanvas" class="absolute top-0 left-0 w-full h-full"></canvas>
        <div class="text-center animate__animated animate__zoomIn animate__delay-1s">
            <br><br>
            <img src="img/profile.jpg" alt="Foto Profil" class="neon-glow mx-auto rounded-full w-32 h-32 object-cover">
            <br>
            <h1 class="matrix-text animate__animated animate__fadeIn animate__delay-2s">Selamat Datang di Portfolio Saya</h1>
            <p id="typing-text" class="text-2xl typing" style="font-family: 'Courier New', Courier, monospace"></p><br>
            <a href="#projects" class="cyberpunk-btn animate__animated animate__fadeIn animate__delay-3s">Lihat Proyek Saya</a>
            <div class="social-icons-container mt-8 flex justify-center space-x-6">
                <!-- GitHub -->
                <a href="https://github.com/Advent159" target="_blank" class="social-icon github-icon" aria-label="GitHub">
                    <i class="fab fa-github"></i>
                </a>
                <!-- LinkedIn -->
                <a href="https://linkedin.com/in/yourusername" target="_blank" class="social-icon linkedin-icon" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <!-- Instagram -->
                <a href="https://www.instagram.com/justcallmealek/" target="_blank" class="social-icon instagram-icon" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <!-- Dev.to -->
                <a href="https://dev.to/justcallmealek" target="_blank" class="social-icon devto-icon" aria-label="Dev.to">
                    <i class="fab fa-dev"></i>
                </a>
                <!-- X/Twitter -->
                <a href="https://x.com/Adventio159357" class="social-icon twitter-icon">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </a>
            </div>
        </div>
    </header>
    <!-- Particle Effect Container -->
    <div id="particles-bg"></div>
</section>

<!-- About Section -->
<section id="about" class="about py-20 text-white relative overflow-hidden">
    <!-- Animated gradient background -->
    <div class="absolute inset-0 bg-gradient-to-r from-purple-900 via-indigo-900 to-purple-800 animate-gradient-x"></div>
    
    <!-- Floating elements -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-10 left-20 w-16 h-16 rounded-full bg-purple-400 blur-xl animate-float-slow"></div>
        <div class="absolute top-1/3 right-1/4 w-24 h-24 rounded-full bg-indigo-400 blur-xl animate-float-medium"></div>
        <div class="absolute bottom-20 right-20 w-20 h-20 rounded-full bg-pink-400 blur-xl animate-float-fast"></div>
        <div class="absolute bottom-1/4 left-1/3 w-12 h-12 rounded-full bg-blue-400 blur-xl animate-float-slow"></div>
    </div>
    
    <!-- Grid pattern overlay -->
    <div class="absolute inset-0 opacity-10 bg-[size:40px_40px] bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)]"></div>
    
    <!-- Content container -->
    <div class="container mx-auto text-center relative z-10">
        <h2 class="text-4xl font-bold mb-8" data-aos="fade-up">About me</h2>
        <div class="max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            <p class="text-lg mb-6 relative">
                "Saya adalah seorang profesional di bidang teknologi digital dengan keahlian sebagai Web Developer dan Full-Stack Developer yang berpengalaman dalam membangun aplikasi web modern dan responsif. Sebagai Web Designer, saya menciptakan antarmuka pengguna yang menarik dan fungsional. Selain itu, kemampuan saya sebagai Video Editor dan Photoshop Designer memungkinkan saya menghasilkan konten visual yang memukau dengan sentuhan profesional."
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                <div class="bg-white bg-opacity-10 p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 backdrop-blur-sm border border-white border-opacity-20 hover:border-opacity-40">
                    <div class="flex justify-center items-center mb-4">
                        <i class="fas fa-code text-4xl text-purple-400"></i>
                        <span class="ml-3 text-sm font-medium bg-purple-500 px-3 py-1 rounded-full">90%</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-black">Web Development</h3>
                    <p class="text-sm text-gray-400">Membangun website modern dengan teknologi terbaru seperti PHP, JavaScript, Tailwind CSS, Laravel, dan MySQL. Fokus pada performa, keamanan, dan pengalaman pengguna.</p>
                    <div class="mt-4 h-1.5 w-full bg-gray-700 rounded-full overflow-hidden">
                        <div class="h-full bg-purple-400 rounded-full" style="width: 90%"></div>
                    </div>
                </div>
                <div class="bg-white bg-opacity-10 p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 backdrop-blur-sm border border-white border-opacity-20 hover:border-opacity-40">
                    <div class="flex justify-center items-center mb-4">
                        <i class="fas fa-video text-4xl text-purple-400"></i>
                        <span class="ml-3 text-sm font-medium bg-purple-500 px-3 py-1 rounded-full">85%</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-black">Video Editing</h3>
                    <p class="text-sm text-gray-400">Mengedit video dengan kreativitas tinggi menggunakan Adobe Premiere Pro, After Effects, dan Filmora. Mampu menghasilkan konten visual yang menarik dengan timing yang tepat.</p>
                    <div class="mt-4 h-1.5 w-full bg-gray-700 rounded-full overflow-hidden">
                        <div class="h-full bg-purple-400 rounded-full" style="width: 85%"></div>
                    </div>
                </div>
                <div class="bg-white bg-opacity-10 p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 backdrop-blur-sm border border-white border-opacity-20 hover:border-opacity-40">
                    <div class="flex justify-center items-center mb-4">
                        <i class="fas fa-palette text-4xl text-purple-400"></i>
                        <span class="ml-3 text-sm font-medium bg-purple-500 px-3 py-1 rounded-full">88%</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-black">Photoshop Design</h3>
                    <p class="text-sm text-gray-400">Membuat desain grafis kreatif dan profesional menggunakan Adobe Photoshop. Termasuk manipulasi gambar, pembuatan poster, ilustrasi digital, dan desain branding.</p>
                    <div class="mt-4 h-1.5 w-full bg-gray-700 rounded-full overflow-hidden">
                        <div class="h-full bg-purple-400 rounded-full" style="width: 88%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Projects Section -->
<section id="projects" class="projects py-20 relative overflow-hidden">
    <!-- Background elements -->
    <div class="absolute inset-0 bg-gradient-to-br from-gray-50 to-gray-200"></div>
    <div class="absolute inset-0 opacity-20 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgwLDAsMCwwLjAzKSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNwYXR0ZXJuKSIvPjwvc3ZnPg==')]"></div>
    
    <!-- Floating dots -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-1/4 w-3 h-3 rounded-full bg-purple-500 animate-float-slow"></div>
        <div class="absolute top-1/3 right-1/5 w-2 h-2 rounded-full bg-indigo-500 animate-float-medium"></div>
        <div class="absolute bottom-1/4 left-1/5 w-4 h-4 rounded-full bg-blue-500 animate-float-fast"></div>
    </div>

    <div class="container mx-auto text-center relative z-10">
        <h2 class="text-4xl font-bold mb-12" data-aos="fade-up">
            <span class="relative inline-block">
                <span class="relative z-10">My Projects</span>
                <span class="absolute bottom-0 left-0 w-full h-3 bg-purple-200 opacity-50 -z-1"></span>
            </span>
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
            <!-- Project 1 -->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 group overflow-hidden relative" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-50 to-blue-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-1"></div>
                <div class="relative overflow-hidden rounded-lg mb-4 h-48">
                    <img src="img/Website.png" alt="Proyek 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent flex items-end p-4">
            
                    </div>
                </div>
                <div class="relative z-10">
                    <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-purple-600 transition-colors">Web Development</h3>
                    <p class="text-sm text-gray-600 mb-4">Membangun platform Agenda dengan fitur pembayaran online dan manajemen Event.</p>
                    <a href="#" class="inline-block px-4 py-2 text-sm font-medium text-purple-600 bg-purple-50 rounded-full hover:bg-purple-100 transition-colors border border-purple-100 group-hover:border-purple-200">
                        Lihat Detail <i class="fas fa-arrow-right ml-1 text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 group overflow-hidden relative" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-green-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-1"></div>
                <div class="relative overflow-hidden rounded-lg mb-4 h-48">
                    <img src="img/Videos.jpg" alt="Proyek 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent flex items-end p-4">
                    </div>
                </div>
                <div class="relative z-10">
                    <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-600 transition-colors">Videos Production</h3>
                    <p class="text-sm text-gray-600 mb-4">Membuat Videos Editing Platform Website kecamatan untuk menghasilkan konten visual yang menarik dan profesional.</p>
                    <a href="#" class="inline-block px-4 py-2 text-sm font-medium text-blue-600 bg-blue-50 rounded-full hover:bg-blue-100 transition-colors border border-blue-100 group-hover:border-blue-200">
                        Lihat Detail <i class="fas fa-arrow-right ml-1 text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 group overflow-hidden relative" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute inset-0 bg-gradient-to-br from-pink-50 to-yellow-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-1"></div>
                <div class="relative overflow-hidden rounded-lg mb-4 h-48">
                    <img src="img/Komi.jpg" alt="Proyek 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent flex items-end p-4">
                    </div>
                </div>
                <div class="relative z-10">
                    <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-pink-600 transition-colors">Graphics design</h3>
                    <p class="text-sm text-gray-600 mb-4">Membuat desain grafis yang kreatif dan profesional menggunakan Adobe Photoshop, termasuk manipulasi gambar, pembuatan poster, dan ilustrasi digital.</p>
                    <a href="#" class="inline-block px-4 py-2 text-sm font-medium text-pink-600 bg-pink-50 rounded-full hover:bg-pink-100 transition-colors border border-pink-100 group-hover:border-pink-200">
                        Lihat Detail <i class="fas fa-arrow-right ml-1 text-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

   <!-- Contact Section -->
<section id="contact" class="contact py-20 text-white relative overflow-hidden">
    <!-- Animated gradient background -->
    <div class="absolute inset-0 bg-gradient-to-r from-purple-900 via-indigo-900 to-purple-800 animate-gradient-x"></div>
    
    <!-- Floating elements -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-10 left-20 w-16 h-16 rounded-full bg-purple-400 blur-xl animate-float-slow"></div>
        <div class="absolute top-1/3 right-1/4 w-24 h-24 rounded-full bg-indigo-400 blur-xl animate-float-medium"></div>
        <div class="absolute bottom-20 right-20 w-20 h-20 rounded-full bg-pink-400 blur-xl animate-float-fast"></div>
        <div class="absolute bottom-1/4 left-1/3 w-12 h-12 rounded-full bg-blue-400 blur-xl animate-float-slow"></div>
    </div>
    
    <!-- Grid pattern overlay -->
    <div class="absolute inset-0 opacity-10 bg-[size:40px_40px] bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)]"></div>
    
    <!-- Content container -->
    <div class="container mx-auto text-center relative z-10">
        <h2 class="text-4xl font-bold mb-8" data-aos="fade-up">
            <span class="relative inline-block">
                <span class="relative z-10">Kontak Saya</span>
                <span class="absolute bottom-0 left-0 w-full h-3 bg-purple-400 opacity-30 -z-1"></span>
            </span>
        </h2>
        
        <p class="text-lg mb-12 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Jika Anda tertarik untuk bekerja sama atau memiliki pertanyaan, silakan hubungi saya melalui informasi kontak berikut atau melalui formulir di bawah ini.
        </p>

        <!-- Contact Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="150">
            <!-- Address Card -->
            <div class="bg-white bg-opacity-10 p-6 rounded-xl shadow-lg backdrop-blur-sm border border-white border-opacity-20 hover:border-opacity-40 transition-all duration-300 hover:-translate-y-1">
                <div class="flex justify-center mb-4">
                    <div class="bg-purple-500 bg-opacity-20 p-3 rounded-full">
                        <i class="fas fa-map-marker-alt text-2xl text-purple-300"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-gray-400">Address</h3>
                <p class="text-sm text-gray-400">Jalan Perumahan Puspa Raya, Bojong Baru, Bojonggede<br>KAB. BOGOR, JAWA BARAT, ID, 16920<br>Indonesia</p>
            </div>
            
            <!-- Email Card -->
            <div class="bg-white bg-opacity-10 p-6 rounded-xl shadow-lg backdrop-blur-sm border border-white border-opacity-20 hover:border-opacity-40 transition-all duration-300 hover:-translate-y-1">
                <div class="flex justify-center mb-4">
                    <div class="bg-blue-500 bg-opacity-20 p-3 rounded-full">
                        <i class="fas fa-envelope text-2xl text-blue-300"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-gray-400">Gmail</h3>
                <p class="text-sm text-gray-400">adventiopermana@gmail.com</p>
                <a href="mailto:contoh@email.com" class="text-blue-400 text-xs mt-2 inline-block hover:text-blue-200 transition-colors">
                    Kirim Email <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
            
            <!-- Phone Card -->
            <div class="bg-white bg-opacity-10 p-6 rounded-xl shadow-lg backdrop-blur-sm border border-white border-opacity-20 hover:border-opacity-40 transition-all duration-300 hover:-translate-y-1">
                <div class="flex justify-center mb-4">
                    <div class="bg-green-500 bg-opacity-20 p-3 rounded-full">
                        <i class="fas fa-phone-alt text-2xl text-green-300"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-gray-400">Phone</h3>
                <p class="text-sm text-gray-400">+62 878-3756-8771</p>
                <a href="tel:+6287837568771" class="text-green-400 text-xs mt-2 inline-block hover:text-green-200 transition-colors">
                    Hubungi Sekarang <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>

        <!-- Contact Form -->
        <form id="contactForm" class="max-w-lg mx-auto bg-white bg-opacity-10 p-8 rounded-xl shadow-lg backdrop-blur-sm border border-white border-opacity-20" data-aos="fade-up" data-aos-delay="200">
            <div class="mb-5">
                <input type="text" id="name" name="name" placeholder="Nama" 
                       class="w-full p-3 border border-white border-opacity-30 rounded-lg bg-white bg-opacity-5 text-black placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition">
            </div>
            <div class="mb-5">
                <input type="email" id="email" name="email" placeholder="Email" 
                       class="w-full p-3 border border-white border-opacity-30 rounded-lg bg-white bg-opacity-5 text-black placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition">
            </div>
            <div class="mb-5">
                <textarea id="message" name="message" placeholder="Pesan" rows="4" 
                          class="w-full p-3 border border-white border-opacity-30 rounded-lg bg-white bg-opacity-5 text-black placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition"></textarea>
            </div>
            <button type="submit" 
                    class="w-full bg-gradient-to-r from-purple-500 to-indigo-600 text-white p-3 rounded-lg font-medium hover:from-purple-600 hover:to-indigo-700 transition duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-purple-500/20">
                Kirim Pesan
                <i class="fas fa-paper-plane ml-2"></i>
            </button>
        </form>
    </div>
</section>


  <!-- Footer -->
<footer class="bg-gradient-to-r from-purple-900 to-indigo-900 py-12 text-white relative overflow-hidden">
    <!-- Efek Glow di Latar Belakang -->
    <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-indigo-500 opacity-10 animate-glow"></div>

    <div class="container mx-auto text-center relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Bagian Tentang Saya -->
            <div class="text-left" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-xl font-bold mb-4">About me</h3>
                <p class="text-sm">
                "Saya adalah seorang Web Developer dan Full-Stack Developer yang ahli dalam membangun aplikasi web modern dan responsif, seorang Web Designer yang kreatif dalam merancang antarmuka pengguna yang menarik, serta seorang Video Editor dan Photoshop Designer yang mahir dalam menciptakan konten visual yang memukau dan profesional."
                </p>
            </div>

            <!-- Bagian Link Cepat -->
            <div class="text-left" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl font-bold mb-4">Link Cepat</h3>
                <ul class="space-y-2">
                    <li><a href="#home" class="text-sm hover:text-purple-400 transition">Home</a></li>
                    <li><a href="#about" class="text-sm hover:text-purple-400 transition">Tentang</a></li>
                    <li><a href="#projects" class="text-sm hover:text-purple-400 transition">Proyek</a></li>
                    <li><a href="#contact" class="text-sm hover:text-purple-400 transition">Kontak</a></li>
                </ul>
            </div>

            <!-- Bagian Sosial Media -->
            <div class="text-left" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-xl font-bold mb-4">Sosial Media</h3>
                <div class="flex space-x-4">
                    <a href="https://www.instagram.com/justcallmealek/" class="text-white hover:text-purple-400 transition">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                    <a href="https://x.com/Adventio159357" class="text-white hover:text-purple-400 transition">
                     <i class="fa-solid fa-x text-2xl"></i>
                    </a>
                    <a href="#" class="text-white hover:text-purple-400 transition">
                        <i class="fab fa-linkedin-in text-2xl"></i>
                    </a>
                    <a href="https://github.com/Advent159" class="text-white hover:text-purple-400 transition">
                        <i class="fab fa-github text-2xl"></i>
                    </a>
                    <a href="https://dev.to/justcallmealek" class="text-white hover:text-purple-400 transition">
                        <i class="fab fa-dev text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Garis Pemisah -->
        <div class="border-t border-gray-700 mt-8 pt-8" data-aos="fade-up" data-aos-delay="400">
            <p class="text-sm text-gray-300">
                &copy; 2025 <span class="text-purple-400 font-bold">Adventio A.P</span>. Semua hak dilindungi.
            </p>
            <p class="text-xs text-gray-400 mt-2">
                Dibuat dengan <i class="fas fa-heart text-red-500"></i> dan <i class="fas fa-coffee text-yellow-500"></i>.
            </p>
        </div>
    </div>
</footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- AOS (Animate On Scroll) -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
    <script>
        // Inisialisasi AOS
        AOS.init();
               // Script untuk toggle sidebar
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            const toggler = document.querySelector('.navbar-toggler');
            sidebar.classList.toggle('open');
            overlay.classList.toggle('active');
            toggler.classList.toggle('open');
        }

      // Fungsi untuk animasi fade out navbar
      const navbar = document.getElementById('navbar');

// Contoh: Animasi fade out saat navbar dihide (bisa dipicu oleh event tertentu)
function hideNavbar() {
    navbar.classList.add('hide');
    setTimeout(() => {
        navbar.style.display = 'none'; // Sembunyikan navbar setelah animasi selesai
    }, 500); // Sesuaikan dengan durasi animasi fadeOut
}

let lastScroll = 0; // Variabel untuk menyimpan posisi scroll terakhir

window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    const currentScroll = window.scrollY; // Posisi scroll saat ini

    if (currentScroll > lastScroll) {
        // Jika scroll ke bawah, sembunyikan navbar
        navbar.classList.remove('show');
        navbar.classList.add('hide');
    } else {
        // Jika scroll ke atas, tampilkan navbar
        navbar.classList.remove('hide');
        navbar.classList.add('show');
    }

    lastScroll = currentScroll; // Simpan posisi scroll terakhir
});

window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                // Jika di-scroll lebih dari 50px, tambahkan class 'scrolled'
                navbar.classList.add('scrolled');
            } else {
                // Jika kembali ke atas, hapus class 'scrolled'
                navbar.classList.remove('scrolled');
            }
        });
        
    </script>
    <script>
    window.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            const overlay = document.getElementById('home-fade-overlay');
            if (overlay) overlay.style.opacity = '0';
        }, 700); // Delay sebelum fade out (ms)
    });
</script>
    
    <!-- Icon WhatsApp -->
<a href="https://wa.me/6287837568771" target="_blank" class="whatsapp-float">
    <i class="fab fa-whatsapp whatsapp-icon"></i>
</a>
</body>
</html>