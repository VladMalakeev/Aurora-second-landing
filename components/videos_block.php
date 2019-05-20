<?php
switch ($_SERVER['REQUEST_URI']){
    case '/7days/':
        $DATE = $FINAL_DATE_7;
        break;
    case '/21days/':
        $DATE = $FINAL_DATE_21;
        break;
    default:
        $DATE = $FINAL_DATE_21;
}
?>
<div id="videos_block" >
    <div id="videos_text">
        <p class="videos_title"><? echo $DATE?></p>
        <p class="video_description"><? echo $FINAL_DESCRIPTION?></p>
        <a class="video_button"  href="#price_block"><? echo $FINAL_BUTTON?></a>
    </div>
    <div id="videos_content"></div>
</div>