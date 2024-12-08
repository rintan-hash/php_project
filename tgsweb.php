<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Gunung-Gunung Indonesia</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Navbar style */
nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.9);
    z-index: 1000; /* Pastikan navbar berada di atas konten */
}

/* Tambahkan padding di konten agar tidak tertutup navbar */
body {
    padding-top: 60px; /* Sesuaikan dengan tinggi navbar */
}

/* Style untuk menu toggle di mobile */
.menu-toggle {
    display: none;
    font-size: 28px;
    color: #fff;
    cursor: pointer;
}

/* Tampilkan menu toggle hanya di layar kecil */
@media (max-width: 768px) {
    .menu-toggle {
        display: block;
    }

    nav ul {
        display: none;
        flex-direction: column;
        gap: 10px;
        width: 100%;
        background: rgba(0, 0, 0, 0.9);
        position: absolute;
        top: 60px; /* Sesuaikan dengan tinggi navbar */
        left: 0;
        padding: 20px 0;
    }

    nav ul.show {
        display: flex;
    }
}

        /* Reset dan Styling Umum */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #3a1c71, #d76d77, #ffaf7b);
            color: #fff;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar */
        nav {
            background: rgba(0, 0, 0, 0.5);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .logo img {
            width: 80px;
            height: 80px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 30px;
            transition: background-color 0.4s ease, transform 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #ffaf7b;
            transform: translateY(-3px);
        }

        nav .univ-name {
            font-size: 1.8em;
            font-weight: bold;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 150px 20px 80px;
            background: url('https://source.unsplash.com/1600x900/?mountain') no-repeat center center/cover;
            color: white;
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        .hero h1 {
            font-size: 56px;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
            text-shadow: 3px 3px 15px rgba(0, 0, 0, 0.7);
        }

        .hero p {
            font-size: 22px;
            max-width: 700px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        /* Video Section */
        .videos {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
            flex-wrap: wrap;
            position: relative;
            z-index: 1;
        }

        .videos iframe {
            width: 420px;
            height: 300px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.4s ease;
        }

        .videos iframe:hover {
            transform: translateY(-15px);
        }

        /* Konten Gunung */
        .content {
            display: none;
            text-align: center;
            padding: 60px 20px;
            background-color: rgba(0, 0, 0, 0.6);
            margin: 100px 10px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
            animation: fadeIn 1s ease;
        }

        .content h3 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #ffaf7b;
        }

        .content p {
            font-size: 18px;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Animasi Fade In */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Footer */
        footer {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: auto;
        }

        footer p {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #ffaf7b;
            text-decoration: none;
            margin: 0 10px;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #d76d77;
        }

        /* Responsivitas */
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
            }

            nav ul {
                flex-direction: column;
                gap: 10px;
                margin-top: 10px;
            }

            .hero h1 {
                font-size: 40px;
            }

            .videos iframe {
                width: 100%;
                height: 200px;
            }
        }

        /* Styling Konten Gunung Rinjani */
.rinjani-container {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 30px;
    margin-top: 30px;
    flex-wrap: wrap;
}

.rinjani-text {
    max-width: 500px;
    text-align: left;
}

.rinjani-text p {
    font-size: 18px;
    margin-bottom: 20px;
    line-height: 1.8;
    color: #ddd;
}

.rinjani-text .highlights {
    list-style: none;
    margin-bottom: 20px;
}

.rinjani-text .highlights li {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 10px 15px;
    border-radius: 10px;
    margin-bottom: 10px;
    font-size: 16px;
}

.rinjani-text .explore-button {
    display: inline-block;
    background-color: #ffaf7b;
    color: #fff;
    text-decoration: none;
    padding: 12px 24px;
    border-radius: 30px;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.rinjani-text .explore-button:hover {
    background-color: #d76d77;
    transform: translateY(-5px);
}

.rinjani-image img {
    width: 100%;
    max-width: 700px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
}

/* Responsivitas */
@media (max-width: 768px) {
    .rinjani-container {
        flex-direction: column;
    }

    .rinjani-text {
        text-align: center;
    }
}
/* Styling Konten Gunung Merbabu */
.merbabu-container {
    display: flex;
    flex-direction: row-reverse;
    align-items: center;
    justify-content: center;
    gap: 30px;
    margin-top: 30px;
    flex-wrap: wrap;
}

.merbabu-text {
    max-width: 500px;
    text-align: left;
}

.merbabu-text p {
    font-size: 18px;
    margin-bottom: 20px;
    line-height: 1.8;
    color: #f0f0f0;
}

.merbabu-text .highlights {
    list-style: none;
    margin-bottom: 20px;
}

.merbabu-text .highlights li {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 10px 15px;
    border-radius: 10px;
    margin-bottom: 10px;
    font-size: 16px;
}

.merbabu-text .explore-button {
    display: inline-block;
    background-color: #6a11cb;
    color: #fff;
    text-decoration: none;
    padding: 12px 24px;
    border-radius: 30px;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.merbabu-text .explore-button:hover {
    background-color: #2575fc;
    transform: translateY(-5px);
}

.merbabu-image img {
    width: 100%;
    max-width: 700px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
}

/* Responsivitas */
@media (max-width: 768px) {
    .merbabu-container {
        flex-direction: column;
    }

    .merbabu-text {
        text-align: center;
    }
}
/* Styling Konten Gunung Kerinci */
.kerinci-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 40px;
    margin-top: 30px;
    flex-wrap: wrap;
}

.kerinci-text {
    max-width: 500px;
    text-align: left;
}

.kerinci-text p {
    font-size: 18px;
    margin-bottom: 20px;
    line-height: 1.8;
    color: #f5f5f5;
}

.kerinci-text .highlights {
    list-style: none;
    padding: 0;
    margin-bottom: 20px;
}

.kerinci-text .highlights li {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 10px 15px;
    border-radius: 10px;
    margin-bottom: 10px;
    font-size: 16px;
    color: #fff;
}

.kerinci-text .explore-button {
    display: inline-block;
    background: linear-gradient(135deg, #ff6a00, #ee0979);
    color: #fff;
    text-decoration: none;
    padding: 12px 24px;
    border-radius: 30px;
    font-weight: bold;
    transition: background 0.3s ease, transform 0.3s ease;
}

.kerinci-text .explore-button:hover {
    background: linear-gradient(135deg, #ee0979, #ff6a00);
    transform: translateY(-5px);
}

.kerinci-image img {
    width: 100%;
    max-width: 700px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
}

/* Responsivitas */
@media (max-width: 768px) {
    .kerinci-container {
        flex-direction: column;
    }

    .kerinci-text {
        text-align: center;
    }
}
/* Styling untuk Bagian Gunung Lainnya */
.content {
    text-align: center;
    margin: 50px 0;
    padding: 20px;
    color: #f5f5f5;
}

.section-description {
    font-size: 18px;
    margin-bottom: 40px;
    color: #ccc;
}

/* Kontainer Kartu */
.mountain-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

/* Styling Kartu Gunung */
.card {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    overflow: hidden;
    width: 300px;
    text-align: left;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.card h4 {
    margin: 15px;
    font-size: 20px;
    color: #ff9800;
}

.card p {
    margin: 0 15px 15px;
    font-size: 16px;
    color: #e0e0e0;
}

/* Tombol Pelajari Lebih Lanjut */
.btn-learn-more {
    display: inline-block;
    background-color: #ff9800;
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    margin: 10px 15px 20px;
    font-size: 14px;
    border-radius: 5px;
    text-align: center;
    transition: background-color 0.3s, transform 0.3s;
}

.btn-learn-more:hover {
    background-color: #e65100;
    transform: scale(1.1);
}

/* Efek Hover Kartu */
.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
}

/* Responsivitas */
@media (max-width: 768px) {
    .mountain-cards {
        flex-direction: column;
        align-items: center;
    }
}



    </style>
</head>
<body>

<!-- Navbar -->
<nav>
    <div class="logo">
        <img src="logo.png" alt="Universitas Mataram">
    </div>
    <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    <ul id="navMenu">
        <li><a href="javascript:void(0);" onclick="showContent('home'); closeMenu()">Home</a></li>
        <li><a href="javascript:void(0);" onclick="showContent('rinjani'); closeMenu()">Gunung Rinjani</a></li>
        <li><a href="javascript:void(0);" onclick="showContent('merbabu'); closeMenu()">Gunung Merbabu</a></li>
        <li><a href="javascript:void(0);" onclick="showContent('kerinci'); closeMenu()">Gunung Kerinci</a></li>
        <li><a href="javascript:void(0);" onclick="showContent('lainnya'); closeMenu()">Lainnya</a></li>
    </ul>
</nav>


<!-- Hero Section -->
<section class="hero">
    <h1>Explore Gunung-Gunung Indah di Indonesia</h1>
    <p>Temukan keindahan alam Indonesia melalui perjalanan ke puncak-puncak gunung yang menantang. Dari hamparan sabana yang memukau hingga kawah aktif yang menegangkan, setiap langkah adalah petualangan baru yang penuh keajaiban. Rasakan udara segar di ketinggian, saksikan matahari terbit yang menembus awan, dan nikmati panorama spektakuler yang hanya bisa ditemui di negeri tropis ini.</p>
    <div class="videos">
        <iframe src="https://www.youtube.com/embed/VKPx_2DaXPw" title="Gunung Rinjani" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/QhSoNpADm7U" title="Gunung Merbabu" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/ZuIKfcYlaxI" title="Gunung Kerinci" allowfullscreen></iframe>
    </div>
</section>

<!-- Konten Gunung -->
<section id="rinjani" class="content">
    <h3>Gunung Rinjani</h3>
    <div class="rinjani-container">
        <div class="rinjani-text">
            <p>
                Gunung Rinjani adalah gunung berapi setinggi <strong>3.726 meter</strong> yang menjulang di Pulau Lombok, 
                Nusa Tenggara Barat. Dengan pemandangan yang memukau, Rinjani terkenal sebagai salah satu destinasi 
                pendakian terbaik di Asia Tenggara.
            </p>
            <ul class="highlights">
                <li><strong>Lokasi:</strong> Pulau Lombok, Nusa Tenggara Barat</li>
                <li><strong>Tinggi:</strong> 3.726 meter</li>
                <li><strong>Level Pendakian:</strong> Menantang</li>
                <li><strong>Daya Tarik:</strong> Danau Segara Anak, Puncak Rinjani, Air Terjun Sendang Gile</li>
            </ul>
            <a href="https://id.wikipedia.org/wiki/Gunung_Rinjani" target="_blank" class="explore-button">Jelajahi Lebih Lanjut</a>
        </div>
        <div class="rinjani-image">
            <img src="rinjani.jpg" alt="Gunung Rinjani">
        </div>
    </div>
</section>


<section id="merbabu" class="content">
    <h3>Gunung Merbabu</h3>
    <div class="merbabu-container">
        <div class="merbabu-text">
            <p>
                Gunung Merbabu adalah gunung berapi <strong>tidak aktif</strong> dengan ketinggian <strong>3.145 meter</strong> yang terletak di Jawa Tengah. 
                Dikenal dengan jalur pendakiannya yang menawan dan pemandangan sabana yang luas, Merbabu menjadi favorit para pendaki pemula maupun berpengalaman.
            </p>
            <ul class="highlights">
                <li><strong>Lokasi:</strong> Jawa Tengah, Indonesia</li>
                <li><strong>Tinggi:</strong> 3.145 meter</li>
                <li><strong>Level Pendakian:</strong> Moderat</li>
                <li><strong>Daya Tarik:</strong> Sabana, Sunrise di Puncak Kenteng Songo, Flora dan Fauna</li>
            </ul>
            <a href="https://id.wikipedia.org/wiki/Gunung_Merbabu" target="_blank" class="explore-button">Jelajahi Lebih Lanjut</a>
        </div>
        <div class="merbabu-image">
            <img src="merbabuu.jpg" alt="Gunung Merbabu">
        </div>
    </div>
</section>


<section id="kerinci" class="content">
    <h3>Gunung Kerinci</h3>
    <div class="kerinci-container">
        <div class="kerinci-image">
            <img src="kerinci.png" alt="Gunung Kerinci">
        </div>
        <div class="kerinci-text">
            <p>
                Berdiri gagah di ketinggian <strong>3.805 meter</strong>, <strong>Gunung Kerinci</strong> adalah puncak tertinggi di Pulau Sumatra dan merupakan gunung berapi tertinggi di Indonesia.  
                Terletak di <strong>Taman Nasional Kerinci Seblat</strong>, gunung ini menawarkan pemandangan spektakuler dan habitat bagi berbagai flora dan fauna langka.
            </p>
            <ul class="highlights">
                <li><strong>Lokasi:</strong> Jambi, Sumatra</li>
                <li><strong>Tinggi:</strong> 3.805 meter</li>
                <li><strong>Level Pendakian:</strong> Menantang</li>
                <li><strong>Daya Tarik:</strong> Panorama Hutan, Danau Gunung Tujuh, Habitat Harimau Sumatra</li>
            </ul>
            <a href="https://en.wikipedia.org/wiki/Mount_Kerinci" target="_blank" class="explore-button">Jelajahi Lebih Lanjut</a>
        </div>
    </div>
</section>
<section id="lainnya" class="content">
    <h3>Gunung-Gunung Lainnya di Indonesia</h3>
    <p class="section-description">
        Indonesia memiliki banyak gunung indah yang menawarkan keunikan dan tantangan tersendiri bagi para pendaki. Berikut beberapa gunung lain yang wajib masuk dalam daftar eksplorasi Anda!
    </p>
    <div class="mountain-cards">
        <!-- Gunung Bromo -->
        <div class="card">
            <img src="bromo.jpg" alt="Gunung Bromo">
            <h4>Gunung Bromo</h4>
            <p>Terkenal dengan kawah aktif dan lautan pasir yang memukau di Jawa Timur.</p>
            <a href="https://id.wikipedia.org/wiki/Gunung_Bromo" class="btn-learn-more">Pelajari Lebih Lanjut</a>
        </div>
        
        <!-- Gunung Semeru -->
        <div class="card">
            <img src="semeruu.jpg" alt="Gunung Semeru">
            <h4>Gunung Semeru</h4>
            <p>Puncak Mahameru, gunung tertinggi di Jawa dengan pemandangan menakjubkan.</p>
            <a href="https://id.wikipedia.org/wiki/Gunung_Semeru" class="btn-learn-more">Pelajari Lebih Lanjut</a>
        </div>

        <!-- Gunung Lawu -->
        <div class="card">
            <img src="lawu.jpg" alt="Gunung Lawu">
            <h4>Gunung Lawu</h4>
            <p>Gunung penuh sejarah dan keindahan mistis di perbatasan Jawa Tengah dan Jawa Timur.</p>
            <a href="https://id.wikipedia.org/wiki/Gunung_Lawu" class="btn-learn-more">Pelajari Lebih Lanjut</a>
        </div>

        <!-- Gunung Agung -->
        <div class="card">
            <img src="agung.jpg" alt="Gunung Agung">
            <h4>Gunung Agung</h4>
            <p>Gunung suci di Bali yang menawarkan pemandangan pulau dari ketinggian.</p>
            <a href="https://id.wikipedia.org/wiki/Gunung_Agung" class="btn-learn-more">Pelajari Lebih Lanjut</a>
        </div>
    </div>
</section>



<!-- Footer -->
<footer>
    <p>&copy; 2024 Universitas Mataram | Semua hak cipta dilindungi.</p>
    <div class="footer-links">
        
      
      
    </div>
</footer>

<script>
 
    // Fungsi untuk toggle menu
    function toggleMenu() {
        const navMenu = document.getElementById('navMenu');
        navMenu.classList.toggle('show');
    }

    // Fungsi untuk menutup menu
    function closeMenu() {
        const navMenu = document.getElementById('navMenu');
        navMenu.classList.remove('show');
    }

    // Menutup menu saat menggulir halaman
    window.addEventListener('scroll', () => {
        closeMenu();
    });

    function showContent(gunung) {
        var videos = document.querySelector('.videos');
        var contentSections = document.querySelectorAll('.content');

        videos.style.display = "none";
        contentSections.forEach(section => section.style.display = "none");

        if (gunung === 'home') {
            videos.style.display = "flex";
        } else {
            document.getElementById(gunung).style.display = "block";
        }
    }
</script>

</body>
</html>
