    <!-- =============================
			 Home page for Assessment website
			 File:	 home.php
			 Author: Max William
			 Date:	 March 2025
			============================== -->

<!--import the initialize-->
<?php require_once('../../private/initialize.php') ?>
<!--title of homepage-->
<title>The Rosmini Food Drive Hub</title>
<!--link stylesheet and import header-->
<link href="_stylesheet.css" rel="stylesheet">
<?php include(SHARED_PATH . '/header.php') ?>
<!--the main text of the homepage-->
<div class="maintext">
	<!-- First section = short description of website  -->
	<section>
		<h1 class="hometxt">
			This is the website where we talk about the Rosminian contributions our fellow brothers have made in the community, fostering the values of dignity, integraty and fairness
		</p>
	</section>
	<!-- Second section = what we do + more information -->
	<section>
		<p class="hometxt">
Rosmini College is a Catholic Boys’ School founded by the Rosminian order to provide a Catholic education to young men on Auckland’s North Shore. We aim to shape them into well-rounded young men ready to leave school who are able to make a positive contribution to society and are empowered to serve others by living out the founder’s maxims.
		</p>
		<!-- List of the things we do -->
		<ul>
			<li><p class="hometxt">Mission: Rosmini College supports and develops well-rounded young men while keeping true to the maxims of Antonio Rosmini.  A holistic education in the Rosminian tradition that fosters a genuine encounter with Christ.</p></li>

			<li><p class="hometxt">Vision: Christ-centred young men who have the values, attitudes, knowledge and skills to fulfil their life and be empowered to serve others.</p></li>

			<li><p class="hometxt">Values: Dignity. Integrity. Fairness. Charity. Justice</p></li>

			<li><p class="hometxt">Motto: Charity fulfils the law.</p></li>
		</ul>
		<section>
			<p class="hometxt">
Rosmini has many service oppertunities and communities like RVA (Rosmini volunteer army) and Young Vinnies where the brothers here in Rosmini can help around in their community to make their community a better place
			</p>
			<!-- List of the orginasations and what they offer-->
		<ul>
			<li><p class="hometxt">RVA / Romsini Volunteer Army		:-	RVA is a community based program where you accumilate your hours of service and turn it into something that you can put in your CV, get badges and recognition for. The badges go in teirs starting from the blue badge (5 hours of service), to the gold badge (500 hours of service). </p></li>

			<li><p class="hometxt">Young Vinnies	:- 	Young Vinnies is a community where Rosminian Brothers come together to help out at the Op Shop, help tutor juniors in homework in the homework club, and make and serve food in Eddies Meals and Travelling Pots. These acts of service can reward boys with a 20 hour service badge every year</p></li>

			<li><p class="hometxt">Envirogroup	:-	Envirogroup is a club where people fight plastic waste, littering and Pampas grass to make our community safer, cleaner and greener to live in. Their badge can be earned after doing a major event with them.</p></li>

			<li><p class="hometxt">Student librarians	:-	Student librarians  is a student led club where they have people stationed around the library and monitor, tidy up and be available in the library to their brothers. Their badge can be obtained at any time after service.</p></li>
		</ul>
		</section>
	</section>

</div>
<!--import the footer-->
<?php include(SHARED_PATH . '/footer.php') ?> 
