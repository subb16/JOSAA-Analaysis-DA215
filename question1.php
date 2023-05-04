<html>
	<head>
		<title>JOSAA Analysis</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		<!-- <link rel="stylesheet" href="assets/css/main.css" /> -->
		<link rel="stylesheet" href="assets/css/q1_1.css" />
		<link rel="stylesheet" href="assets/css/proj.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>


<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">JOSAA DATA ANALYSIS</span>
								</a>

							<!-- Nav -->
								<!-- <nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav> -->

							<!-- Navigation Bar -->
							<nav >
								<!-- <a href="try.html"><img class="navimg" src="images/cropped.png" width=50% height=50%></a> -->
								<div style = "float:right" >
									<ul>
										<!-- dropdown -->
										<div class="dropdown">
											<button class="dropbtn"><li class="item"><p class = "pred">Predictors</p></li>
											  <i class="fa fa-caret-down"></i>
											</button>
											<div class="dropdown-content">
											  <a href="college-advisor.php">College Advisor</a>
											  <a href="closingpredictor.php">Rank Predictor</a>
		
											</div>
										  </div>
										  <!-- dropdown -->
										<!-- <li class="item"><a href="college-advisor.php">Predictors</a></li> -->
										<li class="item"><a href="mtt.html">About Team</a></li>
									</ul>
								</div>
							</nav>

						</div>
					</header>

					<div class="question">
							<h1>Branch Specific Analysis</h1>
				    </div>
				
						
					

					<div style="display: flex">
						<form method="post" class="dropdowns">
							<label for="college">Select College:</label>
							<select id="branchdrop" name="college[]" mulltiple>
								<option value="Indian Institute of Technology Bombay">IIT Bombay </option>
								<option value="Indian Institute of Technology Delhi">IIT Delhi</option>
								<option value="Indian Institute of Technology Madras">IIT Madras</option>
								<option value="Indian Institute of Technology Bhilai">IIT Bhilai</option>
								<option value="Indian Institute of Technology Bhubaneswar">IIT Bhubaneswar</option>
								<option value="Indian Institute of Technology Gandhinagar">IIT Gandhinagar</option>
								<option value="Indian Institute of Technology Goa">IIT Goa</option>
								<option value="Indian Institute of Technology Guwahati">IIT Guwahati</option>
								<option value="Indian Institute of Technology Hyderabad">IIT Hydrabad</option>
								<option value="Indian Institute of Technology Indore">IIT Indore</option>
								<option value="Indian Institute of Technology Mandi">IIT Mandi</option>
								<option value="Indian Institute of Technology Jodhpur">IIT Jodhpur</option>
								<option value="Indian Institute of Technology Kanpur">IIT Kanpur</option>
								<option value="Indian Institute of Technology Kharagpur">IIT Kharagpur</option>
								<option value="Indian Institute of Technology Palakkad">IIT Palakkad</option>
								<option value="Indian Institute of Technology Patna">IIT Patna</option>
								<option value="Indian Institute of Technology Roorkee">IIT Roorkee</option>
								<option value="Indian Institute of Technology Ropar">IIT Ropar</option>
								<option value="Indian Institute of Technology Tirupati">IIT Tirupati</option>
								<option value="Indian Institute of Technology (BHU) Varanasi">IIT Varanasi</option>
								<option value="Indian Institute of Technology (ISM) Dhanbad">ISM Dhanbad</option>
								<option value="Indian Institute of Technology Dharwad">IIT Dharwad</option>
								<option value="Indian Institute of Technology Jammu">IIT Jammu</option>
							   
							</select>
						  <br>
						  
						  <label for="branch">Select Branch:</label>  
							<select name="branch" >
							<option value=""> Select </option>
							<option value="Aerospace Engineering (5 Years, Bachelor and Masters of Technology)">Aerospace Engineering (5 Years, Bachelor and Masters of Technology)</option>
							<option value="Agricultural and Food Engineering (4 Years,Bachelor of Technology)">Agricultural and Food Engineering (4 Years,Bachelor of Technology)</option>
							<option value="Agricultural and Food Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))">Agricultural and Food Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Applied Geology (4 Years, Bachelor of Science)">Applied Geology (4 Years, Bachelor of Science)</option>
							<option value="Applied Geology (5 Years, Integrated Master of Science)">Applied Geology (5 Years, Integrated Master of Science)</option>
							<option value="Applied Geology (5 Years, Integrated Master of Technology)">Applied Geology (5 Years, Integrated Master of Technology)</option>
							<option value="Applied Geophysics (5 Years, Integrated Master of Technology)">Applied Geophysics (5 Years, Integrated Master of Technology)</option>
							<option value="Applied Mathematics (5 Years, Integrated Master of Science)">Applied Mathematics (5 Years, Integrated Master of Science)</option>
							<option value="Architecture (5 Years, Bachelor of Architecture)">Architecture (5 Years, Bachelor of Architecture)</option>
							<option value="Artificial Intelligence (4 Years, Bachelor of Technology)">Artificial Intelligence (4 Years, Bachelor of Technology)</option>
							<option value="Artificial Intelligence and Data Science (4 Years, Bachelor of Technology)">Artificial Intelligence and Data Science (4 Years, Bachelor of Technology)</option>
							<option value="Bio Engineering (4 Years, Bachelor of Technology)">Bio Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Bio Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Bio Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Bio Technology (4 Years, Bachelor of Technology)">Bio Technology (4 Years, Bachelor of Technology)</option>
							<option value="Biochemical Engineering and Biotechnology (5 Years, Bachelor and Master of Technology (Dual Degree))">Biochemical Engineering and Biotechnology (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Biochemical Engineering with M.Tech. in Biochemical Engineering and Biotechnology (5 Years, Bachelor and Master of Technology (Dual Degree))">Biochemical Engineering with M.Tech. in Biochemical Engineering and Biotechnology (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Bioengineering with M.Tech in Biomedical Technology (5 Years, Bachelor and Master of Technology (Dual Degree))">Bioengineering with M.Tech in Biomedical Technology (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Biological Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Biological Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Biological Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Biological Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))</option>
							<option value="Biological Sciences and Bioengineering (4 Years, Bachelor of Technology)">Biological Sciences and Bioengineering (4 Years, Bachelor of Technology)</option>
							<option value="Biomedical Engineering (4 Years, Bachelor of Technology)">Biomedical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Biosciences and Bioengineering (4 Years, Bachelor of Technology)">Biosciences and Bioengineering (4 Years, Bachelor of Technology)</option>
							<option value="Biotechnology and Biochemical Engineering (4 Years, Bachelor of Technology)">Biotechnology and Biochemical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Biotechnology and Biochemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Biotechnology and Biochemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Biotechnology and Bioinformatics (4 Years, Bachelor of Technology)">Biotechnology and Bioinformatics (4 Years, Bachelor of Technology)</option>
							<option value="BS in Mathematics (4 Years, Bachelor of Science)">BS in Mathematics (4 Years, Bachelor of Science)</option>
							<option value="Ceramic Engineering (4 Years, Bachelor of Technology)">Ceramic Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Ceramic Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Ceramic Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Chemical and Biochemical Engineering (4 Years, Bachelor of Technology)">Chemical and Biochemical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Chemical Engineering (4 Years, Bachelor of Technology)">Chemical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Chemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Chemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Chemical Science and Technology (4 Years, Bachelor of Technology)">Chemical Science and Technology (4 Years, Bachelor of Technology)</option>
							<option value="Chemical Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Chemical Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))</option>
							<option value="Chemistry (4 Years, Bachelor of Science)">Chemistry (4 Years, Bachelor of Science)</option>
							<option value="Chemistry (5 Years, Integrated Master of Science)">Chemistry (5 Years, Integrated Master of Science)</option>
							<option value="Chemistry with Specialization (4 Years, Bachelor of Science)">Chemistry with Specialization (4 Years, Bachelor of Science)</option>
							<option value="Civil and Infrastructure Engineering (4 Years, Bachelor of Technology)">Civil and Infrastructure Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Civil Engineering (4 Years, Bachelor of Technology)">Civil Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Civil Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Civil Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Civil Engineering and M. Tech. in Structural Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Civil Engineering and M. Tech. in Structural Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Civil Engineering and M.Tech in Transportation Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Civil Engineering and M.Tech in Transportation Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Civil Engineering and M.Tech. in Environmental Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Civil Engineering and M.Tech. in Environmental Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Civil Engineering with any of the listed specialization (5 Years, Bachelor and Master of Technology (Dual Degree))">Civil Engineering with any of the listed specialization (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Computational Engineering (4 Years, Bachelor of Technology)">Computational Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Computer Science and Engineering (4 Years, Bachelor of Technology)">Computer Science and Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Computer Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Computer Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Data Science and Artificial Intelligence (4 Years, Bachelor of Technology)">Data Science and Artificial Intelligence (4 Years, Bachelor of Technology)</option>
							<option value="Data Science and Engineering (4 Years, Bachelor of Technology)">Data Science and Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Earth Sciences (4 Years, Bachelor of Science)">Earth Sciences (4 Years, Bachelor of Science)</option>
							<option value="Economics (4 Years, Bachelor of Science">Economics (4 Years, Bachelor of Science)</option>
							<option value="Economics (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Economics (5 Years, Bachelor of Science and Master of Science (Dual Degree))</option>
							<option value="Economics (5 Years, Integrated Master of Science)">Economics (5 Years, Integrated Master of Science)</option>
							<option value="Electrical and Electronics Engineering (4 Years, Bachelor of Technology)">Electrical and Electronics Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Electrical Engineering (4 Years, Bachelor of Technology)">Electrical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Electrical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Electrical Engineering (IC Design and Technology) (4 Years, Bachelor of Technology)">Electrical Engineering (IC Design and Technology) (4 Years, Bachelor of Technology)</option>
							<option value="Electrical Engineering (Power and Automation) (4 Years, Bachelor of Technology)">Electrical Engineering (Power and Automation) (4 Years, Bachelor of Technology)</option>
							<option value="Electrical Engineering and M.Tech Power Electronics and Drives (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering and M.Tech Power Electronics and Drives (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Electrical Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Electrical Engineering with M.Tech. in Communications and Signal Processing (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering with M.Tech. in Communications and Signal Processing (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Electrical Engineering with M.Tech. in Microelectronics (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering with M.Tech. in Microelectronics (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Electrical Engineering with M.Tech. in Power Electronics (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering with M.Tech. in Power Electronics (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Electronics and Communication Engineering (4 Years, Bachelor of Technology)">Electronics and Communication Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Electronics and Electrical Communication Engineering (4 Years, Bachelor of Technology)">Electronics and Electrical Communication Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Electronics and Electrical Communication Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))">Electronics and Electrical Communication Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Electronics and Electrical Engineering (4 Years, Bachelor of Technology)">Electronics and Electrical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Electronics and Instrumentation Engineering (4 Years, Bachelor of Technology)">Electronics and Instrumentation Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Electronics Engineering (4 Years, Bachelor of Technology)">Electronics Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Energy Engineering (4 Years, Bachelor of Technology)">Energy Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Energy Engineering with M.Tech. in Energy Systems Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Energy Engineering with M.Tech. in Energy Systems Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Engineering and Computational Mechanics (4 Years, Bachelor of Technology)">Engineering and Computational Mechanics (4 Years, Bachelor of Technology)</option>
							<option value="Engineering Design (5 Years, Bachelor and Master of Technology (Dual Degree))">Engineering Design (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Engineering Physics (4 Years, Bachelor of Technology)">Engineering Physics (4 Years, Bachelor of Technology)</option>
							<option value="Engineering Physics (5 Years, Bachelor and Master of Technology (Dual Degree))">Engineering Physics (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Engineering Science (4 Years, Bachelor of Technology)">Engineering Science (4 Years, Bachelor of Technology)</option>
							<option value="Environmental Engineering (4 Years, Bachelor of Technology)">Environmental Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Environmental Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Environmental Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Exploration Geophysics (4 Years, Bachelor of Science)">Exploration Geophysics (4 Years, Bachelor of Science)</option>
							<option value="Exploration Geophysics (5 Years, Integrated Master of Science)">Exploration Geophysics (5 Years, Integrated Master of Science)</option>
							<option value="Geological Technology (5 Years, Integrated Master of Technology)">Geological Technology (5 Years, Integrated Master of Technology)</option>
							<option value="Geophysical Technology (5 Years, Integrated Master of Technology)">Geophysical Technology (5 Years, Integrated Master of Technology)</option>
							<option value="Industrial and Systems Engineering (4 Years, Bachelor of Technology)">Industrial and Systems Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Industrial and Systems Engineering with M.Tech. in Industrial and Systems Engineering and Management (5 Years, Bachelor and Master of Technology (Dual Degree))">Industrial and Systems Engineering with M.Tech. in Industrial and Systems Engineering and Management (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Industrial Chemistry (4 Years, Bachelor of Technology)">Industrial Chemistry (4 Years, Bachelor of Technology)</option>
							<option value="Industrial Chemistry (5 Years, Bachelor and Master of Technology (Dual Degree))">Industrial Chemistry (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Instrumentation Engineering (4 Years, Bachelor of Technology)">Instrumentation Engineering (4 Years, Bachelor of Technology)</option>
							<option value=">Interdisciplinary Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Interdisciplinary Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))</option>
							<option value="Manufacturing Science and Engineering (4 Years, Bachelor of Technology)">Manufacturing Science and Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Manufacturing Science and Engineering with M.Tech. in Industrial and Systems Engineering and Management (5 Years, Bachelor and Master of Technology (Dual Degree))">Manufacturing Science and Engineering with M.Tech. in Industrial and Systems Engineering and Management (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Materials Engineering (4 Years, Bachelor of Technology)">Materials Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Materials Science and Engineering (4 Years, Bachelor of Technology)">Materials Science and Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Materials Science and Metallurgical Engineering (4 Years, Bachelor of Technology)">Materials Science and Metallurgical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Materials Science and Technology (5 Years, Bachelor and Master of Technology (Dual Degree))">Materials Science and Technology (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mathematics & Computing (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Mathematics & Computing (5 Years, Bachelor of Science and Master of Science (Dual Degree))</option>
							<option value="Mathematics and Computing (4 Years, Bachelor of Science)">Mathematics and Computing (4 Years, Bachelor of Science)</option>
							<option value="Mathematics and Computing (4 Years, Bachelor of Technology)">Mathematics and Computing (4 Years, Bachelor of Technology)</option>
							<option value="Mathematics and Computing (5 Years, Bachelor and Master of Technology (Dual Degree))">Mathematics and Computing (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mathematics and Computing (5 Years, Integrated Master of Science)">Mathematics and Computing (5 Years, Integrated Master of Science)</option>
							<option value="Mathematics and Computing (5 Years, Integrated Master of Technology)">Mathematics and Computing (5 Years, Integrated Master of Technology)</option>
							<option value="Mathematics and Scientific Computing (4 Years, Bachelor of Science)">Mathematics and Scientific Computing (4 Years, Bachelor of Science)</option>
							<option value="Mechanical Engineering (4 Years, Bachelor of Technology)">Mechanical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Mechanical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mechanical Engineering and M. Tech. in Mechanical System Design (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering and M. Tech. in Mechanical System Design (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mechanical Engineering and M. Tech. in Thermal Science & Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering and M. Tech. in Thermal Science & Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value=">Mechanical Engineering and M.Tech. in Computer Integrated Manufacturing (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering and M.Tech. in Computer Integrated Manufacturing (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mechanical Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mechanical Engineering with M.Tech. in Manufacturing Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering with M.Tech. in Manufacturing Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mechatronics Engineering (4 Years, Bachelor of Technology)">Mechatronics Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Metallurgical and Materials Engineering (4 Years, Bachelor of Technology)">Metallurgical and Materials Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Metallurgical and Materials Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Metallurgical and Materials Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Metallurgical and Materials Engineering and M.Tech. in Materials Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Metallurgical and Materials Engineering and M.Tech. in Materials Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Metallurgical Engineering & Materials Science (5 Years, Bachelor and Master of Technology (Dual Degree))">Metallurgical Engineering & Materials Science (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Metallurgical Engineering (4 Years, Bachelor of Technology)">Metallurgical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Metallurgical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Metallurgical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Metallurgical Engineering and Materials Science (4 Years, Bachelor of Technology)">Metallurgical Engineering and Materials Science (4 Years, Bachelor of Technology)</option>
							<option value="Metallurgical Engineering and Materials Science with M.Tech. in Ceramics and Composites (5 Years, Bachelor and Master of Technology (Dual Degree))">Metallurgical Engineering and Materials Science with M.Tech. in Ceramics and Composites (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Metallurgical Engineering and Materials Science with M.Tech. in Metallurgical Process Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Metallurgical Engineering and Materials Science with M.Tech. in Metallurgical Process Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mineral and Metallurgical Engineering (4 Years, Bachelor of Technology)">Mineral and Metallurgical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Mineral Engineering (4 Years, Bachelor of Technology)">Mineral Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Mining Engineering (4 Years, Bachelor of Technology)">Mining Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Mining Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Mining Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mining Machinery Engineering (4 Years, Bachelor of Technology)">Mining Machinery Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Mining Safety Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Mining Safety Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Naval Architecture and Ocean Engineering (4 Years, Bachelor of Technology)">Naval Architecture and Ocean Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Naval Architecture and Ocean Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Naval Architecture and Ocean Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Ocean Engineering and Naval Architecture (4 Years, Bachelor of Technology)">Ocean Engineering and Naval Architecture (4 Years, Bachelor of Technology)</option>
							<option value="Ocean Engineering and Naval Architecture (5 Years, Bachelor and Master of Technology (Dual Degree))">Ocean Engineering and Naval Architecture (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Petroleum Engineering (4 Years, Bachelor of Technology)">Petroleum Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Pharmaceutical Engineering & Technology (4 Years, Bachelor of Technology)">Pharmaceutical Engineering & Technology (4 Years, Bachelor of Technology)</option>
							<option value="Pharmaceutical Engineering & Technology (5 Years, Bachelor and Master of Technology (Dual Degree))">Pharmaceutical Engineering & Technology (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Physics (4 Years, Bachelor of Science)">Physics (4 Years, Bachelor of Science)</option>
							<option value="Physics (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Physics (5 Years, Bachelor of Science and Master of Science (Dual Degree))</option>
							<option value="Physics (5 Years, Integrated Master of Science)">Physics (5 Years, Integrated Master of Science)</option>
							<option value="Physics with Specialization (4 Years, Bachelor of Science)">Physics with Specialization (4 Years, Bachelor of Science)</option>
							<option value="Polymer Science and Engineering (4 Years, Bachelor of Technology)">Polymer Science and Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Production and Industrial Engineering (4 Years, Bachelor of Technology)">Production and Industrial Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Quality Engineering Design and Manufacturing (5 Years, Bachelor and Master of Technology (Dual Degree))">Quality Engineering Design and Manufacturing (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Statistics and Data Science (4 Years, Bachelor of Science)">Statistics and Data Science (4 Years, Bachelor of Science)</option>
							<option value="Textile Technology (4 Years, Bachelor of Technology)">Textile Technology (4 Years, Bachelor of Technology)</option>
							</select>
						<br>

						<label for="category">Select Category:</label>
						<select name="category">
							<option value="">Select</option>
							<option value="OPEN">OPEN </option>
							<option value="OBC-NCL">OBC-NCL</option>
							<option value="EWS">EWS</option>
							<option value="SC">SC</option>
							<option value="ST">ST</option>
							<!-- <option value="PWD">PWD</option> -->
						</select>
						<br>
							<button type="submit" name="submit">Enter</button>
							</form>

				
				<div class = "chartcont">

					
				<?php

					$host = 'localhost';
					$username = 'devanshu';
					$password = 'passwords';
					$dbname = 'mydb';
					$conn = new mysqli($host, $username, $password, $dbname);


					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}


					if(isset($_POST['submit'])){

					$branch = $_POST['branch'];
					$category = $_POST['category'];

					$filter_institutes = array("Indian Institute of Technology Bombay", "Indian Institute of Technology Delhi", "Indian Institute of Technology Guwahati");
					$filter_institutes  = $_POST['college'];
					// print_r($filter_institutes);

					$filter_institutes = "'" . implode("','", $filter_institutes) . "'";

					$sql = "SELECT I.institute as city, C.CR as cr , C.YEAR_ as year FROM rank_data C, program P, iit I WHERE P.program = '{$branch}' and C.seattype = '{$category}' and I.institute in ($filter_institutes) and P.p_code = C.P_code and I.I_code = C.I_code ORDER by city, year";
					$result = $conn->query($sql);

					$conn->close();

					$cities = array();
					$ranks = array();

					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {

							if ( isset( ${$row['city']} ) ){

								${$row['city']}[(int)$row['year']] = $row['cr'];

							}else{

								${$row['city']} = array();

								array_push($cities, $row['city']);

								${$row['city']}[(int)$row['year']] = $row['cr'];
					
							}
						}

					} else {
						echo "0 results";
					}

					$i = 0;

					while ($i < count($cities)){

						for ($x = 2018; $x <= 2022; $x++){
							if (!array_key_exists($x, ${$cities[$i]})){
								${$cities[$i]}[$x] = null;
							}
						}

						ksort(${$cities[$i]});

						array_push($ranks , array_values(${$cities[$i]}) );

						$i++;

					}
				
					$ranks = json_encode($ranks);
					$cities = json_encode($cities);

					$years = array(2018, 2019, 2020, 2021, 2022);
					$years = json_encode($years);

					$branch = json_encode($branch);

					}



					?>

					<canvas class="charts" id="myChart"> </canvas>
					<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
					<script src="scripts.js"></script>
					<script>
					const ctx = document.getElementById('myChart');

					var ranks = <?php echo $ranks ?>;
					var cities = <?php echo $cities ?>;
					var labelList = <?php echo $years ?>;
					var branch = <?php echo $branch ?>;

					var hexColors = ['#FFC300', '#FF5733', '#C70039', '#900C3F', '#581845', '#008000', '#6B8E23', '#ADD8E6', '#87CEFA', '#1E90FF', '#8A2BE2', '#FF1493', '#FFD700', '#FF8C00', '#FF69B4', '#FFA07A', '#00BFFF', '#20B2AA', '#4B0082', '#BA55D3', '#7B68EE', '#00FFFF', '#FF00FF'];

					let dataa = [];

					for (let i = 0; i < cities.length; i++){
						let dict = {
							backgroundColor : hexColors[i],
           					borderColor: hexColors[i],
							label : cities[i],
							data : ranks[i],
							borderWidth: 1
						}
						dataa.push(dict);
					}

					new Chart(ctx, {
						type: 'line',
						data: {
							labels: labelList,
							datasets: dataa
						},
						options: {
							plugins: {
								title: {
									display: true,
									text: 'Closing Rank Trend for ' + branch,
									font: {
										size: 25, 
										weight: 'bold'
									},
									padding: 8,
									fullSize: true,
								}
								},

							maintainAspectRatio: false,
							scales: {
							y: {
								beginAtZero: true
							}
							}
						}
					});
					</script>

				</div>
				</div>
				<div class = "inference">
<h2 class = "infer">INFERENCE</h2>
					<p class = "infd"><li class = "infd">Computer Science has been a popular stream for engineering students for several years now, and it continues to remain in high demand. This trend is reflected even in newer IITs, where Computer Science is gaining priority along with the older IITs. However, there are some exceptions to this trend, as seen in IIT Bhubaneswar and IIT Tirupati.</li><br>
<li class = "infd">We know that Electrical Engineering is the "Mother of All Branches" and Computer Science initially emerged from EEE but Electrical Engineering seems to be losing its priority in newer IITs, which began in 2016, and is stagnant in older ones.</li><br>
<li class = "infd">Similarly, Mechanical Engineering is also losing its priority, particularly in newer IITs, while remaining stagnant in older ones.</li><br>
<li class = "infd">Civil Engineering is another stream that is losing priority across the board, even in older IITs, except for IIT Bombay and IIT Delhi, where it still holds a strong position. This trend has gained momentum after 2020.</li><br>
<li class = "infd">Conclusively, we have observed that circuital branches in older IITs show very less variance in Closing Ranks but the non circuital branches have some variance due to the establishment of new IITs with circuital branches.</li>
</p>
				</div>
				</div>
				

		<!-- Scripts -->
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="assets/js/drop.js"></script>
	
</body>

</html>



<!-- SELECT institute,CR,Year_ FROM fri.orcr_18_22_neutral_abb_cleaned__1_ WHERE abb = \"{$_POST['Branch']}\" and seat_type = 'OPEN' ORDER by institute,Year_"; -->

<!-- SELECT institute,min(OR_),Year_ FROM fri.orcr_18_22_neutral_abb_cleaned__1_ group by institute,Year_"; -->