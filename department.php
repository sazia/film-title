class department
{
    private $code;
    private $name;
    private $student_list;
    private $max_no_student =2;
    function __construct($code, $name, $student_list)
    {
        $this->code = $code;
        $this->name = $name;
        $this->student_list = array();
        
     }   
        public function add_student($a_student)
    {
           if( count ($this->$student_list)<( $this->$max_no_student))
           {          
          $this->student_list[]== $a_student;
           return  'student added' ;
   }
     else 
        {
            return 'no vaccanci';
        }
        
}
    public function  get_student_list()
            {
        return $this->student_list;
    }

    public function get_name()
            {
        return $this->name;
    }

    public function get_no_student() 
            {
        return $this->student_list;
    }

public function get_all_student()
        {
        return $this->student_list;
    }
    
    
    
    
    
    
}