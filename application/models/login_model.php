<?php

class Login_model extends CI_Model{
    
    public function login_valid($username,$password)
    {
       $password = mb5 ($password);

       $q =$this->db->where(['username'=>$username,'password'=>$password])
                      ->get('users');

                      if( $q->num_row() ) {  
                         return $q->row()->id
;                        return TRUE;
                         }else{
                         return FALSE;
                       }
    }
}
