<section class="main-about">
            <div class="row">
                <div class="block-video about-max-height">
                    <img src="<?php echo p_acf_o("op_hp_vct_img") ?>" alt="img" class="img-responsive" />
                    <span class="icon-play" data-yt="<?php echo p_id_youtube(p_acf_o("op_hp_vct_video")) ?>"></span>
                </div>
                <div class="block-text about-max-height">
                    <h2><!-- Về chúng tôi -->
                        <?php if( !empty(  p_acf_o("op_hp_vct_link") ) ) { ?>
                            <a href="<?php echo p_acf_o("op_hp_vct_link") ?>" class="" style="color:#dadada">
                        <?php } ?>
                            <?php echo p_acf_o("op_hp_vct_title") ?>
                        <?php if( !empty(  p_acf_o("op_hp_vct_link") ) ) { ?>
                             </a>
                        <?php } ?>
                    </h2>
                    <h3><!-- Giới thiệu công ty --><?php echo p_acf_o("op_hp_vct_title2") ?></h3>
                    <div class="description">
                       <!--  <strong>Chúng tôi địa ốc Nam Phong Sài Gòn luôn muốn kiến tạo ra những dự án BĐS uy tín và mang lại giá trị tinh hoa cho khách hàng</strong>
                        Nói về bất động sản, có lẽ chúng ta không ai không biết tới công ty cổ phần địa ốc Nam Phong Sài Gòn – một công ty chuyên sâu trong lĩnh vực đầu tư và phát triển bất động sản dành cho lĩnh vựa dân dụng tại Việt Nam. Tầm nhìn của công ty cổ phần địa ốc Nam Phong Sài Gòn – của những người trẻ đầy đam mê, nhiệt huyết và khát vọng là trở thành một công ty bất động sản đẳng cấp tại thị trường Việt Nam với từng bước phát triển vững mạnh và mang lại một cuộc sống an vui, hạnh phúc, thịnh vượng cho người Việt như sứ mệnh cao cả mà Nam Phong đã đặt ra -->
                        <?php echo p_acf_o("op_hp_vct_con") ?>
                    </div>
                    <a href="<?php echo p_acf_o("op_hp_vct_link") ?>" style="color: #fff;opacity: 0.9;" class="p-fs-14 f2-df">Xem chi tiết <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>