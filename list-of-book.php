<?php 
	include('db.php'); 
	include('session.php'); 

	if (isset($_SESSION['username'])) {
		$result = mysqli_query($conn,"select * from user where username='".$_SESSION['username']."'");
        $row = mysqli_fetch_array($result);
	}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeBook - User</title>
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
        <h1>Welcome To CodeBook's </h1>
        <h2>Find the books you need!</h2>
    </header>
    <br>
    <br>
    <br>

    <main>
        <table>
        <?php
                include_once('db.php');
                $query=
                "SELECT * FROM books";
                $result= mysqli_query($conn, $query);
            ?>    
            <thead>
                <tr>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Year</th>
                    <th>Book Type</th>
                    <th>Summary</th>
                    <th>Level</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row=mysqli_fetch_assoc($result))
                {
                ?> 
                <tr>
                    <td><?php echo $row['bookname'] ?></td>
                    <td><?php echo $row['author'] ?></td>
                    <td><?php echo $row['publisher'] ?></td>
                    <td><?php echo $row['year'] ?></td>
                    <td><?php echo $row['booktype'] ?></td>
                    <td><?php echo $row['summary'] ?></td>
                    <td><?php echo $row['level'] ?></td>
                    <td><a href="view-book.php?id=<?php echo $row["id"]; ?>">View Book!</a></td>
                </tr>
                <?php  
                }
                ?>
            </tbody>
        </table>
    </main>

    <br>

    <footer>
        <p>&copy; CodeBooks</p>
    </footer>
</body>

</html>
