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
} else {
    $bestSellers = unserialize(deqila_data_BooksAll('best-sellers', $pageNumber)); // Menampilkan buku best sellers
    $newReleases = unserialize(deqila_data_BooksAll('new-release', $pageNumber)); // Menampilkan buku new releases
    $mostRead = unserialize(deqila_data_BooksAll('most-read', $pageNumber)); // Menampilkan buku most read

?>
<section id="banner" style="background: #d1dfef; height: 250px;">
    <div class="container">
        <!-- cover -->
        <br>
        <div class="banner__header"
            style=" text-align: center; padding: 20px; border: 2px solid #000; border-radius: 10px;">
            <div class="info-holder">
                <h1 data-i18n="books.banner-subscribe-header">Subscribe to Read | $0.00</h1>
                <p data-i18n="books.banner-subscribe-text">Join today and start reading your favorite books for
                    Free!</p>
            </div>
            <div class="btn-holder">
                <a href="https://www.sjwk65.com/scripts/un981c6l?a_aid=59c6c101&amp;a_bid=e86303d4&amp;chan=colab&amp;data1="
                    class="btn btn--secondary" data-i18n="_.create-free-account">Create Free Account</a>
            </div>
        </div>
    </div>
</section>

<hr style="margin-top: 20px;">

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
                        <img src="<?php echo $item['poster']; ?>" class="img-fluid rounded-4 w-100"
                            style="height: 400px; object-fit: cover;" alt="<?php echo $item['title']; ?>" />
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
                        <img src="<?php echo $item['poster']; ?>" class="img-fluid rounded-4 w-100"
                            style="height: 400px; object-fit: cover;" alt="<?php echo $item['title']; ?>" />
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
                        <img src="<?php echo $item['poster']; ?>" class="img-fluid rounded-4 w-100"
                            style="height: 400px; object-fit: cover;" alt="<?php echo $item['title']; ?>" />
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