
<?php
session_start();
$_SESSION['cart'][] = "Laptop";
echo "Item added to cart!";
?>



//
1.Purpose: To store user-specific data across multiple pages.

2.Functionality:

-> Start session with session_start().

-> Store shopping items in $_SESSION['cart'].

-> Retrieve and update cart across pages.
