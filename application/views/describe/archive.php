<?php $archiveType = $viewHelper->getArchiveType($data->albumID); ?>
<script>
$(document).ready(function(){

    var bgColor = $('.albumTitle.' + '<?=$archiveType?>').css('background-color');
    var fgColor = $('.albumTitle span').css('color');

    $('.albumTitle span').css('color', bgColor);
    $('.albumTitle.' + '<?=$archiveType?>').css('background-color', fgColor);
});
</script>
<div class="container">
    <div class="row gap-above-med">
        <div class="col-md-9">
            <ul class="pager">
                <?php if($data->neighbours['prev']) {?> 
                <li class="previous"><a href="<?=BASE_URL?>describe/archive/<?=$data->albumID?>/<?=$data->albumID . '__' . $data->neighbours['prev']?>">&lt; Previous</a></li>
                <?php } ?>
                <?php if($data->neighbours['next']) {?> 
                <li class="next"><a href="<?=BASE_URL?>describe/archive/<?=$data->albumID?>/<?=$data->albumID . '__' . $data->neighbours['next']?>">Next &gt;</a></li>
                <?php } ?>
            </ul>
            <?php $actualID = $viewHelper->getAlbumID($data->id); ?>
            <?php $viewHelper->displayThumbs($data->id); ?>
        </div>            
        <div class="col-md-3">
            <div class="image-desc-full">
                <div class="albumTitle <?=$archiveType?>"><span><?=$archiveType?></span></div>
                <ul class="list-unstyled">
                    <?=$viewHelper->displayFieldData($data->description)?>
                    <?php if(isset($_SESSION['login'])) {?>
                    <li><a class="editDetails" href="<?=BASE_URL?>edit/archive/<?=$data->albumID?>/<?=$data->id?>">Edit Details</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?=PUBLIC_URL?>js/viewer.js"></script>
