<html lang=en>
<head>
    <meta charset=UTF-8>
    <meta name=viewport content=width=device-width, initial-scale=1.0>
    <?php foreach ($css as $value):?>
    <link rel=stylesheet href="/fccn/Public/asset/style/<?=$value?>">
    <?php endforeach ?>
    <?php foreach ($js as $value):?>
    <script src="/fccn/Public/asset/script/<?=$value?>" async></script>
    <?php endforeach ?>
    <title><?=$title?></title>
</head>
<body>
    <?=$navbar?>
    <?=$content?>
    <?=$footer?>
</body>
</html>
