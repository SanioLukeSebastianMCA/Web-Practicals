<?php
	
	$fullname="Sanio Luke Sebastian";
	$address= "A-104, Radha Vihar CHS, <br>Opp.St.John School,<br>Asde Golavli,<br>Kalyan Shil Road,<br>Dombivili (East)";
	$pincode= "421203";
	$email_id= "sanioluke00@gmail.com";
	$phoneno= "+918692074192";
	$career_obj="Myself, Sanio Luke Sebastian, a BSC-IT graduate, 2021 passes out, interested in Mobile Application Development, well versed in Android Development using Java & Kotlin. Have the basic knowledge of Flutter Development and Dart. My forte includes creating mobile applications and creation of UI/UX designings. My past shows the expertise in freelancing, working in client-based companies, organizations as an intern, working on various real-time projects as well as minor projects. Keen to learn what is introduced to me and tries to never miss an opportunity.";

	$achievements_array= array("Freelancer Intern for HintsForYou, Bangalore","UI/UX Designer in Pinky Promise Organization");

	$persnl_skill_array= array("UI/UX Designing","Game Development","Manga Reading","Dancing & Hearing Musics");

	$academic_details_array = array(
		array("Bachelor of Science","Mumbai University","Information Technology","2021","8.46 points"),
		array("H.S.C", "Higher & Secondary Education of Maharashtra","-------","2018","67.48 %"),
		array("S.S.C","Higher & Secondary Education of Maharashtra", "-------","2016","84.8 %"));

?>

<html>

	<head>
		<title>My First PHP Page</title>
	</head>

	<body>

		<center style="margin-top: 30px"><h2>RESUME</h2></center>

		<table style="width: 100%; margin-top: 50px">
			<tr>
				<td>
					<h3><?php echo "$fullname"; ?></h3>
					<p><?php echo "$address"; ?><br>Pincode : <?php echo "$pincode"; ?></p>
				</td>

				<td style="text-align: center">
					<p>Email ID: <?php echo "$email_id"; ?><br>Phone : <?php echo "$phoneno"; ?></p>
				</td>
			</tr>
		</table>

		<hr>
		
		<h2 style="margin-top: 25px">Career Objective</h2>
		<p><?php echo "$career_obj"; ?></p>	

		<h2 style="margin-top: 25px">Academic Review</h2>
		<div style="padding-left: 50px; padding-right: 50px">
			<table border="1" style="width: 100%">
				<thead>
					<tr>	
						<th>Qualification</th>
						<th>University Board</th>
						<th>Specialization</th>
						<th>Year of Passing</th>
						<th>Marks</th>
					</tr>
				</thead>

				<tbody style="text-align: center;">
					<?php 
						for ($m = 0; $m < sizeof($academic_details_array); $m++) {
  							echo "<tr>";
	  							for ($i=0; $i < sizeof($academic_details_array[$m]); $i++) {
	  								$innerArray= $academic_details_array[$m];
	  								echo "<td>$innerArray[$i]</td>";
	  							}
							echo "</tr>";
						}
					?>
				</tbody>

			</table>
		</div>	
		
		<h2 style="margin-top: 25px">Achievements</h2>
		<ul>
			<?php
				for ($m = 0; $m < sizeof($achievements_array); $m++) {
						echo "<li>$achievements_array[$m]</li>";
				}
			?>
		</ul>

			<h2 style="margin-top: 25px">Personal Skills</h2>
		<ul>
			<?php
				for ($m = 0; $m < sizeof($persnl_skill_array); $m++) {
					echo "<li>$persnl_skill_array[$m]</li>";
				}
			?>
		</ul>

	</body>
</html>