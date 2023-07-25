<?php
    $lang   = session('lang');
    $color  = session()->get('color');
    $ralign = 'right';
    $align  = 'left';
    $dir    = '';
    $name   = 'namee';
    $slogan = 'slogane';
    $desc   = 'descriptione';

    if($lang == 'fa')
    {
        $align = 'right';
        $ralign = 'left';
        $dir    = 'rtl';
        $name   = 'namep';
        $slogan = 'sloganp';
        $desc   = 'descriptionp';
    }
    
    if(!$color)
    {
        $color  = 'w3-light-grey';
    }
?>


<?= $this->extend('home') ?>

<?= $this->section('title') ?>
	<?=lang('app.hm').': '.lang('app.pro')?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Container -->
  <!-- The Grid -->
    <div class="w3-container">
        <h1 class="w3-center"><?=lang('app.pro')?></h1>
        <?php
        foreach($records as $r)
        {?>
        <div class="w3-col w3-margin-top">
            <div class="w3-card w3-padding">
            <?php
            if($r->link)
            {?>
            <a href="<?=$r->link?>" target="_blank">
                <img src="<?=base_url('assets/img/'.$r->img)?>" class="w3-col l1 m2 s3 w3-circle w3-<?=$ralign?>" alt="<?=$r->$name?>" />
            </a>
            <?php    
            }
            else
            {?>
                <img src="<?=base_url('assets/img/'.$r->img)?>" class="w3-col l1 m2 s3 w3-circle w3-<?=$ralign?>" alt="<?=$r->$name?>"/>
            <?php
            }?>
            <h2 class="w3-<?=$align?>-align"><?=$r->$name?></h2>
            <h3 class="w3-<?=$align?>-align"><?=$r->$slogan?></h3>
            <h4 class="w3-<?=$align?>-align"><?=$r->date?></h4>
            <h5 class="w3-<?=$align?>-align"><?=$r->$desc?></h5>
            </div>
        </div>
        <?php
        }?>
    <!-- Left Column -->

  <!-- End Grid -->
  </div>
  
<?= $this->endSection() ?>