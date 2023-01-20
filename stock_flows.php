<html>

<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <?php 
        include("utils.php");
    ?>

    <style>
        .timeline-with-icons {
            border-left: 1px solid hsl(0, 0%, 90%);
            position: relative;
            list-style: none;
        }

        .timeline-with-icons .timeline-item {
            position: relative;
        }

        .timeline-with-icons .timeline-item:after {
            position: absolute;
            display: block;
            top: 0;
        }

        .timeline-with-icons .timeline-icon {
            position: absolute;
            left: -48px;
            /* color: hsl(217, 88.8%, 35.1%); */
            border-radius: 50%;
            height: 31px;
            width: 31px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .timeline-with-icons .timeline-icon-outward {
            background-color: red;
        }

        .timeline-with-icons .timeline-icon-inward {
            background-color: green;
        }

        .timeline-with-icons .timeline-icon-internal {
            background-color: grey;
        }
    </style>
</head>

<body>

    <?php include("add_stock.php") ?>

    <div class="container-fluid">

        <div class="row flex-nowrap">
            <?php include("sidebar.php") ?>


            <div class="col py-3">
                <?php include("navbar.php") ?>  

                <!-- content -->
                <div class="col-md-8 m-auto">
                    <h1 class="text-center text-uppercase">Stock Flow Timeline</h1>
                        <!-- Section: Timeline -->
                        <section class="py-5">
                        <ul class="timeline-with-icons">
                            
                            <?php 

                                include("db_utils.php");

                                $columns = "products.name, stock_flows.quantity, stock_flows.flow_type";

                                $sql = "SELECT $columns FROM stock_flows 
                                        JOIN products ON products.id=stock_flows.product_id
                                        ORDER BY stock_flows.id DESC";

                                $result = fetch_response($sql);

                                for ($i = 0; $i < count($result); $i++) {

                                    $stock_record = $result[$i];
                                    $name = $stock_record["name"];
                                    $quantity = $stock_record["quantity"];
                                    $flow_type = $stock_record["flow_type"];

                                    echo "<li class='timeline-item mb-5'>

                                            <span class='timeline-icon timeline-icon-$flow_type'>
                                            </span>

                                            <h5 class='fw-bold'>$name ($quantity)</h5>

                                        </li>
                                    ";
                                }


                            ?>

                        </ul>
                        </section>
                        <!-- Section: Timeline -->
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


</body>

</html>
