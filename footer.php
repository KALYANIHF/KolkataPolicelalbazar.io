<footer>
	<section class="topfooter">
		<div class="container">

			<div class="mapsec">

				<h4>Locate Us</h4>

				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d70077.77303562047!2d88.32882583502631!3d22.61612944633522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277a586cdeed5%3A0xca759520f38a8a9b!2sKolkata%20Police%20Head%20Quarters%2C%20Lalbazar!5e0!3m2!1sen!2sin!4v1596119213796!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>

			</div>
			<div class="linksec1">

				<h4>Helpline Number</h4>
				kolkata Police Elder Line: <strong>1234</strong><br>
				Traffic Whatsapp Helpline: <strong>8454999999</strong><br>
				Medical Help Line: <strong>03222-275764,275102</strong> <br>
				District Police: <strong>03222-275609</strong><br>
				Child Help Line: <strong>1098</strong><br>
				Alert Citizen: <strong>103</strong>

			</div>

			<div class="socillink">

				<h4>Follow us on</h4>

				<a href="#"><img src="public/assets/frontend/images/facebook.png" alt="" /></a>
				<a href="#"><img src="public/assets/frontend/images/twitter.png" alt="" /></a>
				<a href="#"><img src="public/assets/frontend/images/youtube.png" alt="" /></a>


				<div class="counter"><span class="timer-box">0</span><span class="timer-box">0</span><span class="timer-box">0</span><span class="timer-box">0</span><span class="timer-box">0</span><span class="timer-box">0</span><span class="timer-box">9</span><span class="timer-box">9</span><span class="timer-box">3</span>
					<!--<img src="public/assets/frontend/images/counter.jpg"  alt=""/>-->
				</div>
			</div>
			<div class="clearfix"></div>

		</div>
	</section>
	<section class="copyright"></section>
</footer>


<!-- JavaScripts -->
<script src="public/assets/frontend/js/jquery.min.js" type="text/javascript"></script>



<script src="public/assets/frontend/js/bootstrap.min.js" type="text/javascript"></script>
<script src="public/assets/frontend/js/script.js" type="text/javascript"></script>
<script src="public/assets/frontend/js/jquery-ui-1.js" type="text/javascript"></script>
<script src="public/assets/frontend/js/jquery_003.js" type="text/javascript"></script>
<script src="public/assets/frontend/js/jquery_004.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {

		/*$("#logoParadeTwo").smoothDivScroll({
			autoScrollingMode: "always",
			autoScrollingDirection: "endlessLoopRight",
			autoScrollingStep: 2,
			autoScrollingInterval:35,
			getContentOnLoad: { method: "getAjaxContent",
								content: "ajaxContent.html",
								manipulationMethod: "replace"
			}
		});





		// Second logo parade

		$("#logoParadeTwo").bind("mouseover", function () {
			$(this).smoothDivScroll("stopAutoScrolling");
		}).bind("mouseout", function () {
			$(this).smoothDivScroll("startAutoScrolling");
		});*/



	});
</script>


<!--for responsive slider-->
<script type="text/javascript" src="public/assets/frontend/js/responsiveslides.min.js"></script>
<script type="text/javascript">
	$(function() {
		$("#slider4").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 1500,
			namespace: "callbacks",
			before: function() {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function() {
				$('.events').append("<li>after event fired.</li>");
			}
		});

	});
</script>
<!--for responsive slider-->
<!--for tab-->
<script type="text/javascript">
	$(document).ready(function() {

		$(".tab_content").hide();
		$(".tab_content:first").show();

		$("ul.tabs li").click(function() {

			$("ul.tabs li").removeClass("active");
			$(this).addClass("active");
			$(".tab_content").hide();
			var activeTab = $(this).attr("rel");
			$("#" + activeTab).fadeIn();

			window.dispatchEvent(new Event('resize'));
		});
	});
</script>
<!--for tab-->


<!--for owl slider-->
<script type="text/javascript" src="public/assets/frontend/js/owl.carousel.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			rtl: false,
			margin: 0,
			nav: true,
			autoplay: true,
			autoplayTimeout: 6000,
			autoplayHoverPause: true,
			loop: true,
			responsive: {
				0: {
					items: 2
				},
				600: {
					items: 2
				},
				1000: {
					items: 3
				}
			}
		})
	})
</script>
<script type="text/javascript">
	$(document).ready(function() {
		var owl = $('.owl-carousel1');
		owl.owlCarousel({
			rtl: false,
			margin: 0,
			nav: true,
			autoplay: true,
			autoplayTimeout: 6000,
			autoplayHoverPause: true,
			loop: true,
			responsive: {
				0: {
					items: 2
				},
				600: {
					items: 2
				},
				1000: {
					items: 3
				}
			}
		})
	})
