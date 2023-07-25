<head>    
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Rich-Text-Editor-jQuery-RichText/richtext.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://www.jqueryscript.net/demo/Rich-Text-Editor-jQuery-RichText/jquery.richtext.js"></script>
</head>

  <script>
        
        $(document).ready(function() 
        {
         
        
        
        $('.content').richText({
  // text formatting
  bold: true,
  italic: false,
  underline: true,

  // text alignment
  leftAlign: true,
  centerAlign: true,
  rightAlign: true,
  justify: true,

  // lists
  ol: false,
  ul: false,

  // title
  heading: false,

  // fonts
  fonts: true,
  fontList: ["Arial",
    "Arial Black",
    "Comic Sans MS",
    "Courier New",
    "Geneva",
    "Georgia",
    "Helvetica",
    "Impact",
    "Lucida Console",
    "Tahoma",
    "Times New Roman",
    "Verdana"
  ],
  fontColor: true,
  fontSize: true,

  // uploads
  imageUpload: false,
  fileUpload: false,

  // link
  urls: false,

  // tables
  table: false,

  // code
  removeStyles: true,
  code: false,

  // colors
  colors: [],

  // dropdowns
  fileHTML: '',
  imageHTML: '',

  // translations
  translations: {
    'title': 'Title',
    'white': 'White',
    'black': 'Black',
    'brown': 'Brown',
    'beige': 'Beige',
    'darkBlue': 'Dark Blue',
    'blue': 'Blue',
    'lightBlue': 'Light Blue',
    'darkRed': 'Dark Red',
    'red': 'Red',
    'darkGreen': 'Dark Green',
    'green': 'Green',
    'purple': 'Purple',
    'darkTurquois': 'Dark Turquois',
    'turquois': 'Turquois',
    'darkOrange': 'Dark Orange',
    'orange': 'Orange',
    'yellow': 'Yellow',
    'imageURL': 'Image URL',
    'fileURL': 'File URL',
    'linkText': 'Link text',
    'url': 'URL',
    'size': 'Size',
    'responsive': '<a href="https://www.jqueryscript.net/tags.php?/Responsive/">Responsive</a>',
    'text': 'Text',
    'openIn': 'Open in',
    'sameTab': 'Same tab',
    'newTab': 'New tab',
    'align': 'Align',
    'left': 'Left',
    'justify': 'Justify',
    'center': 'Center',
    'right': 'Right',
    'rows': 'Rows',
    'columns': 'Columns',
    'add': 'Add',
    'pleaseEnterURL': 'Please enter an URL',
    'videoURLnotSupported': 'Video URL not supported',
    'pleaseSelectImage': 'Please select an image',
    'pleaseSelectFile': 'Please select a file',
    'bold': 'Bold',
    'italic': 'Italic',
    'underline': 'Underline',
    'alignLeft': 'Align left',
    'alignCenter': 'Align centered',
    'alignRight': 'Align right',
    'addOrderedList': 'Add ordered list',
    'addUnorderedList': 'Add unordered list',
    'addHeading': 'Add Heading/title',
    'addFont': 'Add font',
    'addFontColor': 'Add font color',
    'addFontSize': 'Add font size',
    'addImage': 'Add image',
    'addVideo': 'Add video',
    'addFile': 'Add file',
    'addURL': 'Add URL',
    'addTable': 'Add table',
    'removeStyles': 'Remove styles',
    'code': 'Show HTML code',
    'undo': 'Undo',
    'redo': 'Redo',
    'close': 'Close'
  },

  // privacy
  youtubeCookies: false,

  // dev settings
  useSingleQuotes: false,
  height: 0,
  heightPercentage: 0,
  id: "",
  class: "",
  useParagraph: false,
  maxlength: 0,

  // callback function after init
  callback: undefined
});



$('.content1').richText({
  // text formatting
  bold: true,
  italic: false,
  underline: false,

  // text alignment
  leftAlign: true,
  centerAlign: true,
  rightAlign: true,
  justify: true,

  // lists
  ol: false,
  ul: false,

  // title
  heading: false,

  // fonts
  fonts: true,
  fontList: ["Arial",
    "Arial Black",
    "Comic Sans MS",
    "Courier New",
    "Geneva",
    "Georgia",
    "Helvetica",
    "Impact",
    "Lucida Console",
    "Tahoma",
    "Times New Roman",
    "Verdana"
  ],
  fontColor: true,
  fontSize: true,

  // uploads
  imageUpload: false,
  fileUpload: false,

  // link
  urls: false,

  // tables
  table: false,

  // code
  removeStyles: true,
  code: false,

  // colors
  colors: [],

  // dropdowns
  fileHTML: '',
  imageHTML: '',

  // translations
  translations: {
    'title': 'Title',
    'white': 'White',
    'black': 'Black',
    'brown': 'Brown',
    'beige': 'Beige',
    'darkBlue': 'Dark Blue',
    'blue': 'Blue',
    'lightBlue': 'Light Blue',
    'darkRed': 'Dark Red',
    'red': 'Red',
    'darkGreen': 'Dark Green',
    'green': 'Green',
    'purple': 'Purple',
    'darkTurquois': 'Dark Turquois',
    'turquois': 'Turquois',
    'darkOrange': 'Dark Orange',
    'orange': 'Orange',
    'yellow': 'Yellow',
    'imageURL': 'Image URL',
    'fileURL': 'File URL',
    'linkText': 'Link text',
    'url': 'URL',
    'size': 'Size',
    'responsive': '<a href="https://www.jqueryscript.net/tags.php?/Responsive/">Responsive</a>',
    'text': 'Text',
    'openIn': 'Open in',
    'sameTab': 'Same tab',
    'newTab': 'New tab',
    'align': 'Align',
    'left': 'Left',
    'justify': 'Justify',
    'center': 'Center',
    'right': 'Right',
    'rows': 'Rows',
    'columns': 'Columns',
    'add': 'Add',
    'pleaseEnterURL': 'Please enter an URL',
    'videoURLnotSupported': 'Video URL not supported',
    'pleaseSelectImage': 'Please select an image',
    'pleaseSelectFile': 'Please select a file',
    'bold': 'Bold',
    'italic': 'Italic',
    'underline': 'Underline',
    'alignLeft': 'Align left',
    'alignCenter': 'Align centered',
    'alignRight': 'Align right',
    'addOrderedList': 'Add ordered list',
    'addUnorderedList': 'Add unordered list',
    'addHeading': 'Add Heading/title',
    'addFont': 'Add font',
    'addFontColor': 'Add font color',
    'addFontSize': 'Add font size',
    'addImage': 'Add image',
    'addVideo': 'Add video',
    'addFile': 'Add file',
    'addURL': 'Add URL',
    'addTable': 'Add table',
    'removeStyles': 'Remove styles',
    'code': 'Show HTML code',
    'undo': 'Undo',
    'redo': 'Redo',
    'close': 'Close'
  },

  // privacy
  youtubeCookies: false,

  // dev settings
  useSingleQuotes: false,
  height: 0,
  heightPercentage: 0,
  id: "",
  class: "",
  useParagraph: false,
  maxlength: 0,

  // callback function after init
  callback: undefined
});
});
</script> 

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
    <form class="w3-container" action="<?=base_url('edit/note/'.$record[0]->id)?>" method="post" id="frm" name="frm">
        <div class="w3-row-padding w3-text-black">
            <div class="w3-quarter w3-<?=$align?>">
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="<?=lang('app.namep')?>" name="namep" id="namep" autofocus value="<?=$record[0]->namep?>">
            </div>
            <div class="w3-quarter w3-<?=$align?>">
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="<?=lang('app.namee')?>" name="namee" id="namee" value="<?=$record[0]->namee?>">
            </div>
            <div class="w3-quarter w3-<?=$align?>">
                <select name="category" class="w3-select w3-border w3-margin-bottom">
                    <option selected value="zero"><?=lang('app.zero')?></option>
                    <option value="positive"><?=lang('app.positive')?></option>
                    <option value="negative"><?=lang('app.negative')?></option>
                </select>
            </div>
			<div class="w3-quarter w3-<?=$align?>">
                <input class="w3-input w3-border w3-margin-bottom" type="date" value="<?=explode(" ",$record[0]->created_at)[0]?>" name="created_at" id="created_at">
            </div>
            <div class="w3-half w3-<?=$align?>">
                <label class="w3-label w3-<?=$align?>"><?=lang('app.notep')?></label>
                <textarea name="notep" id="notep" rows="8" class="content w3-input w3-border w3-margin-bottom ns-resize-0"><?=$record[0]->notep?></textarea>
            </div>
            <div class="w3-half w3-<?=$align?>">
                <label class="w3-label w3-<?=$align?>"><?=lang('app.notee')?></label>
                <textarea name="notee" id="notee" rows="8" class="content1 w3-input w3-border w3-margin-bottom ns-resize-0"><?=$record[0]->notee?></textarea>
            </div>
            <?= csrf_field() ?>
            <button type="submit" class="w3-<?=$align?> w3-button w3-half w3-teal w3-section w3-padding fas fa-save"> <?=lang('app.save')?></button>
            <button class="w3-<?=$align?> w3-button w3-half w3-khaki w3-section w3-padding fas fa-undo" type="reset"> <?=lang('app.reset')?></button>
        </div>
    </form>
</div>
