<?php
include "function.php";
?>

<html>
<head>
<style>
    .calculator
    {
        height: 70%;
        width: 30%;
        display: inline-block;
    }
    .form 
        {
            background-color: #FACC5F;
             padding: 10px;
        }
        input[type=number]
        {
            width: 100%;
            padding: 7px 10px;
            margin: 6px 0;
            display: inline-block;
            border: 1px solid black;
            border-radius: 4px;
            box-sizing: border-box;
            font-Weight: 100;
            font-size: 15px;
        }
        form label
        {
            font-Weight: 800;
            font-size: 20px;
        }
        input[type=submit] 
        {
            width: 120px;
            margin: 5 auto;
            background-color:grey;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
        }
        .submit
        {
            text-align:center;
        }
</style>
</head>
<body >
    <div class="calculator">
<form action="" method="post">
    <tr>
    <label for="fname">First Number</label>
    <td><input type="number" name ="num1"/> </td>
</tr>

<tr>
    <label for="fname">Second Number</label>
    <td><input type="number" name ="num2"/> </td>
</tr>
    
<input type="submit" name ="Addition" value ="+"/>
<input type="submit" name ="Subtraction" value ="-"/>
<input type="submit" name ="Multiplication" value ="*"/>
<input type="submit" name ="Division" value ="/"/>
<input type="submit" name ="Modulus" value ="%"/>
<input type="submit" name ="Exponentiation" value ="**"/>
</form>
    </div>

<?php
if(isset($_POST['Addition'])){
    $numberOne = $_POST['num1'];
    $numberTwo = $_POST['num2'];

    if (empty($numberOne) or empty($numberTwo)) {
        echo "<span style= 'color:#EE6554'> Field Must Be Field </span>";
    }
    else
    {
        $cal = new Calculation;
    $cal->Addition($numberOne,$numberTwo);
    }
}
elseif(isset($_POST['Subtraction']))
{
    $numberOne = $_POST['num1'];
    $numberTwo = $_POST['num2'];
    if (empty($numberOne) or empty($numberTwo)) {
        echo "<span style= 'color:#EE6554'> Field Must Be Field </span>";
    }
    else
    {
        $cal = new Calculation;
        $cal->Subtraction($numberOne,$numberTwo);
    }
}
elseif(isset($_POST['Multiplication']))
{
    $numberOne = $_POST['num1'];
    $numberTwo = $_POST['num2'];
    if (empty($numberOne) or empty($numberTwo)) {
        echo "<span style= 'color:#EE6554'> Field Must Be Field </span>";
    }
    else
    {
        $cal = new Calculation;
        $cal->Multiplication($numberOne,$numberTwo);
    }
}
elseif(isset($_POST['Division']))
{
    $numberOne = $_POST['num1'];
    $numberTwo = $_POST['num2'];
    if (empty($numberOne) or empty($numberTwo)) {
        echo "<span style= 'color:#EE6554'> Field Must Be Field </span>";
    }
    else
    {
        $cal = new Calculation;
        $cal->Division($numberOne,$numberTwo);
    }
}
elseif(isset($_POST['Modulus']))
{
    $numberOne = $_POST['num1'];
    $numberTwo = $_POST['num2'];
    if (empty($numberOne) or empty($numberTwo)) {
        echo "<span style= 'color:#EE6554'> Field Must Be Field </span>";
    }
    else
    {
        $cal = new Calculation;
        $cal->Modulus($numberOne,$numberTwo);
    }
}
elseif(isset($_POST['Exponentiation']))
{
    $numberOne = $_POST['num1'];
    $numberTwo = $_POST['num2'];
    if (empty($numberOne) or empty($numberTwo)) {
        echo "<span style= 'color:#EE6554'> Field Must Be Field </span>";
    }
    else
    {
        $cal = new Calculation;
        $cal->Exponentiation($numberOne,$numberTwo);
    }
}
else {
    echo "No Method Is Selected";
}

?>

</body>



</html>