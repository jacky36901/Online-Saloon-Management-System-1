<?php session_start();
$user=$_SESSION['userid'];
 include_once("../shares/db/mydatabase.inc");?>
<?php include("top.php");?>
<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="DELETE FROM category where id='$id'";
    setDatas($sql);
    echo "<script>alert('successfully  deleted!!!')</script>";
nextpage('viewcate.php');
}
?>