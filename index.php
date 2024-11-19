<?php
// Simulasi kredensial login (bisa dihubungkan dengan database di kasus nyata)
$valid_username = "Kazuya";
$valid_password = "126534";

session_start();

// Proses login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['logged_in'] = true;
    } else {
        $error_message = "Username atau password salah!";
    }
}

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!-- HTML (index.html) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
    <link rel="stylesheet" href="profil.css">
    <script defer src="profil.js"></script>
</head>
<body>
<?php if (!isset($_SESSION['logged_in'])): ?>
        <div class="login-container">
            <h2>Login</h2>
            <?php if (isset($error_message)): ?>
                <div class="error-message"><?= htmlspecialchars($error_message) ?></div>
            <?php endif; ?>
            <form method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    <?php else: ?>
    <div class="header">
        <h1>Muhammad Ade Ramadhani</h1>
        <div class="social">
            <td> IG : <a href="https://www.tiktok.com/@nakayama_kazuya_=en">nakayama_kazuya_</a></td>
            <td> TT : <a href="https://www.instagram.com/@kazuya_nakayama?lang=en">kazuya_nakayama</a></td>
        </div>
    </div>
    
    <div class="navigation">
        <button class="nav-button" onclick="showTab('home')">Home</button>
        <button class="nav-button" onclick="showTab('books')">E-Books</button>
        <button class="nav-button" onclick="showTab('contact')">Contact</button>
        <button class="nav-button" onclick="showTab('achievement')">Achievement</button>
    </div>

    <div class="content">
        <div class="tab-content" id="home">
            <h2>PROFIL</h2>
            <div class="content-container">
                <img src="12.jpg" alt="12" class="side-image">
                <div class="text-content">
                    <p class="linear-text-gradient">Hello, my name is Muhammad Ade Ramadhani. I’m from Banjarmasin and was born on October 8, 2005. I am currently studying Information Technology at Universitas Islam Negeri Antasari Banjarmasin, within the Faculty of Dakwah and Communication Sciences. My big goal is to become financially successful. For me, <i>"if others can achieve something, why can’t I?"</i></p>
        
                    <p class="linear-text-gradient">I enjoy playing badminton and listening to music; these hobbies always keep my days energized. I have a special liking for yellow rice as my favorite food, iced tea as my go-to drink, and chips as my favorite snack. With blood type O, I’m known for being open and adaptable. While I don’t have many notable achievements yet, I’m constantly motivated to keep improving.</p>
                        
                    <p class="linear-text-gradient">By the way, I’m currently single, making the most of my youth by studying and occasionally playing games.............</p>
                </div>
            </div>
            <div class="tab-container">
                <!-- Tabs Section -->
                <div class="tabs">
                  <div class="tab active" onclick="openTab(event, 'tab1')">MY DAILY LIFE ON CAMPUS</div>
                  <div class="tab" onclick="openTab(event, 'tab2')">MY DAILY LIFE AT HOME</div>
                </div>
                <!-- Content Box Section -->
                <div class="content-box active-content" id="tab1" style="text-align: left;">
                    <div class="scroll-container">
                        <div class="news-item">
                            <img src="makrab.jpg" alt="News Image" onclick="openModal('makrab.jpg')">>
                            <div class="news-content">
                                <p class="news-title">Foto ketika mengikuti kegiatan Malam Kearaban TI </p>
                                <p class="news-time">Kamis, 7 November 2024</p>
                            </div>
                        </div>
                        <div class="news-item">
                            <img src="2.jpg" alt="News Image" onclick="openModal('2.jpg')">>
                            <div class="news-content">
                                <p class="news-title">Foto ketika mengikuti kegiatan Makan Bersama yang dihadiri bapak La Taati yang merupakan Kepala Pengelolaan Tata Batas BPKH Wilayah V Banjarbaru</p>
                                <p class="news-time">Jum'at, 1 November 2024</p>
                            </div>
                        </div>
                        <div class="news-item">
                            <img src="3.jpg" alt="News Image" onclick="openModal('3.jpg')">>
                            <div class="news-content">
                                <p class="news-title">Foto ketika mengikuti seminar Nasional yang dihadiri Ustadz Yanor Kelua</p>
                                <p class="news-time">Senin, 28 Oktober 2024</p>
                            </div>
                        </div>
                        <div class="news-item">
                            <img src="4.jpg" alt="News Image" onclick="openModal('4.jpg')">>
                            <div class="news-content">
                                <p class="news-title">Foto ketika mengikuti seminar Internasional yang dihadiri tamu asal Malaysia</p>
                                <p class="news-time">tidak diketahui tanggal pembuatannya</p>
                            </div>
                        </div>
                        <div class="news-item">
                            <img src="7.jpg" alt="News Image" onclick="openModal('7.jpg')">>
                            <div class="news-content">
                                <p class="news-title">Foto ketika mengikuti Maulid Nabi Muhammad sekaligus Stadium Generale yang dihadiri Ustadz H.Ilham Humaidi</p>
                                <p class="news-time">tidak diketahui tanggal pembuatannya</p>
                            </div>
                        </div>
                        <div class="news-item">
                            <img src="5.jpg" alt="News Image" onclick="openModal('5.jpg')">>
                            <div class="news-content">
                                <p class="news-title">Foto ketika mengikuti pembelajaran bersama Ibu Hanifah yang merupakan ketua dinas Lingkungan Hidup Kalimantan Selatan </p>
                                <p class="news-time">tidak diketahui tanggal pembuatannya</p>
                            </div>
                        </div>
                        <div class="news-item">
                            <img src="9.jpg" alt="News Image" onclick="openModal('9.jpg')">>
                            <div class="news-content">
                                <p class="news-title">Foto ketika mengikuti Milad Kamush ke-11 </p>
                                <p class="news-time">tidak diketahui tanggal pembuatannya</p>
                            </div>
                        </div>
                        <div class="news-item">
                            <img src="10.jpg" alt="News Image" onclick="openModal('10.jpg')">>
                            <div class="news-content">
                                <p class="news-title">Foto ketika mengikuti Halal Bihalal bersama Dosen-dosen TI </p>
                                <p class="news-time">tidak diketahui tanggal pembuatannya</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-box" id="tab2">
                    <div class="scroll-container">
                        <div class="news-item">
                            <img src="pantai.jpg" alt="News Image" onclick="openModal('pantai.jpg')">>
                            <div class="news-content">
                                <p class= "news-title">Menikmati pemandangan Matahari Terbenam di Pantai</p>
                                <p class="news-time">Rabu, 6 November 2024</p>
                            </div>
                        </div>
                        <div class="news-item">
                            <img src="1.jpg" alt="News Image" onclick="openModal('1.jpg')">>
                            <div class="news-content">
                                <p class= "news-title">Bermain Genshin Impact untuk meredakan stress akibat ngoding</p>
                                <p class="news-time">Minggu, 3 November 2024</p>
                            </div>
                        </div>
                        <div class="news-item">
                            <img src="8.jpg" alt="News Image" onclick="openModal('8.jpg')">>
                            <div class="news-content">
                                <p class= "news-title">Menonton Bioskop untuk menghilangkan stress</p>
                                <p class="news-time">tidak diketahui tanggal pembuatannya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="books" style="display: none;">
            <h2><strong>E-BOOKS</strong></h2>
            <p>No Content for e-books.</p>
        </div>
        <div class="tab-content" id="contact">
            <main>
                <h2><strong>MY CONTACT</strong></h2>
                <form id="contactForm" onsubmit="sendMessage(event)">
                    <label for="name">Name : </label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email : </label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message : </label>
                    <textarea id="message" name="message" required></textarea>

                    <button type="submit">Send</button>
                </form>
            </main>
        </div>
        <div class="tab-content" id="achievement" style="display: block;">
            <h2><strong>SERTIFIKAT</strong></h2>
            <div class="achievement-cards">
                <div class="achievement-card">
                    <img src="studium1.jpg" alt="1" class="achievement-image" onclick="openModal('studium1.jpg')">>
                    <h3>Mengikuti Seminar Nasional</h3>
                    <p>26 September 2024</p>
                </div>
                <div class="achievement-card">
                    <img src="seminar.jpg" alt="2" class="achievement-image" onclick="openModal('seminar.jpg')">
                    <h3>Mengikuti Seminar Internasional</h3>
                    <p>11 September 2024</p>
                </div>
                <div class="achievement-card">
                    <img src="studium.jpg" alt="3" class="achievement-image" onclick="openModal('studium.jpg')">
                    <h3>Mengikuti Seminar Nasional</h3>
                    <p>24 April 2024</p>
                </div>
                <div class="achievement-card">
                    <img src="lomba.jpg" alt="4" class="achievement-image" onclick="openModal('lomba.jpg')">
                    <h3>Mengikuti Lomba Cetozz Banjarmasin</h3>
                    <p>24 April 2024</p>
                </div>
            </div>
        </div>        
    </div>
    <!-- Modal untuk gambar besar -->
    <div id="imageModal" class="modal" onclick="closeModal()">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>
    
    <a href="?logout=true" style="text-decoration: none; color: #007BFF;">Logout</a>
        </div>
    <?php endif; ?>

</body>
</html>