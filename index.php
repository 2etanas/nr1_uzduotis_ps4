<?php
// 1. Sukurkite programą, kuri priklausomai nuo naršyklės (Chrome - "juoda", Mozzila - "raudona" ,  Edge - "melyna"), puslapis nusidažo atitinkama spalva. Taip pat, puslapyje priklausomai nuo naršyklės, turi atsirasti tos naršyklės logotipas.
// P.S užduotį jau įkelti į GitHub
$narsykle = $_SERVER["HTTP_USER_AGENT"];

function rask_narsykle($serveris) {
    if (strpos($serveris, "Firefox")) {
        $logoLinkas = "https://upload.wikimedia.org/wikipedia/commons/8/84/Mozilla_Firefox_3.5_logo.png?20130709084931";
        $spalva = "red";
        $combo = [$logoLinkas,$spalva];
        return $combo; 
    }
    elseif (strpos($serveris, "Chrome") && strpos($serveris, "Edg")) {
        $logoLinkas = "https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Microsoft_Edge_logo_%282019%29.png/900px-Microsoft_Edge_logo_%282019%29.png?20220301074026";
        $spalva = "blue";
        $combo = [$logoLinkas,$spalva];
        return $combo; 
    }
    elseif (strpos($serveris, "Chrome")) {
        $logoLinkas = "https://upload.wikimedia.org/wikipedia/commons/8/87/Google_Chrome_icon_%282011%29.png?20151104231050";
        $spalva = "black";
        $combo = [$logoLinkas,$spalva];
        return $combo; 
    }
}
$newColor = rask_narsykle($narsykle)[1];
$newLink = rask_narsykle($narsykle)[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            background-color: <?php echo "$newColor"; ?>;
        };
    </style>
    <title>4 paskaitos uzduotis</title>
</head>
<body>
    <div>
        <img src="<?php echo $newLink?>" alt="LOGO" height = "150px" width = "150px">
</body>
</html>
