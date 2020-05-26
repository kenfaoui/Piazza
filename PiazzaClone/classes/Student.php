<?php 
require "Database_Connection.php";
 class Student extends Database_Connection{

 	 private $cne;
 	 private $email;
 	 private $password;
 	 private $id_univ;
     private $class_id;

 	 function __construct($cne,$email,$password,$class_id){
 	 	//set the properites value
 	 	$this->cne=$cne;
 	 	$this->email=$email;
 	 	$this->password=$password;
 	 	$this->id_univ=$this->get_student_univ_id();
        $this->class_id=$class_id;
 	 }
     
    protected function create_student(){
        
         try {
         	
                        	
             $sql="INSERT Into inscription Values('$this->cne','$this->class_id','now() ') ";
             $s=$this->connect()->prepare($sql);
             $s->execute();

         } catch (Exception $e) {
         	die("error".$e->getMessage());
         }

    }  
 	protected function isExist($cin,$univ_name){
 		try {
 			$s=$this->connect()->prepare("SELECT * FROM etudiant s , univ u WHERE cin_e='$cin' and s.id_univ=u.id_univ and u.nom='$univ_name'");
 		    $s->execute();
 		    $number=$s->rowCount();
 		    $s->closeCursor();
 		    return $number;
 		} 
 		catch (Exception $e) {
 			die('Error : ' . $e->getMessage());
 		}
 		
 	}
 	private function  get_student_univ_id(){
        $sql="SELECT id_univ FROM etudiant WHERE cin_e='$this->cne'";
        $s=$this->connect()->prepare($sql);
        $s->execute();
        $res=$s->fetch(PDO::FETCH_ASSOC);
        return $res['id_univ'];
}   protected function  get_class_id($class_name){
        $sql="SELECT id_class FROM class WHERE nom='$class_name'";
        $s=$this->connect()->prepare($sql);
        $s->execute();
        $res=$s->fetch(PDO::FETCH_ASSOC);
        return $res['id_class'];
}

 }


 ?>