<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Santos Police Department</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">LSPD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#mission">Our Mission</a></li>
                    <li class="nav-item"><a class="nav-link" href="#divisions">Divisions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#news">Latest News</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="hero" class="hero-section">
        <div class="hero-content">
            <h1 class="display-4 fw-bold">Los Santos Police Department</h1>
            <p class="lead my-4">To Protect and to Serve the people of Los Santos.</p>
            <a href="#" class="btn btn-primary btn-lg rounded-pill px-4 mx-2">File a Report</a>
            <a href="#" class="btn btn-outline-light btn-lg rounded-pill px-4 mx-2">Join The Force</a>
        </div>
    </header>

    <!-- Bento Grid Section -->
    <section id="bento" class="section">
        <div class="container">
            <div class="bento-grid">
                <div class="bento-item card p-4" style="grid-column: span 2; grid-row: span 2;">
                    <h3>Our Mission</h3>
                    <p class="lead text-muted">To safeguard the lives and property of the people we serve, to reduce the incidence and fear of crime, and to enhance public safety while working with the diverse communities to improve their quality of life.</p>
                </div>
                <div class="bento-item card p-4 text-center">
                    <i class="bi bi-shield-shaded fs-1 text-primary"></i>
                    <h5 class="mt-2">Patrol Division</h5>
                </div>
                <div class="bento-item card p-4 text-center">
                    <i class="bi bi-search fs-1 text-primary"></i>
                    <h5 class="mt-2">Detective Bureau</h5>
                </div>
                <div class="bento-item card p-4 text-center">
                    <i class="bi bi-airplane fs-1 text-primary"></i>
                    <h5 class="mt-2">Air Support</h5>
                </div>
                <div class="bento-item card p-4 text-center">
                    <i class="bi bi-person-plus-fill fs-1 text-primary"></i>
                    <h5 class="mt-2">Join The Force</h5>
                    <p class="text-muted">Start your career in law enforcement today.</p>
                </div>
                <div class="bento-item card p-4" style="grid-column: span 2;">
                    <h5>Latest News: Community Policing Initiative</h5>
                    <p class="text-muted">LSPD launches a new initiative to strengthen ties with local communities through regular town halls and outreach programs. <a href="#">Read More</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- README Content Section -->
    <section id="resources" class="section">
        <div class="container">
            <h2 class="text-center mb-5">Field Guide & Resources</h2>

            <!-- Search Bar -->
            <div class="mb-4">
                <input type="text" id="fieldGuideSearch" class="form-control bg-dark text-white" placeholder="Search in guide...">
            </div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="forum-tab" data-bs-toggle="tab" data-bs-target="#forum" type="button" role="tab">Forum</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="miranda-tab" data-bs-toggle="tab" data-bs-target="#miranda" type="button" role="tab">Miranda Rights</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="codes-tab" data-bs-toggle="tab" data-bs-target="#codes" type="button" role="tab">Ten Codes</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="radio-tab" data-bs-toggle="tab" data-bs-target="#radio" type="button" role="tab">Radio Response</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="commands-tab" data-bs-toggle="tab" data-bs-target="#commands" type="button" role="tab">Commands</button>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="forum" role="tabpanel">
                    <h3>Forum SASP</h3>
                    <ul>
                        <li><a href="https://sasp-motionliferp.com/viewtopic.php?style=2&t=4" target="_blank">LSPD Handbook</a></li>
                        <li><a href="https://sasp-motionliferp.com/viewtopic.php?t=2" target="_blank">Departement Rooster</a></li>
                        <li><a href="https://sasp-motionliferp.com/viewforum.php?style=2&f=72" target="_blank">Patrol Report Rookie</a></li>
                        <li><a href="https://sasp-motionliferp.com/viewforum.php?f=76" target="_blank">Absence Notice</a></li>
                        <li><a href="https://sasp-motionliferp.com/viewtopic.php?t=1456" target="_blank">Warning Point</a></li>
                    </ul>
                </div>
                <div class="tab-pane" id="miranda" role="tabpanel">
                    <h3>Miranda Rights</h3>
                    <h5>English</h5>
                    <p class="miranda-text">You have the right to remain silent. Anything you say can and will be used against you in a court of law. You have a right to an attorney. If you cannot afford an attorney, one will be appointed for you.</p>
                    <h5>Indonesia</h5>
                    <p class="miranda-text">kamu berhak untuk diam, apapun yang kamu katakan dapat digunakan untuk melawan anda dan dibawa ke pengadilan. Anda berhak untuk menunjuk pengacara. jika tidak ada maka kami akan menentukan seorang pengacara untuk anda.</p>
                </div>
                <div class="tab-pane" id="codes" role="tabpanel">
                    <h3>Ten Codes</h3>
                    <div class="ten-codes-grid">
                        <ul>
                            <li>10-1: Temui saya di__</li>
                            <li>10-2: Sinyal bagus</li>
                            <li>10-3: Hentikan Transmisi</li>
                            <li>10-4: Roger That (OK)</li>
                            <li>10-7: Tidak Berfungsi</li>
                            <li>10-8: Berfungsi</li>
                            <li>10-9: Ulangi</li>
                            <li>10-10: Perkelahian Sedang Berlangsung</li>
                            <li>10-12: Siaga</li>
                            <li>10-13A: Petugas Turun (Panggilan Darurat)</li>
                            <li>10-13B: Petugas Turun (Panggilan Non Darurat)</li>
                            <li>10-14: Ems Turun</li>
                            <li>10-18: Cepat</li>
                            <li>10-20: Lokasi</li>
                            <li>10-22: Batal</li>
                            <li>10-23: Tiba di lokasi ...</li>
                            <li>10-28: Plat Informasi</li>
                            <li>10-29: Memeriksa Catatan Kriminal</li>
                            <li>10-31a: Kejahatan sedang berlangsung (perampokan rumah)</li>
                            <li>10-31b: Kejahatan Sedang Berlangsung (Perampokan Toko)</li>
                            <li>10-32: Pria dengan Senjata Api</li>
                            <li>10-34: Perilaku Mencurigakan (Narkotika)</li>
                            <li>10-37: (Investigasi) Kendaraan Mencurigakan</li>
                            <li>10-38: Menghentikan Kendaraan Mencurigakan (Kejahatan)</li>
                            <li>10-41: Bertugas</li>
                            <li>10-42: Tidak Bertugas</li>
                            <li>10-45: Perburuan Ilegal</li>
                            <li>10-47: Orang yang Terluka</li>
                            <li>10-50: Kecelakaan</li>
                            <li>10-52: EMS Dibutuhkan</li>
                            <li>10-55: Penghentian Lalu Lintas</li>
                            <li>10-57: Pengejaran Sedang Berlangsung</li>
                            <li>10-60: Deskripsi Kendaraan</li>
                            <li>10-61: Deskripsi Tersangka</li>
                            <li>10-70: Kebakaran Sedang Berlangsung</li>
                            <li>10-71: Tembakan Dilepaskan</li>
                            <li>10-74: Negatif</li>
                            <li>10-76: Dalam Perjalanan__</li>
                            <li>10-77: Butuh Bantuan (Bukan keadaan darurat)</li>
                            <li>10-78: Butuh Bantuan (Darurat)</li>
                            <li>10-80: Petugas dalam Bahaya, tidak dapat merespons</li>
                            <li>10-89: Ancaman Bom</li>
                            <li>10-90: Perampokan Sedang Berlangsung (Bank/Permata)</li>
                            <li>10-94: Balapan Mobil Sedang Berlangsung</li>
                            <li>10-95: Tahanan/Subjek dalam Tahanan</li>
                            <li>10-97: Akses tidak sah</li>
                            <li>10-98: Pembobolan Penjara</li>
                            <li>10-99: Pembersihan</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane" id="radio" role="tabpanel">
                    <h3>Respon Radio</h3>
                    <ul>
                        <li><strong>On Duty</strong>: This is rookie rehan gosep reporting 10-41 at alta station</li>
                        <li><strong>Start Patroli</strong>: This is 73 Adam 514. We are 10-8 and ready for future update</li>
                        <li><strong>Respons Situasi</strong>: Dispatch, this is 73514 timing up with {badge number partner}, start of watch under those charger {tipe kendaraan} clearing all from 10-20 {dari mana} and now checking callsign to {badge number dilokasi}</li>
                        <li><strong>Pengejaran Narkotika</strong>: 73 adam 514 no doing 10-57 on suspect with 10-60 {tipe kendaraan} with {warna kendaraan} color activity 10-34 suspect at {lokasi}. suspect still on {lokasi}, heading to {tujuan lokasi} maybe</li>
                    </ul>
                </div>
                <div class="tab-pane" id="commands" role="tabpanel">
                    <h3>Mantra</h3>
                    <ul>
                        <li>On/Off Duty: <code>/aduty</code></li>
                        <li>Buka Radio: <code>/radio</code></li>
                        <li>Penjara Tawanan: <code>/jail "userID" "waktu"</code></li>
                    </ul>

                    <h3>Mantra Mobil</h3>
                    <ul>
                        <li>Menyalakan Radar: <code>/radar</code></li>
                        <li>- Didalam mobil otot U untuk melihat dispatch</li>
                        <li>- Didalam mobil otot I untuk memindahkan</li>
                    </ul>

                    <h3>Emote</h3>
                    <ul>
                        <li>Basic Life Support: <code>medbag</code> atau <code>cpr</code></li>
                        <li>Layer Film: <code>cinematic</code></li>
                        <li>Mediasi: <code>meditate</code></li>
                        <li>Tangan Sombong: <code>crossarms3</code></li>
                        <li>Tangan Dikepala: <code>surrander</code></li>
                        <li>Angkat Tangan: <code>handsup</code></li>
                    </ul>
                </div>
            </div>
        </div>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-uppercase mb-4">LSPD</h5>
                    <p>123 Police Plaza, Los Santos, SA 90210</p>
                    <p>Emergency: 911<br>Non-Emergency: 311</p>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-uppercase mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">File a Report</a></li>
                        <li><a href="#">Crime Stats</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-uppercase mb-4">Follow Us</h5>
                    <a href="#" class="fs-4 me-3"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="fs-4 me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="fs-4 me-3"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            <div class="text-center mt-5 border-top border-secondary pt-4">
                <p>&copy; 2025 Los Santos Police Department. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
