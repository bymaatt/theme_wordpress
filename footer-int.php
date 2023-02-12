<?php
/**
 * The template for displaying the footer
 */
?>

		</div>
<!-- #content -->

		
		<div class='site-footer'>

		<a id="backtotopbutton">
</a>

			<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>

		</div>
	
				
		<footer id="colophon" class="site-footer" role="contentinfo">

			<span id='tgback-3'>
</span>
 <?php if( get_theme_mod( "tgback-3") != "" ) echo "<style>
#iiv4dt{background-image:url(".get_theme_mod( "tgback-3").");} </style>
"?>
<div id="iiv4dt">
<div id="ibxqbh">
<font id="i65uxb" class="gjs-comp-selected">
<font id="i1mlki">
<font id="ivl3gf">
<font id="ijptgi">
¡SEGUIME EN LAS REDES!</font>
</font>
</font>
</font>
</div>
<div id="irmld1">
<span id="ivp75c">
<span id="tgtext-34">
<?php if( get_theme_mod( "tgtext-34") != "" ) {echo get_theme_mod( "tgtext-34");} else {echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";} ?>
</span>
</span>
</div>
<a id="i9r1t6" href="<?php if( get_theme_mod( "tglink-32") != "" ) {echo get_theme_mod( "tglink-32");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" title="Instagram" target="_blank">
<span id="tgimg-42">
<img <?php if( get_theme_mod( "tgimg-42") != "" ) {echo "src='".get_theme_mod( "tgimg-42")."'";} else {echo " src='".get_template_directory_uri()."/images/Asset2-ac6.svg'";} ?>
 id="ilajac" />
</span>
</a>
<a id="iem21c" href="<?php if( get_theme_mod( "tglink-33") != "" ) {echo get_theme_mod( "tglink-33");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" title="Facebook" target="_blank">
<span id="tgimg-43">
<img <?php if( get_theme_mod( "tgimg-43") != "" ) {echo "src='".get_theme_mod( "tgimg-43")."'";} else {echo " src='".get_template_directory_uri()."/images/Asset1-97f.svg'";} ?>
 id="ih2fu1" />
</span>
</a>
<a id="iq0ky7" href="<?php if( get_theme_mod( "tglink-34") != "" ) {echo get_theme_mod( "tglink-34");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" title="LinkedIn" target="_blank">
<span id="tgimg-44">
<img <?php if( get_theme_mod( "tgimg-44") != "" ) {echo "src='".get_theme_mod( "tgimg-44")."'";} else {echo " src='".get_template_directory_uri()."/images/Asset4-1ac.svg'";} ?>
 id="iwu38j" />
</span>
</a>
</div>
<div id="ixogsc">
<a href="<?php if( get_theme_mod( "tglink-35") != "" ) {echo get_theme_mod( "tglink-35");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" title="race logo" id="ip7g0c">
<span id="tgimg-45">
<img <?php if( get_theme_mod( "tgimg-45") != "" ) {echo "src='".get_theme_mod( "tgimg-45")."'";} else {echo " src='".get_template_directory_uri()."/images/logo_600x450-266.png'";} ?>
 id="ih5epc"  class="aut-c9827 c9827-centro" />
</span>
</a>
<div id="iizpjw">
<font id="iibs2l">
<font id="icb9hp">
Â© 2023 TODOS LOS DERECHOS RESERVADOS - MATIAS MACIEL</font>
</font>
</div>
</div>

				<?php
				/*get_template_part( 'template-parts/footer/footer', 'widgets' );*/

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'themesgenerator' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . themesgenerator_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				
				?>
			<!-- </div> .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); 
//Cart in footer to allow multipage menu location
do_action( 'your_theme_header_top' );
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

