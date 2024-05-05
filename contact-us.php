 <?php
	 $page = 'contact-us';include('header.php');
?> 
       
<!-- start banner Area -->
<section class="boxes-area">
	<div class="parallax-container pc-space">
       <div class="container">
       	
   </div>     		
  <div class="parallax">
     <img src="images/contact-us/Contact-banner.jpg" alt="banner-img" class="responsive-img">
    </div>
  </div>
</section>
<!-- End banner Area -->


<!-- start heading Area -->
<section class="teal lighten-1">
	<div class="container">
    	<div class="row">
        	<div class="col s12">
            	<h1 class="white-text center maintext-mange">Contact Us</h1>
            </div>
        </div>
    </div>
</section>
<!-- End heading Area -->
<!--start contact section-->
<section class="section white lighten-4">
    	<div class="row">
        	<div class="col s12 l6 teal lighten-2 user-infome">
            	<div class="card-panel teal lighten-2 removeshodow">
                	<div class="row">
                    	<div class="col s2"></div>
                        <div class="col s8 offset-s2">
                        	<form action="#">
                        <div class="input-field">
                         <i class="material-icons white-text prefix">account_circle</i>
                          <input id="user_prefix" type="text" class="validate content-user-id user_prefix">
                          <label for="user_prefix" class="white-text"> Name</label>
                        </div>
                        
                        <div class="input-field">
                         <i class="material-icons white-text prefix">email</i>
                          <input id="user_prefix1" type="Email" class="validate content-user-id user_prefix">
                          <label for="user_prefix1" class="white-text">Email</label>
                        </div>
                        
                        
                         <div class="input-field">
                         <i class="material-icons white-text prefix">subject</i>
                          <input id="user_prefix2" type="text" class="validate content-user-id user_prefix">
                          <label for="user_prefix2" class="white-text">subject</label>
                        </div>
                        
                         <div class="input-field">
                         <i class="material-icons white-text prefix">message</i>
                          <textarea id="user_prefix3" class="materialize-textarea user_prefix"></textarea>
                          <label for="user_prefix3" class="white-text">message</label>
                        </div>
                        <button class="waves-effect white teal-text text-lighten-2 btn">Send</button>
                    </form>
                        </div>
                    </div>
                	
                </div>
            </div>
            
            <div class="col s12 l6">
            	<div class="container">
            	<div class="contact-right center">
                	 <img src="images/contact-us/contact-us-vector.png" alt="contact-us" class="responsive-img">
                     <div class="clearfix"></div>
                        <address class="left">
                            Registered office.<br/>
                           Level 00, World Square
                            780 George lane
                            Sydney, New North Wales
                            America 2000
                            ACN 123 456 789
                            support@Helpinprojects.com
                    </address>
                    <h5>Contact with us</h5>
                    <div class="icons">
                    	<a href="#"><i class="fa fa-facebook con-icon"></i></a>
                        <a href="#"><i class="fa fa-twitter con-icon"></i></a>
                        <a href="#"><i class="fa fa-pinterest con-icon"></i></a>
                        <a href="#"><i class="fa fa-linkedin con-icon"></i></a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
</section>
<!--End contact section-->
<!-- start footer Area-->
<?php
	include('footer.php');
?>

<!-- End footer Area-->
        