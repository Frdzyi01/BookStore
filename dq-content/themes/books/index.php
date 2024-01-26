<?php

/**
 * @package deqila.id
 */
include(ABSPATH . THMPATH . $options['theme_name'] . '/blockid.php');
if ($_GET['book'] !== null) {
    $BooksID = $_GET['book'];
    $banned_ids = $bad_id;
    if (is_array($banned_ids)) {
        foreach ($banned_ids as $block_id) {
            $bad_block_id     = $block_id;
            if ($BooksID == $block_id) {
                header('Location: /404');
            }
        }
    }
    $arraygr = explode(",", $options['Goodread_api']);
    $apikey = $arraygr[array_rand($arraygr)];
    $bkey = $apikey;
    $MainUrl = 'https://www.goodreads.com/book/isbn/' . $BooksID . '?format=xml&key=' . $bkey;
    $load = get_contents($MainUrl);
    $xml = simplexml_load_string($load, 'SimpleXMLElement', LIBXML_NOCDATA);
    $json = json_encode($xml);
    $data = json_decode($json, TRUE);
    $row = $data['book'];
    $single['title'] = $row['title'];
    $hack_title = 'Read Online : ' . $single['title'];
?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="en">

    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="rem:pc" content="books">
        <meta name="referrer" content="always">
        <meta name="robots" content="index,follow" />
        <meta name="google-site-verification" content="<?php echo get_webinfo('google_code'); ?>">
        <meta name="yandex-verification" content="<?php echo get_webinfo('yandex_code'); ?>">
        <meta name="msvalidate.01" content="<?php echo get_webinfo('bing_code'); ?>">
        <title><?php echo $hack_title; ?></title>
        <meta itemprop="description" name="description" content="<?php dq_description(); ?>">
        <meta name="keywords" content="<?php dq_keywords(); ?>">
        <meta name="author" content="<?php echo $_SERVER['SERVER_NAME']; ?>">
        <link href="<?php echo get_webinfo('theme_url'); ?>img/favicon.png" rel="icon" type="image/png">
        <link rel="canonical" href="<?php echo canonical(); ?>">
        <meta property="og:title" content="<?php dq_title(); ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo canonical(); ?>">
        <meta property="og:image:alt" content="<?php dq_title(); ?>">
        <meta property="og:description" content="<?php dq_description(); ?>">
        <meta property="og:locale" content="en">
        <meta property="og:site_name" content="<?php dq_title(); ?>">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:description" content="<?php dq_description(); ?>">
        <meta name="twitter:title" content="<?php dq_title(); ?>">
        <meta name="twitter:site" content="<?php dq_title(); ?>">
        <meta name="twitter:url" content="<?php echo canonical(); ?>">
    <?php } else {
    get_header(); ?>
    <?php } ?>
    <meta itemprop="image" content="<?php echo get_webinfo('theme_url'); ?>img/og-image-default.jpg" />
    <meta property="og:image" content="<?php echo get_webinfo('theme_url'); ?>img/og-image-default.jpg" />
    <meta name="twitter:image" content="<?php echo get_webinfo('theme_url'); ?>img/og-image-default.jpg" />
    <?php include(ABSPATH . THMPATH . $options['theme_name'] . '/header2.php') ?>
    <?php if (empty($_GET['book'])) { ?>
        <div class="container">
            <div class="row">
                <?php if ($options['728x90'] == 'true') : ?>
                    <div class="col-12">
                        <div class="d-block mt-5" style="margin-left: auto;margin-right:auto;overflow:hidden;text-align:center;">
                            <?php $adspath = ABSPATH . THMPATH . $options['theme_name'] . '/ads/728x90.php';
                            $adscode = file_get_contents($adspath, NULL);
                            if (isset($adscode) and !empty($adscode)) : ?><?php echo $adscode; ?><?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-12">
                    <h3 class="heading-small mt-5"><span data-i18n="books.more-books-from">Best sellers Books</span></h3>
                    <div class="carrousel carrousel--author">
                        <div class="carrousel__fiveup owl-carousel">
                            <?php
                            if (empty($_GET['page'])) {
                                $page = 1;
                            } else {
                                $page = $_GET['page'];
                            }
                            $Books = unserialize(deqila_data_BooksAll('popular', $page));
                            if (is_array($Books)) {
                                // var_dump($Books);
                                foreach ($Books as $key => $item) {
                            ?>
                                    <div class="thumb">
                                        <div class="thumb__cover">
                                            <div class="cover">
                                                <div class="cover__wrapper">
                                                    <a href="<?php echo seobooks($item['id'], $item['title']); ?>" class="cover__img" style="background-image:url(<?php echo $item['poster']; ?> );">
                                                        <img src="<?php echo get_webinfo('theme_url'); ?>img/doc-cover-shadow.png" class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="<?php echo seobooks($item['id'], $item['title']); ?>" class="thumb__info gggg">
                                            <h1 class="document__title"><?php echo $item['title']; ?></h1>
                                            <h2 class="document__subtitle"><?php echo $item['author']; ?></h2>
                                            <div class="document__rating">
                                                <div class="rating">
                                                    <div class='rating__stars'>
                                                        <div class='rating__stars__wrapper'>
                                                            <span class='rating__stars__icons' style="width:89.2%"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                            <?php if ($key == 11) break;
                                }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="heading-small mt-5"><span data-i18n="books.more-books-from">Popular New Realeases</span></h3>
                    <div class="carrousel carrousel--author">
                        <div class="carrousel__fiveup owl-carousel">
                            <?php
                            if (empty($_GET['page'])) {
                                $page = 1;
                            } else {
                                $page = $_GET['page'];
                            }
                            $Books = unserialize(deqila_data_BooksAll('new-release', $page));
                            if (is_array($Books)) {
                                foreach ($Books as $key => $item) {
                            ?>
                                    <div class="thumb">
                                        <div class="thumb__cover">
                                            <div class="cover">
                                                <div class="cover__wrapper">
                                                    <a href="<?php echo seobooks($item['id'], $item['title']); ?>" class="cover__img" style="background-image:url(<?php echo $item['poster']; ?> );">
                                                        <img src="<?php echo get_webinfo('theme_url'); ?>img/doc-cover-shadow.png" class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="<?php echo seobooks($item['id'], $item['title']); ?>" class="thumb__info">
                                            <h1 class="document__title"><?php echo $item['title']; ?></h1>
                                            <h2 class="document__subtitle"><?php echo $item['author']; ?></h2>
                                            <div class="document__rating">
                                                <div class="rating">
                                                    <div class='rating__stars'>
                                                        <div class='rating__stars__wrapper'>
                                                            <span class='rating__stars__icons' style="width:89.2%"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                            <?php if ($key == 11) break;
                                }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="heading-small mt-5"><span data-i18n="books.more-books-from">Hot Reads of The Week</span></h3>
                    <div class="carrousel carrousel--author">
                        <div class="carrousel__fiveup owl-carousel">
                            <?php
                            if (empty($_GET['page'])) {
                                $page = 1;
                            } else {
                                $page = $_GET['page'];
                            }
                            $Books = unserialize(deqila_data_BooksAll('most-read', $page));
                            if (is_array($Books)) {
                                foreach ($Books as $key => $item) {
                            ?>
                                    <div class="thumb">
                                        <div class="thumb__cover">
                                            <div class="cover">
                                                <div class="cover__wrapper">
                                                    <a href="<?php echo seobooks($item['id'], $item['title']); ?>" class="cover__img" style="background-image:url(<?php echo $item['poster']; ?> );">
                                                        <img src="<?php echo get_webinfo('theme_url'); ?>img/doc-cover-shadow.png" class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="<?php echo seobooks($item['id'], $item['title']); ?>" class="thumb__info">
                                            <h1 class="document__title"><?php echo $item['title']; ?></h1>
                                            <h2 class="document__subtitle"><?php echo $item['author']; ?></h2>
                                            <div class="document__rating">
                                                <div class="rating">
                                                    <div class='rating__stars'>
                                                        <div class='rating__stars__wrapper'>
                                                            <span class='rating__stars__icons' style="width:89.2%"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                            <?php if ($key == 11) break;
                                }
                            } ?>
                        </div>
                    </div>
                </div>
                <?php if ($options['nativeads'] == 'true') : ?>
                    <div class="col-12">
                        <div class="d-block" style="margin: 15px auto;overflow:hidden;text-align:center;">
                            <?php $adspath = ABSPATH . THMPATH . $options['theme_name'] . '/ads/nativeads.php';
                            $adscode = file_get_contents($adspath, NULL);
                            if (isset($adscode) and !empty($adscode)) : ?><?php echo $adscode; ?><?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php } else {
        $BooksID = $_GET['book'];
        $arraygr = explode(",", $options['Goodread_api']);
        $apikey = $arraygr[array_rand($arraygr)];
        $bkey = $apikey;
        $MainUrl = 'https://www.goodreads.com/book/isbn/' . $BooksID . '?format=xml&key=' . $bkey;
        $load = get_contents($MainUrl);
        $xml = simplexml_load_string($load, 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);
        $data = json_decode($json, TRUE);
        $row = $data['book'];
        if ($row == null) {
            header("Refresh:0");
        }
        $single['id'] = $row['id'];
        $single['isbn'] = $row['isbn'];
        $single['isbn13'] = $row['isbn13'];
        $single['asin'] = $row['asin'];
        $single['kindle_asin'] = $row['kindle_asin'];
        $single['title'] = $row['title'];
        $single['poster_img'] = $row['image_url'];
        if ($single['poster_img'] == 'https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png') {
            $single['poster'] = get_webinfo('theme_url') . 'img/no-cover.jpg';
            $single['images'] = get_webinfo('theme_url') . 'img/default-read.jpg';
        } else {
            $single['poster'] = str_replace(array('._SY75_.', '._SX50_.', '._SX50_SY75_.', '._SX318_SY475_.', '._SX318_.', '._SY475_.', '._SX98_.', '._SY160_.'), '.', $single['poster_img']);
            $single['images'] = str_replace(array('._SY75_.', '._SX50_.', '._SX50_SY75_.', '._SX318_SY475_.', '._SX318_.', '._SY475_.', '._SX98_.', '._SY160_.'), '.', $single['poster_img']);
        }
        $single['year'] = $row['publication_year'];
        $single['month'] = $row['publication_month'];
        $single['day'] = $row['publication_day'];
        $single['publicationdate'] = $single['day'] . '-' . $single['month'] . '-' . $single['year'];
        $single['language'] = $row['language_code'];
        $single['publisher'] = $row['publisher'];
        $single['description'] = preg_replace("/<([a-z][a-z0-9]*)[^>]*?(\/?)>/si", '<$1$2>', $row['description']);
        $single['rating'] = $row['average_rating'];
        $single['votecount'] = $row['ratings_count'];
        $single['votereview'] = $row['text_reviews_count'];
        $single['format'] = $row['format'];
        $single['numpages'] = $row['num_pages'];
        $single['edition'] = $row['edition_information'];
        if ($row['authors']['author'][0] == null) {
            $single['authors'] = $row['authors']['author'];
        } else {
            $single['authors'] = $row['authors']['author'][0];
        }
        $single['authorid'] = $single['authors']['id'];
        $single['authorname'] = $single['authors']['name'];
        $single['authorposter_img'] = $single['authors']['image_url'];
        if ($single['authorposter_img'] == 'https://s.gr-assets.com/assets/nophoto/user/u_200x266-e183445fd1a1b5cc7075bb1cf7043306.png') {
            $single['authorposter'] = get_webinfo('theme_url') . 'img/no-cover.jpg';
        } else {
            $single['authorposter'] = str_replace(array('._SY75_.', '._SX50_.', '._SX50_SY75_.', '._SX318_SY475_.', '._SX318_.', '._SY475_.', '._SX98_.', '._SY160_.'), '.', $single['authorposter_img']);
        }
        $single['authorrating'] = $single['authors']['average_rating'];
        $single['authorvotecount'] = $single['authors']['ratings_count'];
        $single['authorvotereview'] = $single['authors']['text_reviews_count'];
        if (is_array($row['buy_links']['buy_link'])) {
            $ic = 0;
            $buy_linkss = array();
            foreach ($row['buy_links']['buy_link'] as $result) : $buy_linkss[] = '<li><span>' . $result['name'] . '</span></li>';
                if ($ic++ == 4) break;
            endforeach;
            $single['buylink'] = implode("", $buy_linkss);
        }
        if (is_array($row['popular_shelves']['shelf'])) {
            $ic = 0;
            $genress = array();
            foreach ($row['popular_shelves']['shelf'] as $result) : $genress[] = '<li><a href="' . seogenrebooks($result['@attributes']['name']) . '"><span>' . ucwords(str_replace('-', ' ', $result['@attributes']['name'])) . '</span><em>' . $result['@attributes']['count'] . '</em></a></li>';
                if ($ic++ == 10) break;
            endforeach;
            $single['genre'] = implode("", $genress);
        }
        if (is_array($row['similar_books']['book'])) {
            foreach ((array)$row['similar_books']['book'] as $similar) {
                $sim['id'] = $similar['id'];
                $sim['title'] = $similar['title'];
                $sim['overview'] = $similar['overview'];
                $sim['release_date'] = $similar['release_date'];
                $sim['popularity'] = $similar['popularity'];
                $sim['vote_average'] = $similar['vote_average'];
                $sim['vote_count'] = $similar['vote_count'];
                $sim['poster_img'] = $similar['image_url'];
                if ($sim['poster_img'] == 'https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png') {
                    $sim['poster'] = get_webinfo('theme_url') . 'img/no-cover.jpg';
                } else {
                    $sim['poster'] = str_replace(array('._SY75_.', '._SX50_.', '._SX50_SY75_.', '._SX318_SY475_.', '._SX318_.', '._SY475_.', '._SX98_.'), '.', $sim['poster_img']);
                }
                $sim['idAuthor'] = $similar['authors']['author']['id'];
                $sim['author'] = $similar['authors']['author']['name'];
                $single['similar'][] = $sim;
            }
        }
    ?>
        <section class="white box-shadow">
            <div class="container">
                <div class="document">
                    <div class="row">
                        <div class="col-sm-3 col-4">
                            <!-- cover -->
                            <div class="cover">
                                <div class="cover__wrapper">
                                    <a href="/rc" class="cover__img" style="background-image:url( <?php echo $single['poster'] ?> );">
                                        <img src="<?php echo get_webinfo('theme_url'); ?>img/doc-cover-shadow.png" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="document__actions d-none d-sm-block">
                                <!-- actions list -->
                                <ul class="actions-list">
                                    <li>
                                        <button class="js-trigger" data-trigger="action-feature">
                                            <i class="typcn typcn-bookmark"></i>
                                            <span data-i18n="_.save-for-later">Save for later</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="js-trigger" data-trigger="action-feature">
                                            <i class="typcn typcn-th-list"></i>
                                            <span data-i18n="_.add-to-list">Add to list</span>
                                        </button>
                                    </li>
                                </ul>
                                <?php if ($options['300x250'] == 'true') : ?>
                                    <div class="d-block" style="margin: 15px auto;overflow:hidden;text-align:center;">
                                        <?php $adspath = ABSPATH . THMPATH . $options['theme_name'] . '/ads/300x250.php';
                                        $adscode = file_get_contents($adspath, NULL);
                                        if (isset($adscode) and !empty($adscode)) : ?><?php echo $adscode; ?><?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-sm-8 offset-sm-1 d-none d-sm-block">
                            <!-- info -->
                            <h1 class="document__title"><?php echo $single['title'] ?></h1>
                            <a class="document__subtitle" href="/rc"><?php echo $single['authorname'] ?></a>
                            <div class="document__rating">
                                <div class="rating">
                                    <div class='rating__stars'>
                                        <div class='rating__stars__wrapper'>
                                            <span class='rating__stars__icons' style="width:90%"></span>
                                        </div>
                                    </div>
                                    <span class="rating__stats"><?php echo $single['rating'] ?>/5</span>
                                    <span class="rating__stats"> (<?php echo $single['votecount'] ?> <span data-i18n="_.ratings">ratings</span>) </span>
                                </div>
                            </div>
                            <!-- main buttons -->
                            <div class="btn--wrapper">
                                <a href="/rc" class="btn text-capitalize"><i class="typcn typcn-book"></i> <span data-i18n="_.read">Read Now</span></a>
                                <a href="" class="btn btn--outline js-trigger text-capitalize" data-trigger="download"><i class="typcn typcn-download"></i> <span data-i18n="_.download">Download Now</span></a>
                            </div>
                            <!-- description -->
                            <article class="document__desc js-readmore"><?php if ($single['description']) {
                                                                            echo $single['description'];
                                                                        } ?></article>
                            <!-- detail items -->
                            <div class="detail-items">
                                <dl>
                                    <dt class="text-capitalize">Format:</dt>
                                    <dd><?php if ($single['format']) {
                                            echo $single['format'];
                                        } ?></dd>
                                </dl>
                                <dl>
                                    <dt class="text-capitalize">Pages:</dt>
                                    <dd><?php if ($single['numpages']) {
                                            echo $single['numpages'];
                                        } ?> pages</dd>
                                </dl>
                                <dl>
                                    <dt class="text-capitalize">Publication:</dt>
                                    <dd><?php if ($single['year']) {
                                            echo $single['year'];
                                        } ?></dd>
                                </dl>
                                <dl>
                                    <dt class="text-capitalize">Publisher:</dt>
                                    <dd><?php if ($single['publisher']) {
                                            echo $single['publisher'];
                                        } ?></dd>
                                </dl>
                                <dl>
                                    <dt class="text-capitalize">Edition:</dt>
                                    <dd><?php if ($single['edition']) {
                                            echo $single['edition'];
                                        } ?></dd>
                                </dl>
                                <dl>
                                    <dt class="text-capitalize">Language:</dt>
                                    <dd><?php if ($single['language']) {
                                            echo $single['language'];
                                        } ?></dd>
                                </dl>
                                <dl>
                                    <dt class="text-capitalize">ISBN10:</dt>
                                    <dd><?php if ($single['isbn']) {
                                            echo $single['isbn'];
                                        } ?></dd>
                                </dl>
                                <dl>
                                    <dt class="text-capitalize">ISBN13:</dt>
                                    <dd><?php if ($single['isbn13']) {
                                            echo $single['isbn13'];
                                        } ?></dd>
                                </dl>
                                <dl>
                                    <dt class="text-capitalize">kindle Asin:</dt>
                                    <dd><?php if ($single['kindle_asin']) {
                                            echo $single['kindle_asin'];
                                        } ?></dd>
                                </dl>
                            </div>
                            <?php if ($options['468x60'] == 'true') : ?>
                                <div class="d-block" style="overflow:hidden;">
                                    <?php $adspath = ABSPATH . THMPATH . $options['theme_name'] . '/ads/468x60.php';
                                    $adscode = file_get_contents($adspath, NULL);
                                    if (isset($adscode) and !empty($adscode)) : ?><?php echo $adscode; ?><?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-8 d-block d-sm-none">
                            <!-- info -->
                            <h1 class="document__title"><?php echo $single['title'] ?></h1>
                            <a class="document__subtitle" href="/rc"><?php echo $single['authorname'] ?></a>
                            <div class="document__rating">
                                <div class="rating">
                                    <div class='rating__stars'>
                                        <div class='rating__stars__wrapper'>
                                            <span class='rating__stars__icons' style="width:98%"></span>
                                        </div>
                                    </div>
                                    <span class="rating__stats"><?php echo $single['rating'] ?>/5</span>
                                    <span class="rating__stats"> (<?php echo $single['votecount'] ?> <span data-i18n="_.ratings">ratings</span>) </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex d-sm-none">
                        <div class="col-12">
                            <!-- main buttons -->
                            <div class="btn--wrapper">
                                <a href="/rc" class="btn text-capitalize"><i class="typcn typcn-book"></i> <span data-i18n="_.read">Read</span></a>
                                <a href="" class="btn btn--outline js-trigger text-capitalize" data-trigger="download"><i class="typcn typcn-download"></i> <span data-i18n="_.download">Download</span></a>
                            </div>
                            <div class="document__actions">
                                <!-- actions list -->
                                <ul class="actions-list">
                                    <li>
                                        <button class="js-trigger" data-trigger="action-feature">
                                            <i class="typcn typcn-bookmark"></i>
                                            <span data-i18n="_.save-for-later">Save for later</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="js-trigger" data-trigger="action-feature">
                                            <i class="typcn typcn-th-list"></i>
                                            <span data-i18n="_.add-to-list">Add to list</span>
                                        </button>
                                    </li>
                                </ul>
                                <?php if ($options['300x250'] == 'true') : ?>
                                    <div class="d-block" style="margin: 15px auto;overflow:hidden;text-align:center;">
                                        <?php $adspath = ABSPATH . THMPATH . $options['theme_name'] . '/ads/300x250.php';
                                        $adscode = file_get_contents($adspath, NULL);
                                        if (isset($adscode) and !empty($adscode)) : ?><?php echo $adscode; ?><?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <!-- description -->
                            <article class="document__desc js-readmore"><?php if ($single['description']) {
                                                                            echo $single['description'];
                                                                        } ?></article>
                            <!-- detail items -->
                            <div class="detail-items">
                                <dl>
                                    <dt class="text-capitalize">Format:</dt>
                                    <dd><?php if ($single['format']) {
                                            echo $single['format'];
                                        } ?></dd>
                                </dl>
                                <dl>
                                    <dt class="text-capitalize">Pages:</dt>
                                    <dd><?php if ($single['numpages']) {
                                            echo $single['numpages'];
                                        } ?> pages</dd>
                                </dl>
                                <dl>
                                    <dt class="text-capitalize">Publication:</dt>
                                    <dd><?php if ($single['year']) {
                                            echo $single['year'];
                                        } ?></dd>
                                </dl>
                                <dl>
                                    <dt class="text-capitalize">Publisher:</dt>
                                    <dd><?php if ($single['publisher']) {
                                            echo $single['publisher'];
                                        } ?></dd>
                                </dl>
                                <dl>
                                    <dt class="text-capitalize">Edition:</dt>
                                    <dd><?php if ($single['edition']) {
                                            echo $single['edition'];
                                        } ?></dd>
                                </dl>
                                <dl>
                                    <dt class="text-capitalize">Language:</dt>
                                    <dd><?php if ($single['language']) {
                                            echo $single['language'];
                                        } ?></dd>
                                </dl>
                                <dl>
                                    <dt class="text-capitalize">ISBN10:</dt>
                                    <dd><?php if ($single['isbn']) {
                                            echo $single['isbn'];
                                        } ?></dd>
                                </dl>
                                <dl>
                                    <dt class="text-capitalize">ISBN13:</dt>
                                    <dd><?php if ($single['isbn13']) {
                                            echo $single['isbn13'];
                                        } ?></dd>
                                </dl>
                                <dl>
                                    <dt class="text-capitalize">kindle Asin:</dt>
                                    <dd><?php if ($single['kindle_asin']) {
                                            echo $single['kindle_asin'];
                                        } ?></dd>
                                </dl>
                            </div>
                            <?php if ($options['468x60'] == 'true') : ?>
                                <div class="d-block" style="overflow:hidden;">
                                    <?php $adspath = ABSPATH . THMPATH . $options['theme_name'] . '/ads/468x60.php';
                                    $adscode = file_get_contents($adspath, NULL);
                                    if (isset($adscode) and !empty($adscode)) : ?><?php echo $adscode; ?><?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading-small mt-5"><span data-i18n="books.more-books-from">More Books</span></h3>
                        <div class="carrousel carrousel--author">
                            <div class="carrousel__fiveup owl-carousel">
                                <?php if (is_array($single['similar'])) {
                                    foreach ((array)$single['similar'] as $key => $item) { ?>
                                        <div class="thumb">
                                            <div class="thumb__cover">
                                                <div class="cover">
                                                    <div class="cover__wrapper">
                                                        <a href="<?php echo seobooks($item['id'], $item['title']); ?>" class="cover__img" style="background-image:url(<?php echo $item['poster']; ?> );">
                                                            <img src="<?php echo get_webinfo('theme_url'); ?>img/doc-cover-shadow.png" class="img-fluid">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?php echo seobooks($item['id'], $item['title']); ?>" class="thumb__info">
                                                <h1 class="document__title"><?php echo $item['title']; ?></h1>
                                                <h2 class="document__subtitle"><?php echo $item['author']; ?></h2>
                                                <div class="document__rating">
                                                    <div class="rating">
                                                        <div class='rating__stars'>
                                                            <div class='rating__stars__wrapper'>
                                                                <span class='rating__stars__icons' style="width:90%"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <?php if ($key == 11) break;
                                    }
                                } else {
                                    $Books = unserialize(deqila_data_BooksAll('most-read', 1));
                                    if (is_array($Books)) {
                                        foreach ($Books as $key => $item) {  ?>
                                            <div class="thumb">
                                                <div class="thumb__cover">
                                                    <div class="cover">
                                                        <div class="cover__wrapper">
                                                            <a href="<?php echo seobooks($item['id'], $item['title']); ?>" class="cover__img" style="background-image:url(<?php echo $item['poster']; ?> );">
                                                                <img src="<?php echo get_webinfo('theme_url'); ?>img/doc-cover-shadow.png" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="<?php echo seobooks($item['id'], $item['title']); ?>" class="thumb__info">
                                                    <h1 class="document__title"><?php echo $item['title']; ?></h1>
                                                    <h2 class="document__subtitle"><?php echo $item['author']; ?></h2>
                                                    <div class="document__rating">
                                                        <div class="rating">
                                                            <div class='rating__stars'>
                                                                <div class='rating__stars__wrapper'>
                                                                    <span class='rating__stars__icons' style="width:89.2%"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                <?php if ($key == 11) break;
                                        }
                                    }
                                } ?>
                            </div>
                        </div>
                    </div>
                    <?php if ($options['nativeads'] == 'true') : ?>
                        <div class="col-12">
                            <div class="d-block" style="margin: 15px auto;overflow:hidden;text-align:center;">
                                <?php $adspath = ABSPATH . THMPATH . $options['theme_name'] . '/ads/nativeads.php';
                                $adscode = file_get_contents($adspath, NULL);
                                if (isset($adscode) and !empty($adscode)) : ?><?php echo $adscode; ?><?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php } ?>
    <?php get_footer(); ?>