<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap" rel="stylesheet">
<meta content="width=device-width, initial-scale=1" name="viewport" />
</head>

<body class="preload">
    <header class="header">
        <button class="header__button" id="btnNav" type="button">
            <i class="material-icons">menu</i>
        </button>
    </header>
    <nav class="nav">
        <div class="nav__links">
            <a href="#" class="nav__link">
                <i class="material-icons">dashboard</i>
                Dashboard
            </a>
            <a class="nav__link nav__link--active" href="#">
                <i class="material-icons">source</i>
                Projects
            </a>
            <a class="nav__link" href="#">
                <i class="material-icons">lock</i>
                Security
            </a>
            <a class="nav__link" href="#">
                <i class="material-icons">history</i>
                History
            </a>
            <a class="nav__link" href="#">
                <i class="material-icons">person</i>
                Profile
            </a>
        </div>
        <div class="nav__overlay"></div>
    </nav>
    <main>
        Hi my name is Dom!
    </main>
    <script>
        window.addEventListener("load", () => {
            document.body.classList.remove("preload");
        });

        document.addEventListener("DOMContentLoaded", () => {
            const nav = document.querySelector(".nav");

            document.querySelector("#btnNav").addEventListener("click", () => {
                nav.classList.add("nav--open");
            });

            document.querySelector(".nav__overlay").addEventListener("click", () => {
                nav.classList.remove("nav--open");
            });
        });
    </script>
</body>
</html>