jQuery(document).ready(function(){
	jQuery('#generateOTPForm').submit(function(event){
		jQuery.ajax({
			url : jQuery(this).attr('action'),
			type : jQuery(this).attr('method'),
			data : jQuery(this).serialize(),
			success : function(response){
				jQuery('.success-message').remove();
				jQuery('.error-message').remove();
				if (response.status == 200)  {
                    jQuery(document).find('[id=mobile_div]').after('<div class="alert alert-success success-message">' +response.message+ '</div>');
				}else{
					jQuery(document).find('[id=mobile_div]').after('<div class="alert alert-danger error-message">' +response.message+ '</div>');
				}
			},
			error: function (response) {
				jQuery('.success-message').remove();
				jQuery('.error-message').remove();
			   	jQuery.each(response.responseJSON.errors,function(field_name,error){
                    jQuery(document).find('[id='+field_name+'_div]').after('<div class="alert alert-danger error-message">' +error+ '</div>')
                });
			},
		});
		event.preventDefault();
		console.log('uu')
	});
});