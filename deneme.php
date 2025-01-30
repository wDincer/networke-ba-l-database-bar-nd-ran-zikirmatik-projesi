<?php
session_start();

// Oturumda kullanıcı bilgilerini göster
if (isset($_SESSION["kullanici_adi"])) {
    echo "<h3>" . $_SESSION["kullanici_adi"] . " HOŞGELDİN </h3>";
    echo "<h3>" . $_SESSION["email"] . "</h3>";
    
    
    echo "<div class=\"orta\">
<a href='cikis.php' class=\"exit-btn\">ÇIKIŞ YAP</a>
</div>";

} else {
    header("Location: login.php");
    exit;
}

// Zikir isimleri dizisi
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
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa - Allah'ın 99 İsmi</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="deneme.css">

    <style>




        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color:rgb(255, 255, 255);
            font-size: 36px;
            margin-bottom: 40px;
        }

        ul {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 0;
            list-style: none;
        }

        li {
            margin: 10px;
            text-align: center;
        }

        a {
            display: block;
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            width: 150px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #45a049;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            a {
                width: 120px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            a {
                width: 100px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>

    <h1 style="color:red;font-size:4rem">Allah'ın 99 İsmi</h1>
    <ul>
        <?php foreach ($isimler as $isim): ?>
            <li>
                <a href="deneme1.php?zikir=<?php echo $isim; ?>"><?php echo $isim; ?> Zikri</a>
            </li>
        <?php endforeach; ?>
    </ul>

    
    
    
    


</body>
</html>
