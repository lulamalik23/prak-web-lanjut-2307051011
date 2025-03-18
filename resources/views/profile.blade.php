<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('img/loopie.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        /* Overlay transparan agar lebih aesthetic */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 182, 193, 0.5); /* Pink pastel transparan */
            z-index: 1;
        }

        .profile-card {
            position: relative;
            z-index: 2;
            background: rgba(255, 182, 193, 0.9); /* Pink pastel lebih soft */
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
            border: 4px solid #FF69B4; /* Pink cerah */
        }

        .profile-info {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            background: #FFFFFF; /* Kotak form putih */
            border: 2px solid #FF69B4; /* Border pink */
            border-radius: 8px;
            font-weight: bold;
            color: #4A235A; /* Warna ungu tua */
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Overlay Transparan -->
    <div class="overlay"></div>

    <div class="profile-card">
        <div class="profile-img" style="background-image: url('{{ asset('img/loopie.jpg') }}');"></div>
        <div class="profile-info">{{ $nama }}</div>
        <div class="profile-info">{{ $npm }}</div>
        <div class="profile-info">{{ $kelas }}</div>
    </div>   

</body>
</html>
