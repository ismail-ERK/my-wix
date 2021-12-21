<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>PHP Test</title>
</head>
<body>

<form class="form-horizontal" role="form" method="get" action="generate.php">
    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">Nom de votre site :</label>

        <div class="col-sm-10 col-sm-offset-2">
            <input type="text" class="form-control"  name="webname" placeholder="Name of your website">

        </div>
    </div>
	<div class="form-group">
		<label for="name" class="col-sm-4 control-label">Nombre de nav-iltems que vous voulez</label>
	</div>
		<div class="col-sm-10">
			<input type="number" onchange="getNavItemsCount()" class="form-control" id="navItems" name="itemsCount" >
		</div>
	<div class="form-group" id="items">

	</div>


<div class="form-group">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="orientation" id="exampleRadios1" value="horizontal" checked>
        <label class="form-check-label" for="exampleRadios1">
           Horizontal
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="orientation" id="exampleRadios2" value="vertical">
        <label class="form-check-label" for="exampleRadios2">
           Vertical
        </label>
    </div>
</div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input type="submit" name="submit" class="btn btn-primary" value="Generate"/>
        </div>
    </div>
</form>


<script>
    var count = 0
    function getNavItemsCount() {
        count = document.getElementById('navItems').value
        insertItems()
    }

    function insertItems(){
        document.getElementById('items').innerHTML=setNavBody();
    }


    function setNavBody(){
        var body=``
        for(i=0;i<count;i++){
          body += `<div class="form-group"><label for="email" class="col-sm-2 control-label">Item ${i}</label><div class="col-sm-10"><input type="text" class="form-control" id=item${i} name=item${i} placeholder=item${i} ></div></div>`
        }
        return body
    }
</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>