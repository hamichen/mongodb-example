<?php
include "config.php";
$data = $_POST['sel_id'];

foreach ($data as $id) {
    $student = $dm->getRepository('Documents\Student')->find($id);
    $dm->remove($student);
}

$dm->flush();
