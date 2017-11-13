<?php
include "config.php";
$id = $_GET['id'];

$student = $dm->getRepository('Documents\Student')->find($id);
?>
<form id="edit_form" method="post" action="save.php">
    <input type="text" name="name" value="<?php echo $student->getName()?>">
    <input type="text" name="person_id" value="<?php echo $student->getPersonId()?>">
    <input type="hidden" name="id" value="<?php echo $student->getId()?>">

</form>
