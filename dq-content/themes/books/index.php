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
    // Menampilkan buku best sellers

    $bestSellers = unserialize(deqila_data_BooksAll('best-sellers', $pageNumber)); // Menampilkan buku best sellers

    // Pastikan $bestSellers memiliki nilai sebelum digunakan
    // if (isset($bestSellers) && is_array($bestSellers)) {
    //     echo '<div class="isotope-container row">';

    //     $count = 0; // Counter untuk membatasi tampilan hanya 4 item

    //     foreach ($bestSellers as $item) {
    //         if ($count >= 4) {
    //             break; // Hentikan loop setelah 4 item ditampilkan
    //         }

    //         echo '<div class="item col-md-4 col-lg-3 my-4">';
    //         echo '<div class="card position-relative">';
    //         echo '<a href="' . seobooks($item['id'], $item['title']) . '">';
    //         echo '<img src="' . $item['poster'] . '" class="img-fluid rounded-4" alt="' . $item['title'] . '" />';
    //         echo '</a>';
    //         echo '<div class="card-body p-0">';
    //         echo '<a href="' . seobooks($item['id'], $item['title']) . '">';
    //         echo '<h3 class="card-title pt-4 m-0">' . $item['title'] . '</h3>';
    //         echo '</a>';
    //         echo '<div class="card-text">';
    //         echo '<span class="rating secondary-font">';
    //         // Tambahkan kode untuk menampilkan rating jika ada
    //         echo '</span>';
    //         echo '<h3 class="secondary-font text-primary">' . $item['author'] . '</h3>';
    //         echo '</div>';
    //         echo '</div>';
    //         echo '</div>';
    //         echo '</div>';

    //         $count++; // Increment counter setiap kali item ditampilkan
    //     }

    //     echo '</div>';
    // } else {
    //     echo "Tidak ada produk terlaris yang tersedia.";
    // }

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


            <!-- menampilkan buku best sellers -->
            <div class="section-header d-md-flex justify-content-between align-items-center">
                <h2 class="display-3 fw-normal">Menampilkan buku best sellers</h2>
            </div>

            <div class="isotope-container row">
                <?php
                $count = 0;
                foreach ($bestSellers as $item) :
                    if ($count >= 4) {
                        break;
                    }
                ?>
                    <div class="item col-md-4 col-lg-3 my-4">
                        <div class="card position-relative">
                            <a href="<?php echo seobooks($item['id'], $item['title']); ?>">
                                <img src="<?php echo $item['poster']; ?>" class="img-fluid rounded-4 w-100" style="height: 400px; object-fit: cover;" alt="<?php echo $item['title']; ?>" />
                            </a>
                            <div class="card-body p-0">
                                <a href="<?php echo seobooks($item['id'], $item['title']); ?>">
                                    <h3 class="card-title pt-4 m-0"><?php echo $item['title']; ?></h3>
                                </a>
                                <div class="card-text">
                                    <span class="rating secondary-font">
                                    </span>
                                    <h3 class="secondary-font text-primary"><?php echo $item['author']; ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                    $count++;
                endforeach;
                ?>
            </div>




            <!-- menampilkan buku new releases -->
            <div class="section-header d-md-flex justify-content-between align-items-center">
                <h2 class="display-3 fw-normal">Menampilkan buku new releases</h2>
            </div>

            <div class="isotope-container row">
                <?php
                $count = 0;
                foreach ($newReleases as $item) :
                    if ($count >= 4) {
                        break;
                    }
                ?>
                    <div class="item col-md-4 col-lg-3 my-4">
                        <div class="card position-relative">
                            <a href="<?php echo seobooks($item['id'], $item['title']); ?>">
                                <img src="<?php echo $item['poster']; ?>" class="img-fluid rounded-4 w-100" style="height: 400px; object-fit: cover;" alt="<?php echo $item['title']; ?>" />
                            </a>
                            <div class="card-body p-0">
                                <a href="<?php echo seobooks($item['id'], $item['title']); ?>">
                                    <h3 class="card-title pt-4 m-0"><?php echo $item['title']; ?></h3>
                                </a>
                                <div class="card-text">
                                    <span class="rating secondary-font">
                                    </span>
                                    <h3 class="secondary-font text-primary"><?php echo $item['author']; ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $count++;
                endforeach;
                ?>
            </div>


            <!-- menampilkan buku most read -->
            <div class="section-header d-md-flex justify-content-between align-items-center">
                <h2 class="display-3 fw-normal">Menampilkan buku most read</h2>
            </div>

            <div class="isotope-container row">
                <?php
                $count = 0;
                foreach ($mostRead as $item) :
                    if ($count >= 4) {
                        break;
                    }
                ?>
                    <div class="item col-md-4 col-lg-3 my-4">
                        <div class="card position-relative">
                            <a href="<?php echo seobooks($item['id'], $item['title']); ?>">
                                <img src="<?php echo $item['poster']; ?>" class="img-fluid rounded-4 w-100" style="height: 400px; object-fit: cover;" alt="<?php echo $item['title']; ?>" />
                            </a>
                            <div class="card-body p-0">
                                <a href="<?php echo seobooks($item['id'], $item['title']); ?>">
                                    <h3 class="card-title pt-4 m-0"><?php echo $item['title']; ?></h3>
                                </a>
                                <div class="card-text">
                                    <span class="rating secondary-font">
                                    </span>
                                    <h3 class="secondary-font text-primary"><?php echo $item['author']; ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $count++;
                endforeach;
                ?>
            </div>


        </div>
    </section>


<?php
}
?>
<?php get_footer(); ?>