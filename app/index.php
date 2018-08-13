<?php
// SETTING THE ROOT VARIABLE WE CAN USE IT TO CREATE RELATIVE PATHS
    include("config.inc");
    $ROOT = '/'; // Set root for relative paths
    $thisPage="home"; 
?>
<!DOCTYPE html>
<html class="no-js">
<head>
<title><?php echo jnTitle ?></title>
<?php include("inc/head.inc.php"); ?>
</head>
<body class="homepage">
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <main>
		<?php include("inc/nav.inc.php"); ?>
		<header class="grid grid-2-col main--section bio" id="jump-about">
			<section class="grid--item bio--photo cushycms">
				<img src="assets/images/photo_jn.png" alt="Joel Nave: Product Design Leader" />
			</section>
			<section class="grid--item bio--info cushycms">
				<h3>Joel Nave</h3>
				<h5 class="underline">Product Design Leader</h5>
				<ul class="list--no-bullet">
					<li>
						<a href="mailto:joelnave@gmail.com"><i class="far fa-envelope"></i>joelnave@gmail.com</a>
					</li>
					<li>
						<a href="https://www.linkedin.com/in/joelnave/"><i class="fab fa-linkedin"></i>View on LinkedIn</a>
					</li>
					<li>
						<a href="#"><i class="fas fa-download"></i>Download Resume</a>
					</li>
				</ul>
				<p class="pull-left">Twenty years of product design experience with fifteen years experience managing teams responsible for user research,
					interaction design, visual design, prototyping and user validation. Skilled at building innovative, cohesive design
					teams that deliver value while communicating effectively with engineering, stakeholders, and customers. Have delivered
					products, users experiences, and design systems for large and small companies for mobile, tablet, and desktop devices.
				</p>
				<ul class="ul-list pull-left">
					<li>Introduced user entered design at four companies.</li>
					<li>Launched a user experience team at three companies.</li>
					<li>Over saw the development of design systems at three companies.</li>
					<li>Hands on experience with all phases of software product design.</li>
				</ul>
			</section>
		</header>
		<section class="main--section projects cushycms" id="jump-projects">
			<h3>Projects</h3>
			<div class="projects--thumbs projects--featured">
				<a href="projects/details.php" class="project-image">
					<img src="assets/images/projects/etr_campaign_builder.svg" alt="Thumbnail">
					<h5 class="project-title">eTrigue DemandCenter Redesign</h5>
					<button>View this Project</button>
				</a>
				<a href="projects/details.php" class="project-image">
					<img src="assets/images/projects/ven_pa_dashboard.svg" alt="Thumbnail">
					<h5 class="project-title">Vendavo Profit Analyzer Redesign</h5>
					<button>View this Project</button>
				</a>
				<a href="projects/details.php" class="project-image">
					<img src="assets/images/projects/ven_dg_responsive.svg" alt="Thumbnail">
					<h5 class="project-title">Vendavo Deal Guide Design</h5>
					<button>View this Project</button>
				</a>
			</div>
			<div class="projects--thumbs projects-archive">
				<a href="#" class="project-image">
					<img src="assets/images/projects/4_bom_adv.png" alt="Thumbnail">
				</a>
				<a href="#" class="project-image">
					<img src="assets/images/projects/5_account_stats_dashboard.png" alt="Thumbnail">
				</a>
				<a href="#" class="project-image">
					<img src="assets/images/projects/6_vpa.png" alt="Thumbnail">
				</a>
				<a href="#" class="project-image">
					<img src="assets/images/projects/7_vsa.png" alt="Thumbnail">
				</a>
				<a href="#" class="project-image">
					<img src="assets/images/projects/8_vsn.png" alt="Thumbnail">
				</a>
				<a href="#" class="project-image">
					<img src="assets/images/projects/9_songo.png" alt="Thumbnail">
				</a>
				<a href="#" class="project-image">
					<img src="assets/images/projects/10_blueone.png" alt="Thumbnail">
				</a>
				<a href="#" class="project-image">
					<img src="assets/images/projects/11_konablue.png" alt="Thumbnail">
				</a>
			</div>
		</section>
		<section class="grid grid-2-col grid--space main--section process" id="jump-process">
			<h3>Process</h3>
			<section class="grid--item grid--col-1 cushycms">
				<img src="assets/images/ucd_lowres.png" alt="User-Centered Design Process" />
			</section>
			<section class="grid--item grid--col-2 cushycms">
				<p>
				Nulla do ad velit occaecat deserunt. Eu ad aute ex reprehenderit do occaecat excepteur adipisicing et incididunt laborum laborum enim. Deserunt ut aliquip mollit veniam do eiusmod in est officia eiusmod ea deserunt.
				</p>
			</section>
		</section>
	<?php include("inc/foot.inc.php"); ?>
    </main> 
</body>
</html>
