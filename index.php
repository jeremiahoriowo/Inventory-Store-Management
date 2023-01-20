<html>

    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />

        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">


        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" /> 

        <link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css" />

        <?php 
            include("utils.php");
        ?>
    </head>

    <body>

        <?php include("add_products.php") ?>
        <?php include("add_stock.php") ?>

        <div class="container-fluid">

            <div class="row flex-nowrap">
                
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">

                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">

                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>

                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">

                        <li class="nav-item">
                            <a href="products.php" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Products</span>
                            </a>
                        </li>

                    
                        <li class="nav-item">
                            <a href="warehouses.php" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Warehouses</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="stock_flows.php" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Stock Timeline</span>
                            </a>
                        </li>

                    </ul>

                    <hr>

                </div>

            </div>



                <div class="col py-3">
                <nav class="navbar navbar-dark bg-dark mb-4">
                    <div class="container-fluid">
                        <h1 class="navbar-brand mb-0 text-uppercase">Inventory Management System</h1>
                    </div>
                </nav>  

                    <!-- content -->
                    <div class="col-md-8 m-auto">
                        <h1 class="text-center text-uppercase">Products</h1>

                        <table id="products" class="table table-striped table-bordered" style="width:100%">


                            <thead>
                                <tr>
                                    <?php echo_column_names("products") ?>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <?php echo_column_names("products") ?>
                                </tr>
                            </tfoot>

                        </table>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>

        <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

        <script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>

        <script>

            $(document).ready(function () {

                $('#products').DataTable({
                    dom: 'Bfrtip',
                    ajax: "data.php?dataType=products",
                    // serverSide:true,
                    buttons: [
                        'csv', 'excel',
                        {text: "New Product", action: () => $("#add_btn").click()},
                        {text: "Record Stock", action: () => $("#add_stock_btn").click()},
                    ],
                    columns: [
                        {data: "id"},
                        {data: "name"},
                        {data: "unit_price"},
                        {data: "vendor"},
                        {data: "category"},
                        {data: "stock_count"},
                    ]
                });

                $('.dataTables_length').addClass('bs-select');
            });
        </script>

    </body>

</html>
