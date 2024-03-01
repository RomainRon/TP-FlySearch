<?php

class TourOperator
{
    private $_id;
    private $_name;
    private $_link;
    private $_gradeCount;
    private $_gradeTotal;
    private $_isPremium;

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

    // GET - SET NAME  // 
    public function getName()
    {
        return $this->_name;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    // GET - SET LINK  // 
    public function getLink()
    {
        return $this->_link;
    }

    public function setLink($link)
    {
        $this->_link = $link;
    }

    // GET - SET GradeCount  // 
    public function getGradeCount()
    {
        return $this->_gradeCount;
    }

    public function setGradeCount($gradeCount)
    {
        $this->_gradeCount = $gradeCount;
    }

    // GET - SET GradeTotal  // 
    public function getGradeTotal()
    {
        return $this->_gradeTotal;
    }

    public function setGradeTotal($gradeTotal)
    {
        $this->_gradeTotal = $gradeTotal;
    }

    // GET - SET isPremium  // 
    public function getIsPremium()
    {
        return $this->_isPremium;
    }

    public function setIsPremium($isPremium)
    {
        $this->_isPremium = $isPremium;
    }
}
