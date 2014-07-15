<?php

class student {
   private $reg_no;
    private $email;
    private $name;
    function __construct($reg_no, $email, $name)
    {
        $this->reg_no = $reg_no;
        $this->email = $email;
        $this->name = $name;
    }
    public function get_reg_no() {
        return $this->reg_no;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_name() {
        return $this->name;
    }


    
}