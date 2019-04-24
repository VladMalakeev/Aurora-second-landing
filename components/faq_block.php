<?php
switch ($_SERVER['REQUEST_URI']){
    case '/7days/':
        $ANSWER_1 = $ANSWER_1_7;
        $ANSWER_7 = $ANSWER_7_7;
        $ANSWER_8 = $ANSWER_8_7;
        break;
    case '/21days/':
        $ANSWER_1 = $ANSWER_1_21;
        $ANSWER_7 = $ANSWER_7_21;
        $ANSWER_8 = $ANSWER_8_21;
        break;
    default:
        $ANSWER_1 = $ANSWER_1_21;
        $ANSWER_7 = $ANSWER_7_21;
        $ANSWER_8 = $ANSWER_8_21;

}
?>
<div id="faq_block" class="white_color">
    <p class="black_header"><? echo $FAQ_HEADER ?></p>

    <div id="faq_container">

        <div class="faq_element">

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div onclick="faqClick(this)" class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <div class="faq_marker">
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.6856 30.6856C26.3208 31.5195 24.7165 32 23 32C18.0294 32 14 27.9706 14 23C14 18.0294 18.0294 14 23 14C27.9706 14 32 18.0294 32 23C32 25.2307 31.1884 27.2719 29.8444 28.8444L27 26L25 28L27.6856 30.6856ZM29.8524 32.8524C27.9096 34.2062 25.5475 35 23 35C16.3726 35 11 29.6274 11 23C11 16.3726 16.3726 11 23 11C29.6274 11 35 16.3726 35 23C35 26.0593 33.8552 28.8511 31.9706 30.9706L34 33L32 35L29.8524 32.8524Z" fill="black"/>
                        </svg>
                        </div>

                        <p class="faq_question"><? echo $QUESTION_1 ?></p>
                        <div class="faq_plus">
                            <span class="h_part_l"  id="h_1"></span>
                            <span class="w_part"></span>
                        </div>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="faq_answer"><? echo $ANSWER_1 ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div onclick="faqClick(this)" class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="faq_marker">
                            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.6856 30.6856C26.3208 31.5195 24.7165 32 23 32C18.0294 32 14 27.9706 14 23C14 18.0294 18.0294 14 23 14C27.9706 14 32 18.0294 32 23C32 25.2307 31.1884 27.2719 29.8444 28.8444L27 26L25 28L27.6856 30.6856ZM29.8524 32.8524C27.9096 34.2062 25.5475 35 23 35C16.3726 35 11 29.6274 11 23C11 16.3726 16.3726 11 23 11C29.6274 11 35 16.3726 35 23C35 26.0593 33.8552 28.8511 31.9706 30.9706L34 33L32 35L29.8524 32.8524Z" fill="black"/>
                            </svg>
                        </div>

                        <p class="faq_question"><? echo $QUESTION_2 ?></p>
                        <div class="faq_plus">
                            <span class="h_part_l"  id="h_2"></span>
                            <span class="w_part"></span>
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="faq_answer"><? echo $ANSWER_2 ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div onclick="faqClick(this)" class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <div class="faq_marker">
                            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.6856 30.6856C26.3208 31.5195 24.7165 32 23 32C18.0294 32 14 27.9706 14 23C14 18.0294 18.0294 14 23 14C27.9706 14 32 18.0294 32 23C32 25.2307 31.1884 27.2719 29.8444 28.8444L27 26L25 28L27.6856 30.6856ZM29.8524 32.8524C27.9096 34.2062 25.5475 35 23 35C16.3726 35 11 29.6274 11 23C11 16.3726 16.3726 11 23 11C29.6274 11 35 16.3726 35 23C35 26.0593 33.8552 28.8511 31.9706 30.9706L34 33L32 35L29.8524 32.8524Z" fill="black"/>
                            </svg>
                        </div>

                        <p class="faq_question"><? echo $QUESTION_3 ?></p>
                        <div class="faq_plus">
                            <span class="h_part_l"  id="h_3"></span>
                            <span class="w_part"></span>
                        </div>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="faq_answer"><? echo $ANSWER_3 ?></p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div onclick="faqClick(this)" class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <div class="faq_marker">
                            <svg width="46" height="46"  viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.6856 30.6856C26.3208 31.5195 24.7165 32 23 32C18.0294 32 14 27.9706 14 23C14 18.0294 18.0294 14 23 14C27.9706 14 32 18.0294 32 23C32 25.2307 31.1884 27.2719 29.8444 28.8444L27 26L25 28L27.6856 30.6856ZM29.8524 32.8524C27.9096 34.2062 25.5475 35 23 35C16.3726 35 11 29.6274 11 23C11 16.3726 16.3726 11 23 11C29.6274 11 35 16.3726 35 23C35 26.0593 33.8552 28.8511 31.9706 30.9706L34 33L32 35L29.8524 32.8524Z" fill="black"/>
                            </svg>
                        </div>

                        <p class="faq_question"><? echo $QUESTION_4 ?></p>
                        <div class="faq_plus">
                            <span class="h_part_l"  id="h_4"></span>
                            <span class="w_part"></span>
                        </div>

                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="faq_answer"><? echo $ANSWER_4 ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <div class="faq_element">

            <div class="accordion" id="accordionExample2">
                <div class="card">
                    <div class="card-header" onclick="faqClick(this)" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <div class="faq_marker">
                            <svg width="46" height="46"  viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.6856 30.6856C26.3208 31.5195 24.7165 32 23 32C18.0294 32 14 27.9706 14 23C14 18.0294 18.0294 14 23 14C27.9706 14 32 18.0294 32 23C32 25.2307 31.1884 27.2719 29.8444 28.8444L27 26L25 28L27.6856 30.6856ZM29.8524 32.8524C27.9096 34.2062 25.5475 35 23 35C16.3726 35 11 29.6274 11 23C11 16.3726 16.3726 11 23 11C29.6274 11 35 16.3726 35 23C35 26.0593 33.8552 28.8511 31.9706 30.9706L34 33L32 35L29.8524 32.8524Z" fill="black"/>
                            </svg>
                        </div>

                        <p class="faq_question"><? echo $QUESTION_5 ?></p>
                        <div class="faq_plus">
                            <span class="h_part_r" id="h_5"></span>
                            <span class="w_part"></span>
                        </div>
                    </div>

                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample2">
                        <div class="card-body">
                            <p class="faq_answer"><? echo $ANSWER_5 ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div  class="card-header"  onclick="faqClick(this)" id="headingSix" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <div class="faq_marker">
                            <svg width="46" height="46"  viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.6856 30.6856C26.3208 31.5195 24.7165 32 23 32C18.0294 32 14 27.9706 14 23C14 18.0294 18.0294 14 23 14C27.9706 14 32 18.0294 32 23C32 25.2307 31.1884 27.2719 29.8444 28.8444L27 26L25 28L27.6856 30.6856ZM29.8524 32.8524C27.9096 34.2062 25.5475 35 23 35C16.3726 35 11 29.6274 11 23C11 16.3726 16.3726 11 23 11C29.6274 11 35 16.3726 35 23C35 26.0593 33.8552 28.8511 31.9706 30.9706L34 33L32 35L29.8524 32.8524Z" fill="black"/>
                            </svg>
                        </div>
                        <p class="faq_question"><? echo $QUESTION_6 ?></p>
                        <div class="faq_plus">
                            <span class="h_part_r"  id="h_6"></span>
                            <span class="w_part"></span>
                        </div>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample2">
                        <div class="card-body">
                            <p class="faq_answer"><? echo $ANSWER_6 ?></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" onclick="faqClick(this)" id="headingSeven" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        <div class="faq_marker">
                            <svg width="46" height="46"  viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.6856 30.6856C26.3208 31.5195 24.7165 32 23 32C18.0294 32 14 27.9706 14 23C14 18.0294 18.0294 14 23 14C27.9706 14 32 18.0294 32 23C32 25.2307 31.1884 27.2719 29.8444 28.8444L27 26L25 28L27.6856 30.6856ZM29.8524 32.8524C27.9096 34.2062 25.5475 35 23 35C16.3726 35 11 29.6274 11 23C11 16.3726 16.3726 11 23 11C29.6274 11 35 16.3726 35 23C35 26.0593 33.8552 28.8511 31.9706 30.9706L34 33L32 35L29.8524 32.8524Z" fill="black"/>
                            </svg>
                        </div>

                        <p class="faq_question"><? echo $QUESTION_7 ?></p>
                        <div class="faq_plus">
                            <span class="h_part_r"  id="h_7"></span>
                            <span class="w_part"></span>
                        </div>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample2">
                        <div class="card-body">
                            <p class="faq_answer"><? echo $ANSWER_7 ?></p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div  class="card-header" onclick="faqClick(this)" id="headingEight" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        <div class="faq_marker">
                            <svg width="46" height="46"  viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.6856 30.6856C26.3208 31.5195 24.7165 32 23 32C18.0294 32 14 27.9706 14 23C14 18.0294 18.0294 14 23 14C27.9706 14 32 18.0294 32 23C32 25.2307 31.1884 27.2719 29.8444 28.8444L27 26L25 28L27.6856 30.6856ZM29.8524 32.8524C27.9096 34.2062 25.5475 35 23 35C16.3726 35 11 29.6274 11 23C11 16.3726 16.3726 11 23 11C29.6274 11 35 16.3726 35 23C35 26.0593 33.8552 28.8511 31.9706 30.9706L34 33L32 35L29.8524 32.8524Z" fill="black"/>
                            </svg>
                        </div>

                        <p class="faq_question"><? echo $QUESTION_8 ?></p>
                        <div class="faq_plus">
                            <span class="h_part_r"  id="h_8"></span>
                            <span class="w_part"></span>
                        </div>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample2">
                        <div class="card-body">
                            <p class="faq_answer"><? echo $ANSWER_8 ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>