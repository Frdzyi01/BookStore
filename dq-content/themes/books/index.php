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

<?php } ?>


<?php include(ABSPATH . THMPATH . $options['theme_name'] . '/header2.php') ?>
<?php if (empty($_GET['book'])) { ?>
    <section id="banner" style="background: #f9f3ec">
        <div class="container">
            <div class="swiper main-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide py-5">
                        <div class="row banner-content align-items-center">
                            <div class="img-wrapper col-md-5">
                                <img src="images/banner-img.png" class="img-fluid" />
                            </div>
                            <div class="content-wrapper col-md-7 p-5 mb-5">
                                <div class="secondary-font text-primary text-uppercase mb-4">
                                    Save 10 - 20 % off
                                </div>
                                <h2 class="banner-title display-1 fw-normal">
                                    Best destination for
                                    <span class="text-primary">your pets</span>
                                </h2>
                                <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                                    shop now
                                    <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide py-5">
                        <div class="row banner-content align-items-center">
                            <div class="img-wrapper col-md-5">
                                <img src="images//banner-img3.png" class="img-fluid" />
                            </div>
                            <div class="content-wrapper col-md-7 p-5 mb-5">
                                <div class="secondary-font text-primary text-uppercase mb-4">
                                    Save 10 - 20 % off
                                </div>
                                <h2 class="banner-title display-1 fw-normal">
                                    Best destination for
                                    <span class="text-primary">your pets</span>
                                </h2>
                                <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                                    shop now
                                    <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide py-5">
                        <div class="row banner-content align-items-center">
                            <div class="img-wrapper col-md-5">
                                <img src="images/banner-img4.png" class="img-fluid" />
                            </div>
                            <div class="content-wrapper col-md-7 p-5 mb-5">
                                <div class="secondary-font text-primary text-uppercase mb-4">
                                    Save 10 - 20 % off
                                </div>
                                <h2 class="banner-title display-1 fw-normal">
                                    Best destination for
                                    <span class="text-primary">your pets</span>
                                </h2>
                                <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                                    shop now
                                    <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination mb-5"></div>
            </div>
        </div>
    </section>

    <section id="foodies" class="my-5">
        <div class="container my-5 py-5">
            <div class="section-header d-md-flex justify-content-between align-items-center">
                <h2 class="display-3 fw-normal">Pet Foodies</h2>
            </div>

            <div class="isotope-container row">
                <div class="item cat col-md-4 col-lg-3 my-4">
                    <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item9.jpg" class="img-fluid rounded-4" alt="image" /></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item dog col-md-4 col-lg-3 my-4">
                    <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                        New
                    </div>
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item10.jpg" class="img-fluid rounded-4" alt="image" /></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item dog col-md-4 col-lg-3 my-4">
                    <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item11.jpg" class="img-fluid rounded-4" alt="image" /></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item cat col-md-4 col-lg-3 my-4">
                    <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                        Sold
                    </div>
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item12.jpg" class="img-fluid rounded-4" alt="image" /></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item bird col-md-4 col-lg-3 my-4">
                    <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item13.jpg" class="img-fluid rounded-4" alt="image" /></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item bird col-md-4 col-lg-3 my-4">
                    <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item14.jpg" class="img-fluid rounded-4" alt="image" /></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item dog col-md-4 col-lg-3 my-4">
                    <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                        Sale
                    </div>
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item15.jpg" class="img-fluid rounded-4" alt="image" /></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item cat col-md-4 col-lg-3 my-4">
                    <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item16.jpg" class="img-fluid rounded-4" alt="image" /></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <section id="banner" style="background: #f9f3ec">
        <div class="container">
            <div class="swiper main-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide py-5">
                        <div class="row banner-content align-items-center">
                            <div class="img-wrapper col-md-5">
                                <img src="images/banner-img.png" class="img-fluid" />
                            </div>
                            <div class="content-wrapper col-md-7 p-5 mb-5">
                                <div class="secondary-font text-primary text-uppercase mb-4">
                                    Save 10 - 20 % off
                                </div>
                                <h2 class="banner-title display-1 fw-normal">
                                    Best destination for
                                    <span class="text-primary">your pets</span>
                                </h2>
                                <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                                    shop now
                                    <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide py-5">
                        <div class="row banner-content align-items-center">
                            <div class="img-wrapper col-md-5">
                                <img src="images//banner-img3.png" class="img-fluid" />
                            </div>
                            <div class="content-wrapper col-md-7 p-5 mb-5">
                                <div class="secondary-font text-primary text-uppercase mb-4">
                                    Save 10 - 20 % off
                                </div>
                                <h2 class="banner-title display-1 fw-normal">
                                    Best destination for
                                    <span class="text-primary">your pets</span>
                                </h2>
                                <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                                    shop now
                                    <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide py-5">
                        <div class="row banner-content align-items-center">
                            <div class="img-wrapper col-md-5">
                                <img src="images/banner-img4.png" class="img-fluid" />
                            </div>
                            <div class="content-wrapper col-md-7 p-5 mb-5">
                                <div class="secondary-font text-primary text-uppercase mb-4">
                                    Save 10 - 20 % off
                                </div>
                                <h2 class="banner-title display-1 fw-normal">
                                    Best destination for
                                    <span class="text-primary">your pets</span>
                                </h2>
                                <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                                    shop now
                                    <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination mb-5"></div>
            </div>
        </div>
    </section>

    <section id="foodies" class="my-5">
        <div class="container my-5 py-5">
            <div class="section-header d-md-flex justify-content-between align-items-center">
                <h2 class="display-3 fw-normal">Pet Foodies</h2>
            </div>

            <div class="isotope-container row">
                <div class="item cat col-md-4 col-lg-3 my-4">
                    <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item9.jpg" class="img-fluid rounded-4" alt="image" /></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item dog col-md-4 col-lg-3 my-4">
                    <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                        New
                    </div>
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item10.jpg" class="img-fluid rounded-4" alt="image" /></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item dog col-md-4 col-lg-3 my-4">
                    <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item11.jpg" class="img-fluid rounded-4" alt="image" /></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item cat col-md-4 col-lg-3 my-4">
                    <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                        Sold
                    </div>
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item12.jpg" class="img-fluid rounded-4" alt="image" /></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item bird col-md-4 col-lg-3 my-4">
                    <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item13.jpg" class="img-fluid rounded-4" alt="image" /></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item bird col-md-4 col-lg-3 my-4">
                    <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item14.jpg" class="img-fluid rounded-4" alt="image" /></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item dog col-md-4 col-lg-3 my-4">
                    <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                        Sale
                    </div>
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item15.jpg" class="img-fluid rounded-4" alt="image" /></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item cat col-md-4 col-lg-3 my-4">
                    <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
                    <div class="card position-relative">
                        <a href="single-product.html"><img src="images/item16.jpg" class="img-fluid rounded-4" alt="image" /></a>
                        <div class="card-body p-0">
                            <a href="single-product.html">
                                <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                            </a>

                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                    5.0</span>

                                <h3 class="secondary-font text-primary">$18.00</h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php get_footer(); ?>