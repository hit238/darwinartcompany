<!-- dynamic content will be here -->
<?php
//including the database connection file
include '../config/dbconn.php';
//getting id of the data from url
$id = $_GET['user_id'];
//deleting the row from table
$result = mysqli_query($dbconn, "DELETE FROM users WHERE user_id=$id");

?>
<script>
//redirecting to the display page (index.php in our case)
document.location.href="admin_panel.php";
</script>
