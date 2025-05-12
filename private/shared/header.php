<!-- =============================
    Header page for Assessment website
    File:    header.php
    Author: Max William
    Date:    March 2025
============================== -->

<?php
$sql = "SELECT * FROM images";
 
	// SQL query to fetch data from the table
	$result = $conn->query($sql);
    $row1 = $result->fetch_assoc();
    $row2 = $result->fetch_assoc();
    $row3 = $result->fetch_assoc();
    $row4 = $result->fetch_assoc();
    $row5 = $result->fetch_assoc();
    $row6 = $result->fetch_assoc();
    $row7 = $result->fetch_assoc();
    $row8 = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- link the stylesheet -->
    <link href="../../public/stylesheet/styles.css" rel="stylesheet">
    <script src="../../public/javascript/loader.js" defer></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rosminian Project Website">
    <title>Rosminian Project</title>
</head>
<body>

    <!-- Loading Screen -->
    <div id="loading-screen">
        <div class="loader"></div>
    </div>
    <!-- Create the header for all pages -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <!-- Link the Rosmini logo -->
                <img src="<?php echo htmlspecialchars($row2["image_url"])?>" class="logo_img" alt="Rosmini School Logo">
            </div>        
            <ul class="nav">
                <!-- Link all the pages together with buttons in the navbar -->
                <li><a href="../../public/home/index.php" class="nav_button">Home</a></li>
                <li><a href="../../public/young_vinnies/young_vinnies.php" class="nav_button">Young Vinnies</a></li>
                <li><a href="../../public/sva/sva.php" class="nav_button">Student Volunteer Army</a></li>
                <li><a href="../../public/dummy/dummypage.php" class="nav_button">Around the Community</a></li>
                <li><a href="../../public/dummy/dummypage.php" class="nav_button">Information</a></li>
                <li><a href="../../public/dummy/dummypage.php" class="nav_button">How to contact</a></li>
                <li><a href="../../public/dummy/dummypage.php" class="nav_button">Start your Volunteering Journey</a></li>
            </ul>
        </nav>
    </header>

<!-- Main Content Area -->
<div class="content">
		 	<!-- Default page loaded on startup -->
       
    </div>
	<div class="headings">
			<!-- heading for all the pages -->
		<h1 class="headertext">The Rosminian Project</h1>	
	</div>
