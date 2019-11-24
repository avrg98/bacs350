<?php

    require_once 'views.php';


    // Read Markdown Text from file
    $content = render_markdown("Planner.md");


    // Display the HTML in the page
    echo render_page("Angel Rivera's planner", "UNC BACS 350", $content);
?>
