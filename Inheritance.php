<?php
    class employee{
        public $name,$age,$salary;
        
        function __construct($n,$a,$s){
            $this->name=$n;
            $this->age=$a;
            $this->salary=$s;
        }

        function info(){
            echo "<h1>Employee Details</h1>";
            echo "Employee Name : ".$this->name."<br>";
            echo "Employee age : ".$this->age."<br>";
            echo "Employee salary : ".$this->salary."<br>";
        }
    }

    class manager extends employee{
        public $ta=1000;
        public $phone=500;
        public $totalSalary;
        function info(){
            $this->totalSalary = $this->salary + $this->ta +$this->phone;
            echo "<h1>Manager Details</h1>";
            echo "Manager Name : ".$this->name."<br>";
            echo "Manager age : ".$this->age."<br>";
            echo "Manager salary : ".$this->totalSalary ."<br>";
        }
    }

    $e1=new employee("Soumita Das",20,5000);
    $e1->info();

    $m1=new manager("Ruban Pathak",21,10000);
    $m1->info();
?>