<?php
session_start();
include ('../admin/config/dbconfig.php');

if (isset($_POST['update_category']))
{

    $categories_id = $_POST['id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $status = isset($_POST['status'])?'1':'0';
    $popular = isset($_POST['popular'])?'1':'0';

    $image = $_FILES['image']['name'];
    $path = "../admin/uploads";

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];


    if ($new_image!="")
    {
        //$update_filename = $new_image;
        $image_ext = pathinfo($new_image,PATHINFO_EXTENSION);
        $update_filename = time().'.'.$image_ext;

    }
    else
    {
        $update_filename =$old_image;
    }
    //
    $query = " UPDATE categories SET id='$categories_id', name ='$name',slug='$slug',description ='$description',meta_title='$meta_title',meta_description='$meta_description',meta_keywords='$meta_keywords',status ='$status',popular ='$popular',image ='$update_filename' WHERE id='$categories_id' ";
    $query_run = mysqli_query($con,$query);

    if ($query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
        if (file_exists("../admin/uploads/".$old_image))
        {
            unlink("../admin/uploads/".$old_image);
        }
        $_SESSION['message'] = "add products successfully";
        header("Location: view_categories.php");
        exit(0);
    } else {
        echo "something went wrong!!";
        header("Location: product_add.php");
        exit(0);
    }

} else
{
    header("Location:index.php");
}



if (isset($_POST['add_product']))
{
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $status = isset($_POST['status'])?'1':'0';
    $popular = isset($_POST['popular'])?'1':'0';

    $image = $_FILES['image']['name'];
    $path = "../admin/uploads";

    $image_ext = pathinfo($image,PATHINFO_EXTENSION);
    $filename = time().''.$image_ext;

    $query = " INSERT INTO categories(name,slug,description,meta_title,meta_description,meta_keywords,status,popular,image)
    VALUES ('$name','$slug','$description','$meta_title','$meta_description','$meta_keywords','$status','$popular','$filename')
";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$filename);
        $_SESSION['message'] = "add products successfully";
        header("Location: view_categories.php");
        exit(0);
    }else
    {
        $_SESSION['message'] = "somethinh went wrong!!";
        header("Location: add_categories.php");
        exit(0);
    }

}




?>