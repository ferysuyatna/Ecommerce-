<div class="col-md-2  rightSideBar">
                    <div class="row sidebar">
                        <div class="list-group" style="width:100%">
                            <div class="list-group-item list-group-item-secondary titleBar">
                                <h5>Buku Terbaru.</h5>
                            </div>
                            <div class="list-group-item">
                                <?php
                                    foreach($new as $n){
                                ?>
                                <div class="row">
                                    <div class="col wrapCenter">
                                        <img src="<?php echo base_url() ?>uploads/<?php echo $n['GAMBAR'] ?>" class="tilesHorizontalThumbNail-Small innerCenter-0" />
                                    </div>
                                    <div class="col SideBarThumbNail">
                                        <p><b><?php echo $n['JUDUL'] ?></b></p>
                                        <b>
                                            <?php
                                                for($i = 1; $i<=5; $i++){
                                                    echo (($i<=$n['RATING']) ? ('<i class="fa fa-star"></i>') : ('<i class="fa fa-star-o"></i>'));
                                                }
                                            ?>
                                        </b>
                                        <p>Rp <?php echo $n['HARGA'] ?></p>
                                        <a href="buy?id=<?php echo $n['ID_BUKU'] ?>"><button type="button" class="btn btn-warning">Beli</button></a>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                                
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
                                        <img src="<?php echo base_url() ?>img/face.jpg" class="rounded-circle tilesHorizontalThumbNail-Small thumbnailTestimonial" />
                                    </div>
                                    <div class="innerCenter innerCenter-1rem">
                                        <h5>Orang Gila</h5>
                                        <h6><i>Buku disini Mantep Abis</i></h6>
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>