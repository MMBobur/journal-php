<?php
    include "./config.php";
    include "./lib/db.php";
    $data = getOne($_GET['table'], $_GET["id"])[0];
    $date = str_replace("-", "/", $data['date']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="citation_title" content="<?=$data["title"]?>">
    <meta name="citation_author" content="<?=$data["author"]?>">
    <meta name="citation_publication_date" content="<?=$date?>">
    <meta name="citation_journal_title" content="">
    <meta name="citation_volume" content="4">
    <meta name="citation_issue" content="20">
    <meta name="citation_firstpage" content="1">
    <meta name="citation_lastpage" content="2">
    <meta name="citation_pdf_url" content="<?=$config["base"]["url"]?>assets/pdf/<?=$data["pdf"]?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <title>pdf</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .back{
            margin: 30px;
        }
        .back_btn{
            background-color: #48BDC5;
            padding: 15px 30px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
        }
        header{
            display: flex;
            flex-direction: column;
        }
        .my-iframe{
            height: 880px;
        }
    </style>
</head>
<body>

    <?php
        $path = $config['base']['url']."assets/pdf/".$data["pdf"]
    ?>

    <header>
        <div class="back">
            <a class="back_btn" href="index.php">Orqaga</a>
        </div>
        <iframe class="my-iframe" src="https://docs.google.com/gview?url=<?=$path?>&embedded=true"></iframe>
    </header>

</body>
</html>