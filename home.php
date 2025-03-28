<?php include 'layout/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            color: #333;
        }

        .product-box {
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: relative;

        }

        .product-box:hover {
            transform: scale(1.05);
        }

        .product-box img {
            transition: opacity 0.3s ease-in-out;
        }

        .product-box:hover img {
            opacity: 0.3;
        }

        .product-info {
            transition: opacity 0.3s ease-in-out;
        }

        .product-box:hover .product-info {
            opacity: 0.3;
        }

        .product-action {
            position: absolute;
            transform: translate(-50%, -50%);
            transition: opacity 0.3s ease-in-out;
            opacity: 0;
            text-align: center;
            top: 50%;
            left: 50%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            width: 100%;
            gap: 19px;
        }

        .product-box:hover .product-action {
            opacity: 1;
        }

        .button {
            background: orange;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            margin: 5px;
            cursor: pointer;
            text-align: center;
            display: inline-block;

        }

        .button:hover {
            background: orangered;
        }

        b {
            color: rgb(253, 253, 253);
        }

        h4 p {
            color: black;
            text-align: center;
            font-size: 30px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row g-3" style="margin-top: 50px;
            margin-bottom: 40px;">
            <h4>
                <p>Danh sách các đội bóng:</p>
            </h4>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-box" style="background-color:red;">
                    <img src="logo/MU.png" style="width: 150px;">
                    <div class="product-info">
                        <div class="product-title"><b>Manchester United</b></div>
                    </div>
                    <div class="product-action">
                        <a class="button" href="CLB/manchester-united.php">Xem Chi Tiết
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-box" style="background-color:deepskyblue;">
                    <img src="logo/MC.png" style="width: 150px;">
                    <div class="product-info">
                        <div class="product-title"><b>Manchester City</b></div>
                    </div>
                    <div class="product-action">
                        <a class="button" href="CLB/manchester-city.php">Xem Chi Tiết
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-box" style="background-color:rgb(7, 0, 201);">
                    <img src="logo/Chelsea.png" style="width: 150px;">
                    <div class="product-info">
                        <div class="product-title"><b>Chelsea</b></div>
                    </div>
                    <div class="product-action">
                        <a class="button" href="CLB/chelsea.php">Xem Chi Tiết
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-box" style="background-color:darkgray;">
                    <img src="logo/New.png" style="width: 150px;">
                    <div class="product-info">
                        <d class="product-title"><b>Newcastle United</b></d>
                    </div>
                    <div class="product-action">
                        <a class="button" href="CLB/Newcasble.php">Xem Chi Tiết
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-box" style="background-color:brown  ;">
                    <img src="logo/AstonVilla.png" style="width: 315px;">
                    <div class="product-info">
                        <div class="product-title"><b>Aston Villa</b></div>
                    </div>
                    <div class="product-action">
                        <a class="button" href="CLB/aston-villa.php">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-box" style="background-color:darkred;">
                    <img src="logo/Bournemouth.png" style="width: 178px;">
                    <div class="product-info">
                        <div class="product-title"><b>Bournemouth</b></div>
                    </div>
                    <div class="product-action">
                        <a class="button" href="CLB/bournemouth.php">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-box" style="background-color:indianred;">
                    <img src="logo/Brentford.png" style="width: 178px;">
                    <div class="product-info">
                        <div class="product-title"><b>Brentford</b></div>
                    </div>
                    <div class="product-action">
                        <a class="button" href="CLB/brentford.php">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-box" style="background-color:cornflowerblue;">
                    <img src="logo/Brighton.png" style="width: 178px;">
                    <div class="product-info">
                        <div class="product-title"><b>Brighton & Hove Albion</b></div>
                    </div>
                    <div class="product-action">
                        <a class="button" href="CLB/brighton.php">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-box" style="background-color:dodgerblue">
                    <img src="logo/CrystalPalace.png" style="width: 178px;">
                    <div class="product-info">
                        <div class="product-title"><b>Crystal Palace</b></div>
                    </div>
                    <div class="product-action">
                        <a class="button" href="CLB/crystal-palace.php">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-box" style="background-color:rgb(11, 6, 148)">
                    <img src="logo/Everton.png" style="width: 175px;">
                    <div class="product-info">
                        <div class="product-title"><b>Everton</b></div>
                    </div>
                    <div class="product-action">
                        <a class="button" href="CLB/everton.php">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-box" style="background-color:rgb(44, 36, 36)">
                    <img src="logo/Fulham.png" style="width: 133px;">
                    <div class="product-info">
                        <div class="product-title"><b>Fulham</b></div>
                    </div>
                    <div class="product-action">
                        <a class="button" href="CLB/fulham.php">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-box" style="background-color: red">
                    <img src="logo/Liverpool.png" style="width: 130px;">
                    <div class="product-info">
                        <div class="product-title"><b>Liverpool</b></div>
                    </div>
                    <div class="product-action">
                        <a class="button" href="CLB/liverpool.php">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include 'layout/footer.php';
?>
</html>
