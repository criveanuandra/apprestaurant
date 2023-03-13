<html>
<body>


<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "restaurant2";

        // Create connection
        $mysqli = new mysqli($servername, $username, $password, $db);

        // Check connection
        if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
        }
        //echo "Connected successfully";

        $username = $_POST["username"];
        $foodName = $_POST["foodName"];
        $orderDetails = $_POST["orderDetails"];
        $userAddress = $_POST["userAddress"];
        $orderStatus = $_POST["orderStatus"];
        $productQuatity = $_POST["productQuatity"];
        $orderDateTime = $_POST["orderDateTime"];

        $sqlAddUser = "INSERT INTO user(`username`, `email`, `password`, `address`) " 
            . "VALUES ('$username','test@mail.com','Test','$userAddress')";

        // $resultUser = $mysqli->query($sqlAddUser);
        // if ($resultUser->num_rows > 0) {
            // $user = $resultUser->fetch_assoc();
            // var_dump($user);

            $sqlAddOrder = "INSERT INTO order ('status', 'details', 'dateTime', 'user_id') " 
            . "VALUES ('$orderStatus','$orderDetails','$orderDateTime','user_id')";

            // $resultOrder = $mysqli->query($sqlAddOrder);
            // if ($resultOrder->num_rows > 0) {
                // $order = $resultUser->fetch_assoc();
                // var_dump($order);
                $sqlAddProduct = "INSERT INTO product ('name', 'quantity', price, user_id, 'order_id') " 
                . "VALUES ('$foodName','$productQuatity','13$','user_id', 'order_id')";
            // }
        // }

        //echo "Result: " . $row;
        // var_dump($row["title"]);
        //printf ("%s (%s)\n", $row["Lastname"], $row["Age"]);

        // Free result set
    ?>


Username: <?php echo $username; ?><br>
Food name: <?php echo $foodName; ?><br>
Order details: <?php echo $orderDetails; ?><br>
User address: <?php echo $userAddress; ?><br>
Order status: <?php echo $orderStatus; ?><br>
Product quatity: <?php echo $productQuatity; ?><br>
Order date time: <?php echo $orderDateTime; ?>
</body>
</html>
