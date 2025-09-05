<?php
function calculateDiscount($price, $discount)
{
    // using "if-statement", we will check the conditions about original price and discounted price/percentage
    // if the user input is invalid, return error message

    // 1st: input validation for checking about numeric values
    if (!is_numeric($price) || !is_numeric($discount)) {

        return "\nError: It must me numeric values";
    }

    // 2nd: convert those numbers into float
    $price = floatval($price);
    $discount = floatval($discount);

    // 3rd: the price should not be negative 
    if ($price < 0) {
        return "\nError: Price can't be negative";
    }

    // 4th: discount percentage must me betweem 0 to 100
    if ($discount < 0 || $discount > 100) {
        return "\nError: Please input between 0 and 100";
    }

    // last: calculate the discounted price
    $discountedAmount = $price - ($price * $discount / 100);
    return $discountedAmount;
}

$originalPrice = 100; //original price of the product
$discountPercentage = 20; // discount percentage

$discountedPrice = calculateDiscount($originalPrice, $discountPercentage);

echo "Original Price: $" . $originalPrice . "\n";
echo "Discounted Percentage: " . $discountPercentage . "%\n";
echo "Discounted Price: $" . $discountedPrice . "\n"

    /**
     * This code validates input by looking at if the input is numeric values, it shouldn't be negative value and apply discount through 0-100% range.
     * Lastly, it shows that if the input is invalid, it will return error message but if it is valid, it will show the discounted amount by subtracting 
     * discount from original price.
     */

    ?>