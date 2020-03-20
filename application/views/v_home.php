
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/page.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>css/icons.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>css/controls.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <div class="login">

    </div>
    <div class="container-fluid header" style="padding:0">
        
         <?php
            include_once("buyWindow.php");
        ?>
        
        <?php include 'header.php'; ?>

        <div class="container-fluid content max1080p">
            <div class="row paddingLR50px">

                <?php include "kategori.php" ?>

                <div class="col-lg-10 slider">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="<?php echo base_url() ?>img/banner/banner1.jpg" alt="First slide">
                                <div class="carousel-caption">
                                    <h3>Buku adalah jendela dunia</h3>
                                    <p>Buku bekas tidak masalah, yang penting ilmunya</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="<?php echo base_url() ?>img/banner/banner2.jpg" alt="Second slide">
                                <div class="carousel-caption">
                                    <h3>Buku adalah keajaiban yang unik</h3>
                                    <p>Tidak ada teman yang selalu ada seperti buku</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="<?php echo base_url() ?>img/banner/banner3.jpg" alt="Third slide">
                                <div class="carousel-caption">
                                    <h3>Buku adalah sumber ilmu pengetahuan</h3>
                                    <p>Membaca tidak akan merugikanmu</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row paddingLR50px" style="padding-top: 30px;margin-bottom: 30px;">
                <div class="col-md">
                    <div class="img-fluid divImgBackground threeSection wrapCenter" style="background-image:url(<?php echo base_url() ?>img/banner/banner4.jpg);">
                        <div class="innerCenter">
                            <h4 class="threeSectionName">
                                Koleksi Buku ZZZZ
                            </h4>
                            <div class="threeSectionDetails">
                                <button type="button" class="btn btn-warning btn-sm">Discount sampain -100%</button>
                                <p>
                                    buruan jgn sampai kehabisan cuy
                                </p>
                                
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-md">
                    <div>
                        <div class="img-fluid divImgBackground threeSection wrapCenter" style="background-image:url(<?php echo base_url() ?>img/banner/banner5.jpg);">
                            <div class="innerCenter">
                                <h4 class="threeSectionName">
                                    aku suka dibuka tapi tidak dibaca
                                </h4>
                                <div class="threeSectionDetails">
                                    <p>
                                        kamu jahat mz
                                    </p>
                                    <button type="button" class="btn btn-warning btn-sm">Explore now</button>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-md">
                    <div>
                        <div class="img-fluid divImgBackground threeSection wrapCenter" style="background-image:url(<?php echo base_url() ?>img/banner/banner6.jpg);">
                            <div class="innerCenter">
                                <h4 class="threeSectionName">
                                    Hanya
                                </h4>
                                <div class="threeSectionDetails">
                                    <h5 class="threeSectionName">
                                        hari ini
                                    </h5>
                                    <p>
                                        menjual harga diri lebih mudah
                                    </p>
                                    <button type="button" class="btn btn-warning btn-sm">Beli saya now!</button>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row paddingLR50px">
                <!--SIDEBARS-->
                <?php include 'sidebar.php'; ?>
                <!--CONTENT-->
                <div class="col-md-10 highlight container mx-auto">
                    <div class="titleSection" style="margin-top:5px">
                        <h2>Terpopuler</h2>
                    </div>
                    <div class="row terpopulerChild paddingLR5percent">
                        <?php
                            foreach($terpopuler as $p){
                        ?>
                        <div class="col-md thumbVertical">
                            <div class="row wrapCenter">
                                <img src="<?php echo base_url() ?>uploads/<?php echo $p['GAMBAR'] ?>" class="tilesVerticalThumbNail innerCenter-0" />
                            </div>
                           
                            <div class="row tilesVerticalIcons">
                                <div class="col thumbnailAction">
                                    <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction">
                                    <span class="fa fa-heart-o" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction">
                                    <span class="fa fa-exchange" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction detail" codeBuku="<?php echo $p['ID_BUKU'] ?>">
                                    <span class="fa fa-eye" aria-hidden="true"></span>
                                </div>
                            </div>
                            
                            <div class="row desc wrapCenter">
                                <div class="innerCenter-0">
                                    <h5><?php echo $p['JUDUL'] ?></h5>
                                </div>
                            </div>
                            <div class="row  wrapCenter">
                                <div class="rating innerCenter-0">
                                    <?php
                                    for($i = 1; $i<=5; $i++){
                                        echo (($i<=$p['RATING']) ? ('<i class="fa fa-star"></i>') : ('<i class="fa fa-star-o"></i>'));
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="row wrapCenter">
                                <div class="price innerCenter-0">
                                    Rp <?php echo $p['HARGA']." (".($p['BEKAS']?'Bekas':'Baru').")"; ?> 
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        
                        
                        
                    </div>
                    <div class="titleSection">
                        <h2>Buku Bekas terpopuler</h2>
                    </div>
                    <div class="row terpopulerChild paddingLR5percent">
                        <?php
                            foreach($bekasterpopuler as $p){
                        ?>
                        <div class="col-md thumbVertical">
                            <div class="row wrapCenter">
                                <img src="<?php echo base_url() ?>uploads/<?php echo $p['GAMBAR'] ?>" class="tilesVerticalThumbNail innerCenter-0" />
                            </div>
                           
                            <div class="row tilesVerticalIcons">
                                <div class="col thumbnailAction">
                                    <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction">
                                    <span class="fa fa-heart-o" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction">
                                    <span class="fa fa-exchange" aria-hidden="true"></span>
                                </div>
                                <div class="col thumbnailAction detail" codeBuku="<?php echo $p['ID_BUKU'] ?>">
                                    <span class="fa fa-eye" aria-hidden="true"></span>
                                </div>
                            </div>
                            
                            <div class="row desc wrapCenter">
                                <div class="innerCenter-0">
                                    <h5><?php echo $p['JUDUL'] ?></h5>
                                </div>
                            </div>
                            <div class="row  wrapCenter">
                                <div class="rating innerCenter-0">
                                    <?php
                                    for($i = 1; $i<=5; $i++){
                                        echo (($i<=$p['RATING']) ? ('<i class="fa fa-star"></i>') : ('<i class="fa fa-star-o"></i>'));
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="row wrapCenter">
                                <div class="price innerCenter-0">
                                    Rp <?php echo $p['HARGA']." (".($p['BEKAS']?'Bekas':'Baru').")"; ?> 
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $(".detail").click(function(){
                var id = $(this).attr('codeBuku');
                window.open("buy?id="+id, "_self");
            });
        });
    </script>
</body>

</html>