<div id="header">
    <div id="humburger_menu">
        <input onclick="showMenu(this)" type="checkbox" id="checkbox4" class="checkbox4 visuallyHidden">
        <label for="checkbox4">
            <div class="hamburger hamburger4">
                <span class="bar bar1"></span>
                <span class="bar bar2"></span>
                <span class="bar bar3"></span>
                <span class="bar bar4"></span>
                <span class="bar bar5"></span>
            </div>
        </label>
    </div>

    <div id="header_agile_block">
        <div class="logo"><a onclick="closeMenu(true)" href="#start_block"><img src="images/logo.png"></a></div>

        <div id="navigation_block">
            <a onclick="closeMenu(true)"  class="navigation_link" href="#what_you_get_block"><? echo $HEADER_STUDY ?></a>
            <a onclick="closeMenu(true)"  class="navigation_link" href="#curators_block"><? echo $HEADER_AUTHORS ?></a>
            <a onclick="closeMenu(true)"  class="navigation_link" href="#reviews_block"><? echo $HEADER_REVIEWS ?></a>
            <a onclick="closeMenu(true)"  class="navigation_link" href="#videos_block"><? echo $HEADER_CONTACTS ?></a>
        </div>
    </div>

    <div id="header_social_block">
        <a class="social_link" href="https://www.youtube.com/channel/UCMxIGvQ3HFES4Qcg366rOlw" target="_blank">
            <svg viewBox="0 0 32 23" class="youtube_icon">
                <path d="M12.696 15.74V6.554l8.645 4.61-8.644 4.578zM31.68 4.96s-.313-2.252-1.272-3.244C29.19.413 27.828.406 27.202.33 22.724 0 16.007 0 16.007 0h-.014S9.276 0 4.798.33c-.626.077-1.99.083-3.207 1.386C.633 2.708.32 4.96.32 4.96S0 7.61 0 10.255v2.48c0 2.648.32 5.293.32 5.293s.312 2.254 1.27 3.246c1.22 1.303 2.818 1.262 3.53 1.398C7.68 22.923 16 23 16 23s6.724-.01 11.202-.34c.625-.078 1.99-.084 3.206-1.387.96-.992 1.272-3.246 1.272-3.246s.32-2.645.32-5.292v-2.48c0-2.647-.32-5.294-.32-5.294z"/>
            </svg>
        </a>

        <a class="social_link" href="https://www.instagram.com/vershilov/" target="_blank">
            <svg viewBox="0 0 32 32" class="instagram_icon">
            <path d="M16.002 0c-4.346 0-4.89.02-6.598.097C7.7.175 6.538.444 5.52.84a7.835 7.835 0 0 0-2.834 1.845A7.854 7.854 0 0 0 .84 5.52C.443 6.536.173 7.7.096 9.4.02 11.11 0 11.655 0 16c0 4.346.02 4.89.097 6.596.078 1.703.348 2.866.743 3.883a7.84 7.84 0 0 0 1.845 2.834A7.835 7.835 0 0 0 5.52 31.16c1.017.396 2.18.666 3.883.744C11.11 31.98 11.653 32 16 32c4.345 0 4.89-.02 6.596-.096 1.703-.078 2.867-.348 3.885-.744a7.828 7.828 0 0 0 2.833-1.846 7.854 7.854 0 0 0 1.847-2.834c.393-1.018.663-2.18.743-3.884C31.98 20.89 32 20.346 32 16c0-4.345-.02-4.89-.097-6.597-.08-1.704-.35-2.866-.743-3.884a7.853 7.853 0 0 0-1.847-2.835A7.82 7.82 0 0 0 26.48.84C25.46.444 24.297.175 22.593.097 20.887.02 20.343 0 15.997 0h.005zm-1.436 2.883H16c4.274 0 4.78.016 6.467.092 1.56.072 2.407.332 2.97.55.747.29 1.28.638 1.84 1.198.56.56.906 1.093 1.197 1.84.22.563.48 1.41.55 2.97.077 1.687.094 2.193.094 6.464 0 4.27-.017 4.776-.093 6.463-.072 1.56-.332 2.407-.55 2.97a4.947 4.947 0 0 1-1.2 1.838c-.56.56-1.09.907-1.837 1.197-.564.22-1.41.48-2.97.55-1.688.078-2.194.094-6.466.094-4.273 0-4.78-.017-6.466-.094-1.56-.072-2.407-.333-2.97-.552a4.956 4.956 0 0 1-1.84-1.196 4.96 4.96 0 0 1-1.198-1.84c-.22-.563-.48-1.41-.55-2.97-.078-1.686-.093-2.193-.093-6.466 0-4.272.015-4.776.092-6.463.07-1.56.332-2.408.55-2.972.29-.746.638-1.28 1.198-1.84a4.966 4.966 0 0 1 1.84-1.197c.564-.22 1.41-.48 2.97-.55 1.477-.067 2.05-.087 5.03-.09v.003zm9.976 2.657a1.92 1.92 0 1 0 0 3.84 1.92 1.92 0 0 0 0-3.84zm-8.54 2.243a8.217 8.217 0 1 0 0 16.435 8.217 8.217 0 0 0 0-16.435zm0 2.884a5.333 5.333 0 1 1 0 10.667 5.333 5.333 0 0 1 0-10.667z" />
            </svg>
        </a>

        <a class="social_link" href="https://t.me/alphabetOfHealth" target="_blank">
            <svg viewBox="0 0 33 28" class="telegram_icon">
                <path d="M12.5 25.75c.75 0 1.08-.343 1.5-.75l4-3.89-4.99-3.008m0 0l12.09 8.933c1.38.76 2.375.367 2.72-1.28l4.92-23.192c.504-2.02-.77-2.936-2.09-2.337L1.753 11.37c-1.973.79-1.96 1.89-.36 2.38l7.416 2.315 17.167-10.83c.81-.492 1.555-.228.944.314"/>
            </svg>
        </a>
    </div>

<!--    <div id="header_button">-->
<!--        <button>Перезвоните мне</button>-->
<!--    </div>-->
</div>