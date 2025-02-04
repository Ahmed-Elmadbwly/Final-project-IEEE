<?php
session_start(); // بدء الجلسة

// تحقق إذا كان يوجد ID للمنتج
if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // يمكنك إضافة بيانات المنتج هنا، مثل الاسم والسعر والصورة وغيرها من البيانات
    $product_name = $_POST['product_name'] ?? 'اسم المنتج';
    $product_price = $_POST['product_price'] ?? 0;

    // تحقق إذا كانت السلة موجودة بالفعل
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // إضافة المنتج إلى السلة
    if (!isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] = [
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => 1
        ];
    } else {
        $_SESSION['cart'][$product_id]['quantity'] += 1;
    }

    // إعادة التوجيه إلى صفحة السلة أو الصفحة التي تريدها
    header('Location: catalog.php');
    exit();
}
?>
