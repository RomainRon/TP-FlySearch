<?php

class Destination
{
    private $_id;
    private $_location;
    private $_price;
    private $_tourOperateurId;

    // Constructeur // 
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    // Hydrateur // 
    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    // GET - SET ID  // 
    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    // GET - SET LOCATION  // 
    public function getLocation()
    {
        return $this->_location;
    }

    public function setLocation($location)
    {
        $this->_location = $location;
    }

    // GET - SET PRICE  // 
    public function getPrice()
    {
        return $this->_price;
    }

    public function setPrice($price)
    {
        $this->_price = $price;
    }

    // GET - SET TOUROPERATEURID  // 
    public function getTourOperateurId()
    {
        return $this->_tourOperateurId;
    }

    public function setTourOperateurId($tourOperateurId)
    {
        $this->_tourOperateurId = $tourOperateurId;
    }
}
