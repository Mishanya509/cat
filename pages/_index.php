<?
/** @var DateTime $date */;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cat-Cat</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>
</head>
<body>


<div class="ya-share2" data-services="vkontakte,facebook,moimir,twitter"></div>

<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_vk"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>

<div class="MainDiv">
    <div class="MinusBtn" onclick="plus();">-5 min</div>
    <div class="PlusBtn" onclick="minus();">+10 min</div>
    <br>
    <div class="Timer"> <?=$date->format("H:i:s")?> </div>
    <br>
    <div class="ImageDiv">
        <img src="img/cat.png" class="Image" />
    </div>


</div>

<div class="Footer">
    <div class="Advertising"> </div>
</div>
</body>
</html>