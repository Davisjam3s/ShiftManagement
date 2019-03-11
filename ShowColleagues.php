<?php
		$sql = "SELECT Colleague.ColleagueID, Colleague.ColleagueFirstName, Colleague.ColleagueMiddleName, Colleague.ColleagueLastName, Colleague.ColleagueDOB, Colleague.ColleagueHours, Sections.SectionName ,PayRate.PayRate, Branches.BranchName 
from Colleague
INNER JOIN PayRate
ON Colleague.ColleaguePayRate = PayRate.PayID
INNER JOIN Sections
ON ColleagueSection = Sections.SectionID
INNER JOIN Branches
ON Colleague.ColleagueBranch = Branches.BranchID";
$result = mysqli_query($conn, $sql);
echo "<table>
		<tr class='toptitles'>
			<th>Colleague ID</th>
			<th>Colleague Name</th>
			<th>Date of birth</th>
			<th>Contract Hours</th>
			<th>Colleague Section</th>
			<th>Pay Rate</th>
			<th> Store </th>
			
		</tr>";
		if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
    	$ColleagueID =$row["ColleagueID"];
    	$ColleagueFirstName =$row["ColleagueFirstName"];
    	$ColleagueMiddleName =$row["ColleagueMiddleName"];
    	$ColleagueLastName =$row["ColleagueLastName"];
    	$ColleagueDOB =$row["ColleagueDOB"];
    	$ColleagueHours =$row["ColleagueHours"];
    	$SectionName =$row["SectionName"];
    	$PayRate =$row["PayRate"];
    	$Branch = $row["BranchName"];

    	if ($ColleagueMiddleName == "") {
    		$ColleagueMiddleName = "";
    	}
		
    	//lazy way of checking user types
    	
			echo "<tr>
				<td>$ColleagueID</td>
				<td>$ColleagueFirstName $ColleagueMiddleName $ColleagueLastName</td>
				<td>$ColleagueDOB</td>
				<td>$ColleagueHours</td>
				<td>$SectionName</td>
				<td>$PayRate</td>
				<td>$Branch</td>
				</tr>"; // delete does not do anything yet
		}
} else{
    echo "<h2>No users in database</h2>";
}
mysqli_close($conn);
?>