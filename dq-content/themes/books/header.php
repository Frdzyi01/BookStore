<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="rem:pc" content="books">
        <meta name="referrer" content="always">
        <meta name="robots" content="index,follow"/>
        <meta name="google-site-verification" content="<?php echo get_webinfo('google_code');?>">
        <meta name="yandex-verification" content="<?php echo get_webinfo('yandex_code');?>">
        <meta name="msvalidate.01" content="<?php echo get_webinfo('bing_code');?>">
        <title><?php dq_title();?></title>
        <meta itemprop="description" name="description" content="<?php dq_description();?>">
        <meta name="keywords" content="<?php dq_keywords();?>">
        <meta name="author" content="<?php echo $_SERVER['SERVER_NAME'];?>">
        <link href="<?php echo get_webinfo('theme_url') ;?>img/favicon.png" rel="icon" type="image/png">
    	<link rel="canonical" href="<?php echo canonical();?>">
        <meta property="og:title" content="<?php dq_title();?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo canonical();?>">
        <meta property="og:image:alt" content="<?php dq_title();?>">
        <meta property="og:description" content="<?php dq_description();?>">
        <meta property="og:locale" content="en">
        <meta property="og:site_name" content="<?php dq_title();?>">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:description" content="<?php dq_description();?>">
        <meta name="twitter:title" content="<?php dq_title();?>">
        <meta name="twitter:site" content="<?php dq_title();?>">
        <meta name="twitter:url" content="<?php echo canonical();?>">