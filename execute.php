<?php
    $par = $_POST["paragraph"];
    $bad_word = $_POST["word"];
    $paragraphLength = strlen($par);
    $censuredParagraph = str_replace($bad_word, '***', $par);
    $censuredParagraphLength = strlen($censuredParagraph);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Paragraph: <?php echo $par; ?></p>
    <p>Paragraph's Length: <?php echo $paragraphLength; ?></p>
    <p>Cesured Word: <?php echo $bad_word; ?></p>
    <p>Censured Paragraph: <?php echo $censuredParagraph; ?></p>
    <p>Censured Paragraph's length: <?php echo $censuredParagraphLength; ?></p>
</body>
</html>