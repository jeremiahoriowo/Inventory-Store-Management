<head>
    <title>Stock_flow Information</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        .container-fluid{
            width: 100%;
            height: 100vh;
            background: linear-gradient(to left, rgba(0,0,0,0.7)50%, rgba(0,0,0,0.7)50%), url(inventory2.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            overflow: hidden;
        }
        .container{
            width: 79%;
            height: 80px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 25px;
        }
        .container h2{
            font-family: arial;
            font-size: 30px;
            color: white;
            cursor: pointer;
            padding-right: 30px;
            font-weight: bold;
        }
        a{
            list-style-type: none;
            text-decoration: none;
            color: white;
            transition: .5s;
        }
        a.active{
            color: #30d300;
        }
        .container ul{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container ul li{
            font-family: arial;
            color: white;
            list-style-type: none;
            font-weight: bold;
            margin-right: 30px;
            cursor: pointer;
            transition: .5s;
        }
        /* .container ul li:first-child{
            color: #30d300;
        } */
        /* .container ul li:hover{
            color: #30d300;
        } */
        .container .btn{
            width: 200px;
            height: 50px;
            border-radius: 10px;
            font-size: 18px;
            border: none;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            color: #30d300;
            transition: .5s;
        }
        .container .btn:hover{
            background-color: #30d300;
            color: #fff;
        }
        .content{
            width: 1200px;
            height: 100vh;
            margin: auto;
        }
        .content h3{
            font-family: arial;
            font-weight: bold;
            color: #fff;
            font-size: 39px;
            padding-top: 100px;
        }
        .content p{
            font-family: arial;
            font-weight: bold;
            color: lightgrey;
            line-height: 30px;
            padding-top: 30px;
        }
        .content .btn{
            width: 200px;
            height: 50px;
            border-radius: 10px;
            font-size: 18px;
            border: 2px solid #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: transparent;
            color: #fff;
            transition: .5s;
            margin-top: 30px;
        }
        .content .btn:hover{
            background-color: #fff;
            color: #30d300;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            
        }
        .dropdown-content a {
            color: black;
            padding: 12px 9px;
            text-decoration: none;
            display: block;
            transition: .5s;
            margin-right: -27px;
            
        }
        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: white;
            border-radius: 10px;
        }
        table, th, td{
            color: black;   
        }
        th, td{
            height: 50px;
            text-align: center;
        }
        th, td {
            padding: 15px;
        }
        tr:hover {background-color: #f5f5f5;}
        a:hover{
            color: #30d300;
        }
    </style>
</head>
<body>
    <div class='container-fluid'>
        <div class='container'>
            <h2>GROUP 1 PROJECT</h2>
            <ul>
                <li>HOME</li>
                <li><a href="show_warehouses.php"> VIEW WAREHOUSES</a></li>
                <li><a href="show_stocks.php" class="active">STOCK TIMELINE</a></li>
                <li><a href="show_products.php"> VIEW PRODUCTS</a></li>
            </ul>
            <button class='btn'><a href='products.php' style='color:#30d300'><ion-icon name='create-outline'></ion-icon>&nbsp;Edit Products</a></button>
        </div>
        <div class='content'>
            <h3>Stock_flow Information</h3>
            <table>
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Stock Flowtype</th>
                        <th>Stock Quantity</th>
                        <th>Destination Address</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $conn = new mysqli("localhost", "root", "", "inventory");

                            if (!$conn) {
                                die("Could not connect to MySQL. Try starting the server");
                            }
                            else{
                               $sql = "SELECT product_id,flow_type,quantity,destination_address FROM stock_flows";
                               $result = $conn->query($sql);
                               if ($result->num_rows > 0) {
                                   // output data of each row
                                   while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>".$row["product_id"]."</td>";
                                        echo "<td>".$row["flow_type"]."</td>";
                                        echo "<td>".$row["quantity"]."</td>";
                                        echo "<td>".$row["destination_address"]."</td>";
                                        echo "</tr>";
                                   }
                                } else {
                                    echo "0 results";
                                }
                            }
                        ?>
                </tbody>
            </table>
            <a href="Home.html"><button class="btn"><ion-icon name="arrow-back-outline"></ion-icon>&nbsp; Back to Home</button></a>
        </div>
    </div>
    <script type='module' src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
    <script nomodule src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
</body>