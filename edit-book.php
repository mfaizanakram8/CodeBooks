<?php 
	include('db.php'); 
	include('session.php'); 

	if (isset($_GET['id'])) {
		$result = mysqli_query($conn,"select * from books where id='".$_GET['id']."'");
        $row = mysqli_fetch_array($result);
	}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeBook Edit Book - Admin</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-image: url('img/img2.jpg');
            /* Replace 'background.jpg' with the path to your image */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        main {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
        }

        .button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        table {
            width: 90%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
            background-color: #8faad9;
        }

        th {
            background-color: #1a273d;
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome To CodeBook's Admin</h1>
        <h2>Edit Books!</h2>
    </header>
    <br>
    <br>
    <br>

    <main>
        <form action="update-book-info.php" method="post" enctype="multipart/form-data">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" value="<?php echo $_GET['id'];?>" readonly>

            <label for="bookname">Book Name:</label>
            <input type="text" id="bookname" name="bookname" value="<?php echo $row['bookname'] ?>" required>

            <label for="author">Author:</label>
            <input type="text" id="author" name="author" value="<?php echo $row['author'] ?>" required>

            <label for="publisher">Publisher:</label>
            <input type="text" id="publisher" name="publisher" value="<?php echo $row['publisher'] ?>" required>

            <label for="year">Year:</label>
            <input type="text" id="year" name="year" value="<?php echo $row['year'] ?>" required>

            <label for="booktype">Book Type:</label>
            <input type="booktype" id="booktype" name="booktype" value="<?php echo $row['booktype'] ?>" required>

            <label for="summary">Summary:</label>
            <input type="text" id="summary" name="summary" value="<?php echo $row['summary'] ?>" required>

            <label for="level">Level:</label>
            <input type="text" id="level" name="level" value="<?php echo $row['level'] ?>" required>

            <label for="link">Link:</label>
            <input type="file" id="link" name="link">
            <p>Current file: <?php echo htmlspecialchars($row['link']); ?></p>

            <button type="submit">Submit</button>
        </form>
    </main>

    <br>

    <footer>
        <p>&copy; CodeBooks</p>
    </footer>
</body>
