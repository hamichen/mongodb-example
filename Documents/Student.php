<?php
namespace Documents;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;


/** @ODM\Document */
class Student
{
    /** @ODM\Id */
    private $id;

    /** @ODM\Field(type="integer") */
    private $key;

    /** @ODM\Field(type="string") */
    private $name;

    /** @ODM\Field(type="string") */
    private $person_id;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * @param mixed $person_id
     */
    public function setPersonId($person_id)
    {
        $this->person_id = $person_id;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }


}