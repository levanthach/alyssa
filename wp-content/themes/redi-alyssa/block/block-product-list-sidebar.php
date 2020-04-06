   <ul class="list-unstyled lst-products">
	   <?php for ($i=1; $i <=5 ; $i++) { ?>
        <li>
            <div class="prod-item">
                <span class="sale-off">20%</span>
                <div class="prod-image">
                    <img src="<?php echo P_IMG_ALY ?>/products/4.jpg" class="img-responsive" />
                </div>
                <div class="prod-desc">
                    <h4><a href="<?php echo home_url() ?>/san-pham/hoa-cao-cap">Hoa địa lan</a></h4>
                    <div class="prod-price">
                        <span class="sale-price">190.000 đ</span>
                        <span class="regular-price">210.000 đ</span>
                    </div>
                </div>
            </div>
        </li>
        <?php } ?>   
       
    </ul>