<script>
jQuery(document).ready(function(){	
	// run test on initial page load
    checkSize();
    // run test on resize of the window
    jQuery(window).resize(checkSize);
	//Function to the css rule
	function checkSize(){
		if ((jQuery(".navbarleft2-items-c").css("display") == "none" )||(jQuery(".navbarcenter-items-c").css("display") == "none" )||(jQuery(".navbar-items-c").css("display") == "none" )){
			jQuery('.navbar-items-c').hide();   
			jQuery('.navbar-menu ul').hide();
			jQuery('.navbarleft2-items-c').hide();   
			jQuery('.navbar-menu ul').hide();
			jQuery('.navbarcenter-items-c').hide();   
			jQuery('.navbar-menu ul').hide();	
		}
		var $window = jQuery(window);
		var windowsize = $window.width();
		if (windowsize>=992) jQuery('.navbar-items-c').show();
	}	
/*Burger mobile toggle*/	
  jQuery(document).on('click','.navbar-burger',function(e){
	  	  
    //jQuery('.navbar-items-c').toggle();   //Sustituyo old version por el comando de abajo  
	jQuery(this).next().toggle();

	
	//jQuery('.navbar-menu ul').toggle();    //Sustituyo old version por el comando de abajo 
	var selector=jQuery(this).next();
	jQuery('.navbar-menu ul', selector).toggle();
	
	
	//console.log("$(this): ", jQuery(this));
	//console.log("$(this):parent ", jQuery(this).parent());
	//console.log("$(this):next ", jQuery(this).next());

	
  });   
  jQuery(document).on('click','.navbarleft2-burger',function(){
    jQuery('.navbarleft2-items-c').toggle();   
	jQuery('.navbar-menu ul').toggle();
  }); 
  jQuery(document).on('click','.navbarcenter-burger',function(){
    jQuery('.navbarcenter-items-c').toggle();   
	jQuery('.navbar-menu ul').toggle();
  });      
  /*Modifies overflow for the menu parent & adds extra security div*/	
	if (jQuery('[class^="maincont-"]').has("[class^=\"navbar-\"]").css('overflow-x')){ 	jQuery('[class^="maincont-"]').has("[class^=\"navbar-\"]").css( "overflow-x", "visible" ); 	jQuery('[class^="maincont-"]').has("[class^=\"navbar-\"]").append(atob('PGRpdiBzdHlsZT0nY2xlYXI6Ym90aDsnPjwvZGl2Pg=='));	}
	if (jQuery('[class^="maincont-"]').has("[class^=\"navbar-\"]").css('overflow-y')){ 	jQuery('[class^="maincont-"]').has("[class^=\"navbar-\"]").css( "overflow-y", "visible" ); 	}  
   /*Modifies overflow for the menu parentS & adds extra security div - new method 12-18 (removed maincont from columns) */
	if (jQuery('*').has("[class^=\"navbar-\"]").css('overflow-x')){ 	jQuery('*').has("[class^=\"navbar-\"]").css( "overflow-x", "visible" ); 	jQuery('*').has("[class^=\"navbar-\"]").append(atob('PGRpdiBzdHlsZT0nY2xlYXI6Ym90aDsnPjwvZGl2Pg=='));	}
	if (jQuery('*').has("[class^=\"navbar-\"]").css('overflow-y')){ 	jQuery('*').has("[class^=\"navbar-\"]").css( "overflow-y", "visible" ); 	}  
  

   /*Applies max-width to navbar-container based on menu childs. Great to control alignment.*/
   /*TRIGGERS ONLY IF navbar-container text-align is center (set up in customizer)*/
/* 
	var width = 0;
	var iscenteredmenu = jQuery(".navbar-container").css("text-align");
	var iscenteredmenu2 = jQuery(".navbar-items-c").css("float");
	if ((iscenteredmenu=="center")&&(iscenteredmenu2=="none")) {
		jQuery('li.menu-item').each(function() {
			width += jQuery(this).outerWidth( true );
		});
		width += jQuery('.cart-contents').outerWidth( true );
		jQuery('.navbar-container').css('max-width', width + 20);			
	}
*/
		/*Header Sample with Background - Movemos div gemelo 2 justo debajo del 1, usamos wrapall(), copiamos todas las propiedades del background del div gemelo 1 al container, eliminamos fondo de los dos divs gemelos*/
		jQuery('.home #headback-bottom-box').insertAfter('.home #headback-top-box');		
		jQuery('.home #headback-bottom-box,.home #headback-top-box').wrapAll("<div class='backgroundz-container'>");
		jQuery('.home .backgroundz-container').css('background-image', jQuery('#headback-bottom-box').css('background-image'));
		jQuery('.home .backgroundz-container').css('background-repeat', jQuery('#headback-bottom-box').css('background-repeat'));
		jQuery('.home .backgroundz-container').css('background-position', jQuery('#headback-bottom-box').css('background-position'));
		
		//Removes background fixed in home and internals, not mobile compatible
		jQuery('.home .backgroundz-container').css('background-attachment', 'scroll');
		jQuery('body:not(.home) #headback-top-box').css('background-attachment', 'scroll');
		
		/* PREV:
		jQuery('.home .backgroundz-container').css('background-size', jQuery('#headback-bottom-box').css('background-size'));
		jQuery('.home #headback-top-box').css('background-image', 'none');
		jQuery('.home #headback-bottom-box').css('background-image', 'none'); 
		*/
		
		jQuery('.home:not(.page-template):not(.page-template-default) .backgroundz-container').css('background-size', jQuery('#headback-bottom-box').css('background-size'));
		jQuery('.home:not(.page-template):not(.page-template-default) #headback-top-box').css('background-image', 'none');
		jQuery('.home:not(.page-template):not(.page-template-default) #headback-bottom-box').css('background-image', 'none'); 	

		
	
 
  });

