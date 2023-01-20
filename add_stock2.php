<head>
    <title>Add Stock</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/fontawesome.css">
</head>
<div class="hero" >
    <form method='POST' action="submitter.php?type=stock_flows" class="modal-content">
        <h2>Add Stocks</h2>
        <div class="input-group">
            <label data-error="wrong" data-success="right" for="form34">Product ID</label>
            <input name="product_id" type="text" id="form34" class="form-control validate" requried>
        </div>

        <div class="input-group">
            <label data-error="wrong" data-success="right" for="form34">Warehouse ID</label>
            <input name="warehouse_id" type="text" id="form34" class="form-control validate" requried>
        </div>

        <div class="input-group">
            <label data-error="wrong" data-success="right" for="quantity">Quantity</label>
            <input name="quantity" type="number"  id="quantity" class="form-control validate" requried>
        </div>

        <div class="input-group">
            <label data-error="wrong" data-success="right" for="flow_type_inp">Flow Type</label>

            <select name='flow_type' id="flow_type_inp" class="form-control validate">
                <option value="internal">Internal</option>
                <option value="outward">Out-Ward</option>
                <option value="inward" selected>In-Ward</option>
            </select>
        </div>

        <div class="input-group">
            <label data-error="wrong" data-success="right" for="quantity">Destination Address</label>
            <input name="destination_address" type="text"  id="destination_address" class="form-control validate" requried>
        </div>
        <button type="submit">Add Stock Record <i class="fas fa-paper-plane"></i></button>
    </form>
    <script src="fontawesome-free-5.15.4-web/js/all.js"></script>
    <script src="fontawesome-free-5.15.4-web/js/all .min.js"></script>
</div>
