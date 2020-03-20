<div class="terkaitSection">
    <script type="text/javascript">
        $(document).ready(function(){
             $(".detail").click(function(){
                var id = jQuery(this).attr('codeBarang');
                window.open("buy?id="+id, '_self');
            });
        });
       
    </script>
                <?php 
                    if($related != null){
                            
                    
                ?>
                <div class="row" style="margin:20px">
                    <h1>Produk terkait</h1>
                </div>
                <div class="row terpopulerChild wrapCenter">
                    <?php
                    foreach($related as $r){
                    ?>

                    <div class="col-md thumbVertical innerCenter-0">
                        <div class="row wrapCenter">
                            <img src="<?php echo base_url() ?>uploads/<?php echo $r['GAMBAR']; ?>" class="tilesVerticalThumbNail innerCenter-0" />
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
                            <div class="col thumbnailAction detail" codeBarang="<?php echo $r['ID_BUKU']; ?>">
                                <span class="fa fa-eye" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="row desc wrapCenter">
                            <div class="innerCenter-0">
                                <h5><?php echo $r['JUDUL']; ?></h5>
                            </div>
                        </div>
                        <div class="row  wrapCenter">
                            <div class="rating innerCenter-0">
                                <?php
                                for($i = 1; $i<=5; $i++){
                                    echo (($i<=$r['RATING']) ? ('<i class="fa fa-star"></i>') : ('<i class="fa fa-star-o"></i>'));
                                }
                            ?>
                            </div>
                        </div>
                        <div class="row wrapCenter">
                            <div class="price innerCenter-0">
                                Rp <?php echo $r['HARGA']." (".($r['BEKAS']?'Bekas':'Baru').")"; ?> 
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    }
                
                    ?>
                </div>
                <?php
                    } else {
                        ?>
                    <div class="row" style="margin:20px">
                        <h1>Tidak ada Produk terkait</h1>
                    </div>
                        <?php
                    }
                
                ?>
            </div>