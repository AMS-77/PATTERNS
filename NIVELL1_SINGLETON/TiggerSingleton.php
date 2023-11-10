<?php
/*Refactoritzar la classe Tigger en un Singleton considerant els següents punts:

Defineix el mètode getInstance () que no tingui arguments. Aquesta funció és 
responsable de crear una instància de la classe Tigger només una vegada i tornar 
aquesta única instància cada vegada que es crida.
Imprimeix en pantalla múltiples vegades el rugit de Tigger.
Afegeix un mètode getCounter () que retorni el nombre de vegades que Tigger 
ha realitzat rugits*/

class TiggerSingleton {
    
    private int $contRugits = 0;
    //Es declara com static perque la mateixa instancia sigui compartida de manera global
    private static ?TiggerSingleton $tiggerOnly = null; 

    //posem el Constructor buit com a private perque solament es pugui trucar desde la Clase
    private function __construct() {
    }

    //funcio encarregada de saber si hi ha una instancia donada de alta o la tenim que donar 
    public static function getInstance  () :TiggerSingleton{
        if ( self::$tiggerOnly === null)  //el self per ser variable estatica
        {
            self::$tiggerOnly = new TiggerSingleton ();
            echo "Hemos creado una nueva instancia, Tigger no estaba creado\n";
        }else{
            echo "Tigger es único, te devuelvo su instancia que ya estaba creada\n";
        }
            return self::$tiggerOnly;
    }

    public function roar() {
        echo "Grrr!\n";
        $this->contRugits++;
    }

    public function contadorRugits () :int{
        return $this->contRugits;
    }
}
?>