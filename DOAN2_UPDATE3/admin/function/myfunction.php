<?php
include ('../admin/config/dbconfig.php');

    function getAll($table,$start, $limit)
    {
        global $con;
        $query = " SELECT * FROM $table LIMIT $start, $limit";
        return $query_run = mysqli_query($con,$query);

    }

    function getByID($table,$id)
    {
        global $con;
        $query = "SELECT * FROM $table WHERE id='$id'";
        return $query_run = mysqli_query($con,$query);
    }
function getByID_danhmuc($table,$id)
{
    global $con;
    $query = "SELECT * FROM $table WHERE id_danhmuc='$id'";
    return $query_run = mysqli_query($con,$query);
}

    function redirect($url,$message)
    {
        $_SESSION['message'] = $message;
        header("Location:$url");
    }

    function getByTotal($table,$role)
    {
        global $con;
        $query ="SELECT * FROM  $table  WHERE role_as ='$role'";
        return $query_run = mysqli_query($con,$query);
    }
//    function getbySLSPBR($table,$table_tt,$id,$id_tt)
//    {
//        global $con;
//        $query = "SELECT SUM(soluongmua) AS TongSLSPdaban
//        FROM $table WHERE EXISTS (SELECT * FROM $table_tt WHERE $table_tt.$id = $table.$id)";
//        $query_run = mysqli_query($con,$query);
//    }
?>
