<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css/page.css" />
    <link rel="stylesheet" href="css/icons.css" />

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <div class="container-fluid header" style="padding:0">
        <div class="menubar parentMenu">
            <div class="container-fluid max1080p">
                <div class="row">
                    <div class="col-lg-3 CenterContainer menuDecoration wrapCenter logo" id="logo">
                        
                        <div class="innerCenter">
                            <img src="img/logo.png" style="width:100%" />
                        </div>
                    </div>
                    <div class="col-lg-7  menuDecoration wrapCenter">
                        <div class="input-group innerCenter">
                            <input type="text" class="form-control" aria-label="">
                            <div class="input-group-append">
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pilih Kategori
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">zzz</a>
                                        <a class="dropdown-item" href="#">zzzzzzzz</a>
                                        <a class="dropdown-item" href="#">Szzzzzzzss</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-warning">Cari</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2  menuDecoration wrapCenter">
                        <div class="input-group innerCenter">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon2">Rp 0</div>
                            </div>
                            <button type="button" id="Keranjang" data-toggle="modal" data-target="#myModal" class="btn btn-warning">Keranjang</button>
                        </div>
                    </div>
                </div>
                <div class="row paddingLR50px">
                    <div class="col-lg-2 toolbar-left">
                        <div class="dropdown dropdown btn-flex " style="width:100%">
                            <button class="btn btn-secondary btn-warning btn-lg" style="border-radius:0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kategori
                            </button>
                            <div class="dropdown-menu btn-flex" style="width:100%" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Buku</a>
                                <a class="dropdown-item" href="#">Buku2</a>
                                <a class="dropdown-item" href="#">Buku3</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 toolbar-right">
                        <div class="btn-group btn-group-lg" style="border-radius:0" role="group" aria-label="toolbar">
                            <button type="button" class="btn btn-dark">Beranda</button>
                            <button type="button" class="btn btn-dark">Buku</button>
                            <button type="button" class="btn btn-dark">Forum</button>
                            <button type="button" class="btn btn-dark">Info</button>
                            <button type="button" class="btn btn-dark">Blog</button>
                        </div>
                    </div>
                    <div class="col-lg-2 toolbar-right wrapCenter2">
                        <div class="innerCenter" style="padding:0px">
                            <button type="button" class="btn btn-warning">Sign Up / Login</button>
                        </div>
                    </div>
                </div>
                <!--<div class="navbar vbottom childMenu">

            </div>-->
            </div>
        </div>
        <div class="container-fluid content">
            <div class="row paddingLR50px">
                <!--SIDEBARS-->
                <div class="col-md-2  rightSideBar">
                    <div class="row sidebar">
                        <div class="list-group" style="width:100%">
                            <div class="list-group-item list-group-item-secondary titleBar">
                                <h5>Buku Terbaru.</h5>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col wrapCenter">
                                        <img src="img/placeholder.png" class="tilesHorizontalThumbNail-Small innerCenter-0" />
                                    </div>
                                    <div class="col SideBarThumbNail">
                                        <b>Nama buku gj </b>
                                        <b>****</b>
                                        Rp 1
                                        <button type="button" class="btn btn-warning">Beli</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col wrapCenter">
                                        <img src="img/placeholder.png" class="tilesHorizontalThumbNail-Small innerCenter-0" />
                                    </div>
                                    <div class="col SideBarThumbNail">
                                        <b>Nama buku gj </b>
                                        <b>****</b>
                                        Rp 1
                                        <button type="button" class="btn btn-warning">Beli</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col wrapCenter">
                                        <img src="img/placeholder.png" class="tilesHorizontalThumbNail-Small innerCenter-0" />
                                    </div>
                                    <div class="col SideBarThumbNail">
                                        <b>Nama buku gj </b>
                                        <b>****</b>
                                        Rp 1
                                        <button type="button" class="btn btn-warning">Beli</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row sidebar">
                        <div class="list-group" style="width:100%">
                            <div class="list-group-item list-group-item-warning titleBar">
                                <h5>Testimonial</h5>
                            </div>
                            <div class="list-group-item textTestimonial">
                                <div class="row wrapCenter">
                                    <div class="innerCenter-0">
                                        <p>
                                            xxxyyzzzasdasdasdsaaaa
                                            aaaaaaaaaaaaadasda
                                            dddddddddddddddsdfsdfsd
                                        </p>
                                    </div>
                                </div>
                                <div class="row wrapCenter">
                                    <div class="innerCenter innerCenter-1rem">
                                        <img src="img/face.jpg" class="rounded-circle tilesHorizontalThumbNail-Small thumbnailTestimonial" />
                                    </div>
                                    <div class="innerCenter innerCenter-1rem">
                                        <h5>Aedhelio Homo</h5>
                                        <h6><i>aku suka cowo loh</i></h6>
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--CONTENT-->
                <div class="col-md-10 highlight container mx-auto">
                    <div class="titleSection" style="margin-top:5px">
                        <h2>Buku MURAH MURAHHHHHHHH, 14 Jan</h2>
                    </div>
                    <div class="blog">
                        <div class="container-fluid">
                            <img src="img/banner/banner6.jpg" style="width:100%" />
                        </div>
                        <p>TaleWorlds Entertainmen
                        t is an independent video game 
                        development company, founded in 2005. Having
                        grown from the initial two founders, TaleWorld
                        s now employs over seventy developers including a s
                        elf-publishing team. Mount&Blade has received numerous 
                        accolades since its release, including multiple placements 
                        in PC Gamer Magazine’s “Top 100 PC Games of All Time”
                        list. The team is currently developing the m
                        uch anticipated sequel, Mount&Blade II: Bannerlord.TaleWorlds Entertainm
                        ent is an independent video game development company, founded in 2005. Havi
                        ng grown from the initial two founders, TaleWorlds now employs over seventy dev
                        elopers including a self-publishing team. Mount&Blade has received n
                        umerous accolades since its release,TaleWorlds Entertainmen
                        t is an independent video game
                        development company, founded in 2005. Having
                        grown from the initial two founders, TaleWorld
                        s now employs over seventy developers including a s
                        elf-publishing team. Mount&Blade has received numerous
                        accolades since its release, including multiple placements
                        in PC Gamer Magazine’s “Top 100 PC Games of All Time”
                        list. The team is currently developing the m
                        uch anticipated sequel, Mount&Blade II: Bannerlord.TaleWorlds Entertainm
                        ent is an independent video game development company, founded in 2005. Havi
                        ng grown from the initial two founders, TaleWorlds now employs over seventy dev
                        elopers including a self-publishing team. Mount&Blade has received n
                        umerous accolades since its release, including multiple placemen
                        ts in PC Gamer Magazine’s “Top 100 PC Games of All Time” li
                        st. The team is currently developing the much anticipate
                        d sequel, Mount&Blade II: Bannerlord.TaleWorlds Entert
                        ainment is an independent video game development co
                        mpany, founded in 2005. Having grown from the initia
                        l two founders, TaleWorlds now employs over seventy develop
                        ers including a self-publishing team. Mount&Blade has received numerou
                        s accolades since its release, including multiple placements in PC Gamer Magazi
                        ne’s “Top 100 PC Games of All Time” list. The team is currently d
                        eveloping the much anticipated sequel, Mount&Blade II: Bannerlord. including multiple placemen
                        ts in PC Gamer Magazine’s “Top 100 PC Games of All Time” li
                        st. The team is currently developing the much anticipate
                        d sequel, Mount&Blade II: Bannerlord.TaleWorlds Entert
                        ainment is an independent video game development co
                        mpany, founded in 2005. Having grown from the initia
                        l two founders, TaleWorlds now employs over seventy develop
                        ers including a self-publishing team. Mount&Blade has received numerou
                        s accolades since its release, including multiple placements in PC Gamer Magazi
                        ne’s “Top 100 PC Games of All Time” list. The team is currently d
                        eveloping the much anticipated sequel, Mount&Blade II: Bannerlord.</p>
                    </div>
                </div>
            </div>

        <div class="container-fluid foot" style="color:white">
            <div class="row signup">
                <div class="col-lg-2 wrapCenter toolbar-right">
                    <div class="innerCenter innerCenter-1rem">
                        place holder berlangganan:
                    </div>
                </div>
                <div class="col-lg-7 wrapCenter toolbar-right">
                    <div class="input-group innerCenter innerCenter-1rem">
                        <input type="text" class="form-control" aria-label="">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-warning">Berlangganan</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wrapCenter toolbar-right">
                    <div class="innerCenter innerCenter-1rem" style="text-align:middle">
                        Follow di:
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-facebook"></a>

                    </div>
                </div>
            </div>
            <div class="row sitemap">
                <div class="col-md">
                    <div class="sitemap-child">
                        <img src="img/logo.png" />
                        <p>
                            <br />
                            blababalballbablasljsbaflbsaf3
                            <address>Address: Andakasa</address>
                            <address>Phone  : 0</address>
                            <address>Email: bukuku[at]bukuku[dot]com</address>
                        </p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="sitemap-child">
                        <h3>Company</h3>
                        <div style="margin-top:20px">
                            <ul>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="sitemap-child">
                        <h3>Policy Info</h3>
                        <div style="margin-top:20px">
                            <ul>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="sitemap-child">
                        <h3>Something</h3>
                        <div style="margin-top:20px">
                            <ul>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </body>
</html>