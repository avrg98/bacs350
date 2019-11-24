<?php

    require_once 'log.php';
    require_once 'slides.php';
    require_once 'views.php';


    // Log the page load
    log_page();


    // Display the page content
    $content = '<div><p>';
    $content .= render_button('Github', 'https://github.com/avrg98/Mywork');
    $content .= render_button('Show Log', 'pagelog.php');
    $content .= render_button('Add Slide Show', 'index.php?action=add');
    $content .= '</p></div>';
    $content .= handle_actions();


    // Create main part of page content
    $settings = array(
        "site_title" => "Angel Rivera",
        "page_title" => "Slide Show",
        "logo"       => "Bear.png",
        "style"      => 'style.css',
        "content"    => $content);

    echo render_page($settings);
?>
