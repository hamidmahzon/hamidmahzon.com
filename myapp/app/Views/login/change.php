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
            <a href="<?=base_url()?>" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</a>
            <img src="<?=base_url('assets/img/logo.png')?>" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
            <strong class="w3-col w3-text-blue w3-large"><?=lang('app.cpassword')?></strong>
            <?php if(@$lfaild)
            {?>
                <strong class="w3-text-red w3-col"><?=lang('app.lfaild')?></strong>
            <?php
            }?>
            
        </div>

        <form class="w3-container" action="<?=base_url('cingpassword')?>" method="post">
            <div class="w3-section">
            <label><b><?=lang('app.npassword')?></b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="<?=lang('app.npassword')?>" name="password" required>
            <label><b><?=lang('app.rnpassword')?></b></label>
            <input class="w3-input w3-border" type="password" placeholder="<?=lang('app.rnpassword')?>" name="npassword" required>
            <button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit"><?=lang('app.cpassword')?></button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>