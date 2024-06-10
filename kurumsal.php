<?php
require_once "..\yonetimpaneli\class\VT.php";
$VT=new VT();
$seflink=$VT->filter($_GET["seflink"]);
$veri=$VT->VeriGetir ("kurumsal", "WHERE seflink=? AND durum=?", array($seflink, 1), "ORDER BY ID ASC", 1);

?>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<section id="about-section" class="pt-5 pb-5">
    <div class="container wrapabout">
        <div class="red"></div>
        <div class="row">
            <div class="col-lg-6 align-items-center justify-content-left d-flex mb-5 mb-lg-0">
                <div class="blockabout">
                    <div class="blockabout-inner text-center text-sm-start">
                        <div class="title-big pb-3 mb-3">
                            <h3><?=stripslashes($veri[0]["baslik"]) ?></h3>
                        </div>
                        <p class="description-p text-muted pe-0 pe-lg-0">
                            <?=stripslashes($veri[0]["metin"])?> 
                        </p>
                                                
                        <a href="../index.php" class="btn rey-btn mt-3">Ana Sayfaya Dön</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<style>
#about-section {
    background: rgba(32, 33, 36, 0.1);
    position: relative;
}

.blockabout {
    padding: 20px;
    background: white;
}

.blockabout-inner {
    padding: 30px;
    border: 1px solid rgba(32, 33, 36, 0.1);
}

.sosmed-horizontal a i {
    border: 1px solid #070707;
    border-radius: 50%;
    color: #070707;
    display: inline-block;
    height: 30px;
    width: 30px;
    line-height: 30px;
    margin: auto 3px;
    font-size: 15px;
    text-align: center;
    transition: all 0.3s;
}

.rey-btn {
    border: 2px solid #070707;
    padding: 10px 40px;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 13px;
    font-weight: 700;
    border-radius: 50px;
    transition: all 0.3s;
}
</style>


<?php 
/*






if (!empty($_GET["seflink"]))
{
    $seflink=$VT->filter($_GET["seflink"]);
    $veri=$VT->VeriGetir ("kurumsal", "WHERE seflink=? AND durum=?", array($seflink, 1), "ORDER BY ID ASC", 1);
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
                        <img src="<?=SITE?>images/kurumsal/<?=$veri[0]["resim"]?>" style="width:100%; height:auto;">
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

*/
?>
    