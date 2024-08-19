<div class="books ">

    <?php include "partials/_menu.php"; ?>
    <div class="ms-3 mt-5">

    <?php foreach($books as $key => $book):?>

        <?php if($book["Visible"]):?>
            <div class="card mb-3 w-50">
                <div class="row g-0">
                    <div class="w-25 col-md-4">
                    <a href="<?php echo transformUrl($book["Name"]);  ?>"><img src="<?php echo $book["Img"]; ?>" class="img-fluid rounded-start" style="width: 190px; height: 240px;" alt="..."></a>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <a class="text-decoration-none text-black" href="<?php echo transformUrl($book["Name"]); ?>"><h4 class="card-title"><?php echo $book["Name"]; ?></h4></a>
                        <p class="card-text fst-italic"><?php echo $book["Author"]; ?></p>
                        <p class="card-text"><?php echo shortDesc($book["Desc"]); ?> <a class="text-decoration-none" href="<?php echo transformUrl($book["Name"]) ?>">Devamını oku</a> </p>

                        <div class="infos">

                            <p><span class="badge rounded-pill bg-warning"><i class="bi bi-star-fill"></i> <?php echo $book["Stars"]; ?></span></p>
                            <p><span class="badge rounded-pill <?php if($book["Comm"] > 0){echo 'bg-primary';} else{echo 'bg-danger';} ?>"><i class="bi bi-chat-dots-fill"></i> <?php  if($book["Comm"] > 0){ echo $book["Comm"];} else{echo 'İlk yorumu sen yap';} ?></span></p>
                            <p><span class="badge rounded-pill bg-success"><i class="bi bi-tag-fill"><?php echo $book["Category"];?></i></span></p>

                        </div>

                    


                    </div>
                    </div>
                </div>

                
            </div>
            

        <?php endif ?>
    <?php endforeach ?>
    
    




</div>
</div>