<?php
session_start();
$con = mysqli_connect("localhost","root","","newbies_db");

if(isset($_POST['update']))
{
    $id = $_POST['studID'];
    $last = $_POST['lastName'];
    $first = $_POST['firstName'];
    $mi = $_POST['MI'];
    $xcourse = $_POST['course'];
    $year = $_POST['yearlevel'];

    $query = "UPDATE tbl_students SET lastName='$last', firstName='$first' , MI='$mi', course='$xcourse', yearlevel='$year' WHERE studID='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo "Updated";
        echo "<a href='./index.php'> <input type='button' value='Back'/></a>";
    }
    else
    {
        echo "Not Updated";
        echo "<a href='./index.php'> <input type='button' value='Back'/></a>";
    }
}

?>