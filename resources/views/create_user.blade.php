<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-white">

    <div class="bg-pink-200 p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-4 text-pink-700">Tambah User</h2>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div>
                <label for="nama" class="block font-medium text-pink-800">Nama</label>
                <input type="text" id="nama" name="nama" class="w-full border border-pink-400 bg-white rounded-lg p-2 mt-1 focus:ring-2 focus:ring-pink-500" required>
            </div>

            <div class="mt-4">
                <label for="npm" class="block font-medium text-pink-800">NPM</label>
                <input type="text" id="npm" name="npm" class="w-full border border-pink-400 bg-white rounded-lg p-2 mt-1 focus:ring-2 focus:ring-pink-500" required>
            </div>

            <div class="mt-4">
                <label for="kelas" class="block font-medium text-pink-800">Kelas</label>
                <input type="text" id="kelas" name="kelas" class="w-full border border-pink-400 bg-white rounded-lg p-2 mt-1 focus:ring-2 focus:ring-pink-500" required>
            </div>

            <button type="submit" class="w-full bg-pink-500 text-white font-semibold py-2 rounded-lg hover:bg-pink-600 transition mt-4">
                Submit
            </button>
        </form>
    </div>

</body>
</html>
