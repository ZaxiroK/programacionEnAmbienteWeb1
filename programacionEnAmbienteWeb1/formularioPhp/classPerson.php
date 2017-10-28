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
      insert();
      //$this->type = self :: TYPE;
  }

  //person:: insert();
  function to_string(){
      echo "Name : {$this->name}, Lastname: {$this->lastname}";
  }

 public function request(){
    $name = $_REQUEST['name'];
    $lastname = $_REQUEST['lastname'];
    $username = $_REQUEST['username'];
    
  }

  insert ();

  public function insert (){
      if(isset($_REQUEST)){
        $this->request();
        $insert = "INSERT INTO user(`username`, `name`, `lastname`) VALUES ('$username','$name', '$lastname')";
            $conexion = mysqli_connect("localhost", "root","","bdworkshop") or die ("error de conexion");
            $ejecutar = mysqli_query($conexion, $insert);
    
            mysqli_query($connection, $sql);
            mysqli_close($conexion);
    
                if($ejecutar){
                    echo "<h3>Registrado con exitoooo</h3>";
                }
      } 
  }
}

//$per = new Person('Wilmer','Vargas');
//$per->to_string();