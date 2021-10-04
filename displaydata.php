<?php

include "connection.php";

//prepared statements using positional parameters

$sql = "SELECT ch_name, ch_drivelocation, ch_drivestartdate, ch_driveenddate, ch_ddescription FROM charity_org";
$stmt = $con->prepare($sql);
$stmt->execute();
//fetch all fetches all the data from the database
$result = $stmt->fetchAll();


?>

<!DOCTYPE html>
<html>

    <head>
        <title>Charity List</title>
        <link rel="stylesheet" href="css/styleOC.css">
        <link rel="stylesheet" href="css/styleNav.css">
        <link rel="stylesheet" href="css/styleAbout.css">

    </head>


<header class="main-header">
        <div class="nav-bar">

            <a class="profileProjectName" href="home.html">Support for International Students</a>

            <div class="nav-list">
                <a class="listitem1" href="SignIn.html">SignOut</a>
                
            </div>
        </div>
</header>


<body>


    <div class = "pageContent">
    


        
    <div class = "pageContentLeft">

        <div class="profileMenu">

            <P class="profileName">Hi, Name</P>
            <div class="profileIcon"></div>

            <div class="profileLink"><a href="Profile.html">Profile</a> </div> 

            <div class="organisationLink" style="background-color:#669699"  ><a href="displaydata.php">Charity List</a></div> 

            <div class="mapLink"><a href="Map.html">Map</a></div>

            <div class="favouritesLink"><a href="Favourites.html">Favourites</a></div>

            <div class="helpLink"><a href="Help.html">Help</a></div>
        </div>

    </div>




    <div class = "pageContentRight">


        <h1 class="profilePageTitle">Charity List</h1>


        <div class = "charityTableDiv">

            <table class = "charityTable">
                <tr>
                  <th class = "tableLabel">Name</th>
                  <th class = "tableLabel">Location</th>
                  <th class = "tableLabel">Start date</th>
                  <th class = "tableLabel">End Date</th>
                  <th class = "tableLabel">Description</th>
                  <?php

                    foreach($result as $res){
                    echo "<tr>";
                    echo "<td>". $res->ch_name. "  ". "</td>";
                    echo "<td>". $res->ch_drivelocation. "  ". "</td>";
                    echo "<td>". $res->ch_drivestartdate. "  ". "</td>";
                    echo "<td>". $res->ch_driveenddate. "  ". "</td>";
                    echo "<td>". $res->ch_ddescription. "  ". "</td>";
                    
                    }

                  ?>
                </tr>
        
            </table>
           
        </div>

    </div>

</div>


</body>
</html>