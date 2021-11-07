<?php
  require 'function.php';
  session_start();

  if (isset($_GET["keyword"])) {
     $recipe = cari($_GET["keyword"]);
     $kitchen_tips = cari_kt($_GET["keyword"]);
  }

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style><?php include 'gaya.css'; ?></style>
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
              <a class="nav-link text-white" href="index.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="kitchen-tips.php">Kitchen Tips</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="category.php">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="submit-recipe.php">Submit Resep</a>
            </li>
          </ul>

        <form class="form-inline my-2 my-lg-0" action="result.php" method="get">
           <input class="form-control me-2" style="width:200px" name="keyword" placeholder="Search" aria-label="Search">
        </form>
        <span>
        <?php if (!apply_foto_profil()) : ?>
            <a class="navbar-brand ml-4" href="login.php">
              <img class="rounded-circle" src="img/avatar.jpg" alt="..." height="36" width="36" />
            </a>
          <?php else : ?>
            <a class="navbar-brand ml-4" href="login.php">
              <img class="rounded-circle" src="upload/foto-profil/<?=apply_foto_profil()?>" alt="..." height="36" width="36" />
            </a>
            <?php endif ?>
      </span>
      </div>
      </div>
    </nav>

  <div class="container" style="margin-top:110px">
    <h3>Search Result</h3><hr/>
        <nav>
          <div class="nav nav-tabs bg-warning rounded py-3 mb-3 justify-content-center" id="nav-tab" role="tablist";">
            <a class="nav-item nav-link select active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Resep</a>
            <a class="nav-item nav-link select" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Kitchen Tips</a>
          </div>
        </nav>
        <div class="tab-content " id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                <?php foreach($recipe as $card) : ?>
                  <?php $link_img = $card["sumber"].".jpg";?>
                    <form action="search-category.php" method="post">
                    <div class="card mb-3" style="max-width: 900px;">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="blog/<?= $link_img;?>" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <a class="hover-orange" href=blog/<?= $card["sumber"].".php"; ?>><h5 class="card-title"><?=$card["judul"]?></h5></a>
                            <p class="card-text"><?=$card["deskripsi"]?></p>
                            <?php if ( strlen($card["tag1"])) :?>
                            <input type="submit" class="btn btn-primary" name="submit_ct" value="<?php echo $card["tag1"];?>">  
                            <?php endif ?>
                            <?php if (strlen($card["tag2"])) :?>
                              <input type="submit" class="btn btn-primary" name="submit_ct" value="<?php echo $card["tag2"];?>">
                            <?php endif ?>
                            <?php if ( strlen($card["tag3"])) :?>
                              <input type="submit" class="btn btn-primary" name="submit_ct" value="<?php echo $card["tag3"];?>">
                            <?php endif ?>
                            <?php if ( strlen($card["tag4"])) :?>
                              <input type="submit" class="btn btn-primary" name="submit_ct" value="<?php echo $card["tag4"];?>">
                            <?php endif ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                <?php 
                endforeach; 
                $_GET["keyword"] = NULL;
                ?>
                
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                    <?php foreach($kitchen_tips as $a):?>
                    <div class="container">
                      
                    
                  <div class="card mb-3" style="max-width: 700px;">
                      <div class="row no-gutters">
                      <div class="col-md-4">
                          <img src="kitchen-tips/<?=$a["gambar"].".jpg"?>" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8">
                          <div class="card-body">
                          <h5 class="card-title"><?=$a["judul"];?></h5>
                          <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target=".<?=$a["id"];?>">Baca Selengkapnya</a>
                          </div>
                      </div>
                      </div>
                  </div>
              </div>
              

              <div class="modal fade <?=$a["id"];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><?=$a["judul"];?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <?=$a["deskripsi"]?>


                </div>
              </div>
            </div>
          </div>
          <?php endforeach?>

          </div>
        </div>
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
</html>