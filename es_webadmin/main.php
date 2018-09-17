<?php 
  function formatDate($p_separtor){
      switch($p_separtor){
        case "-" :  
          return date("Y-m-d");
        break;
        case "/" :
          return date("Y/m/d");
        break;
        case "."  :
          return date("Y.m.d");
        break;
      }
  }
?>