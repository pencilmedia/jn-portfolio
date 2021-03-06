<?php
// SETTING THE ROOT VARIABLE WE CAN USE IT TO CREATE RELATIVE PATHS
    include("../config.inc");
    $ROOT = '../'; // Set root for relative paths
    $thisPage="details"; 
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo jnTitle ?></title>
<?php include($ROOT . 'inc/head.inc.php'); ?>

</head>
<body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <main>
        <?php include($ROOT . "inc/nav-tier1.inc.php"); ?>
		<!-- BEGIN: Section 1 -->
		<header class="grid grid-2-col main--section">
			<div class="grid--item cushycms">
				<h3>Profit Analyzer Redesign</h3>
				<h5>Role: Project and Design Leadership</h5>
			</div>
			<div class="grid--item cushycms">
				<p>
				In late 2014 Vendavo was feeling market pressure to modernize the user interface of it’s product suite. Users had to user Internet Explorer, customers were driving for accessibility support, and the look and feel was outdated in comparison to other enterprise software solutions.
				</p>
				<p>
					Additionally, with the recent customer delight and successful adoption of new products and product features designed by the User Experience (UX) team Vendavo’s Executive Management and Vendavo’s Customer Advisory Board were eager to improve the user experience across the the entire suite. 
				</p>
				<p>
					UX partnered with Engineering to evaluate various options for addressing these needs and it was agreed to start with a redesign and new user interface for Vendavo’s Profit Analyzer our bread-and-butter solution. We would also apply a design system that was in the works for Vendavo’s new Deal Guide solution.
				</p>
			</div>
		</header>
		<!-- End: Section 1 -->
		<!-- BEGIN: Section 2 -->
		<section class="grid grid-1-col grid--space main--section cushycms">
			<article class="grid grid-2-col grid--space">
				<h3 class="underline">Research and Analysis</h3>
				<div class="grid--item grid--col-1">
					<p>
						With dozens of Fortune 500 customers and differing visions internally on how best to support our users and customers indepth research was critical. We spent weeks traveling the country observing our users and interviewing stakeholders.
					</p>
					<p>
						We conducted 26 contextual inquiries, 34 stakeholder interviews across 12 customers, and 8 roles. 
					</p>
				</div>
				<div class="grid--item grid--col-2">
					<img src="https://via.placeholder.com/540x300" alt="User-Centered Design project" />
				</div>
			</article>
			<article class="grid grid-2-col grid--space">
				<div class="grid--item grid--col-1">
					<p>
						With lots of user data we began to model them developing personas, user journeys, and stories. 
					</p>
				</div>
				<div class="grid--item grid--col-2">
					<img src="https://via.placeholder.com/540x300" alt="User-Centered Design project" />
				</div>
			</article>
			<article class="grid grid-2-col grid--space">
				<div class="grid--item grid--col-1">
					<p>
						We identified three user personas and began socializing them with the organization making them visible and available for review and comment.
					</p>
					<ul>
						<li>Terri our Data Sleuth (primary)</li>
						<li>Kevin the Investigator</li>
						<li>Mohan the Monitor </li>
					</ul>
				</div>
				<div class="grid--item grid--col-2">
					<img src="https://via.placeholder.com/540x300" alt="User-Centered Design project" />
				</div>
			</article>
			<article class="grid grid-2-col grid--space">
				<div class="grid--item grid--col-1">
					<p>
						We presented key findings from our user research and introduced the user personas and stories to the executive team and department leads proposing goals and an approach to the redesign gaining alignment across the organization.
					</p>
				</div>
				<div class="grid--item grid--col-2">
					<img src="https://via.placeholder.com/540x300" alt="User-Centered Design project" />
				</div>
			</article>
		</section>
		<!-- END: Section 2 -->
		<!-- BEGIN: Section 3 -->
		<section class="grid grid-1-col main--section cushycms">
			<article class="grid grid-2-col grid--space">	
				<h3 class="underline">Design and Refinement</h3>
				<div class="grid--item grid--col-1">
					<p>
						We introduced three related tiers, each targeting one of our three personas. Our primary persona, Terri, will deliver analysis tools across the tiers to allow her pier to efficiently complete their tasks.
					</p>
					<p>
						Vendavo will deliver “Analysis Packs” focusing on specific types of price analysis.
					</p>
				</div>
				<div class="grid--item grid--col-2">
					<img src="https://via.placeholder.com/540x300" alt="User-Centered Design project" />
				</div>
			</article>
			<article class="grid grid-2-col grid-space">
				<div class="grid--item grid--col-1">
					<p>
					Over several design sprints the team iterated on designs through whiteboard sessions, wireframes, high fidelity mock-ups, and prototypes with user and internal feedback sessions informing our design decisions.
					</p>
				</div>
				<div class="grid--item grid--col-2">
					<img src="https://via.placeholder.com/540x300" alt="User-Centered Design project" />
				</div>
			</article>
		</section>
		<!-- END: Section 3 -->
        <?php include($ROOT . "inc/foot.inc.php"); ?>   
    </main> 
</body>
</html>
