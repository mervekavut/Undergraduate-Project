<link rel="stylesheet" href="../css/style.css">

<!-- bradcam_area  -->
<!DOCTYPE html>
<html>
<head>
    <style>
        .bradcam_area {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
        }
    </style>
</head>
<body>
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>İletişim</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
           
<!--/ bradcam_area  -->
           
   <!-- about_mission  -->
   <div class="explorer_europe">
       <div class="container" style="padding-top:20px;">
           <div class="row align-items-center">
           <div class="col-md-8">
           <?php
if ($_POST)
{
  if (!empty($_POST["adsoyad"]) && !empty($_POST["mail"]) && !empty($_POST["konu"]) && !empty($_POST["mesaj"]))
  {
    $adsoyad = $_POST["adsoyad"];
    $mail = $_POST["mail"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];
    $telefon = $_POST["telefon"];
    $metin = "Ad Soyad: " . $adsoyad . ' Mail Adresi: ' . $mail . " Telefon: " . $telefon . " Mesaj: " . $mesaj;

    // MailGonder fonksiyonunu kullanarak e-posta gönderme
    if (MailGonder($mail, $konu, $metin)) {
      echo '<div class="alert alert-success">Mesajınız başarıyla iletildi.</div>';
    } else {
      echo '<div class="alert alert-danger">Lütfen daha sonra tekrar deneyiniz.</div>';
    }
  }
  else
  {
    echo '<div class="alert alert-danger">Boş bıraktığınız alanları doldurunuz.</div>';
  }
}

function MailGonder($mail, $konu = "", $mesaj)
{
  require 'C:\xampp\htdocs\kurumsalsite\yonetimpaneli\class\class.phpmailer.php'; // PHPMailer dosya yolunu düzeltin

  $posta = new PHPMailer();
  $posta->CharSet = "UTF-8";
  $posta->IsSMTP();
  $posta->Host = "mail.siteadi.com";
  $posta->SMTPAuth = true;
  $posta->Username = "mail@siteadi.com";
  $posta->Password = "mailsifresi";
  $posta->Port = 587;
  $posta->From = "mail@siteadi.com";
  $posta->AddAddress($mail, "mail@siteadi.com");
  $posta->Subject = $konu;
  $posta->Body = $mesaj;

  if (!$posta->Send()) {
    return false;
  } else {
    return true;
  }
}
?>

            <form action="#" method="post">
            <table class="table">
            <tr>
            <td>Adınız Soyadınız</td>
            <td><input type="text" name="adsoyad" class="form-control" required="required" /></td> 
            </tr>
            <td>Mail Adresi</td>
            <td><input type="email" name="mail" class="form-control" required="required" /></td>
            </tr>
            <tr>
            <td>Telefon</td>
            <td><input type="text" name="telefon" class="form-control" maxlength="11" /></td>
            </tr>
            <tr>
            <td>Konu</td>
            <td><input type="text" name="konu" class="form-control" required="required" /></td>
            </tr>
            <tr>
            <td>Mesajınız</td>
            <td>
            <textarea name="mesaj" class="form-control">
            </textarea>
            </td>
            </tr>
            <tr>
            <td></td>
            <td><input type="submit" name="ilet" class="form-control" value="Gönder" /></td>
            </tr>
            </table>
            </form>
            </div>
<?php 
require_once "..\yonetimpaneli\class\VT.php";
$sorgu=$conn->query("SELECT * FROM ayarlar");
$data=mysqli_fetch_array($sorgu);

?>

            <div class="col-md-4">
            <h3>Bize Ulaşın</h3>
            <p>Telefon: <?=$data['telefon']?></p>
            <p>Fax: <?=$data['fax']?></p>
            <p>E-Posta : <?=$data['mail']?></p>
            <p>Adres : <?=$data['adres']?></p>
            </div> 
           
           </div>
       </div>
   </div>
   <!--/ about_mission -->

   