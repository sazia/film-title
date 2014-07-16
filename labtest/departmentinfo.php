<?php


class departmentinfo
{
    public $code;
    public $name;
    
    function __construct($code, $name)
    {
        $this->code = $code;
        $this->name = $name;
    }

    public function get_code()
            {
        return $this->code;
    }

    public function get_name()
            {
        return $this->name;
    }


    
}
