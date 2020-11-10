<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Trang đăn nhập</title>
    <style>
        form{
            position: absolute; /* Canh giữa */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }
        .ad {
            background-color: blue;
            height: 40px;
            width: 100%;
        }
        div {
            background-color: blue;
        }
        fieldset {
            text-align: center;
            width: 300px;
            height: 200px;
        }
        body {
            background-image: url(image/anh1.jpg);
            background-color: #cccccc;
            background-size: cover;
        }
    </style>
</head>
<body style="background: url(image/anh1.jpg)" >
<form action="indec.php" method="post">
    <fieldset>
        <span>Đăng nhập</span><br><br>

        <input type="text" name="name" placeholder="username"><br><br>
        <input type="password" name="pass" placeholder="password"><br><br>
        <div> <input class="ad" type="submit" value="Đăng nhập"></div>
    </fieldset>
</form>
</body>
</html>

