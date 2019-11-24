<h1>Subscriber List</h1>

 <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>Subscriber </title>
                     <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSf1NLqZXxUZsN8ta9i90SSGuXwXc_dV1EqZ4SPkgmo0FuWwAw">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
                    <link rel="stylesheet" href="style.css">
                </head>
                <body>
                    <?php

    // Connect subscriber database
    $port = '3306';
    $dbname = 'avrgnine_subscribers';
    $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
    $username = 'avrgnine_350';
    $password = 'password';
    

    
    $db = new PDO($db_connect, $username, $password);

    


    // Get a list of records into an array
    $query = "SELECT * FROM subscribers";
    $statement = $db->prepare($query);
    $statement->execute();
    $subscribers = $statement->fetchAll();

   

    // Create an HTML list on the output
    echo '<ul>';
    foreach($subscribers as $row) {
        echo "<li><b>$row[name]</b> - email: $row[email]</li>";
    }
    echo '</ul>';

    
?>
                    <header>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-8">
                                   
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
                      
                    </main>
                </body>
            </html>
