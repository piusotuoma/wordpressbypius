<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('neem login'); ?></title>

    <meta name="description" content="This is the neem login page">
    <meta name="author" content="Pius Otuoma">

    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo('https://'); ?>" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="parentpage">
<div id="mainpage">
<table id="tableone">
<tr>
<td>
<div id="panelA">
<table id="panelAtableone">
<tr>
<td>
<img id="panelApicone" src="https://"/>
</td>
<td>
<p id="neem"><strong>neem</strong></p>
</td>
</tr>
</table>
<p id="paragraphAone"><strong>Sign up today</strong></p>
<button id="panelAbutton" type="button" onClick="signup()">sign up</p>
<img id="panelApictwo" src="https://"/>
</div>
</td>
<td>
<div id="panelB">
<div id="boardB" class="boardB">
<p id="paragraphBone">Sign in</p>
<div id="selleridtile">
<p id="sellerid">Seller id</p>
<input id="selleridinput" class="selleridinput" type="text" maxlength="9" placeholder="Enter your seller id"/>
<p id="prompt" class="prompt"></p>
</div>
<div id="sellerpasswordtile">
<p id="sellerpassword">Your password</p>
<input id="sellerpasswordinput" class="sellerpasswordinput" type="password" maxlength="15"  placeholder="Your password"/>
<p id="prompt" class="prompt"></p>
</div>
<button id="infoprocessingbutton" class="infoprocessingbutton" type="button" >SEND</button>
<p id="retry_action" class="retry_action"></p>
<p id="forgotdetails"><a id="forgotdetailslink" href="https://">forgot details</a></p>
</div>
</div>
<div class="spin-container" style="display:none;">
<div class="spin" id="loader">
<div class="spin" id="loader2">
<div class="spin" id="loader3">
<div class="spin" id="loader4">
<span id="text">LOADING...</span>
</div>
</div>
</div>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>