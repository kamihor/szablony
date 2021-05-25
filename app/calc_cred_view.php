

<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Kalkulator kredytowy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">				
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Kalkulator kredytowy</h2>
							<p>Obliczenie raty kredytu nigdy nie było tak proste!</p>
						</header>

						
							<section>
								<form method="post" action="#">
                                                                    <div class="form" style="max-width: 50em; margin: auto" >
                                                                                        <input type="text" name="value" id="value" value="<?php out($value) ?>" placeholder="Kwota" />
                                                                                        <input type="text" style="margin-top: 1em" name="years" id="years" value="<?php out($years) ?>" placeholder="Okres spłaty w latach" />
                                                                                        <input type="text" style="margin-top: 1em" name="percent" id="percent" value="<?php out($percent) ?>" placeholder="Oprocentowanie" />
                                                                                        <ul class="actions">
												<li><input style="margin-top: 1em;" type="submit" value="Oblicz" class="primary" /></li>
											</ul>
                                                                    </div>
								</form>
                                                            
                                                            <?php
                                                                if (isset($messages)) {
                                                                    if (count ( $messages ) > 0) {
                                                                            echo '<ol style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #272833; width:25em; margin: auto; text-align: center">';
                                                                            foreach ( $messages as $key => $msg ) {?>
                                                                                <ul class="alt" style='margin: auto; text-align: center'>
                                                                                    <?php echo '<li>'.$msg.'</li>'; ?>
                                                                                </ul> <?php
                                                                            }
                                                                            echo '</ol>';
                                                                    }
                                                                }
                                                            ?>
                                                            
                                                            <?php if (isset($result)){ ?>
                                                                <div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #272833; width:25em; margin: auto; text-align: center">
                                                                <?php echo 'Miesięczna rata: '.$result.' zł'; ?>
                                                                </div>
                                                                <?php } ?>
                                                            
							</section>


			<!-- Footer -->
				<footer id="footer" style='margin-top: 10em'>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>