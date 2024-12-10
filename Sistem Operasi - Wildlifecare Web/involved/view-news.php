<?php
include "config.php";
if(!empty($_POST["id_news"]))
{  
$query = "SELECT * FROM news WHERE id_news = '".$_POST["id_news"]."'";

$query_run = mysqli_query($conn, $query);

}
?>