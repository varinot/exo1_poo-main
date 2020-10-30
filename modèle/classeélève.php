<?php
class Eleves {

public $_nom;
public $_prenom;
public $_age;
public $_numsecu;
public $_adresse;
public $_contact;

public function __construct($nom, $prenom,
 $age, $numsecu, $adresse, $contact)
{
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_age = $age;
    $this->_numsecu = $numsecu;
    $this->_adresse = $adresse;
    $this->_contact = $contact;
}
public function getNom(){
return $this->_nom;}
public function getPrenom(){
return $this->_prenom;}
public function getAge(){
return $this->_age;}
public function getNumsecu(){
return $this->_numsecu;}
public function getAdresse(){
return $this->_adresse;}
public function getContact(){
return $this->_contact;}

};
?>