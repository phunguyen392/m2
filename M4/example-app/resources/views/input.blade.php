<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng Product Discount Calculator</title>
</head>

<body>
    <h2>Ứng dụng Product Discount Calculator</h2>
    <form method="post" action="/input">
        <p>
                <label>mo ta sp:<br>
                <input type="textarea" placeholder="Product Description" name="description">
            </label>
            </p>
        <p>
            <label>ds gia:<br>
                
                <input type="number" placeholder="List Price" name="price">
            </label>
        </p>
        <p>
        
        <label>gia chiet khau:<br>
            <input type="number" placeholder="Discount Percent" name="percent">
            
        </label>
    </p>
                <p>
                <input type="button" value="Calculate Discount">
            </p>
    </form>
</body>

</html>