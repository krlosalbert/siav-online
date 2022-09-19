<?php 

    include '../setting/Connection.php';
    include '../CRUD/CRUD.php';

    /*=============================================================================
    =DECLARAR VARIABLES Y ASIGNARLES LOS DATOS TRAIDOS DEL FORMULARIO POR EL POST
    ===============================================================================*/

        $name     = $_POST["userName"];
        $role     = $_POST["userRole"];
        $email    = $_POST["userEmail"];
        $phone    = $_POST["userPhone"];
        $addres   = $_POST["userAddres"];
        $cedula   = $_POST["userCedula"];
        $password = $_POST["userPassword"];

        /*==================================================================================
        =DECLARAR VARIABLES E INSTANCIAR LA CLASE CRUD PARA INSERTAR LOS DATOS DEL USUARIO
        ====================================================================================*/

        $field1  = "UsuIdUsuario";
        $field2  = "UsuNombre";
        $field3  = "UsuCorreoElectronico";
        $field4  = "UsuDireccion";
        $field5  = "UsuTelefono";
        $field6  = "RolId";
        $field7  = "UsuCedula";
        $field8  = "UsuClave";
        $tabledb = "tblusuario";


        $data   = "'$name' , '$email', '$addres', $phone, $role, $cedula, $password";
        $fields = "$field2, $field3, $field4, $field5, $field6, $field7, $field8";
        
        $usu       = new CRUD();
        $classCRUD = $usu->Create($tabledb, $fields, $data);
        
        if ($classCRUD){
            
        
        } else {
            echo 'error de registro';
        }