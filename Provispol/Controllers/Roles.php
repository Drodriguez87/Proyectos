<?php
    class Roles extends Controllers{

        public function __construct()
        {
            parent::__construct();
        }
        public function roles()
        {   
            $data['page_id'] = 3;
            $data['page_tag'] = "Roles Usuario";
            $data['page_title'] = "Roles de Usuario <small> Provispol<small/>";
            $data['page_name'] = "rol_usuario";
            $this->views->getView($this,"roles",$data);
        }
        
    }
?>