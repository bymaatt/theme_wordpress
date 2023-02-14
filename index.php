<?php
/**
 * The main template file
 */

global $post;  
$todoslosthememods=get_theme_mods();
//print_r($todoslosthememods); 
$customheader=0;
foreach($todoslosthememods as $key =>
 $value)
	{
	   if(preg_match('/^nt_featured_pages/', $key))
	   {
		   if ($customheader==0){
				$menunumber=str_replace("nt_featured_pages","",$key);						
				if (in_array("123454321", $value)) { //Assigned to homepage
					get_header("custom$menunumber");
					$customheader=1;
				}
				if (in_array("0", $value)) { //Assigned to no pages
					//get_header("custom$menunumber");
					$customheader=0;
				}
		   } 			
	   }
	}	
if ($customheader==0) get_header(); 
?>


<div class="wrap">

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">


			
<span id='tgback-1'>
</span>
 <?php if( get_theme_mod( "tgback-1") != "" ) echo "<style>
#i6m8g{background-image:url(".get_theme_mod( "tgback-1").");} </style>
"?>
<div id="i6m8g">
<div id="i77sn5">
<div id="is2yyh">
<a  id="i04cby" data-highlightable="1" class="aut-link">
</a>
<font id="igdlmk">
<font id="i3y6jk">
TEMA RESPONSIVE PARA WORDPRESS
    
    
    
    
    
    
    
    </font>
</font>
</div>
<div id="idjduh">
</div>
<div id="imowj3">
<i id="ihp96i">
<font id="ip1kpb">
<font id="ifroal">
<font id="is29it">
<font id="irnwdd">
DISEƒÂ‘O 100% RESPONSIVO, Y MODERNO</font>
</font>
</font>
</font>
</i>
</div>
<a href="<?php if( get_theme_mod( "tglink-2") != "" ) {echo get_theme_mod( "tglink-2");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" title="Read more" id="ipnbyj">
<div id="ilkujs">
<span id="tgtext-1">
<?php if( get_theme_mod( "tgtext-1") != "" ) {echo get_theme_mod( "tgtext-1");} else {echo "Leer mÃ¡s";} ?>
</span>
</div>
</a>
</div>
</div>
<div id="imn31m">
</div>
<div id="i2ymn2">
<div id="i06phx">
<div class="aut-autumn-about-image">
<span id="tgimg-1">
<img <?php if( get_theme_mod( "tgimg-1") != "" ) {echo "src='".get_theme_mod( "tgimg-1")."'";} else {echo " src='".get_template_directory_uri()."/images/section_1-ecb.jpg'";} ?>
 id="iwaxbq" />
