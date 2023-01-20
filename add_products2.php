<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/fontawesome.css">
</head>
<body>
    <div class="hero" >
        <form method='POST' action="submitter.php?type=products">
                    <h2>Add Products</h2>
                <div class="input-group">
                    <label data-error="wrong" data-success="right" for="form34"><i class="fas fa-user"></i> Name of Product</label>
                    <input name="name" type="text" id="form34" class="animate" required>
                </div>
                <div class="input-group">
                    <label data-error="wrong" data-success="right" for="vendor_inp"><i class="fas fa-user"></i> Vendor</label>
                    <input name="vendor" type="text" id="vendor_inp" class="animate" required>
                </div>
                <div class="input-group">
                    <label data-error="wrong" data-success="right" for="unit_price_inp"><i class="fas fa-user"></i> Unit Price</label>
                    <input name="unit_price" type="number" id="unit_price_inp" class="animate" required>
                </div>
                <div class="input-group">
                    <label data-error="wrong" data-success="right" for="category_inp"><i class="fas fa-user"></i> Category</label>
                    <input name="category" type="text" id="category_inp" class="animate" required>
                </div>
                    <button type="submit">Add Product <i class="fas fa-paper-plane"></i></button> 
        </form>
    </div>
    <script src="fontawesome-free-5.15.4-web/js/all.js"></script>
    <script src="fontawesome-free-5.15.4-web/js/all .min.js"></script>
</body>
</html>
