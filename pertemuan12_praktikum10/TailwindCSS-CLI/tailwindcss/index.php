<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link href="./output.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-slate-950 text-slate-100">
    <a href="logout.php" class="fixed top-6 right-6 inline-flex items-center rounded-3xl bg-red-500 px-5 py-2 text-sm font-semibold text-white transition hover:bg-red-400 shadow-lg z-50">Logout</a>
    <div class="mx-auto max-w-3xl px-6 py-16">
        <header class="mb-12 text-center">
            <div>
                <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Simple Blog by Defry Ananta</p>
                <h1 class="mt-4 text-4xl font-bold text-white">Tulisan singkat & mudah dibaca</h1>
                <p class="mt-4 text-slate-400">Halaman ini berisi teks ringkas dengan gaya sederhana menggunakan Tailwind CSS.</p>
            </div>
        </header>

        <article class="rounded-3xl border border-white/10 bg-slate-900/80 p-8 shadow-xl shadow-slate-950/20">
            <h2 class="text-2xl font-semibold text-white">Tips belajar web sederhana</h2>
            <p class="mt-4 text-slate-300 leading-7">Gunakan struktur yang jelas dan warna yang nyaman. Desain sederhana membuat konten lebih mudah dipahami dan cepat dibuka di perangkat apa pun.</p>
            <ul class="mt-6 space-y-3 text-slate-300">
                <li class="rounded-2xl bg-slate-950/80 p-4">Gunakan judul jelas.</li>
                <li class="rounded-2xl bg-slate-950/80 p-4">Pilih font nyaman dibaca.</li>
                <li class="rounded-2xl bg-slate-950/80 p-4">Jaga agar halaman tetap ringan.</li>
            </ul>
        </article>

        <section class="mt-12 rounded-3xl border border-white/10 bg-slate-900/80 p-8 shadow-xl shadow-slate-950/20">
            <h2 class="text-2xl font-semibold text-white">Tentang</h2>
            <p class="mt-4 text-slate-300 leading-7">Website ini dibuat untuk menunjukkan tampilan sederhana dengan Tailwind. Hanya ada satu halaman utama, sedikit teks, dan fokus pada konten.</p>
        </section>

        <footer class="mt-12 text-center text-sm text-slate-500">
            © 2026 Simple Blog by Defry Ananta
        </footer>
    </div>
</body>
</html>