<?php 
include("inc/connect.php");


 function submit_email($firstname, $lastname, $email, $phone, $message, $conn) {


 	    if ($firstname == null OR $lastname == null OR $email == null OR $phone == null OR $message == null) {
      	 echo "Please fill out everything! We need to know who you are, and why you want to get in touch with us!";
         die();
        } 

	    $firstname = clean_input($firstname);
		$lastname = clean_input($lastname);
		$message = sentence_case($message); 
		$status = 'ACTIVE';
		$currentdate = date('Y-m-d H:i:s');

		if ($phone == 'X') {
				$modal =   "<script>$(document).ready(function(){
         			$('#errorModal').modal('show')
	      			});
	      		</script>";
	            echo $modal; 

					// reset variables
			  		unset($firstname);
			  		unset($lastname);
			  		unset($phone);
			  		unset($email);
			  		unset($message);
			  		unset($address);	            
		} else {

			try {

					//echo '<p>generate insert statement</p>';
					$sql = $conn->prepare("INSERT INTO customers (first_name, last_name, phone, email, status, currentdate, message)
									            VALUES (:firstname, :lastname, :phone, :email, :status, :currentdate, :message)");

					//echo '<p>execute insert statement</p>';
					$sql->execute( array( ':firstname'	 => $firstname
										, ':lastname'	 => $lastname
										, ':phone'		 => $phone
										, ':email'		 => $email
										, ':message'	 => $message
										, ':status'		 => $status
										, ':currentdate' => $currentdate
										)
								);		

					// reset variables
			  		unset($firstname);
			  		unset($lastname);
			  		unset($phone);
			  		unset($email);
			  		unset($message);
			  		unset($address);


					$modal =   "<script>$(document).ready(function(){
					         			$('#thankyouModal').modal('show')
					      			});
					      		</script>";
					 echo $modal; 

			} catch(PDOException $e) {
				echo $e->getMessage();
			}
	   }
	}

	function clean_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  $data = ucfirst(strtolower($data));
	  return $data;
	}

	function format_phone($phone) {
		// note: making sure we have something
		//if(!isset($phone{3})) { return ''; }

		// note: strip out everything but numbers 
		$phone = preg_replace("/[^0-9]/", "", $phone);
		$length = strlen($phone);

		switch($length) {
			case 7:
				return preg_replace("/([0-9]{3})([0-9]{4})/", "$1-$2", $phone);
				break;
			case 10:
				return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $phone);
				break;
			case 11:
				return preg_replace("/([0-9]{1})([0-9]{3})([0-9]{3})([0-9]{4})/", "$1($2) $3-$4", $phone);
				break;
			default:
			return 'X';
			break;
		}
	}

	function sentence_case($string) { 
	    $sentences = preg_split('/([.?!]+)/', $string, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE); 
	    $new_string = ''; 
	    foreach ($sentences as $key => $sentence) { 
	        	$new_string .= ($key & 1) == 0? 
	            ucfirst(strtolower(trim($sentence))) : 
	            $sentence.' '; 
	    } 
	    return htmlspecialchars($new_string); 
	} 


include("inc/header.php");

