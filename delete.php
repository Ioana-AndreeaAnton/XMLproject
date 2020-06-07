<?php
$id=$_GET['id'];

$xml=new DOMDocument();
$xml->load('data.xml');

$xpath=new DOMXPath($xml);
foreach($xpath->query("/root/date[id='$id']")as $node){
    $node->parentNode->removeChild($node);
}
$xml->formatOutput=true;
$xml->save('data.xml');
header('location:user.php');
?>