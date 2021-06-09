<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = $_POST['product'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $discountAmount = $price * $discount * 0.01;
    $discountPrice = $price - $discountAmount;

    if ($price < 1000) {
        $discountAmount = 0;
        echo "Ko dkm";
    } else {

        echo $product . " dkm " . $discount . "%" . " còn " . $discountPrice. " đồng";
    }
}