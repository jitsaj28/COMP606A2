<?php

require "header.php";
if(isset($_SESSION['Customer_ID']))
{
$_SESSION['Customer_ID'] ="";
?>
<script>window.location="index.php";</script>
<?php
}
if(isset($_SESSION['Trademan_ID']))
{
$_SESSION['Trademan_ID'] ="";
?>
<script>window.location="TradeManLogin.php";</script>
<?php
}


?>