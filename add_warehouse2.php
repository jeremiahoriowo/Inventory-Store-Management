<head>
    <title>Add Warehouse</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/fontawesome.css">
</head>
<div class="hero" tabindex="-1">
    <form method='POST' action="submitter.php?type=warehouses">
        <h2>Add Warehouse</h2>
        <div class="input-group">
                <label data-error="wrong" data-success="right" for="form34">Tag</label>
                <input name="tag" type="text" id="form34" class="form-control validate" required>
            </div>

            <div class="input-group">
                <label data-error="wrong" data-success="right" for="address_inp">Address</label>                    
                <input name="address" type="text" id="address_inp" class="form-control validate" required>
            </div>

        <button type="submit">Add Warehouse <i class="fas fa-paper-plane"></i></button> 
        
    </form>
    <script src="fontawesome-free-5.15.4-web/js/all.js"></script>
    <script src="fontawesome-free-5.15.4-web/js/all .min.js"></script>
</div>

