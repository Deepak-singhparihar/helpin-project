<?php
	 $page = 'post-project';include('header.php');
?>
        
 <section class="section sspmr white lighten-4 jobpost-se">
	<div class="container">
    	<div class="row">
        	<div class="col s12 l12">
                <div class="card-panel">
                     	<h2 class="black-text  teal lighten-5 inn-heading">Enter the name of your job post </h2>
                      <form action="#" class="input-field">
                              <i class="material-icons prefix">mode_edit</i>
                      <textarea id="user-title" class="materialize-textarea"></textarea>
                      <label for="user-title">name of your job post</label>
  						</form>
                      <div class="card-content black-text">
                          <span class="card-title">Here are some good examples:</span>
                          <p>Developer needed for creating a responsive WordPress Theme</p>
                          <p>CAD designer to create a 3D model of a residential building.</p>
                      </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- End name of job post Area -->
<!-- start Job Category Area -->
<section class="section sspmr white lighten-4">
	<div class="container">
    	<div class="row">
        	<div class="col s12 l12">
            	
                <div class="card-panel">
                	 <div class="card-content">
                     	<h2 class="black-text  teal lighten-5 inn-heading">Job Category</h2>
                        <p>Web Design and Development fully dynamic </p>
                       
                     </div>
					<div class="row">
						<div class="col s12 l6">
							<form action="#">
						 <select class="browser-default">
							 <option value="3">main Category</option>
							<option value="4">Category 1</option>
							 <option value="3">Category 2</option>
							<option value="4">Category 3</option>
								<optgroup label="Sub Category">
								<option value="1">Option 1</option>
								<option value="2">Option 2</option>
								<option value="1">Option 3</option>
								<option value="2">Option 4</option>	
							  </optgroup>
							 <option value="3">Category 4</option>
							<option value="4">Category 5</option>
							 <option value="3">Category 6</option>
							<option value="4">Category 7</option>
							  <optgroup label="Sub Category 2">
								<option value="3">Option 1</option>
								<option value="4">Option 2</option>
								<option value="3">Option 3</option>
								<option value="4">Option 4</option> 
							  </optgroup>
							 <option value="3">Category 8</option>
							<option value="4">Category 9</option>
							 <option value="3">Category 10</option>
							<option value="4">Category 11</option>
						  </select>
                    </form>
				</div>
						<div class="col s12 l6">
							<form action="#">
						 <select class="browser-default">
							 <option value="3">main Category</option>
							<option value="4">Category 1</option>
							 <option value="3">Category 2</option>
							<option value="4">Category 3</option>
								<optgroup label="Sub Category">
								<option value="1">Option 1</option>
								<option value="2">Option 2</option>
								<option value="1">Option 3</option>
								<option value="2">Option 4</option>	
							  </optgroup>
							 <option value="3">Category 4</option>
							<option value="4">Category 5</option>
							 <option value="3">Category 6</option>
							<option value="4">Category 7</option>
							  <optgroup label="Sub Category 2">
								<option value="3">Option 1</option>
								<option value="4">Option 2</option>
								<option value="3">Option 3</option>
								<option value="4">Option 4</option> 
							  </optgroup>
							 <option value="3">Category 8</option>
							<option value="4">Category 9</option>
							 <option value="3">Category 10</option>
							<option value="4">Category 11</option>
						  </select>
                    </form>
						</div>
					</div>
                    
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- End Job Category Area -->
<!-- start Job Description Area -->
<section class="section sspmr white lighten-4">
	<div class="container">
    	<div class="row">
        	<div class="col s12 l12">
                <div class="card-panel">
                     	<h2 class="black-text  teal lighten-5 inn-heading">Job Description </h2>
                      <form action="#" class="input-field">
                              <i class="material-icons prefix">mode_comment</i>
                      <textarea id="Description" class="materialize-textarea" rows="20" placeholder="Description"></textarea>
                      <label for="Description"></label>
  						</form>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- End Job Description Area -->
<!-- start Location Area -->

<section class="section sspmr white lighten-4">
	<div class="container">
    	<div class="row">
        	<div class="col s12 l6">
                <div class="card-panel">
                	 <div class="card-content">
                     	<h2 class="black-text  teal lighten-5 inn-heading">Location </h2>
                     </div>
                     <div class="row">
                     	<div class="col s12">
                        	<form action="#">
                             <select class="browser-default seff">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                              </select>
                            </form>
                        </div>
                        
                     </div>
                     
                </div>
                
            </div>
			
			<div class="col s12 l6">
                <div class="card-panel">
                	 <div class="card-content">
                     	<h2 class="black-text  teal lighten-5 inn-heading">Budget  </h2> 
                     </div>
						<div class="row">
							<form action="#">
							<div class="col s12 m6 l6">
								<label class="effcct">
                              <input class="with-gap" name="group4" type="radio" value="first" checked />
                              <span>Fixed</span>
                            </label>
								<div class="sdown">
									 <div class="doller-fee">
										 <div class="inner-doller">
											 
										 	<i class="material-icons prefix">attach_money</i>
										 </div>
										 <div class="inner-doller">
										 	<input id="doller" type="text" class="validate" placeholder="Amount">
										 </div>
										 <div class="inner-doller">
										 	<label for="input_text2"> 20.00</label>
										 </div>
										
										 
                                        
									</div>
								</div>
							</div>
							<div class="col s12 m6 l6">
								<label class="effcct1">
                             <input class="with-gap" name="group4" type="radio" value="second">
                              <span>Hourly</span>
                            </label>
                          		<div class="sdown1">
									<div class="doller-fee">
										 <div class="inner-doller">
											 
										 	<i class="material-icons prefix">attach_money</i>
										 </div>
										 <div class="inner-doller">
										 	<input id="doller1" type="text" class="validate" placeholder="Amount">
										 </div>
										 <div class="inner-doller">
										 	<label for="input_text2"> 20.00</label>
										 </div>
									</div>
									<!--2nd-->
									<div class="doller-fee1">
										 <div class="inner-doller">
											 
										 	<i class="material-icons prefix">attach_money</i>
										 </div>
										 <div class="inner-doller">
										 	<input id="doller2" type="text" class="validate" placeholder="Amount">
										 </div>
										 <div class="inner-doller">
										 	<label for="input_text2"> 20.00</label>
										 </div>
										
										 
                                        
									</div>
								</div>
							</div>
							</form>
						</div>
                      
   							 
                           
  						
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Location Area -->
<!-- start Budget  Area -->

<!-- End Budget Area -->

<!-- start Visibility Area -->
<section class="section sspmr white lighten-4">
	<div class="container">
    	<div class="row">
        	<div class="col s12 l12">
                <div class="card-panel">
                      <form action="#">
   							<div class="switch">
                                <label>
                                  <span class="flow-text">Visibility</span>
                                  <input type="checkbox">
                                  <span class="lever"></span>
                                  
                                </label>
                              </div>
  						</form>
                        <p>Switching on the visibility will make your job public</p>
                </div>
                <button class="waves-effect waves-light btn center">Post Job</button>
                
            </div>
        </div>
    </div>
</section>
<!-- End Visibility Area -->
<!-- Start Footer Area-->
<?php
	include('footer.php');
?>
<!-- End Footer Area-->

        