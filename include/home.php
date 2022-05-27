<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10">
                    <div class="slider_text text-center justify-content-center">
                        <p>PHP TÜRKİYE</p>
                        <h3>Kurumsal Firma Scripti</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<div class="popular_catagory_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-60 text-center">
                    <h3>
                        Neler Yapıyoruz?
                    </h3>
                </div>
            </div>
        </div>
        <div class="explorer_europe" style="padding-bottom:10px;">
            <div class="container" style="padding-top:20px;">
                <div class="row">
            <?php
            $hizmetler=$VT->VeriGetir("hizmetler","WHERE durum=?",array(1),"ORDER BY ID DESC",3);
            if ($hizmetler!=false)
            {
                for($i=0;$i<count($hizmetler);$i++)
                {
                    if (!empty($hizmetler[$i]["resim"]))
                    {
                        $resim=$hizmetler[$i]["resim"];
                    }
                    else
                    {
                        $resim='varsayilan.jpg';
                    }
                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_explorer" >
                            <div class="thumb" style="height:150px">
                                <img src="<?=SITE?>images/hizmetler/<?=$resim?>" alt="<?=stripslashes($hizmetler[$i]["baslik"])?>">
                            </div>
                            <div class="explorer_bottom d-flex">
                                <div class="explorer_info">
                                    <h3><a href="<?=SITE?>hizmet-detay/<?=$hizmetler [$i]["seflink"]?>"><?=stripslashes($hizmetler[$i]["baslik"])?></a></h3>
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
</div>

<div class="popular_catagory_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-60 text-center">
                    <h3>
                        Projelerimiz
                    </h3>
                </div>
            </div>
        </div>
        <div class="explorer_europe" style="padding-bottom:10px;">
            <div class="container" style="padding-top:20px;">
                <div class="row">
                    <?php
                    $hizmetler=$VT->VeriGetir("projeler","WHERE durum=?",array(1),"ORDER BY ID DESC",3);
                    if ($hizmetler!=false)
                    {
                        for($i=0;$i<count($hizmetler);$i++)
                        {
                            if (!empty($hizmetler[$i]["resim"]))
                            {
                                $resim=$hizmetler[$i]["resim"];
                            }
                            else
                            {
                                $resim='varsayilan.jpg';
                            }
                            ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_explorer">
                                    <div class="thumb" style="height:150px">
                                        <img src="<?=SITE?>images/projeler/<?=$resim?>" alt="<?=stripslashes($hizmetler[$i]["baslik"])?>">
                                    </div>
                                    <div class="explorer_bottom d-flex">
                                        <div class="explorer_info">
                                            <h3><a href="<?=SITE?>proje-detay/<?=$hizmetler [$i]["seflink"]?>"><?=stripslashes($hizmetler[$i]["baslik"])?></a></h3>
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
</div>


<!-- sprayed_area  -->
<div class="sprayed_area overlay">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="text text-center">
                    <h3>Sprayed Your Business with Us </h3>
                    <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing
                        drawing <br> apartments frequently or motionless.</p>
                    <a href="#" class="boxed-btn2">Add Your Business</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ sprayed_area end  -->

<!-- testimonial_area  -->
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
<!-- /testimonial_area  -->
