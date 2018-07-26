<?php
// SETTING THE ROOT VARIABLE WE CAN USE IT TO CREATE RELATIVE PATHS
    include("config.inc");
    $ROOT = '/'; // Set root for relative paths
    $thisPage="home"; 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
		<article class="grid grid-2-col bio">
			<section class="grid--item bio--photo">
				<img src="assets/images/photo_jn.png" alt="Joel Nave: Product Design Leader" />
			</section>
			<section class="grid--item bio--info">
				<h3>Joel Nave</h3>
				<h5 class="underline">Product Design Leader</h5>
				<ul class="list--no-bullet">
					<li>
						<a href="mailto:joelnave@gmail.com">joelnave@gmail.com</a>
					</li>
					<li>
						<a href="#">View on LinkedIn</a>
					</li>
					<li>
						<a href="#">Download Resume</a>
					</li>
				</ul>
				<p>Twenty years of product design experience with fifteen years experience managing teams responsible for user research,
					interaction design, visual design, prototyping and user validation. Skilled at building innovative, cohesive design
					teams that deliver value while communicating effectively with engineering, stakeholders, and customers. Have delivered
					products, users experiences, and design systems for large and small companies for mobile, tablet, and desktop devices.
					<ul>
						<li>Introduced user entered design at four companies.</li>
						<li>Launched a user experience team at three companies.</li>
						<li>Over saw the development of design systems at three companies.</li>
						<li>Hands on experience with all phases of software product design.</li>
					</ul>
				</p>
			</section>
		</article>
		<article class="projects">
			<h3>Projects</h3>
			<div class="projects--thumbs">
				<div class="projects--featured">
					<span>
						<img src="assets/images/projects/1_demandcenter_campaign_builder.png" alt="Thumbnail">
						<h5>eTrigue DemandCenter Redesign</h5>
					</span>
					<span>
						<img src="assets/images/projects/2_ sapare_dashboard.png" alt="Thumbnail">
						<h5>Vendavo Profit Analyzer Redesign</h5>
					</span>
					<span>
						<img src="assets/images/projects/3_vsnb.png" alt="Thumbnail">
						<h5>Vendavo Deal Guide Design</h5>
					</span>
				</div>
				<img src="assets/images/projects/4_bom_adv.png" alt="Thumbnail">
				<img src="assets/images/projects/5_account_stats_dashboard.png" alt="Thumbnail">
				<img src="assets/images/projects/6_vpa.png" alt="Thumbnail">
				<img src="assets/images/projects/7_vsa.png" alt="Thumbnail">
				<img src="assets/images/projects/8_vsn.png" alt="Thumbnail">
				<img src="assets/images/projects/9_songo.png" alt="Thumbnail">
				<img src="assets/images/projects/10_blueone.png" alt="Thumbnail">
				<img src="assets/images/projects/11_konablue.png" alt="Thumbnail">
			</div>
		</article>
		<article class="grid grid-2-col grid--space">
			<h3>Process</h3>
			<section class="grid--item grid--col-1">
				<img src="assets/images/ucd_lowres.png" alt="User-Centered Design Process" />
			</section>
			<section class="grid--item grid--col-2">
				<p>
				Nulla do ad velit occaecat deserunt. Eu ad aute ex reprehenderit do occaecat excepteur adipisicing et incididunt laborum laborum enim. Deserunt ut aliquip mollit veniam do eiusmod in est officia eiusmod ea deserunt.
				</p>
			</section>
		</article>
        <?php include("inc/foot.inc.php"); ?>   
    </main> 
</body>
</html>
