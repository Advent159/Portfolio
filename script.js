 // Animasi Ketik
 const textArray = ["Web Developer", "Full-Stack Developer", "Web Designer", "Videos Editing", "Photoshop Designer"];
 let textIndex = 0;
 let charIndex = 0;

 function typeEffect() {
     const typingTextElement = document.getElementById("typing-text");

     if (charIndex < textArray[textIndex].length) {
         typingTextElement.innerHTML += textArray[textIndex].charAt(charIndex);
         charIndex++;
         setTimeout(typeEffect, 100);
     } else {
         setTimeout(() => {
             typingTextElement.innerHTML = "";
             charIndex = 0;
             textIndex = (textIndex + 1) % textArray.length;
             typeEffect();
         }, 2000);
     }
 }

 document.addEventListener("DOMContentLoaded", function() {
     typeEffect();
 });


 typeEffect();
 const canvas = document.getElementById("starsCanvas");
 const ctx = canvas.getContext("2d");

 canvas.width = window.innerWidth;
 canvas.height = window.innerHeight;

 let stars = [];
 const numStars = 600;

 for (let i = 0; i < numStars; i++) {
     stars.push({
         x: Math.random() * canvas.width,
         y: Math.random() * canvas.height,
         radius: Math.random() * 2,
         speedX: (Math.random() - 0.5) * 0.5,
         speedY: (Math.random() - 0.5) * 0.5,
         opacity: Math.random()
     });
 }

 function drawStars() {
     ctx.clearRect(0, 0, canvas.width, canvas.height);
     ctx.fillStyle = "rgba(255, 255, 255, 0.8)";

     stars.forEach((star) => {
         ctx.beginPath();
         ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
         ctx.fillStyle = `rgba(255, 255, 255, ${star.opacity})`;
         ctx.fill();
         ctx.closePath();

         star.x += star.speedX;
         star.y += star.speedY;

         if (star.x < 0 || star.x > canvas.width) star.speedX *= -1;
         if (star.y < 0 || star.y > canvas.height) star.speedY *= -1;
     });

     requestAnimationFrame(drawStars);
 }

 drawStars();

 window.addEventListener("resize", () => {
     canvas.width = window.innerWidth;
     canvas.height = window.innerHeight;
 });

 document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah refresh halaman

    // Ambil nilai input
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const message = document.getElementById("message").value;

    // Format mailto
    const mailtoLink = `mailto:adventiopermana@gmail.com?subject=Pesan dari ${name}&body=Nama: ${name}%0AEmail: ${email}%0A%0APesan:%0A${message}`;

    // Buka email client
    window.location.href = mailtoLink;
});

document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah reload halaman

    // Menampilkan notifikasi dengan animasi
    Swal.fire({
        title: "Berhasil!",
        text: "Pesan Anda telah berhasil dikirim.",
        icon: "success",
        timer: 3000, // Notifikasi hilang otomatis dalam 3 detik
        timerProgressBar: true,
        showConfirmButton: false, // Hilangkan tombol "OK"
        toast: true,
        position: "top-end" // Muncul di pojok kanan atas
    });

    // Reset form setelah 2 detik
    setTimeout(() => {
        document.getElementById("contactForm").reset();
    }, 2000);
});


 // Inisialisasi AOS
        AOS.init();
               // Script untuk toggle sidebar
       function toggleSidebar() {
    const toggler = document.querySelector('.navbar-toggler');
    toggler.classList.toggle('open');
    
    // Your existing sidebar toggle logic
    document.getElementById('sidebar').classList.toggle('open');
    document.getElementById('overlay').classList.toggle('active');
    
    // ARIA updates
    const isOpen = toggler.classList.contains('open');
    toggler.setAttribute('aria-expanded', isOpen);
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

        // Load particles.js
document.addEventListener('DOMContentLoaded', function() {
    // Inisialisasi particles.js jika library tersedia
    if (typeof particlesJS !== 'undefined') {
        particlesJS('particles-bg', {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: "#ffffff" },
                shape: { type: "circle" },
                opacity: { value: 0.5, random: true },
                size: { value: 3, random: true },
                line_linked: { enable: true, distance: 150, color: "#ffffff", opacity: 0.4, width: 1 },
                move: { enable: true, speed: 2, direction: "none", random: true, straight: false, out_mode: "out" }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: { enable: true, mode: "repulse" },
                    onclick: { enable: true, mode: "push" }
                }
            }
        });
    }
});
// Add this to your existing script
function handleDownloadCV() {
    // Optional: Add download tracking
    console.log("CV download initiated");
    
    // Optional: Show confirmation
    Swal.fire({
        title: 'Download CV',
        text: 'CV akan selesai diunduh',
        icon: 'info',
        timer: 2000,
        showConfirmButton: false
    });
}

// Add event listeners
document.querySelectorAll('.download-cv-btn, .download-cv-btn-mobile').forEach(btn => {
    btn.addEventListener('click', handleDownloadCV);
});
// Add pulsing animation to logo on scroll
window.addEventListener('scroll', function() {
    const logo = document.querySelector('.brand-logo');
    if (window.scrollY > 50) {
        logo.style.transform = 'scale(0.95)';
        logo.style.filter = 'brightness(1.2)';
    } else {
        logo.style.transform = 'scale(1)';
        logo.style.filter = 'brightness(1)';
    }
});
// Fungsi untuk menangani transisi navigasi
function handlePageTransition(targetUrl) {
    // Buat overlay transisi
    const overlay = document.createElement('div');
    overlay.id = 'transition-overlay';
    overlay.className = 'transition-overlay';
    overlay.innerHTML = `
        <div class="hexagon-transition">
            <div class="hexagon-inner">
                <img src="img/Adventio.png" alt="Adventio Logo">
            </div>
        </div>
    `;
    
    document.body.appendChild(overlay);
    
    // Tampilkan overlay dan redirect
    setTimeout(function() {
        overlay.classList.remove('hidden');
        
        setTimeout(function() {
            window.location.href = targetUrl;
        }, 800);
    }, 50);
}

// Terapkan ke semua link internal
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('a[href*=".php"]').forEach(link => {
        link.addEventListener('click', function(e) {
            // Hanya tangani link internal
            if (this.href && this.href.includes(window.location.hostname) && 
                !this.href.includes('#') && 
                this.href !== window.location.href) {
                
                e.preventDefault();
                handlePageTransition(this.href);
            }
        });
    });
});




       

 