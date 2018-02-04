<?php
$Adder = new \Model\Repository\MainFunction\AssetsLoader();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="object" property="og:type">
    <meta content="Simplist is a free & open-source framework for developing, creating & designing online blogs simply." name="description">
    <meta content="origin-when-cross-origin" name="referrer">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <link rel="shortcut icon" type="image/x-icon" href="../../../../Content/Shared/Logo.png" id="favicon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../../../../Content/Shared/Logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" href="../../../../Content/Shared/Logo.png">
    <title>WELCOME TO SIMPLIST</title>
    <?php
    $Adder->Loader("css","Main/main");
    $Adder->Loader("css","Shared/Logos");
    $Adder->Loader("js","Main/main");
    $Adder->Loader("css","bootstrap.min","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css","false");
    $Adder->Loader("js","jquery-3.2.1.slim.min","https://code.jquery.com","false");
    $Adder->Loader("js","popper.min","https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd","false");
    $Adder->Loader("js","bootstrap.min","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js","false");
    ?>
</head>
<body>
 <div>


     <div class="Container" style="text-align: center;vertical-align: middle;padding-top: 200px;">
     <img src="https://assets.gitlab-static.net/uploads/-/system/project/avatar/5242843/SimplistLogo.png" width="100" height="100" alt="Simplist">
     <div class="MainText" style="text-align: center;vertical-align: middle;font-size: 100px;font-family: Calibri Light;">WELCOME TO SIMPLIST</div>
     <div class="SubText" style="text-align: center;vertical-align: middle;font-size: 25px;font-family: Calibri Light;">You can download it from our <a href="https://gitlab.com/miladxandi/Simplist" target="_blank">Gitlab</a> repository and stay connected.</div>
     </div>
 </div>
</body>
</html>