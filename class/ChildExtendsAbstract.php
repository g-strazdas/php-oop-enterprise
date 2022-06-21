<?php
namespace ENTERPRISE; //Kuriame child klasę abstrakčiai klasei

class ChildExtendsAbstract extends AbstractProject
{
    private $name;
    private $surname;
    private $id;
    private $phone;
    private $email;
    private $address; //pridėta ypatybė
    private $role;

    public function __construct($name, $surname, $id, $phone, $email, $address, $role){
        $this->name=$name;
        $this->surname= $surname;
        $this->id=$id;
        $this->phone=$phone;
        $this->email=$email;
        $this->address=$address; //pridėta ypatybė į konstruktorių
        $this->role=$role;
    }

    public function setAddress($address){ //pridėta ypatybės f-ja
        $this->address=$address;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getEmployerData(){
        return [
            $this->name,
            $this->surname,
            $this->id,
            $this->phone,
            $this->email,
            $this->address,
            $this->role,
        ];
    }
}