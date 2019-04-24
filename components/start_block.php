<?php
    switch ($_SERVER['REQUEST_URI']){
        case '/7days/':
            $COURSE_NAME = $MAIN_7_DAYS_COURSE_NAME;
            $START_DATE = $MAIN_7_DAYS_START_DATE;
            break;
        case '/21days/':
            $COURSE_NAME = $MAIN_21_DAYS_COURSE_NAME;
            $START_DATE = $MAIN_21_DAYS_START_DATE;
            break;
        default:
            $COURSE_NAME = $MAIN_21_DAYS_COURSE_NAME;
            $START_DATE = $MAIN_21_DAYS_START_DATE;
    }
?>
<div id="start_block">
    <div class="gradient">
        <div id="start_content">
            <p class="start_name"><? echo $MAIN_SCHOOL_NAME ?></p>
            <p class="start_description"><? echo $COURSE_NAME ?></p>
            <img class="start_image" src="images/time.png"/>
            <p class="start_date"><? echo $START_DATE ?></p>
            <a class="start_button" href="#price_block"><? echo $MAIN_START_BUTTON ?></a>
        </div>
    </div>
</div>