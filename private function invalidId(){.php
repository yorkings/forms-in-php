private function invalidId(){
  $check;
    if(!preg_match("/^[A-Za-z0-9]*$/",$this->$uid)){
      $check =False;
    }
    else{
      $check=True;
    }
    return $check;
}
 private function invalidemail($check){
    $check;
    if(!filter_var($this->$email,FILTER_VALIDATE_EMAIL)){
      $check =False;
    }
    else{
      $check=True;
    }
    return $check;
   }

   private function password($check){
    $check;
    if($this->$pwd ==$this->$pwdrepeat){
      $check =False;
    }
    else{
      $check=True;
    }
    return $check;
   }