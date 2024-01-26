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

                    <h1 class="mb-4">Terms &amp; Conditions</h1>
        <p>Please read these Terms of Service carefully before using this site. This Agreement sets forth the legally binding terms and conditions for your use of this website.</p>
        
        <p>By accessing or using the Site in any manner, including, but not limited to, visiting or browsing the Site or contributing content or other materials to the Site, you agree to be bound by these Terms of Service. Bolded terms are defined in this Agreement.</p>
        
        <h5>Intellectual Property</h5>
        <p>The Site and its original content, features and functionality are owned and are protected by international copyright, trademark, patent, trade secret and other intellectual property or proprietary rights laws.</p>
        
        <h5>Termination</h5>
        <p>We may terminate your access to the Site, without cause or notice, which may result in the forfeiture and destruction of all information associated with you. All provisions of this Agreement that by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity, and limitations of liability.</p>
        
        <h5>Links To Other Sites</h5>
        <p>Our Site may contain links to third-party sites that are not owned or controlled.</p>
        
        <p>We have no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party sites or services. We strongly advise you to read the terms and conditions and privacy policy of any third-party site that you visit.</p>
        
        <h5>Governing Law</h5>
        <p>This Agreement (and any further rules, polices, or guidelines incorporated by reference) shall be governed and construed in accordance with the laws of United States, without giving effect to any principles of conflicts of law.</p>
        
        <h5>Changes To This Agreement</h5>
        <p>We reserve the right, at our sole discretion, to modify or replace these Terms of Service by posting the updated terms on the Site. Your continued use of the Site after any such changes constitutes your acceptance of the new Terms of Service.</p>
        
        <p>Please review this Agreement periodically for changes. If you do not agree to any of this Agreement or any changes to this Agreement, do not use, access or continue to access the Site or discontinue any use of the Site immediately.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php get_footer(); ?>