<?php
include "config.php";
$id = $_GET['id'];
/** @var  $student \Documents\Student */
$student = $dm->getRepository('Documents\Student')->find($id);
$type = $student->getPhotoType();
$name = $student->getPhotoName();

header('Content-Type: '.$type);
header('Content-Disposition: attachment; filename="'.$name.'"');

echo $student->getPhoto()->getBytes();

exit;