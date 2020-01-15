$(function(){
	function firstStepValidation(){
		$('p.field-error').remove();
		var default_return = true;
		var companyName = $.trim($(".companyName").val());
		var businessLocation = $.trim($(".businessLocation").val());
		var developmentStage = $.trim($(".developmentStage").val());
		var technicalLead = $.trim($(".technicalLead").val());
		var getStarted = $.trim($(".getStarted").val());
		if(companyName.length < 1 ){
			$(".form-compnay-error").append("<p class='field-error'>This field is required.</p>")
			default_return = false;
		}
		if( businessLocation.length < 1 ){
			$(".form-bl-error").append("<p class='field-error'>This field is required.</p>");
			default_return = false;
		}
		if(developmentStage.length < 1 ){
			$(".form-ds-error").append("<p class='field-error'>This field is required.</p>")
			default_return = false;
		}
		if(technicalLead.length < 1 ){
			$(".form-td-error").append("<p class='field-error'>This field is required.</p>")
			default_return = false;
		}
		if(getStarted.length < 1 ){
			$(".form-gs-error").append("<p class='field-error'>This field is required.</p>")
			default_return = false;
		}
		return default_return;
	}
	function IsEmail(email) {
	  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  if(!regex.test(email)) {
	    return false;
	  }else{
	    return true;
	  }
}
function add_loader(){
	
	$('#wizard-p-2 .top-heading').css("display", "none");
	$('#wizard-p-2 .welcome-note').css("display", "none");
	$('#wizard-p-2 .button__form').css("display", "none");
	
	$("#wizard-p-2").append('<div class="booking-spinner-border"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>');
}
function remove_loader(){
	
	$("#wizard-p-2 .booking-spinner-border").remove();
	$('#wizard-p-2 .top-heading').css("display", "block");
	$('#wizard-p-2 .welcome-note').css("display", "block");
	$('#wizard-p-2 .button__form').css("display", "block");
}
function IsPhoneNumber(inputtxt)
{
  	 
    var pattern = /^\d{11}$/;
     if (pattern.test(inputtxt)) {
            
       return true;
     }
        
     return false;
}
function SecondStepValidation(){
		$('p.field-error').remove();
		var default_return = true;
		var fullName = $.trim($(".fullName").val());
		var jobTitle = $.trim($(".jobTitle").val());
		var businessEmail = $.trim($(".businessEmail").val());
		var phoneNumber = $.trim($(".phoneNumber").val());
		 
		if(fullName.length < 1 ){
			$(".form-fn-error").append("<p class='field-error'>This field is required.</p>")
			default_return = false;
		}
		if( jobTitle.length < 1 ){
			$(".form-jt-error").append("<p class='field-error'>This field is required.</p>");
			default_return = false;
		}
		if(businessEmail.length < 1 ){
			$(".form-be-error").append("<p class='field-error'>This field is required.</p>")
			default_return = false;
		}else if( IsEmail(businessEmail) == false ){
			$(".form-be-error").append("<p class='field-error'>Enter valid email address.</p>")
			default_return = false;
		}
		if(phoneNumber.length < 1 ){
			$(".form-pn-error").append("<p class='field-error'>This field is required.</p>")
			default_return = false;
		}else if( IsPhoneNumber(phoneNumber) == false ){
			$(".form-pn-error").append("<p class='field-error'>Enter 11 digit mobile number</p>")
			default_return = false;
		}
		return default_return;
	}
	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        cssClass: "booking-steps",
        transitionEffectSpeed: 300,
        labels: {
            next: "Next Step",
            previous: "Back"
        },
        onStepChanging: function (event, currentIndex, newIndex) {
			$( "#wizard .actions ul li:nth-child(2) a" ).text( "Next Step" );
			$( "#wizard .actions ul li:nth-child(2)" ).removeClass( "send-request" );
			
            if ( newIndex === 1 ) {
				 var formStatus = firstStepValidation();
				 
				if(! formStatus){
					 
					return false;
				}else{
					 
				}
                $('.steps ul').addClass('step-2');
				$( "#wizard .actions ul li:nth-child(2) a" ).text( "Send Request" );
				$( "#wizard .actions ul li:nth-child(2)" ).addClass( "send-request" );
            } else {
                $( "#wizard .actions ul li:nth-child(2) a" ).text( "Next Step" );
				$( "#wizard .actions ul li:nth-child(2)" ).removeClass( "send-request" );
                $('.steps ul').removeClass('step-2');
            }
            if ( newIndex === 2 ) {
				 var sendFormStatus = SecondStepValidation();
				 
				if(! sendFormStatus){
					 
					$( "#wizard .actions ul li:nth-child(2) a" ).text( "send-request" );
					return false;
				}else{
					 
				}
				 
				$("input#submitBooking").trigger('click')
				$( "#wizard .actions ul li:nth-child(2) a" ).text( "Next Step" );
				$( "#wizard .actions ul li:nth-child(2)" ).removeClass( "send-request" );
                $('.steps ul').addClass('step-3');
                $('.actions ul').addClass('mt-7');
            } else {
                $('.steps ul').removeClass('step-3');
                $('.actions ul').removeClass('mt-7');
            }
            return true; 
        }
    });
    // Custom Button Jquery Steps
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Grid 
    $('.grid .grid-item').click(function(){
        $('.grid .grid-item').removeClass('active');
        $(this).addClass('active');
    })
    // Click to see password 
    $('.password i').click(function(){
        if ( $('.password input').attr('type') === 'password' ) {
            $(this).next().attr('type', 'text');
        } else {
            $('.password input').attr('type', 'password');
        }
    })
	
	$( "#wizard .actions ul li:nth-child(3)" ).addClass( "finish-request" );

	$('#wizard').submit(function(e){
        e.preventDefault();
        var formStatus = firstStepValidation();
				 
		if( ! formStatus){
			 console.log("First step error");
			return false;
		}else {
			var sendFormStatus = SecondStepValidation();
			if(! sendFormStatus){
				 console.log("Second step error")
				$( "#wizard .actions ul li:nth-child(2) a" ).text( "send-request" );
				return false;
			}
		}
				 
				
        console.log("Form submit all")
        $("#wizard .actions.clearfix ul .send-request a").trigger('click')
		$("#wizard .actions.clearfix").css("display", "none");
		add_loader();
		$('ul .finish-request').css("display", "none");
		
        var serialized = $( '#wizard' ).serialize();

        jQuery.ajax({ 
            action:'cloker_booking_form_data',
            type:'POST',
            url:'https://clockers.io/wp-admin/admin-ajax.php',
             data: serialized,
            dataType:'json',
             success: function(data) {
				 if( data.status == "success"){
					remove_loader()
				 }
                  console.log(data); //should print out the name since you sent it along

            },
            error: function(error){
            	 
            }
        });

    });
    // Date Picker
    //var dp1 = $('#dp1').datepicker().data('datepicker');
    //dp1.selectDate( new Date( ));
})
