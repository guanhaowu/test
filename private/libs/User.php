<?php
    class User {
        
        public function register($username, $password, $email) {
            try {
                
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        
        
        public function login($username,$password) {
            try {
                
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        
        public function is_loggedin() {
            if(isset($_SESSION['username'])){
                return true;
            }
        }
        
        public function logout() {
            session_destroy();
            unset($_SESSION['username']);
            return true;
        }
    }
?>
