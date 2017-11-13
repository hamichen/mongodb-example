<?php
include "config.php";
$data = $_POST;
$id = $data['id'];
$file = $_FILES['photo'];
/** @var  $student \Documents\Student */
$student = $dm->getRepository('Documents\Student')->find($id);
$student->setPhotoName($file['name']);
$student->setPhotoType($file['type']);
$student->setPhoto($file['tmp_name']);
$dm->persist($student);
$dm->flush();

header("Location: list.php");