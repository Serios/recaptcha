<?php 
$recaptchaActive = e107::pref('recaptcha', 'active');
$recaptchaSiteKey = e107::pref('recaptcha', 'sitekey'); 
$lang = ( defined('CORE_LC') ) ? '&hl='.CORE_LC : '&hl=en';

		if($recaptchaActive)
		{
 
  e107::js("footer-inline", '<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit'.$lang.'"
		        async defer>
		    </script>' );
		 
		$script = "	var onloadCallback = function() {
		    $('.g-recaptcha').each(function(){
		        grecaptcha.render(this,{'sitekey' : '{$recaptchaSiteKey}'});
		      })
		  }; "; 
	 
	 e107::js("footer-inline", $script , 'jquery');		 
   
	}  
 


?>
