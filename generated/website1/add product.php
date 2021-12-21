<html>
<head> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>PHP Test</title>
</head>
<body>
<?php   
require 'header.php'?>;

        <form class="form-horizontal" role="form" method="get" action="add.php">     <div class="form-group">
        <label for="name" class="col-sm-4 control-label">name :</label>

        <div class="col-sm-10 col-sm-offset-2">
            <input type="text" class="form-control"  name="name" placeholder="Name of your website">

        </div>
    </div>    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">description :</label>

        <div class="col-sm-10 col-sm-offset-2">
            <input type="text" class="form-control"  name="description" placeholder="Name of your website">

        </div>
    </div>  <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input type="submit" name="submit" class="btn btn-primary" value="Add"/>
        </div>
    </div>
</form>
<?php
require 'footer.php';?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>