<?php



if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

if(!isset($_POST['add_to_cart'])){
    $product_id = $_POST['product_id'];
    $quantity = (int)$_POST['quantity'];




    //if item is alredy in session cart, add to existing quanity



    if($quantity > 0){
        if(isset($_SESSION['cart'][$product_id])){
            $_SESSION['cart'][$product_id] += $quantity;

        } else {
            $_SESSION['cart'][$product_id] = $quantity;
        }
    }




    header("Location:db.php");
    exit();



}
?>