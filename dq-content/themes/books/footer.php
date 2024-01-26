		<!-- footer -->
		<footer class="footer">
		    <div class="container">
		        <div class="footer__wrapper">
		            <div class="footer__links">
		                <a href="<?php echo get_webinfo('url'); ?>/p/privacy">Privacy Policy</a>
		                <a href="<?php echo get_webinfo('url'); ?>/p/terms-condition">Terms & Conditions</a>
		                <a href="<?php echo get_webinfo('url'); ?>/p/dmca">DMCA</a>
		            </div>
		            <p style="text-align: left;">&copy; <?php echo date('Y'); ?> <?php echo get_webinfo('webname'); ?> All rights reserved.</p>
		        </div>
		    </div>
		</footer>
		<div class="preloader-overlay active">
		    <div class="loader">
		        <img src="<?php echo get_webinfo('theme_url'); ?>img/loader.gif" alt="loader">
		    </div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha256-C8oQVJ33cKtnkARnmeWp6SDChkU+u7KvsNMFUzkkUzk=" crossorigin="anonymous"></script>
		<script src="<?php echo get_webinfo('theme_url'); ?>js/option2.js"></script>
		<!-- Histats.com  START  (aync)-->
		<script type="text/javascript">
		    var _Hasync = _Hasync || [];
		    _Hasync.push(['Histats.start', '1,<?php echo get_webinfo('HistatsID'); ?>,4,0,0,0,00010000']);
		    _Hasync.push(['Histats.fasi', '1']);
		    _Hasync.push(['Histats.track_hits', '']);
		    (function() {
		        var hs = document.createElement('script');
		        hs.type = 'text/javascript';
		        hs.async = true;
		        hs.src = ('//s10.histats.com/js15_as.js');
		        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
		    })();
		</script>
		<noscript><a href="/" target="_blank"><img src="//sstatic1.histats.com/0.gif?<?php echo get_webinfo('HistatsID'); ?>&101" alt="web hit counter" border="0"></a></noscript>
		<!-- Histats.com  END  -->
		<?php if (get_webinfo('scriptfooterads') == 'true' && !empty(get_webinfo('scriptfooterads'))) : ?>
		    <?php $adspath = ABSPATH . THMPATH . 'books/ads/scriptfooterads.php';
            $adscode = file_get_contents($adspath, NULL);
            if (isset($adscode) and !empty($adscode)) : ?>
		        <?php echo $adscode; ?><?php endif; ?><?php endif; ?>
		        </body>

		        </html>