<?php

    require_once 'log.php';
    require_once 'note.php';
    require_once 'views.php';


    // Log the page load
    log_page();


    // Display the page content
    $content = '<div><p>';
    $content .= render_button('Show Log', 'pagelog.php');
    $content .= render_button('Add Note', 'index.php?action=add');
    $content .= render_button('Github', 'https://github.com/avrg98/Mywork');
    $content .= '</p></div>';
    $content .= handle_actions();


    // Create main part of page content
    $settings = array(
        "site_title" => "Angel Rivera",
        "page_title" => "Amazing Notes",
        "logo"       => "unc.png",
        "style"      => 'style.css',
        "content"    => $content);

    echo render_page($settings);
?>
