<?php


include(ABSPATH . THMPATH . $options['theme_name'] . '/blockid.php');
include(ABSPATH . THMPATH . $options['theme_name'] . '/header2.php');

// Fungsi untuk mengambil data buku dari Goodreads
function loadBookData($BooksID, $options)
{
    $arraygr = explode(",", $options['Goodread_api']);
    $apikey = $arraygr[array_rand($arraygr)];
    $MainUrl = 'https://www.goodreads.com/book/isbn/' . $BooksID . '?format=xml&key=' . $apikey;
    $load = get_contents($MainUrl);
    $xml = simplexml_load_string($load, 'SimpleXMLElement', LIBXML_NOCDATA);
    $json = json_encode($xml);
    return json_decode($json, TRUE);
}

// Fungsi untuk menampilkan daftar buku
function displayBooks($Books, $theme_url)
{
    foreach ($Books as $key => $item) {
        if ($key > 11) break; // Menampilkan maksimal 12 buku
        include 'book_template.php'; // Memasukkan template HTML untuk item buku
    }
}

// Fungsi untuk mendapatkan nomor halaman
function getPageNumber()
{
    return empty($_GET['page']) ? 1 : $_GET['page'];
}

$bookRequested = isset($_GET['book']) && !is_null($_GET['book']);
$pageNumber = getPageNumber();

if ($bookRequested) {
    $BooksID = $_GET['book'];
    if (in_array($BooksID, $bad_id)) {
        header('Location: /404');
        exit;
    }
    $data = loadBookData($BooksID, $options);
    $bookDetails = $data['book'];
    // Lanjutkan dengan menampilkan detail buku tunggal
} else {
    // Menampilkan kategori buku yang berbeda
    $bestSellers = unserialize(deqila_data_BooksAll('best-sellers', $pageNumber)); // Menampilkan buku best sellers
    $newReleases = unserialize(deqila_data_BooksAll('new-release', $pageNumber)); // Menampilkan buku new releases
    $mostRead = unserialize(deqila_data_BooksAll('most-read', $pageNumber)); // Menampilkan buku most read

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
                <h2 class="display-3 fw-normal">Menampilkan buku best sellers</h2>
            </div>


            <!-- <?php displayBooks($bestSellers, get_webinfo('theme_url')); ?> -->
        </div>
    </section>

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


<?php
}
?>
<?php get_footer(); ?>