<?php
session_start();


$nav_items= array();
if (isset($_GET['submit'])) {
    $count = count($_SESSION["tabitems"]);
        
    for ($i = 0; $i < $count; $i++) {


    }


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = $_SESSION["dbname"];


// Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

// Create database

    $sql = "INSERT INTO ".$_SESSION["tabname"]." (";

    for($i=0;$i<count($_SESSION["tabitems"]);$i++){

        $sql.=$_SESSION["tabitems"][$i].',';
    }

    $sql = substr($sql,0,-1);

$sql.="    ) ";
$sql.= ' VALUES (';
for($i=0;$i<count($_SESSION["tabitems"]);$i++){

    $sql.="'".$_GET[$_SESSION["tabitems"][$i]]."',";

}
    $sql = substr($sql,0,-1);
$sql.=")";



    if ($conn->query($sql) === TRUE) {

    } else {
    }



    $conn->close();
        header("Location: ./".$_SESSION["tabname"].".php");

    exit;
}
