<?php
    include "./config.php";
    include "./lib/db.php";
    $data = getOne("journal", $_GET["pdf"])[0];
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
    .navigation__item a {
        text-decoration: none;
        display: inline-block;
        padding: 4px 6px;
        color: #fff;
        margin: 0.1rem;
        cursor: pointer;
        width: 50px;
        height: 50px;
    }

    .navigation__item a:hover,
    .navigation__item .zoom:hover,
    .navigation__item .print-button:hover {
        background-color: #ddd;
        color: #0075f2;
        opacity: 0.8;
        cursor: pointer;
    }

    .navigation {
        background-color: #bbb;
        color: #000;
        padding: 0.3rem;
        list-style: none;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .navigation__item {
        margin: 0.7rem;
    }

    .navigation__item .previous {
        background-color: #f1f1f1;
        color: black;
    }

    .navigation__item .next {
        background-color: #4a8fed;
        color: white;
    }

    .navigation__item .round {
        border-radius: 50%;
    }

    .canvas__container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin: 0 auto;
    }

    .navigation__item .zoom {
        color: #005bac;
        outline: #fff;
        border: 1px solid #005bac;
        border-radius: 50%;
        padding: 12px 12px;
        text-align: center;
        transition: all 0.3s ease;
        font-size: 1rem;
        width: 45px;
    }

    .navigation__item input[type="number"] {
        -moz-appearance: textfield;
        appearance: textfield;
        margin: 0;
        text-align: center;
        width: 20%;
        height: 2rem;
        font-size: 1rem;
    }

    .navigation__item input[type="number"]::-webkit-inner-spin-button,
    .navigation__item input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .navigation__item .print-button {
        border: none;
        color: #005bac;
        outline: #fff;
        border: 1px solid #005bac;
        border-radius: 50%;
        padding: 12px 12px;
        text-align: center;
        transition: all 0.3s ease;
        font-size: 1rem;
        width: 45px;
    }

    .navigation__item .back{
        width: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px solid red;
        color: red;
        font-weight: 900;
    }
    .navigation__item{
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    .navigation__item .back:hover{
        border: 2px solid #4A8FED;
        background-color: #4A8FED;
        color: white;
    }
    .navigation__item .abc{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    /* Hide Print button */
    @media print {
        .navigation {
        display: none;
        }
    }
    </style>
</head>
<body>
    
<header>
    <ul class="navigation">
        <li class="navigation__item">
            <a class="back" href="index.php">Orqaga</a>
        </li>
        <li class="navigation__item">
            <!-- Navigate to the Previous and Next pages -->
            <a href="#" class="previous round abc" id="prev_page">
                <i class="fas fa-arrow-left"></i>
            </a>

            <!-- Navigate to a specific page -->
            <input type="number" value="1" id="current_page" />

            <a href="#" class="next round abc" id="next_page"
            ><i class="fas fa-arrow-right"></i
            ></a>

            <!-- Page Info -->
            Page <span id="page_num"></span> of
            <span id="page_count"></span>
        </li>

        <!-- Zoom In and Out -->
        <li class="navigation__item">
            <button class="zoom" id="zoom_in">
            <i class="fas fa-search-plus"></i>
            </button>

            <button class="zoom" id="zoom_out">
            <i class="fas fa-search-minus"></i>
            </button>
        </li>

        <li class="navigation__item">
            <button class="print-button">
            <i class="fa fa-print"></i>
            </button>
        </li>
    </ul>
</header>

<!-- canvas to place the PDF -->
<canvas id="canvas" class="canvas__container"></canvas>


<!-- load PDF.js -->
<script src="<?= $config['base']['url']; ?>/admin/js/pdf.js"></script>

<script>
  const pdf = "<?= $config['base']['url']; ?>assets/pdf/<?=$data["pdf"]?>"
</script>

<script src="<?= $config['base']['url']; ?>/admin/js/index.js"></script>
</body>
</html>