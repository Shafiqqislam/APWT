<?php
    class Car{
        public $engineno;
        public $model;
        public $owner;

        function __construct($engineno,$model,$owner)
        {
            $this->engineno = $engineno;
            $this->model = $model;
            $this->owner = $owner;
        }
        function showinfo(){
            echo "Engine No: $this->engineno <br>";
            echo "Model: $this->model <br>";
            echo "Owner: $this->owner";
        }
    }

    $c1 = new Car("203-38389-5","Toyota","Tanvir Sarrick");


    $c1->showinfo();

?>