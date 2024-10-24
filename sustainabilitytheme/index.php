<?php get_header() ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>

   <?php 
   $video_text = get_field("video_text");
   $hero_video = get_field("hero_video");
   $article_title_text = get_field("article_title_text");
   $article_1_icon = get_field("article_1_icon");
   $article_2_icon = get_field("article_2_icon");
   $article_3_icon = get_field("article_3_icon");
   $article_1_url = get_field("article_1_url");
   $article_2_url = get_field("article_2_url");
   $article_3_url = get_field("article_3_url");
   $first_article_title = get_field("first_article_title");
   $second_article_title = get_field("second_article_title");
   $third_article_title = get_field("third_article_title");
   $first_article_desc = get_field("first_article_desc");
   $second_article_desc = get_field("second_article_desc");
   $third_article_desc = get_field("third_article_desc");
   $company_image = get_field("company_image");
   $company_title = get_field("company_title");
   $company_desc = get_field("company_desc");
   $join_team_url = get_field("join_team_url");
   $cta_title_text = get_field("cta_title_text");
   $first_cta = get_field("first_cta");
   $second_cta = get_field("second_cta");
   $third_cta = get_field("third_cta");
   $sign_up_team = get_field("sign_up_team");
   $first_location = get_field("first_location");
   $second_location = get_field("second_location");
   $third_location = get_field("third_location");
   $fourth_location = get_field("fourth_location");
   $conditions = get_field("conditions");
   
   
   
   
   ?>
 <!-- //section for acf, tepmplate below
 //use code   $ = get_field(""); as template here
     -->
 <main>
    
 <section class="hero">
        <video autoplay muted loop id="background-video">
            <source src="<?php echo $hero_video ?>" type="video/mp4">
        </video>
        <div class="hero-text">
            <h1><?php echo $video_text ?></h1>
            <H1><?php pll_e("Present") ?></H1>
        </div>
    </section>

    <div class="marinhelp">
    <div class="titlemarine"><?php echo $article_title_text ?></div>

    <div class="articles">


        <div class="articlecard">
            <div class="upicon"><img src="<?php echo $article_1_icon["url"]?>" alt="<?php echo $article_1_icon["alt"]?>"></div>

            <div class="articletitle"><?php echo $first_article_title ?></div>
            <div class="articlebody"><?php echo $first_article_desc ?></div>
                <a href="<?php echo $article_1_url ?>" style="text-decoration: none; color: black;" target="blank"> <div class="articlebutton">  <div class="smalltext"><?php pll_e("Read more") ?></div></div></a>

        </div>


        <div class="articlecard">

            <div class="upicon"><img src="<?php echo $article_2_icon["url"]?>" alt="<?php echo $article_2_icon["alt"]?>"></div>

            <div class="articletitle"><?php echo $second_article_title ?></div>
            <div class="articlebody"><?php echo $second_article_desc?></div>
                <a href="<?php echo $article_2_url ?>" style="text-decoration: none; color: black;" target="blank"> <div class="articlebutton">  <div class="smalltext"><?php pll_e("Read more") ?></div></div></a>
        </div>


        <div class="articlecard">

            <div class="upicon"><img src="<?php echo $article_3_icon["url"]?>" alt=""></div>

            <div class="articletitle"><?php echo $third_article_title ?></div>
            <div class="articlebody"><?php echo $third_article_desc?></div>
                <a href="<?php echo $article_3_url ?>" style="text-decoration: none; color: black;" target="blank"> <div class="articlebutton">  <div class="smalltext"><?php pll_e("Read more") ?></div></div></a>
        </div>


    </div>


</div>


<div class="aboutus">

<div class="sidepic"><img src="<?php echo $company_image["sizes"]["large"] ?>" ></div>
    
    <div class="dashedline"></div>
<div class="abouttext">
        <div class="abouttilte"><?php echo $company_title ?></div>
        <div class="aboutbody"><?php echo $company_desc ?></div>
        <button id="openFormButton" class="aboutbutton"><?php pll_e("Join our team now!") ?></button>

<div id="popupForm" class="form-container" style="display:none;">
    <?php echo do_shortcode('[contact-form-7 id="eb91d58" title="Become part of the team"]'); ?>
    <button id="closeFormButton" style="close-button"><?php pll_e("Close Form") ?></button>
</div>


    </div>


</div>




