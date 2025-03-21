<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Web Mẫu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .header {
            background-color: #DD0000;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .search-box {
            text-align: center;
            margin: 20px;
            border: none;
            justify-content: center;
        }

        .search-box input {
            width: 50%;
            height: 50px;
            padding: 10px;
            font-size: 35px;
            border: none;
            color: white;
            font-weight: 200;
            background-color: #DD0000;
            outline: none;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        h1 {
            min-width: 2px;
            min-height: 2px;
            background-color: white;
        }

        input::placeholder {
            color: white;
            height: 50px;
            opacity: 0.6;
            text-align: center;
        }



        .container {
            display: flex;
            align-items: center;
        }

        .container img {
            width: 50px;
            height: auto;
            margin-right: 10px;
        }

        @media (max-width: 1400px) {
            .search-box input {
                font-size: 20px;
                width: 80%;

            }

            .header {
                padding: 15px;
                font-size: 20px;
            }
        }

        .box {
            transition: transform 0.3s ease;
        }

        .box:hover {
            transform: scale(1.1);
        }

        .box:hover span {
            color: #DD0000;
        }

        .search-box input {
            width: 50%;
            height: 50px;
            padding: 10px;
            font-size: 35px;
            border: 2px solid transparent;
            color: white;
            font-weight: 200;
            background-color: #DD0000;
            outline: none;
            transition: all 0.3s ease-in-out;
            text-align: center;
        }

        
        .search-box input:focus {
            border-color: white;
            /* Viền sáng lên */
            box-shadow: 0px 0px 10px rgba(248, 248, 247, 0.8);
            /* Phát sáng */
        }

        /* Hiệu ứng placeholder động */
        @keyframes typingEffect {
            0% {
                opacity: 0.2;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0.2;
            }
        }

        .search-box input::placeholder {
            color: white;
            animation: typingEffect 1.5s infinite;
            /* Placeholder nhấp nháy */
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="search-box">
            <p>Hi There</p>
            <input type="text" placeholder="TÌM KIẾM CẦU THỦ,CÂU HỎI THƯỜNG GẶP...">
            <h1></h1>
        </div>
    </div>
    <h3 style="text-align: center; margin-top: 30px;"><b>Có Thể Bạn Quan Tâm: </b></h3>
    <div class="container" style="margin-left: auto; margin-right:auto">
        <div class="row">
            <div class="col">
                <div class="container" style="width: max-content;">
                    <div class="box1">
                        <div class="container" style="padding-top: 50px; padding-left: 10px;">
                            <div class="box" style="padding: 10px;">
                                <a href="https://example.com/news1" style="text-decoration: none;color: inherit;">

                                    <div class="card" style="width:max-content; height: 100px; display: flex; align-items:first baseline; padding: 5px;">
                                        <img src="img/ba_tríc.jpg" class="img-fluid rounded-start"
                                            style="width:100px; height: 90px;">
                                        <span style="display: inline-block;"><b>AMORIM NAMES SIDE TO FACE FULHAM</b></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box1">
                        <div class="container" style="padding: 10px;">
                            <div class="box" style="padding: 10px;">
                                <a href="https://example.com/news1" style="text-decoration: none;color: inherit;">
                                    <div class="card" style="width:max-content; height: 100px; display: flex; align-items:first baseline; padding: 5px;">
                                        <img src="img/ba_tríc.jpg" class="img-fluid rounded-start"
                                            style="width:100px; height: 90px;">
                                        <span style="display: inline-block;"><b>AMORIM NAMES SIDE TO FACE FULHAM</b></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box1">
                        <div class="container" style="padding: 10px;">
                            <div class="box" style="padding: 10px;">
                                <a href="https://example.com/news1" style="text-decoration: none;color: inherit;">
                                    <div class="card" style="width:max-content; height: 100px; display: flex; align-items:first baseline; padding: 5px;">
                                        <img src="img/ba_tríc.jpg" class="img-fluid rounded-start"
                                            style="width:100px; height: 90px;">
                                        <span style="display: inline-block;"><b>AMORIM NAMES SIDE TO FACE FULHAM</b></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="container" style="width: max-content;">
                    <div class="box1">
                        <div class="container" style="padding-top: 50px; padding-left: 10px;">
                            <div class="box" style="padding: 10px;">
                                <a href="https://example.com/news1" style="text-decoration: none;color: inherit;">

                                    <div class="card" style="width:max-content; height: 100px; display: flex; align-items:first baseline; padding: 5px;">
                                        <img src="img/ba_tríc.jpg" class="img-fluid rounded-start"
                                            style="width:100px; height: 90px;">
                                        <span style="display: inline-block;"><b>AMORIM NAMES SIDE TO FACE FULHAM</b></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box1">
                        <div class="container" style="padding: 10px;">
                            <div class="box" style="padding: 10px;">
                                <a href="https://example.com/news1" style="text-decoration: none;color: inherit;">
                                    <div class="card" style="width:max-content; height: 100px; display: flex; align-items:first baseline; padding: 5px;">
                                        <img src="img/ba_tríc.jpg" class="img-fluid rounded-start"
                                            style="width:100px; height: 90px;">
                                        <span style="display: inline-block;"><b>AMORIM NAMES SIDE TO FACE FULHAM</b></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box1">
                        <div class="container" style="padding: 10px;">
                            <div class="box" style="padding: 10px;">
                                <a href="https://example.com/news1" style="text-decoration: none;color: inherit;">
                                    <div class="card" style="width:max-content; height: 100px; display: flex; align-items:first baseline; padding: 5px;">
                                        <img src="img/ba_tríc.jpg" class="img-fluid rounded-start"
                                            style="width:100px; height: 90px;">
                                        <span style="display: inline-block;"><b>AMORIM NAMES SIDE TO FACE FULHAM</b></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="container" style="width: max-content;">
                    <div class="box1">
                        <div class="container" style="padding-top: 50px; padding-left: 10px;">
                            <div class="box" style="padding: 10px;">
                                <a href="https://example.com/news1" style="text-decoration: none;color: inherit;">

                                    <div class="card" style="width:max-content; height: 100px; display: flex; align-items:first baseline; padding: 5px;">
                                        <img src="img/ba_tríc.jpg" class="img-fluid rounded-start"
                                            style="width:100px; height: 90px;">
                                        <span style="display: inline-block;"><b>AMORIM NAMES SIDE TO FACE FULHAM</b></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box1">
                        <div class="container" style="padding: 10px;">
                            <div class="box" style="padding: 10px;">
                                <a href="https://example.com/news1" style="text-decoration: none;color: inherit;">
                                    <div class="card" style="width:max-content; height: 100px; display: flex; align-items:first baseline; padding: 5px;">
                                        <img src="img/ba_tríc.jpg" class="img-fluid rounded-start"
                                            style="width:100px; height: 90px;">
                                        <span style="display: inline-block;"><b>AMORIM NAMES SIDE TO FACE FULHAM</b></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box1">
                        <div class="container" style="padding: 10px;">
                            <div class="box" style="padding: 10px;">
                                <a href="https://example.com/news1" style="text-decoration: none;color: inherit;">
                                    <div class="card" style="width:max-content; height: 100px; display: flex; align-items:first baseline; padding: 5px;">
                                        <img src="img/ba_tríc.jpg" class="img-fluid rounded-start"
                                            style="width:100px; height: 90px;">
                                        <span style="display: inline-block;"><b>AMORIM NAMES SIDE TO FACE FULHAM</b></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>