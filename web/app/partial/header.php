<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo $this->community . " &bullet; " . $this->title; ?></title>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css"/>
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/bootstrap.min.css"/>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='//fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo $GLOBALS['domainname']; ?>app/css/bootstrap-duration-picker.css">
		<script src="<?php echo $GLOBALS['domainname']; ?>app/js/bootstrap-duration-picker.js"></script>
		<link href="<?php echo $GLOBALS['domainname']; ?>app/css/pe-icon-7-stroke.css" rel="stylesheet" />
		<link href="<?php echo $GLOBALS['domainname']; ?>app/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo $GLOBALS['domainname']; ?>app/css/animate.min.css" rel="stylesheet"/>
		<link href="<?php echo $GLOBALS['domainname']; ?>app/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
	</head>
	<body>
		<div class="wrapper">
			<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">
				<div class="sidebar-wrapper">
					<div class="logo">
						<div class="simple-text">
							<?php echo $this->community; ?>
						</div>
					</div>
					<ul class="nav">
						<li>
							<a href="<?php echo $GLOBALS['domainname']; ?>">
								<i class="pe-7s-graph"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<?php
							$servers = dbquery('SELECT * FROM servers');
							foreach($servers as $server) {
								echo '
									<li>
										<a href="' . $GLOBALS['domainname'] . 'server/' . $server['connection'] . '">
											<i class="pe-7s-note2"></i>
											<p>' . $server['name'] . '</p>
										</a>
									</li>
								';
							}
						?>
						<!--
						<li>
							<a href="user.php">
								<i class="pe-7s-users"></i>
								<p>User Search</p>
							</a>
						</li>-->
					</ul>
				</div>
			</div>