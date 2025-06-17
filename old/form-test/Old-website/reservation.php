<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Nail Project</title>
    <!-- Disable tap highlight on IE-->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest-->
    <link rel="manifest" href="manifest.json">

    <!-- Add to homescreen for Chrome on Android-->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Nail Project">

    <!-- Add to homescreen for Safari on iOS-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Nail Project">

    <!-- tile color for Win8-->
    <meta name="msapplication-TileColor" content="#2F3BA2">

    <!-- Color the status bar on mobile devices-->
    <meta name="theme-color" content="#2F3BA2">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CLato:400,700" rel="stylesheet">

    <!-- libs styles-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-clockpicker.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="css/animsition.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/jquery.mb.YTPlayer.min.css">
    <!-- Icon pack-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <!-- Core style-->
    <link rel="stylesheet" href="style.css">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script>
      // Picture element HTML5 shiv
      document.createElement( "picture" );
    </script>
    <script src="js/vendor/picturefill.min.js" async></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <style>

  label, .label-control {
    letter-spacing: 0;
    font-size:13px;
    color:#333;
    font-weight: normal;
}

  .page-home .intro-banner__inner2 {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-flow: row wrap;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    background-color: rgba(0, 0, 0, 0.4);
    background-image: url(images/gallerybg.jpg);
    background-position: bottom;
    background-size: cover;
    background-attachment: fixed;
   position: none;
width: 100%;
z-index: 1111;
padding-top: 100px;
    height: 300px;
  }


 

select, option{
    font-size:13px;
}
ol.phpfmg_form{
    list-style-type:none;
    padding:0px;
    margin:0px;
}

ol.phpfmg_form input, ol.phpfmg_form textarea, ol.phpfmg_form select{
   border: 1px solid #ebebeb;
padding: 5px;

   
}

ol.phpfmg_form li{
    margin-bottom:5px;
    clear:both;
    display:block;
    overflow:hidden;
    width: 100%
}


.form_field, .form_required{
    font-weight : bold;
}

.form_required{
    color:red;
    margin-right:8px;
}

.field_block_over{
}

.form_submit_block{
    padding-top: 3px;
}

.text_box,.text_select {
    height: 32px;
}

.text_box, .text_area, .text_select {
 
    width: 80%;
    margin-bottom: 10px;
}

.text_area{
    height:80px;
}

.form_error_title{
    font-weight: bold;
    color: red;
}

.form_error{
    background-color: #F4F6E5;
    border: 1px dashed #ff0000;
    padding: 10px;
    margin-bottom: 10px;
}

.form_error_highlight{
    background-color: #F4F6E5;
    border-bottom: 1px dashed #ff0000;
}

div.instruction_error{
    color: red;
    font-weight:bold;
}

hr.sectionbreak{
    height:1px;
    color: #ccc;
}

#one_entry_msg{
    background-color: #F4F6E5;
    border: 1px dashed #ff0000;
    padding: 10px;
    margin-bottom: 10px;
}


#frmFormMailContainer input[type="submit"]{
    padding: 20px 25px;
font-weight: bold;
margin-bottom: 10px;
background-color: #b59e5c;
color: #fff;
text-transform: uppercase;
font-size: 16px;
border: 1px #b59e5c solid;
border-radius: 3px;
line-height: 0;
}

