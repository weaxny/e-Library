<?php
    const title = "Popüler Kitaplar";
    const dbUser = array(
        "username"=> "admin",
        "password"=>"1234",
        "name"  => "Barış Yazıcı",
        "role" => "admin"
    );

    $genderValue = 3;
    $categories = array(
        array("category_name" => "Bilim Kurgu", "active" => true),
        array("category_name" => "Dünya Klasikleri", "active" => false),
        array("category_name" => "Modern Roman", "active" => false),
    );

    $genders = array(
        "1" => "Erkek",
        "2" => "Kadın",
        "3" => "Belirtmek İstemiyorum"
    );

    sort($categories);

    $books = array(
        "1" => array(
            "Name" => "Hayvan Çiftliği",
            "Author" => "George Orwell",
            "Img" => "img/hayvanciftligi.jpg",
            "Desc" => "Hayvan Çiftliği; George Orwell'in mecazi bir dille yazılmış, fabl tarzındaki siyasi hiciv romanı. Roman ilk olarak 1945'te Birleşik Krallık'ta yayımlandı. 1996'da ise geçmiş tarihler için verilen Retro Hugo Ödülü'nü 1946 senesi için aldı. Roman, Stalinizmin eleştirisidir.",
            "Stars" => 4.9,
            "Comm" => 348,
            "Category" => "Modern Roman",
            "Visible" => true
            
        ),
        "2" => array(
            "Name" => "Suç ve Ceza",
            "Author" => "Fyodor Dostoyevski",  
            "Img" => "img/sucveceza.jpg",
            "Desc" => "Suç ve Ceza, Rus yazar Fyodor Dostoyevski tarafından yazılan psikolojik ve dram türündeki romandır. İlk olarak 1866 yılı boyunca Rus Habercisi adlı edebiyat dergisinde on iki ayda yayımlandı. Daha sonra ise tek cilt olarak yayımlandı.",
            "Stars" => 5.0,
            "Comm" => 526,
            "Category" => "Dünya Klasikleri",
            "Visible" => true
        ),
        "3" => array(
            "Name" => "Metro 2033",
            "Author" => "Dmitri Gluhovski",
            "Img" => "img/metro2033.jpg",
            "Desc" => "Metro 2033, Rus yazar Dmitri Gluhovski'nin, Rusya'da 2005 yılında basılan ilk romanı. Rusya'da 2005 yılında, ABD'de 18 Mart 2010 tarihinde yayınlanana roman, Türkiye'de ise 2011 yılında çevirisi yapılarak yayınlanmıştır.",
            "Stars" => 4.6,
            "Comm" => 295,
            "Category" => "Bilim Kurgu",
            "Visible" => true
        ),
        "4" => array(
            "Name" => "Tutunamayanlar",
            "Author" => "Oğuz Atay",
            "Img" => "img/tutunamayanlar.jpg",
            "Desc" => "Tutunamayanlar, Oğuz Atay'ın ilk romanıdır. 1970 yılında TRT Roman Ödülü'nü kazandı. Oğuz Atay'ın 25'inci ölüm yıldönümü olan 2002 yılında UNESCO, Tutunamayanlar'ı İngilizce'ye tercüme edilmesi gereken seçkin edebiyat eseri listesine seçti.",
            "Stars" => 4.7,
            "Comm" => 431,
            "Category" => "Modern Roman",
            "Visible" => true
        ),
        "5" => array(
            "Name" => "Marslı",
            "Author" => "Andy Weir",
            "Img" => "img/marsli.jpg",
            "Desc" => "Marslı, Andy Weir tarafından yazılan 2011 bilim kurgu ilk romanıdır. Kitap aslen Weir'in blogunda serileştirilmiş bir biçimde yayınlandı. 2014 yılında, Crown Publishing Group'un münhasır yayın haklarını satın almasından sonra kitap yeniden yayınlandı.",
            "Stars" => 4.8,
            "Comm" => 378,
            "Category" => "Bilim Kurgu",
            "Visible" => true
        ),
        "6" => array(
            "Name" => "İlahi Komedya",
            "Author" => "Dante Alighieri",
            "Img" => "img/ilahikomedya.jpg",
            "Desc" => "İlahi Komedya, Dante tarafından 1308 civarında yazılmaya başlanan ve 1321 civarında, yazarın ölümünden kısa bir süre önce tamamlanan epik şiir. İtalyan edebiyatının en önemli örneği ve dünya edebiyatının en önemli eserlerinden biri olarak kabul edilir.",
            "Stars" => 4.3,
            "Comm" => 0,
            "Category" => "Dünya Klasikleri",
            "Visible" => true
        )
        
    );

    if(!empty($_GET['q'])){
        $keyword = $_GET['q'];
        $books = array_filter($books, function($book) use ($keyword){
            return stristr($book['Name'], $keyword) or (stristr($book['Desc'], $keyword)) or (stristr($book['Category'], $keyword));
        });
        if($books == null){
            echo '<div class="alert w-25 ms-5 mt-2 alert-danger" role="alert">
            <i class="bi bi-exclamation-circle-fill"></i> Aradığınız kelimelere uygun bir kitap bulunamadı.
            </div>'; }
        }

?>