		<!-- =============================
		 Header page for Assessment website
		 File:	 header.php
		 Author: Max William
		 Date:	 March 2025
		============================== -->

<!DOCTYPE html>
<html lang="en">
			<!-- link the javascript -->
<script href="../../public/javascript/script.js" defer></script>
			<!-- link the stylesheet -->
<link href="../../public/stylesheet/_styles.css" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
</head>

<body>
			<!-- creater the header for all pages -->
<header>
	<nav class="navbar">
		<div class="logo">
			<!-- link in thr rosmini logo -->
			<img src="https://projectspace.nz/rtdwnkzc/Max_William_Assessment/public/images/bf943936-2268-41af-a752-0743089ef9b5_wo.png" class="logo_img" alt="Rosmini Logo">
		</div>		
		<ul class="nav">
			<!-- link all the pages togethere with buttons in the nav bar -->
  			<li><a href="../../public/home/index.php"	class="nav_button">Home</a></li>
  			<li><a href="../../public/young_vinnies/young_vinnies.php"  class="nav_button">Young Vinnies</a></li>
  			<li><a href="../../public/sva/sva.php"  class="nav_button">Student Volunteer Army</a></li>
  			<li><a href="../../public/around_the_community/around_the_community.php"  class="nav_button">Around the Community</a></li>
			<li><a href="../../public/dummy/dummypage.php"  class="nav_button">Information</a></li>
			<li><a href="../../public/dummy/dummypage.php"  class="nav_button">How to contact</a></li>
			<li><a href="../../public/dummy/dummypage.php"  class="nav_button">Start your volunteering Journey</a></li>
		</ul>
	</nav>
</header>
    		<!-- Loading Screen (Hidden by Default) -->
    <div class="loading-screen">
        <div class="spinner"></div>
        <p>Loading...</p>
    </div>

    		<!-- Main Content Area -->
    <div class="content">
		 	<!-- Default page loaded on startup -->
        <?php include '../../public/home/index.php'; ?>
    </div>
	<div class="headings">
			<!-- heading for all the pages -->
		<h1 class="headertext">The Rosminian Project</h1>	
	</div>

