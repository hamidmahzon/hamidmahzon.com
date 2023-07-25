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

<div class="w3-modal-content w3-card-4 w3-animate-opacity">
    <span onclick="$('.w3-modal').hide();" class="fas fa-times w3-padding-small w3-text-red w3-button w3-hover-red w3-display-top<?=$ralign?>" title="<?=lang('app.close')?>"></span>
    <br>
    <form class="w3-container" action="<?=base_url('edit/video/'.$record[0]->id)?>" method="post" id="frm" name="frm">
        <div class="w3-row-padding w3-text-black">
            <div class="w3-third w3-<?=$align?>">
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="<?=lang('app.namep')?>" name="namep" id="namep" value="<?=$record[0]->namep?>" autofocus>
            </div>
            <div class="w3-third w3-<?=$align?>">
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="<?=lang('app.namee')?>" name="namee" id="namee" value="<?=$record[0]->namee?>">
            </div>
            <div class="w3-third w3-<?=$align?>">
                <select name="category" class="w3-select w3-border w3-margin-bottom">
                    <option selected value="ecomment"><?=lang('app.ecomment')?></option>
                    <option value="interview"><?=lang('app.interview')?></option>
                    <option value="activites"><?=lang('app.activites')?></option>
                </select>
            </div>
            <div class="w3-half">
                <input class="w3-input w3-border w3-margin-bottom" type="text" name="link" id="link" value="<?=$record[0]->link?>">
            </div>
            
			<div class="w3-half">
                <input class="w3-input w3-border w3-margin-bottom" type="date" value="<?=explode(" ",$record[0]->created_at)[0]?>" name="created_at" id="created_at">
            </div>			

            <?= csrf_field() ?>
            <button type="submit" class="w3-button w3-half w3-teal w3-section w3-padding fas fa-save"> <?=lang('app.save')?></button>
            <button class="w3-button w3-half w3-khaki w3-section w3-padding fas fa-undo" type="reset"> <?=lang('app.reset')?></button>
        </div>
    </form>
</div>
