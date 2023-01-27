<html>
<head>
    <title>Warehouse Information</title>
    <link rel="stylesheet" href="information.css">
</head>
<body>
    <div class='container-fluid'>
        <div class='container'>
            <h2>GROUP 1 PROJECT</h2>
            <ul>
                <li><a href="Home.html"> HOME</a></li>
                <li><a href="show_warehouses.php" class="active"> VIEW WAREHOUSES</a></li>
                <li><a href="show_stocks.php">STOCK TIMELINE</a></li>
                <li><a href="show_products.php"> VIEW PRODUCTS</a></li>
            </ul>
            <button class='btn'><a href='products.php' style='color:#30d300'><ion-icon name='create-outline'></ion-icon>&nbsp;Edit Products</a></button>
        </div>
        <div class='content'>
            <h3>Warehouse Information</h3>
            <div style="overflow-x: auto;">
                <table>
                    <thead>
                        <tr>
                            <th>Warehouse Tag</th>
                            <th>Warehouse Address</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                $conn = new mysqli("localhost", "root", "", "inventory");

                                if (!$conn) {
                                    die("Could not connect to MySQL. Try starting the server");
                                }
                                else{
                                $sql = "SELECT tag,address FROM warehouses";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>".$row["tag"]."</td>";
                                            echo "<td>".$row["address"]."</td>";
                                            echo "</tr>";
                                    }
                                    } else {
                                        echo "0 results";
                                    }
                                }
                            ?>
                    </tbody>
                </table>
            </div>
            <a href="Home.html"><button class="btn"><ion-icon name="arrow-back-outline"></ion-icon>&nbsp; Back to Home</button></a>
        </div>
    </div>
    <script type='module' src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
    <script nomodule src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
</body>
</html>