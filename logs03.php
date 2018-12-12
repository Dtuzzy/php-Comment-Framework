<?php

require("inc/database_connection.php");
$result = mysqli_query($conn, "SELECT * FROM comments ORDER BY id ASC");
while($row = mysqli_fetch_array($result)){
echo "<div class='chat'>";
echo " <h4>" . $row['name'] . "</h4>";
echo " <h5>" . $row['date_publish'] . "</h5>";
echo " <p>" . $row['comments'] . "</p>";
echo "</div><br></br>";
}
mysqli_close($conn);

?>