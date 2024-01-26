<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/dq-includes/dq-loader.php');
$hostname = $options['url'];
$date = date('Y-m-d', strtotime( 'r' ));
header("Content-Type: text/xml;charset=UTF-8");
echo '<?xml version="1.0" encoding="UTF-8"?><?xml-stylesheet type="text/xsl" href="'.$hostname.'/dq-includes/sitemap.xsl"?>';
?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<url><loc><?php echo $hostname;?>/sitemap.xml</loc><changefreq>daily</changefreq><priority>1.0</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/art</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/biography</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/business</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/children-s</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/classics</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/comics</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/contemporary</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/manga</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/memoir</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/music</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/mystery</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/non-fiction</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/poetry</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/psychology</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/cookbooks</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/religion</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/crime</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/romance</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/science</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/fantasy</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/science-fiction</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/fiction</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/graphic-novels</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/sports</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/history</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/thriller</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/horror</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/travel</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/humor-and-comedy</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
<url><loc><?php echo get_webinfo('url') ;?>/genre/young-adult</loc><lastmod><?php echo $date;?></lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
</urlset>