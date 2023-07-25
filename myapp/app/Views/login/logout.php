<?php
	$align	= 'left';
	$ralign	= 'right';
  $name   = 'namee';
	if(session()->get('lang') == 'pr')
	{
		$align	= 'right';
		$ralign	= 'left';		
    $name   = 'namep';
	}
?>
<?= $this->extend('default') ?>
<?= $this->section('title') ?>
<?=lang('app.wc_narsess')?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="w3-modal w3-show w3-light-grey">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
        <div class="w3-center"><br>
            <img src="<?=base_url('assets/img/logo.png')?>" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
            <strong class="w3-col w3-text-red w3-large"><?=lang('app.logout')?></strong>
        <form class="w3-container" action="<?=base_url('logouting')?>" method="post">
            <div class="w3-section">
                <button class="w3-<?=$align?> w3-margin-bottom w3-button w3-circle w3-blue w3-padding" type="submit"><?=lang('app.yes')?></button>
                <a href="<?=base_url()?>" class="w3-<?=$ralign?> w3-margin-bottom w3-button w3-circle w3-red w3-padding"><?=lang('app.no')?></a>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>