<?php

class Review
{
    private $_id;
    private $_message;
    private $_author;
    private $_tourOperateurId;
<<<<<<< HEAD

=======
>>>>>>> b8b29934685d6323918d5f20b5a4c80a1fc03cac
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
     // RECUPERER TOUTES LES MESSAGES // 

     public function getAllMessage()
{
    try {
        // Préparation de la requête SQL pour sélectionner tous les messages
        $preparedRequest = $this->_message->prepare(
            "SELECT * FROM review WHERE id"
        );
        // Exécution de la requête SQL
        $preparedRequest->execute();

        // Récupération de toutes les lignes de résultats sous forme d'un tableau associatif
        $rows = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);

        // Utilisation d'une fonction de mapping de données pour créer les objets Review
        $messageArray = array_map(function($row) {
            return new Review($row);
        }, $rows);

        return $messageArray;
    } catch (PDOException $e) {
        // Gestion des erreurs

        throw $e;
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
