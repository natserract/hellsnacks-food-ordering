<?php
    if (isset($_GET['act']) && isset($_GET['ref'])) {
        $act = $_GET['act'];
        $ref = $_GET['ref'];
        $qty = $_POST['quantity'];
        $qtyCart = $_POST['quantity'];
             
        if ($act == "add") {
            if (isset($_GET['barang_id'])) {
                $barang_id = $_GET['barang_id'];
                if (isset($_SESSION['items'][$barang_id])) {
                    $_SESSION['items'][$barang_id] += $qty;
                } else {
                    $_SESSION['items'][$barang_id] = $qty; 
                }
            }
        } elseif ($act == "plus") {
            if (isset($_GET['barang_id'])) {
                $barang_id = $_GET['barang_id'];
                if (isset($_SESSION['items'][$barang_id])) {
                    $_SESSION['items'][$barang_id] += 1;
                }
            }
        } elseif ($act == "min") {
            if (isset($_GET['barang_id'])) {
                $barang_id = $_GET['barang_id'];
                if (isset($_SESSION['items'][$barang_id])) {
                    $_SESSION['items'][$barang_id] -= 1;
                }
            }
        }elseif($act == "update"){
            if(isset($_GET['barang_id'])){
                $barang_id = $_GET['barang_id'];
                $uQty += $qtyCart;
                if (isset($_SESSION['items'][$barang_id])) {
                    $_SESSION['items'][$barang_id] = $uQty;
                } else {
                    $_SESSION['items'][$barang_id] -= $uQty; 
                }
            }
        } elseif ($act == "del") {
            if (isset($_GET['barang_id'])) {
                $barang_id = $_GET['barang_id'];
                if (isset($_SESSION['items'][$barang_id])) {
                    unset($_SESSION['items'][$barang_id]);
                }
            }
        } elseif ($act == "clear") {
            if (isset($_SESSION['items'])) {
                foreach ($_SESSION['items'] as $key => $val) {
                    unset($_SESSION['items'][$key]);
                }
                unset($_SESSION['items']);
            }
        } elseif ($act == "empty") {
            unset($_SESSION['items']);
        } 
         
      header ("location:" . $ref);
       
    }
?>

