<?php # Script 7.6 - view_users.php (2nd version after Script 7.4)
// This script retrieves all the records from the users table.

$page_title = 'View the Current Users';
include ('./includes/header.html');

// Page header.
echo '<h1 id="mainhead">Registered Users</h1>';
echo '<form action="view_users.php" method="post">
        <p><input type="submit" name="submit" value="View Users" /></p>
        <input type="hidden" name="submitted" value="TRUE" />
        </form>';

if ( isset($_POST['submitted'])) {

require_once ('mysql_connect.php'); // Connect to the db.
		
// Make the query.
$query1 = "SELECT CONCAT(last_name, ', ', first_name) AS name, DATE_FORMAT(registration_date, '%M %d, %Y') AS dr FROM users ORDER BY registration_date ASC";
$result1 = @mysql_query ($query1); // Run the query.
$num = mysql_num_rows($result1);

$query2 = "SELECT CONCAT(address) AS address, (phone_no) AS phone, (ssn) AS ssn FROM additional_info ORDER BY person_id";
$result2 = @mysql_query ($query2);


if ($num > 0) { // If it ran OK, display the records.

	echo "<p>There are currently $num registered users.</p>\n";

	// Table header.
	echo '<table align="center" cellspacing="0" cellpadding="5">
	<tr><td align="left"><b>Name</b></td><td align="left"><b>Date Registered</b></td><td align="left"><b>Address</b></td><td align="left"><b>Phone</b></td><td align="left"><b>SSN</b></td></tr>';
	
	// Fetch and print all the records.
	while ($row1 = mysql_fetch_array($result1, MYSQL_ASSOC)) {
                $row2 = mysql_fetch_array($result2, MYSQL_ASSOC);
		echo '<tr><td align="left">' . $row1['name'] . '</td><td align="left">' . $row1['dr'] . '</td><td align="left">' . $row2['address'] . '</td>
		<td align="left">' . $row2['phone'] . '</td><td align="left">' . $row2['ssn'] . '</td></tr>';
	}
	// while ($row2 = mysql_fetch_array($result2, MYSQL_ASSOC)) {
	// 	echo '<td align="left">' . $row2['address'] . '</td><td align="left">' . $row2['phone'] . '</td><td align="left">' . $row2['ssn'] . '</td></tr>';
	// }

	echo '</table>';
	
	mysql_free_result ($result1);
	mysql_free_result ($result2); // Free up the resources.	

} else { // If it did not run OK.
	echo '<p class="error">There are currently no registered users.</p>';
}

mysql_close(); // Close the database connection.

}


include ('./includes/footer.html'); // Include the HTML footer.
?>