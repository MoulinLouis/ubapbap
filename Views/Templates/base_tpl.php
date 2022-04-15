<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?php App\Core\View::getFaviconUrl()?>"/>
    <title><?= App\Core\View::getActualPageTitle() ?></title>

    <link rel="stylesheet" href="<?php App\Core\View::getAssets("style.css")?>">
    <link rel="stylesheet" href="<?php App\Core\View::getAssets("top_nav.css")?>">
    <link rel="stylesheet" href="<?php App\Core\View::getAssets("side_nav.css")?>">

    <script src="<?php App\Core\View::getAssets("libraries/jquery-3.6.0.min.js")?>"></script>
    <script src="<?php App\Core\View::getAssets("libraries/sweetalert2.js")?>"></script>
</head>

<?php $this->addAlert("sweet"); ?>

<body>

    <div class="top-nav">
        <div class="top-nav-container">
            <div class="logo-nav">
                <a href="/" style="width: 100%; display: flex; align-items: center; justify-content: center;">
                    <img width="81" class="ubapbap-logo" 
                    src="<?php App\Core\View::getAssets("logo/logo_white_large.png")?>" 
                    onmouseover="this.src='<?php App\Core\View::getAssets('logo/logo_large.png')?>'" 
                    onmouseout="this.src='<?php App\Core\View::getAssets('logo/logo_white_large.png')?>'" >
                </a>
            </div>
            <div class="top-nav-right">
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
            <div class="side-nav">
                <div class="side-nav-links">
                    <div class="side-navigator">
                        <a class="side-link side-nav-title" href="/characters">
                            <div style="min-width: 55px; height: 100%;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="icon"><path fill="#5f5f7b" d="M3.666 7.002a3.328 3.328 0 003.33 3.325 3.328 3.328 0 003.331-3.325H8.995a1.997 1.997 0 01-1.998 1.995 1.997 1.997 0 01-1.999-1.995zm-2.002-.005a5.332 5.332 0 1110.665 0 5.332 5.332 0 01-10.665 0zm12 0a6.667 6.667 0 10-13.334 0 6.667 6.667 0 0013.333 0z"></path></svg>
                            </div>
                            <span class="">Characters</span>
                        </a>
                        <a class="side-link side-nav-title" href="/items">
                            <div style="min-width: 55px; height: 100%;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="icon"><path fill="#5f5f7b" d="M3.666 7.002a3.328 3.328 0 003.33 3.325 3.328 3.328 0 003.331-3.325H8.995a1.997 1.997 0 01-1.998 1.995 1.997 1.997 0 01-1.999-1.995zm-2.002-.005a5.332 5.332 0 1110.665 0 5.332 5.332 0 01-10.665 0zm12 0a6.667 6.667 0 10-13.334 0 6.667 6.667 0 0013.333 0z"></path></svg>
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
    $(function() {
        $('.side-link:not(.active)').hover(function(e) {
            $(this).find("span").css('color', 'white');
            $(this).find("path").css('fill', 'orange');
            $(this).find("polygon").css('fill', 'orange');
        }, function() {
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
