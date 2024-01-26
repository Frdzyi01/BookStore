<?php
/**
* @author deqila.id
* @copyright 2020
*/
get_header();
?>
        <meta itemprop="image" content="<?php echo $single['images'] ;?>"/>
        <meta property="og:image" content="<?php echo $single['images'] ;?>"/>
        <meta name="twitter:image" content="<?php echo $single['images'] ;?>"/>
        <?php include(ABSPATH . THMPATH . $options['theme_name'] . '/header2.php')?>
        <div class="tg-innerbanner tg-haslayout tg-bginnerbanner" style="height: 150px;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-innerbannercontent">
							<h1><?php echo $single['title']?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div id="tg-content" class="tg-content">
									<div class="tg-productdetail">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
												<div class="tg-postbook">
													<figure class="tg-featureimg text-center" style="height: 100%;"><img style="margin: 0px auto;" src="<?php echo $single['poster']?>" alt="<?php echo $single['title']?>" class="img-responsive"></figure>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
												<div class="tg-productcontent">
													<ul class="tg-bookscategories">
														<li>Title</li>
													</ul>
													<ul class="tg-productinfo">
            											<li style="padding: 10px;">Read Free <?php echo $single['title'];?></li>
            											<li style="padding: 10px;">Read Online <?php echo $single['title'];?></li>
            											<li style="padding: 10px;">Read Online <?php echo $single['title'];?> Full PDF</li>
            											<li style="padding: 10px;">Read Online <?php echo $single['title'];?> By <?php echo $single['authorname']?></li>
            											<li style="padding: 10px;">Download <?php echo $single['title'];?></li>
            											<li style="padding: 10px;">Download Free <?php echo $single['title'];?></li>
            											<li style="padding: 10px;">Download <?php echo $single['title'];?> Full PDF</li>
            											<li style="padding: 10px;">Download <?php echo $single['title'];?> By <?php echo $single['authorname']?></li>
            										</ul>
            										<ul class="tg-bookscategories">
														<li>Short Description</li>
													</ul>
													<ul class="tg-productinfo">
            											<li style="background: none;">
            											    <?php echo $single['title'];?> By <?php echo $single['authorname']?><br>
            											    <?php if($single['description']){echo short($single['description']);}?><br><br>
            											    Link1 : <?php echo get_webinfo('url');?>/books/<?php echo $_GET['id']?><br><br>
            											    Link2 : <?php echo seobooks($single['id'],$single['title']);?><br><br>
            											    Author : <?php echo $single['authorname']?><br>
            											    Rating : <?php echo $single['rating']?>/<?php echo $single['votecount']?> people<br>
            											    Popularity : <?php echo $single['votereview']?> people<br>
            											    Format: <?php if($single['format']){echo $single['format'];}?><br>
            												Pages: <?php if($single['numpages']){echo $single['numpages'];}?> pages<br>
            												Publication: <?php if($single['year']){echo $single['year'];}?><br>
            												Publisher: <?php if($single['publisher']){echo $single['publisher'];}?><br>
            												Edition: <?php if($single['edition']){echo $single['edition'];}?><br>
            												Language: <?php if($single['language']){echo $single['language'];}?><br>
            												ISBN10: <?php if($single['isbn']){echo $single['isbn'];}?><br>
            												ISBN13: <?php if($single['isbn13']){echo $single['isbn13'];}?><br>
            												kindle Asin: <?php if($single['kindle_asin']){echo $single['kindle_asin'];}?><br>
            											</li>
            										</ul>
													<ul class="tg-bookscategories">
														<li>Long Description</li>
													</ul>
													<ul class="tg-productinfo">
            											<li style="background: none;">
            											    <?php echo $single['title'];?> By <?php echo $single['authorname']?><br>
            											    <?php if($single['description']){echo $single['description'];}?><br><br>
            											    Link1 : <?php echo get_webinfo('url');?>/books/<?php echo $_GET['id']?><br><br>
            											    Link2 : <?php echo seobooks($single['id'],$single['title']);?><br><br>
            											    Author : <?php echo $single['authorname']?><br>
            											    Rating : <?php echo $single['rating']?>/<?php echo $single['votecount']?> people<br>
            											    Popularity : <?php echo $single['votereview']?> people<br>
            											    Format: <?php if($single['format']){echo $single['format'];}?><br>
            												Pages: <?php if($single['numpages']){echo $single['numpages'];}?> pages<br>
            												Publication: <?php if($single['year']){echo $single['year'];}?><br>
            												Publisher: <?php if($single['publisher']){echo $single['publisher'];}?><br>
            												Edition: <?php if($single['edition']){echo $single['edition'];}?><br>
            												Language: <?php if($single['language']){echo $single['language'];}?><br>
            												ISBN10: <?php if($single['isbn']){echo $single['isbn'];}?><br>
            												ISBN13: <?php if($single['isbn13']){echo $single['isbn13'];}?><br>
            												kindle Asin: <?php if($single['kindle_asin']){echo $single['kindle_asin'];}?><br>
            											</li>
            										</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</main>
		
<?php get_footer(); ?>