<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT-Comp</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <nav class="navbar">
        <div class="logo">IT-Comp</div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="../admin/login.php">Login</a>
        </div>
    </nav>

    <header class="hero"></header>

    <section class="search-bar">
        <div class="search-wrapper">
            <input type="text" placeholder="Cari lomba...">
            <button>Cari</button>
        </div>
    </section>

    <section class="lomba-section">
        <div class="lomba-container">

            <div class="card poster-card">
                <img src="../images/Web.png" class="poster-img">
                <div class="poster-body">
                    <h3 class="poster-title">Web Design</h3>
                    <a href="#" class="poster-btn" onclick="openDetail(
                   'Web Design',
                   '../images/Web.png',
                   'Lomba Web Design menilai UI/UX, HTML, CSS, dan kreativitas.',
                   'Jumat, 2 Mei 2026',
                   'Rp 50.000.000',
                   'SMKN 1 Cibinong',
                   '1.lorem ipsum',
                   '2.lorem'
                   )">Detail</a>
                </div>
            </div>

            <div class="card poster-card">
                <img src="../images/Game.png" class="poster-img">
                <div class="poster-body">
                    <h3 class="poster-title">Game Development</h3>
                    <a href="#" class="poster-btn" onclick="openDetail(
                   'Game Development',
                   '../images/Game.png',
                   'Membuat game dengan Unity / Godot.',
                   '5 Mei 2026',
                   'Rp 40.000.000',
                   'Online'
                   )">Detail</a>
                </div>
            </div>

            <div class="card poster-card">
                <img src="../images/Cyber.png" class="poster-img">
                <div class="poster-body">
                    <h3 class="poster-title">Cyber Security</h3>
                    <a href="#" class="poster-btn" onclick="openDetail(
                   'Cyber Security',
                   '../images/Cyber.png',
                   'CTF, penetration testing, dan network security.',
                   '10 Mei 2026',
                   'Rp 60.000.000',
                   'Jakarta'
                   )">Detail</a>
                </div>
            </div>

            <div class="card poster-card">
                <img src="../images/Network.png" class="poster-img">
                <div class="poster-body">
                    <h3 class="poster-title">Networking</h3>
                    <a href="#" class="poster-btn" onclick="openDetail(
                   'Networking',
                   '../images/Network.png',
                   'Routing, switching, dan troubleshooting.',
                   '15 Mei 2026',
                   'Rp 30.000.000',
                   'Bandung'
                   )">Detail</a>
                </div>
            </div>

            <div class="card poster-card">
                <img src="../images/IT Support.jpeg" class="poster-img">
                <div class="poster-body">
                    <h3 class="poster-title">IT Support</h3>
                    <a href="#" class="poster-btn" onclick="openDetail(
                   'IT Support',
                   '../images/IT Support.jpeg',
                   'Hardware, software, dan maintenance.',
                   '20 Mei 2026',
                   'Rp 20.000.000',
                   'Bogor'
                   )">Detail</a>
                </div>
            </div>

        </div>
    </section>

    <!-- ===== DETAIL POPUP ===== -->
    <div class="detail-modal" id="detailModal">
        <div class="detail-box">
            <div class="detail-body">

                <div>
                    <img id="detailImg" class="detail-poster">
                </div>

                <div class="detail-right">
                    <div class="detail-header">
                        <h2 id="detailTitle"></h2>
                        <span class="detail-close" onclick="closeDetail()">✖</span>
                    </div>

                    <div>
                        <strong>Description :</strong>
                        <p id="detailDesc"></p>
                    </div>

                    <div class="detail-info">
                        <div>📅 <span id="detailDate"></span></div>
                        <div>💰 <span id="detailPrize"></span></div>
                    </div>

                    <!-- S & K -->
                    <div class="detail-sk">
                        <div class="sk-title">ℹ️ S&K :</div>
                        <ol>
                            <li>Lorem ipsum</li>
                            <li>Lorem ipsum</li>
                            <li>Lorem ipsum</li>
                        </ol>
                    </div>

                    <!-- Lokasi -->
                    <div class="detail-location">
                        📍 <span id="detailLoc"></span>
                    </div>

                    <!-- Penyelenggara -->
                    <div class="detail-organizer">
                        <div class="org-title">Diadakan Oleh</div>
                        <div class="org-box">
                            <span>&lt;👤 Nama Penyelenggara&gt;</span>
                        </div>
                    </div>
                    <a href="register.php" class="detail-register">register</a>
                    <form action="register.php">
                    <button class="detail-register">Registrasi</button></form>
                </div>

            </div>
        </div>
    </div>

    <footer>© 2026 IT-Comp</footer>

    <script>
        function openDetail(title, img, desc, date, prize, loc) {
            document.getElementById("detailTitle").innerText = title;
            document.getElementById("detailImg").src = img;
            document.getElementById("detailDesc").innerText = desc;
            document.getElementById("detailDate").innerText = date;
            document.getElementById("detailPrize").innerText = prize;
            document.getElementById("detailLoc").innerText = loc;
            document.getElementById("detailModal").style.display = "flex";
        }

        function closeDetail() {
            document.getElementById("detailModal").style.display = "none";
        }
    </script>

</body>

</html>