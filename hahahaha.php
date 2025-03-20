<?php include 'layout/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hahahahahhahaha</title>
    <style>
        .product-box{
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .product-box:hover{
            transform: scale(1.05);
        }
        .product-box img{
            transition: opacity 0.3s ease-in-out;
        }
        .product-box:hover img{
            opacity: 0.3;
        }
        .product-info{
            transition: opacity 0.3s ease-in-out;
        }
        .product-box:hover .product-info{
            opacity: 0.3;
        }
    </style>
</head>
<body>
        <div class="container">
            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-3">
            <div class="product-box">
                <img src="image/p258020801.png">
                <div class="product-info">
                <div class="product-title">Cristiano Ronaldo</div>
                <div class="product-price">1 tỷ đô</div>
                </div>
            </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
            <div class="product-box">
                <img src="image/p258020801.png">
                <div class="product-info">
                <div class="product-title">Cristiano Ronaldo</div>
                <div class="product-price">1 tỷ đô</div>
            </div>
        </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
            <div class="product-box">
                <img src="image/p258020801.png">
                <div class="product-info">
                <div class="product-title">Cristiano Ronaldo</div>
                <div class="product-price">1 tỷ đô</div>
            </div>
        </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
            <div class="product-box">
                <img src="image/p258020801.png">
                <div class="product-info">
                <div class="product-title">Cristiano Ronaldo</div>
                <div class="product-price">1 tỷ đô</div>
            </div>
            </div>
            </div>
        </div>
        </div>
</body>
<?php include 'layout/footer.php';
?>
</html>