<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/27/2018
 * Time: 11:16 PM
 */

namespace App\Cart;
use App\Config\Database;
use App\Helpers\Format;
use App\Session\Session;

class Cart
{
    private $db;
    private $format;

    public function __construct()
    {
        $this->db = new Database();
        $this->format = new Format();
    }

    public function addToCart($productQuantity,$id){
        Session::init();
        $sessionId = session_id();
        $query = "SELECT * FROM products WHERE product_id='$id'";
        $result = $this->db->select($query)->fetch_assoc();

        $productName = $result['product_name'];
        $productPrice = $result['product_price'];
        $productImage = $result['product_image'];

        $checkProduct = "SELECT * FROM cart WHERE product_id='$id' AND session_id='$sessionId'";
        $checkProductResult = $this->db->select($checkProduct);
        if ($checkProductResult){
            $msg = "Product Already Added";
            return $msg;
        }
        else{
            $query = "INSERT INTO cart(session_id,product_id,product_name,product_price,cproduct_quantity,product_image) 
                  VALUES('$sessionId','$id','$productName','$productPrice','$productQuantity',
                  '$productImage')";
            $cartInsert = $this->db->insert($query);
            if ($cartInsert){
                header('Location:../../views/frontEnd/cart.php');
            }
            else{
                header("Location:404.php");
            }
        }
    }

    public function getCartProduct(){
        Session::init();
        $sessionId = session_id();
        $query = "SELECT cart.*,products.product_quantity
        FROM cart
        INNER JOIN products
        ON cart.product_id = products.product_id
        WHERE session_id='$sessionId'";
        $getCartProduct = $this->db->select($query);
        return $getCartProduct;
    }

    public function updateCart($cartId, $productQuantity)
    {
        $query = "UPDATE cart SET  cproduct_quantity='$productQuantity' WHERE cart_id='$cartId'";
        $updateCart = $this->db->update($query);
        if ($updateCart){
            header("Location:cart.php");
        }
        else{
            $msg = "Anything wrong!!! Product Quantity not updated";
            return $msg;
        }
    }

    public function cartDelete($id='')
    {
        $query = "DELETE FROM cart WHERE cart_id='$id'";
        $cartDelete = $this->db->delete($query);
        if ($cartDelete) {
            $msg = "<span class='success'><h2> Cart Deleted Successfully. </h2></span>";
            Session::set('message', 'Cart Deleted Successfully.');
            header("Location:cart.php");
        } else {
            $msg = "<span class='error'><h2> Cart Not Deleted. </h2></span>";
            return $msg;
        }
    }

    public function cartCheck()
    {
        Session::init();
        $sessionId = session_id();
        $query = "SELECT * FROM cart WHERE session_id='$sessionId'";
        $result = $this->db->select($query);
        return $result;
    }

}