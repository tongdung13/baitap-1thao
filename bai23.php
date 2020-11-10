
  <form method="post">
      <input type="text" name="nhap" placeholder="nhap so tien"/>
      <input type="submit" name="giamgia" value="giamgia"><br><br>

      Result:

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nhap = $_POST["nhap"];
          $giamgia = $_POST["giamgia"];

        if ($nhap < 1000000) {
            $giamgia = (($nhap * 1) * 0.1) /10;
            echo $giamgia;
        } else if ($nhap > 1000000 && $nhap < 5000000) {
            $giamgia = (($nhap * 2) * 0.1) /10;
            echo $giamgia;
        } else {
            $giamgia = (($nhap * 3) * 0.1) /10;
            echo $giamgia;
        }

      }

      ?>
  </form>


  <!DOCTYPE html>

  <html>
  <head>
      <title>Home page</title>
  </head>
  <body>
  <a href="bai3.php">Đăng xuất</a>
  </body>
  </html>





