<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo mix('/css/app.css') ?>"/>
</head>
<body>
<fieldset>
    <legend>
        layout
    </legend>
    <fieldset>
        <legend>content</legend>
        <?php
        if (isset( $content )) {
            echo $content;
        }
        ?>

    </fieldset>
</fieldset>


</body>
</html>