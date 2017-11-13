<?php

include "config.php";

// 隨機取 5個 姓名
$nameStr = file_get_contents('./data/name-random.txt');
$nameArr = explode("\n", $nameStr);
$randKey = array_rand($nameArr, 5);


foreach ($randKey as $key) {
    $tempArr = explode(',', $nameArr[$key]);
    $student = new \Documents\Student();
    $student->setKey($key);
    $student->setName(trim($tempArr[0]));
    $student->setPersonId(trim($tempArr[1]));
    $dm->persist($student);
}

$dm->flush();

header('Location: list.php');
