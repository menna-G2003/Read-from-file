<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body> 
<?php
    // in files must do it in catch ,try 
    try {
        $readObj = fopen('file.txt', 'r'); //Open the file and put it in read-only mode.
        $lines = file('file.txt'); 
        echo "<table class='table table-striped'>
        <tr>
        <th>Name</th>
        <th>ID</th>
        <th>Phone</th>
        <th>age</th>
        </tr>";
        foreach($lines as $line)
        {
            $data = explode(' ',$line); //convert string to array
            echo '<tr>';
                foreach($data as $singleData)
                    echo '<td>'.$singleData.'</td>';
            echo '</tr>';
        }
       echo "</table>";
        fclose($readObj); //3- close file
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>    
</body>
</html>
