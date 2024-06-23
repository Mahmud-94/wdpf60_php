<?php
function calculatetax($price, $tax=""){
    $total = $price + $price*$tax;
    return $total;
}

echo calculatetax(10);
?>