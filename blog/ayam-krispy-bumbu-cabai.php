<?php 
    session_start();
    include '../function.php';
    $_SESSION["filename"]=pathinfo(basename(__FILE__),PATHINFO_FILENAME);
    if (isset($_SESSION["username"])){
    $status = bookmark_check($_SESSION["username"], $_SESSION["filename"]);
    }
    

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayam Krispy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style><?php include '../gaya.css'; ?></style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top p-3 navbar4bg">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white" href="../index.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../kitchen-tips.php">Kitchen Tips</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../category.php">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../submit-recipe.php">Submit Resep</a>
            </li>
          </ul>

        <form class="form-inline my-2 my-lg-0" action="result.php" method="get">
           <input class="form-control me-2" style="width:200px" name="keyword" placeholder="Search" aria-label="Search">
        </form>

        <span>
        <?php if (!apply_foto_profil()) : ?>
            <a class="navbar-brand ml-4" href="../login.php">
              <img class="rounded-circle" src="../img/avatar.jpg" alt="..." height="36" width="36" />
            </a>
          <?php else : ?>
            <a class="navbar-brand ml-4" href="../login.php">
              <img class="rounded-circle" src="../upload/foto-profil/<?=apply_foto_profil()?>" alt="..." height="36" width="36" />
            </a>
            <?php endif ?>
      </span>

      </div>
      </div>
    </nav>


    <div class="container" id="test" style="margin-top: 110px;">
      <div class="card" style="width: 50rem;">
        <img class="card-img-top" src="<?=pathinfo(basename(__FILE__), PATHINFO_FILENAME).".jpg";?>" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title">Ayam Krispy Bumbu Cabai</h3>
          <p class="card-text">Ayam bisa diolah menjadi berbagai macam menu makanan. Bahkan saat ini, ayam yang sudah digoreng dengan tepung diberi sedikit sensasi hancur dengan cara digeprek.</p>
          <p class="card-text">Memangnya, apa saja kandungan gizi di dalam daging ayam segar? Berdasarkan Data Komposisi Pangan Indonesia, 100 gram daging ayam memiliki kandungan gizi sebagai berikut:</p><br>
          <h5 class="card-text">Komposisi Gizi</h5>
          <ul>
             <li>Air: 55,9 ml</li>
             <li>Energi: 298 kalori</li>
             <li>Protein: 18.2 gr</li>
             <li>Lemak: 25.0 gr</li>
             <li>Kalsium: 14 mg</li>
             <li>Fosfor: 200 mg</li>
             <li>Zat besi: 1.5 mg</li>
             <li>Natrium: 109 mg</li>
             <li>Kalium: 385.9 mg</li>
             <li>Zinc: 0.6 mg</li>
             <li>Niasin : 10.4 mg</li>
          </ul>
          <p class="card-text"></p>Kandungan gizi daging ayam di atas yaitu saat masih segar dan mentah. Saat diolah, komposisi nutrisi di dalamnya akan berubah.<br>
          <h5 class="card-text">Bahan-Bahan</h5>
          <ul>
             <li>350 gram dada ayam fillet</li>
             <li>1 butir putih telur</li>
             <li>2 sdm tepung maizena</li>
             <li>1 sdm fibercreme</li>
          </ul>
          <h5 class="card-text">Bumbu marinasi</h5>
          <ul>
             <li>3 siung bawang putih, parut</li>
             <li>1/2 sdt lada bubuk</li>
             <li>1 sdt garam</li>
             <li>1/2 sendok teh penyedap jamur</li>
          </ul>
          <h5 class="card-text">Tepung pelapis</h5>
          <ul>
             <li>4 sdm maizena</li>
             <li>2 sdm tepung serbaguna</li>
          </ul>
          <h5 class="card-text">Bahan taburan</h5>
          <ul>
             <li>4 siung bawang putih, cincang</li>
             <li>4 siung bawang putih, cincang</li>
             <li>8 cabai rawit, iris bulat</li>
             <li>2 batang daun bawang, iris-iris</li>
             <li>Garam</li>
             <li>Gula</li>
          </ul>
          <h5 class="card-text">Cara Membuat</h5>
          <ol>
              <li>Potong dadu dada ayam, lalu marinasi dengan bumbu sampai meresap. Kemudian simpan ayam yang telah dimarinasi dalam kulkas selama dua jam.</li>
              <li>Campur tepung maizena dengan fibercreme, kemudian balurkan ke potongan ayam.</li>
              <li>Kocok putih telur, kemudian tuangkan ke dalam potongan ayam yang telah diberi tepung. Campurkan hingga merata.</li>
              <li>Campurkan maizena dan tepung serbaguna dalam wadah, balurkan ayam sebelumnya hingga merata.</li>
              <li>Goreng ayam hingga warnanya keemasan, setelah itu angkat dan tiriskan.</li>
              <li>Tumis bahan tabur dengan sedikit minyak sampai harum, lalu bumbui dengan garam dan gula.</li>
              <li>Campurkan potongan ayam dengan bahan tabur hingga merata. Chicken kriuk cabai garam siap disajikan.</li>
          </ol><br>
          <p>Nah, bagaimana mudah bukan? Yuk, buat Ayam Krispy Bumbu Cabai di rumah.</p>
        </div>


        <?php var_dump($_SESSION);?>


        <!-- bookmark button -->
        <?php if (isset($_SESSION["username"])) : ?>
        <div class="container p-3 text-right">
          <form method="POST" id="bookmark">
          <h5>Bookmark :

          <?php if ($status == "ON") : ?>
          <span><input type="checkbox" name="slider" id="slider" data-width="70" data-height="40" checked /></span>
          <?php else : ?>
          <span><input type="checkbox" name="slider" id="slider" data-width="70" data-height="40"/></span>
          <?php endif?>

          </h5>
          <input type="hidden" name="status" id="status"/>
          <input type="text" name="blog_name" id="blog_name" value="<?=pathinfo(basename(__FILE__),PATHINFO_FILENAME);?>"/>
          <input type="hidden" name="username" id="username" class="form-control" placeholder="Enter Name" value="<?= $_SESSION["username"]?>"/>
          <input type="submit" name="submit_bk" id="submit_bk" class="btn btn-info" value="Submit" style="display:none;"/>
          
          </form>
        </div>
        <?php endif?>
      </div>
    </div>

    <?php 

    ?>

  <?php if (isset($_SESSION["username"])) : ?>
      <div class="container mt-3">
       <form method="POST" id="comment_form" action="">
       <h5>Komentar</h5>
        <div class="form-group">
         <input type="hidden" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" value="<?= $_SESSION["username"]?>"/>
        </div>
        <div class="form-group">
         <textarea name="comment_content" id="comment_content" class="form-control" style="width: 53rem" placeholder="Enter Comment" rows="5"></textarea>
        </div>
        <div class="form-group">
         <input type="hidden" name="comment_id" id="comment_id"/>    
         <input type="hidden" name="blog_name" id="blog_name" value="<?=pathinfo(basename(__FILE__),PATHINFO_FILENAME);?>"/>
         <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
        </div>
       </form>
       <hr style="border: 2px solid gray; border-radius: 5px; width: 840px; display: inline-block;" class="mt-2 mb-2">
      </div>
  <?php else : ?>
    <div class="container mt-3">
      <div class="card-body" style="background-color: rgba(210, 199, 147, 0.8);">
        <h3 class="text-center p-3">Anda Perlu Log-in Untuk Berkomentar</h3>
        <div class="text-center">
          <form action="../login.php">
            <button class="btn btn-info">Login</button>
          </form>
      </div>
      </div>
  </div>
  <?php endif ?>

  <!-- show comment -->
  <div class="container">
  <div id="display_comment"></div>
  </div>

  <footer class="bg-dark mt-auto">
    <div class="container">
      <footer class="py-4 footer-blog">
      <div class="row">
        <div class="col-9">
            <ul class="nav">
            <li class="nav-item"><a href="javascript:void(0)" class="nav-link px-2 text-muted contact-about" data-toggle="modal" data-target=".contact">Contact</a></li>
            <li class="nav-item"><a href="javascript:void(0)" class="nav-link px-2 text-muted contact-about" data-toggle="modal" data-target=".about">About</a></li>
            </ul>
        </div>
        <div class="col-3">
            <ul class="nav justify-content-end">
            <li class="nav-item"><a class="nav-link copyright">&copy; 2021 LEZHEALTY</a></li>
            </ul>
        </div>
        </div>
      </footer>
    </div>
  </footer>

  <div class="modal fade contact" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog custom" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <h4>Untuk info lebih lanjut hubungi Call Center kami berikut</h4>
        <br>
        <p>08123333444556 (Randu)</p>
        <p>08123456789990 (Farhan)</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade about" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog custom" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">About</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <h4>Lezhealty</h4>
      <br>
        <p>Temukan beragam resep favorit anda disini</p>
        <p>Nikmati fitur-fitur kami yang lain ya!</p>
      </div>
      </div>
    </div>
  </div>
</div>

</body>
<script src="../comment_script.js"></script>
<script src="../bookmark_button.js"></script>
</html>
