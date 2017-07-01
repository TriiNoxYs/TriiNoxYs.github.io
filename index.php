<!DOCTYPE html>
<html lang="en-us">
    <head>
	    <!--
            HTTP redirect to HTTPS is now managed by Nginx
	    <script type="text/javascript">
    		var host = "triinoxys.fr";
    		if ((host == window.location.host) && (window.location.protocol != "https:"))
		    window.location.protocol = "https";
	    </script>
	    -->


	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="TriiNoxYs's Website">
	    <meta name="keywords" content="Java, C, C++, HTML, CSS, PHP, Python, JavaScript, Programming, Developing, Programmation, Developpement, Minecraft, Bukkit, Spigot, BungeeCord, Proxy, Redis, SQL, TriiNoxYs, DragonDistrict, SimpleGUIMaker, Code, Evenzia, HoneyHive">
	    <meta name="author" content="TriiNoxYs">

	    <title>TriiNoxYs - French Developer</title>

	    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
	    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

	    <link rel="stylesheet" type="text/css" href="/css/style.css" media="screen">
	    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700'>

	    <script type="text/javascript" src="/js/jquery-1.12.3.js"></script>
	    <script type="text/javascript" src="/js/progressbar.js"></script>
	    <script type="text/javascript" src="/js/circle.js"></script>
		<script type="text/javascript" src="/js/jquery.appear.js"></script>
    </head>

    <body>
		<section class="page-header">
			<h1 class="user-name effect-distressed">TriiNoxYs</h1>
			<!-- <h1> WIP, website not finished !!</h1> -->
	        <h2 class="user-tagline">French Dev'</h2>

	        <a href="https://github.com/TriiNoxYs" class="btn" target="_blank">GitHub</a>
	        <a href="#projects" class="btn">Projects</a>
	        <a href="#skills" class="btn">Skills</a>
	        <a href="#contact" class="btn">Contact</a>
		</section>
		<section class="main-content">
	  		<h3>About <span>Me</span></h3>

	        <p>I'm a 16 years old French developer. I mostly develop with Java on Eclipse but also in C++ and others programming languages. I know bases of HTML/CSS/PHP/JS but I prefer developing apps/software/etc instead of websites/webapps/etc. I also like playing with system stuff like web servers, reverse proxies or databases.
	        <br> Finally, I'm a Linux lover <3. (But I also use Windows, especially for gaming.)</p>
	        <p>I create some basic apps, some mini-games and also some Bukkit/Spigot plugins (for Minecraft).</p>
	        <p>You can see a list of the programming languages I know in the <a href="#skills">skills</a> section.</p>
		</section>

		<section class="main-content" id="projects">
	  		<h3>My <span>projects</span></h3>

	        <p>
				<ul style="list-style-type:disc">
					<li><a class="project-link" href="http://github.com/triinoxys/triinoxys.github.io" target="_blank">triinoxys.github.io:</a> The site you're watching.</li>
					<li><a class="project-link" href="http://triinoxys.fr/partybungee" target="_blank">PartyBungee:</a> A BungeeCord plugin for creating group of players (parties) and play together.</li>
	  				<li><a class="project-link" href="http://triinoxys.fr/simpleguimaker" target="_blank">SimpleGUIMaker:</a> A simple minecraft plugin that allow you to easily create GUI directly ingame.</li>
	  				<li><a class="project-link" href="http://triinoxys.fr/fallenkingdom" target="_blank">FallenKingdom:</a> A FallenKingdom plugin for minecraft that follows originals rules of the game.</li>
	  				<li><a class="project-link" href="http://triinoxys.fr/callme" target="_blank">CallMe:</a> A minecraft plugin to send calls, sms, etc to others players and create group calls.</li>
	  				<li><a class="project-link" href="http://triinoxys.fr/slackbotcontroller" target="_blank">Slackbot Controller:</a> A java app to send message as a bot to Slack. (Works with webhooks)</li>
					  <li><a class="project-link" href="http://triinoxys.fr/pypac" target="_blank">PyPac:</a> A verry simple pacman written in Python (made at school).</li>
	  				<li><a class="project-link" href="http://triinoxys.fr/ddapi" target="_blank">DDApi:</a> A BungeeCord <b>and</b> Spigot API used by all DDPlugins.</li>
	  				<li><a class="project-link" href="http://triinoxys.fr/ddfriends" target="_blank">DDFriends:</a> A BungeeCord plugin to add friends and parties, for DragonDistrict.</li>
	  				<li><a class="project-link" href="http://triinoxys.fr/ddhub" target="_blank">DDHub:</a> A Spigot plugin to manage server hub, for DragonDistrict.</li>
	  				<li><a class="project-link" href="http://triinoxys.fr/ddjump" target="_blank">DDJump:</a> A Spigot plugin to easily create a jump, for DragonDistrict.</li>
	  				<li><a class="project-link" href="http://triinoxys.fr/ddmanager" target="_blank">DDManager:</a> A BungeeCord plugin to manage a multi-server, for DragonDistrict.</li>
	  				<li><a class="project-link" href="http://triinoxys.fr/ddmod" target="_blank">DDMod:</a> A BungeeCord plugin to moderate a mutli-server (ban, kick, etc), for DragonDistrict.</li>
	  				<li><a class="project-link" href="http://triinoxys.fr/ddranks" target="_blank">DDRanks:</a> A Spigot plugin to manage ranks, for DragonDistrict.</li>
	  				<li><a class="project-link" href="http://triinoxys.fr/ddranksbungee" target="_blank">DDRanksBungee:</a> An adaptation of DDRanks to work with Bungeecord, for DragonDistrict.</li>
	  				<li><a class="project-link" href="http://triinoxys.fr/ddsigns" target="_blank">DDSigns:</a> A Spigot plugin to create server-signs, for DragonDistrict.</li>
	  				<li>All my others projects are private, maybe I'll put them open-source later :)</li>
				</ul>
	        </p>
	    </section>

	    <section class="progressbar-content" id="skills">
	  		<h3>My <span>skills</span></h3>

	        <!-- Progressbar Java -->
	        <div class="progressbar" id="pb-java">
		        <script>
		        	drawcircle(0.55, "#pb-java")
		        </script>
				<h4>Java</h4>
	        </div>

	        <!-- Progressbar HTML/CSS/PHP -->
	        <div class="progressbar" id="pb-html-css-php">
		        <script>
		        	drawcircle(0.25, "#pb-html-css-php")
		        </script>
				<h4>HTML, CSS, PHP</h4>
	        </div>

	        <!-- Progressbar MySQL -->
	        <div class="progressbar" id="pb-mysql">
		        <script>
		        	drawcircle(0.30, "#pb-mysql")
		        </script>
				<h4>MySQL</h4>
	        </div>

	        <!-- Progressbar Bukkit/Spigot -->
	        <div class="progressbar" id="pb-bukkitspigot">
		        <script>
		        	drawcircle(0.65, "#pb-bukkitspigot")
		        </script>
				<h4>Bukkit/Spigot</h4>
	        </div>

		</section>

		<section class="progressbar-content" id="skills">

	        <!-- Progressbar C++ -->
	        <div class="progressbar" id="pb-cplusplus">
		        <script>
		        	drawcircle(0.15, "#pb-cplusplus")
		        </script>
				<h4>C++</h4>
	        </div>

	        <!-- Progressbar Python -->
	        <div class="progressbar" id="pb-python">
		        <script>
		        	drawcircle(0.35, "#pb-python")
		        </script>
				<h4>Python</h4>
	        </div>

	        <!-- Progressbar Lua -->
	        <div class="progressbar" id="pb-lua">
		        <script>
		        	drawcircle(0.10, "#pb-lua")
		        </script>
				<h4>Lua</h4>
	        </div>

	        <!-- Progressbar BungeeCord -->
	        <div class="progressbar" id="pb-bungeecord">
		        <script>
		        	drawcircle(0.60, "#pb-bungeecord")
		        	console.log(' '); //JUST TO SEPARATE LOGS IN CONSOLE
		        </script>
				<h4>BungeeCord</h4>
	        </div>

		</section>

		<section class="main-content" id="contact">
			<h3>Contact <span>me</span></h3>
			 <p class="contact">
			 Mail: <a href="mailto:contact@triinoxys.fr">contact@triinoxys.fr</a><br>
			 Discord: <a target="_blank" href="http://discord.triinoxys.fr">discord.triinoxys.fr</a><br>
			 Teamspeak: <a href="ts3server://ts.triinoxys.fr">ts.triinoxys.fr</a><br>
			 </p>
		</section>

		<section class="main-content">
			<footer class="site-footer">
  	            Site maintained by <a href="https://github.com/TriiNoxYs">TriiNoxYs</a>.
  	         </footer>
		</section>

		<!--
		<div style="position: fixed; z-index: -99; width: 100%; height: 100%">
    		<iframe frameborder="0" height="100%" width="100%"
    			src="https://youtube.com/embed/pPMWVShq-kI?autoplay=1&controls=0&showinfo=0&autohide=1">
  			</iframe>
		</div>
		-->

	    <script type="text/javascript">
	      var $root = $('html, body');
	      $('a').click(function() {
	          $root.animate({
	              scrollTop: $( $.attr(this, 'href') ).offset().top
	          }, 500);
	          return false;
	      });
		</script>
	</body>
</html>

<!-- By TriiNoxYs -->
