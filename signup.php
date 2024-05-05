  <?php
	 $page = 'signup';include('header.php');
?>
        
<!--start signup heading Area-->
<section class="section white lighten-4 login-se">
	<div class="container">
    	<div class="row">
        	<div class="col s12">
            	<div class="center">
                	<h2>Sign Up</h2>
                    <p>Already have an account?<a href="login.php">Login</a></p>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!--End signup heading Area-->
<!-- start signup form Area-->
<section class="section white lighten-4">
	<div class="container">
    	<div class="row">
        	<div class="col s12 l6 offset-l3">
            	<div class="card z-depth-4">
                	<div class="card-content teal lighten-1 white-text center">
                    	<span class="card-title">Sign Up</span>
                        <div class="row">
                	<div class="col s12 l4">
                    	<div class=""> 
                        	<span><a href="#"><i class="fa fa-facebook lon-icons"></i></a></span>
                            <p>Log in facebook</p>
                            
                        </div>
                    </div>
                    <div class="col s12 l4">
                    	<div class=""> 
                        	<span><a href="#"><a href="#"><i class="fa fa-linkedin lon-icons"></i></a></a></span>
                            <p>Log in linkedin</p>
                            
                        </div>
                    </div>
                    <div class="col s12 l4">
                    	<div class=""> 
                        	<span><a href="#"><i class="fa fa-google lon-icons"></i></a></span>
                            <p>Log in google</p>
                            
                        </div>
                    </div>
                </div>
                    </div>
                	<div class="card-content">
                    	<form action="#">
                        <div class="input-field">
                         <i class="material-icons prefix">account_circle</i>
                          <input id="user" type="text" class="validate">
                          <label for="user">User Name</label>
                        </div>
                    	 <div class="input-field">
                          <i class="material-icons prefix">email</i>
                          <input id="Email" type="email" class="validate">
                          <label for="Email">Email</label>
                        </div>
                        <div class="input-field">
                          <i class="material-icons prefix">lock</i>
                          <input id="pass" type="password" class="validate">
                          <label for="pass">password</label>
                        </div>
                        
                         <div class="input-field">
                          <i class="material-icons prefix">done</i>
                          <input id="Confirm-Password" type="password" class="validate">
                          <label for="Confirm-Password">Confirm Password</label>
                        </div>
                        	<div class="center">
                            	<p>What you want to do?</p>
                            </div>
                            <div class="row">
                            	<div class="col s12 l6">
                                	<div class="butt-click">
                                      <label>
                                        <a class="waves-effect waves-light btn-large bw-diffine" id="bceffect">
										   <input class="with-gap" name="group5" type="radio" checked />
                              <span id="down">HIRE</span>
										  
										  </a>
                                      </label>
                                     </div>
                                </div>
                                <div class="col s12 l6">
                                	<div class="butt-click">
                                      <label>
										 <a class="waves-effect waves-light btn-large bw-diffine" id="bceffect1">
										   <input class="with-gap" name="group5" type="radio">
                              <span id="down">WORK</span>
										  
										  </a>
                                      </label>
                                    </div>
                                </div>
                            </div>
                            
                         <label>
                            <input type="checkbox" />
                            <span> I agree to the Privacy Policy, Terms of service and IP policy.</span>
                             
                          </label>
                          	<div class="butt-click">
                               <label>
                                  <button class="waves-effect waves-light teal lighten-1 btn-large bw-diffine">create my account</button>
                               </label>
                            </div>
                         </form>
                    </div>
            	</div>
            </div>
        </div>
    </div>
</section>  

<!-- End signup form Area-->
<!-- Start footer Area-->
<?php
	include('footer.php');
?>
<!-- End footer Area-->



   
        