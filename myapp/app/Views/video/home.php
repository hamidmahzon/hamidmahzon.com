<?php
    $lang   = session('lang');
    $color  = session()->get('color');
    $ralign = 'right';
    $align  = 'left';
    $dir    = '';
    $name   = 'namee';
    $desc   = 'descriptione';

    if($lang == 'fa')
    {
        $align = 'right';
        $ralign = 'left';
        $dir    = 'rtl';
        $name   = 'namep';
        $desc   = 'descriptionp';
    }
    
    if(!$color)
    {
        $color  = 'w3-light-grey';
    }
?>


<?= $this->extend('home') ?>

<?= $this->section('title') ?>
	<?=lang('app.hm').': '.lang('app.video')?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Container -->
  <!-- The Grid -->
<h1 class="w3-center"><?=lang('app.video')?></h1>
<?php if(sess()->get('login'))
	{?>
		<button class="w3-button w3-large w3-circle w3-teal" title="<?=lang('app.newPost')?>" onclick="$.get('<?=base_url('add/video')?>', function(data, status){$('#target').html(data).show();});"><i class="fa fa-plus"></i></button>
	<?php
    }?>
    
    <div class="w3-container w3-row-padding">

    <?php 
    foreach($records as $r)
    {
	$v = explode('/embed/',$r->link);
	?>
    <div class="w3-col l4 m6 s12 w3-margin-bottom w3-<?=$align?>">
    <div class="w3-card w3-container">
    <h4 class="w3-<?=$align?>-align"><?=$r->$name?></h4>
        <div class="video-container">
            <iframe src="<?=$r->link?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <a href="https://www.youtube5s.com/watch?v=<?=$v[1]?>" target="_blank" class="w3-xlarge ns-pointer w3-<?=$align?> w3-margin-<?=$ralign?> w3-margin-top w3-margin-bottom w3-hover-text-teal fas fa-download" title="<?=lang('app.download').' '.$r->$name.' '.lang('app.video').' '.lang('app.hm')?> "></a>
        <?php if(sess()->get('login'))
	   {?>
            <b onclick="$.get('<?=base_url('edit/video/'.$r->id)?>', function(data, status){$('#target').html(data).show();});" class="w3-<?=$ralign?> w3-margin-<?=$align?> w3-margin-top w3-margin-bottom w3-hover-text-teal"> <i class="w3-xlarge fas fa-edit"></i></b>
        <?php
	   }?>
    </div>
    </div>
    <?php
        }?>
    <!-- Left Column -->

  <!-- End Grid -->
  </div>
  
<?= $this->endSection() ?>