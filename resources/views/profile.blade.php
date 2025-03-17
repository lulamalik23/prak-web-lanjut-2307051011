<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
    background-color: #FFC0CB; /* Warna pink polos */
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
}

.profile-card {
    background: rgba(255, 255, 255, 0.8); /* Semi transparan */
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
    background: rgba(255, 182, 193, 0.7); /* Pink pastel */
    border-radius: 8px;
    font-weight: bold;
    color: #4A235A; /* Warna ungu tua untuk kontras */
    font-size: 18px;
    text-align: center;
}

    </style>
</head>
<body>

    <div class="profile-card">
        <div class="profile-img" style="background-image: url('{{ asset('img/loopie.jpg') }}');"></div>
        <div class="profile-info">Lula {{ $nama }}</div>
        <div class="profile-info">2307051011{{ $npm }}</div>
        <div class="profile-info">D3MI {{ $kelas }}</div>
    </div>   

</body>
</html> 