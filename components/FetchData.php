<?php


class FetchData
{

    private $dbname;
    private $tablename;

    /**
     * FetchData constructor.
     * @param $dbname
     * @param $tablename
     */
    public function __construct($dbname, $tablename)
    {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
    }

    public function getData(){

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


        $str2 = "";

        $sql = "select ";
        for($i=0;$i<count($_SESSION["tabitems"]);$i++){
            $sql.=$_SESSION["tabitems"][$i].',';
        }
        $sql = substr($sql,0,-1);
        $sql .= " from ".$this->tablename;
        $result = $conn->query($sql);


            $_SESSION["result"] = $result;
            // output data of each row
            while($row = $result->fetch_assoc()) {


            }
          var_dump($_SESSION["result"]);         ;


//        $str = var_dump( )

    }

    /**
     * @return mixed
     */
    public function getDbname()
    {
        return $this->dbname;
    }

    /**
     * @param mixed $dbname
     */
    public function setDbname($dbname): void
    {
        $this->dbname = $dbname;
    }

    /**
     * @return mixed
     */
    public function getTablename()
    {
        return $this->tablename;
    }

    /**
     * @param mixed $tablename
     */
    public function setTablename($tablename): void
    {
        $this->tablename = $tablename;
    }


}