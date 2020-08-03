function file(){
	$('.upload').each(function() {
		if(!$(this).parent().hasClass('file')){
				$(this).wrap('<div class="file"></div>');
				$(this).parent('.file').append('<input type="text" readonly="" class="file_tbox"> <button class="btn-file"></button>');	
		}
	});		
		$('.file').off('click');
		$('.file').click(function() {
		//alert('File');
		$(this).find('.upload').show();
		$(this).find('.btn-file').prop('disabled', false);
		
			$(this).find('.upload').change(function() {
				var filename = $(this).val();
				$(this).next('.file_tbox').val(filename);
			});	
		});	

}
function shpan(){
	$(".togg_pan").hide();
	$(".sh_btn input[type='checkbox']").change(function(){
		 $(this).parents('.sh_btn').next('.togg_pan').slideToggle();
	});
	
	
}

$(document).ready(function(e) {
	file();
   $('.b-date').inputmask("aa-aaaa"); 
   $( "#datepicker" ).datepicker();
   
   shpan();
});