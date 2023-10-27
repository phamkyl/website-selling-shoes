<?php
session_start();
include('../admin/config/dbconfig.php');
//them so luong
if(isset($_GET['cong'])){
    $id=$_GET['cong'];
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id']!=$id){
            $product[]= array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'selling_price'=>$cart_item['selling_price'],'image'=>$cart_item['image']);
            $_SESSION['cart'] = $product;
        }else{
            $tangsoluong = $cart_item['soluong'] + 1;
            if($cart_item['soluong']<=9){

                $product[]= array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'selling_price'=>$cart_item['selling_price'],'image'=>$cart_item['image']);
            }else{
                $product[]= array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'selling_price'=>$cart_item['selling_price'],'image'=>$cart_item['image']);
            }
            $_SESSION['cart'] = $product;
        }

    }
    header('Location:../USERS/cart.php');
}
//tru so luong
if(isset($_GET['tru'])){
    $id=$_GET['tru'];
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id']!=$id){
            $product[]= array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'selling_price'=>$cart_item['selling_price'],'image'=>$cart_item['image']);
            $_SESSION['cart'] = $product;
        }else{
            $tangsoluong = $cart_item['soluong'] - 1;
            if($cart_item['soluong']>1){

                $product[]= array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'selling_price'=>$cart_item['selling_price'],'image'=>$cart_item['image']);
            }else{
                $product[]= array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'selling_price'=>$cart_item['selling_price'],'image'=>$cart_item['image']);
            }
            $_SESSION['cart'] = $product;
        }

    }
    header('Location:../USERS/cart.php');
}
//xoa san pham
if(isset($_SESSION['cart'])&&isset($_GET['xoa'])){
    $id=$_GET['xoa'];
    foreach($_SESSION['cart'] as $cart_item){

        if($cart_item['id']!=$id){
            $product[]= array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'selling_price'=>$cart_item['selling_price'],'image'=>$cart_item['image']);
        }

        $_SESSION['cart'] = $product;
        header('Location:../USERS/cart.php');
    }
}
//xoa tat ca
if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
    unset($_SESSION['cart']);
    header('Location:../USERS/cart.php');
}
//them sanpham vao gio hang
if(isset($_POST['cart_tt'])){
//    session_destroy();
    $id=$_GET['idsanpham'];
    $soluong=1;
    $sql ="SELECT * FROM products WHERE id= '$id'LIMIT 1 ";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);
    if($row){
        $new_product=array(array('name'=>$row['name_sp'],'id'=>$id,'soluong'=>$soluong,'selling_price'=>$row['selling_price'],'image'=>$row['image']));
        //kiem tra session gio hang ton tai
        if(isset($_SESSION['cart'])){
            $found = false;
            foreach($_SESSION['cart'] as $cart_item){
                //neu du lieu trung
                if($cart_item['id']==$id){
//                    $product[]= array  ('name'=>$row['name'],'id'=>$id,'soluong'=>$soluong,'selling_price'=>$row['selling_price'],'image'=>$row['img']);
                    $product[]= array('name'=>$cart_item['name_sp'],'image'=>$cart_item['image'],'id'=>$cart_item['id'],'soluong'=>$soluong+1,'selling_price'=>$cart_item['selling_price']);
                    $found = true;
                }else{
                    //neu du lieu khong trung
                    $product[]= array('name'=>$cart_item['name_sp'],'image'=>$cart_item['image'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'selling_price'=>$cart_item['selling_price']);
                }
            }
            if($found == false){
                //lien ket du lieu new_product voi product
                $_SESSION['cart']=array_merge($product,$new_product);
            }else{
                $_SESSION['cart']=$product;
            }
        }else{
            $_SESSION['cart'] = $new_product;
        }

    }
    header('Location:../USERS/cart.php');
    print ($_SESSION['cart']);

}



?>