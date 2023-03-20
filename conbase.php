<?php
    class projet{
        private const host="localhost";
        private const port="3308";
        private const dbname="mydb";
        private const user="root";
        private const pass="";
        private $con;
            public function __construct(){
                try{
                    $this->con=new PDO('mysql:host='.self::host.';port='.self::port.';dbname='.self::dbname.';charset=utf8',self::user,self::pass);
                    return $this->con;
                }catch(Exception $e){
                    die('Erreur :'.$e->getMessage());
                }
        }
        public function addUser($nom,$prenoms,$email,$mdp){
            $inserUser=$this->con->prepare('INSERT INTO users(phone,email,mdp,firstname,username,lastname,ID_number,status,roles_id,date,date) VALUES (?,?,?,?,?,?,?,?,?,now(),now())');
            if($inserUser->execute(array($nom,$prenoms,$email,$mdp))==true)
                return 1;
            else
                return 0;
        
        }


    }

?>