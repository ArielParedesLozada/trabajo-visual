<?php
class sebas{
    public function promedio(array $lista){
        $suma = 0;
        foreach($lista as $numero){
            $suma += $numero;
        }
        return $suma / count($lista);
    }
}

$c = new sebas();
$numeros = [1,2,3,4,5,6,7,8,9,10];
echo "El promedio es " . $c->promedio($numeros);