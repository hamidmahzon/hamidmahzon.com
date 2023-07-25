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
	<?=lang('app.hm')?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="w3-modal w3-show w3-light-grey">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
        <div class="w3-center"><br>
            <a href="<?=base_url()?>" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</a>
            <img src="<?=base_url('assets/img/logo.svg')?>" style="width:30%" class="w3-circle w3-margin-top">
            <?php if(@$lfaild)
            {?>
                <strong class="w3-text-red w3-col"><?=lang('app.lfaild')?></strong>
            <?php
            }?>
            
        </div>

        <form class="w3-container" action="<?=base_url('logging')?>" method="post">
            <div class="w3-section">
            <label><b><?=lang('app.email')?></b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="<?=lang('app.email')?>" name="email" required>
            <label><b><?=lang('app.password')?></b></label>
            <input class="w3-input w3-border" type="password" placeholder="<?=lang('app.password')?>" name="password" required>
            <button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit"><?=lang('app.login')?> <i class="fas fa-sign-in-alt"></i></button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>