

function nameVal(){
	var username = document.getElementById("form-name").value;
	
	producePrompt("","errname","form-name",null);
	return true;
}

function emailVal(){
	var email = document.getElementById("form-email").value;
	
	if(!email.match(/^[A-Za-z0-9_\-\.]*[@][A-Za-z0-9_\-\.]*[\.][A-Za-z]{2,4}$/)){
		producePrompt("Invalied Email Address","erremail","form-email","red");
		return false;
	}
	
	producePrompt("","erremail","form-email",null);
	return true;
}

function mobileVal(){
	var phone = document.getElementById("form-mobile").value;
	
	if(phone.length > 10){
		producePrompt("Wrong Number.Check It Again","errmobile","form-mobile","red");
		return false;
	}
	if(!phone.match(/^[0-9]+$/)){
		producePrompt("Please Only Include Digits","errmobile","form-mobile","red");
		return false;
	}
	if(phone.length < 10 && phone.length > 0){
		producePrompt("Number Should Contain 10 Digits","errmobile","form-mobile","red");
		return false;
	}
	producePrompt("","errmobile","form-mobile",null);
	return true;
}

function GenderVal(){
	var male = document.getElementById("sex").checked;
	var female = document.getElementById("sex1").checked;
	if(male == false && female == false){
		producePrompt("Select Gender","errsex","sex","red");
		return false;
	}
	producePrompt("","errsex","sex",null);
	return true;
}

function producePrompt(message,promptLocation,textField,color){
	document.getElementById(promptLocation).innerHTML = message;
	document.getElementById(promptLocation).style.color = color;
	if(color=='red'){
		document.getElementById(textField).style.borderColor = color;
	}
	else{
		document.getElementById(textField).style.borderColor = null;		
	}
}

function trueVal(){
	
	if(nameVal() && GenderVal() && mobileVal() && nameVal() && emailVal()){
		return true;
	}
return false;
}




jQuery(document).ready(function() {
	
    $('.launch-modal1').on('click', function(e){
		e.preventDefault();
		$( '#' + $(this).data('modal-id') ).modal();
		$(function() {
		$('.confirm-box').css({
			'position' : 'absolute',
			'left' : '50%',
			'top' : '50%',
			'margin-left' : -$('.confirm-box').outerWidth()/2,
			'margin-top' : -$('.confirm-box').outerHeight()/2
		});
	});
	});
	
	$('.registration-form1').on('submit', function(e) {
    	
    	
				
    			$(this).removeClass('input-error');
				
		
    });
	
	
    
    /*
	    Modals
	*/
	$('.launch-modal').on('click', function(e){
		e.preventDefault();
		$( '#' + $(this).data('modal-id') ).modal();
	});
    
	
    /*
        Form validation
    */
    $('.registration-form input[type="text"], .registration-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.registration-form').on('submit', function(e) {
    	
    	$(this).find('.form-name, .form-regNo, .form-cat, .form-email, .form-mobile').each(function(){
			
			
    		if( $(this).val() == "" ) {
				
    			e.preventDefault();
    			$(this).addClass('input-error');
				 
    		}
			
    		else {
				
    			$(this).removeClass('input-error');
				
				
    		}
    	});
		trueVal();
		
		
    	
    });
	
	//confirm start
	$('td[data-href]').on("click", function() {
    document.location = $(this).data('href');
});
	
	
	
	
    
});


