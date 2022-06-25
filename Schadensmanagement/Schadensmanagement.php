<html>


<head>

<meta charset="UTF-8">

<title>Schadensmanagement</title>

</head>


<body>

<button onclick="window.location.href = 'Schadensanalyse.html';">Schadensstatus ändern</button>

<br>
<br>

<?php    
// Connector
$servername = "localhost";
$user = "Autoliste";
$pw = "";
$DB = "schadensmanagement";
$conn = mysqli_connect($servername,$user,$pw,$DB);


// Auslesung der Daten von der Datenbank
 $sql = "SELECT * FROM autoliste ORDER BY AutoID";
 $result = mysqli_query($conn,$sql);
?>
 

<!-- Tabelle  -->
<table cellpadding="5" cellspacing="5" border="5">

<!-- Tabellen Kopf -->
<tr>
 <th>AutoID</th>
 <th>Schäden</th>
 <th>Wert</th>
</tr>
 
<!-- Tabellen Inhalt -->
 <?php
 while ($row = mysqli_fetch_array($result)) {
 ?>

 <tr>
 <td><?php echo $row['AutoID']?></td>
 <td><?php if ($row['Schaden'] == "") {
    echo "Keine Schäden";
} else {
  echo $row['Schaden'];
} ?></td>
 <td><?php echo $row['Wert']?></td>
 </tr>
 
 <?php
 }
 ?>

</body>


</html>