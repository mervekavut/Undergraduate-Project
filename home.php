<div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/carousel-2.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft"  style="font-size:xx-large; color:aliceblue">ADALET</h1>
                            <p class="animated fadeInRight" style="font-size:large; color:aliceblue">"Adalet, herkese eşit davranmak değil, eşit davranılması gerekeni eşit şekilde muamele etmektir."</p>
                            
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/carousel-3.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft" style="font-size:xx-large; color:aliceblue">HAK</h1>
                            <p class="animated fadeInRight" style="font-size:large; color:aliceblue">"Hak, insanların eşitlik ve özgürlük içinde yaşama hakkıdır." </p>
                           
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/single.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft" style="font-size:xx-large; color:aliceblue">HUKUK</h1>
                            <p class="animated fadeInRight" style="font-size:large; color:aliceblue">"Hukuk, güçsüzün güçlüyle mücadelesindeki denge unsudur."</p>
                            
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
<!-- slider_area_end -->

<div class="popular_catagory_area">
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="section_title mb-60 text-center">
                
                <h3>
                    Neler Yapıyoruz
                </h3>
            </div>
        </div>
    </div>
    <div class="explorer_europe" style="padding-bottom:5px;">
    <div class="container" style="padding-top:20px;">
    <div class="row">
    <div class="row">
    <?php
            $hizmetler=$VT->VeriGetir("hizmetler","WHERE durum=?",array(1),"ORDER BY ID DESC",3);
            if($hizmetler!=false)
            {
                for($i=0;$i<count($hizmetler);$i++)
                {
                    if(!empty($hizmetler[$i]["resim"])) {$resim=$hizmetler[$i]["resim"];} else{$resim='varsayilan.png';}
                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_explorer">
                        <div class="thumb" style="height:130px;">
                            <img src="<?=SITE?>images/hizmetler/<?=$resim?>" alt="<?=stripslashes($hizmetler[$i]["baslik"])?>">
                        </div>
                        <div class="explorer_bottom d-flex">
    
                            <div class="explorer_info">
                                <h3><a href="<?=SITE?>hizmet-detay/<?=$hizmetler[$i]["seflink"]?>"><?=stripslashes($hizmetler[$i]["baslik"])?></a></h3>
                                <p><?=mb_substr(strip_tags(stripslashes($hizmetler[$i]["metin"])),0,120,"UTF-8")?>...</p>
                                
                            </div>
                        </div>
                    </div>
                    </div>
                     <?php
                }
            }
            ?>
    </div>
</div>
</div>
</div>


<div class="popular_catagory_area">
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="section_title mb-60 text-center">
                
                <h3>
                    Projelerimizi Öğrenin
                </h3>
            </div>
        </div>
    </div>
    <div class="explorer_europe" style="padding-bottom:5px;">
    <div class="container" style="padding-top:20px;">
    <div class="row">
    <div class="row">
    <?php
           $hizmetler=$VT->VeriGetir("projeler","WHERE durum=?",array(1),"ORDER BY ID DESC",3);//en son yapılan 3 tane projeyi gösteriyor
           if($hizmetler!=false)
           {
               for($i=0;$i<count($hizmetler);$i++)
               {
                   if(!empty($hizmetler[$i]["resim"])) {$resim=$hizmetler[$i]["resim"];} else{$resim='varsayilan.png';}
                   ?>
                   <div class="col-xl-4 col-lg-4 col-md-6">
                   <div class="single_explorer">
                       <div class="thumb" style="height:130px;" >
                           <img src="<?=SITE?>images/projeler/<?=$resim?>" alt="<?=stripslashes($hizmetler[$i]["baslik"])?>">
                       </div>
                       <div class="explorer_bottom d-flex">
   
                           <div class="explorer_info">
                               <h3><a href="<?=SITE?>proje-detay/<?=$hizmetler[$i]["seflink"]?>"><?=stripslashes($hizmetler[$i]["baslik"])?></a></h3>
                               <p><?=mb_substr(strip_tags(stripslashes($hizmetler[$i]["metin"])),0,120,"UTF-8")?>...</p>
                               
                           </div>
                       </div>
                   </div>
               </div>
                    <?php
               }
           }
           ?>
    </div>
</div>
</div>
</div>

<!-- sprayed_area  -->
<div class="sprayed_area overlay">
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="text text-center">
                <h3>Bize Ulaşın</h3>
                <p>Soru fikir ve önerileriniz için bizimle iletişime geçebilirsiniz.</p>
                <a href="include/iletisim.php" class="boxed-btn2">İletişime Geç</a>
            </div>
        </div>
    </div>
</div>
</div>
<!--/ sprayed_area end  -->

<!-- testimonial_area  -->
<!--
müşteri düşünceleri için bir bölüm

<div class="testimonial_area  ">
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="section_title mb-60 text-center">
                <p>Testimonials</p>
                <h3>
                    What our Client Says
                </h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="testmonial_active owl-carousel">
                <div class="single_carousel">
                    <div class="single_testmonial text-center">
                        <div class="quote">
                            <img src="img/svg_icon/quote.svg" alt="">
                        </div>
                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                            <br>
                            Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                        <div class="testmonial_author">
                            <div class="thumb">
                                <img src="img/case/testmonial.png" alt="">
                            </div>
                            <h3>Robert Thomson</h3>
                            <span>Business Owner</span>
                        </div>
                    </div>
                </div>
                <div class="single_carousel">
                    <div class="single_testmonial text-center">
                        <div class="quote">
                            <img src="img/svg_icon/quote.svg" alt="">
                        </div>
                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                            <br>
                            Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                        <div class="testmonial_author">
                            <div class="thumb">
                                <img src="img/case/testmonial.png" alt="">
                            </div>
                            <h3>Robert Thomson</h3>
                            <span>Business Owner</span>
                        </div>
                    </div>
                </div>
                <div class="single_carousel">
                    <div class="single_testmonial text-center">
                        <div class="quote">
                            <img src="img/svg_icon/quote.svg" alt="">
                        </div>
                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                            <br>
                            Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                        <div class="testmonial_author">
                            <div class="thumb">
                                <img src="img/case/testmonial.png" alt="">
                            </div>
                            <h3>Robert Thomson</h3>
                            <span>Business Owner</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
        