<!-- Bootstrap core JavaScript -->
	<script src="<?php echo SITEPATH; ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo SITEPATH; ?>vendor/jquery/jquery.validate.js"></script>
  	<script src="<?php echo SITEPATH; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
  	<script src="<?php echo SITEPATH; ?>js/jquery.slicknav.min.js"></script>


  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

	<script>
	jQuery.validator.addMethod("noSpace", function(value, element) { 
    return value == '' || value.trim().length != 0;  
	}, "Please do not enter only spaces");
	$.validator.addMethod("noFirstSpace", function (value) { 
    return /^([^\s][A-Za-z ]*[^\s])$/.test(value);
}, 'Please enter a minimum of 2 characters and do not include space at the beginning or end');
	jQuery.validator.addMethod("customEmail", function(value, element) { 
  	return this.optional( element ) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test( value ); 
	}, "Please enter valid email address!");
	$.validator.addMethod( "alphanumeric", function( value, element ) {
	return this.optional( element ) || /^\w+$/i.test( value );
	}, "Letters, numbers, and underscores only please" );
	var $registrationForm = $('#registration');
	jQuery.validator.addMethod("lettersonly", function(value, element) {
	return this.optional(element) || /^[a-z," "]+$/i.test(value);
	}, "Please enter only alphabets and spaces");
	//VA Application Form validation
		$(function () {
			$("form[name='VAappForm']").validate({
				// Define validation rules
				rules: {
					applicantName: "required",
					motherName:"required",
					fatherName:"required",
					applicantGender:"required",
					
					applicantName: {
						required: true,
						noSpace: true,
						lettersonly:true,
						noFirstSpace:true
					},
					motherName: {
						required: true,
						noSpace: true,
						lettersonly:true,
						noFirstSpace:true
					},
					fatherName: {
						required: true,
						noSpace: true,
						lettersonly:true,
						noFirstSpace:true
					},
					applicantGender: {
						required: true
					}
				},
			// Specify validation error messages
			//messages: {
				//applicantname: "Please provide a valid name.",
				//motherName: "Please provide a valid name.",
				//},
			submitHandler: function (form) {
					form.submit();
				}
			});	
		});
 	//VA Application Form validation -->
	 $(function () {
		$("form[name='testform']").validate({
			rules: {
				testname: "required",
				testmobile: "required",
				testemail: "required",
				testdistrictddl: "required",
				captcha: "required",
				testname:{
					required: true,
					noSpace: true,
					lettersonly:true,
					noFirstSpace:true
				},
				testmobile:{
					required: true,
		  			number: true,
		  			minlength: 10,
		  			maxlength: 10
				},
				testemail:{
					required: true,
					customEmail: true,
				},
				testdistrictddl:{
					required: true,
				},
				captcha:{
					required: true,
				},
			},
			
			submitHandler: function (form) {
					form.submit();
				}
			});	
		});
	</script>
 
  

  <script>
	  	//trphcddl.style.display = "none";
	  	$(document).ready(function() {
			$('#trphcddl').hide();
	  		$(".b-navdropdown-click").click(function() {
	  			if($(".b-navdropdown").hasClass("hide")) {
	  				$(".b-navdropdown").addClass("show");
	  				$(".b-navdropdown").removeClass("hide");
	  				// $(".b-icon-up").show();
	  				// $(".b-icon-down").hide();
	  			} 
	  			else if($(".b-navdropdown").hasClass("show")) {
	  				$(".b-navdropdown").addClass("hide");
	  				$(".b-navdropdown").removeClass("show");
	  				// $(".b-icon-down").show();
	  				// $(".b-icon-up").hide();
	  			}
			});
	  	});
		function Enableddl(PHC)
		{
			var ddl = document.getElementById("trphcddl");
			ddl.disabled=PHC.checked ? false : true;
			if(!trphcddl.disabled)
			{
				trphcddl.style.display = "table-row";
				phcddl.focus();
			 }
			 else {
				trphcddl.style.display = "none";
				document.getElementById("phcddl").selectedIndex=0;
			 }
		}
    </script>
    </body>
</html>
