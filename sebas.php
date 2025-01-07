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

?>