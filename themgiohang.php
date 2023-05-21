<?php
session_start();
include('./admincp/config.php');

// them so luong 
if (isset($_GET['cong'])) {
    $id = $_GET['cong'];
    foreach ($_SESSION['gio_hang'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array('TENSP' => $cart_item['TENSP'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'GIASP' => $cart_item['GIASP'], 'HINH' => $cart_item['HINH'], 'MALOAI' => $cart_item['MALOAI']);
            $_SESSION['gio_hang'] = $product;
        } else {
            $tangsoluong = $cart_item['soluong'] + 1;
            if ($cart_item['soluong'] < 9) {

                $product[] = array('TENSP' => $cart_item['TENSP'], 'id' => $cart_item['id'], 'soluong' => $tangsoluong, 'GIASP' => $cart_item['GIASP'], 'HINH' => $cart_item['HINH'], 'MALOAI' => $cart_item['MALOAI']);
            } else {
                $product[] = array('TENSP' => $cart_item['TENSP'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'GIASP' => $cart_item['GIASP'], 'HINH' => $cart_item['HINH'], 'MALOAI' => $cart_item['MALOAI']);
            }
            $_SESSION['gio_hang'] = $product;
        }

    }
    header('Location:giohang.php?quanly=giohang');

}
// tru so luong 
if (isset($_GET['tru'])) {
    $id = $_GET['tru'];
    foreach ($_SESSION['gio_hang'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array('TENSP' => $cart_item['TENSP'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'GIASP' => $cart_item['GIASP'], 'HINH' => $cart_item['HINH'], 'MALOAI' => $cart_item['MALOAI']);
            $_SESSION['gio_hang'] = $product;
        } else {
            $tangsoluong = $cart_item['soluong'] - 1;
            if ($cart_item['soluong'] > 1) {

                $product[] = array('TENSP' => $cart_item['TENSP'], 'id' => $cart_item['id'], 'soluong' => $tangsoluong, 'GIASP' => $cart_item['GIASP'], 'HINH' => $cart_item['HINH'], 'MALOAI' => $cart_item['MALOAI']);
            } else {
                $product[] = array('TENSP' => $cart_item['TENSP'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'GIASP' => $cart_item['GIASP'], 'HINH' => $cart_item['HINH'], 'MALOAI' => $cart_item['MALOAI']);
            }
            $_SESSION['gio_hang'] = $product;
        }

    }
    header('Location:giohang.php?quanly=giohang');

}
//xoa sp
if (isset($_SESSION['gio_hang']) && isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    foreach ($_SESSION['gio_hang'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array('TENSP' => $cart_item['TENSP'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'GIASP' => $cart_item['GIASP'], 'HINH' => $cart_item['HINH'], 'MALOAI' => $cart_item['MALOAI']);
        }
        $_SESSION['gio_hang'] = $product;
        header('Location:giohang.php?quanly=giohang');
    }
}
//xoa tat ca
if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
    unset($_SESSION['gio_hang']);
    header('Location:giohang.php?quanly=giohang');
}
// them san pham vao giohang
if (isset($_POST['themgiohang'])) {
    $id = $_GET['MASP'];
    $soluong = 1;
    $sql = "SELECT * FROM san_pham WHERE MASP ='" . $id . "' LIMIT 1";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        $new_product = array(array('TENSP' => $row['TENSP'], 'id' => $id, 'soluong' => $soluong, 'GIASP' => $row['GIASP'], 'HINH' => $row['HINH'], 'MALOAI' => $row['MALOAI']));
        //Kiem tra session trong gio hang
        if (isset($_SESSION['gio_hang'])) {
            $found = false;
            foreach ($_SESSION['gio_hang'] as $cart_item) {
                //neu du lieu trung
                if ($cart_item['id'] == $id) {
                    $product[] = array('TENSP' => $cart_item['TENSP'], 'id' => $cart_item['id'], 'soluong' => $soluong + 1, 'GIASP' => $cart_item['GIASP'], 'HINH' => $cart_item['HINH'], 'MALOAI' => $cart_item['MALOAI']);
                    $found = true;
                } else {
                    //neu du lieu ko trung
                    $product[] = array('TENSP' => $cart_item['TENSP'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'GIASP' => $cart_item['GIASP'], 'HINH' => $cart_item['HINH'], 'MALOAI' => $cart_item['MALOAI']);
                }
            }
            if ($found == false) {
                //lien ket du lieu new_product vs product
                $_SESSION['gio_hang'] = array_merge($product, $new_product);
            } else {
                $_SESSION['gio_hang'] = $product;
            }
        } else {
            $_SESSION['gio_hang'] = $new_product;
        }
    }
    header('Location:giohang.php?quanly=giohang');
}

?>