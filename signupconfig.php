<?php
require_once ('dbconnect.php');
class sign{
    private $id;
    private $username;
    private $firstname;
    private $lastname;
    private $password;
    private $email;
    protected $conn;
   public function  __construct($email,$uid,$first,$last, $pwd )
    {
        $this->username = $uid;
        $this->firstname = $first;
        $this->lastname = $last;
        $this->password = $pwd;
        //$this ->id =$id;
        $this ->email =$email;
        $this->conn = new PDO(DB_TYPE. ":host=".DB_HOST .";port=3310;dbname =".DB_NAME , DB_USER,DB_PASS,[ PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC]);
    }
   public function setId($id){
    $this->id =$id;
   }
   public function getId(){
    return $this->id;
   }
   public function setUsername ($username ){
    $this->username=$username;
   }
   public function getUsername(){
    return $this->username;
   }
   public function setFirstname($firstname ){
    $this->firstname= $firstname;
   }
   public function getFirst(){
    return $this->firstname;
   }
   public function setLastname($lastname){
    $this->lastname =$lastname;
   }
   public function getLastname(){
    return $this->lastname;
   }
   public function setEmail($email){
    $this->email= $email;
   }
   public function getEmail(){
    return $this->email;
   }
   public function setPass($password){
    $this->password = $password;
   }
   public function getPass(){
    return $this->password;
   }
   public function insertData(){
    try{
       $stmt = $this->conn->prepare("INSERT INTO login (email,firstname,lastname,username,pass)VALUES(?,?,?,?,?)");
      $stmt->execute();
    }
    catch(Exception $e){
     return $e->getMessage();
    }

   }
    
}
?>