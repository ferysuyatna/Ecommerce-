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

        <?php include 'header.php' ?>

        <div class="container-fluid content max1080p">
            <div class="row">
                <div class="col-sm-10 col-md-10 col-lg-10" style="margin-top: 10px">
                    <!--CONTENT-->
                    <h3>Edit Profile</h3>
                    <?php
                        $atribut = array(
                        'class' => 'form-group',
                        'style' => 'margin: 0 auto;'
                    );
                        echo form_open("Profile/edit", $atribut);

                    ?>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo($NAMA); ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo($EMAIL); ?>" required>
                    </div>
                     <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo($ALAMAT); ?>" required>
                    </div>
                     <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo($USERNAME); ?>" readonly>
                    </div>
                     <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" type="Password" value="<?php echo($PASSWORD); ?>" >
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-warning">Update Profile</button>
                        <?php echo $this->session->flashdata('error') ?>
                    </div>
                    
                </form>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php'; ?>

    </div>
    
</body>
</html>