<?php
    $lang   = session('lang');
    $color  = session()->get('color');
    $ralign = 'right';
    $align  = 'left';
    $dir    = '';
    $name   = 'namee';
    $note   = 'notee';

    if($lang == 'fa')
    {
        $align = 'right';
        $ralign = 'left';
        $dir    = 'rtl';
        $name   = 'namep';
        $note   = 'notep';
    }
    
    if(!$color)
    {
        $color  = 'w3-light-grey';
    }
?>


<?= $this->extend('home') ?>

<?= $this->section('title') ?>
	<?=lang('app.hm').': '.lang('app.note')?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Container -->
  <!-- The Grid -->
	<?php if(sess()->get('login'))
	{?>
		<button class="w3-button w3-large w3-circle w3-teal" title="<?=lang('app.newPost')?>" onclick="$.get('<?=base_url('add/note')?>', function(data, status){$('#target').html(data).show();});"><i class="fa fa-plus"></i></button>
	<?php
	}?>
    <div class="w3-container w3-row-padding">
        <h1 class="w3-center"><?=lang('app.note')?></h1>
          <div class="w3-row-padding">
        <form method='get' action="note" id="searchForm">
	     	<input type='text' name='search' value='<?=$search ?>' class="w3-input w3-white w3-large" placeholder="<?=lang('app.type_search')?>">
	   	</form>
    <?php 
    foreach($records as $r)
    {?>
        <div class="w3-container w3-margin-bottom w3-topbar">
        <h2 title="<?=$r[$name].' '.lang('app.note').' '.lang('app.hm')?>" class="w3-wide w3-center">
            <?=$r[$name]?> 
        <a title="lang('app.wshare') <?=$r[$name]?> lang('app.note') lang('app.hm')" class="" target="_blank" href="https://api.whatsapp.com/send?text=https://hamidmahzon.com/note" data-action="share/whatsapp/share"> 
            <i class="fab fa-whatsapp w3-hover-text-green w3-large"> </i>
        </a>
        </h2>
        <p class="w3-opacity w3-center"><i><span class="far fa-edit"></span> <?php $date=date_create($r['created_at']); echo date_format($date,"l-d-F-Y"); ?></i></p>
        <p class="w3-large w3-center" title="<?=$r[$name]?>: <?=strip_tags($r[$note])?> lang('app.note') lang('app.hm')"><?=$r[$note]?></p>
        <?php if(sess()->get('login'))
        {?>
            <button type="button" class="w3-button w3-large w3-teal" onclick="$.get('<?=base_url('edit/note/'.$r['id'])?>', function(data, status){$('#target').html(data).show();});"><i class="fas fa-edit"></i></button>
        <?php
        }?>
    </div>
    <?php
        }?>
    <!-- Left Column -->
    <?=$pager->links()?>

  <!-- End Grid -->
  </div>
  </div>
  
<?= $this->endSection() ?>