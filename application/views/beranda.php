<html><title></title>
<head>
</head>
<body>

	<div id="container">
		<h1><?= $title ?> </h1>

		<div id="body">
			Nama     : <?php echo $this->session->set_userdata('nmkppn') ?></br>
			Username : <?php echo $this->session->set_userdata('nmuser') ?></br>
			Role   : <?php echo $this->session->set_userdata('role') ?></br>
			<a href="<?php echo site_url('/keluar') ?>">Keluar</a>
		</div>

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>

</body>
</html>