<?php
    class claculation{          //class
        public $a, $b, $c;      //Properties

        function sum(){                              //Method          
            $this->c=$this->a + $this->b;
            return $this->c;
        }
        function sub(){                              //Method
            $this->c=$this->a - $this->b;
            return $this->c;
        }
    }

    $c1= new claculation();       //c1 object
    
    $c1->a=20;
    $c1->b=10;

    $c2= new claculation();       //c2 object
    
    $c2->a=50;
    $c2->b=10;
    
    echo "sum is : ".$c1->sum()."\n";

    echo "sum is : ".$c2->sum()."\n";

    echo "sub is : ". $c1->sub();
?>