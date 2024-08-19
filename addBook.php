<?php
    require "libs/variables.php"; 
    require "libs/functions.php";  
?>
<?php
    include "partials/_header.php"; 
    include "partials/_navbar.php";
?>
<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <form action="index.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title">Kitap Adı:</label>
                    <input type="text" name="bookName" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="title">Kitap Yazarı:</label>
                    <input type="text" name="bookAuthor" class="form-control">
                <div class="mb-3">
                    <label for="title">Kitap Açıklaması:</label>
                    <input type="text" name="bookDesc" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="title">Kitap Kapak Resmi:</label><br>
                    <input type="file" name="bookImg">
                </div>
                <div class="mb-3">
                    <label for="title">Kitap Yıldızı:</label>
                    <input type="number" name="bookStars" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="title">Kitap Yorum Sayısı:</label>
                    <input type="number" name="bookComm" class="form-control">  
                </div>
                <div class="mb-3">
                    <label for="title">Kitap Kategorisi:</label>
                    <select class="form-control" name="bookCategory" id="">
                        <option value="Dünya Klasikleri">Dünya Klasikleri</option>
                        <option value="Bilim Kurgu">Bilim Kurgu</option>
                        <option value="Modern Roman">Modern Roman</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="title">Kitap Görünürlüğü:</label>
                    <input type="checkbox" checked="true" name="bookVisible" class="form-check-input">
                </div>
                <button type="submit" name="addBook" value="add" class="btn btn-primary">Kitap Ekle</button>

            </form>
        </div>
    </div>
</div>
<?php include "partials/_footer.php"; ?>