?>

    <!-- ************************************************************* -->
    <!--Begin Site Content -->
	<div class="container"> 

        <div class="row" > 
        	<h2>Contact Us</h2>
            <!-- <div class="col-12" id="contact"> -->
		        <form class="row form-horizontal" method="post" action="contact.php" id="contact_form" autocomplete="off"> <!-- form -->
		            <fieldset>
		                <div class="form-group" >
		                  <label class="col-md-2 control-label">First Name</label>  
		                  <div class="col-md-8 inputGroupContainer">
		                      <div class="input-group">
		                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		                          <input id="firstname" name="firstname" placeholder="First Name" class="form-control" type="text" required="required">
		                      </div>
		                  </div>
		                </div>
		                <div class="form-group" >
		                  <label class="col-md-2 control-label">Last Name</label>  
		                  <div class="col-md-8 inputGroupContainer">
		                      <div class="input-group">
		                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		                          <input id="lastname" name="lastname" placeholder="Last Name" class="form-control" type="text" required="required">
		                      </div>
		                  </div>
		                </div>
		                <div class="form-group" >
		                  <label class="col-md-2 control-label">Phone</label>  
		                  <div class="col-md-8 inputGroupContainer">
		                      <div class="input-group">
		                          <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		                          <input id="phone" name="phone" placeholder="Phone Number ~ numbers only: 7 digits or 10 digits" class="form-control" type="tel" required="required">
		                      </div>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-md-2 control-label">E-Mail</label>  
		                    <div class="col-md-8 inputGroupContainer">
		                        <div class="input-group">
		                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		                            <input id="email" name="email" placeholder="E-Mail Address" class="form-control" type="email" required="required">
		                        </div>
		                    </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-md-2 control-label">Your Message</label>
		                    <div class="col-md-8 inputGroupContainer">
		                        <div class="input-group">
		                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
		                            <textarea id="message" name="message" placeholder="Your Message" class="form-control" type="text" required="required" rows="3"></textarea>
		                        </div>
		                  </div>
		                </div>
		                <!-- capture spam -->
		                <div class="form-group" style="display:none">  
		                    <label class="col-md-2 control-label" for="address"></label>
		                    <div class="col-md-4 inputGroupContainer">
		                        <div class="input-group col-md-6">
			                        <input class="form-control" type="text" name="address" id="address">
			                        <p>Please leave this field blank</p>
		                        </div>
		                    </div>    
		                </div>

		                <div class="form-group">
		                  <label class="col-md-4 control-label"></label>
		                  <div class="col-md-4">
		                    <button type="submit" class="btn btn-primary" id="submitBtn" name="submitBtn">Send <span class="glyphicon glyphicon-send"></span></button>
		                  </div>
		                </div>
		            </fieldset>

					<!-- PHP to update database -->
					<?php

						if (isset($_POST['submitBtn'])) {

						  $form = $_POST;

							$firstname = $form[ 'firstname' ];    
							$lastname = $form[ 'lastname' ];
							$phone = format_phone($form[ 'phone' ]);
							$email = $form[ 'email' ];
							$message = $form[ 'message' ];
							$address = $form[ 'address' ];


			        		// capture spam and stop execution
							// spam honey pot
							if ($address != "") {
								echo "Bad form input";
								die();
							}

							//var_dump($form);
					  		submit_email($firstname, $lastname, $email, $phone, $message, $conn);

					?>

							 <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
							     <div class="modal-dialog">
							         <div class="modal-content">
							             <div class="modal-header">
							                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							                 <p>Thank you for your comments</p>
							             </div>
							         </div>
							     </div>
							 </div>  

							 <div class="modal fade" id="errorModal" tabindex="-1" role="dialog">
							     <div class="modal-dialog">
							         <div class="modal-content">
							             <div class="modal-header">
							                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							                 <p>Invalid Phone Number Provided</p>
							             </div>
							         </div>
							     </div>
							 </div>
					 <?php  die(); ?>

			<?php } ?>

		        </form> <!-- end form -->
        </div>  
		<hr/>

        <div class="row" > 
        	<h2>Directions to Lino&#8217;s</h2>
            <div class="col-sm-6">
				<address>
					<p>50 West Tienken Road<br />
					Rochester Hills, Michigan 48306<br />
					Fax: 248 652-8738 <br />
					Phone: (248) 652-9002<br />
					linosrestaurant@yahoo.com</p>
				</address>
				<aside>
					<h4>Hours of Operation</h4>
					<p>
						<span>Monday</span> thru <span>Thursday</span>: <span>5:00pm &#8211; 10:00pm</span><br />
						<span>Friday</span> &amp <span>Saturday</span>: <span>5:00pm &#8211; 11:00pm</span><br />
						<span>Sunday</span> <span>5:00pm &#8211; 9:00pm</span><br />
					</p>	
				</aside>
            </div>
            <div class="col-sm-6" >
				<div class="google-map">
					<iframe width="450" height="250" frameborder="0" scrolling="no" marginheight="250" marginwidth="450" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=50 West Tienken Road, Rochester Hills, MI&aq=0&oq=50 west tienken&sll=45.00109,-86.270553&sspn=12.071349,19.753418&ie=UTF8&hq=&hnear=50 W Tienken Rd, Rochester Hills, Oakland, Michigan 48306&t=m&z=14&ll=42.695819,-83.135544&output=embed" id="nice_embed"></iframe><br/>
						<small>
						<a href="https://maps.google.com/maps?f=q&source=embed&hl=en&geocode=&q=50+West+Tienken+Road,+Rochester+Hills,+MI&aq=0&oq=50+west+tienken&sll=45.00109,-86.270553&sspn=12.071349,19.753418&ie=UTF8&hq=&hnear=50+W+Tienken+Rd,+Rochester+Hills,+Oakland,+Michigan+48306&t=m&z=14&ll=42.695819,-83.135544" target="_blank">View Larger Map</a>
						</small>
				</div>
           </div>
        </div> 

    </div> <!-- end form container-->
	<!--End Site Content -->
	<!-- ************************************************************************** -->	


<?php include("inc/footer.php");?>