<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>CodeBooks - User</title>
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
.card-container {
        display: flex;
        gap: 20px;
        padding: 20px;
    }

    /* Individual card styling */
    .card {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        width: 300px;
        padding: 20px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
    }

    .card h2 {
        font-size: 24px;
        color: #333;
        margin-bottom: 10px;
    }

    .card p {
        font-size: 16px;
        color: #666;
        margin-bottom: 20px;
    }

    .card button {
        background-color: #3498db;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .card button:hover {
        background-color: #2980b9;
    }
</style>

<body>
    <header>
        <h1>Welcome To CodeBooks!</h1>
        <h2>Find any Coding Books and Tools you need!</h2>
    </header>

    <div class="card-container">
        <div class="card">
            <h2>Visual Studio Code</h2>
            <p>A free, open-source code editor with debugging, syntax highlighting, and extensions for various languages..</p>
            <button onclick="window.location.href='https://code.visualstudio.com/'">Download</button>
        </div>

        <div class="card">
            <h2>Git and GitHub</h2>
            <p>Git for version control and GitHub for collaboration and hosting, helping developers manage and share code.</p>
            <button onclick="window.location.href='https://github.com/'">Resource</button>
        </div>

        <div class="card">
            <h2>Chrome DevTools</h2>
            <p>Built-in Chrome tools for inspecting, debugging, and optimizing web pages.</p>
            <button onclick="window.location.href='https://developer.chrome.com/docs/devtools'">Resource</button>
        </div>

        <div class="card">
            <h2>Node.js</h2>
            <p>A JavaScript runtime for building scalable server-side applications, often paired with frameworks like Express.js.</p>
            <button onclick="window.location.href='https://nodejs.org/en'">Download</button>
        </div>

        <div class="card">
            <h2>Postman</h2>
            <p>A platform for API development, testing, and debugging, with an intuitive interface.</p>
            <button onclick="window.location.href='https://www.postman.com/downloads/'">Download</button>
        </div>
    </div>

    <footer>
        <p>&copy; CodeBooks</p>
    </footer>
</body>
