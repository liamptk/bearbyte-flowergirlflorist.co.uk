<?php 
$pageTitle = 'Contact Flower Girl Florist, Flower Arrangements and Delivery Wirral';
$pageDescription = 'Contact The Flower Girl Florist, we offer the best flower Arrangements and same day delivery across the Wirral.';
include_once('header.php');
?>
        <div class="row">
            <div class="box">
			<div class="col-lg-12">
			                    <hr>
                    <h2 class="intro-text text-center">Come in store
                        <strong>or call us now.</strong>
                    </h2>
					 <hr>
					</div>
					<div class="col-lg-8">
					<div class="col-lg-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.0611471197667!2d-3.0005237841610457!3d53.36006057998194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b2753c39f2051%3A0xfc9783bd37e3!2sFlower+Girl%2C+25+Bebington+Rd%2C+Birkenhead%2C+Wirral%2C+Merseyside+CH62+5BE!5e0!3m2!1sen!2suk!4v1451565399177" width="373" height="373" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-lg-5" style="border:dotted #FF6699 2px; height:373px;">
					<h2 class="intro-text"><strong>Contact Details</strong></h2>
					<p>
					<strong>Phone Number:</strong> <a href="tel://01516458792"></br>0151 645 8792</a></br></br>
					<strong>Address:</strong></br> The Flower Girl,</br> CH62 5BE, </br>25 Bebington Road,</br> Wirral,</br> United Kingdom
					</p>
					</div>
                </div>
				<div class="col-lg-4" style="border:dotted #FF6699 2px;">
				<h2 class="intro-text" style="padding-left:17px;"><strong>Enquiry Form</strong></h2>
				<form class="" id="commentForm" method="post" action="sent.php" style="padding:5px;">
				<fieldset>
					<div class="form-group img-rounded">
						<label for ="contact-name" class="col-lg-4 control-label">Name:</label>
						<div class="col-lg-8 input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
							<input type="text" class="form-control" id="cname" name="cname" placeholder="Full Name" minlength="2" required style=""></br>
						</div>
					</div>
					<div class="form-group">
						<label for ="contact-email" class="col-lg-4 control-label">Email:</label>
						<div class="col-lg-8 input-group margin-bottom-sm">
						  <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
						  <input type="email" class="form-control" id="cemail" name="cemail" required placeholder="you@example.com" style="">
						</div>																		
					</div>	
					<div class="form-group">
						<label for ="contact-number" class="col-lg-4 control-label">Phone:</label>
						<div class="col-lg-8 input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
							<input type="number" class="form-control" name="cnumber" id="contact-number" required placeholder="Phone Number" style=""></br>
						</div>
					</div>		
					<div class="form-group">
						<label for ="contact-message" class="col-lg-4 control-label">Your Query:</label>
						<div class="col-lg-8 input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-comments fa-fw"></i></span>
							<textarea form="commentForm" class="form-control" rows="4" name="cmessage" style=""></textarea></br>
						</div>
					</div>	
					<div class="col-lg-2 input-group margin-bottom-sm" style="float:right;"> 
					<input class="btn btn-default" href="#" class="submit" type="submit" value="Submit" placeholder="Message">
					</div>
				</fieldset>
				</br>
				</form> 
				</div>
            </div>
        </div>
		
 </div>
 </div>
<?php include_once('footer.php') ?>