<div class="helpus">


    <div class="line1"><?php echo $cta_title_text ?></div>
    <div class="dash1"></div>
    <div class="line2"><?php echo $first_cta ?></div>
    <div class="dash2"></div>
    <div class="line3"><?php echo $second_cta ?></div>
    <div class="dash3"></div>
    <div class="line4"><?php echo $third_cta ?></div>
    <button id="openNewsletterButton" class="helpbutton"><?php pll_e("Sign me up") ?></button>

    
    <div id="popupNewsletter" class="form-container" style="display:none;">
    <?php echo do_shortcode('[contact-form-7 id="e421914" title="Newsletter"]'); ?>
    <button id="closeNewsletterButton" style="close-button"><?php pll_e("Close Form") ?></button>
</div>



</div>



<body class="main">
    <div class="locations">
    <h1><?php pll_e("Want to become a part of the team? Great, find us at these locations!") ?></h1>

    <div class="row">
        <div class="location">
            <img src="<?php echo get_template_directory_uri("url") ?>/img/location_on.png" alt="">
            <p><?php echo $first_location ?></p>
        </div>
        <div class="location">
            <img src="<?php echo get_template_directory_uri("url") ?>/img/location_on.png" alt="">
            <p><?php echo $second_location ?></p>
        </div>
        <div class="location">
            <img src="<?php echo get_template_directory_uri("url") ?>/img/location_on.png" alt="">
            <p><?php echo $third_location ?></p>
        </div>
        <div class="location">
            <img src="<?php echo get_template_directory_uri("url") ?>/img/location_on.png" alt="">
            <p><?php echo $fourth_location ?></p>
        </div>
    </div>
</div>
</body>

<div class="expand">
    <h3><?php pll_e("No locations near you? - Help us expand!") ?></h3>
    <h4><?php pll_e("Our team can be wherever you are!") ?></h4>
    <p><?php echo $conditions ?></p>
    <p class="smaller"><?php pll_e("Once you have the video, send it by filling out the form below. Our team will review it and send you the t-shirts within 2 weeks. Each of your friends has to fill out the form seperatelly.") ?></p>
    <button id="openFormButton2" class="expand-button"><?php pll_e("Let's go!") ?></button>

<div id="popupForm2" class="form-container" style="display:none;">
    <?php echo do_shortcode('[contact-form-7 id="eb91d58" title="Become part of the team"]'); ?>
    <button id="closeFormButton2" style="close-button"><?php pll_e("Close Form") ?></button>
</div>

</div>
 </main>

<footer class="footer-main">
    <div class="footer-row">
        <div class="social-media">
        <img src="<?php echo get_template_directory_uri() ?>/img/twitter.png" alt="">
                    <img src="<?php echo get_template_directory_uri("url") ?>/img/instagram.png" alt="">
                    <img src="<?php echo get_template_directory_uri("url") ?>/img/youtube.png" alt="">
                    <img src="<?php echo get_template_directory_uri("url") ?>/img/linkedin.png" alt="">
        </div>
        <div class="footer-column1">
            <h3><?php pll_e("Company") ?></h3>
            <h4><?php pll_e("About us") ?></h4>
            <h4><?php pll_e("Careers") ?></h4>
            <h4><?php pll_e("Privacy policy") ?></h4>
        </div>
            <div class="footer-column2">
                <h3><?php pll_e("Contact us") ?></h3>
                <h4>+45 89 86 88 85</h4>
                <h4>waterwatch@gmail.com</h4>
                <h4><?php pll_e("Locations") ?></h4>
            </div>
                <div class="footer-column3">
                    <div class="ceo">
                        <h3>CEO</h3>
                        <p>Frederik Hansen</p>
                        <img src="<?php echo get_template_directory_uri("url") ?>/img/ceoimg.png" alt="">
                    </div>
                </div>
                <br>
                <div class="social-media-phone">
                    <img src="<?php echo get_template_directory_uri("url") ?>/img/twitter.png" alt="">
                    <img src="<?php echo get_template_directory_uri("url") ?>/img/instagram.png" alt="">
                    <img src="<?php echo get_template_directory_uri("url") ?>/img/youtube.png" alt="">
                    <img src="<?php echo get_template_directory_uri("url") ?>/img/linkedin.png" alt="">
                </div>
    </div>
</footer>


















































    
     <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>