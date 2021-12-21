<?php

require_once('Template.php');

class Head implements Template
{

    function generateTemplate()
    {
        $str = '<html>
<head> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>PHP Test</title>
</head>
<body>
<?php   
require \'header.php\'?>;
';
        return $str;
    }
}
