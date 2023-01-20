<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In / Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/fontawesome.css">
    <style>
        .hero{
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(to left, rgba(255,255,255,0.5)50%, rgba(255,255,255,0.5)50%), url(team.jpg);
            background-position: center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
<div class="hero" >
        <form method='POST' action="submitter.php?type=managers">
            <div class="card">
                <h2>Register</h2>
                    <div class="input-group">
                        <label data-error="wrong" data-success="right" for="form34"><i class="fas fa-user"></i> Name</label>
                        <input name="name" type="text" id="form34" class="animate" required>
                    </div>
                    <div class="input-group">
                        <label data-error="wrong" data-success="right" for="vendor_inp"><i class="fas fa-key"></i> Password</label>
                        <input name="password" type="password" id="vendor_inp" class="animate" required>
                    </div>
                    <div class="input-group">
                        <label data-error="wrong" data-success="right" for="unit_price_inp"><i class="fas fa-envelope"></i> Email</label>
                        <input name="email" type="email" id="unit_price_inp" class="animate" required>
                    </div>
                    <button type="submit">Register</button>
            </div>    
         
        </form>
    </div>

<script src="fontawesome-free-5.15.4-web/js/all.js"></script>
<script src="fontawesome-free-5.15.4-web/js/all .min.js"></script>   
</body>
</html>