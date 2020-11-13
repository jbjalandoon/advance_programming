<?php
  class User {
    public $name;
    public $username;
    public $email;

    function __construct($name, $username, $email){
      $this->name = $name;
      $this->username = $username;
      $this->email = $email;
    }

    public function addFriend($name){
      echo "You have succesfully added " . ucfirst($name);
    }

    public function postStatus($status){
      echo $this->username . " posted " . $status . "<br> <small>" . date("M d h:i a") . "<small>";
    }
  }

  $user1 = new User("Jerome Jalandoon", "jbjalandoon", "jerome.jalandoon@gmail.com");
  $user1->addFriend("Luffy");
  echo "<br><br>";
  $user1->postStatus("Sana ol!");
?>
