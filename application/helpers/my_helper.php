<?php

function is_login()
{ 
      if(isset($_SESSION['user_data']))
      {
          return true;
      }
      else
      {
         redirect( base_url().'Home/login', 'refresh');
      }
  }
  

?>