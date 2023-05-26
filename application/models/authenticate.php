<?php
 class Authenticate extends CI_model{

    public function authetnicate($username,$password)
    {
        return TRUE;
    }
     public function getdata()
     {
        return ['abc'=>'ABC','xyz'=>'XYZ'];
     }

 }
?>