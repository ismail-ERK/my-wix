<?php

require_once('Component.php');

class Header implements Component
{

    private $items = array();
    private $orientation;
    private $appname;

    /**
     * Header constructor.
     * @param array $items
     */
    public function __construct(array $items, $orientation,$appname)
    {
        $this->items = $items;
        $this->orientation = $orientation;
        $this->appname = $appname;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return mixed
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items)
    {
        $this->items = $items;
    }


    function createComponent()
    {
        $str = '';
        if ($this->orientation == 'vertical') {
            $str = '<div class="container-fluid">
    <div class="row">
        <div class="col-3 col-sm-2 col-md-2 col-lg-1 col-xl-1">
            <nav class="nav navbar-light navbar-toggleable-sm">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarWEX" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse flex-column mt-md-0 mt-4 pt-md-0 pt-4" id="navbarWEX">
                 <a class="nav-link" href="#">'.$this->appname.'</a> ';

            for ($i = 0; $i < sizeof($this->items); $i++) {
                $link = '"./'.$this->items[$i].'.php"';
                $str .= '<a class="nav-link" href='.$link.'>' . $this->items[$i] . '</a>';
            }
            $str .= '</div>
                                </nav>
                            </div>  
                        </div>
                    </div>';


        } else {

            $str = '<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">'.$this->appname.'</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        ';

            for ($i = 0; $i < sizeof($this->items); $i++) {
                $link = '"./'.$this->items[$i].'.php"';

                $str .= ' <li class="nav-item active">
                <a class="nav-link" href='.$link.'>' . $this->items[$i] . ' <span class="sr-only">(current)</span></a>
            </li>';
            }

        $str.= '
        </ul>
    </div></nav>';


        }

        mkdir('../generated/'.$this->appname,0777);
        touch('../generated/'.$this->appname.'/header.php');
        touch('../generated/'.$this->appname.'/add.php');
        touch('../generated/'.$this->appname.'/body.php');
        touch('../generated/'.$this->appname.'/footer.php');
        touch('../generated/'.$this->appname.'/main.php');
        touch('../generated/'.$this->appname.'/table.php');
        $fp = fopen('../generated/'.$this->appname.'/header.php', 'a');//opens file in append mode
        fwrite($fp, $str);
        fclose($fp);
        $fp = fopen('../generated/'.$this->appname.'/main.php', 'a');//opens file in append mode
        $str_main = '<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
<?php
require \'header.php\';require \'body.php\';require \'footer.php\';?></body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>';


        fwrite($fp, $str_main);
        fclose($fp);

        for ($i = 0; $i < sizeof($this->items); $i++){
            touch('../generated/'.$this->appname.'/'. $this->items[$i].'.php');
        }


    }
}