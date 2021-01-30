<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product discount</title>
</head>
<body>
<form action="display_discount.php" method="post">
    <fieldset>
        <legend>Product discount</legend>
        Product Description: <br>
        <input type="text" name="description" placeholder="mo ta san pham"><br>
        List Price: <br>
        <input type="text" name="price" placeholder="gia niem yet"><br>
        Discount Percent: <br>
        <input type="text" name="percent" placeholder="ty le chiet khau %"><br>
        <button type="submit">Discount</button>
    </fieldset>
</form>
</body>
</html>
