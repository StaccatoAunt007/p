	<?php 

		// Minecraft Server
	    $data = file_get_contents("http://api.gametracker.rs/demo/json/server_info/37.187.137.123:25565/");
	    $data = json_decode($data);
	    $players1 = $data->players;
	    /* If you need more info acitve this!
	    $gamename1 = $data->gamename;
	    $status1 = $data->status;
	    $name1 = $data->name;
	    $ip1 = $data->ip;
	    $playersmax1 = $data->playersmax;*/

		// Discord Server
		$members = json_decode(file_get_contents('https://discord.com/api/guilds/800523435612569651/widget.json'), true)['members'];
		$membersCount = 1;
		foreach ($members as $member) {
	    	if ($member['status'] == 'online') {
	        	$membersCount++;
	    	}
		}

	?>	

	<!-- Toolbar -->
	<div class="toolbar py-1">
		<div class="container-fluid container-pixo">
			<div class="row d-flex justify-content-between">
				<div class="col-6 d-flex align-items-center">
					<div class="minecraft-server me-auto toolbar-left">
						<div class="d-flex">
    						<img src="assets/images/minecraft-icon.svg" class="img-fluid">
    						<div class="ms-2">
        						<h4 class="minecraft-server-title">Minecraft <!--<span class="dot-online"></span>--></h4>
        						<span class="minecraft-server-players">Online: <?php echo $players1; ?></span>
    						</div>
						</div>
					</div>
				</div>
				<div class="col-6 d-flex justify-content-between">
					<div class="d-flex align-items-center ms-auto toolbar-right">
						<div class="d-flex">
    						<div class="me-2">
        						<h4 class="discord-server-title">Discord <!--<span class="dot-online"></span>--></h4>
        						<span class="discord-server-players text-center">Online: <?php echo $membersCount; ?></span>
    						</div>
    						<i class="fab fa-discord"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Navbar -->
	<nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark">
  		<div class="container-fluid container-pixo">
    		<a class="navbar-brand" href="index.php">
    			<img src="assets/images/logo.png">
    		</a>
    		<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPixo" aria-controls="navbarPixo" aria-expanded="false" aria-label="Toggle navigation">
      			<span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
                <span class="sr-only">Toggle navigation</span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarPixo">
    			<ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
      			<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        			<li class="nav-item">
          				<a class="nav-link active" aria-current="page" href="index.php">Home</a>
        			</li>
        			<li class="nav-item">
          				<a class="nav-link" href="#">Forum</a>
        			</li>
        			<li class="nav-item">
          				<a class="nav-link" href="#">Map</a>
        			</li>
        			<li class="nav-item">
          				<a class="nav-link" href="rules.php">Rules</a>
        			</li>
        			<li class="nav-item">
          				<a class="nav-link" href="staffs.php">Staffs</a>
        			</li>
        			<li class="nav-item">
          				<a class="nav-link" href="faq.php">FAQ</a>
        			</li>
      			</ul>
      			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        			<li class="nav-item">
          				<a href="" class="btn btn-custom"><i class="fad fa-shopping-basket"></i> Store</a>
        			</li>
      			</ul>
    		</div>
  		</div>
	</nav>