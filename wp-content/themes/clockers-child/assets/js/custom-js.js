jQuery(document).ready(function(){
	jQuery("#nav__icon-toggle").click(function(){
		jQuery(this).toggleClass("Open")
	jQuery("#mySidenav").toggleClass("slidenav")
	});
	
	jQuery('.card-heading-btn').on('click', function(){
    "use strict";
	jQuery(this).closest(".card").siblings().find(".open").show();
    jQuery(this).find(".open").toggle();

});
	jQuery('#comments .show_top_comment').on("click", function(){
		jQuery('#comments .comment-list, #comments #respond, .hide_top_comment').show();
		jQuery('#comments .show_top_comment').hide();
	})
	jQuery('#comments .hide_top_comment').on("click", function(){
		jQuery('#comments .comment-list, #comments #respond, .hide_top_comment').hide();
		jQuery('.show_top_comment').show();
		
		
	})
	if('#comments'.length > 0 ){
		jQuery("#respond #reply-title").text("Leave a comment")
		jQuery('p.comment-form-author').insertAfter('p.comment-notes');
		jQuery('p.comment-form-email').insertAfter('p.comment-form-author');
		jQuery('p.comment-form-cookies-consent').insertAfter('p.comment-form-email');
	}
	

	jQuery("ul li.send-request a").on("click", function(e){
		
		 jQuery("input#submitBooking").trigger('click')
		 
	});
	// function add_loader(){
		
	// 	jQuery('#wizard-p-2 .top-heading').css("display", "none");
	// 	jQuery('#wizard-p-2 .welcome-note').css("display", "none");
	// 	jQuery('#wizard-p-2 .button__form').css("display", "none");
		
	// 	jQuery("#wizard-p-2").append('<div class="booking-spinner-border"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>');
	// }
	// function remove_loader(){
		
	// 	jQuery("#wizard-p-2 .booking-spinner-border").remove();
	// 	jQuery('#wizard-p-2 .top-heading').css("display", "block");
	// 	jQuery('#wizard-p-2 .welcome-note').css("display", "block");
	// 	jQuery('#wizard-p-2 .button__form').css("display", "block");
	// }
	// jQuery('#wizard').submit(function(e){
 //        e.preventDefault();
 //        console.log("Form submit1")
 //        jQuery("#wizard .actions.clearfix ul .send-request a").trigger('click')
	// 	jQuery("#wizard .actions.clearfix").css("display", "none");
	// 	add_loader();
	// 	jQuery('ul .finish-request').css("display", "none");
		
 //        var serialized = jQuery( '#wizard' ).serialize();

 //        jQuery.ajax({ 
 //            action:'cloker_booking_form_data',
 //            type:'POST',
 //            url:'http://inspironsoft.in/clockers/wp-admin/admin-ajax.php',
 //             data: serialized,
 //            dataType:'json',
 //             success: function(data) {
	// 			 if( data.status == "success"){
	// 				remove_loader()
	// 			 }
 //                  console.log(data); //should print out the name since you sent it along

 //            },
 //            error: function(error){
            	 
 //            }
 //        });

 //    });
});

jQuery('#commentform input#author').on('keyup', function(){
	var author_name = jQuery.trim(jQuery(this).val());
	if( author_name.length > 0 ){
		$(".comment-form-author .field-error").remove();
	}else{
		$(".comment-form-author").append("<p class='field-error'>This field is required.</p>");
	}
})
jQuery('#commentform textarea#comment').on('keyup', function(){
	var author_comment = jQuery.trim(jQuery(this).val());
	if( author_comment.length > 0 ){
		$(".comment-form-comment .field-error").remove();
	}else{
		$(".comment-form-comment").append("<p class='field-error'>This field is required.</p>");
	}
})
jQuery('#commentform input#email').on('keyup', function(){
	var author_email = jQuery.trim(jQuery(this).val());
	 var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	$(".comment-form-email .field-error").remove();
	if( author_email.length == '' ){
		$(".comment-form-email").append("<p class='field-error'>This field is required.</p>");
	}else if(!regex.test(author_email)) {
	    $(".comment-form-email").append("<p class='field-error'>Enter valid email address.</p>")
			 
	} 
})
jQuery('#commentform').submit(function(e){
   
    var commentform = true;
    jQuery("#commentform .field-error").remove();
    var author_comment = jQuery.trim(jQuery('#commentform textarea#comment').val());
     if(jQuery("#commentform .p").hasClass('logged-in-as')){

    }else{
    	var author = jQuery.trim(jQuery('#commentform input#author').val());
	    var email = jQuery.trim(jQuery('#commentform input#email').val());
	    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	    if( author == '' ) {
	    	$(".comment-form-author").append("<p class='field-error'>This field is required.</p>")
			commentform = false;
	    }
	    if( email == '' ) {
	    	$(".comment-form-email").append("<p class='field-error'>This field is required.</p>")
			commentform = false;
	    }else if(!regex.test(email)) {
	    	$(".comment-form-email").append("<p class='field-error'>Enter valid email address.</p>")
			commentform = false;
	    }
    }
    if( author_comment == '' ) {
    	$(".comment-form-comment").append("<p class='field-error'>This field is required.</p>")
		commentform = false;
	}
	if( commentform == false ){
		e.preventDefault();
	}
    
})
