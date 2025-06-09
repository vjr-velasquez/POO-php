<?php
    class OperacionesBasicas {
        //Atributos = que son las caracteristicas de la clase
        public $valor1;
        public $valor2;
        private $resultado;
        // Metodos = que son las acciones o bien funciones 
        public function sumar(){
            $this->resultado = $this->valor1 + $this->valor2;
            return "La suma de los numeros es : " .$this->resultado;
        }
        public function restar(){
            $this->resultado = $this->valor1 - $this->valor2;
            return "La resta de los numeros es : " .$this->resultado;
        }
        public function multiplicar(){
            $this->resultado = $this->valor1 * $this->valor2;
            return "La multiplicacion de los numeros es : " .$this->resultado;
        }
        public function dividir(){
            if($this->valor2 == 0){
                return "No se puede dividir por cero";
            } else {
                $this->resultado = $this->valor1 / $this->valor2;
                return "La division de los numeros es : " .$this->resultado;
            }
        }
    }


?>