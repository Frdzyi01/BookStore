<?php
/**
 * @package deqila.id
 */
$search_name = ucwords(str_replace('-',' ',$_GET['s']));
$hack_title =  'Search Result for '. $search_name . ' - ' . $options['webname'];
$hack_description = short($hack_title.', All Search Result for '.$search_name.' Books List');
$hack_keywords = strtolower( $search_name );
get_header();
?>
        <meta itemprop="image" content="<?php echo get_webinfo('theme_url') ;?>img/og-image-default.jpg"/>
        <meta property="og:image" content="<?php echo get_webinfo('theme_url') ;?>img/og-image-default.jpg"/>
        <meta name="twitter:image" content="<?php echo get_webinfo('theme_url') ;?>img/og-image-default.jpg"/>
        <?php include(ABSPATH . THMPATH . $options['theme_name'] . '/header2.php')?>
        <div class="container">
                <div class="row">
                    <?php if ( $options['728x90'] == 'true' ): ?>
                    <div class="col-12">
                        <div class="d-block mt-5" style="margin-left: auto;margin-right:auto;overflow:hidden;text-align:center;">    
                        <?php $adspath = ABSPATH . THMPATH . $options['theme_name'] . '/ads/728x90.php'; $adscode = file_get_contents($adspath,NULL); if(isset($adscode) and !empty($adscode)): ?><?php echo $adscode; ?><?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="col-12">
                        <h3 class="heading-small mt-5"><span data-i18n="books.more-books-from">Search Result for <?php echo $search_name?></span></h3>
                            <div class="row">
                                <?php if( is_array($BooksResults) ) {foreach ($BooksResults as $key=>$item ) {?>
							    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="thumb">
                                        <div class="thumb__cover">
                                            <div class="cover">
                                                <div class="cover__wrapper">
                                                    <a href="<?php echo seobooks($item['id'],$item['title']);?>" class="cover__img" style="background-image:url(<?php echo $item['poster'];?> );">
                                                        <img src="<?php echo get_webinfo('theme_url') ;?>img/doc-cover-shadow.png" class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>    
                                        </div>
                                        <a href="<?php echo seobooks($item['id'],$item['title']);?>" class="thumb__info">
                                            <h1 class="document__title"><?php echo $item['title'];?></h1>
                                            <h2 class="document__subtitle"><?php echo $item['authortitle'];?></h2>
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
                                 </div>
                                <?php if ($key == 19)break; }}?>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        							<div style="margin:20px auto">
                        			    <?php 
                        			        if ($BooksResults['total_results'] > 19) : 
                        			        require_once( ABSPATH. '/dq-includes/o_pagination.php'); 
                        			        if ($BooksResults['total_results'] > 1000) : 
                        			        $totalResults = 1000; 
                        			        else: $totalResults = $BooksResults['total_results']; 
                        			        endif; 
                        			        $limit= 20; 
                        			        $link = '/'.$options['search'].'/'.get_search_query(); 
                        			        $pagination = new CSSPagination($totalResults, $limit, $link,'?' );
                        			        $pagination->setPage($_GET['page']); echo $pagination->showPage(); endif; 
                        			    ?>
                                    </div>
        						</div>
                            </div>
                    </div>
                    <?php if ( $options['nativeads'] == 'true' ): ?>
                    <div class="col-12">
                        <div class="d-block" style="margin: 15px auto;overflow:hidden;text-align:center;">    
                        <?php $adspath = ABSPATH . THMPATH . $options['theme_name'] . '/ads/nativeads.php'; $adscode = file_get_contents($adspath,NULL); if(isset($adscode) and !empty($adscode)): ?><?php echo $adscode; ?><?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
        </div>
<?php get_footer(); ?>