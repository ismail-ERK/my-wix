   <?php
require '../components/Header.php';
require '../components/Footer.php';
   $nav_items= array();
    if (isset($_GET['submit'])) {
        $count = $_GET['itemsCount'];

        for ($i = 0; $i < $count; $i++) {
            array_push($nav_items,$_GET['item' . $i]);
        }

        $webname = $_GET['webname'];
        $orientation = $_GET['orientation'];
        $hed = new Header($nav_items,$orientation,$webname);
        $hed->createComponent();

        $servername = "localhost";
        $username = "root";
        $password = "";
        session_start();

        $_SESSION["dbname"] = $webname;

// Create connection
        $conn = new mysqli($servername, $username, $password);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

// Create database
        $sql = "CREATE DATABASE ".$webname;
        if ($conn->query($sql) === TRUE) {
            echo "created";
        } else {
        }




        $conn->close();
        $footer = new Footer();
        $footer->createComponent();
        include 'tables.php';

        exit;
    }


