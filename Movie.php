<?php
   class Movie {
      public $nome;
      public $cast;
      public $registi;
      public $riassunto;
      public $anno_di_uscita;

      function __construct($_nome, $_cast, $_regista, $_riassunto, $_anno_di_uscita) {
         $this->nome = $_nome;
         $this->cast = $_cast;
         $this->regista = $_regista;
         $this->riassunto = $_riassunto;
         $this->anno_di_uscita = $_anno_di_uscita;
      }

   }