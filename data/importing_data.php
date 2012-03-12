<?php

require_once '../includes/db.php';

$places_xml = simplexml_load_file('2010_museums.kml');

$sql = $db->prepare('
                  INSERT INTO museums (name,longitude, latitude)
				  VALUES(:name, :longitude, :latitude)
				  ');
foreach ($places_xml->Document->Folder[0]->Placemark as $place){
   //echo  $place->name;
   // var_dump($place);
  // var_dump($coords);
   //$place->name;          //to get the name of museums on the screen.
   $coords = explode(',' ,trim($place->Point->coordinates));  //point tag has coordinates in it. hence to get the info...write like that.explode splits the who;e coordinates into two givin latitutde and longitude separately..trim cuts off the extra space that exists infront of latitude making the quote luk bad!/ 
 


//for extracting the address...i donot have it in my xml file...however if i do, then steps to follow----
// foreach ($place->ExtendedData->SchemaData->SimpleData as $civiv){
//	var_dump($civic);
//  if($civic->attributes()->name == 'LEGAL_ADDR'){
//  $adr = $civic;	
//  }
//}


 $sql->bindValue(':name',$place->name, PDO::PARAM_STR);
 $sql->bindValue(':longitude',$coords[0], PDO::PARAM_STR);
 $sql->bindValue(':latitude',$coords[1], PDO::PARAM_STR);
 $sql->execute();
}
 
//lets us debug errors in our sql code
var_dump($sql->errorInfo());