        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" rel="stylesheet">
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- styles -->
        <link href="<?php echo get_webinfo('theme_url'); ?>css/style.css" rel="stylesheet">

        <script type="text/javascript" src="https://books.google.com/books/previewlib.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/i18next/17.0.7/i18next.min.js" integrity="sha256-CrKYfaL/OExsdgy1KTsPge42ye235AY+WHVlBaYuU2w=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/i18next-browser-languagedetector/3.0.1/i18nextBrowserLanguageDetector.min.js" integrity="sha256-eeDsopx70pr2AOE0yFvAk4k0y6pfQXFOmdhn8oY4nq4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/i18next-browser-languagedetector/3.0.1/i18nextBrowserLanguageDetector.min.js" integrity="sha256-eeDsopx70pr2AOE0yFvAk4k0y6pfQXFOmdhn8oY4nq4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/i18next-localstorage-backend@3.0.0/i18nextLocalStorageBackend.min.js" integrity="sha256-71QGzSjL+XgfDpwGtRSCLuhmnYC48A3gv3j3NhBO92I=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/i18next-chained-backend@2.0.0/i18nextChainedBackend.min.js" integrity="sha256-lKynT5Mz8LX8wd6OOZqe6bQ7H4yILMmx438Cp9Z5eWQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-i18next/1.2.1/jquery-i18next.min.js" integrity="sha256-Vo1wrHjny4hQDPA9SwBUpG/EBawhvUusdqRHb3Ia7x8=" crossorigin="anonymous"></script>


        <script src="<?php echo get_webinfo('theme_url'); ?>js/option.js"></script>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php if (get_webinfo('scriptheaderads') == 'true' && !empty(get_webinfo('scriptheaderads'))) : ?>
            <?php $adspath = ABSPATH . THMPATH . 'books/ads/scriptheaderads.php';
            $adscode = file_get_contents($adspath, NULL);
            if (isset($adscode) and !empty($adscode)) : ?>
                <?php echo $adscode; ?><?php endif; ?><?php endif; ?>
                </head>

                <body>


                    <!-- modal -->
                    <div class="modalpop">
                        <div class="modalpop__inner">
                            <div class="modalpop__content">
                                <div class="info-holder">
                                    <img class="modalpop__usericon" src="<?php echo get_webinfo('theme_url'); ?>img/userplus_i.svg" alt="Read Anywhere and on Any Device!">
                                    <h1 class="heading-md" data-i18n="books.banner-subscribe-header">Subscribe to Read | $0.00</h1>
                                    <p class="modalpop__desc" data-i18n="books.banner-subscribe-text">Join today and start reading your favorite books for Free!</p>
                                </div>
                                <div class="btn-holder">
                                    <a href="/rc" class="btn btn--secondary btn--large" data-i18n="_.create-free-account">Create Free Account</a>
                                </div>
                            </div>
                            <div class="modalpop__footer">
                                <p class="text-small font-weight-bold mb-1">
                                    <img src="<?php echo get_webinfo('theme_url'); ?>img/time_i.png" width="20" class="mr-1">
                                    <span class="text-capitalize tr" data-i18n="_.quick-and-easy-sign-up">Quick and Easy Sign Up!</span>
                                </p>
                                <p class="text-small mb-0" data-i18n="books.1-min-sign-up">It takes less then 1 minute to sign up, then you can enjoy Unlimited eBooks.</p>
                            </div>
                        </div>
                    </div><!-- slidein-menu -->

                    <div class="slidein-menu">
                        <div class="slidein-menu__close js-open-closeslideinmenu">
                            <i class="typcn typcn-delete"></i>
                        </div>
                        <div class="slidein-menu__holder">
                            <div class="slidein-menu__menu">
                                <a href="/rc" class="btn btn--secondary btn--fw d-block d-sm-none text-capitalize" data-i18n="_.sign-up">Sign Up</a>
                                <a href="/rc" class="btn btn--outline-gray btn--fw text-capitalize" data-i18n="_.browse">Browse</a>
                            </div>
                            <div class="slidein-menu__menu text-center">
                                <p class="text-small mb-0" data-i18n="books.read-anywhere-on-any-device">Read Anywhere and on Any Device!</p>
                                <div class="devices">
                                    <ul class="devices__list">
                                        <li><img width="30" src="<?php echo get_webinfo('theme_url'); ?>img/apple_i.png" alt="Download on iOS"></li>
                                        <li><img width="28" src="<?php echo get_webinfo('theme_url'); ?>img/android_i.png" alt="Download on Android"></li>
                                        <li><img width="30" src="<?php echo get_webinfo('theme_url'); ?>img/devices_i.png" alt="Download on iOS"></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div><!-- header -->

                    <div class="header">
                        <nav class="nav">
                            <div class="container">
                                <div class="nav__inner">
                                    <div class="nav__brand">
                                        <a href="<?php echo get_webinfo('url'); ?>"><img src="<?php echo get_webinfo('theme_url'); ?>img/logo.svg" width="30" alt="<?php echo get_webinfo('webname'); ?>"> <?php echo get_webinfo('webname'); ?></a>
                                    </div>
                                    <div class="nav__menu">
                                        <ul>
                                            <form action="<?php echo get_webinfo('url'); ?>/search/" method="POST" class="form-inline d-none d-sm-none d-md-block">
                                                <input class="nav__menu__link form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" autocomplete="off" name="s" type="text" id="srch-term" style="color:#495057">
                                                <button class="nav__menu__link nav__menu__link--icon search-icon" type="submit"><i class="typcn typcn-zoom"></i></button>
                                            </form>
                                            <li><a href="<?php echo get_webinfo('url'); ?>/browse" class="nav__menu__link nav__menu__link--btn-outline text-capitalize">Browse</a></li>
                                            <li><a href="/rc" class="d-none d-sm-none d-md-block nav__menu__link nav__menu__link--btn text-capitalize bDW9BY">Sign Up</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>

                        <div class="subheader subheader--small">
                            <div class="container">
                                <!-- cover -->
                                <div class="banner">
                                    <div class="banner__inner">
                                        <div class="info-holder">
                                            <h1 data-i18n="books.banner-subscribe-header">Subscribe to Read | $0.00</h1>
                                            <p data-i18n="books.banner-subscribe-text">Join today and start reading your favorite books for Free!</p>
                                        </div>
                                        <div class="btn-holder">
                                            <a href="/rc" class="btn btn--secondary">Create Free Account</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>