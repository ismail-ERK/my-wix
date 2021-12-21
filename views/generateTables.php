<?php
$table_items= array();
session_start();
require '../components/Form.php';
require '../components/FetchData.php';
require '../components/Foot.php';
require '../components/Head.php';
if (isset($_GET['submit'])) {
    $count = $_GET['tableItemsCount'];

    for ($i = 0; $i < $count; $i++) {
        array_push($table_items,$_GET['item' . $i]);
    }

    $tabname = $_GET['tabname'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = $_SESSION["dbname"];



// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $_SESSION["tabname"] = $tabname;
    $_SESSION["tabitems"] = $table_items;
// sql to create table
    $sql = "CREATE TABLE ".$tabname." (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,";

    for ($i = 0; $i < $count; $i++) {
        $sql.=$table_items[$i]." VARCHAR(30) NOT NULL,";
    }

    $sql.="created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();
$head = new Head();
$foot = new Foot();
    $form = new Form($count,$table_items);
    $fp = fopen('../generated/'.$_SESSION["dbname"].'/add product.php', 'a');

    $str = $form->createComponent();
    fwrite($fp, $head->generateTemplate());
    fwrite($fp, $str);
    fwrite($fp, $foot->generateTemplate());
    fclose($fp);
    $fp = fopen('../generated/'.$_SESSION["dbname"].'/add.php', 'a');

    $str = '<?php
session_start();


$nav_items= array();
if (isset($_GET[\'submit\'])) {
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

        $sql.=$_SESSION["tabitems"][$i].\',\';
    }

    $sql = substr($sql,0,-1);

$sql.="    ) ";
$sql.= \' VALUES (\';
for($i=0;$i<count($_SESSION["tabitems"]);$i++){

    $sql.="\'".$_GET[$_SESSION["tabitems"][$i]]."\',";

}
    $sql = substr($sql,0,-1);
$sql.=")";



    if ($conn->query($sql) === TRUE) {
    } else {
    }


echo $sql;

    $conn->close();

    exit;
}


';
    fwrite($fp, $str);

    fclose($fp);

    $fp = fopen('../generated/'.$_SESSION["dbname"].'/'.$_SESSION["tabname"].'.php', 'a');
$str = '
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
            $sql.=$_SESSION["tabitems"][$i].\',\';
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
       require_once \'../../components/Table.php\';
   $table = new Table();
    $table->generateTable();

    header("Location: table.php");

';
    fwrite($fp, $str);

    fclose($fp);
$_SESSION["created"] = true;
    header("Location: vitrine.php");
    exit;

}
