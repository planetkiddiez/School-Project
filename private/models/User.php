<?php
//user model
class User extends Model{
    
    protected $allowedColumns = [
        'firstname', 
        'lastname', 
        'email',
        'password',
        'gender',
        'rank',
        'date'
    ];
        
    
    
    protected $beforeInsert = [
        'make_user_id', 
        'make_school_id', 
        'hash_password'
    ];
    
    public function validate($DATA){
        
        $this->errors = array();
        //check for first name
        if(empty($DATA['firstname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['firstname'])){
            $this->errors['firstname'] = "Only letters are allow in first name";
        }
        //check for last name
        if(empty($DATA['lastname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['lastname'])){
            $this->errors['lastname'] = "Only letters are allow in last name";
        }
        
        //check for email
        if(empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL) ){
            $this->errors['email'] = "Invalide emaill address";
        }
        
        //check if email exists
        if($this->where('email', $DATA['email'])){
            $this->errors['email'] = "Email already in use";
        }
        
        //check for gender
        $genders = ['Female', 'Male'];
        if(empty($DATA['gender']) || !in_array($DATA['gender'], $genders)){
            $this->errors['gender'] = "Not a valid gender";
        }
        //check for ranks
        $ranks = ['student', 'reception', 'lecturer', 'admin', 'super_admin'];
        if(empty($DATA['rank']) || !in_array($DATA['rank'], $ranks)){
            $this->errors['rank'] = "Not a valid rank";
        }
        
        //check for password
        if(empty($DATA['password']) || $DATA['password'] != $DATA['password2']){
            $this->errors['password'] = "Passwords do not match";
        }
        
        //check for password length
        if(strlen($DATA['password']) <= 5){
            $this->errors['password'] = "Passwords must not be less 6 character long";
        }
        
        if(count($this->errors) == 0){
            return true;
        }
        return false;
        
    }
   
    public function make_user_id($data){
        $data['user_id'] = random_string(60);
        return $data;
    } 
    
    public function make_school_id($data){
        
        if(isset($_SESSION['USER']->school_id)){
        $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
    }
    
    public function hash_password($data){
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }
    
    private function random_string($length){
        $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','Q','R','S','T','U','V','W','X','Y','Z');
        $text = "";
        
        for($x = 0; $x < $length; $x++){
            $random = rand(0, 61);
            $text .= $array[$random];
        }
        return $text; 
    }
}