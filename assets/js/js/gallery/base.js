/* 
	One Website Fits All
	Base javascript
	Developed by:
		CottonFruits - Fluffy Web Bits 
	Exclusively for CodeCanyon / Envato
 */
//jQuery.noConflict();
var navOpen = false;
var navPrepared = false;

function prepareNav(){
		
	if(jQuery(window).width() <= 580 && jQuery('#navigation').hasClass('collapsible')){
		
		if(!navPrepared){
			
			jQuery('#navigation').slideUp('fast');
			jQuery('#navCollapser').show();
			navOpen = false;
			navPrepared = true;
			
			}
		
		}
		else{
			
			jQuery('#navigation').slideDown();
			jQuery('#navCollapser').hide();
			navOpen = true;
			navPrepared = false;
			
			}
	
	collapserText();
	
	}
	
function collapserText(){
	
	if(navOpen){
						
		jQuery('#navCollapser').html('Hide menu');
		
		}
		else{
			
			jQuery('#navCollapser').html('Show menu');
			
			}
	
	}
 
jQuery(document).ready(function(){
	
	// setup behaviour for collapsible navigation (if a navCollapser object exists)
	if(jQuery('#navCollapser').length && jQuery('#navigation').hasClass('collapsible')){
		
		if(jQuery('#navigation').length){
			
			jQuery('#navCollapser').click(function(){
				
				navOpen = !navOpen;
				collapserText();
				
				jQuery('#navigation').slideToggle('slow');
				
				});
			
			}
		
		}
		
	jQuery('body').append('<div style="display: none"><img src="tr_icon.png" /></div>');
		
	jQuery(window).resize(prepareNav);

	prepareNav();
	
	});
	
/mobi/i.test(navigator.userAgent) && !location.hash && setTimeout(function () {
  if (!pageYOffset) window.scrollTo(0, 1);
}, 1000);