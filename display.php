<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}

table {
border-collapse: collapse;
width: 60%;
margin: 20px;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
padding-left:2%;
}
tr:nth-child(even) {background-color: #f2f2f2
    padding-left:4%;}
</style>
<body>
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
   <a href="kaushik.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    
</div>
</body>
<table>
    <tr>
    <th>Product Name</th>
    <th>Price(£)</th>
    <th>Store Name</th>
    </tr>
    <?php
    $id = $_POST['pid'];
   
    $conn = new PDO("mysql:host=localhost;dbname=productlist", "root", "root");
    
    $query = $conn->prepare("SELECT name, price, store_name FROM pr WHERE  id = ?");
    $query->execute(array($id));

if ($query->rowCount() > 0) {

while($row = $query->fetch(PDO::FETCH_BOTH)) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["price"]. "</td><td>". $row["store_name"]. "</td></tr>";
}
    echo "</table>";
    } else { echo "There are no products associated with this barcode number"; }
    
    ?>
    </table>
</html>