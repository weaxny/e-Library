<?php
    include "partials/_header.php";
    include "partials/_navbar.php";
    require "libs/variables.php";
    require "libs/functions.php";
?>

<?php
        $username = null;
        $email = null;
        $name = null;
        $surname = null;
        $usernameErr="";
        $nameErr="";
        $surnameErr="";
        $emailErr="";
        $passwordErr="";
        $repasswordErr="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["name"])){
            $nameErr= 'Adınızı giriniz.';
        }
        if(empty($_POST["surname"])){
            $surnameErr= 'Soyadınızı giriniz.';
        }
        if(empty($_POST["username"])){
            $usernameErr= 'Kullanıcı adı giriniz.';
        }
        if(empty($_POST['email'])){
            $emailErr = "E-Posta adresi giriniz.";
        }
        if(empty($_POST["password"])){
            $passwordErr = "Şifre giriniz.";
        }
        if(empty($_POST["repassword"])){
            $repasswordErr = "Şifrenizi tekrar giriniz.";
        }
        else{
            if($_POST["password"] == $_POST["repassword"]){
                $name = safeHtml($_POST["name"]);
                $surname = safeHtml($_POST["surname"]);
                $username = safeHtml($_POST["username"]);
                $gender = safeHtml($_POST["gender"]);
                $email = safeHtml($_POST["email"]);
                $password = safeHtml($_POST["password"]);
                $repassword = safeHtml($_POST["repassword"]);
        

                echo $name."<br>";
                echo $surname."<br>";
                echo $username."<br>";
                echo $genders[$genderValue]."<br>";
                echo $email."<br>";
                echo $password."<br>";
                echo $repassword."<br>";
            }
            else{
                $repasswordErr = "Şifreler eşleşmiyor.";
            }
        }


    }
?>



<div class="container my3 mt-5">
    <h1>e-Library Kayıt Formu</h1>
    <div class="row mt-5">
        <div class="col-12">
            <form action="register.php" method="post">
                <div class="mb-3">
                    <label class="form-label" for="name">Ad</label>
                    <input value="<?php echo $name?>" type="text" name="name" class="form-control">
                    <p style="color: red;"><?php echo $nameErr; ?></p>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Soyad</label>
                    <input value="<?php echo $surname?>" type="text" name="surname" class="form-control">
                    <p style="color: red;"><?php echo $surnameErr; ?></p>
                </div>
                <label class="form-label" for="name">Cinsiyet</label>
                <div class="mb-3">
                    <?php foreach($genders as $gender): ?>
                        <input type="radio" name="gender" value="<?php if($gender == "Erkek"){$genderValue = 1; echo $genderValue;} else if($gender == "Kadın"){$genderValue = 2; echo $genderValue;} else{$genderValue = 3; echo $genderValue;} ?>" class="ms-2" id="<?php echo $gender; ?>" <?php if($gender == 'Belirtmek İstemiyorum') echo 'checked'; ?>><label for="<?php echo $gender; ?>" class="ms-2 form-check-label"><?php echo $gender; ?></label>
                    <?php endforeach; ?>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="username">Kullanıcı Adı</label>
                    <input value="<?php echo $username?>" type="text" name="username" class="form-control">
                    <p style="color: red;"><?php echo $usernameErr; ?></p>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="username">E-Posta</label>
                    <input type="email" name="email" class="form-control">
                    <p style="color: red;"><?php echo $emailErr; ?></p>
                </div>
       

                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Şifre</label>
                    <input type="password" name="password" class="form-control">
                    <p style="color: red;"><?php echo $passwordErr; ?></p>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="repassword">Şifre Tekrar</label>
                    <input type="password" name="repassword" class="form-control">
                    <p style="color: red;"><?php echo $repasswordErr; ?></p>
                </div>
    </div>

                <button type="submit" class="btn btn-success">Kayıt Ol</button>
                <p class="mt-2">Zaten bir hesabın var mı? <a href="login.php">Giriş Yap</a></p>
            </form>
        </div>
    </div>
</div>
<?php 
     include "partials/_footer.php";
?>