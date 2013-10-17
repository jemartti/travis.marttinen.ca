<?php require("../header.php"); ?>

<header>
	<h1><a href="/root/portfolio.php">mcr</a></h1>
</header>
<div class="main">
	<h2>3d graphics project</h2>
	<h3><a href="/assets/pdf/mcr.pdf">pdf</a></h3>
	<h3><a href="https://github.com/jemartti/mcr">github</a></h3>
	<p>During my 4A term at the University of Waterloo, I took a course titled CS488 (Introduction to Computer Graphics). As a course requirement, we had to complete a final project of our choosing. I decided to implement a simple multi-resolution curve editor (based off Adam Finkelstein's 1996 thesis). The first step was to implement a b-spline curve creator/editor. From there, I added in the multi-resolution functionality.</p>
	<a href="/assets/img/portfolio/mcrchess.jpg" title="Sample image of chess pieces drawn using the application" class="img">
		<img src="/assets/img/portfolio/mcrchess.jpg" alt="Sample image of chess pieces drawn using the application"/>
	</a>
	<p>Multi-resolution curve editing starts by defining a curve (cubic b-spline) using a large number of data points. Once this has been done, we can then scale down the resolution of the curve to use fewer data points still keeping the overall characteristics of the curve. This scaling is reversible, and the curve can be scaled linearly between the original number and three data points repeatedly without losing any information. The data points on the curve can be edited at any resolution. An example follows:</p>
	<a href="/assets/img/portfolio/mcrmulti1.jpg" title="Showing a high-resolution curve" class="img">
		<img src="/assets/img/portfolio/mcrmulti1.jpg" alt="Showing a high-resolution curve"/>
	</a>
	<p>We start with a curve consisting of many data points.</p>
	<a href="/assets/img/portfolio/mcrmulti2.jpg" title="Scaling down the curve" class="img">
		<img src="/assets/img/portfolio/mcrmulti2.jpg" alt="Scaling down the curve"/>
	</a>
	<p>We next scale down the resolution of the curve, maintaining the overall characteristics of the curve.</p>
	<a href="/assets/img/portfolio/mcrmulti3.jpg" title="Editing the overall sweep of the curve" class="img">
		<img src="/assets/img/portfolio/mcrmulti3.jpg" alt="Editing the overall sweep of the curve"/>
	</a>
	<p>The overall sweep of the curve is then changed.</p>
	<a href="/assets/img/portfolio/mcrmulti4.jpg" title="Restoring the original resolution of the curve" class="img">
		<img src="/assets/img/portfolio/mcrmulti4.jpg" alt="Restoring the original resolution of the curve"/>
	</a>
	<p>Finally, we restore the original resolution of the curve. We can see that all the original detail still exists, with just the overall characteristics of the curve having changed.</p>
</div>

<?php require("../footer.php"); ?>
