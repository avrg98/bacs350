<?php

    // Connect to the Bluehost database for subscribers
    function subscriber_db() {
        $port = '3306';
        $dbname = 'avrgnine_subscribers';
        $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
        $username = 'avrgnine_350';
        $password = 'password';
        return new PDO($db_connect, $username, $password);
    }

    
    // Query for all subscribers
    function query_subscribers ($db) {
        $query = "SELECT * FROM subscribers";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }


    // render_subscriber_list -- Create a bullet list in HTML
    function render_subscriber_list($subscribers) {
        $s = '<ul>';
        foreach($subscribers as $row) {
            $name = "<b>$row[name]</b>";
            $email = "email: $row[email]";
            $s .= "<li>$name - $email</li>";
        }
        $s .= '</ul>';
        return $s;
    }

 // Connect to Bluehost database 
    function subscriber_database() {
        try {
            $port = '3306';
            $dbname = 'avrgnine_subscribers';
            $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
            $username = 'avrgnine_350';
            $password = 'password';
            return new PDO($db_connect, $username, $password);
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }
    // Add a new record
    function add_subscriber($db, $name, $email) {
        try {
            $query = "INSERT INTO subscribers (name, email) VALUES (:name, :email);";
            $statement = $db->prepare($query);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':email', $email);
            $statement->execute();
            $statement->closeCursor();
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }
    // Delete Database Record
    function delete_subscriber($db, $id) {
        $action = filter_input(INPUT_GET, 'action');
        $id = filter_input(INPUT_GET, 'id');
        if ($action == 'delete' and !empty($id)) {
            $query = "DELETE from subscribers WHERE id = :id";
            $statement = $db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $statement->closeCursor();
        }
    }
    // Lookup Record using ID
    function get_subscriber($db, $id) {
        $query = "SELECT * FROM subscribers WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $record = $statement->fetch();
        $statement->closeCursor();
        return $record;
    }
       
    // Query for all subscribers
    function list_subscribers ($db) {
        $query = "SELECT * FROM subscribers";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }
    // Create a database connection
    $db = subscriber_database();
    // Create a connection
    $db = subscriber_db();
   
?>
