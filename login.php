 <?php
	 $page = 'login';include('header.php');
?>
        
<!--start login heading Area-->
<section class="section white lighten-4 login-se">
	<div class="container">
    	<div class="row">
        	<div class="col s12">
            	<div class="center">
                	<h2>Log In</h2>
                    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!--End login heading Area-->
<section class="section white lighten-4">
	<div class="container">
    	<div class="row">
        	<div class="col s12 l6 offset-l3">
            	<div class="card z-depth-4">
                	<div class="card-content teal lighten-1 white-text center">
                    	<span class="card-title">Login</span>
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
                          <input id="Email" type="email" class="validate">
                          <label for="Email">Email</label>
                        </div>
                        <div class="input-field">
                          <i class="material-icons prefix">lock</i>
                          <input id="pass" type="password" class="validate">
                          <label for="pass">password</label>
                        </div>
                         <label>
                            <input type="checkbox" />
                            <span>Keep me logged in</span>
                             <span class="right"><a href="#">Forgot password?</a></span>
                          </label>
                          <div class="butt-click">
                          <label>
                          	<button class="waves-effect waves-light teal lighten-1 btn-large bw-diffine">Login</button>
                          </label>
                          </div>
                          </form>
                          <p>By clicking Log In, Facebook or LinkedIn
                             you agree to our new T&C's </p>
                    </div>
            	</div>
            </div>
        </div>
    </div>
</section>  
<!-- start login form Area-->
<!-- End login form Area-->
<!-- start footer Area -->
<?php
	include('footer.php');
?>
        