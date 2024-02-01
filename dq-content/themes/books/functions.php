<?php
include(ABSPATH . THMPATH . $options['theme_name'] . '/blockid.php');
function deqila_data_BooksList($nama = '', $id = '', $title = '')
{
    $path    = ABSPATH . 'cache/books/';
    $name    = $nama . $id . $title . $page . '.json';
    if (file_exists($path . $name) && !deqila_expire($path . $name)) {
        $data    = file_get_contents($path . $name);
        return $data;
    } else {
        $MainUrl = 'https://www.goodreads.com/list/show/' . $id . '.' . $title;
        $load = get_contents($MainUrl);
        $response = str_get_html($load);
        $results = array();
        foreach ($response->find("table.tableList") as $Books_item) {
            $Books_list = $Books_item->find("tr");
            foreach ($Books_list as $row) {
                $item['title'] = $row->find('.bookTitle span', 0)->plaintext;
                $item['link'] = $row->find('.bookTitle', 0)->href;
                $link1 = explode("/",  $item['link']);
                $link2 = end($link1);
                $link3 = str_replace(array('_', '.',), '-', $link2);
                $link4 = explode('-',  $link3);
                $item['id'] = $link4[0];
                $item['term'] = $link2;
                $item['author'] = $row->find('.authorName', 0)->plaintext;
                $item['authorlink'] = $row->find('.authorName', 0)->href;
                $link11 = explode("/",  $item['authorlink']);
                $link12 = end($link11);
                $link13 = str_replace('_', '-', $link12);
                $link14 = explode(".",  $link13);
                $item['idAuthor'] = $link14[0];
                $item['termAuthor'] = $link12;
                $item['poster_img'] = $row->find('img.bookCover', 0)->src;
                if ($item['poster_img'] == 'https://s.gr-assets.com/assets/nophoto/book/50x75-a91bf249278a81aabab721ef782c4a74.png') {
                    $item['poster'] = get_webinfo('theme_url') . 'img/no-cover.jpg';
                } else {
                    $item['poster'] = str_replace(array('._SY75_.', '._SX50_.', '._SX50_SY75_.', '._SX318_SY475_.', '._SX318_.', '._SY475_.', '._SX98_.', '._SY160_.'), '.', $item['poster_img']);
                }
                $results[]          = $item;
            }
        }
        if (get_webinfo('_cachebooks') == 'true') {
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
                file_put_contents($path . $name, serialize($results));
            } else {
                file_put_contents($path . $name, serialize($results));
            }
        }
        return serialize($results);
    }
}
function deqila_data_BooksAll($nama = '', $page = '')
{
    $path    = ABSPATH . 'cache/books/';
    $name    = $nama . $page . '.json';
    if (file_exists($path . $name) && !deqila_expire($path . $name)) {
        $data    = file_get_contents($path . $name);
        return $data;
    } else {
        $MainUrl = 'https://www.goodreads.com/shelf/show/' . $nama . '?page=' . $page;
        $load = get_contents($MainUrl);
        $response = str_get_html($load);
        $results = array();
        foreach ($response->find("div.elementList") as $Books_item) {
            $Books_list = $Books_item->find(".left");
            foreach ($Books_list as $row) {
                $item['title'] = $row->find('.bookTitle', 0)->plaintext;
                $item['link'] = $row->find('.bookTitle', 0)->href;
                $link1 = explode("/",  $item['link']);
                $link2 = end($link1);
                $link3 = str_replace(array('_', '.',), '-', $link2);
                $link4 = explode('-',  $link3);
                $item['id'] = $link4[0];
                $item['term'] = $link2;
                $item['author'] = $row->find('.authorName', 0)->plaintext;
                $item['authorlink'] = $row->find('.authorName', 0)->href;
                $link11 = explode("/",  $item['authorlink']);
                $link12 = end($link11);
                $link13 = str_replace('_', '-', $link12);
                $link14 = explode(".",  $link13);
                $item['idAuthor'] = $link14[0];
                $item['termAuthor'] = $link12;
                $item['poster_img'] = $row->find('.leftAlignedImage img[src]', 0)->src;
                if ($item['poster_img'] == 'https://s.gr-assets.com/assets/nophoto/book/50x75-a91bf249278a81aabab721ef782c4a74.png') {
                    $item['poster'] = get_webinfo('theme_url') . 'img/no-cover.jpg';
                } else {
                    $item['poster'] = str_replace(array('._SY75_.', '._SX50_.', '._SX50_SY75_.', '._SX318_SY475_.', '._SX318_.', '._SY475_.', '._SX98_.', '._SY160_.'), '.', $item['poster_img']);
                }
                $results[]          = $item;
            }
        }
        if (get_webinfo('_cachebooks') == 'true') {
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
                file_put_contents($path . $name, serialize($results));
            } else {
                file_put_contents($path . $name, serialize($results));
            }
        }
        return serialize($results);
    }
}
function deqila_data_authorbook($nama = '')
{
    $path    = ABSPATH . 'cache/books/';
    $name    = $nama . $title . $page . '.json';
    if (file_exists($path . $name) && !deqila_expire($path . $name)) {
        $data    = file_get_contents($path . $name);
        return $data;
    } else {
        $MainUrl = 'https://www.goodreads.com/author/' . $nama;
        $load = get_contents($MainUrl);
        $response = str_get_html($load);
        $results = array();
        foreach ($response->find("div.leftContainer") as $Books_item) {
            $Books_list = $Books_item->find(".elementList");
            foreach ($Books_list as $row) {
                $item['title'] = $row->find('.bookAuthorProfile__name', 0)->plaintext;
                $item['link'] = $row->find('.bookAuthorProfile__name', 0)->href;
                $link1 = explode("/",  $item['link']);
                $link2 = end($link1);
                $link3 = str_replace(array('_', '.',), '-', $link2);
                $link4 = explode('-',  $link3);
                $item['id'] = $link4[0];
                $item['term'] = $link2;
                $item['detail'] = str_replace('member ', '-', $row->find('.greyText', 0)->innertext);
                $item['poster_img'] = $row->find('.bookAuthorProfile__photoContainer img[src]', 0)->src;
                if ($item['poster_img'] == 'https://s.gr-assets.com/assets/nophoto/user/u_50x66-632230dc9882b4352d753eedf9396530.png') {
                    $item['poster'] = get_webinfo('theme_url') . 'img/no-cover.jpg';
                } else {
                    $item['poster'] = $item['poster_img'];
                }
                $results[]          = $item;
            }
        }
        if (get_webinfo('_cachebooks') == 'true') {
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
                file_put_contents($path . $name, serialize($results));
            } else {
                file_put_contents($path . $name, serialize($results));
            }
        }
        return serialize($results);
    }
}
function deqila_data_genres($nama = '', $page = '')
{
    $path    = ABSPATH . 'cache/books/';
    $name    = $nama . '_genre_' . $page . '.json';
    if (file_exists($path . $name) && !deqila_expire($path . $name)) {
        $data    = file_get_contents($path . $name);
        return $data;
    } else {
        $MainUrl = 'https://www.goodreads.com/shelf/show/' . $nama . '?page=' . $page;
        $load = get_contents($MainUrl);
        $response = str_get_html($load);
        $results = array();
        foreach ($response->find("div.elementList") as $Books_item) {
            $Books_list = $Books_item->find(".left");
            foreach ($Books_list as $row) {
                $item['title'] = $row->find('.bookTitle', 0)->plaintext;
                $item['link'] = $row->find('.bookTitle', 0)->href;
                $link1 = explode("/",  $item['link']);
                $link2 = end($link1);
                $link3 = str_replace(array('_', '.',), '-', $link2);
                $link4 = explode('-',  $link3);
                $item['id'] = $link4[0];
                $item['term'] = $link2;
                $item['author'] = $row->find('.authorName', 0)->plaintext;
                $item['authorlink'] = $row->find('.authorName', 0)->href;
                $link11 = explode("/",  $item['authorlink']);
                $link12 = end($link11);
                $link13 = str_replace('_', '-', $link12);
                $link14 = explode(".",  $link13);
                $item['idAuthor'] = $link14[0];
                $item['termAuthor'] = $link12;
                $item['poster_img'] = $row->find('.leftAlignedImage img[src]', 0)->src;
                if ($item['poster_img'] == 'https://s.gr-assets.com/assets/nophoto/book/50x75-a91bf249278a81aabab721ef782c4a74.png') {
                    $item['poster'] = get_webinfo('theme_url') . 'img/no-cover.jpg';
                } else {
                    $item['poster'] = str_replace(array('._SY75_.', '._SX50_.', '._SX50_SY75_.', '._SX318_SY475_.', '._SX318_.', '._SY475_.', '._SX98_.', '._SY160_.'), '.', $item['poster_img']);
                }
                $results[]          = $item;
            }
        }
        if (get_webinfo('_cachebooks') == 'true') {
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
                file_put_contents($path . $name, serialize($results));
            } else {
                file_put_contents($path . $name, serialize($results));
            }
        }
        return serialize($results);
    }
}
if (isset($_GET['do']) && $_GET['do'] == "book" && isset($_GET['id'])) {
    $BooksID = $_GET['id'];
    $arraygr = explode(",", $options['Goodread_api']);
    $apikey = $arraygr[array_rand($arraygr)];
    $bkey = $apikey;
    $MainUrl = 'https://www.goodreads.com/book/show/' . $BooksID . '.xml?key=' . $bkey;
    $load = get_contents($MainUrl);
    $xml = simplexml_load_string($load, 'SimpleXMLElement', LIBXML_NOCDATA);
    $json = json_encode($xml);
    $data = json_decode($json, TRUE);
    $row = $data['book'];
    $banned_ids = $bad_id;
    if (is_array($banned_ids)) {
        foreach ($banned_ids as $block_id) {
            $bad_block_id     = $block_id;
            if ($row['isbn'] == $block_id or $_GET['id'] == $block_id) {
                header('Location: /404');
            }
        }
    }
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

    $hack_title = $options['title_books_before'] . $single['title'] . ' By ' . $item['authorname'] . $options['title_books_after'];
    $hack_description = $options['title_books_before'] . $single['title'] . ' By ' . $item['authorname'] . $options['title_books_after'] . ' - ' . $options['webname'];
    $hack_keywords = $item['title'] . ', ' . $item['authorname'] . ', ' . $options['webkeywords'];
}
if (isset($_GET['do']) && $_GET['do'] == "read" && isset($_GET['id'])) {
    $BooksID = $_GET['id'];
    $arraygr = explode(",", $options['Goodread_api']);
    $apikey = $arraygr[array_rand($arraygr)];
    $bkey = $apikey;
    $MainUrl = 'https://www.goodreads.com/book/show/' . $BooksID . '.xml?key=' . $bkey;
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

    $hack_title = $options['title_books_before'] . $single['title'] . ' By ' . $item['authorname'] . $options['title_books_after'];
    $hack_description = $options['title_books_before'] . $single['title'] . ' By ' . $item['authorname'] . $options['title_books_after'] . ' - ' . $options['webname'];
    $hack_keywords = $item['title'] . ', ' . $item['authorname'] . ', ' . $options['webkeywords'];
}
if (isset($_GET['do']) && $_GET['do'] == "books" && isset($_GET['id'])) {
    $BooksID = $_GET['id'];
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
    $hack_title = $options['title_books_before'] . $single['title'] . ' By ' . $item['authorname'] . $options['title_books_after'];
    $hack_description = $options['title_books_before'] . $single['title'] . ' By ' . $item['authorname'] . $options['title_books_after'] . ' - ' . $options['webname'];
    $hack_keywords = $item['title'] . ', ' . $item['authorname'] . ', ' . $options['webkeywords'];
}
if (isset($_GET['do']) && $_GET['do'] == "desc" && isset($_GET['id'])) {
    $BooksID = $_GET['id'];
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
        $buy_linkss = array();
        foreach ($row['buy_links']['buy_link'] as $result) : $buy_linkss[] = '<li><a href="#"><span>' . $result['name'] . '</span></a></li>';
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

    $hack_title = $options['title_books_before'] . $single['title'] . ' By ' . $item['authorname'] . $options['title_books_after'];
    $hack_description = $options['title_books_before'] . $single['title'] . ' By ' . $item['authorname'] . $options['title_books_after'] . ' - ' . $options['webname'];
    $hack_keywords = $item['title'] . ', ' . $item['authorname'] . ', ' . $options['webkeywords'];
}
if (isset($_GET['get']) && $_GET['get'] == "author" && isset($_GET['id'])) {
    $BooksID = $_GET['id'];
    $arraygr = explode(",", $options['Goodread_api']);
    $apikey = $arraygr[array_rand($arraygr)];
    $bkey = $apikey;
    $MainUrl = 'https://www.goodreads.com/author/show/' . $BooksID . '.xml?format=xml&key=' . $bkey;
    $load = get_contents($MainUrl);
    $xml = simplexml_load_string($load, 'SimpleXMLElement', LIBXML_NOCDATA);
    $json = json_encode($xml);
    $data = json_decode($json, TRUE);
    $row = $data['author'];
    if ($row == null) {
        header("Refresh:0");
    }
    $single['id'] = $row['id'];
    $single['title'] = $row['name'];
    $single['poster_img'] = $row['image_url'];
    if ($single['poster_img'] == 'https://s.gr-assets.com/assets/nophoto/user/u_200x266-e183445fd1a1b5cc7075bb1cf7043306.png') {
        $single['poster'] = get_webinfo('theme_url') . 'img/default-read.jpg';
    } else {
        $single['poster'] = $single['poster_img'];
    }
    $single['description'] = preg_replace("/<([a-z][a-z0-9]*)[^>]*?(\/?)>/si", '<$1$2>', $row['about']);
    $single['works_count'] = $row['works_count'];
    if (is_array($row['books']['book'])) {
        foreach ((array)$row['books']['book'] as $similar) {
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
                $sim['poster'] = str_replace(array('._SY75_.', '._SX50_.', '._SX50_SY75_.', '._SX318_SY475_.', '._SX318_.', '._SY475_.', '._SX98_.', '._SY160_.'), '.', $sim['poster_img']);
            }
            $sim['idAuthor'] = $similar['authors']['author']['id'];
            $sim['author'] = $similar['authors']['author']['name'];
            $single['similar'][] = $sim;
        }
    }

    $hack_title = $options['people_before'] . $single['title'] . $options['people_after'];
    $hack_description = $options['people_before'] . $single['title'] . $options['people_after'] . ' - ' . $options['webname'];
    $hack_keywords = $item['title'] . ', ' . $options['webkeywords'];
}
if (isset($_GET['s'])) {
    if ($_GET['s']) {
        $SearchQ = urlencode($_GET['s']);
        $arraygr = explode(",", $options['Goodread_api']);
        $apikey = $arraygr[array_rand($arraygr)];
        $bkey = $apikey;
        $MainUrl = 'https://www.goodreads.com/book/isbn/' . $SearchQ . '?format=xml&key=' . $bkey;
        $load = get_contents($MainUrl);
        $xml = simplexml_load_string($load, 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);
        $data = json_decode($json, TRUE);
        if (is_numeric($_GET['s']) && $data != null) {
            header("Location: /" . get_webinfo('isbnURL') . '/' . $SearchQ);
        } else {
            $SearchQ = urlencode($_GET['s']);
            $arraygr = explode(",", $options['Goodread_api']);
            $apikey = $arraygr[array_rand($arraygr)];
            $bkey = $apikey;
            if (empty($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }
            $MainUrl = 'https://www.goodreads.com/search/index.xml?format=xml&key=' . $bkey . '&page=' . $page . '&search[all]&q=' . $SearchQ;
            $load = get_contents($MainUrl);
            $xml = simplexml_load_string($load, 'SimpleXMLElement', LIBXML_NOCDATA);
            $json = json_encode($xml);
            $data = json_decode($json, TRUE);
            $ResultSearch = $data['search']['results']['work'];
            if ($ResultSearch) {
                $BooksResults = array();
                foreach ((array)$ResultSearch as $row) {
                    $item['id'] =  $row['best_book']['id'];
                    $item['title'] = $row['best_book']['title'];
                    $item['authorid'] =  $row['best_book']['author']['id'];
                    $item['authortitle'] = $row['best_book']['author']['name'];
                    $item['poster_img'] = $row['best_book']['image_url'];
                    if ($item['poster_img'] == 'https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png') {
                        $item['poster'] = get_webinfo('theme_url') . 'img/no-cover.jpg';
                    } else {
                        $item['poster'] = str_replace(array('._SY75_.', '._SX50_.', '._SX50_SY75_.', '._SX318_SY475_.', '._SX318_.', '._SY475_.', '._SX98_.', '._SY160_.'), '.', $item['poster_img']);
                    }
                    $BooksResults[] = $item;
                }
                $BooksResults['total_results'] = $data['search']['total-results'];
            }
        }
    }
}
function seobooks($id, $query = '')
{
    global $negara;
    if (empty($_GET['language'])) {
        if ($id) :
            return site_url() . '/' . get_webinfo('bookURL') . '/' . $id . '/' . sanitize_title($query);
        endif;
    } else {
        if ($id) :
            return site_url() . '/' . $negara . '/' . get_webinfo('bookURL') . '/' . $id . '/' . sanitize_title($query);
        endif;
    }
}
function seoreadbooks($id, $query = '')
{
    global $negara;
    if (empty($_GET['language'])) {
        if ($id) :
            return site_url() . '/read/' . $id . '/' . sanitize_title($query);
        endif;
    } else {
        if ($id) :
            return site_url() . '/' . $negara . '/read/' . $id . '/' . sanitize_title($query);
        endif;
    }
}
function seoauthorbooks($id, $query = '')
{
    global $negara;
    if (empty($_GET['language'])) {
        if ($id) :
            return site_url() . '/' . get_webinfo('authorbookURL') . '/' . $id . '/' . sanitize_title($query);
        endif;
    } else {
        if ($id) :
            return site_url() . '/' . $negara . '/' . get_webinfo('authorbookURL') . '/' . $id . '/' . sanitize_title($query);
        endif;
    }
}
function seogenrebooks($query = '')
{
    global $negara;
    if (empty($_GET['language'])) {
        if ($query) :
            return site_url() . '/' . get_webinfo('genreURL') . '/' . sanitize_title($query);
        endif;
    } else {
        if ($query) :
            return site_url() . '/' . $negara . '/' . get_webinfo('genreURL') . '/' . sanitize_title($query);
        endif;
    }
}
function seolistbooks($id, $query = '')
{
    global $negara;
    if (empty($_GET['language'])) {
        if ($id) :
            return site_url() . '/' . get_webinfo('listURL') . '/' . $id . '/' . $query;
        endif;
    } else {
        if ($id) :
            return site_url() . '/' . $negara . '/' . get_webinfo('listURL') . '/' . $id . '/' . $query;
        endif;
    }
}
function make_seo($query = '')
{
    if ($query) :
        return site_url() . '/search/' . sanitize_title($query);
    endif;
}
function sitemap_read($query = '')
{
    if ($query) :
        return site_url() . '/readonline/' . sanitize_title($query);
    //return site_url() . '/?s='.urlencode($query);
    endif;
}
if (isset($_POST["s"]) && !empty($_POST["s"])) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /" . $options['search'] . '/' . urlencode($_POST["s"]));
}
