<?php
include "config.php";
$id = $_GET['id'];

?>
<form id="upload_form" method="post" action="save-photo.php" enctype="multipart/form-data">
    <input type="file" name="photo">
    <input type="hidden" name="id" value="<?php echo $id ?>">

</form>
