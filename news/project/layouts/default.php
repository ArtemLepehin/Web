<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="/css/normalize.css">
		<link rel="stylesheet" href="/css/default.css">
		<link rel="stylesheet" 
			href=
			<?php 
				if($page->view=='news/main') echo "/css/main.css";
				if($page->view=='news/newspage') echo "/css/newspage.css";
				if($page->view=='error/notFound') echo "/css/notfound.css";
			?>
		>
		<title><?php echo $page->title?></title>
	</head>
	<body>
		<header class="header">
			<div class="container">		<!-- ограничение на 1920px -->
				<nav class="nav">		<!-- контент в контейнере -->
					<a class="logo">
						<img src="/images/logo.svg" alt="" class="logo-img">
					</a>
					<a href="#" class="menu-link">Галактический вестник</a>
				</nav>
				<hr class="hr-line0">
			</div>
		</header>
		<main>
			<?= $content ?>
		</main>
		<footer class="footer">
			<div class="container">
				<div class="footer-content">
					<hr class="hr-line">
					<p class="author">© 2023 — 2412 «Галактический вестник»</p>
				</div>
			</div>
		</footer>
	</body>
</html>
