<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>docker</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <input type="text">

    <div class="container">
        
        <nav class="navigation">
            <h1>Muziekwinkel</h1>
        </nav>
    </div>

</body>
</html>

<?php 
require_once('../source/data.php');
?>
<article>

<?php
foreach( $library as $single) {
    
    // views en cards.php ophalen
    include('../source/views/card.php');
}
?>
</article>




<article>
<?php
//for( $i=0; $i<10; $i++){
    //include ('../source/views/card.php');
//}
?>
</article>