//Fixed headers snippet
jQuery('body').children().each(function () {
	  var $this = jQuery(this);                                                                                                                                
	  if ($this.css("position") === "fixed"){
		  if ($this.css("zIndex") === "auto"){
			//console.log("is fixed and z-index is auto");  
		    jQuery(this).css('zIndex',3000);
		  } 
	  }
});
/*Corrects Safari bug not supporting background-repeat-x-y in the body*/
if(( jQuery('body').css('background-repeat-x') != null )&&( jQuery('body').css('background-repeat-y') != null ))  { 
	jQuery('body').css('background-repeat','no-repeat');
}
/*Fix product category sidebar spotion*/
if( jQuery('body.has-sidebar').length || jQuery('body.woocommerce').length ){
    jQuery("#sidebar").insertAfter( "#primary" );
}  
/*Set product default star rating*/
if( jQuery('body.single-product').length || jQuery('body.woocommerce').length ){
    jQuery("#rating-3").attr("checked","checked");
}


jQuery(document).ready(latestpostsresponsive);
jQuery(window).on('resize',latestpostsresponsive);
function latestpostsresponsive() {	
	var alllatestpostblocks = jQuery('*[class^="latestpostz"]');
	if (alllatestpostblocks) {
		jQuery.each(alllatestpostblocks, function( index, value ) {	
			/*console.log( index + ": " + value );*/			
			var indexauxiliar=index+1;		
			var widthcontainer;
			widthcontainer = jQuery(".latestpostz-"+indexauxiliar+" .latest-post-container").width();
			var heightcontainer;
			heightcontainer = jQuery(".latestpostz-"+indexauxiliar+" .latest-post-container").height();
			/*console.log("Medidas container: "+widthcontainer + " - " + heightcontainer);*/
			var widthimagen;
			widthimagen = jQuery(".latestpostz-"+indexauxiliar+" .latest-post-container .latest-post-thumb img").width();
			var heightimagen;
			heightimagen = jQuery(".latestpostz-"+indexauxiliar+" .latest-post-container").height();
			/*console.log("Medidas imagen: " + widthimagen + " - " + heightimagen);*/
			if ( widthimagen*2 > widthcontainer ) {
					/*console.log("Demasiado pequeño el container");*/
					jQuery(".latestpostz-"+indexauxiliar+" .latest-post-thumb").css("width", "100%");
					/*jQuery(".latestpostz-"+indexauxiliar+" .latest-post-thumb img").css("margin", "0 auto");*/
					jQuery(".latestpostz-"+indexauxiliar+" .latest-post-thumb img").css("margin-bottom", "20px");
					jQuery(".latestpostz-"+indexauxiliar+" .latest-post-content").css("margin-left", "0");
					jQuery(".latestpostz-"+indexauxiliar+" .latest-post-content").css("margin-top", "5px");
				} else {
					
					console.log("Volviendo a estado inicial");
					jQuery(".latestpostz-"+indexauxiliar+" .latest-post-thumb").css("width", "auto");
					//jQuery(".latestpostz-"+indexauxiliar+" .latest-post-thumb img").css("margin", "none");
					jQuery(".latestpostz-"+indexauxiliar+" .latest-post-thumb img").css("margin-bottom", "0px");
					var restorewidth = widthimagen + 25;
					jQuery(".latestpostz-"+indexauxiliar+" .latest-post-content").css("margin-left", restorewidth);
					jQuery(".latestpostz-"+indexauxiliar+" .latest-post-content").css("margin-top", "0px");
					
				}				
		});
	}
}


</script>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel='stylesheet' id='dashicons-css'  href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css'>	
<style>
.cart-contents {display:block!important}	
</style>
<script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>        
<script>
wow = new WOW(
	{
	  boxClass:     'tganimate',
	  animateClass: 'animated',
	  offset:       0,
	  mobile:       true,
	  live:         true
	}
)
wow.init();
</script>
<script>
var btn = jQuery('#backtotopbutton');
jQuery(window).scroll(function() {
  if (jQuery(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  jQuery('html, body').animate({scrollTop:0}, '300');
});
</script>
</body>
</html>