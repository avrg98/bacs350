<?php

    // Code to define functions
    require_once 'views.php';
    require_once 'superhero_views.php';
    require_once 'superhero_db.php';


    // List superhero records
    $list = render_superheroes(list_superheroes ($db));

    
    // Button to go to other views
    $add_button = '<p><a class="button" href="insert.php">Add Super Hero</a></p>';
    $add_button2 = '<p><a class="button" href="https://github.com/avrg98/Mywork">gitHub</a></p>';
    $add_button3 = '<p><a class="button" href="https://shrinking-world.com/unc/bacs350">Class page</a></p>';


    
    $intro = '
        <p>
            Here you can see a list of the biggest Super Heroes.
        </p>
        
    ';
    $content = "$intro $add_button $add_button2 $add_button3 $list";

    // Show the page
    echo render_page('Super Hero Gallery', "Super Hero List", $content);
?>
