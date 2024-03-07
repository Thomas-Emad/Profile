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
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="image/icons/icon.png" type="image/x-icon">
	<meta name="description" content="Welcome to my profile, my name is Thomas Emad. I'm a Backend Developer PHP, And I Love programming and Technology">
	<title>Thomas Emad || Profile</title>
	<script>
		window.addEventListener("load", function() {
			document.getElementsByClassName("loader")[0].style.display = "none";
		})
	</script>
</head>

<body>
	<div class="loader">
		<svg width="200" height="100" viewBox="0 0 350 200">
			<path class="lt" d="M 100 50 L 50 100 L 100 150"></path>
			<path class="slash" d="M 150 175 L 200 25"></path>
			<path class="gt" d="M 250 50 L 300 100 L 250 150"></path>
		</svg>
	</div>
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
				<a class="icon_list"><img src="image/icon-menu.png" alt="icon-menu"></a>
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
			<img src="image/first.png" alt="leading img">
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
					<img src="image/fastTime.jpg" alt="Fast Site" loading='lazy'>
					<div class="text">
						<b>Fast Site</b>
						<p>The most important thing is to perform well</p>
					</div>
				</div>
				<div class="box">
					<img src="image/verification.jpg" alt="Verification" loading='lazy'>
					<div class="text">
						<b>Verification</b>
						<p>You have to secure the site because you don't know what the customer is doing</p>
					</div>
				</div>
				<div class="box">
					<img src="image/code.jpg" alt="Clean coding" loading='lazy'>
					<div class="text">
						<b>Clean coding</b>
						<p>Simple and understandable code for everyone</p>
					</div>
				</div>
				<div class="box">
					<img src="image/time.jpg" alt="on The time" loading='lazy'>
					<div class="text">
						<b>on The time</b>
						<p>Delivery ahead of schedule too!!</p>
					</div>
				</div>
				<div class="box">
					<img src="image/message.jpg" alt="Anytime we are here" loading='lazy'>
					<div class="text">
						<b>Anytime we are here</b>
						<p>Send to us and soon you will know the answer</p>
					</div>
				</div>
				<div class="box">
					<img src="image/iconLaravel.png" alt="Latest technology" loading='lazy'>
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
					<img src="image/icons/html.png" alt="icon html"><span>HTML</span>
				</div>
				<div class="box">
					<img src="image/icons/css.png" alt="icon css"><span>CSS</span>
				</div>
				<div class="box">
					<img src="image/icons/bootstrap.png" alt="icon bootstrap"><span>Bootstrap</span>
				</div>
				<div class="box">
					<img src="image/icons/js.png" alt="icon js"><span>JS</span>
				</div>
				<div class="box">
					<img src="image/icons/php.png" alt="icon php"><span>PHP</span>
				</div>
				<div class="box">
					<img src="image/icons/mysql.png" alt="icon mysql"><span>MySQL</span>
				</div>
				<div class="box">
					<img src="image/icons/laravel.png" alt="icon laravel"><span>Laravel</span>
				</div>
				<div class="box">
					<img src="image/icons/objects.png" alt="icon objects"><span>OOP</span>
				</div>
				<div class="box">
					<img src="image/icons/git.png" alt="icon git"><span>Git</span>
				</div>
				<div class="box">
					<img src="image/icons/github.png" alt="icon github"><span>GitHub</span>
				</div>
				<div class="box">
					<img src="image/icons/illustrator.png" alt="icon illustrator"><span>Illustrator</span>
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
						echo "<img src='image/icons/$len.png' loading='lazy'>";
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
			<?php
			if (sizeof($projects) <= 0) {
				echo "<div class='noProject'>Sorry, No Porject Found</div>";
			}
			?>
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
					<a href="https://www.facebook.com/profile.php?id=100090428432562" target="_blank"><img src="image/icons/facebook.png" alt="icon facebook" loading='lazy'></a>
					<a href="https://www.linkedin.com/in/thomas-emad/" target="_blank"><img src="image/icons/linkedin.png" alt="icon linkedin" loading='lazy'></a>
					<a href="https://github.com/thomas-Emad" target="_blank"><img src="image/icons/github.png" alt="icon github" loading='lazy'></a>
					<a href="mailto:thomas.emad.shawky.com"><img src="image/icons/mail.png" alt="icon mail" loading='lazy'></a>
				</div>
			</div>
	</footer>
	<script src="js/main.js"></script>

</body>

</html>