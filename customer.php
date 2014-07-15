<?php


class customer 
{
    Private $name;
     Private $email;
     Private $custome_account;
     public function get_name()
             {
         return $this->name;
     }

     public function get_email()
             {
         return $this->email;
     }
   

     public function set_name($name) {
         $this->name = $name;
     }

     public function set_email($email) {
         $this->email = $email;
     }

     public function set_custome_account($custome_account) {
         $this->custome_account = $custome_account;
     }


      
}
