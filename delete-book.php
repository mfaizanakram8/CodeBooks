<?php
    include_once 'db.php';
    $sql = "DELETE FROM books WHERE id='" . $_GET["id"] . "'";
    if (mysqli_query($conn, $sql)) {
        echo ("<script LANGUAGE='JavaScript'> window.alert('Book has been removed sucessfully!'); window.location.href='homeadmin.php';</script>");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>

