<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Result</h1>
    <?php 
    if(isset($_POST['add'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 + $num2;
        echo "The Sum is ", $result;
    } elseif (isset($_POST['subtract'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 - $num2;
        echo "The Difference is ", $result;
    } elseif(isset($_POST['multiply'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 * $num2;
        echo "The Product is ", $result;
    } elseif(isset($_POST['divide'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 / $num2;
        echo "The Quotient is ", $result;
    }
    ?>
</body>
</html>