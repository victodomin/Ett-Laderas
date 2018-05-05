<?php
include 'database.php';
$idoffer=$_POST['idoffer'];
$sector=$_POST['sector'];
$duration=$_POST['duration'];
$salary=$_POST['salary'];
$description=$_POST['description'];


$data=new database();

$result=$data->addOffer($idoffer,$sector,$duration,$salary,$description);
if($result){
echo "offer inserted";
    header('Location: offer.php');


}else{
   echo "offer not inserted";
    header('Location: addoffer.php');



}





?>