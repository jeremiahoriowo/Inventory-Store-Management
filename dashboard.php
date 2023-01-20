<?php
$email = $_GET['email'];
$password = $_GET['password'];

 $conn = new mysqli("localhost", "root", "", "inventory");

 if (!$conn) {
     die("Could not connect to MySQL. Try starting the server");
 }
 else{
    $sql = "SELECT name,email, password FROM managers";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if ($row["email"] == $email && $row["password"] == $password) {
                echo "
                <head>
    <title>Store Inventory System</title>
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
        .container ul li:first-child{
            color: #30d300;
        }
        .container ul li:hover{
            color: #30d300;
        }
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
        .content h1{
            font-family: arial;
            font-weight: bold;
            color: #fff;
            font-size: 50px;
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
    </style>
</head>
<body>
    <div class='container-fluid'>
        <div class='container'>
            <h2>GROUP 1 PROJECT</h2>
            <ul>
                <li>HOME</li>
                <li class='dropdown'>WAREHOUSES
                    <span class='dropdown-content'>
                    <ul>
                        <li><a href='add_warehouse2.php'> EDIT WAREHOUSE</a></li>
                        <li><a href='show_warehouses.php'> VIEW WAREHOUSE</a></li>
                    </ul>
                    </span>
                </li>
                <li class='dropdown'>STOCK
                    <span class='dropdown-content'>
                        <ul>
                            <li><a href='add_stock2.php'> EDIT STOCKS</a></li>
                            <li><a href='show_stocks.php'> VIEW STOCKS</a></li>
                        </ul>
                        </span>
                </li>
                <li>STOCK TIMELINE</li>
                <li class='dropdown'>PRODUCTS
                    <span class='dropdown-content'>
                        <ul>
                            <li><a href='add_products2.php'> EDIT PRODUCTS</a></li>
                            <li><a href='show_products.php'> VIEW PRODUCTS</a></li>
                        </ul>
                        </span>
                </li>
            </ul>
            <button class='btn'><a href='products.php' style='color:#30d300'><ion-icon name='create-outline'></ion-icon>&nbsp;Edit Products</a></button>
        </div>
        <div class='content'>
            <h1>Welcome ".$row["name"]."</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quidem maxime maiores, soluta ipsa molestiae <br> voluptatum. Doloremque neque nobis quos nulla quia dicta, nam.</p>
            <button class='btn'><ion-icon name='create-outline'></ion-icon>&nbsp;Start Managing</button>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <script type='module' src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
    <script nomodule src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
</body>
                ";
            }
            // echo "email".$row["email"]."<br>";
        }
    } else {
        echo "0 results";
    }
}
?>

