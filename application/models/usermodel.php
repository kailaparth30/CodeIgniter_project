<?php
class usermodel extends userpanel
{

   public function getuser()
   {

      $q = $this->db->select('*')
         ->where('id', 1)
         ->get("user_account")->result();
      return $q;
      $this->test();
      $this->user();
   }
}
