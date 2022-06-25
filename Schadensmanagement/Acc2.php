<?php
// Connector für Reperatur
$servername = "localhost";
$user = "Autoliste";
$pw = "";
$DB = "schadensmanagement";
$conn = mysqli_connect($servername,$user,$pw,$DB);
  

// Reperatur wird beim Auto eingetragen
$Wert=100;
$Art="";
$AID=$_GET['AID3'];
  
$sql="UPDATE autoliste SET Schaden='$Art',Wert='$Wert' WHERE AutoID='$AID'";
$result = mysqli_query($conn,$sql) or die ("Fehler");

?>


<script>  // Man kehrt zurück
window.location.href = 'Schadensanalyse.html';
</script>