<?php
    $lang   = session('lang');
    $color  = session()->get('color');
    $ralign  = 'right';
    $align = 'left';
    $dir    = 'ltr';

    if($lang == 'fa')
    {
        $align = 'right';
        $ralign  = 'left';
        $dir    = 'rtl';
    }
    
    if(!$color)
    {
        $color  = 'w3-light-grey';
    }
?>

<!doctype html>
<html>
    <head>
        <meta name="author" content="Hamid Mahzon (ZERO)">
        <title><?= $this->renderSection('title') ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Keywords" content="<?=lang('app.keywords')?>">
        <meta name="Description" content="<?=lang('app.desc')?>">
    
        <link rel = "icon" href="<?=base_url('assets/img/logo.svg')?>" type = "image/x-icon">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Rich-Text-Editor-jQuery-RichText/richtext.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	   <script src="https://kit.fontawesome.com/83fba5cb4a.js" crossorigin="anonymous"></script>
          <style>.async-hide { opacity: 0 !important} </style>
    <script>
            (function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date; h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')}; (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;})(window,document.documentElement,'async-hide','dataLayer',4000,
            {'CONTAINER_ID':true});
    </script>
    <script src="https://www.googleoptimize.com/optimize.js?id=GTM-KNMK2QW"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://www.jqueryscript.net/demo/Rich-Text-Editor-jQuery-RichText/jquery.richtext.js"></script>
	<script src="https://kit.fontawesome.com/83fba5cb4a.js" crossorigin="anonymous"></script>
	
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7677936236402031"
     crossorigin="anonymous"></script>
    
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-F81GMT9514"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-F81GMT9514');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-55TWGXW');</script>
<!-- End Google Tag Manager -->

<meta name="google-site-verification" content="uSotm0JtkdjYr80XSNhlEaLmBY4mhDNKJ7tNFpNH00g" />


<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
        <style>
            a{
                color: inherit;
                text-decoration: none;    
            }
            
            a:hover{
                color: inherit;
                text-decoration: none;
            }
            
            @font-face 
            {
                src: url('<?=base_url('/assets/font/BBCN.ttf')?>'); 
            }
            
            .video-container 
            {
                position: relative;
                padding-bottom: 56.25%;
                padding-top: 30px; height: 0; overflow: hidden;
            }
 
            .video-container iframe,
            .video-container object,
            .video-container embed 
            {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }            
        </style>

    </head>
