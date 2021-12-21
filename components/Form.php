<?php

require_once('Component.php');
class Form implements Component
{

    private $size;
    private $items = array();

    /**
     * Form constructor.
     * @param $size
     * @param array $items
     */
    public function __construct($size, array $items)
    {
        $this->size = $size;
        $this->items = $items;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
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
        $str = '
        <form class="form-horizontal" role="form" method="get" action="add.php"> ';

        for($i=0;$i<$this->size;$i++){

        $str.= '    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">'.$this->items[$i].' :</label>

        <div class="col-sm-10 col-sm-offset-2">
            <input type="text" class="form-control"  name="'.$this->items[$i].'" placeholder="Name of your website">

        </div>
    </div>';

        }

        $str.='  <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input type="submit" name="submit" class="btn btn-primary" value="Add"/>
        </div>
    </div>
</form>';
        return $str;
    }






}