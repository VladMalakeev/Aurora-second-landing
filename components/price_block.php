<div id="price_block" class="black_color">
    <p class="white_header"><? echo $PRICE_HEADER ?></p>

    <div id="price_container">

        <div class="price_wrap">
            <div class="price_element">

                <div class="price_element_info">
                    <p class="price_type">Начальный</p>
                    <p class="price_value">800 грн</p>
                    <ul>
                        <li><p class="prise_text">21 день оздоровления</p></li>
                        <li><p class="prise_text">19 уроков</p></li>
                        <li><p class="prise_text">Кураторская поддержка</p></li>
                        <li><p class="prise_text">Закрытый чат для общения с участниками и кураторами</p></li>
                    </ul>
                </div>

                <div class="price_button_block">
                      <button class="price_button" data-toggle="modal" data-target="#formModal">Я с Вами</button>
                </div>
            </div>
        </div>

        <div class="price_wrap">
            <div class="price_element">
                <div class="price_element_info">
                    <p class="price_type">Стандартный</p>
                    <p class="price_value">1500 грн</p>
                    <ul>
                        <li><p class="prise_text">21 день оздоровления</p></li>
                        <li><p class="prise_text">19 уроков</p></li>
                        <li><p class="prise_text">Кураторская поддержка</p></li>
                        <li><p class="prise_text">Закрытый чат для общения с участниками и кураторами</p></li>
                        <li><p class="prise_text">Индивидуальный разбор анализов</p></li>
                        <li><p class="prise_text">Индивидуальная схема очищения</p></li>
                    </ul>
                </div>

                <div class="price_button_block">
                     <button class="price_button" data-toggle="modal" data-target="#formModal">Я с Вами</button>
                </div>
            </div>
        </div>

    </div>
    <div id="timer">
        <h1 class="timerTextStart"><? echo $PRICE_21_DAYS_TIMER_START ?></h1>
        <h2 class="timerTextDescription"><? echo $PRICE_DAYS_TIMER_DESCRIPTION ?></h2>
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