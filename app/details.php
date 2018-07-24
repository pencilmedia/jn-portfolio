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
<title><?php echo hmpgTitle ?></title>
<?php include("inc/head.inc.php"); ?>
</head>
<body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <main>
        <?php include("inc/nav.inc.php"); ?>
		<article class="grid grid-2-col hero">
			<section class="grid--item hero--heading">
				<h3>Profit Analyzer Redesign</h3>
				<h5>Role: Project and Design Leadership</h5>
			</section>
			<section class="grid--item hero--info">
				<p>
					Occaecat ad aliqua do Lorem elit laborum irure voluptate ipsum exercitation laboris nostrud. Lorem deserunt in non ipsum occaecat. Et fugiat eu Lorem sit ea. Nisi ipsum minim eu sint. Sit duis esse ad minim irure.
				</p>
			</section>
			<section>
				<h3>Research and Analysis</h3>
			</section>
		</article>
        <?php include("inc/foot.inc.php"); ?>   
    </main> 
</body>
</html>
