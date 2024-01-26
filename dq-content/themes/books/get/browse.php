<?php
/**
 * @package deqila.id
 */
$hack_title =  'Browse Books '. date( 'Y' ) . ' - ' . $options['webname'];
$hack_description = short($hack_title.', All Most Popular Books List');
$hack_keywords = strtolower( $hack_title );
get_header();
?>
        <meta itemprop="image" content="<?php echo get_webinfo('theme_url') ;?>img/og-image-default.jpg"/>
        <meta property="og:image" content="<?php echo get_webinfo('theme_url') ;?>img/og-image-default.jpg"/>
        <meta name="twitter:image" content="<?php echo get_webinfo('theme_url') ;?>img/og-image-default.jpg"/>
        <?php include(ABSPATH . THMPATH . $options['theme_name'] . '/header2.php')?>
        <h4 class="text-center mt-4">Browse Books</h4>
        <h6 class="text-center mb-4">Find and start reading your favorite books</h6>
        <section class="search-sec">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <select class="form-control search-slt cyan" id="exampleFormControlSelect1" data-style="btn-primary">
                                        <option>Book List</option>
                                        <option value="<?php echo seolistbooks('157516','Best_books_of_2021');?>">Best Book 2021</option>
										<option value="<?php echo seolistbooks('43','Best_Young_Adult_Books');?>">Best Young Adult Books</option>
										<option value="<?php echo seolistbooks('3','Best_Science_Fiction_Fantasy_Books');?>">Best Sci-Fict &amp; Fantasy</option>
										<option value="<?php echo seolistbooks('155686','NY_Times_Best_Books_of_2020');?>">NY Times Best Books</option>
										<option value="<?php echo seolistbooks('10334','_Best_Top_Romance_Novels_of_All_Time');?>">Best Romance Novel</option>
										<option value="<?php echo seolistbooks('76315','Best_self_published_books_on_Amazon');?>">Best self-published Amazon</option>
										<option value="<?php echo seolistbooks('69635','100_Books_to_Read_in_a_Lifetime_Readers_Picks');?>">100 Books to Read</option>
										<option value="<?php echo seolistbooks('76994','100_Children_s_Books_to_Read_in_a_Lifetime');?>">100 Child Books to Read</option>
                                    </select> 
                                </div>
                                 <div class="col-lg-4 col-md-4 col-sm-12">
                                    <select class="form-control search-slt green" id="exampleFormControlSelect1">
                                        <option>Book Categories</option>
                                        <option value="<?php echo get_webinfo('url');?>/books-newrelease">New release</option>
										<option value="<?php echo get_webinfo('url');?>/books-popular">Popular Books</option>
										<option value="<?php echo get_webinfo('url');?>/books-mostread">Most Read</option>
										<option value="<?php echo get_webinfo('url');?>/books-author">Popular Author</option>
                                    </select>
                                </div>
                                  <div class="col-lg-4 col-md-4 col-sm-12">
                                    <select class="form-control search-slt yellow" id="exampleFormControlSelect1">
                                        <option>Book Genres</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/art">Art</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/biography">Biography</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/business">Business</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/children-s">Childrens</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/classics">Classics</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/comics">Comics</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/contemporary">Contemporary</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/manga">Manga</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/memoir">Memoir</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/music">Music</option>
										<option value="<?php echo get_webinfo('url') ;?>/genre/mystery">Mystery</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/non-fiction">Non Fiction</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/poetry">Poetry</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/psychology">Psychology</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/cookbooks">Cookbooks</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/religion">Religion</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/crime">Crime</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/romance">Romance</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/science">Science</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/fantasy">Fantasy</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/science-fiction">Science Fiction</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/fiction">Fiction</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/graphic-novels">Graphic Novels</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/sports">Sport</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/history">History</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/thriller">Thriller</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/horror">Horror</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/travel">Travel</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/humor-and-comedy">Humor and Comedy</option>
                                        <option value="<?php echo get_webinfo('url') ;?>/genre/young-adult">Young Adult</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <script>
            $(document).on('change', '.search-slt', function(e){
                e.preventDefault();
                window.location = $(this).find('option:selected').val();
            });
        </script>
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
                              <div class="row">
                                <?php 
                    			    if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; } 
                    						$Books = unserialize( deqila_data_BooksAll('popular', $page));
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