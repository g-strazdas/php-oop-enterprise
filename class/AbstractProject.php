<?php
namespace ENTERPRISE;
/* Kuriame abstract class. BŪTINAS keyword abstract */
abstract class AbstractProject {
    /* metodų pavadinimai yra, bet jie - nerealizuojami o projektuojami ir būtini įgyvendinti child class*/
    abstract public function setName($name);
    abstract public function setSurname($surname);
    abstract public function setId($id);
    abstract public function setPhone($phone);
    abstract public function setEmail($email);
    abstract public function setRole($role);
    abstract public function getEmployerData();
}