</span>
</div>
<div class="aut-autumn-about-text">
<div id="i0k4vv">
<span id="tgtext-2">
<?php if( get_theme_mod( "tgtext-2") != "" ) {echo get_theme_mod( "tgtext-2");} else {echo "SOBRE NOSOTROS";} ?>
</span>
</div>
<div id="ix3a14">
</div>
<div id="il1oqj">
<span id="tgtext-3">
<?php if( get_theme_mod( "tgtext-3") != "" ) {echo get_theme_mod( "tgtext-3");} else {echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";} ?>
</span>
</div>
</div>
<div id="ipil3l">
</div>
</div>
</div>
<div id="izz0zj">
</div>
<div id="i40uw7">
<div id="ik2s2t">
<span id="tgtext-4">
<?php if( get_theme_mod( "tgtext-4") != "" ) {echo get_theme_mod( "tgtext-4");} else {echo "CLIENTES FELICES";} ?>
</span>
</div>
<div id="iograc">
</div>
<div id="i2r8yj">
<a target="_blank" href="<?php if( get_theme_mod( "tglink-3") != "" ) {echo get_theme_mod( "tglink-3");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" title="National Geographic" id="itm8tj">
<span id="tgimg-2">
<img <?php if( get_theme_mod( "tgimg-2") != "" ) {echo "src='".get_theme_mod( "tgimg-2")."'";} else {echo " src='".get_template_directory_uri()."/images/ng-logo-838.png'";} ?>
 id="i7l2jd" />
</span>
</a>
<a target="_blank" href="<?php if( get_theme_mod( "tglink-4") != "" ) {echo get_theme_mod( "tglink-4");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" title="Apple" id="iy5d1w">
<span id="tgimg-3">
<img <?php if( get_theme_mod( "tgimg-3") != "" ) {echo "src='".get_theme_mod( "tgimg-3")."'";} else {echo " src='".get_template_directory_uri()."/images/apple-logo-b56.png'";} ?>
 id="i9uvcx" />
</span>
</a>
<a title="Netflix" href="<?php if( get_theme_mod( "tglink-5") != "" ) {echo get_theme_mod( "tglink-5");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" target="_blank" id="i9v385">
<span id="tgimg-4">
<img <?php if( get_theme_mod( "tgimg-4") != "" ) {echo "src='".get_theme_mod( "tgimg-4")."'";} else {echo " src='".get_template_directory_uri()."/images/netflix-logo-e1f.png'";} ?>
 id="iixswy" />
</span>
</a>
<a target="_blank" href="<?php if( get_theme_mod( "tglink-6") != "" ) {echo get_theme_mod( "tglink-6");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" title="Amazon" id="itvkua">
<span id="tgimg-5">
<img <?php if( get_theme_mod( "tgimg-5") != "" ) {echo "src='".get_theme_mod( "tgimg-5")."'";} else {echo " src='".get_template_directory_uri()."/images/amazon-logo-454.png'";} ?>
 id="iupogh" />
</span>
</a>
</div>
</div>
<section class="aut-flex-sect">
<div class="aut-containercards-width">
<div class="aut-flex-title">
<span id="tgtext-5">
<?php if( get_theme_mod( "tgtext-5") != "" ) {echo get_theme_mod( "tgtext-5");} else {echo "WHAT WE DO";} ?>
</span>
</div>
<div id="iwvxrb">
</div>
<div class="aut-cards">
<div class="aut-card" id="i8zfu">
<span id="tgimg-6">
<img <?php if( get_theme_mod( "tgimg-6") != "" ) {echo "src='".get_theme_mod( "tgimg-6")."'";} else {echo " src='".get_template_directory_uri()."/images/tag-1cb.svg'";} ?>
 id="idygy6" />
</span>
<div class="aut-card-body" id="iqaih">
<div class="aut-card-title">
<span id="tgtext-6">
<?php if( get_theme_mod( "tgtext-6") != "" ) {echo get_theme_mod( "tgtext-6");} else {echo "Nuestras Caracteristicas";} ?>
</span>
</div>
<div class="aut-card-sub-title">
<span id="tgtext-7">
<?php if( get_theme_mod( "tgtext-7") != "" ) {echo get_theme_mod( "tgtext-7");} else {echo "Duis aute irure dolor
          ";} ?>
</span>
</div>
<div class="aut-card-desc">
<span id="tgtext-8">
<?php if( get_theme_mod( "tgtext-8") != "" ) {echo get_theme_mod( "tgtext-8");} else {echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
          ";} ?>
</span>
</div>
</div>
</div>
<div class="aut-card">
<span id="tgimg-7">
<img <?php if( get_theme_mod( "tgimg-7") != "" ) {echo "src='".get_theme_mod( "tgimg-7")."'";} else {echo " src='".get_template_directory_uri()."/images/battery-512.svg'";} ?>
  id="i4m4zq" />
</span>
<div class="aut-card-body">
<div class="aut-card-title" id="id7yh">
<span id="tgtext-9">
<?php if( get_theme_mod( "tgtext-9") != "" ) {echo get_theme_mod( "tgtext-9");} else {echo "Nuestras Caracteristicas";} ?>
</span>
</div>
<div class="aut-card-sub-title">
<span id="tgtext-10">
<?php if( get_theme_mod( "tgtext-10") != "" ) {echo get_theme_mod( "tgtext-10");} else {echo "Duis aute irure dolor
          ";} ?>
</span>
</div>
<div class="aut-card-desc">
<span id="tgtext-11">
<?php if( get_theme_mod( "tgtext-11") != "" ) {echo get_theme_mod( "tgtext-11");} else {echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
          ";} ?>
</span>
</div>
</div>
</div>
<div class="aut-card">
<span id="tgimg-8">
<img <?php if( get_theme_mod( "tgimg-8") != "" ) {echo "src='".get_theme_mod( "tgimg-8")."'";} else {echo " src='".get_template_directory_uri()."/images/computer-3eb.svg'";} ?>
  id="ik2spe" />
</span>
<div class="aut-card-body">
<div class="aut-card-title">
<span id="tgtext-12">
<?php if( get_theme_mod( "tgtext-12") != "" ) {echo get_theme_mod( "tgtext-12");} else {echo "Nuestras Caracteristicas";} ?>
</span>
</div>
<div class="aut-card-sub-title">
<span id="tgtext-13">
<?php if( get_theme_mod( "tgtext-13") != "" ) {echo get_theme_mod( "tgtext-13");} else {echo "Duis aute irure dolor
          ";} ?>
</span>
</div>
<div class="aut-card-desc">
<span id="tgtext-14">
<?php if( get_theme_mod( "tgtext-14") != "" ) {echo get_theme_mod( "tgtext-14");} else {echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
          ";} ?>
</span>
</div>
</div>
</div>
<div class="aut-card">
<span id="tgimg-9">
<img <?php if( get_theme_mod( "tgimg-9") != "" ) {echo "src='".get_theme_mod( "tgimg-9")."'";} else {echo " src='".get_template_directory_uri()."/images/eye-603.svg'";} ?>
  id="ikoml4" />
</span>
<div class="aut-card-body">
<div class="aut-card-title">
<span id="tgtext-15">
<?php if( get_theme_mod( "tgtext-15") != "" ) {echo get_theme_mod( "tgtext-15");} else {echo "Nuestras Caracteristicas";} ?>
</span>
</div>
<div class="aut-card-sub-title">
<span id="tgtext-16">
<?php if( get_theme_mod( "tgtext-16") != "" ) {echo get_theme_mod( "tgtext-16");} else {echo "Duis aute irure dolor
          ";} ?>
</span>
</div>
<div class="aut-card-desc">
<span id="tgtext-17">
<?php if( get_theme_mod( "tgtext-17") != "" ) {echo get_theme_mod( "tgtext-17");} else {echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
          ";} ?>
</span>
</div>
</div>
</div>
<div class="aut-card">
<span id="tgimg-10">
<img <?php if( get_theme_mod( "tgimg-10") != "" ) {echo "src='".get_theme_mod( "tgimg-10")."'";} else {echo " src='".get_template_directory_uri()."/images/radio-09f.svg'";} ?>
  id="ikx3yq" />
</span>
<div class="aut-card-body">
<div class="aut-card-title">
<span id="tgtext-18">
<?php if( get_theme_mod( "tgtext-18") != "" ) {echo get_theme_mod( "tgtext-18");} else {echo "Nuestras Caracteristicas";} ?>
</span>
</div>
<div class="aut-card-sub-title">
<span id="tgtext-19">
<?php if( get_theme_mod( "tgtext-19") != "" ) {echo get_theme_mod( "tgtext-19");} else {echo "Duis aute irure dolor
          ";} ?>
</span>
</div>
<div class="aut-card-desc">
<span id="tgtext-20">
<?php if( get_theme_mod( "tgtext-20") != "" ) {echo get_theme_mod( "tgtext-20");} else {echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
          ";} ?>
</span>
</div>
</div>
</div>
<div class="aut-card">
<span id="tgimg-11">
<img <?php if( get_theme_mod( "tgimg-11") != "" ) {echo "src='".get_theme_mod( "tgimg-11")."'";} else {echo " src='".get_template_directory_uri()."/images/song-e9f.svg'";} ?>
  id="ishrt9" />
</span>
<div class="aut-card-body">
<div class="aut-card-title">
<span id="tgtext-21">
<?php if( get_theme_mod( "tgtext-21") != "" ) {echo get_theme_mod( "tgtext-21");} else {echo "Our features";} ?>
</span>
</div>
<div class="aut-card-sub-title">
<span id="i3o61i">
<span id="tgtext-22">
<?php if( get_theme_mod( "tgtext-22") != "" ) {echo get_theme_mod( "tgtext-22");} else {echo "Nuestras Caracteristicas";} ?>
</span>
</span>
</div>
<div class="aut-card-desc">
<span id="tgtext-23">
<?php if( get_theme_mod( "tgtext-23") != "" ) {echo get_theme_mod( "tgtext-23");} else {echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
          ";} ?>
</span>
</div>
</div>
</div>
</div>
</div>
</section>
<span id='tgback-2'>
</span>
 <?php if( get_theme_mod( "tgback-2") != "" ) echo "<style>
#im9n9k{background-image:url(".get_theme_mod( "tgback-2").");} </style>
"?>
<div id="im9n9k">
<div id="is4gds">
<font id="ionhxh" class="gjs-comp-selected">
<font id="idzukl">
<font id="ibk6mi">
<font id="i2fidp">
Descarga nuestro ebook gratis aquƒÂ­</font>
</font>
</font>
</font>
</div>
<a target="_blank" href="<?php if( get_theme_mod( "tglink-7") != "" ) {echo get_theme_mod( "tglink-7");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" title="eBook" id="ib10le">
<div id="ia2vlx">
<font id="i5goji">
<font id="i15ygz">
libro electronico</font>
</font>
</div>
</a>
</div>
<section class="aut-bdg-sect">
<div class="aut-container-width">
<div class="aut-flex-title">
<span id="tgtext-24">
<?php if( get_theme_mod( "tgtext-24") != "" ) {echo get_theme_mod( "tgtext-24");} else {echo "Nuestro Equipo";} ?>
</span>
</div>
<div id="ia8dyq">
</div>
<div class="aut-badges">
<div class="aut-badge">
<span id="tgimg-12">
<img <?php if( get_theme_mod( "tgimg-12") != "" ) {echo "src='".get_theme_mod( "tgimg-12")."'";} else {echo " src='".get_template_directory_uri()."/images/staff1-b58.jpg'";} ?>
  class="aut-badge-avatar" />
</span>
<div class="aut-badge-name">
<font id="i6cbtj">
<font id="irsigf">
CallejƒÂ³n MƒÂ³nica</font>
</font>
</div>
<div id="iq6ag6">
</div>
<div class="aut-badge-role">
<span id="tgtext-25">
<?php if( get_theme_mod( "tgtext-25") != "" ) {echo get_theme_mod( "tgtext-25");} else {echo "Chef";} ?>
</span>
</div>
<a id="ir2ynq" title="Facebook" href="<?php if( get_theme_mod( "tglink-8") != "" ) {echo get_theme_mod( "tglink-8");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" target="_blank">
<span id="tgimg-13">
<img <?php if( get_theme_mod( "tgimg-13") != "" ) {echo "src='".get_theme_mod( "tgimg-13")."'";} else {echo " src='".get_template_directory_uri()."/images/facebook-684.svg'";} ?>
 id="i16it7" />
</span>
</a>
<a id="ixwe8i" href="<?php if( get_theme_mod( "tglink-9") != "" ) {echo get_theme_mod( "tglink-9");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" target="_blank" title="Instagram">
<span id="tgimg-14">
<img <?php if( get_theme_mod( "tgimg-14") != "" ) {echo "src='".get_theme_mod( "tgimg-14")."'";} else {echo " src='".get_template_directory_uri()."/images/insta-5fb.svg'";} ?>
 id="iftqe8" />
</span>
</a>
<a id="icy03n" title="Twitter" target="_blank" href="<?php if( get_theme_mod( "tglink-10") != "" ) {echo get_theme_mod( "tglink-10");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
">
<span id="tgimg-15">
<img <?php if( get_theme_mod( "tgimg-15") != "" ) {echo "src='".get_theme_mod( "tgimg-15")."'";} else {echo " src='".get_template_directory_uri()."/images/twitter-b7f.svg'";} ?>
 id="idv55g" />
</span>
</a>
<a id="inahsh" target="_blank" href="<?php if( get_theme_mod( "tglink-11") != "" ) {echo get_theme_mod( "tglink-11");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" title="LinkedIn">
<span id="tgimg-16">
<img <?php if( get_theme_mod( "tgimg-16") != "" ) {echo "src='".get_theme_mod( "tgimg-16")."'";} else {echo " src='".get_template_directory_uri()."/images/linkedin-372.svg'";} ?>
 id="iee4pa" />
</span>
</a>
</div>
<div class="aut-badge">
<span id="tgimg-17">
<img <?php if( get_theme_mod( "tgimg-17") != "" ) {echo "src='".get_theme_mod( "tgimg-17")."'";} else {echo " src='".get_template_directory_uri()."/images/staff3-191.jpg'";} ?>
  class="aut-badge-avatar" />
</span>
<div class="aut-badge-name">
<span id="tgtext-26">
<?php if( get_theme_mod( "tgtext-26") != "" ) {echo get_theme_mod( "tgtext-26");} else {echo "Tobias FÃ¼nke";} ?>
</span>
</div>
<div id="ifvqek">
</div>
<div class="aut-badge-role">
<span id="tgtext-27">
<?php if( get_theme_mod( "tgtext-27") != "" ) {echo get_theme_mod( "tgtext-27");} else {echo "Baker";} ?>
</span>
</div>
<a title="Facebook" href="<?php if( get_theme_mod( "tglink-12") != "" ) {echo get_theme_mod( "tglink-12");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" target="_blank" id="ikhp4u">
<span id="tgimg-18">
<img <?php if( get_theme_mod( "tgimg-18") != "" ) {echo "src='".get_theme_mod( "tgimg-18")."'";} else {echo " src='".get_template_directory_uri()."/images/facebook-684.svg'";} ?>
  id="igaife" />
</span>
</a>
<a href="<?php if( get_theme_mod( "tglink-13") != "" ) {echo get_theme_mod( "tglink-13");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" target="_blank" title="Instagram" id="i3h6f5">
<span id="tgimg-19">
<img <?php if( get_theme_mod( "tgimg-19") != "" ) {echo "src='".get_theme_mod( "tgimg-19")."'";} else {echo " src='".get_template_directory_uri()."/images/insta-5fb.svg'";} ?>
  id="i6g118" />
</span>
</a>
<a title="Twitter" target="_blank" href="<?php if( get_theme_mod( "tglink-14") != "" ) {echo get_theme_mod( "tglink-14");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" id="idhdpm">
<span id="tgimg-20">
<img <?php if( get_theme_mod( "tgimg-20") != "" ) {echo "src='".get_theme_mod( "tgimg-20")."'";} else {echo " src='".get_template_directory_uri()."/images/twitter-b7f.svg'";} ?>
  id="icv6k7" />
</span>
</a>
<a target="_blank" href="<?php if( get_theme_mod( "tglink-15") != "" ) {echo get_theme_mod( "tglink-15");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" title="LinkedIn" id="isg9sk">
<span id="tgimg-21">
<img <?php if( get_theme_mod( "tgimg-21") != "" ) {echo "src='".get_theme_mod( "tgimg-21")."'";} else {echo " src='".get_template_directory_uri()."/images/linkedin-372.svg'";} ?>
  id="iwzajh" />
</span>
</a>
</div>
<div class="aut-badge">
<span id="tgimg-22">
<img <?php if( get_theme_mod( "tgimg-22") != "" ) {echo "src='".get_theme_mod( "tgimg-22")."'";} else {echo " src='".get_template_directory_uri()."/images/staff4-9c1.jpg'";} ?>
  class="aut-badge-avatar" />
</span>
<div class="aut-badge-name">
<span id="tgtext-28">
<?php if( get_theme_mod( "tgtext-28") != "" ) {echo get_theme_mod( "tgtext-28");} else {echo "Lucille Austero";} ?>
</span>
</div>
<div id="iuahkj">
</div>
<div class="aut-badge-role">
<span id="tgtext-29">
<?php if( get_theme_mod( "tgtext-29") != "" ) {echo get_theme_mod( "tgtext-29");} else {echo "Assistant Chef";} ?>
</span>
</div>
<a title="Facebook" href="<?php if( get_theme_mod( "tglink-16") != "" ) {echo get_theme_mod( "tglink-16");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" target="_blank" id="iikwzk">
<span id="tgimg-23">
<img <?php if( get_theme_mod( "tgimg-23") != "" ) {echo "src='".get_theme_mod( "tgimg-23")."'";} else {echo " src='".get_template_directory_uri()."/images/facebook-684.svg'";} ?>
  id="i2ncqi" />
</span>
</a>
<a href="<?php if( get_theme_mod( "tglink-17") != "" ) {echo get_theme_mod( "tglink-17");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" target="_blank" title="Instagram" id="i4y524">
<span id="tgimg-24">
<img <?php if( get_theme_mod( "tgimg-24") != "" ) {echo "src='".get_theme_mod( "tgimg-24")."'";} else {echo " src='".get_template_directory_uri()."/images/insta-5fb.svg'";} ?>
  id="ied5vl" />
</span>
</a>
<a title="Twitter" target="_blank" href="<?php if( get_theme_mod( "tglink-18") != "" ) {echo get_theme_mod( "tglink-18");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" id="isf1tl">
<span id="tgimg-25">
<img <?php if( get_theme_mod( "tgimg-25") != "" ) {echo "src='".get_theme_mod( "tgimg-25")."'";} else {echo " src='".get_template_directory_uri()."/images/twitter-b7f.svg'";} ?>
  id="i1tf2s" />
</span>
</a>
<a target="_blank" href="<?php if( get_theme_mod( "tglink-19") != "" ) {echo get_theme_mod( "tglink-19");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" title="LinkedIn" id="i5a3kh">
<span id="tgimg-26">
<img <?php if( get_theme_mod( "tgimg-26") != "" ) {echo "src='".get_theme_mod( "tgimg-26")."'";} else {echo " src='".get_template_directory_uri()."/images/linkedin-372.svg'";} ?>
  id="imkpjj" />
</span>
</a>
</div>
<div class="aut-badge">
<span id="tgimg-27">
<img <?php if( get_theme_mod( "tgimg-27") != "" ) {echo "src='".get_theme_mod( "tgimg-27")."'";} else {echo " src='".get_template_directory_uri()."/images/staff5-3c1.jpg'";} ?>
  class="aut-badge-avatar" />
</span>
<div class="aut-badge-name">
<font id="iwlack">
<font id="i74qui">
Buster Bluth</font>
</font>
</div>
<div id="it2rnf">
</div>
<div class="aut-badge-role">
<span id="tgtext-30">
<?php if( get_theme_mod( "tgtext-30") != "" ) {echo get_theme_mod( "tgtext-30");} else {echo "Manager";} ?>
</span>
</div>
<a title="Facebook" href="<?php if( get_theme_mod( "tglink-20") != "" ) {echo get_theme_mod( "tglink-20");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" target="_blank" id="i3n1ov">
<span id="tgimg-28">
<img <?php if( get_theme_mod( "tgimg-28") != "" ) {echo "src='".get_theme_mod( "tgimg-28")."'";} else {echo " src='".get_template_directory_uri()."/images/facebook-684.svg'";} ?>
  id="ime6jc" />
</span>
</a>
<a href="<?php if( get_theme_mod( "tglink-21") != "" ) {echo get_theme_mod( "tglink-21");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" target="_blank" title="Instagram" id="i9byxd">
<span id="tgimg-29">
<img <?php if( get_theme_mod( "tgimg-29") != "" ) {echo "src='".get_theme_mod( "tgimg-29")."'";} else {echo " src='".get_template_directory_uri()."/images/insta-5fb.svg'";} ?>
  id="iee0ky" />
</span>
</a>
<a title="Twitter" target="_blank" href="<?php if( get_theme_mod( "tglink-22") != "" ) {echo get_theme_mod( "tglink-22");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" id="iita6l">
<span id="tgimg-30">
<img <?php if( get_theme_mod( "tgimg-30") != "" ) {echo "src='".get_theme_mod( "tgimg-30")."'";} else {echo " src='".get_template_directory_uri()."/images/twitter-b7f.svg'";} ?>
  id="ihg0nn" />
</span>
</a>
<a target="_blank" href="<?php if( get_theme_mod( "tglink-23") != "" ) {echo get_theme_mod( "tglink-23");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" title="LinkedIn" id="i1y81r">
<span id="tgimg-31">
<img <?php if( get_theme_mod( "tgimg-31") != "" ) {echo "src='".get_theme_mod( "tgimg-31")."'";} else {echo " src='".get_template_directory_uri()."/images/linkedin-372.svg'";} ?>
  id="i394xx" />
</span>
</a>
</div>
<div class="aut-badge">
<span id="tgimg-32">
<img <?php if( get_theme_mod( "tgimg-32") != "" ) {echo "src='".get_theme_mod( "tgimg-32")."'";} else {echo " src='".get_template_directory_uri()."/images/staff6-54f.jpg'";} ?>
  class="aut-badge-avatar" />
</span>
<div class="aut-badge-name">
<span id="tgtext-31">
<?php if( get_theme_mod( "tgtext-31") != "" ) {echo get_theme_mod( "tgtext-31");} else {echo "Maebe FÃ¼nke";} ?>
</span>
</div>
<div id="imnob8">
</div>
<div class="aut-badge-role">
<span id="tgtext-32">
<?php if( get_theme_mod( "tgtext-32") != "" ) {echo get_theme_mod( "tgtext-32");} else {echo "Barista";} ?>
</span>
</div>
<a title="Facebook" href="<?php if( get_theme_mod( "tglink-24") != "" ) {echo get_theme_mod( "tglink-24");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" target="_blank" id="i4nab3">
<span id="tgimg-33">
<img <?php if( get_theme_mod( "tgimg-33") != "" ) {echo "src='".get_theme_mod( "tgimg-33")."'";} else {echo " src='".get_template_directory_uri()."/images/facebook-684.svg'";} ?>
  id="ikabpt" />
</span>
</a>
<a href="<?php if( get_theme_mod( "tglink-25") != "" ) {echo get_theme_mod( "tglink-25");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" target="_blank" title="Instagram" id="i1lftg">
<span id="tgimg-34">
<img <?php if( get_theme_mod( "tgimg-34") != "" ) {echo "src='".get_theme_mod( "tgimg-34")."'";} else {echo " src='".get_template_directory_uri()."/images/insta-5fb.svg'";} ?>
  id="iz6mrz" />
</span>
</a>
<a title="Twitter" target="_blank" href="<?php if( get_theme_mod( "tglink-26") != "" ) {echo get_theme_mod( "tglink-26");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" id="ie84lz">
<span id="tgimg-35">
<img <?php if( get_theme_mod( "tgimg-35") != "" ) {echo "src='".get_theme_mod( "tgimg-35")."'";} else {echo " src='".get_template_directory_uri()."/images/twitter-b7f.svg'";} ?>
  id="i9ugpq" />
</span>
</a>
<a target="_blank" href="<?php if( get_theme_mod( "tglink-27") != "" ) {echo get_theme_mod( "tglink-27");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" title="LinkedIn" id="icuyu4">
<span id="tgimg-36">
<img <?php if( get_theme_mod( "tgimg-36") != "" ) {echo "src='".get_theme_mod( "tgimg-36")."'";} else {echo " src='".get_template_directory_uri()."/images/linkedin-372.svg'";} ?>
  id="iajb7e" />
</span>
</a>
</div>
<div class="aut-badge">
<span id="tgimg-37">
<img <?php if( get_theme_mod( "tgimg-37") != "" ) {echo "src='".get_theme_mod( "tgimg-37")."'";} else {echo " src='".get_template_directory_uri()."/images/staff2-b3d.jpg'";} ?>
  class="aut-badge-avatar" />
</span>
<div class="aut-badge-name">
<font id="icjlwi">
<font id="itimjy">
Barry Zuckerkorn</font>
</font>
</div>
<div id="ifqhui">
</div>
<div class="aut-badge-role">
<span id="tgtext-33">
<?php if( get_theme_mod( "tgtext-33") != "" ) {echo get_theme_mod( "tgtext-33");} else {echo "Mixologist";} ?>
</span>
</div>
<a title="Facebook" href="<?php if( get_theme_mod( "tglink-28") != "" ) {echo get_theme_mod( "tglink-28");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" target="_blank" id="iz6zex">
<span id="tgimg-38">
<img <?php if( get_theme_mod( "tgimg-38") != "" ) {echo "src='".get_theme_mod( "tgimg-38")."'";} else {echo " src='".get_template_directory_uri()."/images/facebook-684.svg'";} ?>
  id="ixiu79" />
</span>
</a>
<a href="<?php if( get_theme_mod( "tglink-29") != "" ) {echo get_theme_mod( "tglink-29");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" target="_blank" title="Instagram" id="izf7pw">
<span id="tgimg-39">
<img <?php if( get_theme_mod( "tgimg-39") != "" ) {echo "src='".get_theme_mod( "tgimg-39")."'";} else {echo " src='".get_template_directory_uri()."/images/insta-5fb.svg'";} ?>
  id="ier5h7" />
</span>
</a>
<a title="Twitter" target="_blank" href="<?php if( get_theme_mod( "tglink-30") != "" ) {echo get_theme_mod( "tglink-30");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" id="iavlsl">
<span id="tgimg-40">
<img <?php if( get_theme_mod( "tgimg-40") != "" ) {echo "src='".get_theme_mod( "tgimg-40")."'";} else {echo " src='".get_template_directory_uri()."/images/twitter-b7f.svg'";} ?>
  id="ifumtb" />
</span>
</a>
<a target="_blank" href="<?php if( get_theme_mod( "tglink-31") != "" ) {echo get_theme_mod( "tglink-31");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" title="LinkedIn" id="ivxd2e">
<span id="tgimg-41">
<img <?php if( get_theme_mod( "tgimg-41") != "" ) {echo "src='".get_theme_mod( "tgimg-41")."'";} else {echo " src='".get_template_directory_uri()."/images/linkedin-372.svg'";} ?>
  id="iu68i3" />
</span>
</a>
</div>
</div>
</div>
</section>
			
<section>
  <div>
    <div>
    <font id="irnwdd">
        Nuestra Ubicación</font>
    </div>
    <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.492389610128!2d-58.520663!3d-34.6169953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb7d8044bbe21%3A0xfc2651abdaf8939f!2sTinogasta%205286%2C%20C1417%20CABA!5e0!3m2!1ses-419!2sar!4v1676348038882!5m2!1ses-419!2sar" width="900" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  
</section>


		</main>
<!-- #main -->

	</div>
<!-- #primary -->

	<?php get_sidebar(); ?>

</div>
<!-- .wrap -->


<?php 
 $customfooter=0;
 foreach($todoslosthememods as $key =>
 $value)
	{
	   if(preg_match('/^nt_featured_Foopages/', $key))
	   {
		   if ($customfooter==0){
				$menunumber=str_replace("nt_featured_Foopages","",$key);			
				$idpageactual=$post->
ID;			
				if (in_array($idpageactual, $value)) { //Assigned to this page
					get_footer("custom$menunumber");
					$customfooter=1;
				}
				if (in_array("123454321", $value)) { //Assigned to all pages
					get_footer("custom$menunumber");
					$customfooter=1;
				}
				if (in_array("0", $value)) { //Assigned to no pages
					//get_footer("custom$menunumber");
					$customfooter=0;
				}
		   } 			
	   }
	}	
if ($customfooter==0) get_footer("");
