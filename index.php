<?php 
    $isSubmitted = isset($_REQUEST['submit']);

    if($isSubmitted) {
        $searchResult = $_GET['searchResult'];
    }
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulieren GET Methode</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<?php if($isSubmitted): ?>
        <h1>Zoekresultaten voor <?=$searchResult ?></h1>
<?php else: ?>
        <form action="" method="GET">
            <div class="form-group row mt-5">
                <label for="input-name">Search for... </label>
                <input class="form-control" id="input-name" type="text" name="searchResult">
            </div>
            <div  class="row">
                <input type="submit" class="btn btn-primary" name="submit" value="Verzenden">
            </div>
        </form>
<?php endif ?>
    </div>
</body>
</html>