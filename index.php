<?php
include "function.php";
?>

<html>
<head>

</head>
<body>
<form action="" method="post">
<table>
    <tr>
    <td>Enter First Number </td>
    <td><input type="number" name ="num1"/> </td>
</tr>

<tr>
    <td>Enter Second Number </td>
    <td><input type="number" name ="num2"/> </td>
</tr>
    
</table>
<input type="submit" name ="calculation" value ="Calculate"/>
</form>

<?php
if(isset($_POST['calculation'])){
    $numberOne = $_POST['num1'];
    $numberTwo = $_POST['num2'];

    if (empty($numberOne) or empty($numberTwo)) {
        echo "<span style= 'color:#EE6554'> Field Must Be Field </span>";
    }
    else
    {
        $cal = new Calculation;
    $cal->AddTow($numberOne,$numberTwo);
    }
}

?>

</body>



</html>