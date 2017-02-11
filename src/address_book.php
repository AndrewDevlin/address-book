<?php
class Contact
{
    private $first_name;
    private $last_name;
    private $phone_number;
    private $street;
    private $city;
    private $state;
    private $zip;

    function __construct($first_name, $last_name, $phone_number, $street, $city, $state, $zip)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->phone_number = $phone_number;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
    }

    function setNewFirstName($new_first_name)
    {
        $this->first_name = $new_first_name;
    }

    function getNewFirstName()
    {
        return $this->first_name;
    }

    function setNewLastName($new_last_name)
    {
        $this->last_name = $new_last_name;
    }

    function getNewLastName()
    {
        return $this->last_name;
    }

    function setNewPhoneNumber($new_phone_number)
    {
        $this->phone_number = $new_phone_number;
    }

    function getNewPhoneNumber()
    {
        return $this->phone_number;
    }

    function setNewtreet($new_street)
    {
        $this->street = $new_street;
    }

    function getNewStreet()
    {
        return $this->street;
    }

    function setNewCity($new_city)
    {
        $this->city = $new_city;
    }

    function getNewCity()
    {
        return $this->city;
    }

    function setNewState($new_state)
    {
        $this->state = $new_state;
    }

    function getNewState()
    {
        return $this->state;
    }

    function setNewZip($new_zip)
    {
        $this->zip = $new_zip;
    }

    function getNewZip()
    {
        return $this->zip;
    }

    function save()
    {
        array_push($_SESSION['list_of_contacts'], $this);
    }

    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }
}
?>
