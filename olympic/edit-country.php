<?php
include_once 'DataCountry.php';
include_once 'Country.php';
if (isset($_REQUEST['name'])){
    $name = $_REQUEST['name'];
    $country = DataCountry::getCountryByName($name);
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Edit Country</title>
</head>
<body>
<div class="container">
    <h2>Update Information Of Country</h2>
    <form method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" class="from-control" id="name" name="name" placeholder="Input Name" value="<?php echo $product->getName()?>">
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" class="from-control" id="price" name="price" placeholder="Input Price" value="<?php echo $product->getPrice()?>">
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="text" class="from-control" id="image" name="image" placeholder="Input Image URL" value="<?php echo $product->getImage()?>">
        </div>
        <div>
            <label for="detail">Detail:</label>
            <input type="text" class="from-control" id="detail" name="detail" placeholder="Input Detail" value="<?php echo $product->getDetail()?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>