#frmFormMailContainer input[type="submit"]:hover{
    background-color: #837243;
}

 

 
    </style>


  <body id="rsHome" class="page-home animsition">
    <!--           * SVG Icon Pack           /-->    <svg style="display: none;">
      <symbol id="humburger" viewBox="0 0 24 24" preserveAspectRatio="none">
        <path d="M2 6h20v3H2zm0 5h20v3H2zm0 5h20v3H2z"/>
      </symbol>
      <symbol id="brand" viewBox="0 0 16 16" fill='#0f0'>
        <path d="M7.998 16L1.07 11.998v-8L8 0l6.93 3.998L11 6.268 8 4.533 4.996 6.267v3.466l3.002 1.733 3-1.733 3.93 2.265L8 16z"/>
      </symbol>
    </svg>

     <!--           = mobile menu           /-->
    <div id="panelMenu" class="panel-menu">
      <nav class="panel-menu-nav">
        <header class="panel-menu-header">
          <h1>Nail Project</h1>
        </header>
        <div class="panel-menu-content"><a href="#" data-menu="close" data-title="Menu" class="h4 panel-menu-heading"><span class="text">Menu</span><span class="icon-back pe-7s-angle-left-circle"></span></a>
          <ul class="panel-list">
            <li class="panel-list-current"><a href="index.html" role="button" class="panel-list-item"><span>Home</span></a></li>
            <li class="panel-list-level"><a href="#" role="button" data-title="Home" class="h4 panel-menu-heading menu-back"><span>back</span></a>
             
              </li>
              <li><a href="service.html"><span>Services</span></a>
              </li>
              <li><a href="gallery.html"><span>Gallery</span></a>
          
              </li>
          
             <li><a href="contact.html"><span>Contact</span></a>     </li>
              <li><a href="#"><span>Reward Program</span></a>
          
         
          
              </li>
               <li><a href="reservation.php" class="button button--reservation" style="color:#c6aa28;"><i class="fa fa-bookmark-o"></i>Reservation</a></li>
          </ul>
        </div>
        <div class="panel-menu-footer">
          <ul class="social-list">
            <li><a href="#" class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></a></li>
            <li><a href="#" class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></a></li>
            <li><a href="#" class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></a></li>
          </ul>
        </div>
      </nav>
    </div>
    <!--           end mobile menu           /-->
    
    <div id="overPage" class="over-page"></div>
    <!--           = Page Header           /-->
    <header id="panelHeader" class="page-header">
      <nav id="navbar" class="navbar navbar-default" style="box-shadow:none;border-bottom:1px #dedede solid;">
        <div class="navbar__topline">
           <div class="navbar-header container"><a id="trigger" href="#" role="button" class="menu-trigger visible-xs"><span class="menu-trigger__elem"></span></a><a href="index.html" class="navbar-brand"><img src="images/logo.png" alt="Welcome to Nail Project" class="logo svg img-responsive" style="width:115px;height:115px;margin-top:0;margin-bottom:0;" /></a>
            <ul class="social-list pull-right hidden-xs">
              <li><a href="#" class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="icon fa fa-instagram fa-stack-1x fa-inverse"></i></a></li>
              <li><a href="#" class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="icon fa fa-facebook fa-stack-1x fa-inverse"></i></a></li>
              <li><a href="#" class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="icon fa fa-twitter fa-stack-1x fa-inverse"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="navbar__menu">
          <div class="container">
            <ul class="nav navbar-nav navbar-menu hidden-xs">
           
              <li><a href="index.html"><span>Home</span></a>
              </li>
              <li ><a href="service.html"><span>Services</span></a>
              </li>
              <li ><a href="gallery.html"><span>Gallery</span></a>
          
              </li>
          
             <li><a href="contact.html"><span>Contact</span></a>     </li>
              <li><a href="#"><span>Reward Program</span></a>
          
         
          
              </li>
               <li   class="active"><a href="reservation.php" data-toggle="modal" data-target="#modal-inquiry" class="button button--reservation" style="color:#c6aa28;"><i class="fa fa-bookmark-o"></i>Reservation</a></li>
            </ul>
          </div>
        </div></nav>
    </header>
    <!--           end Page Header           /-->



    <!--           ¬ Content Aria           /-->
    <main id="pageContent" class="page-content">
     
      
        <!--           = intro-services           /-->
      <section  class="intro-banner intro-bg">
        <div class="intro-banner__inner2">
          <h1 class="title" style="color:#c6aa28;font-size:3em;">Reservation <br />
           <figure class="extra-title__decor"><img src="images/decor.svg" alt="Decoration" class="svg brand-decor"></figure></h1>

        </div>
      </section>
      <!--           end intro-services           /-->
    <section class="services-menu st-row st-row--gray" style="padding-top:80px;padding-bottom:80px;">

      <div class="container">
   <div class="row">

   <div class="col-md-8">
           <?php

// if the from is loaded from WordPress form loader plugin,
// the phpfmg_display_form() will be called by the loader
if( !defined('FormmailMakerFormLoader') ){
    # This block must be placed at the very top of page.
    # --------------------------------------------------
  require_once( dirname(__FILE__).'/form.lib.php' );
    phpfmg_display_form();
    # --------------------------------------------------
};


