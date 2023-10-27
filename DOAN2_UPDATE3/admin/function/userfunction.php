<?php
include ('../admin/config/dbconfig.php');

function getProActive($table,$start, $limit)
{
    global  $con;
    $query = "SELECT * FROM $table WHERE status = '1' LIMIT $start, $limit";
    return $query_run = mysqli_query($con,$query);
}
function getAllActive($table)
{
    global  $con;
    $query = "SELECT * FROM $table WHERE status = '1' ";
    return $query_run = mysqli_query($con,$query);
}
function getalactive($table)
{
    global  $con;
    $query = "SELECT * FROM $table ";
    return $query_run = mysqli_query($con,$query);
}

function getaActive($table)
{
    global  $con;
    $query = "SELECT * FROM $table WHERE trending = '1'";
    return $query_run = mysqli_query($con,$query);
}
//function taodonhang($madonhang,$name,$diachi,$email,$sodt,$pttt,$id_khachhang)
//{
//    global  $con;
//    $query = "INSERT INTO oder_tb(id_oder,name,diachi,sodt,pttt,id_khachhang)values
//      ('$madonhang','$name','$diachi','$email','$sodt','$pttt','$id_khachhang')";
//   return $query_run = mysqli_query($con,$query);
//
//}
function getSlugActive($table,$slug)
{
    global $con;
    $query = "SELECT * FROM $table WHERE slug ='$slug'AND status = '1' ";
    return $query_run = mysqli_query($con,$query);
}

function getslugActivetype($table,$slug)
{
    global $con;
    $query = "SELECT * FROM $table WHERE id_danhmuc ='$slug'AND status = '1' ";
    return $query_run = mysqli_query($con,$query);
}

//function getUSERS($table)
//{
//    global $con;
//    $query = "SELECT * FROM $table WHERE role_as='0'";
//    return $query_run = mysqli_query($con,$query);
//}



function getProdByCategory($category_id,$start, $limit)
{
    global $con;
    $query = "SELECT * FROM products WHERE categort_id='$category_id'AND status = '1' LIMIT $start, $limit";
    return $query_run = mysqli_query($con,$query);
}
function getProdBytype($danhmuc_id,$start, $limit)
{
    global $con;
    $query = "SELECT * FROM products WHERE id_typeshoes='$danhmuc_id'AND status = '1' LIMIT $start, $limit";
    return $query_run = mysqli_query($con,$query);
}
function getProdByPrice($selling_price)
{
    global $con;
    $query = "SELECT * FROM products WHERE selling='$selling_price' like %  AND status = '1'";
    return $query_run = mysqli_query($con,$query);
}

function getIDproducts ($table,$id)
{
    global $con;
    $query = "SELECT * FROM $table WHERE id ='id'AND status = '1' ";
    return $query_run = mysqli_query($con, $query);
}
?>