<body style="font-family: BBCNassim; -webkit-user-select: none!important;"  class="<?=$color?>" dir="<?=$dir?>">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55TWGXW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<nav class="w3-b-topar w3-teal w3-hide-small w3-padding w3-<?=$align?>-align">
    <?php if(session()->get('login'))
    {?>
    <div class="w3-dropdown-hover">
        <button type="button" class="w3-bar-item w3-button w3-xlarge w3-hide-small fa fa-user w3-circle"></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <b class="w3-bar-item w3-button"><?=lang('app.hi')?>: <?=session('name')?></b>
            <a href="logout" class="w3-bar-item w3-button">Logout</a>
        </div>
    </div>
    <?php
    }
    else
    {?>
        <img src="<?=base_url('assets/img/logo.svg')?>" class="w3-hide-medium w3-hide-small w3-image w3-circle w3-border" style="width:3%; pointer-events: none" alt="<?=lang('app.hm')?>"/>
    <?php
    }?>
        <a href="<?=base_url()?>" class="w3-bar-item w3-button w3-large w3-<?=$align?>bar"><b class="fa fa-home w3-large"></b> <?=lang('app.home')?></a>
        <a href="<?=base_url('project')?>" class="w3-bar-item w3-button w3-large w3-<?=$align?>bar"><b class="fas fa-code w3-large"></b> <?=lang('app.pro')?></a>
        <a href="<?=base_url('resume')?>" target="_blank" class="w3-bar-item w3-button w3-large w3-<?=$align?>bar"><b class="far fa-address-card w3-large"></b> <?=lang('app.resume')?></a>
        <a href="<?=base_url('video')?>" class="w3-bar-item w3-button w3-large w3-<?=$align?>bar"><b class="fas fa-photo-video w3-large"></b> <?=lang('app.video')?></a>
        <a href="<?=base_url('note')?>" class="w3-bar-item w3-button w3-large w3-<?=$align?>bar"><b class="fas fa-book-dead w3-large"></b> <?=lang('app.note')?></a>

        <a href="<?=base_url('lang')?>" class="w3-bar-item w3-margin-top w3-margin-<?=$ralign?> w3-text-light-grey w3-large w3-<?=$ralign?>" title="<?=lang('app.'.$lang)?>"><b class="fa fa-language"></b></a>
        <a href="<?=base_url('color/'.$color)?>" class="w3-bar-item w3-margin-top w3-margin-<?=$ralign?> w3-text-light-grey w3-large w3-<?=$ralign?>" title="<?=lang('app.'.$color)?>"><b class="fa fa-adjust"></b></a>
    </nav>
    
    <nav class="w3-b-topar w3-teal w3-hide-large w3-hide-medium w3-padding w3-<?=$align?>-align w3-card">
        <a href="<?=base_url()?>" class="w3-bar-item w3-button w3-large w3-center w3-block"><b class="fa fa-home w3-large"></b> <?=lang('app.home')?></a>
        <a href="<?=base_url('project')?>" class="w3-bar-item w3-button w3-large w3-center w3-block"><b class="fas fa-code w3-large"></b> <?=lang('app.pro')?></a>
        <a href="<?=base_url('resume')?>" target="_blank" class="w3-bar-item w3-button w3-large w3-center w3-block"><b class="far fa-address-card w3-large"></b> <?=lang('app.resume')?></a>
        <a href="<?=base_url('video')?>" class="w3-bar-item w3-button w3-large w3-center w3-block"><b class="fas fa-photo-video w3-large"></b> <?=lang('app.video')?></a>
        <a href="<?=base_url('note')?>" class="w3-bar-item w3-button w3-large w3-center w3-block"><b class="fas fa-book-dead w3-large"></b> <?=lang('app.note')?></a>
    </nav>
    <div class="w3-container w3-top">
        <a href="<?=base_url('lang')?>" class="w3-display-top<?=$align?> w3-margin w3-text-light-grey w3-large w3-hide-large w3-hide-medium" title="<?=lang('app.'.$lang)?>"><b class="fa fa-language"></b></a>
        <a href="<?=base_url('color/'.$color)?>" class="w3-display-top<?=$ralign?> w3-margin w3-text-light-grey w3-large w3-<?=$ralign?> w3-hide-large w3-hide-medium" title="<?=lang('app.'.$color)?>"><b class="fa fa-adjust"></b></a>
    </div>
    
<div class="w3-content w3-margin-top" style="max-width:1400px; min-height:640px;">
    <?= $this->renderSection('content') ?>
</div>
<footer class="w3-container w3-teal w3-center w3-margin-top">
	<a href="https://www.facebook.com/HamidMahzon0/" target="_blank">
		<i class="fa fa-facebook-official w3-hover-text-blue w3-large w3-padding-small"></i>
	</a>
	<a href="https://www.instagram.com/hamidmahzon0?utm_source=qr" target="_blank">
		<i class="fa fa-instagram w3-hover-text-red w3-large w3-padding-small"></i>
	</a>
	<a href="https://www.linkedin.com/in/hamidmahzon/" target="_blank">
		<i class="fa fa-linkedin w3-hover-text-blue w3-large w3-padding-small"></i>
	</a>
  <p><i class="fas fa-code"></i> <a href="mailto:zero@hamidmahzon">Hamid Mahzon</a></p>
</footer>

    
	    <div id="target" class="w3-modal"></div>
	    <div id="loadding" class="w3-modal"></div>
    <?php if(session()->has('flash'))
    {?>    
        <div class="w3-modal flash_target" style="display:block">
        <div class="w3-modal-content">
        <div class="w3-container w3-large">
            <button type="button" class="w3-display-top<?=$ralign?> w3-padding-small w3-text-red w3-button" onclick="$('.w3-modal').remove();"><i class="fa fa-times"></i></button>
            <?=session()->get('flash')?>
        </div>
        </div>
        </div>

	<script>
	setTimeout(myFunction, 4000);
	function myFunction() 
	{
		$('.w3-modal').hide();
	}
	</script>
    <?php 
    }?>
    
    <script>
        function load()
        {
            $('#loadding').html("<img src='<?=base_url('assets/img/load.gif')?>' class='w3-circle w3-display-topmiddle w3-image w3-margin-top'>").show();;
        }
    
    </script>
</body>
</html>