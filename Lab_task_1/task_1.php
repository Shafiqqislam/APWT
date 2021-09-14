<?php
    class Student{
        public $name;
        public $id;
        public $date_of_birth;
        public $courses = [];

        function showinfo(){
            echo "Name: $this->name";
            echo "Id: $this->id";
            echo "Date of Birth: $this->date_of_birth";
        }

        function addCourse($courseName){
            $this->courses [] = $courseName;
        }

        function showCourses()
        {
            echo "Name: $this->name";
            echo "<br>";
            echo "Id: $this->id";
            echo "<br>";
            echo "Date Of Birth: $this->date_of_birth";
            echo "<br>";
            foreach($this->courses as $c){
                echo "$c <br>";
            }
        }
    }

    $s1 = new Student();
    $s1->name = "Sarrick";
    $s1->id = "18-38389-2";
    $s1->date_of_birth = "23 May 1999";
    $s1->addCourse("Data Structure");
    $s1->addCourse("Algorithms");
    $s1->addCourse("Introduction To Database");

    $s1->showCourses();


?>