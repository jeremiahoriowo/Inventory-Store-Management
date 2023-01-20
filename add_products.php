<div class="modal" id="add_products_modal" tabindex="-1">

  <div class="modal-dialog" role="document">

        <form method='POST' action="submitter.php?type=products" class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold text-uppercase">Add Products</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body mx-3">

                <div class="md-form mb-2">
                    <label data-error="wrong" data-success="right" for="form34">Name of Product</label>
                    <input name="name" type="text" id="form34" class="form-control validate" requried>
                </div>

                <div class="md-form mb-2">
                    <label data-error="wrong" data-success="right" for="vendor_inp">Vendor</label>
                    <input name="vendor" type="text" id="vendor_inp" class="form-control validate" requried>
                </div>

                <div class="md-form mb-2">
                    <label data-error="wrong" data-success="right" for="unit_price_inp">Unit Price</label>
                    <input name="unit_price" type="number" id="unit_price_inp" class="form-control validate" requried>
                </div>

                <div class="md-form mb-2">
                    <label data-error="wrong" data-success="right" for="category_inp">Category</label>
                    <input name="category" type="text" id="category_inp" class="form-control validate" requried>
                </div>

            </div>

            <div class="modal-footer d-flex justify-content-center">
                <input type="submit" class="btn btn-unique btn-primary" value="Add Product" />
            </div>

        </form>
  </div>
</div>

   
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_products_modal" style="display: none" id="add_btn">
  ... 
</button>