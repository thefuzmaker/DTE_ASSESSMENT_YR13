        <!-- =============================
			 Young Vinnies page for Assessment website
			 File:	 home.php
			 Author: Max William
			 Date:	 March 2025
			 ============================== -->

		<!--import the initialize-->
<?php require_once('../../private/initialize.php') ?>
		<!--title of homepage-->
<title>Young Vinnies</title>
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
			<img src="<?php echo htmlspecialchars($row5["image_url"])?>" alt="Young Vinnies photo" width="50%" height="50%">
			<section>
				<p class="ptxt">
        Young Vinnies is the Youth Arm of the St Vincent De Paul Society who are active worldwide in support of those who are in need, regardless of colour, creed or race. It has been operating since it was reintroduced successfully into the College in 2014. It has continued to thrive and  year upon year produces members and Leaders who are motivated by and continue to ensure that by their actions "Charity will fulfill the Law".

Rosmini's Young Vinnies are required to do 20 hours of service before they receive their badges. They are able to do this through the following Ministries that we have operating within the College. Once badged they must continue to be actively involved in the Ministries of their choice and consider a Leadership role if it is offered.
				</p>
		<!-- List of the things Young Vinnies do -->
				<div class="seperate">
					<p class="ptxt">These ministries include:-</p>
					<ul>
                		<li><p>Op Shop:- (3) Ministry to SVDP Op Shops on the North Shore, namely at Beachaven and Glenfield. Our students volunteer to do a shift on Saturdays and also avail themselves of shifts during the holidays. This Ministry is to be further extended to include helping to pack food parcels for which there has been a huge increase in demand for, because of Covid 19 and those who have been made unemployed.</p></li>

                		<li><p>Homework Club:- Senior Rosmini boys can volunteer their time and help people struggling with any homework or classwork. Usually the subjects that are worked on the most are math, english, physics, chemistry and biology.</p></li>

                		<li><p>Eddies Meals:- Eddies meals is a cooking innitiative where volunteers from Rosmini cook meals for the people from the local retirement home and serve them the food. This can also include people who provide entertainment to them.</p></li>

                		<li><p>Travelling Pots:- This is where Rosmini and Carmel College's Young Vinnies gather together and cook up nutritious meals that are then packed and distributed to those in need at the City Mission or the SVDP Centre in Gundry St, Auckland Central. These are carried out once a Term and usually produce 120 - 150 meals.</p></li>
					</ul>
				</div>
			</section>
		</div>
        <div>
            <p class="ptxt">
            Young Vinnies at Rosmini College in Auckland is a vibrant youth initiative under the St Vincent de Paul Society, dedicated to serving those in need. Since its reintroduction in 2014, the program has thrived, encouraging students to embody the spirit of charity through various ministries. Participants engage in meaningful activities such as supporting refugees and families at De Paul House, assisting the elderly, volunteering at local op shops, and preparing meals for the City Mission. They also organize annual drives for food, clothing, and Christmas cheer to aid vulnerable communities. With a commitment to service and leadership, Rosmini's Young Vinnies exemplify the school's motto, "Charity Fulfils the Law"
            </p>
        </div>
	</section>
	<section>
		<div class="half_body">
			<p class="ptxt">
			In 2024, Rosmini College's Young Vinnies leadership team demonstrated exceptional dedication and service, continuing the group's mission to support those in need. Under the guidance of leaders Dani Mathew, TJ Tecson, Radeesha de Silva, and Kevin Vinish, the team effectively coordinated various initiatives, including Eddie's Meals, supporting local op shops, organizing food drives, and volunteering at community events. Their efforts were recognized with certificates from the Society of St Vincent de Paul, highlighting their commitment to living out the school's motto, "Charity Fulfils the Law."
			<br>
			A notable achievement during their tenure was the collaboration with Carmel College for the Travelling Pots ministry, where students prepared and delivered 86 meals to the St Vincent de Paul foodbank. Additionally, the leadership team celebrated the feast day of St Vincent de Paul at St Patrick's Cathedral, receiving recognition for their service to both the school and the wider community.
			<br>
			As the year concluded, the leadership baton was passed to the 2025 team: Jairus Joseph, Theodore Chan, Santino Rodriguez, and Coen Tyler. The 2024 leaders' unwavering commitment ensured that Rosmini College's Young Vinnies continued to embody the spirit of charity and service. 
			</p>
			<div>
				<h1>The Young Vinnies Leaders 2024</h1>
				<img src="<?php echo htmlspecialchars($row6["image_url"])?>" alt="Young Vinnies Leader photo" width="100%" height="100%">
			</div>
		</div>
	</section>
</div>
		<!--import the footer-->
<?php include(SHARED_PATH . '/footer.php') ?> 
