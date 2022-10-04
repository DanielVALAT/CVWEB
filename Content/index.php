<?php
session_start();
?>



<meta charset="utf-8">
<meta name="viewport" content="width=device-width, target-densitydpi=device-dpi" />
<link rel="stylesheet" href="css.css">
<title>Barraille Lucas</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&amp;display=swap" rel="stylesheet">
<link rel="icon" href="img/Logo_Aninet.svg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Russo+One&display=swap" rel="stylesheet">


<body>

	<div class="nav">
		<img class="nav_long_Logo" src="img/Logo_Mail.svg">

		<div class="nav_long">
			<a href="https://www.github.com/LucasForANinet" class="nav_long_lien">
				<div class="nav_long_svg-wrapper">
					<svg height="40" width="180" xmlns="http://www.w3.org/2000/svg">
						<rect class="nav_long_shape" height="40" width="180" />
						<div class="nav_long_text2">Github</div>
					</svg>
				</div>
			</a>
			<a href="https://aninet.io" class="nav_long_lien">
				<div class="nav_long_svg-wrapper">
					<svg height="40" width="180" xmlns="http://www.w3.org/2000/svg">
						<rect class="nav_long_shape" height="40" width="180" />
						<div class="nav_long_text2">Aninet</div>
					</svg>
				</div>
			</a>
			<a href="Page.html" class="nav_long_lien">
				<div class="nav_long_svg-wrapper">
					<svg height="40" width="180" xmlns="http://www.w3.org/2000/svg">
						<rect class="nav_long_shape" height="40" width="180" />
						<div class="nav_long_text2">Page</div>
					</svg>
				</div>
			</a>
		</div>
	</div>

	<div class="nav_Small">
		<a href=""><img class="nav_Small_Logo" src="img/Logo_Mail.svg"></a>
		<div class="nav_Small_Picture">
			<a href="https://www.github.com/LucasForANinet"><img class="Nav_Small_P1" src="img/github-square-512.svg"></a>
			<a href="https://aninet.io"><img class="Nav_Small_P2" src="img/Logo_Aninet.svg"></a>
			<a href="Page.html"><img class="Nav_Small_P3" src="img/angle-right-solid.svg"></a>
		</div>
	</div>

	<section id="Formulaire">
		<div class="Formu_Title">Formulaire de Contact</div>

		<div class="C_Formu">


			<form class="Formu_D1" action="post_contact.php" method="POST">
				<div class="Formu_D1_D1">
					<label class="" for="inputname">Your Name</label>
					<input type="text" name="name" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
				</div>
				<div class="Formu_D1_D2">
					<label class="" for="inputemail">Your Email</label>
					<input type="text" name="email" id="inputemail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
				</div>
				<div class="Formu_D1_D3">
					<label class="" for="inputservice">Service</label>
					<select class="" name="service" id="inputservice">
						<option value="0">Personal contact</option>
						<option value="1">Commercial contact</option>
						<option value="2">Service contact</option>
					</select>
				</div>
				<div class="Formu_D1_D4">
					<label class="" for="inputbody">Subject</label>
					<input type="text" name="body" id="inputbody" value="<?= isset($_SESSION['inputs']['body']) ? $_SESSION['inputs']['body'] : ''; ?>">
				</div>
				<div class="Formu_D1_D5">
					<label class="" for="inputmessage">Message</label>
					<textarea type="text" name="message" id="inputmessage"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
				</div>
				<div class="Formu_D1_D6">
					<button class="Formu_D1_D6_D1" type="submit" id="inputto">Send</button>
				</div>
			</form>

		</div>
	</section>

	<div class="Formu_D3">
		<?php if (array_key_exists('errors', $_SESSION)) : ?>
			<div class="Formu_Errors">
				<?= implode('<br>', $_SESSION['errors']); ?>
			</div>
		<?php unset($_SESSION['errors']);
		endif; ?>
		<?php if (array_key_exists('success', $_SESSION)) : ?>
			<div class="Formu_Succes">
				Votre email nous a bien été parvenu.
			</div>
		<?php endif; ?>
	</div>

</body>
<div class="Back-nav2"><span> ©Copyright 2022 - Barraillé Lucas</span> Version 2.1.2</div>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);

?>