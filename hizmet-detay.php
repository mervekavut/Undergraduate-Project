<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$sitebaslik?></title>
  <meta http-equiv="keywords" content="<?=$siteanahtar?>">
  <meta http-equiv="description" content="<?=$siteaciklama?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE?>img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?=SITE?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=SITE?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=SITE?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?=SITE?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=SITE?>css/themify-icons.css">
    <link rel="stylesheet" href="<?=SITE?>css/nice-select.css">
    <link rel="stylesheet" href="<?=SITE?>css/flaticon.css">
    <link rel="stylesheet" href="<?=SITE?>css/gijgo.css">
    <link rel="stylesheet" href="<?=SITE?>css/animate.css">
    <link rel="stylesheet" href="<?=SITE?>css/slick.css">
    <link rel="stylesheet" href="<?=SITE?>css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<?php
if (!empty($_GET["seflink"]))
{
    $seflink=$VT->filter($_GET["seflink"]);
    $veri=$VT->VeriGetir ("hizmetler", "WHERE seflink=? AND durum=?", array($seflink, 1), "ORDER BY ID ASC", 1);
    if ($veri!=false)
    {
?>
 <!-- bradcam_area  -->
 <div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h3><?=stripslashes($veri[0]["baslik"]) ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
<!--/ bradcam_area  -->
            
    <!-- about_mission  -->
    <div class="about_mission">
        <div class="container">
            <div class="row align-items-center">
                <?php
                if(!empty($veri[0]["resim"]))
                {
                    
                    ?>
                     <div class="col-xl-6 col-md-6">
                        <img src="<?=SITE?>images/hizmetler/<?=$veri[0]["resim"]?>" style="width:100%; height:auto;">
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="about_text">
                        <?=stripslashes($veri[0]["metin"])?> 
                        </div>
                    </div>
                    <?php
                }
                else
                {
                    ?>
                     
                    <div class="col-xl-12 col-md-12">
                        <div class="about_text">
                            <?=stripslashes($veri[0]["metin"])?>
                        </div>
                    </div>
                    <?php
                }
                ?>
               
            </div>
        </div>
    </div>
    <!--/ about_mission -->
<?php
    }
}
?>
    