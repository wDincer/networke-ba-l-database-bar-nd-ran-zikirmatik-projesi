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

// URL'den zikir ismini al
$zikir_ismi = $_GET['zikir']; // URL'den gelen zikir ismini alıyoruz

// Veritabanından anlamı almak için sorgu
$stmt = $conn->prepare("SELECT anlam FROM zikirkelimeleri WHERE isim = :isim");
$stmt->execute(['isim' => $zikir_ismi]);
$zikir = $stmt->fetch(PDO::FETCH_ASSOC);

// Zikirin anlamı yoksa hata göster
if (!$zikir) {
    echo "Bu zikirin anlamı bulunamadı!";
    exit;
}

// Oturumda zikirin sayısını başlat
if (!isset($_SESSION[$zikir_ismi])) {
    $_SESSION[$zikir_ismi] = 0;
}

// Butona tıklanıp tıklanmadığını kontrol et
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION[$zikir_ismi]++;

    // Veritabanında güncelleme yap
    if (isset($_SESSION["id"])) {
        $userId = $_SESSION["id"];
        $stmt = $conn->prepare("UPDATE kullanicilar SET $zikir_ismi = :deger WHERE id = :id");
        $stmt->execute(['deger' => $_SESSION[$zikir_ismi], 'id' => $userId]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $zikir_ismi; ?> Zikri</title>
    <link rel="stylesheet" href="global.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #eef2f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 500px;
        }

        h3 {
            font-size: 24px;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #555;
            margin: 10px 0;
        }

        .button-container {
            margin-top: 20px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .exit-btn {
            color: white;
            background-color: #FF5733;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            display: inline-block;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .exit-btn:hover {
            background-color: #d74e29;
        }
    </style>
</head>
<body>

    <div class="container">
        <h3><?php echo $zikir_ismi; ?> Zikri</h3>
        <p>Anlamı: <?php echo $zikir['anlam']; ?></p>
        <p>Okuma Sayısı: <?php echo $_SESSION[$zikir_ismi]; ?></p>

        <div class="button-container">
            <form method="post">
                <button type="submit">Zikir Oku</button>
            </form>
        </div>

        <a href="deneme.php" class="exit-btn">Geri Dön</a>
    </div>

</body>
</html>
