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
       

 