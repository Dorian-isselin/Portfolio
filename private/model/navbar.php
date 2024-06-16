<?php 
function set_lang(){
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['fr', 'en'];
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    header('Location: '."http://www.dorian-isselin.fr/?lang=".$lang);
}

if (isset($_GET['lang'])) 
{
    if ($_GET['lang'] === "fr") 
    {
        include(__DIR__.'/../lang/lang-fr.php');
    }
    else if ($_GET['lang'] === "en") 
    {
        include(__DIR__.'/../lang/lang-en.php');
    }
    else{ set_lang(); }
}
else { set_lang(); }

?>

<script src="/js/navbar.js"></script>
<header .selectOff>
    <div id="h_left">
        <a href="#TopTitle"><img src="/img/Dorian_icon.png" alt="D.I"></a>
        <a href="#TopTitle"><span>Dorian Isselin</span></a>
    </div>
    <div id="h_right">
        <div id="lang">
            <a href="?lang=fr"><span><?php echo TXT_HEADER_FR; ?></span></a>
            -
            <a href="?lang=en"><span><?php echo TXT_HEADER_EN; ?></span></a>
        </div>
        &nbsp|&nbsp
        <a href="#TopTitle"><span><?php echo TXT_HEADER_SEC0; ?></span></a>
        &nbsp|&nbsp
        <a href="#sec1"><span><?php echo TXT_HEADER_SEC1; ?></span></a>
        &nbsp|&nbsp
        <a href="#goto2"><span><?php echo TXT_HEADER_SEC2; ?></span></a>
        &nbsp|&nbsp
        <a href="#goto3"><span><?php echo TXT_HEADER_SEC3; ?></span></a>
        &nbsp|&nbsp
        <a href="#goto4"><span><?php echo TXT_HEADER_SEC4; ?></span></a>
    </div>
    <div id="adv_bar"></div>
</header>