</script>
<!--for owl slider-->

<script type="text/javascript" src="public/assets/frontend/js/jquery.newsTicker.js"></script>
<script type="text/javascript">
	$('a[href*=#]').click(function() {
		var href = $.attr(this, 'href');
		if (href != "#") {
			$('html, body').animate({
				scrollTop: $(href).offset().top - 81
			}, 500, function() {
				window.location.hash = href;
			});
		} else {
			$('html, body').animate({
				scrollTop: 0
			}, 500, function() {
				window.location.hash = href;
			});
		}
		return false;
	});

	/*$(window).load(function(){
						$('code.language-javascript').mCustomScrollbar();
					});
				   */
	var nt_example1 = $('#nt-example1').newsTicker({
		row_height: 80,
		max_rows: 3,
		duration: 4000,
		prevButton: $('#nt-example1-prev'),
		nextButton: $('#nt-example1-next')
	});
</script>

<!-- New Add Start -->

<script type="text/javascript" src="public/assets/frontend/js/ddaccordion.js"></script>
<script>
	//Initialize 2nd demo:
	ddaccordion.init({
		headerclass: "technology", //Shared CSS class name of headers group
		contentclass: "thelanguage", //Shared CSS class name of contents group
		revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
		mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
		collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
		defaultexpanded: [true], //index of content(s) open by default [index1, index2, etc]. [] denotes no content.
		onemustopen: true, //Specify whether at least one header should be open always (so never all headers closed)
		animatedefault: true, //Should contents open by default be animated into view?
		scrolltoheader: false, //scroll to header each time after it's been expanded by the user?
		persiststate: true, //persist state of opened contents within browser session?
		toggleclass: ["closedlanguage", "openlanguage"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
		togglehtml: ["prefix", "<img src='public/assets/frontend/images/plus.jpg' style='width:13px; height:13px' /> ", "<img src='public/assets/frontend/images/minus.jpg' style='width:13px; height:13px' /> "], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
		animatespeed: "normal", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
		oninit: function(expandedindices) { //custom code to run when headers have initalized
			//do nothing
		},
		onopenclose: function(header, index, state, isuseractivated) { //custom code to run whenever a header is opened or closed
			//do nothing
		}
	})
</script>


<!-- New Add End -->


<script type="text/javascript" src="public/assets/frontend/js/dist/telex.js"></script>
<script type="text/javascript">
	$('#tx').telex({
		messages: [

			{
				id: 'msg1',
				content: 'Kolkata Police Control Room <strong>(91-33)2214-3024</strong> &nbsp;&nbsp;|&nbsp;&nbsp;'
			},

			{
				id: 'msg2',
				content: 'Traffic Whatsapp Helpline <strong>1073</strong> &nbsp;&nbsp;|&nbsp;&nbsp;'
			},

			{
				id: 'msg3',
				content: 'Wireless Control Room <strong>(91-33)2214-1288</strong> &nbsp;&nbsp;|&nbsp;&nbsp;'
			},

			{
				id: 'msg4',
				content: 'Ambulance  <strong>102</strong> &nbsp;&nbsp;|&nbsp;&nbsp;'
			},

			{
				id: 'msg5',
				content: 'Medical Help Line - <strong>9830079999</strong> &nbsp;&nbsp;|&nbsp;&nbsp;'
			},

			{
				id: 'msg6',
				content: 'Women Helpline - <strong>1091</strong>&nbsp;&nbsp;|&nbsp;&nbsp;'
			},
			{
				id: 'msg7',
				content: 'Fire brigade - <strong>101</strong>&nbsp;&nbsp;|&nbsp;&nbsp;'
			},
			{
				id: 'msg8',
				content: 'Healthcare - <strong>24150600</strong>&nbsp;&nbsp;|&nbsp;&nbsp;'
			},
			{
				id: 'msg9',
				content: 'View on desktop for better user exprience;'
			}




			/* more messages... */
		],
		delay: 0
	});

	$("#pause").click(function() {
		$("#tx").telex("pause");
	});
	$("#resume").click(function() {
		$("#tx").telex("resume");
	});
</script>




<script src="public/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="public/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>





<!-- Page Js -->

<!-- Page Js-->

<!-- JavaScripts -->

</body>

<!-- Mirrored from karmickdev.com/cpc/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jan 2019 10:02:04 GMT -->

</html>