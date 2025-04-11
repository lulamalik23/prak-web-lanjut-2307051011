<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
    background: url('/img/loopie.jpg') no-repeat center center fixed;
    background-size: cover; /* Pastikan gambar penuh */
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
    width: 100vw;
    margin: 0;
    padding: 0;
}



        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 182, 193, 0.5);
            z-index: 1;
        }

        .profile-card {
            position: relative;
            z-index: 2;
            background: rgba(255, 182, 193, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 400px;
        }

        .profile-img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
            margin: 0 auto 20px;
            border: 4px solid #FF69B4;
        }

        .profile-info {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            background: #FFFFFF;
            border: 2px solid #FF69B4;
            border-radius: 8px;
            font-weight: bold;
            color: #4A235A;
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="overlay"></div>

    <div class="profile-card">
        <div class="profile-img" style="background: url('{{ asset('img/loopie.jpg') }}') no-repeat center center fixed; background-size: cover;">
        <div class="profile-info">Nama: {{ $nama }}</div>
        <div class="profile-info">NPM: {{ $npm }}</div>
        <div class="profile-info">Kelas: {{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</div>
    </div>   

</body>
</html>
