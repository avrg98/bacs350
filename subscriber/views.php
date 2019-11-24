<?php

    

    // render_page -- build a page with custom settings
    function render_page($site_title, $page_title, $content) {
        return '
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>' . $page_title . '</title>
                    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSf1NLqZXxUZsN8ta9i90SSGuXwXc_dV1EqZ4SPkgmo0FuWwAw">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
                    <link rel="stylesheet" href="style.css">
                </head>
                <body>
                    <header>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h1>' . $site_title . '</h1>
                                    <h2>' . $page_title . '</h2>
                                </div>
                                <div class="logo col-sm-4">
                                    <div class="pull-right">
                                        <img class="img-rounded img-responsive"
                                        src="unc.png"
                                        alt="UNC Bear" width="300px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>

                    <main>
                        ' . $content . '
                    </main>
                </body>
            </html>
        ';
    }


    // render_card -- build HTML text for a card
    function render_card($title, $body) {
        return '
            <div class="card">
                <div class="card-header">
                    ' . $title . '
                </div>
                <div class="card-body card-padding">
                    ' . $body . '
                </div>
            </div>
        ';
    }


    
?>

