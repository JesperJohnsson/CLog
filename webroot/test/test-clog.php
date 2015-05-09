<?php
// Include CForm
include('../../autoloader.php');
$clog = new \phpe\log\CLog();
$clog->Timestamp(__CLASS__, __METHOD__, 'First time stamp');
$clog->Timestamp(__CLASS__, __METHOD__, 'Second time stamp');
$clog->Timestamp(__CLASS__, __METHOD__, 'Third time stamp');
?>


<!doctype html>
<meta charset=utf8>
<title>CLog</title>
<h1>Print all timestamp to a table.</h1>
<?=$clog->TimestampAsTable()?>
