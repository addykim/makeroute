<?php

require("phpsqlsearch_dbinfo.php");

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Opens a connection to a MySQL server

$connection=mysql_connect ('localhost', $username, $password);
if (!$connection) {  die('Not connected : ' . mysql_error());}

// Set the active MySQL database

$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

//Load csv into the database
// TODO 

   //get the csv file 
    $file = 'dummy.csv'; 
    $handle = fopen($file,"r"); 
     
    //loop through the csv file and insert into database 
    

// Select all the rows in the markers table

$xml = new XMLWriter();

$xml->openURI("php://output");
$xml->startDocument();
$xml->setIndent(true);

$xml->startElement('markers');

while ($row = fgetcsv($handle,1000,",","\"")) { 
    $xml->startElement("marker");
    
    $xml->writeAttribute('name', $row[0]);
    $xml->writeAttribute('address', $row[1]);
    $xml->writeAttribute('lat', $row[2]);
  $xml->writeAttribute('lng', $row[3]);
    $xml->writeAttribute('type', $row[4]);

    $xml->endElement();
}

    fclose($handle);

$xml->endElement();

header("Content-type: text/xml");

?>