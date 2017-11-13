<?php
include "config.php";
$data = $_POST;
$id = $data['id'];
/** @var  $student \Documents\Student */
$student = $dm->getRepository('Documents\Student')->find($id);
$student->setName($data['name']);
$student->setPersonId($data['person_id']);
$dm->persist($student);
$dm->flush();

header("Location: list.php");