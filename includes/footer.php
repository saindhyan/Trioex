<footer >
	<div class="innerl">

	  <section class="menul">
		<div class="coll">
		  <h3>Features</h3>
		  <ul>
			 <li><a href="index.html">Home</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="startup.html">Startup</a></li>
			<li><a href="investor.html">Investors</a></li>
			<li><a href="problem_statement.html">Problem Statement</a></li>
			<li><a href="success_stories.html">Success Stories</a></li>
			<li><a href="mentor.html">Mentors</a></li>

		  </ul>
		</div>
		<div class="coll">
		  <h3>CONTACT</h3>
		  <ul>
			<li><a href="contact_us.html">Help & Support</a></li>
			<li><a href="faqs.html">FAQ's</a></li>
		  </ul>
		</div>
		<div class="coll">
		  <div class="feedbackl">
			<h1 style="color: white;">Feedback Form</h1>
			<form action="">
			  <div class="rowl">
				<input type="text" id="text" class="row_inputl" required>
				<label for="text" class="labell">enter you name</label>
			  </div>
			  <div class="rowl">
				<input type="email" id="email" class="row_inputl" required>
				<label for="email" class="labell">your email
address</label>
			  </div>
			  <div class="rowl" >
				<textarea name="message" id="messagel"
class="row_inputl" cols="30" rows="2" required></textarea>
				<label for="message" class="labell">message</label>
			  </div>
			  <div class="rowl">
				<div class="buttonl">
				  <button type="submit">Submit</button>
				</div>
			  </div>
			</form>
		  </div>
		</div>
		<div class="special-coll">
		  <a href="https://trioex.000webhostapp.com/trioex_app">
			<img class="gimg"src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto/icon-GooglePlay_zvwcqb"/>
		  </a>
		</div>
	  </section>

	  <section class="creditsl">

		<div class="cr">© COER TECH WARRIER</div>
		<div class="social-links">

		  <a href="#">
			<img
src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_48,h_48/icon-instagram_b7nubh"
alt="" />
		  </a>
		  <a href="#">
			<img
src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_48/icon-twitter_gtq8dv"
alt="" />
		  </a>
		</div>
	  </section>


	</div>
  </footer>

    <a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon fa fa-arrow-up">   </i></a>
	<script src="/asset//vendor/jquery/dist/jquery.min.js"></script>
    <script src="/asset//vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/asset//vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script src="/asset//vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="/asset//vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="/asset//vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="/asset//vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/asset//vendor/shufflejs/dist/shuffle.min.js"></script>
    <script src="/asset//vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
	<script src="/asset//vendor/lg-fullscreen.js/dist/lg-fullscreen.min.js"></script>
    <script src="/asset//vendor/lg-video.js/dist/lg-video.min.js"></script>
    <script src="/asset//vendor/parallax-js/dist/parallax.min.js"></script>
	<script src="/asset//vendor/jquery-validation/jquery.validate.min.js"></script>
	<script src="/asset//vendor/flatpickr/dist/flatpickr.min.js"></script>
	
	<script src="/asset//js/jquery.waypoints.min.js"></script>
	<script src="/asset//js/jquery.counterup.min.js"></script>
	<script src="/asset//js/sweet-alert.min.js"></script>
	<script src="/asset//vendor/toastr/toastr.min.js"></script>
    <script src="/asset//js/theme.min.js"></script>
	<script>
	jQuery(document).ready(function($) {
		$('.counter').counterUp({
			delay:10,time:2e3
		});
		$(".grecaptcha-badge").hide();
	});
	
	$(function () {
	   	});
	$(function () {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$("#subscribe_form" ).validate({
			rules: {
				SUBS_EMAIL: {required: true, email: true}
			},
			messages: {
				
			},
			errorElement: 'span',
			errorPlacement: function (error, element) {
			  error.addClass('invalid-feedback');
			  //element.closest('.form-group').append(error);
			},
			highlight: function (element, errorClass, validClass) {
			  $(element).addClass('is-invalid');
			},
			unhighlight: function (element, errorClass, validClass) {
			  $(element).removeClass('is-invalid');
			},
			submitHandler: function(form)  {
			
			}
		});
	});
		
	
    </script>
  </body>
</html><script>
$(document).ready(function(){ 
 
$("#upcomingeventsbutton").click();
 

}); 
$(function () {
	var ticker = $("#ticker");
	ticker.children().filter(".media").each(function () {
		var dt = $(this),
		container = $("<div>");
		dt.next().appendTo(container);
		dt.prependTo(container);
		container.appendTo(ticker);
	});
	ticker.css("overflow", "hidden");
	function animator(currentItem) {
		var distance = currentItem.height();
		duration = (distance + parseInt(currentItem.css("marginTop"))) / 0.020 ;
		currentItem.animate({ marginTop: -distance }, duration, "linear", function () {
			currentItem.appendTo(currentItem.parent()).css("marginTop", 0);
			animator(currentItem.parent().children(":first"));
		});
	};
	animator(ticker.children(":first"));
	ticker.mouseenter(function () {
		ticker.children().stop();
	});
	ticker.mouseleave(function () {
		animator(ticker.children(":first"));
	});
});
</script>