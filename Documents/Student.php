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

    /** @ODM\Field(type="file") */
    private $photo;

    /** @ODM\Field(type="string") */
    private $photo_name;

    /** @ODM\Field(type="string") */
    private $photo_type;

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
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getPhotoName()
    {
        return $this->photo_name;
    }

    /**
     * @param mixed $photo_name
     */
    public function setPhotoName($photo_name)
    {
        $this->photo_name = $photo_name;
    }

    /**
     * @return mixed
     */
    public function getPhotoType()
    {
        return $this->photo_type;
    }

    /**
     * @param mixed $photo_type
     */
    public function setPhotoType($photo_type)
    {
        $this->photo_type = $photo_type;
    }





}