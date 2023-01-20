<div class="modal" id="add_stock" tabindex="-1">

  <div class="modal-dialog" role="document">

        <form method='POST' action="submitter.php?type=stock_flows" class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold text-uppercase">Add Warehouse</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body mx-3">

                <div class="md-form mb-2">
                    <label data-error="wrong" data-success="right" for="form34">Product ID</label>
                    <input name="product_id" type="text" id="form34" class="form-control validate" required>
                </div>

                <div class="md-form mb-2">
                    <label data-error="wrong" data-success="right" for="form34">Warehouse ID</label>
                    <input name="warehouse_id" type="text" id="form34" class="form-control validate" requried>
                </div>

                <div class="md-form mb-2">
                    <label data-error="wrong" data-success="right" for="quantity">Quantity</label>
                    <input name="quantity" type="number"  id="quantity" class="form-control validate"required>
                </div>

                <div class="md-form mb-2">
                    <label data-error="wrong" data-success="right" for="flow_type_inp">Flow Type</label>

                    <select name='flow_type' id="flow_type_inp" class="form-control validate">
                        <option value="internal">Internal</option>
                        <option value="outward">Out-Ward</option>
                        <option value="inward" selected>In-Ward</option>
                    </select>

                </div>
                <div class="md-form mb-2">
                    <label data-error="wrong" data-success="right" for="quantity">Destination Address</label>
                    <input name="destination_address" type="text"  id="destination_address" class="form-control validate"required>
                </div>

            </div>

            <div class="modal-footer d-flex justify-content-center">
                <input type="submit" class="btn btn-unique btn-primary" value="Add Stock Record" />
            </div>

        </form>
  </div>
</div>

   
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_stock" style="display: none" id="add_stock_btn">
  ...
</button>