<div id="price_block" class="black_color">
    <p class="white_header"><? echo $PRICE_HEADER ?></p>

    <div id="price_container">

        <div class="price_wrap">
            <div class="price_element">

                <div class="price_element_info">
<!--                    <p class="price_type">--><?// echo $PRICE_7_DAYS_TYPE_1 ?><!--</p>-->
                    <p class="price_value"><? echo $PRICE_7_DAYS_VALUE_1 ?></p>
                    <ul>
                        <li><p class="prise_text"><? echo $PRICE_7_DAYS_FEATURE_1 ?></p></li>
                        <li><p class="prise_text"><? echo $PRICE_7_DAYS_FEATURE_2 ?></p></li>
                        <li><p class="prise_text"><? echo $PRICE_7_DAYS_FEATURE_3 ?></p></li>
                        <li><p class="prise_text"><? echo $PRICE_7_DAYS_FEATURE_4 ?></p></li>
                        <li><p class="prise_text"><? echo $PRICE_7_DAYS_FEATURE_5 ?></p></li>
                        <li><p class="prise_text"><? echo $PRICE_7_DAYS_FEATURE_6 ?></p></li>
                        <li><p class="prise_text"><? echo $PRICE_7_DAYS_FEATURE_7 ?></p></li>
                        <li><p class="prise_text"><? echo $PRICE_7_DAYS_FEATURE_8 ?></p></li>
                        <li><p class="prise_text"><? echo $PRICE_7_DAYS_FEATURE_9 ?></p></li>
                        <li><p class="prise_text"><? echo $PRICE_7_DAYS_FEATURE_10 ?></p></li>
                    </ul>
                </div>

                <div class="price_button_block">
                      <button class="price_button" data-toggle="modal" data-target="#formModal">Я с Вами</button>
                </div>
            </div>

        </div>

<!--        <div class="price_wrap">-->
<!--            <div class="price_element">-->
<!---->
<!--                <div class="price_element_info">-->
<!--                    <p class="price_type">--><?// echo $PRICE_7_DAYS_TYPE_2 ?><!--</p>-->
<!--                    <p class="price_value">--><?// echo $PRICE_7_DAYS_VALUE_2 ?><!--</p>-->
<!--                    <ul>-->
<!--                        <li><p class="prise_text">--><?// echo $PRICE_7_DAYS_FEATURE_1 ?><!--</p></li>-->
<!--                        <li><p class="prise_text">--><?// echo $PRICE_7_DAYS_FEATURE_2 ?><!--</p></li>-->
<!--                        <li><p class="prise_text">--><?// echo $PRICE_7_DAYS_FEATURE_3 ?><!--</p></li>-->
<!--                        <li><p class="prise_text">--><?// echo $PRICE_7_DAYS_FEATURE_4 ?><!--</p></li>-->
<!--                        <li><p class="prise_text">--><?// echo $PRICE_7_DAYS_FEATURE_5 ?><!--</p></li>-->
<!--                        <li><p class="prise_text">--><?// echo $PRICE_7_DAYS_FEATURE_6 ?><!--</p></li>-->
<!--                        <li><p class="prise_text">--><?// echo $PRICE_7_DAYS_FEATURE_7 ?><!--</p></li>-->
<!--                        <li><p class="prise_text">--><?// echo $PRICE_7_DAYS_FEATURE_8 ?><!--</p></li>-->
<!--                        <li><p class="prise_text">--><?// echo $PRICE_7_DAYS_FEATURE_9 ?><!--</p></li>-->
<!--                        <li><p class="prise_text">--><?// echo $PRICE_7_DAYS_FEATURE_10 ?><!--</p></li>-->
<!--                        <li><p class="prise_text">--><?// echo $PRICE_7_DAYS_BLOCK_2_FEATURE_1 ?><!--</p></li>-->
<!--                        <li><p class="prise_text">--><?// echo $PRICE_7_DAYS_BLOCK_2_FEATURE_2 ?><!--</p></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!---->
<!--                <div class="price_button_block">-->
<!--                    <button class="price_button" data-toggle="modal" data-target="#formModal">--><?// echo $PRICE_BUTTON ?><!--</button>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!---->
<!--        </div>-->

    </div>
    <div id="timer">
        <h1 class="timerTextStart"><? echo $PRICE_7_DAYS_TIMER_START ?></h1>
        <h2 class="timerTextDescription"><? echo $PRICE_DAYS_TIMER_DESCRIPTION ?></h2>
        <input id="timer7Date" type="hidden" value="<? echo $days7data['date'] ?>"/>
        <input id="timer7Time" type="hidden" value="<? echo $days7data['time'] ?>"/>
        <div class="timerScript"></div>
    </div>
    <div class="referalsBlock">
        <p class="referalHeader"><? echo $PRICE_REFERRAL_HEADER ?></p>
        <p class="referalText">
            <? echo $PRICE_REFERRAL_TEXT ?>
            <span class="discount"><? echo $PRICE_REFERRAL_DISCOUNT ?></span>
        </p>
    </div>
</div>