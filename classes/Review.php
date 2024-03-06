<?php

class Review
{
    private $_id;
    private $_message;
    private $_author;
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

    // GET - SET MESSAGE  // 
    public function getMessage()
    {
        return $this->_message;
    }

    public function setMessage($message)
    {
        $this->_message = $message;
    }

    // GET - SET AUTHOR  // 
    public function getAuthor()
    {
        return $this->_author;
    }

    public function setAuthor($author)
    {
        $this->_author = $author;
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
