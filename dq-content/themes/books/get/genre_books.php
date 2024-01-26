<?php
/**
 * @package deqila.id
 */
$judul_genre = ucwords(str_replace('-',' ',$_GET['title']));
$hack_title =  'Most Popular Book Category '. $judul_genre . ' - ' . $options['webname'];
$hack_description = short($hack_title.', All Most Popular Book Category '.$judul_genre.' List');
$hack_keywords = strtolower( $hack_title );
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
                        <h3 class="heading-small mt-5"><span data-i18n="books.more-books-from"><?php echo $judul_genre?> Books</span></h3>
                            <div class="row">
                                <?php 
                    			    if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; } 
                    			    if ( empty( $_GET['title'] ) ) { $namanya = 'default'; }else{ $namanya = $_GET['title']; } 
                    						$Books = unserialize( deqila_data_genres($namanya, $page));
                    							 if( is_array($Books) ) { 
                    							 foreach ($Books as $key=>$item ) { 
                    			?>
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
                                <?php if ($key == 47)break; } } ?>
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