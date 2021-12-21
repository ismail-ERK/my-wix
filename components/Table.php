<?php

class Table
{
public function generateTable(){
    $ecrire = fopen('./table.php',"w");
    ftruncate($ecrire,0);

    $head ='<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>PHP Test</title>
</head>
<body>


<?php
require \'header.php\'?>;
';
    $str = $head;

    $table_head = '
    <table class="table table-striped">
      <thead>
        <tr>';

    for($i=0;$i<count($_SESSION["tabitems"]);$i++){
        $table_head.='<th scope="col">'.$_SESSION["tabitems"][$i].'</th>';
    }
    $table_head.=' </tr>
  </thead>';


    $table_body = '
          <tbody>
            <tr>';


    $result = $_SESSION["result"];

if($result!=null) {
    while ($row = $result->fetch_assoc()) {
        for ($i = 0; $i < count($_SESSION["tabitems"]); $i++) {
            $table_body .= ' <td>' . $row[$_SESSION["tabitems"][$i]] . '</td>';
        }
        $table_body .= '</tr>';

    }
}

    $table_body.='
          
          </tbody>
        </table>
       
      <?php  require \'footer.php\'; ?>
';

    $str .=$table_head;
    $str .=$table_body;


    $fp = fopen('./table.php', 'a');//opens file in append mode
    fwrite($fp, $str);
    fclose($fp);
}
}