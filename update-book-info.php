<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codebook";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
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

    $sql = "UPDATE books SET bookname=?, author=?, publisher=?, year=?, booktype=?, summary=?, level=?, link=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssi", $bookname, $author, $publisher, $year, $booktype, $summary, $level, $filename, $id);

    if ($stmt->execute()) {
        echo ("<script LANGUAGE='JavaScript'> window.alert('Book record updated successfully!'); window.location.href='homeadmin.php';</script>");
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM books WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
}

$conn->close();
?>