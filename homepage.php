<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larawang Munti</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #2c3e50;
            padding: 15px 30px;
            color: white;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
        }

        nav {
            margin-left: auto;
        }

        nav button {
            background-color: #2980b9;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 0 5px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }

        nav button:hover,
        nav button.active {
            background-color: #3498db;
            transform: translateY(-2px);
        }

        main {
            padding: 20px;
            max-width: 1900px;
            margin: auto;
        }

        .cover-photo {
            width: 100%;
            height: 300px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .cover-photo img {
            width: 100%;
            height: auto;
            max-height: 300px;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            transition: transform 0.5s; /* Smooth transition for the movement */
        }

        .cover-photo img:hover {
            transform: scale(1.05); /* Scale up the image on hover */
            cursor: pointer; /* Change cursor to pointer to indicate interactivity */
        }

        .intro-container {
            display: flex;
            margin-top: 20px;
        }

        .additional-photo {
            flex: 1;
            height: 300px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .additional-photo img {
            width: 100%;
            height: auto;
            max-height: 300px;
            object-fit: cover;
            transition: transform 0.5s; /* Smooth transition for the movement */
        }

        .additional-photo img:hover {
            transform: scale(1.05); /* Scale up the image on hover */
            cursor: pointer; /* Change cursor to pointer to indicate interactivity */
        }

        .introduction {
            flex: 1;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .carousel {
            position: relative;
            margin-top: 20px;
            overflow: hidden;
            height: 300px;
        }

        .carousel-images {
            display: flex;
            transition: transform 0.5s ease;
        }

        .carousel img {
            width: 100%;
            height: auto;
            max-height: 300px;
            object-fit: cover;
            transition: transform 0.5s ease; /* Smooth transition for the movement */
        }

        .carousel img:hover {
            transform: scale(1.05); /* Scale up the image on hover */
            cursor: pointer; /* Change cursor to pointer to indicate interactivity */
        }

        .carousel button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .carousel .prev {
            left: 10px;
        }

        .carousel .next {
            right: 10px;
        }

        .carousel button:hover {
            background-color: rgba(255, 255, 255, 1);
        }

        .more-button {
            text-align: center;
            margin-top: 10px;
        }

        .more-button button {
            padding: 10px 20px;
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .more-button button:hover {
            background-color: #2ecc71;
        }

        footer {
            background-color: #2c3e50;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .footer-bottom {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Larawang Munti</div>
        <nav>
            <button onclick="location.href='about.html'" aria-label="About Us">About Us</button>
            <button onclick="location.href='Historical.html'" aria-label="Historical Landmarks">Historical Landmarks</button>
            <button onclick="location.href='bestlocation.html'" aria-label="Best Locations">Best Locations</button>
            <button onclick="location.href='logout.php'" aria-label="log out">Log out</button>
        </nav>
    </header>

    <main>
        <section class="cover-photo">
            <img src="Museo.jpg" alt="Museo" loading="lazy"> <!-- Lazy loading for performance -->
        </section>

        <div class="intro-container">
            <section class="additional-photo">
                <img src="cityhall.jpg" alt="City Hall" loading="lazy">
            </section>

            <div class="introduction">
                <h2>Introduction</h2>
                <p>Explore the city of Muntinlupa through images, showcasing its beauty, culture, and heritage.</p>
            </div>
        </div>

        <section class="carousel">
            <div class="carousel-images">
                <img src="BilibidP.jpg" alt="Bilibid Prison" loading="lazy">
                <img src="RizalLagunaMarker.jpg" alt="Rizal Laguna Marker" loading="lazy">
                <img src="Liwasanngbayani.jpg" alt="Liwasang Bayani" loading="lazy">
                <img src="Jamboree-Lake.jpg" alt="Jamboree Lake" loading="lazy">
                <img src="JapCemetery.jpg" alt="Japanese Cemetery" loading="lazy">
            </div>
            <button class="prev" onclick="moveSlide(-1)" aria-label="Previous Slide">&#10094;</button>
            <button class="next" onclick="moveSlide(1)" aria-label="Next Slide">&#10095;</button>
        </section>

    </main>

    <footer>
        <div class="footer-bottom">
            <p>&copy; 2024 Larawang Munti. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('.carousel-images img');
        const totalSlides = slides.length;

        function showSlide(index) {
            currentIndex = (index + totalSlides) % totalSlides; // Cyclic behavior
            const offset = -currentIndex * 100; // Calculate offset for translation
            document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;
        }

        function moveSlide(step) {
            showSlide(currentIndex + step); // Move slide based on step (+1 or -1)
        }

        // Optional: Add auto-play functionality for the carousel
        setInterval(() => {
            moveSlide(1); // Move to the next slide every 5 seconds
        }, 5000);
    </script>
</body>
</html>
