<?php
include("baglanti.php");

$username_err = "";
$parola_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["giris"])) {

    // Kullanıcı adı kontrolü
    if (empty(trim($_POST["kullaniciadi"]))) {
        $username_err = "Kullanıcı adı boş geçilemez";
    } else {
        $username = trim($_POST["kullaniciadi"]);
    }

    // Parola kontrolü
    if (empty(trim($_POST["parola"]))) {
        $parola_err = "Parola boş geçilemez";
    } else {
        $parola = trim($_POST["parola"]);
    }

    // Eğer hata yoksa devam et
    if (empty($username_err) && empty($parola_err)) {

        // SQL Injection'ı önlemek için hazırlıklı ifade kullan
        $secim = "SELECT * FROM kullanicilar WHERE kullanici_adi = ?";
        if ($stmt = mysqli_prepare($baglan, $secim)) {

            // Parametreyi bağla
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);

            // Sonucu al
            $sonuc = mysqli_stmt_get_result($stmt);
            if (mysqli_num_rows($sonuc) > 0) {
                $ilgilikayit = mysqli_fetch_assoc($sonuc);
                $hashlisifre = $ilgilikayit["parola"];

                if (password_verify($parola, $hashlisifre)) {
                    session_start();
                    $_SESSION["kullanici_adi"] = $ilgilikayit["kullanici_adi"];
                    $_SESSION["email"] = $ilgilikayit["email"];
                    $_SESSION["id"] = $ilgilikayit["id"];
                    $_SESSION["Allah"] = $ilgilikayit["Allah"];

                    header("Location: deneme.php");
                    exit;
                } else {
                    echo '<div class="alert alert-danger" role="alert">Parola Yanlış</div>';
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">Kullanıcı Adınız Yanlış</div>';
            }
            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($baglan);
}
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Üye Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="global.css">
</head>
<body>
    <h1 class="text-center">Giriş Yap</h1>

    <div class="container p-5">
        <div class="card p-5">
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Kullanıcı Adı</label>
                    <input type="text" class="form-control <?php echo !empty($username_err) ? "is-invalid" : ""; ?>" name="kullaniciadi">
                    <div class="invalid-feedback"><?php echo $username_err; ?></div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Parola</label>
                    <input type="password" class="form-control <?php echo !empty($parola_err) ? "is-invalid" : ""; ?>" name="parola">
                    <div class="invalid-feedback"><?php echo $parola_err; ?></div>
                </div>

                <button type="submit" name="giris" class="btn btn-primary">Giriş Yap</button>
                <button class="btn btn-primary"><a style="color:white; text-decoration:none;" href="index.html">Ana Sayfaya Dön</a></button>
            </form>     
        </div>
    </div>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
