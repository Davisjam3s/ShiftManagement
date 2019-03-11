<?php require 'connection.php'; ?>

<?php
  session_start();
  //$NumberLogin = 629736;
  $NumberLogin = $_POST['NumberLogin'];
  $NumberLogin  = mysqli_real_escape_string($conn, $NumberLogin);
	$NumberLogin  = strip_tags($NumberLogin);
  $_SESSION['ColleagueID'] = $NumberLogin;
  $SQLFindUser = "SELECT Colleague.ColleagueID, Colleague.ColleagueFirstName, Colleague.ColleagueMiddleName, Colleague.ColleagueLastName, Colleague.ColleagueDOB, Colleague.ColleagueHours, Sections.SectionName ,PayRate.PayRate 
from Colleague
INNER JOIN PayRate
ON Colleague.ColleaguePayRate = PayRate.PayID
INNER JOIN Sections
ON ColleagueSection = Sections.SectionID WHERE ColleagueID ='$NumberLogin' LIMIT 1";
  $result = mysqli_query($conn, $SQLFindUser);
  if (mysqli_num_rows($result) > 0) {
      
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

      $_SESSION['ColleagueID'] = $ColleagueID;
      $_SESSION['ColleagueFirstName'] = $ColleagueFirstName;
      $_SESSION['ColleagueMiddleName'] = $ColleagueMiddleName;
      $_SESSION['ColleagueLastName'] = $ColleagueLastName;
      $_SESSION['ColleagueDOB'] = $ColleagueDOB;
      $_SESSION['ColleagueHours'] = $ColleagueHours;
      $_SESSION['SectionName'] = $SectionName;
      $_SESSION['PayRate'] = $PayRate;

    //echo $ColleagueID;
    echo "Welcome  ";
    echo $ColleagueFirstName;
  }
    }else{
      echo "1";
    }


mysqli_close($conn);
  ?>