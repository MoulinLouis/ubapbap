<link rel="stylesheet" href="<?php App\Core\View::getAssets("error.css")?>">

<!-- <h1 class="titleError"><?php echo $responseCode; ?></h1>
<p class="infoError"><?php echo $responseMessage; ?></p>
<button id="back-home-btn" type="button" onclick="window.location='/'">Back to the home page</button> -->
<div class="error"><?= $responseCode; ?></div>
<br /><br />
<span class="info"><?= $responseMessage; ?></span>
<br /><br />
<span class="back"><a href="/">go to home page</a></span>

