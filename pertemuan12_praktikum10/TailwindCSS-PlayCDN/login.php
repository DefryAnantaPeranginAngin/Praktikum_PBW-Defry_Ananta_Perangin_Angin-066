<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="max-w-4xl mx-auto mt-12 p-4">
    <h2 class="text-2xl font-bold mb-4"> Masuk kedalam sistem</h2>
    <?php if (isset($_GET['message'])): ?>
        <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded mb-4"><?=htmlspecialchars($_GET['message']) ?></div>
    <?php endif; ?>
    <form method="post" action="proses_login.php">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Nama pengguna :</label>
            <input type="text" name="username"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Kata sandi :</label>
            <input type="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>

    </form>
</body>

</html>