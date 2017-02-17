<?php
namespace PlatziPHP;
class User {
  /**
   * @var string
   */
  protected $firstName;
  /**
   * @var string
   */
  protected $lastName;
  /**
   * @var string
   */
  protected $email;
   /**
   * @var string
   */
  protected $password;

  /**
   * Constructor
   * @param string $email    
   * @param string $password 
   */
  public function __construct($email, $password) {
    $this->email = $email;
    $this->password = password_hash($password, PASSWORD_DEFAULT);
  }

  /**
   * @param string $firstName 
   */
  public function setFirstName($firstName) {
    $this->firstName = $firstName;
  }

  /**
   * @param string $lastName 
   */
  public function setLastName($lastName) {
    $this->lastName = $lastName;
  }

  /**
   * @param string $firstName 
   * @param string $lastName  
   */
  public function setFullName($firstName, $lastName) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  /**
   * @return string 
   */
  public function getFirstName() {
    return $this->firstName;
  }
}