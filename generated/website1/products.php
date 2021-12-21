
<?php
session_start();

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
        $str2 = "";

        $sql = "select ";
        for($i=0;$i<count($_SESSION["tabitems"]);$i++){
            $sql.=$_SESSION["tabitems"][$i].',';
        }
        $sql = substr($sql,0,-1);
        $sql .= " from ".$_SESSION["tabname"];
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $_SESSION["result"] = $result;
            // output data of each row
            
            
//          var_dump($_SESSION["result"]);         ;
        } else {
            echo "0 results";
        }
        
       
//        var_dump($result);
       require_once '../../components/Table.php';
   $table = new Table();
    $table->generateTable();


