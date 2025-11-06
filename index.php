<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSPD Field Guide</title>
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
            <a class="navbar-brand fw-bold" href="#">LSPD Field Guide</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#resources">Resources</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- README Content Section -->
    <section id="resources" class="section">
        <div class="container">
            <h2 class="text-center mb-5">LSPD Field Guide & Resources</h2>

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
                    <button class="nav-link" id="response-codes-tab" data-bs-toggle="tab" data-bs-target="#response-codes" type="button" role="tab">Response Codes</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="identity-codes-tab" data-bs-toggle="tab" data-bs-target="#identity-codes" type="button" role="tab">Identity Codes</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="plain-english-tab" data-bs-toggle="tab" data-bs-target="#plain-english" type="button" role="tab">Plain English</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="radio-abbreviations-tab" data-bs-toggle="tab" data-bs-target="#radio-abbreviations" type="button" role="tab">Radio Abbreviations</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="callsign-system-tab" data-bs-toggle="tab" data-bs-target="#callsign-system" type="button" role="tab">Callsign System</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="phonetic-alphabet-tab" data-bs-toggle="tab" data-bs-target="#phonetic-alphabet" type="button" role="tab">Phonetic Alphabet</button>
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
                    <p class="miranda-text">Anda berhak untuk diam. Apapun yang Anda katakan dapat dan akan digunakan untuk melawan Anda di pengadilan. Anda berhak atas seorang pengacara. Jika Anda tidak mampu membayar seorang pengacara, seorang akan ditunjuk untuk Anda.</p>
                </div>
                <div class="tab-pane" id="codes" role="tabpanel">
                    <h3>Ten Codes</h3>
                    <div class="ten-codes-grid">
                        <ul>
                            <li>10-1: Temui saya di [Lokasi]</li>
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
                            <li>10-23: Tiba di lokasi [Lokasi]</li>
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
                            <li>10-76: Dalam Perjalanan ke [Lokasi]</li>
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
                        <li><strong>On Duty</strong>: This is [Rank] [Nama] reporting 10-41 at [Lokasi]</li>
                        <li><strong>Start Patroli</strong>: This is [Callsign]. We are 10-8 and ready for future update</li>
                        <li><strong>Respons Situasi</strong>: Dispatch, this is [Callsign] timing up with [Badge Number Partner], start of watch under those charger [Tipe Kendaraan] clearing all from 10-20 [Dari Mana] and now checking callsign to [Badge Number di Lokasi]</li>
                        <li><strong>Pengejaran Narkotika</strong>: [Callsign] no doing 10-57 on suspect with 10-60 [Tipe Kendaraan] with [Warna Kendaraan] color activity 10-34 suspect at [Lokasi]. suspect still on [Lokasi], heading to [Tujuan Lokasi] maybe</li>
                    </ul>
                </div>
                <div class="tab-pane" id="response-codes" role="tabpanel">
                    <h3>Kode Respon</h3>
                    <ul>
                        <li><strong>Kode 0</strong>: Situasi Sangat Darurat!!!</li>
                        <li><strong>Kode 1</strong>: non-Darurat - sirene OFF dan lampu OFF</li>
                        <li><strong>Kode 2</strong>: Merespons Darurat - sirene OFF dan lampu ON</li>
                        <li><strong>Kode 3</strong>: Menanggapi Darurat - sirene ON dan lampu ON</li>
                        <li><strong>Kode 4</strong>: Situasi terkendali, tanpa bantuan</li>
                        <li><strong>Kode 5</strong>: Detektif sedang diselidiki</li>
                        <li><strong>Kode 6</strong>: Menyelidiki lokasi kejadian</li>
                        <li><strong>Kode 7</strong>: Istirahat</li>
                    </ul>
                </div>
                <div class="tab-pane" id="identity-codes" role="tabpanel">
                    <h3>Kode Identitas (IC)</h3>
                    <ul>
                        <li><strong>IC1</strong>: Putih</li>
                        <li><strong>IC2</strong>: Hitam</li>
                        <li><strong>IC3</strong>: Hispanik</li>
                        <li><strong>IC4</strong>: Timur Tengah</li>
                        <li><strong>IC5</strong>: Asia</li>
                        <li><strong>IC6</strong>: Etnis tidak diketahui</li>
                    </ul>
                </div>
                <div class="tab-pane" id="plain-english" role="tabpanel">
                    <h3>Plain English</h3>
                    <ul>
                        <li><strong>Shots fired</strong>: Tembakan dilepaskan di lokasi</li>
                        <li><strong>Officer needs help</strong>: Petugas dalam bahaya langsung (tertembak, dll.)</li>
                        <li><strong>Negative</strong>: Tidak</li>
                        <li><strong>Officer down</strong>: Petugas tidak berdaya</li>
                        <li><strong>Suspect deceased</strong>: Tersangka meninggal</li>
                        <li><strong>Suspect tased</strong>: Tersangka telah ditundukkan</li>
                        <li><strong>Be on the lookout</strong>: Orang yang dibutuhkan untuk diinterogasi</li>
                        <li><strong>All-points bulletin</strong>: Tersangka ingin pemberitahuan</li>
                    </ul>
                </div>
                <div class="tab-pane" id="radio-abbreviations" role="tabpanel">
                    <h3>Daftar Singkatan Radio</h3>
                    <ul>
                        <li><strong>ADW</strong>: Assault with a Deadly Weapon</li>
                        <li><strong>ALS</strong>: Advanced Life Support</li>
                        <li><strong>ASAP</strong>: As Soon As Possible</li>
                        <li><strong>BLS</strong>: Basic Life Support</li>
                        <li><strong>BOLO</strong>: Be On the Look Out</li>
                        <li><strong>CCW</strong>: Carrying a Concealed Weapon</li>
                        <li><strong>DOA</strong>: Dead On Arrival</li>
                        <li><strong>DOB</strong>: Date of Birth</li>
                        <li><strong>DOC</strong>: Department of Corrections</li>
                        <li><strong>DUI</strong>: Driving Under the Influence</li>
                        <li><strong>EMS</strong>: Emergency Medical Services</li>
                        <li><strong>FTO</strong>: Field Training Officer</li>
                        <li><strong>GOV</strong>: Government</li>
                        <li><strong>GSW</strong>: Gun Shot Wound</li>
                        <li><strong>LVC</strong>: Lost Visual Contact</li>
                        <li><strong>LEO</strong>: Law Enforcement Officer</li>
                        <li><strong>LOS</strong>: Length of Service</li>
                        <li><strong>MDT</strong>: Mobile Data Terminal</li>
                        <li><strong>PIT</strong>: Pursuit Immobilization Technique</li>
                        <li><strong>POV</strong>: Privately-Owned Vehicle</li>
                        <li><strong>R&U</strong>: Read and Understand</li>
                        <li><strong>SIW</strong>: Standard-Issue Weapon</li>
                        <li><strong>VCB</strong>: Visual Contact Broken</li>
                    </ul>
                </div>
                <div class="tab-pane" id="callsign-system" role="tabpanel">
                    <h3>Sistem Callsign</h3>
                    <ul>
                        <li><strong>High Command</strong>: STAFF</li>
                        <li><strong>Command</strong>: VICTOR</li>
                        <li><strong>SPV - NCO (Partner)</strong>: ADAM</li>
                        <li><strong>SPV - NCO (Solo)</strong>: LINCOLN</li>
                        <li><strong>Interceptor</strong>: HENRY</li>
                        <li><strong>Interceptor HC</strong>: GOLF</li>
                        <li><strong>Motorcycle</strong>: MARY</li>
                        <li><strong>Metro</strong>: DAVID</li>
                        <li><strong>Bearcat</strong>: BEAST</li>
                        <li><strong>K9 Unit</strong>: NORA</li>
                        <li><strong>ASD</strong>: AIR</li>
                        <li><strong>ASD High Command</strong>: AIR-STAFF</li>
                        <li><strong>Detective</strong>: GEORGE</li>
                    </ul>
                </div>
                <div class="tab-pane" id="phonetic-alphabet" role="tabpanel">
                    <h3>Alfabet Fonetik Penegak Hukum</h3>
                    <ul>
                        <li><strong>A</strong>: ADAM</li>
                        <li><strong>B</strong>: BOY</li>
                        <li><strong>C</strong>: CHARLES</li>
                        <li><strong>D</strong>: DAVID</li>
                        <li><strong>E</strong>: EDWARD</li>
                        <li><strong>F</strong>: FRANK</li>
                        <li><strong>G</strong>: GEORGE</li>
                        <li><strong>H</strong>: HENRY</li>
                        <li><strong>I</strong>: IDA</li>
                        <li><strong>J</strong>: JOHN</li>
                        <li><strong>K</strong>: KING</li>
                        <li><strong>L</strong>: LINCOLN</li>
                        <li><strong>M</strong>: MARY</li>
                        <li><strong>N</strong>: NORA</li>
                        <li><strong>O</strong>: OCEAN</li>
                        <li><strong>P</strong>: PAUL</li>
                        <li><strong>Q</strong>: QUEEN</li>
                        <li><strong>R</strong>: ROBERT</li>
                        <li><strong>S</strong>: SAM</li>
                        <li><strong>T</strong>: TOM</li>
                        <li><strong>U</strong>: UNION</li>
                        <li><strong>V</strong>: VICTOR</li>
                        <li><strong>W</strong>: WILLIAM</li>
                        <li><strong>X</strong>: X-RAY</li>
                        <li><strong>Y</strong>: YOUNG</li>
                        <li><strong>Z</strong>: ZEBRA</li>
                    </ul>
                </div>
                <div class="tab-pane" id="commands" role="tabpanel">
                    <h3>Mantra</h3>
                    <ul>
                        <li>On/Off Duty: <code>/aduty</code></li>
                        <li>Buka Radio: <code>/radio</code></li>
                        <li>Penjara Tawanan: <code>/jail [User ID] [Waktu]</code></li>
                    </ul>

                    <h3>Mantra Mobil</h3>
                    <ul>
                        <li>Menyalakan Radar: <code>/radar</code></li>
                        <li>- Didalam mobil otot U untuk melihat dispatch</li>
                        <li>- Didalam mobil otot I untuk memindahkan</li>
                    </ul>

                    <h3>Emote</h3>
                    <ul>
                        <li>Basic Life Support: <code>/e medbag</code> atau <code>/e cpr</code></li>
                        <li>Layer Film: <code>/e cinematic</code></li>
                        <li>Mediasi: <code>/e meditate</code></li>
                        <li>Tangan Sombong: <code>/e crossarms3</code></li>
                        <li>Tangan Dikepala: <code>/e surrander</code></li>
                        <li>Angkat Tangan: <code>/e handsup</code></li>
                        <li>Tangan Dibelakang: <code>/e airforce3</code> atau <code>/e valet3</code></li>
                        <li>Jongkok: <code>/e kneel2</code></li>
                        <li>Peluk: <code>/e hug</code></li>
                        <li>Kerja Otomatis: <code>/e autoharvest</code></li>
                    </ul>
                </div>
            </div>
        </div>

    <!-- Footer -->
    <footer id="contact" class="footer mt-auto py-3 bg-dark">
        <div class="container">
            <div class="text-center">
                <p class="text-white">&copy; 2025 LSPD Field Guide. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

