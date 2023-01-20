<head>
    <link rel="stylesheet" href="style.css">
</head>
<div class="modal" id="add_warehouse_modal" tabindex="-1">

  <div class="modal-dialog" role="document">

        <form method='POST' action="submitter.php?type=warehouses" class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold text-uppercase">Add Warehouse</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body mx-3">

                <div class="md-form mb-2">
                    <label data-error="wrong" data-success="right" for="form34">Tag</label>
                    <input name="tag" type="text" id="form34" class="form-control validate" requried>
                </div>

                <div class="md-form mb-2">
                    <label data-error="wrong" data-success="right" for="address_inp">Address</label>
                    <input name="address" type="text" id="address_inp" class="form-control validate" requried>
                </div>

            </div>

            <div class="modal-footer d-flex justify-content-center">
                <input type="submit" class="btn btn-unique btn-primary" value="Add Warehouse" />
            </div>

        </form>
  </div>
</div>

   
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_warehouse_modal" style="display: none" id="add_btn">
  ...
</button>