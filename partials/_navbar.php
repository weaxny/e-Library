<?php 
    $categories = array("Bilim Kurgu", "Dünya Klasikleri", "Modern Roman");
    sort($categories);

    

?>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand ms-5" href="index.php">e-Library</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="index.php">Ana Sayfa</a>
        </li>
        <li class="nav-item">
        <a class="nav-link"  href="index.php">Popüler Kitaplar</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kategoriler
            </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <?php for ($i=0; $i < count($categories); $i++):?>
                <li><a class="dropdown-item" href="#"><?php echo $categories[$i];?></a></li>
                <?php endfor ?>

            </ul>
        </li>
      <?php if(isset($_COOKIE["auth"]) && $_COOKIE["auth"]["role"] == "admin"):?>
        <li class="nav-item"> <a class="nav-link" href="addBook.php">Kitap Ekle</a></li>
      <?php endif; ?>
      </ul>
      <ul class="navbar-nav me-4">
        <?php if(isset($_COOKIE["auth"])):?>
        <li class="nav-item me-4"><a class="text-decoration-none text-black" href="profile.php"><i class="bi bi-person-circle"></i><span class="fw-bold ms-2"><?php echo $_COOKIE["auth"]["name"];?></a></span></li>
        <li class="nav-item"><a class="text-decoration-none text-black" href="logout.php">Çıkış Yap</a></li>
        <?php else: ?>
        <li class="nav-item me-4"><a class="text-decoration-none text-black" href="login.php">Giriş Yap</a></li>
        <li class="nav-item me-4"><a class="text-decoration-none text-black" href="register.php">Kayıt Ol</a></li>
        <?php endif; ?>
      </ul>
      <form action="index.php" method="get" class="d-flex me-5" role="search">
        <input class="form-control me-2" name="q" type="search" placeholder="Ara" aria-label="Search">
        <button class="btn btn-success" type="submit"><i class="bi bi-search"></i></button>
      </form>


    </div>
  </div>
</nav>


