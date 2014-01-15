<?php
 $page_title = 'Capital Cove - Contact Us';
 include 'includes/pagehead.php';
?>



<div class="site-body">

	<div class="page-title">
		<div class="pe-container">
			<h1>Contact</h1>
		</div>
	</div>

	<!-- gmaps-->
	<div class="row-fluid pe-block">
		<div id="loc_maps" class="span12 gmapWrap">
			<div id="gmaps" class="gmap" data-latitude="34.081151" data-longitude="-117.575326" data-title="Custom Title Here" data-zoom="15" >
				<div class="description">Custom Description Here</div>
			</div>
		</div>
	</div><!--end gmaps -->

	<div class="pe-container">
		<!--main content-->
		<div class="row-fluid">



			<section class="span8 pe-block">

				<a id="personaldetails"></a>
				<!--contact form-->
				<form action="php/contact.php" method="post" class="peThemeContactForm">

					<div id="personal" class="bay form-horizontal">
						<h3>Contact</h3>
						<h6 style="color:#0F5080;">Please use this form for any questions or concerns.</h6>

							<!--name field-->
							<div class="control-group">
								<label for="inputName" class="control-label">Name</label>
								<div class="controls">
									<input class="required span9" type="text" id="inputName" name="name" required>
									<!-- <span class="help-inline">required</span> -->
								</div>
							</div>

							<!--phone field-->
							<div class="control-group">
								<label for="inputName" class="control-label">Phone</label>
								<div class="controls">
									<input type="text" id="inputPhone" class="span9" name="phone">
									<span class="help-inline"></span>
								</div>
							</div>

							<!--email field-->
							<div class="control-group">
								<label for="inputName" class="control-label">Email</label>
								<div class="controls">
									<input class="required span9" type="email" id="inputEmail" name="email" required>
									<!-- <span class="help-inline">required</span> -->
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Message</label>
								<div class="controls">
									<textarea name="message" id="msg" rows="12" placeholder="Type your message here..." class="required span9" required></textarea>
									<!-- <span class="help-inline">required</span> -->
								</div>
							</div>

							<div class="control-group">
								<div class="controls">
									<button type="submit" class="contour-btn red">Submit Form</button>
								</div>
							</div>
					</div>


					<div class="notifications">
						<div id="contactFormSent" class="formSent alert alert-success">
							<strong>Your Message Has Been Sent!</strong> &nbsp; Thank you for contacting us.
						</div>
						<div id="contactFormError" class="formError alert alert-error">
							<strong>Oops, An error has ocurred!</strong> &nbsp; See the marked fields above to fix the errors.
						</div>
					</div>

				</form><!--end form-->





			</section>

			<!--sidebar-->
			<div class="span4 sidebar">
				<div class="inner-spacer-left-lrg">

	<!--contact sidebar-->

	<!-- contact details widget -->
	<div class="widget widget_contact">
		<h3>Contact Details</h3>
		<div class="address">
			<span ></span>
			<p><strong>Corporate Office</strong><br>
			9481 Haven Avenue<br>
			Rancho Cucamonga<br>
			CA 91730</p>
		</div>
		<div class="phone">
			<span></span>
			<p>T: 1 (909) 457 8440</p>
			<div></div>
			<span></span>
			<p>F: 1 (909) 639 6650 </p>
		</div>
		<div class="email">
			<span ></span>
			<p><a href="mailto:reo@capitalcove.com">reo@capitalcove.com</a><br>
			</p>
		</div>


		<br /><br />
        
     

			<div class="address">
			<span></span>
			<p onclick="show_gmap3();"><strong>Real Estate Group Special Assets</strong><br>
			41 Madison Avenue,  <br />31st FL <br />
			New York, NY 10010</p>
		</div>
		<div class="phone">
			<span></span>
			<p>T: 1 (855) REO FUND (736 3863)</p>
			<div></div>
			<span></span>
			<p>F: 1 (909) 639 6650 </p>
		</div>
		<div class="email">
			<span></span>
			<p><a href="mailto:reo@capitalcove.com"> reo@capitalcove.com</a><br>
			</p>
		</div>
   <br /><br />

			<div class="address">
			<span ></span>
			<p onclick="show_gmap2();"><strong>Investor Services Group - AMG </strong><br>
			4590 MacArthur Boulevard<br /> 5th Floor<br>
			Newport Beach <br /> CA 92660<br>
			</p>
		</div>
		<div class="phone">
			<span></span>
			<p>T: 1 (949) 335 7970<Br />
			T: 1 (877) 639 6650</p>
			<div></div>
			<span></span>

		</div>
		<div>
			<span></span>
			<p><a href="mailto:investors@capitalcove.com">investors@capitalcove.com</a><br>
			</p>
		</div>

		

		
		

		<br /><br />

			<div class="address">
			<span ></span>
			<p><strong>Eastern Regional Headquarters</strong><br>
			Transamerica Square Center<br>
			401 North Tryon Street, 10th Floor<br>
			Charlotte, NC 28202</p>
		</div>
		<div class="phone">
			<span></span>
			<p>T: 1 (877) 639 6120</p>
			<div></div>
			<span></span>
			<p>F: 1 (877) 639 6650</p>
		</div>
		<div class="email">
			<span></span>
			<p><a href="mailto:reo@capitalcove.com"> reo@capitalcove.com</a><br>
			</p>
		</div>

		


	</div>






	<!--end sidebar-->				</div>
			</div>

		</div><!--end main content-->



	</div>
</div>



 	<div class="pe-spacer size100"></div>

	<!-- Javascript to change map locations -->

<script>

	//run on document load
		//$(document).ready(function () {


		//  $('#loc_maps').load('maps/gmaps1.php').fadeIn("slow");

		//});


  function show_gmap2()
  {
    //alert("JS Function");
    if (document.getElementById("gmaps").style.display === "block")
    {
    	document.getElementById("gmaps").style.display = "none"
        document.getElementById("gmaps2").style.display = "block"
    }

  }

  function show_gmap3()
  {
    //alert("JS Function");
    if (document.getElementById("gmaps").style.display === "block")
    {
    	document.getElementById("gmaps").style.display = "none"
        document.getElementById("gmaps3").style.display = "block"
    }

  }

 </script>



 	<?php REQUIRE 'includes/footer.php';?>
