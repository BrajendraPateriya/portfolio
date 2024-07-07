<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="profile">
                <!-- <img src="profile.jpg" alt="Profile Picture"> -->
                <h2>Brajendra Pateriya</h2>
                <p>Software Engineer</p>
                <p><span class="status">Available for Work</span></p>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Stack</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Licensing</a></li>
                </ul>
            </nav>
            <div class="social">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </aside>
        <main class="content">
            <section class="intro">
                <h1>Hey there! I'm Brajendra Pateriya...</h1>
                <p>Hi, pls type your thoughts</p>
                <button>More about Me</button>
            </section>
            <section class="projects">
                <h2>Recent Projects</h2>
                <div class="project-list">
                    <div class="project">
                        <img src="project1.jpg" alt="Project 1">
                        <h3>TeamWave Website in Framer</h3>
                        <p>WEB DESIGN</p>
                    </div>
                    <div class="project">
                        <img src="project2.jpg" alt="Project 2">
                        <h3>Spendly Website in Framer</h3>
                        <p>WEB DESIGN</p>
                    </div>
                    <div class="project">
                        <img src="project3.jpg" alt="Project 3">
                        <h3>Vector Website in Framer</h3>
                        <p>WEB DESIGN</p>
                    </div>
                </div>
                <button>All Projects</button>
            </section>
            <section class="stack">
                <h2>Stack</h2>
                <div class="stack-list">
                    <div class="stack-item">Framer</div>
                    <div class="stack-item">Figma</div>
                    <div class="stack-item">Notion</div>
                    <div class="stack-item">Chat GPT</div>
                    <div class="stack-item">HTML 5</div>
                    <div class="stack-item">CSS 3</div>
                </div>
                <button>All Stack</button>
            </section>
        </main>
    </div>
    <footer>
        <p>&copy; 2023. All rights reserved.</p>
        <p>Made by <a href="#">UX/UIetisan</a> in Framer</p>
    </footer>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    min-height: 100vh;
}

.container {
    display: flex;
    width: 100%;
}

.sidebar {
    width: 250px;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.profile {
    text-align: center;
}

.profile img {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    object-fit: cover;
}

.profile h2 {
    margin: 10px 0 5px;
    font-size: 20px;
}

.profile p {
    margin: 5px 0;
    color: #666;
}

.status {
    display: inline-block;
    padding: 2px 10px;
    border-radius: 20px;
    background-color: #28a745;
    color: #fff;
    font-size: 12px;
}

.menu {
    margin: 20px 0;
}

.menu ul {
    list-style: none;
}

.menu li {
    margin: 10px 0;
}

.menu a {
    text-decoration: none;
    color: #333;
    display: block;
    padding: 10px;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.menu a:hover {
    background-color: #f4f4f4;
}

.social {
    text-align: center;
    margin-top: 20px;
}

.social a {
    color: #333;
    margin: 0 10px;
    font-size: 20px;
    text-decoration: none;
}

.content {
    flex: 1;
    padding: 20px;
}

.intro {
    text-align: center;
    margin-bottom: 30px;
}

.intro h1 {
    font-size: 36px;
    margin-bottom: 10px;
}

.intro p {
    font-size: 18px;
    margin-bottom: 20px;
}

.intro button {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #333;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

.projects,
.stack {
    margin-bottom: 30px;
}

.projects h2,
.stack h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.project-list,
.stack-list {
    display: flex;
    gap: 20px;
    overflow-x: auto;
}

.project,
.stack-item {
    flex: 0 0 200px;
    background-color: #fff;
    padding: 10px;
    border-radius: 4px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.project img {
    width: 100%;
    border-radius: 4px;
    margin-bottom: 10px;
}

.project h3 {
    font-size: 18px;
    margin-bottom: 5px;
}

.project p {
    color: #666;
    font-size: 14px;
}

footer {
    text-align: center;
    padding: 20px;
    background-color: #fff;
    width: 100%;
}

footer p {
    margin: 5px 0;
}

footer a {
    text-decoration: none;
    color: #333;
}

</style>
</html>
