<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/dq-includes/dq-loader.php');
header("Content-Type: text/xml;charset=utf-8");
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<rss xmlns:content="http://purl.org/rss/1.0/modules/content/"
xmlns:wfw="http://wellformedweb.org/CommentAPI/"
xmlns:dc="http://purl.org/dc/elements/1.1/"
xmlns:atom="http://www.w3.org/2005/Atom" xmlns:sy="http://purl.org/rss/1.0/modules/syndication/" xmlns:slash="http://purl.org/rss/1.0/modules/slash/" version="2.0">
<channel>
<title><?php echo $options['webname'];?></title>
<atom:link href="<?php echo $options['url'];?>/rss.xml" rel="self" type="application/rss+xml" />
<link><?php echo $options['url'];?></link>
<description><?php echo esc_attr($options['webdescription']);?></description>
<lastBuildDate><?php echo date("r");?></lastBuildDate>

<?php
if (recent_posts('1') ) {
        foreach(recent_posts('10', $type) as $rss) {
                $date = $rss['pubdate'];
                $link = $options['url'].$rss['slug'];  
                echo '<item><title>'.esc_attr($rss['title']).'</title><link>'.$link.'</link><description>' .esc_attr($rss['title']).' from '.$options['webname'].'</description><guid>'.$link.'</guid><pubDate>'.$date.'</pubDate></item>';
        }
}
?>
</channel>
</rss>