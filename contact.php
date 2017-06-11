<?php 
include("inc/connect.php");

//global $conn;
//echo "outside function";
//var_dump($conn);

// $input_error = "";
// $error_message = "";

 function submit_email($firstname, $lastname, $email, $phone, $message, $conn) {

		//echo "inside function";
		//var_dump($conn);

 	    if ($firstname == null OR $lastname == null OR $email == null OR $phone == null OR $message == null) {
      	 echo "Please fill out everything! We need to know who you are, and why you want to get in touch with us!";
         die();
        } 

	    $firstname = clean_input($firstname);
		$lastname = clean_input($lastname);
		$message = sentence_case($message); 
		$status = 'ACTIVE';
		$currentdate = date('Y-m-d H:i:s');

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

				$modal =   "<script>$(document).ready(function(){
				         			$('#thankyouModal').modal('show')
				      			});
				      		</script>";
				 echo $modal; 

		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
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
		if(!isset($phone{3})) { return ''; }
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
				return $phone;
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
	    return trim($new_string); 
	} 


include("inc/header.php");

?>

    <!-- ************************************************************* -->
    <!--Begin Site Content -->
	<div class="container"> 

		<!-- start of row 1-->
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
						<a href="https://maps.google.com/maps?f=q&source=embed&hl=en&geocode=&q=50+West+Tienken+Road,+Rochester+Hills,+MI&aq=0&oq=50+west+tienken&sll=45.00109,-86.270553&sspn=12.071349,19.753418&ie=UTF8&hq=&hnear=50+W+Tienken+Rd,+Rochester+Hills,+Oakland,+Michigan+48306&t=m&z=14&ll=42.695819,-83.135544" target="blank">View Larger Map</a>
						</small>
				</div>
           </div>
        </div> 
        <!-- end of row 1-->
		<hr/>
		<!-- start of row 2-->
        <div class="row" > 
        	<h2>Contact Us</h2>
            <div class="col-sm-12" id="contact">
				<!-- start form -->
				<form class="row form-horizontal" method="post" action="contact.php"> <!-- action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" -->
					<div class="col-sm-12" id="contact">
						<div class="form-group">
							<label for="firstname" class="col-md-2 control-label">First Name:</label>
							<div class="col-md-6">
								<input class="form-control" placeholder="First Name" type="text" id="firstname" name="firstname" required="required">
							</div> 
						</div> 
						<div class="form-group">
							<label for="lastname" class="col-md-2 control-label">Last Name:</label>
							<div class="col-md-6">
								<input class="form-control" placeholder="Last Name" type="text" id="lastname" name="lastname" required="required">
							</div>
						</div>  
						<div class="form-group">
							<label for="phone" class="col-md-2 control-label">Phone:</label>
							<div class="col-md-6">
								<input class="form-control" placeholder="Phone Number" type="tel" id="phone" name="phone" required="required">
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-md-2 control-label">Email Address:</label>
							<div class="col-md-6">
								<input class="form-control" placeholder="Email" type="email" id="email" name="email" required="required">
							</div>    
						</div>
						<div class="form-group">
							<label for="message" class="col-md-2 control-label">Your Message:</label>
							<div class="col-md-6">
								<textarea class="form-control" placeholder="Your Message" type="text" id="message" name="message" required="required" rows="3"></textarea>
							</div>    
						</div>
						<div class="form-group">
							<div class="col-sm-4">
							<button type="submit" class="btn btn-primary" id="submitBtn" name="submitBtn">Submit Button</button>
							</div>
						</div> 

						<!-- capture spam -->
						<div style="display:none">  
							<label for="address">Address</label>
							<input type="text" name="address" id="address"/>
							<p>Please leave this field blank</p>
						</div>
					</div>    


					<!-- PHP to update database -->
					<?php
			        	// capture spam and stop execution
						// spam honey pot
						if (!isset($error_message) && $_POST["address"] != "") {
							$error_message = "Bad form input";
						}

						if (isset($_POST['submitBtn'])) {

							$form = $_POST;
							$firstname = $form[ 'firstname' ];    
							$lastname = $form[ 'lastname' ];
							$phone = format_phone($form[ 'phone' ]);
							$email = $form[ 'email' ];
							$message = $form[ 'message' ];

							//var_dump($form);
					  		submit_email($firstname, $lastname, $email, $phone, $message, $conn);

					  		unset($_POST['firstname']);
					  		unset($_POST['lastname']);
					  		unset($_POST['phone']);
					  		unset($_POST['email']);
					  		unset($_POST['message']);
					  		unset($_POST['address']);
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

			<?php } ?>

		        </form> 
				<!-- end form -->

            </div>
        </div>             
    </div>
	<!--End Site Content -->
	<!-- ************************************************************************** -->	


<?php include("inc/footer.php");?>