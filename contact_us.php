<?php
/**
/* Template Name: contact_us
 *
 * Display Only contact_us Template
 *
 * @package WordPress
 * @subpackage newdesign
 * @since newdesign 1.0
 */
 get_header(); ?>

    <div class="main-container">
        <a id="top"></a>
        <section class="image-bg bg-light overlay pb8 pt8">
    <div class="background-image-holder">
        <img alt="Background Image" class="img-responsive background-image" src="themes/mrpluffy/img/home-header-bg.jpg" />
    </div>
    <div class="container">
        <div class="row">
            <div class="text-center col-md-6 col-md-offset-3">
                <a href="http://www.mrpluffy.com/">
                    <img src="/assets/Uploads/_resampled/ScaleWidthWyIxNjYiXQ/logo.png" alt="logo">
                </a>
            </div>
        </div>
    </div>
</section>

<section class="image-bg overlay">
    <div class="background-image-holder">
        <img alt="Background Image" class="background-image img-responsive" src="themes/mrpluffy/img/contact-form-bg.jpg" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-5">
                <h3>Contact Us</h3>
                
                <hr>

                
                    <p class="lead"><i class="icon-xs fa fa-map-marker"></i> Unit C #29 Chico St. Cor. Langka St. Brgy. Quirino 2B, Project 2, Quezon City 1102, Philippines</p>
                

                <hr>
                <p class="lead mb0">
                    
                        <i class=" fa fa-envelope"></i> 
                        <a href="mailto:customer.service@mrsweetmc.com">customer.service@mrsweetmc.com</a>
                    
                </p>
                <p class="lead mb0">
                    
                        <i class="icon-xs fa fa-phone"></i> 
                        (+632) 791 9467
                    
                </p>
                <p class="lead">
                    
                        <i class="icon-xs fa fa-mobile"></i> (+63) 917 681 5566
                    
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-md-offset-1">
                
    <form id="UserForm_Form" action="/contact-us/Form" method="post" enctype="application/x-www-form-urlencoded" class=" userform" data-livevalidation="data-livevalidation">





	<fieldset id="EditableFormStep_67758" class="form-step field CompositeField userformsstep" data-title="First Page">
	

	
		<input type="text" name="Name" class="text requiredField" id="UserForm_Form_Name" required="required" aria-required="true" data-rule-required="true" data-msg-required="&amp;#039;Your Name&amp;#039; is required." placeholder="* Your Name">

	
		<input type="text" name="ContactNumber" class="text requiredField" id="UserForm_Form_ContactNumber" required="required" aria-required="true" data-rule-required="true" data-msg-required="&amp;#039;Your Contact Number&amp;#039; is required." placeholder="* Your Contact Number">

	
		<input type="text" name="Email" class="text requiredField" id="UserForm_Form_Email" required="required" aria-required="true" data-rule-required="true" data-msg-required="&amp;#039;Your Email&amp;#039; is required." placeholder="Your Email (john@domain.com)">

	
		<textarea name="Message" class="textarea requiredField" id="UserForm_Form_Message" required="required" aria-required="true" data-rule-required="true" data-msg-required="&amp;#039;Your Message&amp;#039; is required." placeholder="Your Message" rows="10" cols="20"></textarea>

	

</fieldset>

	<input type="hidden" name="SecurityID" value="7bb67399d93e799ef7eae1b4f6a5c7598970125e" class="hidden" id="UserForm_Form_SecurityID">



	
		<input type="submit" name="action_process" value="SUBMIT" class="action" id="UserForm_Form_action_process">
	



    </form>

            </div>
        </div>
    </div>
</section>

<section class="p0">
    <div id="map" style="height:400px;"></div>
</section>


    <section class="bg-primary pt64 pb24">
        <div class="container">
            
                
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 text-center">
                            <div class="feature text-center">
                                <h3>ADD SOME COLOR TO YOUR LIFE TODAY.</h3>
                                
                                    
                                        <a href="/party-services/online-reservation/" class="btn-franchise btn btn-lg btn-rounded btn-filled btn-alt">
                                            PARTY WITH US
                                        </a>
                                    
                                        <a href="/franchise/" class="btn-franchise btn btn-lg btn-rounded btn-filled ">
                                            FRANCHISE WITH US
                                        </a>
                                    
                                
                                <!--<a href="online-reservation" class="btn btn-lg btn-rounded btn-filled btn-alt">
                                <i class="icon-xs fa fa-calendar"></i>
                                </a><br>-->

                                <!--<a href="franchise" class="btn-franchise btn btn-lg btn-rounded btn-filled">
                                    <img src="themes/mrpluffy/img/portable-food-store.png">
                                    Franchise Now
                                </a>-->
                            </div>                
                        </div>
                    </div>
                
            
        </div>
    </section>

    </div>

   <?php get_footer(); ?>