function phpfmg_form( $sErr = false ){
    $style=" class='form_text' ";

?>




<div id='frmFormMailContainer'>

<form name="frmFormMail" id="frmFormMail" target="submitToFrame" action='<?php echo PHPFMG_ADMIN_URL . '' ; ?>' method='post' enctype='multipart/form-data' onsubmit='return fmgHandler.onSubmit(this);'>

<input type='hidden' name='formmail_submit' value='Y'>
<input type='hidden' name='mod' value='ajax'>
<input type='hidden' name='func' value='submit'>

            
<ol class='phpfmg_form' >

<li class='field_block' id='field_0_div'><div class='col_label'>
  <label class='form_field'>First Name</label> <label class='form_required' >*</label> </div>
  <div class='col_field'>
  <input type="text" name="field_0"  id="field_0" value="<?php  phpfmg_hsc("field_0", ""); ?>" class='text_box'>
  <div id='field_0_tip' class='instruction'></div>
  </div>
</li>

<li class='field_block' id='field_1_div'><div class='col_label'>
  <label class='form_field'>Last Name</label> <label class='form_required' >*</label> </div>
  <div class='col_field'>
  <input type="text" name="field_1"  id="field_1" value="<?php  phpfmg_hsc("field_1", ""); ?>" class='text_box'>
  <div id='field_1_tip' class='instruction'></div>
  </div>
</li>

<li class='field_block' id='field_2_div'><div class='col_label'>
  <label class='form_field'>Email Address</label> <label class='form_required' >*</label> </div>
  <div class='col_field'>
  <input type="text" name="field_2"  id="field_2" value="<?php  phpfmg_hsc("field_2", ""); ?>" class='text_box'>
  <div id='field_2_tip' class='instruction'></div>
  </div>
</li>

<li class='field_block' id='field_3_div'><div class='col_label'>
  <label class='form_field'>Contact Number</label> <label class='form_required' >*</label> </div>
  <div class='col_field'>
  <input type="text" name="field_3"  id="field_3" value="<?php  phpfmg_hsc("field_3", ""); ?>" class='text_box'>
  <div id='field_3_tip' class='instruction'></div>
  </div>
</li>

<li class='field_block' id='field_4_div'><div class='col_label'>
  <label class='form_field'>Booking Date</label> <label class='form_required' >*</label> </div>
  <div class='col_field'>
  
<?php
    $field_4 = array(
        'month' => "-MM- =,|01|02|03|04|05|06|07|08|09|10|11|12",
        'day' => "-DD- =,|01|02|03|04|05|06|07|08|09|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|31",
        'startYear' => date("Y")+0,
        'endYear' => date("Y")+10,
        'yearPrompt' => '-YYYY-',
        'format' => "mm/dd/yyyy",
        'separator' => "/",
        'field_name' => "field_4",
    );
    phpfmg_date_dropdown( $field_4 );
?>

  <div id='field_4_tip' class='instruction'></div>
  </div>
</li>

<li class='field_block' id='field_5_div'><div class='col_label'>
  <label class='form_field'>Booking Time</label> <label class='form_required' >*</label> </div>
  <div class='col_field'>
  
<?php
    $field_5 = array(
        'hour' => "HH=,default|01|02|03|04|05|06|07|08|09|10|11|12",
        'hourOpt' => "h12",
        'minute' => "MM=,default|00|01|02|03|04|05|06|07|08|09|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|31|32|33|34|35|36|37|38|39|40|41|42|43|44|45|46|47|48|49|50|51|52|53|54|55|56|57|58|59",
        'amfm' => "=,default|AM|PM",
        'second' => "",
        'field_name' => "field_5",
    );
    phpfmg_time_dropdown( $field_5 );
?>

  <div id='field_5_tip' class='instruction'></div>
  </div>
</li>

<li class='field_block' id='field_6_div'><div class='col_label'>
  <label class='form_field'>No. of People</label> <label class='form_required' >*</label> </div>
  <div class='col_field'>
  <input type="text" name="field_6"  id="field_6" value="<?php  phpfmg_hsc("field_6", ""); ?>" class='text_box'>
  <div id='field_6_tip' class='instruction'></div>
  </div>
</li>

<li class='field_block' id='field_7_div'><div class='col_label'>
  <label class='form_field'>Comments</label> <label class='form_required' >&nbsp;</label> </div>
  <div class='col_field'>
  <textarea name="field_7" id="field_7" rows=4 cols=25 class='text_area'><?php  phpfmg_hsc("field_7"); ?></textarea>

  <div id='field_7_tip' class='instruction'></div>
  </div>
</li>


<li class='field_block' id='phpfmg_captcha_div'>
  <div class='col_label'></div><div class='col_field'>
  <?php phpfmg_show_captcha(); ?>
  </div>
</li>


            <li>
            <div class='col_label'>&nbsp;</div>
            <div class='form_submit_block col_field'>
  

                <input type='submit' value='Submit' class='form_button'>

        <div id='err_required' class="form_error" style='display:none;'>
            <label class='form_error_title'>Please check the required fields</label>
        </div>
        


                <span id='phpfmg_processing' style='display:none;'>
                    <img id='phpfmg_processing_gif' src='<?php echo PHPFMG_ADMIN_URL . '?mod=image&amp;func=processing' ;?>' border=0 alt='Processing...'> <label id='phpfmg_processing_dots'></label>
                </span>
            </div>
            </li>

</ol>
</form>

<iframe name="submitToFrame" id="submitToFrame" src="javascript:false" style="position:absolute;top:-10000px;left:-10000px;" /></iframe>

</div>
<!-- end of form container -->


<!-- [Your confirmation message goes here] -->
<div id='thank_you_msg' style='display:none;'>
Your reservation has been sent successful. If you can passed your appointment time, we will cancel it, so please aim to be on time to the best of your ability. If you would like to cancel your reservation, please call 917.909.0142 at 30mins before your appointment time. Thank you!
</div>


            






<?php

    phpfmg_javascript($sErr);

}
# end of form




