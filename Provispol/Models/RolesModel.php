<?php

    class RolesModel extends Mysql
    {
<<<<<<< HEAD
        public $intIdrol;
        public $strRol;
        public $strDescripcion;
        public $intStatus;

=======
>>>>>>> 8382d1ec36af96ecec6ccb28b4a609111cadcbd9
        public function __construct()
        {
            parent::__construct();
        }
        public function selectRoles()
        {
            //EXTRAE ROLES
            $sql = "SELECT * FROM rol WHERE status != 0";
            $request = $this->select_all($sql);
            return $request;
        }
<<<<<<< HEAD
        public function insertRol(string $rol, string $descripcion, int $status){

            $return = "";
            $this->strRol = $rol;
            $this->strDescripcion = $descripcion;
            $this->intStatus = $status;

            $sql = "SELECT * FROM rol WHERE nombrerol = '($this->strRol)'";
            $request = $this->select_all($sql);

            if(empty($request))
            {
                $query_insert = "INSERT INTO rol (nombrerol, descripcion, status) VALUES (?,?,?)";
                $arrdata = array($this->strRol, $this->strDescripcion, $this->intStatus);
                $request_insert = $this->insert($query_insert, $arrdata);
                $return = $request_insert;
            }else{
                $return = "exist";
            }
            return $return;

            

        }
=======
>>>>>>> 8382d1ec36af96ecec6ccb28b4a609111cadcbd9
    }

?>