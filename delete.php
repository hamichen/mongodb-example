<?php
include "config.php";
$id = $_GET['id'];

$student = $dm->getRepository('Documents\Student')->find($id);
$dm->remove($student);
$dm->flush();
