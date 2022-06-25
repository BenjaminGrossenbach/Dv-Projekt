<?php
// Connector bei Schaden eintragen
$servername = "localhost";
$user = "Autoliste"; 
$pw = "";
$DB = "schadensmanagement";
$conn = mysqli_connect($servername,$user,$pw,$DB);


// Schaden wird beim Auto eingetragen
$Wert=99;
$Art=$_GET['Art1'];
$AID=$_GET['AID1'];
$sql="UPDATE autoliste SET Schaden='$Art',Wert='$Wert' WHERE AutoID='$AID'";
$result = mysqli_query($conn,$sql) or die ("Fehler");


// Schadensverursacher wird eingetragen
$KNR=$_GET['KNR'];
$Datum=$_GET['Datum'];
$sql2="INSERT INTO rechnungsliste(KundenNr, Datum, AutoID) VALUES ('$KNR','$Datum','$AID')";
$result = mysqli_query($conn,$sql2) or die ("Fehler");

?>


<script> // Man kehrt zurück
window.location.href = 'Schadensanalyse.html';
</script>