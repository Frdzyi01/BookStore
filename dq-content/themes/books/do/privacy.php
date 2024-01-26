<?php
/**
 * The main template file
 */
include dirname(__DIR__) .'/header.php';?>
        <meta itemprop="image" content="<?php echo get_webinfo('theme_url') ;?>img/og-image-default.jpg"/>
        <meta property="og:image" content="<?php echo get_webinfo('theme_url') ;?>img/og-image-default.jpg"/>
        <meta name="twitter:image" content="<?php echo get_webinfo('theme_url') ;?>img/og-image-default.jpg"/>
        <?php include(ABSPATH . THMPATH . $options['theme_name'] . '/header2.php')?>
        <<main class="legal-pages">
    <section>
        <div class="container container--thin">
            <div class="row ">
                <div class="col-12" data-i18n="[html]legal.privacy-policy-content">

                    <h1 class="mb-4">Privacy Policy</h1>

<p>We are committed to protecting your privacy. We will only use the information we collect about you lawfully (in accordance with the Data Protection Act 1998). Please read on if you wish to learn more about our privacy policy.</p>

<h4>What Information do we collect?</h4>

<p>We keep only the information about how you have navigated our website. We temporarily keep information on the products you have added to your basket. We do not keep any personal information that would identify you in the future. When processing your order at Amazon there are other details that will be required - see Amazon Privacy Policy for full details.</p>
<p>We also record usage data such as the pages visited. This information is completely anonymous.</p>
<p>Any information we hold is secured in accordance with our internal security policy.</p>

<h4>Do we use cookies?</h4>

<p>We use cookies to enable you to hold the content of your shopping basket between visits and to record anonymous traffic data. We do not store any personally identifying information in these cookies.</p>

<h4>Will we sell your information?</h4>

<p>We does not sell any information about their customers; as simple as that. We will not forward your details on to any third party at any time.</p>




<p><strong>DISCLAIMER</strong><br />We cannot guarantee that every book is in the library. But if You are still not sure with the service . You can cancel anytime.</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </main>
<?php get_footer(); ?>