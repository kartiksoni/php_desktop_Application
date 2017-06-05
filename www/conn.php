<?php
  try
  {
    //open the database
    $db = new PDO('sqlite:Acquaintsoft.sqlite');
    $db->exec("CREATE TABLE test (id INTEGER PRIMARY KEY AUTOINCREMENT , name TEXT, first TEXT, age INTEGER)"); 
   /* //create the database
    $db->exec("CREATE TABLE Dogs (Id INTEGER PRIMARY KEY, Breed TEXT, Name TEXT, Age INTEGER)");    

    //insert some data...
    $db->exec("INSERT INTO Dogs (Breed, Name, Age) VALUES ('Labrador', 'Tank', 2);".
               "INSERT INTO Dogs (Breed, Name, Age) VALUES ('Husky', 'Glacier', 7); " .
               "INSERT INTO Dogs (Breed, Name, Age) VALUES ('Golden-Doodle', 'Ellie', 4);");

    //now output the data to a simple html table...
    print "<table border=1>";
    print "<tr><td>Id</td><td>Breed</td><td>Name</td><td>Age</td></tr>";*/
    $db->exec("INSERT INTO test (name, first,age) VALUES ('chetan', 'ram','24');");
    $result = $db->query('SELECT * FROM test');

    foreach($result as $row)
    {
    	echo"<pre>";
      print_r($row['id']);
      print_r($row['name']);
      print_r($row['first']);
      print_r($row['age']);
    }


    // close the database connection
    $db = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }
?>