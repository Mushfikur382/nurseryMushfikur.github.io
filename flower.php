<?php
include_once "connect.php";

$sql ="SELECT * FROM plant where plant_code='flower'";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Flower</title>
</head>
<style>

body {
  background-image: url('image/5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
table, th, td {
    border: 2px solid black;
}
</style>
<body>
    
<h2 style="padding-top: 0px"; align='center'>Flower Information

        <?php 
    if ($result->num_rows > 0) {
        echo "<table align= center><tr><th>Plant Name</th><th>Price</th><th>Sold</th> <th>Image</th></tr>";
    
        while($row = $result->fetch_assoc()) {
            ?>

            <tr><td><?php echo $row["name"] ;?></td>
            <td><?php echo $row["price"];?> </td>
            <td> <?php echo $row["sold"] ;?></td>
            
            
            <td><img src="<?php echo $row['plant_image']; ?>" width="100" height="100" alt="image"></td>
            
            </tr>
            <?php } ?>
        </table>
        <?php
    } 
    else {
        echo "0 results";
    }

    ?>

    <br>
    </div>
    

<a href="fruit.php"><button style='margin: 0px 1000px' class='ui inverted green button'>Next</button></a><br><br>
            
       

        


</body>
</html>