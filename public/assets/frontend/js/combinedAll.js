// You can also use "$(window).load(function() {"
    jQuery(function () {    

      // Slideshow 4
      jQuery("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed:3000,
        namespace: "callbacks",
        before: function () {
          jQuery('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          jQuery('.events').append("<li>after event fired.</li>");
        }
      });
	  
	  jQuery("#menuzord").menuzord({
					align: "right"
					
				});

    });
	
	function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 200,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
	
	$(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                rtl: false,
                margin: 0,
                nav: true,
				autoplay:true,
				autoplayTimeout:6000,
				autoplayHoverPause:true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 1
                  }
                }
              })
            })
			
$(function () {

            $("#form_sample_1").validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                invalidHandler: function (event, validator) { //display error alert on form submit   
                    $('.alert-danger', $('.login-form')).hide();
                },
                highlight: function (element) { // hightlight error inputs
                    $(element)
                            .closest('.form-group').addClass('has-error'); // set error class to the control group
                },
                success: function (label) {
                    label.closest('.form-group').removeClass('has-error');
                    label.remove();
                },                
				rules: {
					first_name: {
						required: true
					},
					/*last_name: {
						required: true
					},*/
					email: {
						required: true,
						email: true
					},
					phone_number: {
						required: true,
						maxlength: 15 
					},
					
					/*subject_text: {
						required: true
					},*/
					comment: {
						required: true
					},
            },
            messages: {                

                first_name: {
                    required: 'Please provide your first name.'
                },
				/*last_name: {
                    required: 'Please provide your last name.'
                },*/
                email: {
                    required: 'Please provide your email address.',
					email: 'Please enter a valid email address.'
                },
				phone_number: {
					required: 'Please provide your phone number.',
					maxlength: 'Your phone number is to long.'
				},
				
				/*subject_text: {
						required: "Please provide a subject line."
				},*/
                comment: {
                    required: "Please provide your message."
                },
            },
                submitHandler: function (form) {
                    form.submit();
                }

            });
			
			$('.numbers').keyup(function () {
            this.value = this.value.replace(/[^0-9\.]/g, '');
        });

        });