        <!-- =============================
			 SVA page for Assessment website
			 File:	 home.php
			 Author: Max William
			 Date:	 March 2025
			 ============================== -->

		<!--import the initialize-->
        <?php require_once('../../private/initialize.php') ?>
		<!--title of homepage-->
<title>Student Volunteer Army</title>
		<!--link stylesheet and import header-->

<?php include(SHARED_PATH . '/header.php') ?>
		<!--the main text of the homepage-->
		<div class="maintext">
		<!-- what we do + more information -->
	<section>
        	<h1>
            	Young Vinnies
        	</h1>
		<div class="half_body">
			<img src="<?php echo htmlspecialchars($row4["image_url"])?>" alt="SVA photo" width="50%" height="50%">
			<section>
				<p class="ptxt">
				The Student Volunteer Army (SVA) at Rosmini College in Takapuna, Auckland, is a dynamic group of students dedicated to making a positive impact in their local community. While the SVA operates nationally, Rosmini College students actively participate in various initiatives that align with the organization's mission.
					<br>
Rosmini College has a strong tradition of community service through its Young Vinnies group, the youth arm of the St Vincent de Paul Society. Since its reintroduction in 2014, Young Vinnies has been instrumental in supporting those in need. Students engage in activities such as assisting at De Paul House in Northcote, visiting the elderly, volunteering at St Vincent de Paul Op Shops, and participating in the "Travelling Pots" ministry, where they cook and distribute meals to those in need.
				</p>
		<!-- List of the things Young Vinnies do -->
				<div class="seperate">
					<p class="ptxt">These ministries include:-</p>
					<ul>
                		<li><p>1. Member Pin – 5 hours <br>  Earned after completing 5 hours of volunteer service.</p></li>

                		<li><p>2. Bronze Pin – 32 hours <br>  Awarded upon reaching 32 hours of service.</p></li>

                		<li><p>3. Silver Pin – 250 hours <br>  Given after accumulating 250 hours of volunteer work.</p></li>

                		<li><p>4. Gold Pin – 500 hours <br>  Presented upon achieving 500 hours of service.</p></li>

						<li><p>5. Top Volunteer Award Pin – Special recognition <br>  A prestigious award for exceptional volunteer service.</p></li>
					</ul>
					<p class="ptxt">Students log their volunteer hours through the SVA app or website, which also generates a "Summary of Service" document. This summary can be used for applications to universities, scholarships, and employment opportunities, showcasing the student's commitment and skills developed through volunteering.
						<br>
						The program is designed to encourage students to engage in various forms of service, including activities within their schools, homes, and local communities. By participating, students not only contribute positively to society but also develop valuable life skills such as leadership, teamwork, and empathy.</p>
				</div>
			</section>
		</div>
        <div>
            <p class="ptxt">
            Rosmini College students have consistently demonstrated exceptional commitment to community service, earning the school a distinguished reputation in the Student Volunteer Army (SVA) initiative. Their active participation in various volunteer activities, such as organizing beach clean-ups and assisting local organizations, showcases their dedication to making a positive impact on society. Through these efforts, Rosmini College not only contributes to environmental conservation but also instills values of empathy, leadership, and civic responsibility among its students. The school's involvement in the SVA initiative reflects its broader commitment to developing well-rounded individuals who are actively engaged in their communities.
            </p>
        </div>
	</section>
	<section>
		<h1>Greatest Achievement Rosmini has done with SVA</h1>
		<div class="half_body">
			<div class="container_1">
				<p class="ptxt">
				In December 2019, Rosmini College students led a significant beach cleanup at Milford Beach, Auckland, in response to an alarming discovery of thousands of plastic nurdles—small lentil-sized plastic beads used in manufacturing—that had washed ashore. These beads are notorious for breaking down into microplastics, posing serious threats to marine life and ecosystems. The cleanup was organized by the Devonport-Takapuna Local Board, with support from local schools, including Rosmini College, and community groups. The initiative aimed to address the pollution and raise awareness about the environmental impact of plastic waste.				</p>
				<p class="ptxt">
				Rosmini College students, alongside other volunteers, worked diligently to collect the plastic beads and other debris from the beach. Their efforts not only contributed to a cleaner environment but also highlighted the importance of proper waste management and the need for manufacturers to implement measures to prevent such pollution. The students' involvement in the cleanup exemplified their commitment to environmental stewardship and community service.
				</p>
				<p class="ptxt">
				This event was part of a broader series of coastal clean-up days across the Devonport-Takapuna area, which saw over 1,500 volunteers from various schools and community groups coming together to tackle beach pollution. These collective efforts underscore the power of community action in addressing environmental challenges and fostering a culture of sustainability. Through their participation, Rosmini College students not only contributed to the immediate cleanup but also helped raise awareness about the broader issue of plastic pollution in our oceans.
				</p>
				<p class="ptxt">
				The success of the Milford Beach cleanup serves as a testament to the positive impact that young people can have on their communities and the environment. It also underscores the importance of continued education and action to combat plastic pollution and protect marine ecosystems for future generations.
				</p>
				</div>
				<img src="<?php echo htmlspecialchars($row8["image_url"])?>" alt="Young Vinnies Leader photo" class="YVLP">
		</div>
	</section>
</div>
		<!--import the footer-->
<?php include(SHARED_PATH . '/footer.php')?> 