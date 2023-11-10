<?php
/*Amb aquesta aplicació n'hem a probar que hem fet bé lo que s'ens demanava
per un costat que sigui un patró Singleton, o sigui que solament podem fer una 
única instancia de Clase, i per altre que ens compti bé el nombre de rugits */

include "TiggerSingleton.php";
/*Provem que solament es pugui crear una única instancia. Intentarem que ens faci 
2 instancies diferents y després les comparem, la comparació mirarà si apunten
al mateix lloc de la memoria. Ja que si fossin diferents instancies, cada
una s'hauria agafat un lloc diferent en memoria.*/

$tigger1 = TiggerSingleton::getInstance();
$tigger2 = TiggerSingleton::getInstance();

if ($tigger1 === $tigger2){
    echo "La Classe TiggerSingleton que has fet funciona, son la mateixa instancia\n";
}else{
    echo "La Classe TiggerSingleton no segueix el patró Singleton, has fet 2 instancies diferents\n";
}

//Provem ara que compti bé el nombre de rugits:

$tigger1->roar();
$tigger1->roar();
$tigger1->roar();

echo "El nombre de rugits és: " . $tigger1->contadorRugits();
?>