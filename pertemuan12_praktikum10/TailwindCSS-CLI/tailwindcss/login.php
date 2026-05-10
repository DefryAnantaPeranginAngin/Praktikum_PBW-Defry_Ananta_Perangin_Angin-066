<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: index.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'ananta' && $password === '123') {
        $_SESSION['logged_in'] = true;
        $_SESSION['user'] = $username;
        header('Location: index.php');
        exit;
    }

    $error = 'Username atau password salah. Silakan coba lagi.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Blog</title>
    <link href="./output.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-slate-950 text-slate-100">
    <div class="relative isolate flex min-h-screen items-center justify-center overflow-hidden px-4 py-12 sm:px-6 lg:px-8">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800 opacity-90"></div>
        <div class="relative w-full max-w-xl">
            <div class="rounded-[2rem] border border-white/10 bg-slate-900/95 p-10 shadow-2xl shadow-slate-950/40 backdrop-blur-xl">
                <div class="mb-10 text-center">
                    <p class="text-sm uppercase tracking-[0.35em] text-cyan-300/75">Akses Blog</p>
                    <h1 class="mt-4 text-4xl font-bold text-white">Login ke Simple Blog</h1>
                    <p class="mt-3 text-slate-400">Gunakan akun contoh di bawah untuk masuk.</p>
                </div>

                <?php if ($error): ?>
                    <div class="rounded-2xl bg-red-500/15 px-4 py-3 text-sm text-red-200 ring-1 ring-red-400/25">
                        <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>

                <div class="mb-6 rounded-3xl border border-slate-700/70 bg-slate-950/80 p-6 text-sm text-slate-200">
                    <p class="font-semibold text-slate-100">Contoh akun login:</p>
                    <div class="mt-4 space-y-2 rounded-2xl bg-slate-900/80 p-4 text-slate-200">
                        <p><span class="font-semibold text-cyan-300">Username:</span> ananta</p>
                        <p><span class="font-semibold text-cyan-300">Password:</span> 123</p>
                    </div>
                </div>

                <form class="space-y-6" action="login.php" method="POST">
                    <div class="space-y-5">
                        <div>
                            <label for="username" class="block text-sm font-medium text-slate-300">Username</label>
                            <input id="username" name="username" type="text" autocomplete="username" required class="mt-3 w-full rounded-3xl border border-slate-700 bg-slate-950/80 px-4 py-3 text-slate-100 outline-none transition duration-200 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-500/20" placeholder="ananta">
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-slate-300">Password</label>
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="mt-3 w-full rounded-3xl border border-slate-700 bg-slate-950/80 px-4 py-3 text-slate-100 outline-none transition duration-200 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-500/20" placeholder="123">
                        </div>
                    </div>

                    <button type="submit" class="w-full rounded-3xl bg-cyan-500 px-5 py-3 text-sm font-semibold text-slate-950 transition duration-200 hover:bg-cyan-400">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
