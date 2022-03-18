<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK105</title>
    <style type="text/css">
        th{
            background-color: red;
        }
    </style>
</head>
<body>
    <?php
    $smartphone = ["smartphone1" => "Samsung Galaxy S22", "smartphone2" => "Samsung Galaxy S22+", "smartphone3" => "Samsung Galaxy A03", "smartphone4" => "Samsung Galaxy Xcover 5"]
    ?>
    <table border="1"> 
    <th ><h1>Daftar Smartphone Samsung</h1></th>
    <tr>
        <td>
            <?php echo $smartphone["smartphone1"] ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $smartphone["smartphone2"] ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $smartphone["smartphone3"] ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $smartphone["smartphone4"] ?>
        </td>
    </tr>
    </table>
</body>
</html>