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
        <title>Hamid Mahzon (ZERO) حمید محزون (زیرو)</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Keywords" content="<?=lang('app.keywords')?>">
        <meta name="Description" content="<?=lang('app.desc')?>">
        <meta name="author" content="Hamid Mahzon (ZERO)">
    
        <link rel = "icon" href="<?=base_url('assets/img/logo.svg')?>" type = "image/x-icon">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Rich-Text-Editor-jQuery-RichText/richtext.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	   <script src="https://kit.fontawesome.com/83fba5cb4a.js" crossorigin="anonymous"></script>
	
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
            }
            
            a:hover
            {
                text-decoration: none;
            }
            
            @font-face 
            {
                src: url('<?=base_url('/assets/font/BBCN.ttf')?>'); 
            }
        </style>


    </head>
<body style="font-family: BBCNassim; -webkit-user-select: none!important;" class="<?=$color?>" dir="<?=$dir?>">
    <div class="w3-container w3-top">
        <a href="<?=base_url('lang')?>" class="w3-display-top<?=$align?> w3-margin w3-text-light-grey w3-large" title="<?=lang('app.'.$lang)?>"><b class="fa fa-language"></b></a>
        <a href="<?=base_url('color/'.$color)?>" class="w3-display-top<?=$ralign?> w3-margin w3-text-light-grey w3-large w3-<?=$ralign?>" title="<?=lang('app.'.$color)?>"><b class="fa fa-adjust"></b></a>
    </div>
    <div class="w3-teal w3-container w3-margin-bottom w3-row-padding">
        <div class="w3-col m1 w3-hide-small w3-<?=$align?>">
            <img src="<?=base_url('assets/img/logo.svg')?>" class="w3-circle w3-margin w3-image" alt="<?=lang('app.hm')?>">
        </div>
        <div class="w3-col m11 w3-padding w3-<?=$align?>-align">
            <br>
            <h1><?=lang('app.hm')?></h1>
            <h3><?=lang('app.hm_desc')?></h3>
        </div>
    </div>
    <br>
<div class="w3-content w3-margin-top" style="max-width:1400px; min-height:640px;">
  <div class="w3-row-padding">

        <div class="w3-<?=$align?> w3-col l3 m4 s12 w3-margin-top">
        <div class="w3-card-4">
            <header class="w3-container w3-black w3-center">
                <h3><?=lang('app.note')?></h3>
            </header>
            <div class="w3-container">
                <p class="w3-large w3-<?=$align?>-align" title="<?=lang('app.note_decs')?>"><?=lang('app.note_decs')?></p>
            </div>
            <a href="<?=base_url('note');?>" class="w3-button w3-block w3-teal w3-large"><i class="fas fa-book-open"></i> <?=lang('app.reading')?></a>
        </div>      
        </div>      
      
        <div class="w3-<?=$align?> w3-col l3 m4 s12 w3-margin-top">
        <div class="w3-card-4">
            <header class="w3-container w3-black w3-center">
                <h3><?=lang('app.video')?></h3>
            </header>
            <div class="w3-container">
                <p class="w3-large w3-<?=$align?>-align" title="<?=lang('app.video_decs')?>"><?=lang('app.video_decs')?></p>
            </div>
            <a href="<?=base_url('video');?>" title="<?=lang('app.watch')?>" class="w3-button w3-block w3-teal w3-large"><i class="fas fa-video	"></i> <?=lang('app.watch')?></a>
        </div>      
        </div>             
      
      <div class="w3-<?=$align?> w3-col l3 m4 s12 w3-margin-top">
        <div class="w3-card-4">
            <header class="w3-container w3-black w3-center">
                <h3><?=lang('app.pro')?></h3>
            </header>
            <div class="w3-container">
                <p class="w3-large w3-<?=$align?>-align" title="<?=lang('app.pro_decs')?>"><?=lang('app.pro_decs')?></p>
            </div>
            <a href="<?=base_url('project')?>" title="<?=lang('app.hm').': '.lang('app.pro')?>" class="w3-button w3-block w3-teal w3-large"><i class="fas fa-eye"></i> <?=lang('app.expand')?></a>
        </div>      
        </div>           
      
      <div class="w3-<?=$align?> w3-col l3 m4 s12 w3-margin-top">
        <div class="w3-card-4">
            <header class="w3-container w3-black w3-center">
                <h3><?=lang('app.resume')?></h3>
            </header>
            <div class="w3-container">
                <p class="w3-large w3-<?=$align?>-align" title="<?=lang('app.pro_decs')?>"><?=lang('app.resume_decs')?></p>
            </div>
            <a href="<?=base_url('resume')?>" title="<?=lang('app.hm').': '.lang('app.resume')?>" target="_blank" class="w3-button w3-block w3-teal w3-large"><i class="fas fa-clipboard-list"></i> <?=lang('app.review')?></a>
        </div>      
        </div>      
      

  <!-- End Grid -->
  </div>
  </div>
  <footer class="w3-container w3-teal w3-center w3-margin-top">
	<a href="<?=base_url('assets/img/wc2')?>" target="_blank">
		<i class="fab fa-weixin w3-hover-text-green w3-large w3-padding-small"></i>
	</a>
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
</body>
</html>