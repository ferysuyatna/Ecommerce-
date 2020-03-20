<script type="text/javascript">
    function cari(){
        var title = $("#cari-title").val();
        window.open("search?title="+title, '_self');
    }
    
    var isLoggedIn = <?php echo ($this->session->has_userdata('username') ? 'true;' : 'false;'); ?>
    <?php
    if($this->session->has_userdata('username')){
        ?>
        var username = <?php echo "'".$this->session->userdata('username')."'"; ?>;
        <?php
    } else {
        echo "var username = null;";
    }   
    ?>
    
    $(document).ready(function(){
        var dataURL = getURLData();
        if(dataURL[0] == 'title'){
           $("#cari-title").val(dataURL[1]); 
        }
        $('#cari-title').on('keydown', function(e) {
             if (e.which == 13) {
                cari();
            }
        });
        //InitializeInventory();
    });
</script>
<style type="text/css">
    .fa-star {
        color: gold;
    }
    .fa-star-o {
        color: gold;
    }
</style>
<div id="snackbar" class="max1080p"><h3></h3></div>
        <div class="menubar parentMenu">
            <div class="container-fluid max1080p">
                <div class="row">
                    <div class="col-lg-3 CenterContainer menuDecoration wrapCenter logo" id="logo">
                        <!--<div class="CenterContainer-Child" style="height:80px;width:270px;background:blue">placeholder</div>-->
                        <div class="innerCenter">
                            <img src="<?php echo base_url() ?>img/logo.png" style="width:100%" />
                        </div>
                    </div>
                    <div class="col-lg-7  menuDecoration wrapCenter">
                        <div class="input-group innerCenter">
                            <input type="text" class="form-control" name="title" id="cari-title" aria-label="">
                            <div class="input-group-append">
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pilih Kategori
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="search?kategori=Seks">Seks</a>
                                        <a class="dropdown-item" href="search?kategori=Komputer">Komputer</a>
                                        <a class="dropdown-item" href="search?kategori=Novel">Novel</a>
                                        <a class="dropdown-item" href="search?kategori=Komik">Komik</a>
                                        <a class="dropdown-item" href="search?kategori=Horor">Horor</a>
                                        <a class="dropdown-item" href="search?kategori=Cinta">Cinta</a>
                                        <a class="dropdown-item" href="search?kategori=Filsafat">Filsafat</a>
                                        <a class="dropdown-item" href="search?kategori=Hukum">Hukum</a>
                                        <a class="dropdown-item" href="search?kategori=Sosial">Sosial</a>
                                        <a class="dropdown-item" href="search?kategori=Ekonomi">Ekonomi</a>
                                        <a class="dropdown-item" href="search?kategori=Matematika">Matematika</a>
                                        <a class="dropdown-item" href="search?kategori=Kimia">Kimia</a>
                                        <a class="dropdown-item" href="search?kategori=Bahasa">Bahasa</a>
                                        <a class="dropdown-item" href="search?kategori=Lain-lain">Lain-lain</a>
                                    </div>
                                </div>
                                
                                <button type="button" class="btn btn-warning" onclick="cari()">Cari</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2  menuDecoration wrapCenter">
                        <div class="input-group innerCenter">
                            <?php
                                if($this->session->has_userdata('username')){
                            ?>
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="total-harga">Rp 0</div>
                            </div>
                            <button type="button"  id="Keranjang" data-toggle="modal" data-target="#myModal" class="btn btn-warning">Keranjang</button>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row paddingLR50px">
                    <div class="col-lg-2 toolbar-left">
                        <div class="dropdown dropdown btn-flex " style="width:100%">
                            <button class="btn btn-secondary btn-warning btn-lg" style="border-radius:0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kategori
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="search?kategori=Seks">Seks</a>
                                        <a class="dropdown-item" href="search?kategori=Komputer">Komputer</a>
                                        <a class="dropdown-item" href="search?kategori=Novel">Novel</a>
                                        <a class="dropdown-item" href="search?kategori=Komik">Komik</a>
                                        <a class="dropdown-item" href="search?kategori=Horor">Horor</a>
                                        <a class="dropdown-item" href="search?kategori=Cinta">Cinta</a>
                                        <a class="dropdown-item" href="search?kategori=Filsafat">Filsafat</a>
                                        <a class="dropdown-item" href="search?kategori=Hukum">Hukum</a>
                                        <a class="dropdown-item" href="search?kategori=Sosial">Sosial</a>
                                        <a class="dropdown-item" href="search?kategori=Ekonomi">Ekonomi</a>
                                        <a class="dropdown-item" href="search?kategori=Matematika">Matematika</a>
                                        <a class="dropdown-item" href="search?kategori=Kimia">Kimia</a>
                                        <a class="dropdown-item" href="search?kategori=Bahasa">Bahasa</a>
                                        <a class="dropdown-item" href="search?kategori=Lain-lain">Lain-lain</a>
                                    </div>
                        </div>
                    </div>
                    <div class="col-lg-8 toolbar-right">
                        <div class="btn-group btn-group-lg" style="border-radius:0" role="group" aria-label="toolbar">
                            <button type="button" class="btn btn-dark" onclick="window.open('Home', '_self')">Beranda</button>
                            <button type="button" class="btn btn-dark">Buku</button>
                            <button type="button" class="btn btn-dark">Forum</button>
                            <button type="button" class="btn btn-dark">Info</button>
                            <button type="button" class="btn btn-dark">Blog</button>
                        </div>
                    </div>
                    <div class="col-lg-2 toolbar-right wrapCenter2">
                        <div class="innerCenter" style="padding:0px">
                            <?php 
                                if($this->session->has_userdata('username')){
                            ?>
                                <div class="dropdown">
                                    <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown" >Account</button>
                                    <div class="dropdown-menu dropdown-menu-right" style="width: 200px">
                                        <h5 class="dropdown-header">Account Veryfied <i class="fa fa-check-circle"></i></h5>
                                        <h5 class="dropdown-header"><?php echo $this->session->userdata('nama'); ?></h5>
                                        <a class="dropdown-item" href="Profile">Edit Account</a>
                                        <a class="dropdown-item" href="Jual">Jual Buku</a>
                                        <a class="dropdown-item" href="Etalase">Lihat Etalase</a>
                                        <a class="dropdown-item" href="Logout">Logout</a>
                                    </div>
                                </div>
                            <?php
                                } else {
                            ?>
                                <a href="Login"><button type="button" class="btn btn-warning">Sign Up / Login</button></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!--<div class="navbar vbottom childMenu">

                </div>-->
            </div>
        </div>