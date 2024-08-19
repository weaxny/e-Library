<?php
    include "partials/_header.php";
    include "partials/_navbar.php";
    require "libs/variables.php";
    require "libs/functions.php";
?>
<?php
    if(isset($_POST["login"])){
        $username = safeHtml($_POST["username"]);
        $password = safeHtml($_POST["password"]);

        if($username == dbUser["username"] && $password == dbUser["password"]){
            setcookie("auth[username]", dbUser["username"], time() + 60*60*24);
            setcookie("auth[name]", dbUser["name"], time() + 60*60*24);
            setcookie("auth[role]", dbUser["role"], time() + 60*60*24);
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            header("Location: index.php");
        }
        else{
            echo "<div class='alert alert-danger mb-0 text-center'>Kullanıcı adı veya şifre hatalı</div>";
        }
    }
?>

<div class="container my-3">
<h1 class="mt-5 pb-5">Giriş Yap</h1>
    <div class="row">
        <div class="col-12">
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="username">Kullanıcı Adı:</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password">Şifre:</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" name="login" value="login" class="btn btn-primary">Giriş Yap</button>
            </form>
        </div>
    </div>
</div>


<?php 
     include "partials/_footer.php";
?>