<?php

include 'config.php';

$students = $dm->createQueryBuilder('Documents\Student')
    ->sort('key')
    ->getQuery()
    ->execute();
?>
<?php include 'header.php' ?>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">

        <h3>學生名冊
            <a href="add.php"><span class="btn btn-primary pull-right">新增 5 個學生</span></a>
        </h3>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>key</th>
                <th>姓名</th>
                <th>身分證</th>
            </tr>
            </thead>
            <tbody>
            <?php
            /** @var  $student \Documents\Student */
            foreach ($students as $student):?>
                <tr>
                    <td><?php echo  $student->getKey() ?></td>
                    <td><?php echo  $student->getName() ?></td>
                    <td><?php echo  $student->getPersonId() ?></td>
                </tr>

            <?php endforeach;?>
            </tbody>
        </table>

    </div>
</div>


<?php include 'footer.php' ?>
