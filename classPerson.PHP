<?php 
 Class Person{

  var $id;
  var $carnet;
  var $name;
  var $last_name;
  var $email;
  var $phone;
  var $gender; /*(female, male)*/

  //const TYPE = 'human';

  function construct($pname, $plastname){
      $this->name = $pname;
      $this->lastname = $plastname;
      //$this->type = self :: TYPE;
  }

  function to_string(){
      echo "Name : {$this->name}, Lastname: {$this->lastname}";
  }
  
$per = new Person('Wilmer','Vargas');
$per->to_string();
}

//$per = new Person('Wilmer','Vargas');
//$per->to_string();