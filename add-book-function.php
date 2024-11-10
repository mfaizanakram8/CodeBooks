<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codebook";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bookname = $_POST['bookname'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $year = $_POST['year'];
    $booktype = $_POST['booktype'];
    $summary = $_POST['summary'];
    $level = $_POST['level'];

    $filename = $_FILES["link"]["name"];
    $tempname = $_FILES["link"]["tmp_name"];
    $folder = "uploads/" . $filename;


    $sql = "INSERT INTO books (bookname, author, publisher, year, booktype, summary, level, link) VALUES ('$bookname', '$author', '$publisher', '$year', '$booktype', '$summary', '$level', '$filename')";

    mysqli_query($conn, $sql);

    if (move_uploaded_file($tempname, $folder) ){
        echo ("<script LANGUAGE='JavaScript'> window.alert('New Book has been successfully Added!'); window.location.href='homeadmin.php';</script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'> window.alert('Failed!'); window.location.href='homeadmin.php';</script>");
    }
}
?>
