<?php
$msg="";
if(isset($_POST['upload'])){
    $target="./images/".md5(uniqid(time())).basename($_FILES['image']['name']);
    $id=$_POST['id'];
    $nume=$_POST['text'];
    $xml= simplexml_load_file('data.xml');
    $date=$xml->addChild('date');
    $date->addChild('id', $id);
    $date->addChild('nume',$nume);
    $date->addChild('image', $target);
    $date->addChild('view', 'view.php?id='.$id);
    $date->addChild('edit', 'edit.php?id='.$id);
    $date->addChild('delete', 'delete.php?id='.$id);
    $date->addChild('confirm', 'return confirm("Are you sure you want to delete this item?")');
    $date->addChild('back', 'user.php');
    
    file_put_contents('data.xml', $xml->asXML());
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        header('location:user.php');
    }else{
        $msg="Vai!Vai!Vai!";
    }
    
}
?>