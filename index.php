<?php
// All Projects

function getSortKey($folder)
{
	$filePath = $folder . '/project.txt';
	try {
		$dateString = preg_split('/\r\n|\r|\n/', file_get_contents($filePath))[4];
		$dateTime = DateTime::createFromFormat('Y/m/d', $dateString);
		if ($dateTime != false) {
			return $dateTime->getTimestamp();
		} else {
			return PHP_INT_MAX;
		}
	} catch (Exception $e) {
		return PHP_INT_MAX;
	}
}

function sortFoldersByData($folderPath)
{
	$folders = array_filter(glob($folderPath . '/*'), 'is_dir');
	usort($folders, fn ($a, $b) => getSortKey($b) - getSortKey($a));
	return $folders;
}

$folderPath = 'projects/';
$sortedFolders = sortFoldersByData($folderPath);

$projects = [];
foreach ($sortedFolders as $file) {
	$projects[] = preg_split('/\r\n|\r|\n/', file_get_contents($file  . "/project.txt"));
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="shortcut icon" href="image/icons/icon.png" type="image/x-icon">
	<meta name="description" content="Welcome to my profile, my name is Thomas Emad. I'm a Backend Developer PHP, And I Love programming and Technology">
	<title>Thomas Emad || Profile</title>
</head>

<body>
	<!-- Start Code Header -->
	<header>
		<div class="container">
			<a href="index.php" class="title">Thomas <span class="colorText">E</span>mad</a>
			<nav>
				<ul>
					<li><a href="#projects">Projects</a></li>
					<li><a href="https://github.com/thomas-Emad" target="_blank">GitHub</a></li>
					<li><a href="https://www.linkedin.com/in/thomas-emad/" class="btn" target="_blank">Contact</a></li>
				</ul>
				<a class="icon_list"><i class="fa-solid fa-bars "></i></a>
			</nav>
		</div>
	</header>
	<section class="leading">
		<div class="container pd">
			<div>
				<h2>Welcome to my <span class="colorText">house</span></p>
				</h2>
				<h3>Hi, I'm Thomas, a backend developer, and this is my favorite hobby</h3>
			</div>
			<img src="image/first.png">
		</div>
	</section>
	<section class="services">
		<div class="container pd">
			<div class="title-section">
				<h3>What We Got Here</h3>
				<p>You will get all our knowledge and technological expertise</p>
			</div>
			<div class="parent">
				<div class="box">
					<img src="image/fastTime.jpg">
					<div class="text">
						<b>Fast Site</b>
						<p>The most important thing is to perform well</p>
					</div>
				</div>
				<div class="box">
					<img src="image/verification.jpg">
					<div class="text">
						<b>Verification</b>
						<p>You have to secure the site because you don't know what the customer is doing</p>
					</div>
				</div>
				<div class="box">
					<img src="image/code.jpg">
					<div class="text">
						<b>Clean coding</b>
						<p>Simple and understandable code for everyone</p>
					</div>
				</div>
				<div class="box">
					<img src="image/time.jpg">
					<div class="text">
						<b>on The time</b>
						<p>Delivery ahead of schedule too!!</p>
					</div>
				</div>
				<div class="box">
					<img src="image/message.jpg">
					<div class="text">
						<b>Anytime we are here</b>
						<p>Send to us and soon you will know the answer</p>
					</div>
				</div>
				<div class="box">
					<img src="image/iconLaravel.png">
					<div class="text">
						<b>Latest technology</b>
						<p>What distinguishes this framework is that it is simple and strong in security</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="skills">
		<div class="container pd">
			<div class="title-section">
				<h3>What are my skills?</h3>
				<p>This is not all I know for sure but this is what you need to know</p>
			</div>
			<div class="parent">
				<div class="box">
					<img src="image/icons/html.png"><span>HTML</span>
				</div>
				<div class="box">
					<img src="image/icons/css.png"><span>CSS</span>
				</div>
				<div class="box">
					<img src="image/icons/php.png"><span>PHP</span>
				</div>
				<div class="box">
					<img src="image/icons/mysql.png"><span>MySQL</span>
				</div>
				<div class="box">
					<img src="image/icons/laravel.png"><span>Laravel</span>
				</div>
				<div class="box">
					<img src="image/icons/objects.png"><span>OOP</span>
				</div>
				<div class="box">
					<img src="image/icons/git.png"><span>Git</span>
				</div>
				<div class="box">
					<img src="image/icons/github.png"><span>GitHub</span>
				</div>
				<div class="box">
					<img src="image/icons/illustrator.png"><span>Illustrator</span>
				</div>
			</div>
		</div>
	</section>
	<section class="projects" id="projects">
		<div class="container pd">
			<div class="title-section">
				<h3>My Last Projects</h3>
				<p>These are my latest projects, just a few but they mean a lot</p>
			</div>
			<div class="parent">
				<?php
				foreach ($projects as $project) {
					$icons = explode(",", str_replace(['[', ']', '\'', ' '], '', $project[3]));
					echo "
						<a href='$project[0]' class='box' target='__blank'>
							<img src='$project[1]' class='bg' alt='background Project'>
							<div class='content'>
								<div class='icons'>";
					foreach ($icons as $len) {
						echo "<img src='image/icons/$len.png'>";
					}
					echo "	</div>
								<div class='title'>
									$project[2]
								</div>
							</div>
						</a>
					";
				}
				?>
			</div>
			<div class="showMore">More..</div>
		</div>
	</section>
	<section class="message">
		<div class="container">
			<p>"We are programmers. Everything he created can be made by everyone, but you do not have the right to take
				what he made without permission.."</p>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="content">
				<p>You can contact me through:</p>
				<div class="icons">
					<a href="https://www.facebook.com/profile.php?id=100090428432562" target="_blank"><img src="image/icons/facebook.png" alt="icon facebook"></a>
					<a href="https://www.linkedin.com/in/thomas-emad/" target="_blank"><img src="image/icons/linkedin.png" alt="icon linkedin"></a>
					<a href="https://github.com/thomas-Emad" target="_blank"><img src="image/icons/github.png" alt="icon github"></a>
					<a href="mailto:thomas.emad.shawky.com"><img src="image/icons/mail.png" alt="icon mail"></a>
				</div>
			</div>
	</footer>
	<script src="js/all.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>