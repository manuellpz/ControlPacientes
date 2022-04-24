<?php
   class Conexion {
      private $server;
      private $user;
      private $pass;
      private $db;

      function __construct($server,$user,$pass,$db)
      {
         $this->server = $server;
         $this->user = $user;
         $this->pass = $pass;
         $this->db = $db;
      }

      function conectar() {
         $con = mysqli_connect($this->server,$this->user,$this->pass,$this->db);
         return $con;
      }
   }
?>