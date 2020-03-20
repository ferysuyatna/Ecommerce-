<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/page.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>css/icons.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>css/controls.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style type="text/css">
        .line1 {
            width: 1px;
            height: 150px;
            display: block;
            border-left: 1px solid #ddd;
            margin: auto;
        }
        .line2 {
            width: 1px;
            height: 230px;
            display: block;
            border-left: 1px solid #ddd;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="login">

    </div>
    <div class="container-fluid header" style="padding:0">
        <div class="menubar parentMenu">
            <div class="container-fluid max1080p">
                <div class="row">
                    <div class="col-lg-3 CenterContainer menuDecoration wrapCenter logo" id="logo">
                        <!--<div class="CenterContainer-Child" style="height:80px;width:270px;background:blue">placeholder</div>-->
                        <div class="innerCenter">
                            <img src="<?php echo base_url() ?>img/logo.png" style="width:100%" />
                        </div>
                    </div>
                    
                </div>
               
                <!--<div class="navbar vbottom childMenu">

            </div>-->
            </div>
        </div>

        <div class="container content">
            <div class="row" style="margin: 50px; ">
                <!--ISI CONTENT-->
                <div class="col-sm-5 col-md-5 col-lg-5">
                    <h3>Register</h3>
                    <?php
                    $atribut = array(
                        'class' => 'form-group',
                        'style' => 'margin: 0 auto;'
                    );
                        echo form_open("Login/register", $atribut);
                    ?>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Register</button>
                        <?php echo $this->session->flashdata('register') ?>
                    </div>
                </form>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2">
                        <div class="line1">
                        </div>
                        <p class="text-center mt-20 mb-20 small-gray">atau</p>
                        <div class="line2"></div>
                    </div>
                <div class="col-sm-5 col-md-5 col-lg-5">
                    <h3>Login</h3>
                
               <?php
                    $atribut = array(
                        'class' => 'form-group',
                        'style' => 'margin: 0 auto;'
                    );
                        echo form_open("Login/cek_login", $atribut);
                    ?>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Login</button>
                        <?php echo $this->session->flashdata('login') ?>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        
    </div>
    <script src="<?php echo base_url() ?>script/handler.js"></script>
    <script src="<?php echo base_url() ?>script/main.js"></script>
</body>

</html>