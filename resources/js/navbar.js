document.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar'); // Mengambil elemen navbar berdasarkan id
    if (window.scrollY > 50) { // Jika posisi scroll lebih dari 50px
        navbar.classList.remove('bg-zinc-900/[0.5]'); // Hapus class opacity 50%
        navbar.classList.add('bg-zinc-900/[1]'); // Tambah class opacity 90%
    } else { // Jika posisi scroll kurang dari 50px
        navbar.classList.remove('bg-zinc-900/[1]'); // Hapus class opacity 90%
        navbar.classList.add('bg-zinc-900/[0.5]'); // Tambah class opacity 50%
    }
});