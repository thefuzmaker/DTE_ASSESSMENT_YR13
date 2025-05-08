    <!-- =============================
			 Home page for Assessment website
			 File:	 home.php
			 Author: Max William
			 Date:	 March 2025
			============================== -->

		<!--import the initialize-->
<?php require_once('../../private/initialize.php') ?>
		<!--title of homepage-->
<title>The Rosmini volunteer page</title>
<?php include(SHARED_PATH . '/header.php') ?>
		<!--the main text of the homepage-->
<div class="maintext">
		<!-- what we do + more information -->
	<section>

		<p class="titletxt">
Rosmini College is a Catholic Boys’ School founded by the Rosminian order to provide a Catholic education to young men on Auckland’s North Shore. We aim to shape them into well-rounded young men ready to leave school who are able to make a positive contribution to society and are empowered to serve others by living out the founder’s maxims.
		</p>
		<!-- List of the things we do -->
		<div class="list_images">
			<ul>
				<li><p>Mission: Rosmini College supports and develops well-rounded young men while keeping true to the maxims of Antonio Rosmini.  A holistic education in the Rosminian tradition that fosters a genuine encounter with Christ.</p></li>

				<li><p>Vision: Christ-centred young men who have the values, attitudes, knowledge and skills to fulfil their life and be empowered to serve others.</p></li>

				<li><p>Values: Dignity. Integrity. Fairness. Charity. Justice</p></li>

				<li><p>Motto: Charity fulfils the law.</p></li>
			</ul>
			<img src="<?php echo htmlspecialchars($row1["image_url"])?>" alt="antonio" width="200" height="230" style="padding-right: 30;">
		</div>
		<div>
			<p class="ptxt">The Rosminian Project: Serving with Purpose
The Rosminian Project is inspired by the life and teachings of Blessed Antonio Rosmini, a Catholic priest and philosopher who believed that faith must be lived through action. At its heart, the project encourages individuals—especially those within Rosmini communities—to serve others with compassion, humility, and love.

Rosmini’s guiding principle, “charity in all things,” continues to shape the mission of Rosminian schools, parishes, and organizations around the world. Service is not seen as an obligation, but as a meaningful way to grow in faith and contribute to the common good. Whether it’s students volunteering in their local community, teachers mentoring youth, or parishioners supporting the elderly, every act of kindness reflects Rosmini’s belief in the dignity of each person.

The project also emphasizes the development of servant leadership. In Rosminian schools, young people are encouraged to lead by example, using their talents to uplift others and create positive change. Service is woven into the culture of these institutions, forming students not just academically, but morally and spiritually.

Globally, the Rosminian Project connects people across cultures through a shared commitment to justice, compassion, and solidarity. From Tanzania to New Zealand, Rosminians are working to build communities rooted in faith and service.

In a world that often promotes self-interest, the Rosminian Project offers a powerful alternative: a life of purpose, generosity, and hope.</p>
		</div>
		<div>
			<p class="titletxt">
Rosmini has many service oppertunities and communities like RVA (Rosmini volunteer army) and Young Vinnies where the brothers here in Rosmini can help around in their community to make their community a better place
			</p>
		<!-- List of the orginasations and what they offer-->
		<ul>
			<li><p>RVA / Romsini Volunteer Army		:-	RVA is a community based program where you accumilate your hours of service and turn it into something that you can put in your CV, get badges and recognition for. The badges go in teirs starting from the blue badge (5 hours of service), to the gold badge (500 hours of service). </p></li>

			<li><p>Young Vinnies	:- 	Young Vinnies is a community where Rosminian Brothers come together to help out at the Op Shop, help tutor juniors in homework in the homework club, and make and serve food in Eddies Meals and Travelling Pots. These acts of service can reward boys with a 20 hour service badge every year</p></li>

			<li><p>Envirogroup	:-	Envirogroup is a club where people fight plastic waste, littering and Pampas grass to make our community safer, cleaner and greener to live in. Their badge can be earned after doing a major event with them.</p></li>

			<li><p>Student librarians	:-	Student librarians  is a student led club where they have people stationed around the library and monitor, tidy up and be available in the library to their brothers. Their badge can be obtained at any time after service.</p></li>
		</ul>
		</div>
	</section>

</div>
		<!--import the footer-->
<?php include(SHARED_PATH . './footer.php') ?> 
