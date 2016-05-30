<?php
if(isset($_POST["submit"])){
    function Login(){
        //si el usuario esta vacio
        if(empty($_POST['usuario']))
            {
                $this->HandleError("El usuario esta vacio!");
                return false;
            }
        //Si la contraseña esta vacia    
        if(empty($_POST['password']))
            {
                $this->HandleError("La contraseña esta vacia!");
                return false;
            }
        //Guardamos en las variables username y password los datos introducidos
        $username = trim($_POST['usuario']);
        $password = trim($_POST['password']);
        
        if(!$this->CheckLoginInDB($username,$password))
            {
                return false;
            }
    }
}
    
    
    function CheckLoginInDB($username,$password)
    {   
        $username = $this->SanitizeForSQL($username);
        $pwdmd5 = md5($password);
        $qry = "Select name from $this->c9 ".
            " where usuario='$username' and password='$pwdmd5' ";
         
        $result = mysql_query($qry,$this->connection);
         
        if(!$result || mysql_num_rows($result) <= 0)
        {
            $this->HandleError("Error logueandose. ".
                "El usuario o la contraseña no coinciden.");
            return false;
        }
        return true;
    }
?>   