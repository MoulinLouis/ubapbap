<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UBAPBAP - About ubapbap</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="<?php App\Core\View::getAssets("about/style.css")?>">
	<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
							<a href="/">
								<img class="header-logo-image" src="<?php App\Core\View::getAssets("logo/logo_white_large.png")?>" style="width: 130px;" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">Analytics inspire better GAMING</h1>
	                        <p class="hero-paragraph">UBAPBAP provide insights to gamers for ubapbap.gg. The team at UBAPBAP are full of hardcore gamers. We enjoy all kinds of games across all platforms. We understand what gamers need and what gamers want at their very cores, and enable them to be engaged even deeper within the games.</p>
	                        <div class="hero-cta"><a class="button button-primary" href="/characters">See all characters</a><a class="button" href="/tierlist">See tierlist</a></div>
						</div>
						<div class="hero-figure anime-element">
							<svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
								<rect width="528" height="396" style="fill:transparent;" />
							</svg>
							<div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
							<div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
							<div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
							<div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
							<div class="hero-figure-box hero-figure-box-05"></div>
							<div class="hero-figure-box hero-figure-box-06"></div>
							<div class="hero-figure-box hero-figure-box-07"></div>
							<div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
							<div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
							<div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
						</div>
                    </div>
                </div>
            </section>

            <section class="features section">
                <div class="container">
					<div class="features-inner section-inner has-bottom-divider">
                        <div class="features-wrap">
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="<?php App\Core\View::getAssets("about/feature-icon-01.svg")?>" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title mt-24">All characters data</h4>
                                    <p class="text-sm mb-0">We provide information about all the characters that are not even available on the official website yet.</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="<?php App\Core\View::getAssets("about/feature-icon-02.svg")?>" alt="Feature 06">
                                    </div>
                                    <h4 class="feature-title mt-24">Listening...</h4>
                                    <p class="text-sm mb-0">The UBAPBAP team wants your opinion. Don't hesitate to contact me on discord (Playfade#7683) to make the site the way you want it.</p>
                                </div>
                            </div>

                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="<?php App\Core\View::getAssets("about/feature-icon-03.svg")?>" alt="Feature 03">
                                    </div>
                                    <h4 class="feature-title mt-24">Tier list</h4>
                                    <p class="text-sm mb-0">Tier lists for all game modes from the game's biggest players are available for you to choose who to play.</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="<?php App\Core\View::getAssets("about/feature-icon-04.svg")?>" alt="Feature 04">
                                    </div>
                                    <h4 class="feature-title mt-24">Meta build</h4>
                                    <p class="text-sm mb-0">The best players of bapbap.gg are in contact with our team to provide the best builds of the game</p>
                                </div>
                            </div>
							<div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="<?php App\Core\View::getAssets("about/feature-icon-05.svg")?>" alt="Feature 05">
                                    </div>
                                    <h4 class="feature-title mt-24">Leaderboard</h4>
                                    <p class="text-sm mb-0">The ranking of the best players will arrive soon when the game bapbap.gg will make available the information about the players.</p>
                                </div>
                            </div>
							<div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="<?php App\Core\View::getAssets("about/feature-icon-06.svg")?>" alt="Feature 02">
                                    </div>
                                    <h4 class="feature-title mt-24">All items data</h4>
                                    <p class="text-sm mb-0">We provide information about all the items that are not even available on the official website yet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
						<a href="#">
							<img class="header-logo-image" src="<?php App\Core\View::getAssets("logo/logo_white_large.png")?>" style="width: 130px" alt="Logo">
						</a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="/about">About us</a>
                        </li>
                        <li>
                            <a href="https://gitlab.com/MoulinLouis/ubapbap">Gitlab</a>
                        </li>
                        <li>
                            <a href="https://bapbap.gg/">bapbap.gg</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#" onclick="alert('coming soon')">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2022 Ubapbap, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="<?php App\Core\View::getAssets("about/main.min.js")?>"></script>
</body>
</html>
