<?php
   // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
	
   // select a database
   $db = $m->datahover;
   echo "Database mydb selected";
   $collection = $db->datahover;
   echo "Collection selected succsessfully";
	
   $document = array( 
      "title" => "MongoDB", 
      "description" => "database", 
      "likes" => 100,
      "url" => "http://www.tutorialspoint.com/mongodb/",
      "by" => "tutorials point"
   );
	
   $collection->insert($document);
   echo "Document inserted successfully";
?>