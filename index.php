

<!DOCTYPE html>
<html lang="en">

<head>

<style type="text/css">
	/* style.css */

body {
    font-family:
'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

#app {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

header {
    background-color: #0f0a4e;
    color: white;
    text-align: center;
    padding: 1em;
}

nav {
    background-color: #213422;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
}

nav li {
    margin: 0;
}

nav a {
    text-decoration: none;
    color: #fff;
    padding: 1em;
    display: block;
    transition: background-color 0.3s ease;
}

nav a:hover {
    background-color: #45a049;
}

main {
    flex: 1;
    padding: 1em;
}

#content {
    max-width: 1000px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow:
0 0 10px rgba(0, 0, 0, 0.1);
}

#content h2 {
    color: #2f8d46;
}

#content img {
    width: 400px;
    height: auto;
    margin: 0 auto;
    display: block;
    border-radius: 10px;
    box-shadow: 
2px 2px 5px rgba(0, 0, 0, 0.2);
    border: 3px solid #2F8D46;
}

form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f0f0f0;
    border-radius: 8px;
    box-shadow: 
0 0 10px rgba(0, 0, 0, 0.1);
}

form label {
    display: block;
    margin-bottom: 8px;
}

form input,
form textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

form button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: 
background-color 0.3s ease;
}

form button:hover {
    background-color: #45a049;
}
</style>

<script type="text/javascript">
	
	function changeContent(page) {
    var contentDiv = document.getElementById('content');

    switch (page) {
        case 'home':
            contentDiv.innerHTML = `
                
                <h2>
                    Welcome to the Home Page!
                </h2>
                <p>
                    This is the main page of this website.
                </p>
                <p>
                    Explore the different sections using
                    the navigation menu.
                </p>
            `;
            break;
        case 'about':
            contentDiv.innerHTML = `
                <h2>About Us</h2>
                <p>
                    This is the about page content. Learn more 
                    about me.
                </p>
                <p>
                    I'm passionate about development and deployment.
                </p>
            `;
            break;
        case 'contact':
            contentDiv.innerHTML = 
                `<h2>Contact Us</h2> 
                <p>
                    Feel free to reach out to us!
                </p> 
                <form> 
                <label for="name">Name:</label> 
                <input type="text" id="name" name="name" 
                        placeholder="Your Name" required>
                <label for="email">Email:</label> 
                <input type="email" id="email" name="email" 
                        placeholder="Your Email" required>
                <label for="message">Message:</label> 
                <textarea id="message" name="message" 
                            placeholder="Your Message" 
                            rows="4" required>
                    </textarea>
                <button type="submit">Send Message</button> 
                </form>`;
            break;

        default:
            contentDiv.innerHTML = '<h2>Page not found!</h2>';
    }
}
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content=
"width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SPA app</title>
</head>

<body>
    <div id="app">
        <header>
            <h1>
                "my entry"
            </h1>
            <h1>
                This is a demo single page application
            </h1>
        </header>
        <nav>
            <ul>
                <li>
                    <a href="#" onclick=
                    "changeContent('home')">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" onclick=
                    "changeContent('about')">
                        About
                    </a>
                </li>
                <li>
                    <a href="#" onclick=
                    "changeContent('contact')">
                        Contact
                    </a>
                </li>
            </ul>
        </nav>
        <main>
            <div id="content">

                
                <h2>Welcome to My page</h2>
                <p>
                    This is sample page
                </p>
                <p>
                    Visit My another page
                    <a href="" target="_blank">
                        here
                    </a>.
                </p>
            </div>
        </main>
    </div>
    <script src="script.js"></script>
</body>

</html>






