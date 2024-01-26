<?php
/**
 * The main template file
 */
include dirname(__DIR__) .'/header.php';?>
        <meta itemprop="image" content="<?php echo get_webinfo('theme_url') ;?>img/og-image-default.jpg"/>
        <meta property="og:image" content="<?php echo get_webinfo('theme_url') ;?>img/og-image-default.jpg"/>
        <meta name="twitter:image" content="<?php echo get_webinfo('theme_url') ;?>img/og-image-default.jpg"/>
        <?php include(ABSPATH . THMPATH . $options['theme_name'] . '/header2.php')?>
        <main class="legal-pages">
        <section>
        <div class="container container--thin">
            <div class="row ">
                <div class="col-12" data-i18n="[html]legal.terms-and-conditions-content">
                    <h1 class="mb-4">Get In Touch With Us</h1>
					    <form class="tg-formtheme tg-formcontactus" action="#">
                					<div class="form-group">
                						<div class="col-12">
                							<?php echo $result; ?>	
                						</div>
                					</div><br>
                					<div class="form-group">
                						<label for="name" class="col-12 control-label">Name</label>
                						<div class="col-12">
                							<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                							<?php echo "<p class='text-danger'>$errName</p>";?>
                						</div>
                					</div><br>
                					<div class="form-group">
                						<label for="email" class="col-12 control-label">Email</label>
                						<div class="col-12">
                							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                							<?php echo "<p class='text-danger'>$errEmail</p>";?>
                						</div>
                					</div><br>
                					<div class="form-group">
                						<label for="message" class="col-12 control-label">Message</label>
                						<div class="col-12">
                							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                							<?php echo "<p class='text-danger'>$errMessage</p>";?>
                						</div>
                					</div><br>
                					<div class="form-group">
                						<div class="col-12">
                							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-raised btn-warning">
                						</div>
                					</div>
                				</form>
		               </div>
                    </div>
                </div>
            </section>
        </main>
<?php get_footer(); ?>