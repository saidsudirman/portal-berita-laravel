<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="text-center">
        <h2 class="text-2xl font-semibold">Selamat Datang di Dashboard</h2>
        <p class="mt-2 text-gray-600">Anda berhasil login.</p>
        <form action="{{ route('logout') }}" method="POST" class="mt-4">
            @csrf
            <button type="submit" class="bg-red-500 text-white p-2 rounded-lg hover:bg-red-600">
                Logout
            </button>
        </form>
    </div>
</body>
</html>
