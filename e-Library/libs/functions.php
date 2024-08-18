<?php

function addBook(&$books, string $book_name, string $book_img, string $book_desc, int $book_stars = 0, int $book_comm=0, string $book_category, bool $book_visible=false){
    $new_book[count($books) + 1] = array(
        "Name" => $book_name,
        "Img" => $book_img,
        "Desc" => $book_desc,
        "Stars" => $book_stars,
        "Comm" => $book_comm,
        "Category" => $book_category,
        "Visible" => $book_visible
    );

    $books = array_merge($books, $new_book);
    
} 






function transformUrl($book_name){
    return str_replace([" ", "ç", "ü", "ş", "ı", "ğ", "ö", "'", "Ç", "Ü", "Ş", "İ", "Ğ", "Ö", "@", "."],["-", "c", "u", "s", "i", "g", "o" , "-", "c", "u", "s", "i", "g", "o", "", "-"],strtolower($book_name));
} 


function safeHtml($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}