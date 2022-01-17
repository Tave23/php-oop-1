<?php
   class Movie {
      public $nome;
      public $cast;
      public $registi;
      public $riassunto;
      public $anno_di_uscita;

      function __construct($_nome, $_cast, $_regista) {
         $this->nome = $_nome;
         $this->cast = $_cast;
         $this->regista = $_regista;
      }

      public function getExceptedSummary($length = 80) {
         return substr($this->riassunto, 0, $length) . "...";
      }
   }