function phpfmg_form_css(){
    $formOnly = isset($GLOBALS['formOnly']) && true === $GLOBALS['formOnly'];
?>
 



<?php
}
# end of css
 
# By: formmail-maker.com
?>


          </div>

          <div class="col-md-4">

<div class="contacts-list">
              <p class="contacts-list__top">Start here, and you’re on your way to the relaxing and invigorating escape you’re longing for! </p>
              <div class="contacts-list__main">
                <p class="contacts-list__item"><span class="h3" style="color:#ba9d0e;text-transform:uppercase;">Opening Hours</span>
      <p class="contacts-list__top">Mon-Sat: 10:00am-8:00pm<br />
    Sunday: 10:00am-7:00pm <br /> 
</p>
                <p class="contacts-list__item"><span class="h3" style="color:#ba9d0e;text-transform:uppercase;">Contact No.</span>      <p class="contacts-list__top">917.909.0142</p></p>
              
                <p class="contacts-list__item"><span class="h3" style="color:#ba9d0e;text-transform:uppercase;">Address</span>      <p class="contacts-list__top">138 7th Avenue<br>Brookyln, NY 11215</p></span></p>
              </div>
          </div>



           </div>
          <!--           end gallery-content           /-->
        </div>
      </div>
      <!--           end gallery           /-->
      </div>
      <!--           end contacts content           /-->
      </section>
    </main>
 
    <footer class="page-footer">
      <div class="container">
        <div class="row">

         <!--           ¬ page-footer__contacts           /-->
          <div class="col-md-4 col-md-offset-4" style="text-align:center;">
            <h4 class="page-footer__title"><img src="images/footerlogo.png" width="100%;"></h4>
          <font color="#c6aa28" style="text-transform:uppercase;"> Tel: 917.909.0142 <br />  138 7th Avenue, Brooklyn NY 11215   <br /> Mon-Sat: 10:00am-8:00pm | Sun: 10:00am-7:00pm</font>
          </div>
            

 
          
        </div>
      </div>
      <div class="page-footer__copyright">
        <div class="container">© 2017 Nail Project • Powered by AM STUDIO</div>
      </div>
    </footer>

    <!--           end lightbox gallery           /-->
    <!-- Google map init-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3gFKhVywUkygSxQEBdGVrI5-ZRrdjueA"></script>
    <script src="js/google-map.js"></script>
    <script src="js/vendor/jquery-2.2.3.min.js"></script>
    <script src="js/vendor/rem.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap-clockpicker.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.equalheights.min.js"></script>
    <script src="js/jquery.barrating.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/swiper.jquery.min.js"></script>
    <script src="js/blueimp-gallery.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/jarallax-video.min.js"></script>
    <script src="js/slideout.js"></script>
    <!-- Core script-->
    <script src="js/main.js"></script>
 
<script src="http://malsup.github.com/jquery.cycle2.js"></script>
    <!--           * Google Analytics           /-->
  </body>
</html>