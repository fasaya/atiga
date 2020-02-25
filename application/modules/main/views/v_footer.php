<section class="section-dark sec-padding">
    <div class="container ">
        <div class="row">
            <div class="fo-sec-2">
                <div class="social-iconbox">
                    <div class="side-shape1"><img src="images/fo-icon-box-shape1.png" alt="" /></div>
                    <div class="side-shape1 right-icon"><img src="images/fo-icon-box-shape2.png" alt="" /></div>
                    <ul class="sc-icons">
                        <li><a target="_blank" class="twitter" href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="active" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 colmargin clearfix margin-bottom">
                <div class="fo-map">
                    <div class="footer-logo"><img src="<?= base_url() ?>template/home/atiga/logo/LOGO-ATIGA-1.png" height="60" alt="" /></div>
                    <!-- <p>Consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo</p> -->

                    <address>
                        <strong>Address:</strong>
                        <br>
                        <?= $this->Other->get_back_info('alamat'); ?>
                    </address>

                    <span><strong>Phone:</strong> <?= $this->Other->get_back_info('no_tlp'); ?></span><br>
                    <span><strong>Watsapp:</strong> <?= $this->Other->get_back_info('no_wa'); ?></span><br>
                    <span><strong>Email:</strong> <?= $this->Other->get_back_info('email'); ?></span>
                </div>
            </div>
            <!--end item-->

            <div class="col-md-4 col-sm-12 col-xs-12 bmargin clearfix margin-bottom">
                <div class="item-holder">
                    <h4 class="text-white uppercase less-mar3">Recent Posts</h4>
                    <div class="fo-title-bottom-line white"></div>
                    <div class="clearfix"></div>
                    <div class="fo-posts">
                        <div class="image-left"><img src="https://placehold.it/80x80" alt="" /></div>
                        <div class="text-box-right">
                            <h6 class="less-mar3 uppercase nopadding text-white"><a href="#">Painting</a></h6>
                            <p>Lorem ipsum dolor sit</p>
                            <div class="post-info"> <span>By John Doe</span><span> May 19</span> </div>
                        </div>
                    </div>
                    <div class=" divider-line light solid light opacity-1 "></div>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <div class="fo-posts">
                        <div class="image-left"><img src="https://placehold.it/80x80" alt="" /></div>
                        <div class="text-box-right">
                            <h6 class="less-mar3 uppercase nopadding text-white"><a href="#">interior design</a></h6>
                            <p>Lorem ipsum dolor sit</p>
                            <div class="post-info"> <span>By John Doe</span><span> May 19</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end item-->

            <div class="col-md-4 col-sm-12 col-xs-12 colmargin clearfix margin-bottom">
                <h4 class="uppercase footer-title less-mar3">Tags</h4>
                <div class="footer-title-bottomstrip"></div>
                <ul class="footer-tags">
                    <li><a href="#">Animation</a></li>
                    <li><a href="#">Art</a></li>
                    <li><a href="#">Photography</a></li>
                    <li><a class="active" href="#">Design</a></li>
                    <li><a href="#">Responsive</a></li>
                    <li><a href="#">Develop</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Clean</a></li>
                </ul>
            </div>
            <!--end item-->

        </div>
    </div>
</section>
<div class="clearfix"></div>
<!--end section-->

<section class="sec-moreless-padding">
    <div class="container">
        <div class="row">
            <div class="fo-copyright-holder text-center"> Copyright © 2020 By <a href="https://ideadigitalindonesia.com">IdeaDigitalIndonesia</a> | All rights reserved. </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<a href="#" class="scrollup"></a><!-- end scroll to top of the page-->

</div>
<!--end site wrapper-->
</div>
<!--end wrapper boxed-->

<!-- Scripts -->
<script src="<?= base_url() ?>template/home/js/jquery/jquery.js"></script>
<script src="<?= base_url() ?>template/home/js/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url() ?>template/home/js/less/less.min.js" data-env="development"></script>
<!-- Scripts END -->

<!-- Template scripts -->
<script src="<?= base_url() ?>template/home/js/megamenu/js/main.js"></script>
<script src="<?= base_url() ?>template/home/js/owl-carousel/owl.carousel.js"></script>
<script src="<?= base_url() ?>template/home/js/owl-carousel/custom.js"></script>
<script src="<?= base_url() ?>template/home/js/jFlickrFeed/jflickrfeed.min.js"></script>
<script>
    $('#basicuse').jflickrfeed({
        limit: 6,
        qstrings: {
            id: '133294431@N08'
        },
        itemTemplate: '<li>' +
            '<a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +
            '</li>'
    });
</script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/cubeportfolio/main-mosaic.js"></script>
<script src="<?= base_url() ?>template/home/js/parallax/jquery.parallax-1.1.3.js"></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>


<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>

<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

<script type="text/javascript" src="<?= base_url() ?>template/home/js/smart-forms/jquery.form.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/smart-forms/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/smart-forms/additional-methods.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>template/home/js/smart-forms/smart-form.js"></script>

<script>
    var revapi;
    jQuery(document).ready(function() {
        revapi = jQuery("#rev_slider").revolution({
            sliderType: "standard",
            sliderLayout: "auto",
            fullScreenOffsetContainer: ".header",
            // fullScreenOffset: "50px",
            delay: 9000,
            navigation: {
                arrows: {
                    enable: true,
                    style: "erinyen"

                },
            },
            responsiveLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [840, 730, 600, 420],
        });
    }); /*ready*/
</script>

<script type="text/javascript" src="<?= base_url() ?>template/home/js/cubeportfolio/lightbox-gallery.js"></script>

<script>
    $(window).load(function() {
        setTimeout(function() {

            $('.loader-live').fadeOut();
        }, 1000);
    })
</script>
<script src="<?= base_url() ?>template/home/js/functions/functions.js"></script>

</body>

</html>