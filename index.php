<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Online | اضافة منتجات</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<center><div class="main">
<form action="insert.php" method="POST" enctype="multipart/form-data">
    <h2>Online marketing website</h2>
    <img src="images.jpg" alt="logo" width="250px">
    <br>
    <input type="text" name="name" placeholder="enter your product">
    <br>
    <input type="text" name="money" placeholder="enter your price">
    <br>
    <input type="file" id="file" name="image" style="display:none">
   
    <label for="file">choose image</label>
  <button name="upload">upload</button>
  <br>
  <a href="products.php">All products are here </a>
</form>

</div>
<p>developed by abdo</p>

</center>
    
</body>
</html>