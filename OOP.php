<?php
            include 'connect.php'; 

    class student{

        private $stdName;
        private $stdRoll;
        private $cellNumber;

        public static $program = "Software Engineering";

        static $count;

        function __contruct(){
            $stdName = null;
        }



        public static function getCount(){
            return self::$count++;
        }



        function set_name($name){
            $this->stdName = $name;
        }
        function set_Roll($roll){
            $this->stdRoll = $roll;
        }
        function set_cellNumber($cellNo){
            $this->cellNumber = $cellNo;
        }

        
        function get_name(){
            return $this->stdName;
        }
        function get_Roll(){
            return $this->stdRoll;
        }
        function get_cellNumber(){
            return $this->cellNumber;
        }


        function save_data(){
            $fname = $this->stdName;
            $stdRoll = $this->stdRoll;
            
            $sql = "INSERT INTO userdata(firstName, lastName)
            VALUES ($fname, $stdRoll)";

            if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
          
        }


    }
    student::$count= 1;
     $objA = new student();
    $objA->set_name("Taimoor");
    $objA->set_Roll("sp16BSE");
    $objA->set_cellNumber("0301221212");


    echo "Roll Number : ".$objA->get_Roll().'<br>';
    echo "Name : ".$objA->get_name().'<br>';
    echo "Cell Number :" .$objA->get_cellNumber().'<br>';

    echo "value of static variable is : ".student::$program.'<br>';
    echo "incremental counter called, value is : ".student::getcount().'<br>';

    echo "incremental counter called, value is : ".student::getcount();

    $objA->save_data();




?>