<?php
session_start(); // Oturum başlat

// Veritabanı bağlantısını ekleyelim
$host = "localhost:3307"; // Sunucu adresi
$dbname = "zikirdb"; // Veritabanı adı
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifresi

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}

// 99 ismi içeren dizi
$isimler = [
    "Allah", "Er_Rahman", "Er_Rahim", "El_Melik", "El_Kuddus", "Es_Selam",
    "El_Mumin", "El_Muheyymin", "El_Aziz", "El_Cebbar", "El_Mutekebbir",
    "El_Halik", "El_Bari", "El_Musavvir", "El_Gaffar", "El_Kahhar", "El_Vehhab",
    "Er_Rezzak", "El_Fettah", "El_Alim", "El_Kabid", "El_Basit", "El_Hafid",
    "Er_Rafi", "El_Muiz", "El_Muzil", "Es_Semi", "El_Basir", "El_Hakem",
    "El_Adl", "El_Latif", "El_Habir", "El_Halim", "El_Azim", "El_Gafur",
    "Es_Sekur", "El_Aliyy", "El_Kebir", "El_Hafiz", "El_Mukit", "El_Hasib",
    "El_Celil", "El_Kerim", "Er_Rakib", "El_Mucib", "El_Vasi", "El_Hakim",
    "El_Vedud", "El_Mecid", "El_Bais", "Es_Sehid", "El_Hak", "El_Vekil",
    "El_Kaviyy", "El_Metin", "El_Veliyy", "El_Hamid", "El_Muhsi", "El_Mubdi",
    "El_Muid", "El_Muhyi", "El_Mumit", "El_Hayy", "El_Kayyum", "El_Vacid",
    "El_Macid", "El_Vahid", "Es_Samed", "El_Kadir", "El_Muktedir",
    "El_Mukaddim", "El_Muahhir", "El_Evvel", "El_Ahir", "Ez_Zahir",
    "El_Batin", "El_Vali", "El_Muteali", "El_Berr", "Et_Tevvab",
    "El_Muntekim", "El_Afuv", "Er_Rauf", "Malik_ul_Mulk",
    "Zul_Celali_vel_Ikram", "El_Muksit", "El_Cami", "El_Gani",
    "El_Mugni", "El_Mani", "Ed_Darr", "En_Nafi", "En_Nur",
    "El_Hadi", "El_Bedi", "El_Baki", "El_Varis", "Er_Resid",
    "Es_Sabur"
];

// Kullanıcıların toplam zikir sayılarını hesapla
function getTotalZikirCount($userId, $conn) {
    global $isimler;
    $totalZikir = 0;

    foreach ($isimler as $isim) {
        $stmt = $conn->prepare("SELECT $isim FROM kullanicilar WHERE id = :id");
        $stmt->execute(['id' => $userId]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result && isset($result[$isim])) {
            $totalZikir += $result[$isim];
        }
    }

    return $totalZikir;
}

// Kullanıcıları ve toplam zikir sayılarını al
$stmt = $conn->prepare("SELECT id, kullanici_adi FROM kullanicilar");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Her kullanıcı için toplam zikir sayısını hesapla
$userScores = [];
foreach ($users as $user) {
    $totalZikir = getTotalZikirCount($user['id'], $conn);
    $userScores[] = [
        'id' => $user['id'],
        'kullanici_adi' => $user['kullanici_adi'],
        'totalZikir' => $totalZikir
    ];
}

// Toplam zikir sayılarına göre kullanıcıları sırala (büyükten küçüğe)
usort($userScores, function($a, $b) {
    return $b['totalZikir'] - $a['totalZikir'];
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global.css">
    <title>Lig Tablosu</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: center;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }

        table tr:nth-child(odd) {
            background-color: #ffffff; /* Tek satırlar beyaz */
        }

        table tr:nth-child(even) {
            background-color:rgb(191, 187, 179); /* Çift satırlar açık gri */
        }

        h2 {
            color: #333;
        }

    </style>
</head>
<body>
    <h1>Liderlik Tablosu</h1>

    <table>
        <thead>
            <tr>
                <th>Sıra</th>
                <th>Kullanıcı Adı</th>
                <th>Toplam Zikir Sayısı</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userScores as $index => $user) { ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo $user['kullanici_adi']; ?></td>
                    <td><?php echo $user['totalZikir']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
