<?php
class person
{
  public  $sex;
  Private $name;
  Private $age;

  Public function __construct ($name = "", $age =25, $sex = ' man ')
  {
    $this->name = $name;
    $this->age = $age;
    $this->sex = $sex;
  }

 
   Public function __unset ($content) {
    echo "<br> Automatically invoked when a private member is deleted by using the unset () function outside the class";
    Echo isset ($this-> $content);
  }
}

$person = new Person ("xiaoming", 25);

unset ($person->sex);
unset ($person->name);
unset ($person->age);


?>