<?php
try{
    // host 
    define ("HOSTNAME","localhost");
    
    // database
    define ("DBNAME","school");
    
    // user
    define ("USER","root");
    
    // pass
    define ("PASS","");
    
    $connection = new PDO ("mysql:host=".HOSTNAME.";dbname=".DBNAME.";",USER,PASS);
    
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    echo "Connected Successfully to the database";
    }
    catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }

?>