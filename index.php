<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Welcome To CodeBooks</title>
</head>

<style>
    body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background-image: url('https://c1.wallpaperflare.com/preview/127/366/443/library-book-bookshelf-read.jpg'); /* Replace 'background.jpg' with the path to your image */
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
</style>

<body>
    <header>
        <h1>Welcome To CodeBooks</h1>
        <h2>Find any Coding Books you need!</h2>
    </header>

    <main>
        <div class="container">
            <a class="button" href="register.php">Register</a>
            <a class="button" href="login.php">Login</a>
        </div>
    </main>

    <footer>
        <p>&copy; CodeBooks</p>
    </footer>
</body>
