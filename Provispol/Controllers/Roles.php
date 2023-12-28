<?php
    class Roles extends Controllers{

        public function __construct()
        {
            parent::__construct();
        }
        public function Roles()
        {   
            $data['page_id'] = 3;
            $data['page_tag'] = "Roles Usuario";
            $data['page_title'] = "Roles de Usuario <small> Provispol<small/>";
            $data['page_name'] = "rol_usuario";
            $this->views->getView($this,"roles",$data);
        }
        public function getRoles()
        {
            $arrData = $this->model->selectRoles();

            for ($i=0; $i < count($arrData); $i++) 
            { 
                if ($arrData[$i]['status'] == 1) 
                {
                    $arrData[$i]['status'] = '<span class="me-1 badge bg-success">Activo</span>';
                }else{
                    $arrData[$i]['status'] = '<span class="me-1 badge bg-danger">Inactivo</span>';
                }
            }

            dep($arrData[0]['status']);exit;

            // <span class="me-1 badge bg-success">Success</span>

            echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
            die();
        }
        
    }
?>