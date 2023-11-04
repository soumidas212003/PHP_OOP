<?php
    class person{
        public $name,$age;                      //Properties
        function __construct($n,$a){            //constructor
            $this->name=$n;
            $this->age=$a;
        }
        function show(){                        //Method
            echo "My name is : ".$this->name."<br>My Age is : ".$this->age."<br>";     
        }
    }

    $p1=new person("Soumita Das",20);       //Object1
    $p1->show();

    $p2=new person("Susmita Sinha",21);       //Object2
    $p2->show();

?>