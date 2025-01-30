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

// Oturumda isimleri başlat
foreach ($isimler as $isim) {
    if (!isset($_SESSION[$isim])) {
        $_SESSION[$isim] = 0;
    }
}

// Butonlara tıklanıp tıklanmadığını kontrol et
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($isimler as $isim) {
        if (isset($_POST[$isim . 'Btn'])) {
            $_SESSION[$isim]++;

            // Veritabanında güncelleme yap
            if (isset($_SESSION["id"])) {
                $userId = $_SESSION["id"];
                $stmt = $conn->prepare("UPDATE kullanicilar SET $isim = :deger WHERE id = :id");
                $stmt->execute(['deger' => $_SESSION[$isim], 'id' => $userId]);
            }
        }
    }
}

// Oturumda kullanıcı bilgilerini göster
if (isset($_SESSION["kullanici_adi"])) {
    echo "<h3>" . $_SESSION["kullanici_adi"] . " HOŞGELDİN </h3>";
    echo "<h3>" . $_SESSION["email"] . "</h3>";
    echo "<h3>" . $_SESSION["id"] . "</h3>";
    
    echo "<a href='cikis.php' class='exit-btn'>ÇIKIŞ YAP</a>";
} else {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allah'ın 99 İsmi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 20px;
        }

        h3 {
            color: #2a2a2a;
            font-size: 18px;
        }

        .exit-btn {
            color: white;
            background-color: red;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            display: inline-block;
        }

        .exit-btn:hover {
            background-color: darkred;
        }

        .button-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); /* Butonlar daha küçük */
            gap: 15px;
            margin-top: 30px;
        }

        .button-container div {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 15px; /* Butonları küçülttük */
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <form method="post">
        <div class="button-container">
            <?php foreach ($isimler as $isim) { ?>
                <div>
                    <span><?php echo $isim; ?>:</span>
                    <button type="submit" name="<?php echo $isim; ?>Btn"><?php echo $_SESSION[$isim]; ?></button>
                </div>
            <?php } ?>
        </div>
    </form>
</body>
</html>
