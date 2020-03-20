<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/page.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>css/icons.css" />

    <link rel="stylesheet" href="<?php echo base_url() ?>css/controls.css" />
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- plugin -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--datatable-->
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
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
                    <h3>Etalase Buku Anda</h3>
                    <table id="tbl-etalase" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Harga</th>
                                <th>Ketegori</th>
                                <th>Rating</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php'; ?>

    </div>

    <script type="text/javascript">
        var table = $("#tbl-etalase").DataTable();
        $(document).ready(function(){
            
            getEtalase(table);


        });
    </script>
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Buku</h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul Buku</label>
                        <input type="text" name="judul" id="judul" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" name="pengarang" id="penulis" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="kategori" class="form-control" id="kategori">
                            <option value="Seks">Seks</option>
                            <option value="Komputer">Komputer</option>
                            <option value="Novel">Novel</option>
                            <option value="Komik">Komik</option>
                            <option value="Heks">Horor</option>
                            <option value="Cinta">Cinta</option>
                            <option value="Filsafat">Filsafat</option>
                            <option value="Hukum">Hukum</option>
                            <option value="Sosial">Sosial</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Matematika">Matematika</option>
                            <option value="Kimia">Kimia</option>
                            <option value="Bahasa">Bahasa</option>
                            <option value="Lain - Lain">Lain - Lain</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Buku</label>
                        <select name="bekas" class="form-control" id="bekas">
                            <option value="0">Bekas</option>
                            <option value="1">Baru</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control" id="harga" required>
                    </div>
                     <div class="form-group">
                        <label>Stok</label>
                        <input type="number" name="stok" class="form-control" id="stok" required>
                    </div>
                     <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Ganti Gambar</label>
                        <input type="file" name="img" id="imgInp">
                    </div>
                    <div class="form-group">
                        <img id="foto" scr='#' alt='' width="150" height="150" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" data-dismiss="modal" id="simpan" >Simpan</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>