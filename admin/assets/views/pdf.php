<style>
  .my-iframe{
    width: 100%;
    height: 900px;
  }
</style>

<?php
  if(isset($_GET["id"])){
    $data = getOneJournal($_GET["id"])[0];
  }else{
    echo("<script>location.href = 'index.php';</script>");
  }
?>

<?php
  $path = $config['base']['url']."assets/pdf/".$data["pdf"]
?>

<iframe class="my-iframe" src="https://docs.google.com/gview?url=<?=$path?>&embedded=true"></iframe>
