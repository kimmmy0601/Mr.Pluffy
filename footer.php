<footer class="pb0 pt32">
    <div class="container">
        <div class="row">

            <div class="col-md-2 hidden-xs hidden-sm">
                <a href="http://www.mrpluffy.com/" title="Go to Mr. Pluffy">
                    <img alt="logo" class="img-responsive mb32" src="/assets/Uploads/logo.png" />
                </a>
            </div>

            <div class="col-md-3 hidden-xs col-sm-6 col-xs-12">
                <div class="widget">
                    <h5 class="title uppercase">Quick Menu</h5>
                    <ul class="link-list recent-posts pull-left" style="margin-right:30px;">
                        <li><a href="http://www.mrpluffy.com/">Home</a></li>                        
                        <li><a href="about-us">About Us</a></li>                        
                        <li><a href="franchise">Franchise</a></li>                        
                        <li><a href="party-services">Party Services</a></li>                        
                        <li><a href="gallery">Gallery</a></li>
                    </ul>
                    <ul class="link-list recent-posts pull-left">
                        <li><a href="news">News</a></li>
                        <li><a href="promos">Promos</a></li>
                        <li><a href="contact-us">Contact Us</a></li>
                        <li><a href="http://mrpluffy.com:2095/webmaillogout.cgi" target="_blank">WebMail</a></li>
                        <li><a href="http://mrpluffy.com:2082/cpsess7474609988/frontend/x3/mail/pops.html" target="_blank">WebMail Admin</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="widget">
                    <h5 class="title">Contact Us</h5>
                    <p class="mb8"><i class="fa fa-map-marker"></i> Unit C #29 Chico St. Cor. Langka St. Brgy. Quirino 2B, Project 2, Quezon City 1102, Philippines</p>
                    <p class="mb8"><i class="fa fa-phone"></i> (+632) 791 9467 &nbsp;<i class="fa fa-mobile"></i> (+63) 917 681 5566</p>
                    <p><i class="fa fa-envelope"></i> <a href="mailto:customer.service@mrsweetmc.com">customer.service@mrsweetmc.com</a></p>
                </div>                
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 mb48">
                <div class="widget">
                    <h5 class="title">Follow Us</h5>
                    <p>
                        <a href="https://www.facebook.com/mr.pluffy/" target="_blank"><i class="icon-sm fa fa-facebook"></i></a> &nbsp;&nbsp;
                        <a href="https://twitter.com/mrpluffy" target="_blank"><i class="icon-sm fa fa-twitter"></i></a>
                        &nbsp;&nbsp;
                        <a href="https://www.instagram.com/mr.pluffy" target="_blank"><i class="icon-sm fa fa-instagram"></i></a>
                        &nbsp;&nbsp;
                        <a href="" target="_blank"><i class="icon-sm fa fa-linkedin"></i></a>
                        &nbsp;&nbsp;
                        <a href="" target="_blank"><i class="icon-sm fa fa-youtube"></i></a>
                    </p>
                </div>                
            </div>
        </div>
    </div>
    <a class="btn-scroll hidden-lg hidden-md btn btn-md btn-rounded btn-filled btn-alt fade-half back-to-top inner-link" href="/#top">Top</a>
    <div class="row" style="clear:left;">
        <div class="col-md-12 text-center bg-light">
            <p class="sub mt0 mb0">Copyright &copy; 2011 - Mr. Pluffy.</p>
            <p class="sub mb0">Responsive Web Design by <a href="http://www.sentromedia.com" target="_blank" title="Go to Sentro Media Website">Sentro Media</a></p>                                                
        </div>
    </div>
</footer>

<script type="text/javascript" src="/themes/mrpluffy/js/jquery.min.js?m=1446705524"></script><script type="text/javascript" src="/themes/mrpluffy/js/bootstrap.min.js?m=1446705524"></script><script type="text/javascript" src="/themes/mrpluffy/js/navbar.js?m=1470032757"></script><script type="text/javascript" src="/themes/mrpluffy/js/flexslider.min.js?m=1446705524"></script><script type="text/javascript" src="/themes/mrpluffy/js/lightbox.min.js?m=1446705524"></script><script type="text/javascript" src="/themes/mrpluffy/js/masonry.min.js?m=1446705524"></script><script type="text/javascript" src="/themes/mrpluffy/js/smooth-scroll.min.js?m=1446705524"></script><script type="text/javascript" src="/themes/mrpluffy/js/parallax.js?m=1446705524"></script><script type="text/javascript" src="/themes/mrpluffy/js/scripts.js?m=1469589234"></script><script type="text/javascript">//<![CDATA[
            (function($) {
                $(document).ready(function(){
                    $('a.btn-scroll').click(function(event) {
                        event.preventDefault();
                        var link = this;
                        $.smoothScroll({
                            scrollTarget: link.hash
                        });
                    });

                    $('a.btn-franchise').hover(function(){
                        $(this).find('img').attr('src', 'themes/mrpluffy/img/portable-food-store-dark.png');
                    }, function(){
                        $(this).find('img').attr('src', 'themes/mrpluffy/img/portable-food-store.png');
                    });


                })
            })(jQuery);         

//]]></script><script type="text/javascript">//<![CDATA[
            function InvalidEmailMsg(textbox) {
                
                if (textbox.value == '') {
                    textbox.setCustomValidity('email address is required');
                }
                else if(textbox.validity.typeMismatch){
                    textbox.setCustomValidity('please enter a valid email address');
                }
                else {
                    textbox.setCustomValidity('');
                }
                return true;
            }           

//]]></script><script type="text/javascript">//<![CDATA[
            (function($) {
                $(document).ready(function(){
                    $('section.fullscreen').removeAttr('style');
                });
            })(jQuery);

//]]></script><script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
 ga('create', 'UA-83698317-1', 'auto');
 ga('send', 'pageview');
 
</script>
<script type="text/javascript"> window._pt_lt = new Date().getTime(); window._pt_sp_2 = []; _pt_sp_2.push('setAccount,4aef79af'); var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://"); (function() { var atag = document.createElement('script'); atag.type = 'text/javascript'; atag.async = true; atag.src = _protocol + 'cjs.ptengine.com/pta_en.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(atag, s); })(); </script>

</body>
</html>