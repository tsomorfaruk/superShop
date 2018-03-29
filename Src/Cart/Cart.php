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

        $query = "INSERT INTO cart(session_id,product_id,product_name,product_price,product_quantity,product_image) 
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
/*    public function getProductQuantity()
    {
        $query = "SELECT cart.*,products.product_quantity
        FROM cart
        INNER JOIN category
        ON cart.product_id = products.id
        WHERE session_id='$sessionId'";
        $getProductDetailsById = $this->db->select($query);
    }*/
}