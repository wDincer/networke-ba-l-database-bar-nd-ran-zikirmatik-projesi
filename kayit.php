<?php

include("baglanti.php");

$username_err= "";
$email_err= "";
$parola_err= "";
$parolatekrar_err= "";

if(isset($_POST["kaydet"]))
{

    //kullanıcı adı dogrulama
    if(empty($_POST["kullaniciadi"])){
        $username_err="Kullanıcı adı boş geçilemez";
    }else if(strlen($_POST["kullaniciadi"])<6){
        $username_err="Kullanıcı adı en az 6 karakterli olmalıdır";
    }if (!preg_match('/^[a-z\d_]{5,20}$/i', $_POST["kullaniciadi"])) {
        $username_err="Kullanıcı adı büyük küçük harf ve rakamlardan oluşmalıdır. Boşluk kullanılamaz.";
        }else{
            $username=$_POST["kullaniciadi"];
        }

    //email dogrulama
    if(empty($_POST["email"])) {
        $email_err = "Email adresi boş geçilemez";
    } else {
        $email = $_POST["email"];
    }

    //parola

    if(empty($_POST["parola"])){
        $parola_err="Parola boş geçilemez";
    }else if(strlen($_POST["parola"])<6){
        $parola_err="Parola en az 6 karakterli olmalıdır";
    }else{
        $parola=$_POST["parola"];
    }

    //parola tekrarı
    if(empty($_POST["parolatekrar"])){
        $parolatekrar_err="Parola boş geçilemez";
    }else if($_POST["parolatekrar"]!=$_POST["parola"]){
        $parolatekrar_err="Parolalar aynı değil";
    }else{
        $parolatekrar=password_hash($_POST["parola"],PASSWORD_DEFAULT);
    }



    $name = $_POST["kullaniciadi"];
    $email = $_POST["email"];
    $parola = password_hash($_POST["parola"],PASSWORD_DEFAULT);


    if(empty($username_err) && empty($email_err) && empty($parola_err)&& empty($parolatekrar_err)){
    $ekle = "INSERT INTO kullanicilar (kullanici_adi,email,parola) VALUES ('$name','$email','$parola')" ;
    $calistirekle = mysqli_query($baglan,$ekle);

    if($calistirekle){
        echo '<div class="alert alert-success" role="alert">
            Kaydınız Başarıyla Gerçekleşti
        </div>';

    }else{
        echo '<div class="alert alert-danger" role="alert">
            Kayıt Sırasında Bir hata Oluştu
        </div>';
    }

    mysqli_close($baglan);
}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uye Kayıt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="global.css">
  </head>
  <body>
    <h1 class="text-center">Kayıt Ol</h1>

    <div class="container p-5">
        <div class="card p-5">
        <form action="kayit.php" method="POST">
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kullanıcı Adı</label>
                <input type="text" class="form-control 
                <?php

                if(!empty($username_err)){
                    echo "is-invalid";
                }

                ?>
                
                
                
                " id="exampleInputEmail1" name="kullaniciadi">
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    <?php
                    echo $username_err;
                    ?>
                </div>
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Adresi</label>
                <input type="email" class="form-control 
                <?php

                if(!empty($email_err)){
                    echo "is-invalid";
                }

                ?>
                
                " id="exampleInputEmail1" name="email">
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                <?php
                    echo $email_err;
                    ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Parola</label>
                <input type="password" class="form-control 
                <?php

                if(!empty($parola_err)){
                    echo "is-invalid";
                }

                ?>
                
                " id="exampleInputPassword1" name="parola">
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                <?php
                    echo $parola_err;
                    ?>
                </div>
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Parola Tekrarı</label>
                <input type="password" class="form-control 
                <?php

                if(!empty($parolatekrar_err)){
                    echo "is-invalid";
                }

                ?>
                
                " id="exampleInputPassword1" name="parolatekrar">
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                <?php
                    echo $parolatekrar_err;
                    ?>
                </div>
            </div>
  
            <button type="submit" name="kaydet" class="btn btn-primary">Kayıt Ol</button>
            <button class="btn btn-primary"><a style="color:white; text-decoration:none;" href="index.html">Ana Sayfaya Dön</a></button>
        </form>     

        </div>

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>