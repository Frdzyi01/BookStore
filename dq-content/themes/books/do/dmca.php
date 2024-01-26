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
                    <div class="col-12">
        <h1 class="mb-4">DMCA</h1>
        
<h3>Digital Millenium Copyright Act.</h3>
<p>Pdfworldnow&reg; is in compliance with 17 U.S.C. ยง 512 and the Digital Millennium Copyright Act ("DMCA"). It is our policy to respond to any infringement notices and take appropriate actions under the Digital Millennium Copyright Act ("DMCA") and other applicable intellectual property laws.<br /><br />If your copyrighted material has been posted on Pdfworldnow&reg; or if links to your copyrighted material are returned through our search engine and you want this material removed, you must provide a written communication that details the information listed in the following section. Please be aware that you will be liable for damages (including costs and attorneys' fees) if you misrepresent information listed on our site that is infringing on your copyrights. We suggest that you first contact an attorney for legal assistance on this matter.<br /><br />The following elements must be included in your copyright infringement claim:</p>

<ul>
<li>⚪️ Provide evidence of the authorized person to act on behalf of the owner of an exclusive right that is allegedly infringed.</li>
<li>⚪️ Provide sufficient contact information so that we may contact you. You must also include a valid email address.</li>
<li>⚪️ You must identify in sufficient detail the copyrighted work claimed to have been infringed and including at least one search term under which the material appears in Pdfworldnow&reg;' search results.</li>
<li>⚪️ A statement that the complaining party has a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law.</li>
<li>⚪️ A statement that the information in the notification is accurate, and under penalty of perjury, that the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed.</li>
<li>⚪️ Must be signed by the authorized person to act on behalf of the owner of an exclusive right that is allegedly being infringed.</li>
</ul>

<p><br />Send the written infringement notice to the following address and an email notifcation to<br /><br />Note: Post mail is not accepted, send email instead. Don't send PDF or Scanned PDF, we filtered all attachments.<br /><br /><strong>Please allow 1-2 business days for an email response. Note that emailing your complaint to other parties such as our Internet Service Provider will not expedite your request and may result in a delayed response due the complaint not properly being filed.</strong><br /><br /></p>
<p>The above information must be submitted as a written, faxed or emailed notification to the following Designated Agent:</p>

        <p>Contact Us</p>
        </div>
              
        
        <p>&nbsp;</p>
        <p>Attn: DMCA Office</p>
        <p> : <a href="mailto:<?php echo get_webinfo('email') ;?>"><?php echo get_webinfo('email') ;?></a></p>
                        </div>
                    </div>
                
            </section>
        </main>
<?php get_footer(); ?>