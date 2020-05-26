<?php
require "Student.php";
class StudentView extends Student {
 
    function __construct(){
    	
    }

    public function check_for_cin($cin,$univ_name){
      return $this->isExist($cin,$univ_name)>0?true:false;
    }


}



 ?>