<?php
$name = $_POST['name'];
$prename = $_POST['prename'];
$phone = $_POST['phone'];
$quantity = $_POST['quantity'];
$taille = $_POST['colors'];

$conn = new mysqli("sql7.freesqldatabase.com","sql7585508","aa6gIGbl1C","sql7585508");

if ($conn -> connect_error) {
    die('Connection Failed : '.$conn ->connect_error)
}else{
    $stmt = $conn->prepare("insert into Produit (name,prename,phone,quantity,taille)
        values(?,?,?,?,?)");
    $stmt->bind_param("ssiis",$name,$prename,$phone,$quantity,$taille);
    $stmt->execute();
    echo "Success";
    $stmt->close();
    $conn->close();
}
?>