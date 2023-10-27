
<?php
session_start();
include('../admin/config/dbconfig.php');




if (isset($_POST['update_product_ins']))
{
    $categort_id = $_POST['categort_id'];
    $product_id = $_POST['product_id'];
    $type_id = $_POST['id_typeshoes'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $small_description= $_POST['small_description'];
    $selling_price = $_POST['selling_price'];
    $original_price= $_POST['original_price'];
    $qty = $_POST['qty'];
    $status = isset($_POST['status']) ? '1' : '0';
    $trending = isset($_POST['trending']) ? '1' : '0';

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

    $update_product_query = "UPDATE products SET  categort_id ='$categort_id',name_sp='$name',
    slug='$slug',small_description='$small_description',description ='$description',meta_title='$meta_title',meta_description='$meta_description',meta_keywords='$meta_keywords',status='$status',trending='$trending',original_price='$original_price',
    selling_price='$selling_price',qty='$qty',image = '$update_filename',id_typeshoes = '$type_id' WHERE id='$product_id'";


    $query_run = mysqli_query($con,$update_product_query);

    if ($query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
        if (file_exists("../admin/uploads/".$old_image))
        {
            unlink("../admin/uploads/".$old_image);
        }
        $_SESSION['message'] = "add products successfully";
        header("Location: view_product.php");
        exit(0);
    } else {
        $_SESSION['message'] = "somethinh went wrong!!";
        header("Location: product_add.php");
        exit(0);
    }

} else
{
    header("Location:index.php");
}


if (isset($_POST['product_ins'])) {
    $categort_id = $_POST['categort_id'];
    $type_id = $_POST['id_typeshoes'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $small_description= $_POST['small_description'];
    $selling_price = $_POST['selling_price'];
    $original_price= $_POST['original_price'];
    $qty = $_POST['qty'];
    $status = isset($_POST['status']) ? '1' : '0';
    $trending = isset($_POST['trending']) ? '1' : '0';

    $image = $_FILES['image']['name'];
    $path = "../admin/uploads";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '' . $image_ext;
//    $image = $_FILES['image']['name'];
//    $image_tmp = $_FILES['image']['tmp_name'];
//    $image = time().'_'.$image;

    $query = " INSERT INTO products(id_typeshoes,categort_id,name_sp,slug,description,meta_title,meta_description,meta_keywords,status,trending,small_description,original_price,selling_price,qty,image)
    VALUES ('$type_id','$categort_id','$name','$slug','$description','$meta_title','$meta_description','$meta_keywords','$status','$trending','$small_description','$original_price','$selling_price','$qty','$filename')
";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
//        move_uploaded_file($image,'../admin/uploads/'.$image);
        $_SESSION['message'] = "add products successfully";
        header("Location: view_product.php");
        echo "haha";
        exit(0);
    } else {
        $_SESSION['message'] = "somethinh went wrong!!";
//        header("Location: add_categories.php");
        echo " wrong!!";
        exit(0);
    }

}


?>