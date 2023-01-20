<html>

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />

        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">


        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" /> 

        <link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css" />

        <?php 
            include("utils.php")
        ?>
    </head>

    <body>


        <?php include("add_warehouse.php") ?>


        <div class="container-fluid">

            <div class="row flex-nowrap">
                <?php include("sidebar.php") ?>


                <div class="col py-3">
                    <?php include("navbar.php") ?>  
                    <div class="col-md-8 m-auto">
                        <h1 class="text-center text-uppercase">Warehouse</h1>

                        <table id="warehouses" class="table table-striped table-bordered" style="width:100%">


                            <thead>
                                <tr>
                                    <?php echo_column_names("warehouses") ?>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <?php echo_column_names("warehouses") ?>
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

                $('#warehouses').DataTable({
                    dom: 'Bfrtip',
                    ajax: "data.php?dataType=warehouses",
                    buttons: [
                        'csv', 'excel', 'pdf',
                        {text: "New Warehouse", action: function(e, dt, node, config) {
                            $("#add_btn").click();
                        }}
                    ],
                    columns: [
                        {data: "id"},
                        {data: "tag"},
                        {data: "address"},
                        {data: "manager"}
                    ]
                });

                $('.dataTables_length').addClass('bs-select');
            });
        </script>

    </body>

</html>
