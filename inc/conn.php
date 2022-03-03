<?php 
try {
  $db = new PDO('pgsql:host=localhost;dbname=postgres;', 'postgres', '0192');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  
}  
catch (PDOException $e) {
    echo "Connection failed : ". $e->getMessage();
  }   
?>