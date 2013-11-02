<?php require("../header.php"); ?>

<header>
	<h1><a href="/root/portfolio.php">arcestra builder</a></h1>
</header>
<div class="main">
	<h2>3d application</h2>
	<h3><a href="https://arcestra.com/index2.jsp">arcestra.com</a></h3>
	<p>At Arcestra, I performed feature development on the Arcestra 3D product suite using the Qt and OpenGL APIs (with C++). The main project I worked on was the Arcestra Builder application, used to quickly and easily render 3D models from 2D floorplans and then define walkthroughs and arrange furniture (along with other functionality) on these 3D models.</p>
	<a href="/assets/img/portfolio/screenjpb3.jpg" title="Floorplan with Line Length Showing and Snap Tolerance" class="img">
		<img src="/assets/img/portfolio/screenjpb3.jpg" alt="Floorplan with Line Length Showing and Snap Tolerance"/>
	</a>
	<p>One feature I developed was related to the line tool. I added functionality to view and edit the length of a line/wall as it is being drawn, as well as the ability to adjust the tolerance for snapping (to other lines, guidelines, etc.).</p>
	<a href="/assets/img/portfolio/screenjpb2.jpg" title="Move (Furniture) Tool, Guidelines, Tool UI, Furniture Snapped, Rulers" class="img">
		<img src="/assets/img/portfolio/screenjpb2.jpg" alt="Move (Furniture) Tool, Guidelines, Tool UI, Furniture Snapped, Rulers"/>
	</a>
	<p>I also developed the move tool and added the rule and guideline GUI constructs. The move tool allows for the movement of various objects, notably furniture. This tool includes functionality to snap furniture (centre or bounding box) to guidelines and guideline intersections, as well as the movement of groups of furniture.</p>
	<a href="/assets/img/portfolio/screenjpb1.jpg" title="Various UI including Toolbar Grouping, Wall Thickness, Recent Items, etc." class="img">
		<img src="/assets/img/portfolio/screenjpb1.jpg" alt="Various UI including Toolbar Grouping, Wall Thickness, Recent Items, etc."/>
	</a>
	<p>Amongst other features, I also contributed to many UI changes. One such change was the grouping of tools in the toolbar, seen in the above image. Other small changes included a recent files menu and the ability to edit the thickness of walls.</p>
</div>

<?php require("../footer.php"); ?>
