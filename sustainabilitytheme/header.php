<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marine Watchdogs</title>
    <?php wp_head() ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li class="left">
                <img src="<?php echo get_template_directory_uri("url") ?>/img/menu-bar.png" alt="">
                <img src="<?php echo get_template_directory_uri("url") ?>/img/whale.png" alt="">
                <span><?php pll_e("Marine watchdogs") ?></span>
            </li>
            
            <li class="right">
                <input class="search" type="text" placeholder="Search..." style="background-color: #f0f0f0;">
                <img src="<?php echo get_template_directory_uri("url") ?>/img/search-icon.png" alt="">
                <img src="<?php echo get_template_directory_uri("url") ?>/img/profile-icon.png" alt="">

                <div class="dropdown">
                    <button class="dropbtn">
                        <img src="<?php echo get_template_directory_uri("url") ?>/img/language-icon.png" alt="">
                    </button>
                    
                    <div class="dropdown-content">
                        <?php
                        $languages = pll_the_languages(array('raw' => 1)); // Get the languages without ul/li structure
                        foreach($languages as $lang) {
                            echo '<a href="' . esc_url($lang['url']) . '">' . esc_html($lang['name']) . '</a>';
                        }
                        ?>
                    </div>
                </div>
            </li>
        </ul>
    </nav>


   