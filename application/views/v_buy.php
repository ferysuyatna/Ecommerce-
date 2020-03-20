<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/page.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>css/icons.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>css/controls.css" />

    <script scr="<?php echo base_url() ?>script/gallery_jQueryPlugin.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- plugin -->
    <script type="text/javascript" src="<?php echo base_url() ?>script/slider.js"></script>
    <style>
        .jssorl-009-spin img{animation-name:jssorl-009-spin;animation-duration:1.6s;animation-iteration-count:infinite;animation-timing-function:linear}@keyframes jssorl-009-spin{from{transform:rotate(0);}to{transform:rotate(360deg);}}.jssora106{display:block;position:absolute;cursor:pointer}.jssora106 .c{fill:#fff;opacity:.3}.jssora106 .a{fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10}.jssora106:hover .c{opacity:.5}.jssora106:hover .a{opacity:.8}.jssora106.jssora106dn .c{opacity:.2}.jssora106.jssora106dn .a{opacity:1}.jssora106.jssora106ds{opacity:.3;pointer-events:none}.jssort101 .p{position:absolute;top:0;left:0;box-sizing:border-box;background:#000}.jssort101 .p .cv{position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1}.jssort101 .a{fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden}.jssort101 .p:hover .cv,.jssort101 .p.pdn .cv{border:none;border-color:transparent}.jssort101 .p:hover{padding:2px}.jssort101 .p:hover .cv{background-color:rgba(0,0,0,6);opacity:.35}.jssort101 .p:hover.pdn{padding:0}.jssort101 .p:hover.pdn .cv{border:2px solid #fff;background:none;opacity:.35}.jssort101 .pav .cv{border-color:#fff;opacity:.35}.jssort101 .pav .a,.jssort101 .p:hover .a{visibility:visible}.jssort101 .t{position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6}.jssort101 .pav .t,.jssort101 .p:hover .t{opacity:1}
    </style>
    
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <div class="container-fluid header" style="padding:0">

         <?php
            include_once("buyWindow.php");
        ?>
        
        <?php include 'header.php'; ?>

        <div class="container-fluid content max1080p">
            <div class="row">
                <div class="col-md-6 picSection" style="margin-top: 10px">
                    <!--CONTENT-->
                    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:500px;height:600px;overflow:hidden;visibility:hidden;">
                        <!-- Loading Screen -->
                        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?php echo base_url() ?>img/spin.svg" />
                        </div>
                        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:500px;height:500px;overflow:hidden;">
                            <div data-p="170.00">
                                <img data-u="image" src="<?php echo base_url() ?>uploads/<?php echo $GAMBAR; ?>" />
                                <img data-u="thumb" src="<?php echo base_url() ?>uploads/<?php echo $GAMBAR; ?>" />
                            </div>
                        </div>
                        <!-- Thumbnail Navigator -->
                        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;" data-autocenter="1" data-scale-bottom="0.75">
                            <div data-u="slides">
                                <div data-u="prototype" class="p" style="width:100px;height:100px;">
                                    <div data-u="thumbnailtemplate" class="t"></div>                    
                                </div>
                            </div>
                        </div>
                        <!-- Arrow Navigator -->
                        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
                            </svg>
                        </div>
                        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
                            </svg>
                        </div>
                    </div>
                    <script type="text/javascript">jssor_1_slider_init();</script>
                    <!-- #endregion Jssor Slider End -->
                </div>
                <div class="col-md-6">
                    <div class="descSection">
                        <!--DESC SECTION-->
                        <h1 class="bukuTitle"><?php echo $JUDUL; ?></h1>
                        <h3 id="bukuRating">
                            <?php
                                for($i = 1; $i<=5; $i++){
                                    echo (($i<=$RATING) ? ('<i class="fa fa-star"></i>') : ('<i class="fa fa-star-o"></i>'));
                                }
                            ?>
                            
                        </h3>
                        <h5 id="bukuHarga">Rp <?php echo $HARGA; ?></h5>
                        <h5 id="bukuHarga">Tersedia <?php echo $JUMLAH; ?> unit</h5>
                        <br />
                        <p id="bukuDesc">
                            <?php echo $DESKRIPSI; ?>
                        </p>

                        <button type="button" class="btn btn-lg btn-warning">Beli</button>
                    </div>
                </div>
            </div>
            <div class="horizontalSpacing"></div>
            <!--COMMENT SECTION-->
            <div class="" style="margin:20px">
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">Desc</a>
                            <a class="nav-link active show" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Review</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Info</a>
                        </div>
                    </div>
                    <div class="col-9 commentSection">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <h1 class="bukuTitle"><?php echo $JUDUL; ?></h1>
                                <p><?php echo $DESKRIPSI; ?></p>
                            </div>
                            <div class="tab-pane fade active show" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <p>Culpa dolor voluptate do laboris laboris irure reprehen
                                derit id incididunt duis pariatur mollit aute magna pariatur 
                                consectetur. Eu veniam duis non ut dolor deserunt commodo et mini
                                m in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicin
                                g officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ul
                                lamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod 
                                do sint minim consectetur qui.</p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris u
                                llamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nos
                                trud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehend
                                erit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php include 'related.php'; ?>
        </div>
        
        <?php include 'footer.php'; ?>

    </div>
    
</body>
</html>