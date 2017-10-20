<?php 
 Class Person{

  var $id;
  var $carnet;
  var $name;
  var $lastname;
  var $username;
  var $email;
  var $phone;
  var $gender; /*(female, male)*/

  //const TYPE = 'human';

  function person($pname, $plastname,$pusername){
      $this->name = $pname;
      $this->lastname = $plastname;
      $this->username = $pusername;
      //$this->type = self :: TYPE;
  }

  function to_string(){
      echo "Name : {$this->name}, Lastname: {$this->lastname}";
  }

 public function request(/*$name,$lastname,$username*/){
    $name = $_REQUEST['name'];
    $lastname = $_REQUEST['lastname'];
    $username = $_REQUEST['username'];
    
  }


  public function insert(){
    $insert = "INSERT INTO users(`username`, `name`, `lastname`) VALUES ('$username','$name', '$lastname')";
    
        $ejecutar = mysqli_query($conexion, $insert);
        
            if($ejecutar){
                echo "<h3>Registrada con exito</h3>";
            }
            -----------------
        
        //mysqli_query($connection, $sql);
        mysqli_close($conexion);
  }

}

//$per = new Person('Wilmer','Vargas');
//$per->to_string();