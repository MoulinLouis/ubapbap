<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php App\Core\View::getFaviconUrl()?>"/>
    <!-- <title><?= App\Core\View::getActualPageTitle() ?></title> -->

    <meta name="keywords" content="bapbap, ubapbap">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">

    <link rel="stylesheet" href="<?php App\Core\View::getAssets("style.css")?>">
    <link rel="stylesheet" href="<?php App\Core\View::getAssets("top_nav.css")?>">
    <link rel="stylesheet" href="<?php App\Core\View::getAssets("side_nav.css")?>">

    <script src="<?php App\Core\View::getAssets("libraries/jquery-3.6.0.min.js")?>"></script>
    <script src="<?php App\Core\View::getAssets("libraries/sweetalert2.js")?>"></script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TR8DJJJ');</script>
    <!-- End Google Tag Manager -->
</head>

<?php $this->addAlert("sweet"); ?>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TR8DJJJ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-226153791-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-226153791-1');
    </script>

    <div class="top-nav">
        <div class="top-nav-container">
            <div class="logo-nav">
            <div id="side-nav_toggle"><div class="react-svg icon"><div><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" class="injected-svg" data-src="https://static.u.gg/assets/ugg/logo/MenuToClose.svg"><g><g><g></g><g><path fill="#fff" d="M0 9.995h12v1.352H0zm0-4.663h12v1.342H0zM0 .67h12v1.342H0z"></path></g></g></g></svg></div></div></div>
                <a href="/" style="width: 100%; display: flex; align-items: center; justify-content: center;">
                    <img width="81" class="ubapbap-logo" alt="logo"
                    src="<?php App\Core\View::getAssets("logo/logo_white_large.png")?>" 
                    onmouseover="this.src='<?php App\Core\View::getAssets('logo/logo_large.png')?>'" 
                    onmouseout="this.src='<?php App\Core\View::getAssets('logo/logo_white_large.png')?>'" >
                </a>
            </div>
            <div class="top-nav-right">
                <div class="nav-top-settings-container">
                    <a href="/about">
                        <div class="btn-blue btn-blue_hover" style="min-height: 24px;">About</div>
                    </a>
                </div>
                <div class="nav-top-settings-container">
                    <div class="nav-top-settings-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" class="cog-icon"><path fill="#bec3e1" d="M8.995 11.003a1.933 1.933 0 01-1.418-.59 1.933 1.933 0 01-.59-1.418c0-.551.197-1.024.59-1.417.394-.394.87-.591 1.428-.591.558 0 1.03.197 1.417.59.388.394.581.867.581 1.418 0 .551-.197 1.024-.59 1.418-.394.393-.867.59-1.418.59zm0 1.421c.946 0 1.754-.335 2.424-1.005a3.304 3.304 0 001.005-2.424c0-.946-.335-1.754-1.005-2.424a3.304 3.304 0 00-2.424-1.005c-.946 0-1.754.335-2.424 1.005a3.304 3.304 0 00-1.005 2.424c0 .946.335 1.754 1.005 2.424a3.304 3.304 0 002.424 1.005zM9 16.58c-.25 0-.526-.02-.829-.06l-.217-.69-.217-.612-.612-.197a6.719 6.719 0 01-1.046-.434l-.572-.297-.593.297-.65.315a4.934 4.934 0 01-.613-.552 4.935 4.935 0 01-.552-.612l.612-1.224-.297-.572a6.308 6.308 0 01-.434-1.046l-.197-.632L1.48 9.83a5.855 5.855 0 010-1.658l1.303-.434.197-.612c.106-.355.25-.704.434-1.046l.297-.592-.297-.573-.315-.65c.342-.435.73-.823 1.164-1.165l1.224.612.592-.297a4.873 4.873 0 011.046-.434l.612-.197.197-.612.237-.71c.303-.027.579-.04.829-.04.263 0 .54.013.829.04l.434 1.322.612.178c.368.118.724.263 1.066.434l.572.316 1.224-.632c.434.355.829.75 1.184 1.184l-.632 1.224.297.572a6.6 6.6 0 01.453 1.046l.178.632.612.197.71.237c.04.29.053.56.04.81V9c0 .25-.013.526-.04.829l-.71.217-.612.217-.197.632a5.776 5.776 0 01-.415 1.026l-.316.572.632 1.244a8.563 8.563 0 01-.553.612v.02a5.177 5.177 0 01-.631.532l-1.224-.612-.572.297a7.535 7.535 0 01-1.066.434l-.612.197-.197.612-.237.69a5.78 5.78 0 01-.829.06zM9 18c.434 0 .908-.04 1.421-.118l.474-.08.493-1.44a9.32 9.32 0 001.125-.474l1.362.691.395-.296a7.82 7.82 0 001.085-.928 7.82 7.82 0 00.928-1.085l.276-.395-.67-1.362c.183-.368.341-.75.473-1.145l1.44-.473.08-.474C17.96 9.908 18 9.434 18 9c0-.434-.04-.908-.118-1.421l-.08-.474-1.44-.493a8.728 8.728 0 00-.474-1.145l.671-1.362-.276-.375a8.945 8.945 0 00-2.013-2.033l-.395-.276-1.362.69a8.727 8.727 0 00-1.145-.473l-.473-1.44-.474-.08A9.393 9.393 0 009 0c-.434 0-.908.04-1.421.118l-.474.08-.493 1.44a7.84 7.84 0 00-1.125.474L4.125 1.42l-.395.296A9.13 9.13 0 001.717 3.73l-.276.395.67 1.362a9.274 9.274 0 00-.473 1.125l-1.44.493-.08.474A9.393 9.393 0 000 9c0 .434.04.908.118 1.421l.08.474 1.44.493c.132.395.29.77.474 1.125l-.671 1.362.276.395c.29.394.599.756.928 1.085.302.303.664.612 1.085.928l.395.276 1.362-.67c.368.183.743.341 1.125.473l.493 1.44.474.08C8.092 17.96 8.566 18 9 18z"></path></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="side-nav-container">
            <div class="side-nav" style="min-width: 60px;">
                <div class="side-nav-links" style="width: 60px;">
                    <div class="side-navigator">
                        <a class="side-link side-nav-title" href="/characters">
                            <div style="min-width: 55px; height: 100%;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="icon"><path fill="#5f5f7b" d="M3.666 7.002a3.328 3.328 0 003.33 3.325 3.328 3.328 0 003.331-3.325H8.995a1.997 1.997 0 01-1.998 1.995 1.997 1.997 0 01-1.999-1.995zm-2.002-.005a5.332 5.332 0 1110.665 0 5.332 5.332 0 01-10.665 0zm12 0a6.667 6.667 0 10-13.334 0 6.667 6.667 0 0013.333 0z"></path></svg>
                            </div>
                            <span class="">Characters</span>
                        </a>
                        <a class="side-link side-nav-title" href="/items">
                            <div style="min-width: 55px; height: 100%;">
                                <svg version="1.1" id="Layer_1" class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g>	<g>		<path fill="#5f5f7b" d="M461.642,50.358c-67.144-67.144-176.395-67.144-243.539,0L50.358,218.103c-67.144,67.144-67.144,176.395,0,243.539			C83.93,495.214,128.029,512,172.127,512c44.099,0,88.198-16.786,121.769-50.358l167.745-167.745			C528.786,226.753,528.786,117.502,461.642,50.358z M447.341,279.595L279.595,447.34c-28.706,28.706-66.872,44.514-107.467,44.514			c-40.596,0-78.763-15.81-107.469-44.515c-59.257-59.259-59.257-155.677,0-214.936L232.404,64.659			c29.629-29.629,68.549-44.443,107.469-44.443c38.92,0,77.839,14.815,107.469,44.443			C506.598,123.917,506.598,220.336,447.341,279.595z"/>	</g></g><g>	<g>		<path fill="#5f5f7b" d="M465.802,167.272c-0.202-5.282-4.438-9.518-9.719-9.719c-26.768-1.022-51.903-11.98-70.779-30.855			c-18.875-18.876-29.833-44.012-30.856-70.781c-0.202-5.282-4.438-9.517-9.719-9.719c-35.051-1.339-69.315,12.06-94.018,36.765			L82.963,250.708c-49.165,49.165-49.165,129.163,0,178.327c24.582,24.582,56.873,36.874,89.163,36.874			c32.29,0,64.582-12.29,89.163-36.874L429.034,261.29C453.739,236.588,467.141,202.319,465.802,167.272z M414.735,246.989			L246.989,414.735c-41.279,41.278-108.445,41.278-149.724,0c-41.279-41.279-41.279-108.445,0-149.724L265.011,97.265			c18.621-18.621,43.728-29.589,69.973-30.816c3.254,28.193,15.838,54.371,36.018,74.552c20.18,20.18,46.357,32.764,74.551,36.017			C444.323,203.263,433.356,228.368,414.735,246.989z"/>	</g></g><g>	<g>		<path fill="#5f5f7b" d="M310.002,124.886c-3.949-3.949-10.353-3.949-14.301,0L124.886,295.7c-3.949,3.949-3.949,10.353,0,14.301			c1.974,1.974,4.563,2.962,7.151,2.962c2.588,0,5.176-0.987,7.15-2.962l170.814-170.814			C313.951,135.239,313.951,128.835,310.002,124.886z"/>	</g></g><g>	<g>		<path fill="#5f5f7b" d="M348.557,163.443c-3.949-3.949-10.353-3.949-14.301,0L163.443,334.257c-3.949,3.949-3.949,10.353,0,14.301			c1.974,1.974,4.563,2.962,7.15,2.962s5.176-0.987,7.15-2.962l170.814-170.814C352.508,173.794,352.508,167.391,348.557,163.443z"			/>	</g></g><g>	<g>		<path fill="#5f5f7b" d="M387.113,201.998c-3.949-3.949-10.353-3.949-14.301,0L201.998,372.814c-3.949,3.948-3.949,10.352,0,14.301			c1.974,1.974,4.563,2.962,7.15,2.962s5.176-0.987,7.15-2.962l170.814-170.815C391.062,212.35,391.062,205.946,387.113,201.998z"/>	</g></g><g>	<g>		<path fill="#5f5f7b" d="M415.184,66.833c-16.532,0-29.984,13.451-29.984,29.984c0,16.533,13.451,29.984,29.984,29.984			c16.534,0,29.984-13.451,29.984-29.984C445.168,80.284,431.716,66.833,415.184,66.833z M415.184,106.573			c-5.38,0-9.758-4.378-9.758-9.758c0-5.38,4.378-9.758,9.758-9.758c5.381,0,9.758,4.378,9.758,9.758			C424.942,102.195,420.564,106.573,415.184,106.573z"/>	</g></g></svg>
                            </div>
                            <span class="">Items</span>
                        </a>
                        <a class="side-link side-nav-title" href="/tierlist">
                            <div style="min-width: 55px; height: 100%;">
                            <svg version="1.1" id="Capa_1" class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 297.334 297.334" style="enable-background:new 0 0 297.334 297.334;" xml:space="preserve">
                            <g>
                                <path fill="#5f5f7b" d="M255.5,0h-213c-4.418,0-8.333,3.582-8.333,8v223c0,2.923,1.76,5.612,4.324,7.017l106.583,58.334
                                    c1.196,0.655,2.561,0.983,3.884,0.983c1.323,0,2.667-0.328,3.864-0.983l106.344-58.334c2.564-1.404,4.001-4.094,4.001-7.017V8
                                    C263.167,3.582,259.918,0,255.5,0z M247.167,226.261l-98.5,53.952l-98.5-53.952V16h197V226.261z"/>
                                <polygon fill="#5f5f7b" points="215.167,209.092 215.167,171.5 148.751,206.5 82.167,171.5 82.167,209.001 148.75,245.334 	"/>
                                <polygon fill="#5f5f7b" points="215.167,153.438 215.167,115.846 148.751,150.846 82.167,115.846 82.167,153.347 148.75,189.68 	"/>
                                <polygon fill="#5f5f7b" points="122.753,115.683 149.499,96.263 176.247,115.723 166.032,84.33 192.778,65 159.718,65 149.499,33.557 139.282,65 
                                    106.222,65 132.968,84.336 	"/>
                            </g>
                            </svg>

                            </div>
                            <span class="">Tier list</span>
                        </a>
                        <a class="side-link side-nav-title" href="/leaderboard">
                            <div style="min-width: 55px; height: 100%;">
                                <svg viewBox="0 0 24 24" class="icon" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#5f5f7b" d="M15 19H9V12.5V8.6C9 8.26863 9.26863 8 9.6 8H14.4C14.7314 8 15 8.26863 15 8.6V14.5V19Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path fill="#5f5f7b" d="M15 5H9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path fill="#5f5f7b" d="M20.4 19H15V15.1C15 14.7686 15.2686 14.5 15.6 14.5H20.4C20.7314 14.5 21 14.7686 21 15.1V18.4C21 18.7314 20.7314 19 20.4 19Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path fill="#5f5f7b" d="M9 19V13.1C9 12.7686 8.73137 12.5 8.4 12.5H3.6C3.26863 12.5 3 12.7686 3 13.1V18.4C3 18.7314 3.26863 19 3.6 19H9Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <span class="">Leaderboard</span>
                        </a>
                        <a class="side-link side-nav-title" href="/patch-notes">
                            <div style="min-width: 55px; height: 100%;">
                            <svg version="1.1" id="Layer_1" class="icon" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g>	<g>		<rect fill="#5f5f7b" x="185.967" y="425.305" width="140.065" height="33.391"/>	</g></g><g>	<g>		<rect fill="#5f5f7b" x="215.285" y="478.609" width="81.441" height="33.391"/>	</g></g><g>	<g>		<rect fill="#5f5f7b" x="250.468" y="233.817" width="11.052" height="171.576"/>	</g></g><g>	<g>		<path fill="#5f5f7b" d="M196.525,159.317c-11.336,0-20.558,9.223-20.558,20.558s9.222,20.558,20.558,20.558h20.558v-20.558			C217.082,168.538,207.861,159.317,196.525,159.317z"/>	</g></g><g>	<g>		<path fill="#5f5f7b" d="M315.474,159.315c-11.336,0-20.558,9.223-20.558,20.558v20.558h20.558c11.336,0,20.558-9.222,20.558-20.558			C336.032,168.538,326.811,159.315,315.474,159.315z"/>	</g></g><g>	<g>		<path fill="#5f5f7b" d="M256,0C156.081,0,74.791,81.29,74.791,181.209c0,35.037,10.023,69.04,28.984,98.333			c16.501,25.491,39.002,46.343,65.498,60.799v65.053h47.81V233.823h-20.558c-29.748,0-53.949-24.202-53.949-53.949			c0-29.748,24.201-53.949,53.949-53.949c29.748,0,53.949,24.201,53.949,53.949v20.558h11.052v-20.558			c0-29.748,24.201-53.949,53.949-53.949s53.949,24.201,53.949,53.949c0,29.747-24.201,53.949-53.949,53.949h-20.558v171.571h47.81			v-65.053c26.496-14.456,48.997-35.308,65.498-60.799c18.961-29.293,28.984-63.295,28.984-98.333C437.209,81.29,355.919,0,256,0z"/></g></g></svg>

                            </div>
                            <span class="">Patch notes</span>
                        </a>
                    </div>
                </div>
                <div class="side-nav_footer">
                    <div class="disclaimer">
                        <div class="disclaimer-title">UBAPBAP ©</div>
                        <span>
                            ubapbap isn't endorsed by bapbap.gg.<br><br>
                            If you'd like to contribute to this website in terms of build, tierlist or anything else, feel free to contact Playfade#7683 on discord.<br><br>
                            Source code: <a href="https://gitlab.com/MoulinLouis/ubapbap" target="_blank">Gitlab ubapbap</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 100%">
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="content">
                        
                    <?php include $this->view ?>

                    </div>
                </div>
            </div>
        </div>


    </div>

</body>

<script>
    $('#side-nav_toggle').click(function() {
        if($(this).hasClass("collapse")) {
            $('#side-nav_toggle').removeClass("collapse")

            $('.side-nav-container').removeClass("collapse")
            $('.side-nav').removeClass("collapse")
        } else {
            $('#side-nav_toggle').addClass("collapse")

            $('.side-nav-container').addClass("collapse")
            $('.side-nav').addClass("collapse")
        }




    });

    $(function() {
        $('.side-link').hover(function(e) {
            $(this).find("span").css('color', 'white');
            $(this).find("path").css('fill', 'orange');
            $(this).find("polygon").css('fill', 'orange');
        }, function() {
            if($(this).hasClass('active')) {
                return;
            }
            // on mouseout, reset the background colour
            $(this).find("span").css('color', '');
            $(this).find("path").css('fill', '');
            $(this).find("polygon").css('fill', '');
        });

        var path = window.location.href;
        $('.side-navigator a').each(function() {
            if (path.indexOf(this.href) >= 0) {
                $(this).addClass('active');
                $(this).find("span").css('color', 'white');
                $(this).find("path").css('fill', 'orange');
            }
        });
    });

</script>

</html>
