<?php
    /*
        Create page content by rendering a template.
    */
    $site_title = 'UNC BACS 350';
    
    $page_title = 'Home Page';
    
    $content = '
        <h1>Angel V. Rivera Profile</h1>
        <img src="https://avrg98.com/wp-content/uploads/2019/01/49900110_2242017222711434_6889025837958430720_n.jpg" alt="me" class="center" style="width:300px;height:500px;" >
        <h2>Skills</h2>
        <ul>
            <li>Bilingual
            </li>
            <li>Experience programming on Python</li>
            <li>Experience programming on Visual Studio</li>
            <li>Knowledge on agile methodologies</li>
            <li>Knowledge on network and data communication systems</li>
            <li>Knowledge on information systems</li>
        </ul>
        <h2>Skills on development</h2>
        <ul>
            <li>Java Programming</li>
            <li>Knowledge on web design</li>
        </ul>
        <h2>Aspirations</h2>
        <ul>
            <li>At this moment I aspire to finish my degree of Software Engineering from UNC. Once i graduate I hope to work on a company that will allow me to further develop my skills as a Software engineer and grow professionally.</li>
        </ul>
        <h2>Hyperlinks</h2>
        <ul>
            <li><a href="https://unco.instructure.com/courses/48080">Canvas</a></li>
            <li><a href="https://shrinking-world.com/unc/bacs350">Class website</a></li>
            <li><a href="https://avrg98.com/">My server</a></li>
            <li><a href="https://avrg98.com/">My WorldPress blog</a></li>
            <li><a href="http://avrg98.com/bacs350/skills/">Skills</a></li>
            <li><a href="https://github.com/avrg98/bacs350">Repo 1</a></li>
            <li><a href="https://github.com/Mark-Seaman/UNC-BACS350-Demo/">Repo 2</a></li>
            <li><a href="https://avrg98.com/bacs350/project/">Projects</a></li>
        </ul>
        <h2>Brain App</h2>
        <ul>
            <li><a href="http://avrg98.com/bacs350/docman/">Docman</a></li>
            <li><a href="http://avrg98.com/bacs350/notes/">Notes</a></li>
            <li><a href="http://avrg98.com/bacs350/slides/">Slides</a></li>
            <li><a href="http://avrg98.com/bacs350/planner/index.php">Planner</a></li>
            <li><a href="http://avrg98.com/bacs350/review/">Reviewer</a></li>
            <li><a href="http://avrg98.com/bacs350/subscriber/">Subscriber​s</a></li>
            <li><a href="http://avrg98.com/bacs350/superhero/index.php">Superhero</a></li>
        </ul>
    ';
    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);
?>