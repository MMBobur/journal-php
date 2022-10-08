<?php
  $date = date('dmyHis');
  $req = false;
  $error = false;

  if(isset($_POST["send"])){
    $filename = $_FILES['file']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if($ext == "doc" OR $ext == "docx"){
      if(move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/assets/pdf/".$date."-".$_FILES['file']["name"])){
        $req = newJournal($_POST["title"],$_POST["fullname"],$_POST["tel"],$_POST["email"],$date."-".$_FILES['file']["name"],$_POST["category"]);
      }
    }else{
      $error = true;
    }
  }
?>

<section class="blog-section style-four section">
  <div class="container">
    <div class="row">
      <div class="contact-area pl-0 pl-lg-5">
        
        <div class="section-title">
          <h3>O`zingizni Maqolangizni yuklang
          </h3>
        </div>
        <br>
        <?php if($req): ?>
          <div class="alert alert-primary" role="alert">
            Maqola muvaffaqiyatli yuklandi
          </div>
        <?php endif; ?>
        <?php if($error): ?>
          <div class="alert alert-danger" role="alert">
            <b>PDF</b> yuklang
          </div>
        <?php endif; ?>
        <form method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input class="form-control" type="text" name="fullname" placeholder="Familiya ism kiriting" required>
              </div>
              <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email" >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input class="form-control" type="text" name="tel" placeholder="Telefon" required>
              </div>
              <div class="form-group">
                <select class="form-control" name="category" required>
                  <option disabled selected value>Maqola categoriyasini tanlang</option>
                  <?php foreach(getCategory("category") as $data):?>
                    <option value="<?=$data['id']?>"><?=$data["title_uz"]?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input class="form-control" type="text" name="title" placeholder="Maqola sarlovhasi" required>
              </div>
              <div class="form-group">
                <span style="color: red">word file yuklang [ .doc .docx ]</span>
                <input class="form-control" type="file" name="file" accept=".doc, .docx" required>
              </div>
              <div class="form-group text-center">
                <button type="submit" style="background-color: #48BDC5; color: white;" class="btn-style-one" name="send"> Jo`natish</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>