<?php
// Exercice 1 : Calculatrice
// Implémentez une calculatrice avec les fonctionnalités suivantes :

// Addition
// Soustraction
// Multiplication
// Division
// Étapes :

// Écrivez un test pour chaque fonctionnalité.
// Implémentez chaque méthode dans la classe Calculator pour faire passer les tests.
Class Calculator{
    public function add($x,$y){
        return $x+$y;
    }

    public function substract($x,$y){
        return $x-$y;
    }

    public function multiply($x,$y){
        return $x*$y;
    }
    public function divide($x,$y){
        if($x==0||$y==0){
            return ['message'=>'Can\'t use 0'];
        }
        return $x/$y;
    }
}
