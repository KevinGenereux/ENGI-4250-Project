<?php
include("Config.php"); 
//fetch.php
if(isset($_POST["id"]))
{
 
 $query = "SELECT * FROM user";
 $result = mysqli_query($db, $query);
 $output = '';
 while($row = mysqli_fetch_array($result))
 {
  $output = '<table id="profileTable">
			  <tr>
				<td class="profile">First Name:</td>
				<td>' . $row['fname'] . '</td>
			  </tr>
			  <tr>
				<td>Last Name: </td>
				<td>' . $row['lname'] . '</td>
			  </tr>
			  <tr>
				<td>Username: </td>
				<td>' . $row['username'] . '</td>
			  </tr>
			  <tr>
				<td>Department Name: </td>
				<td>' . $row['department_name'] . '</td>
			  </tr>
			  <tr>
				<td>Education Level: </td>
				<td>' . $row['education_level'] . '</td>
			  </tr>
			  <tr>
				<td>User Type: </td>
				<td>' . $row['user_type'] . '</td>
			  </tr>
			  <tr>
				<td>Birth Date: </td>
				<td>' . $row['birthday'] . '</td>
			  </tr>
			  <tr>
				<td>Home Address: </td>
				<td>' . $row['home_address'] . '</td>
			  </tr>
			</table>';
 }
 echo $output;
}
?>