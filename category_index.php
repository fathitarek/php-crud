<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>

<?php

include_once 'models/categories.php';
$category = new categories();
$conn = $category->connect();

$result = $category->get_All($conn);  

echo "<table class='table'> <tr> <td>ID</td> <td>Name</td> <td>Actions</td></tr>";
while ($row=mysqli_fetch_assoc($result)) {  
    echo "<tr> <td>". $row['id']."</td>";  
    echo "<td>".$row['name']."</td>";
    echo "<td> <a  class='btn btn-danger' href='delete.php?id=".$row['id']."'> Show</a>
    <a  class='btn btn-warning' href='edit.php?id=".$row['id']."'> Edit</a>
    <a  class='btn btn-primary' href='show.php?id=".$row['id']."'> Edit</a>
 
    </td>";
    echo "</tr>";
}
?>

</table>
</body>
</html>