<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if ($_SESSION['username'] !== 'aterkia') {
    header("Location: user_page.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aterkia ASV | Admin</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    body {
        align-items: flex-start;
        padding-top: 10px;
    }
    body.page-entry-anim {
        overflow-x: hidden;
    }
</style>

<body class="page-entry-anim">
    <div class="body">
        <nav>
            <div class="logo">Aterolas <span class="logo-admin">Admin</span></div>
            
            <div class="status-container">
                <span>STATUS :</span>
                <div id="status-indicator" class="status-pill disconnected">Disconnected</div>
            </div>

            <div class="logout">
                <a href="logout.php" class="btn-logout">Logout</a>
            </div>
        </nav>

        <div class="content">
            <div class="content-1">
                <div class="c1-box">
                    <img src="assets/performance.png" alt="Roll"/>
                    <span>Roll</span>
                </div>
                <div class="c1-box">
                    <img src="assets/indicator.png" alt="Pitch"/>
                    <span>Pitch</span>
                </div>
                <div class="c1-box">
                    <img src="assets/health.png" alt="Yaw"/>
                    <span>Yaw</span>
                </div>
                <div class="c1-box">
                    <img src="assets/gauge.png" alt="SOG"/>
                    <span>Speed Over Ground</span>
                </div>
                <div class="c1-box">
                    <img src="assets/360-degrees.png" alt="Heading"/>
                    <span>Heading</span>
                </div>
                <div class="c1-box">
                    <img src="assets/lightning.png" alt="Voltage"/>
                    <span>Voltage</span>
                </div>
                <div class="c1-box">
                    <img src="assets/location.png" alt="Coordinate"/>
                    <span>Coordinate</span>
                </div>
                <div class="c1-box">
                    <img src="assets/computer.png" alt="COG"/>
                    <span>Course Over Ground</span>
                </div>
            </div>

            <div class="content-2">
                <div class="c2-box">
                    <img src="assets/compass.png" alt="Maps"/>
                </div>
                <div class="c2-box">
                    <img src="assets/ship.png" alt="Trajectory"/>
                </div>
                <div class="c2-box">
                    <img src="assets/waves.png" alt="Computer vision"/>
                </div>
                <div class="c2-box">
                    <img src="assets/wind.png" alt="Photo"/>
                </div>
            </div>

            <div class="content-middle">
                
            </div>

            <div class="content-3">
                <div class="c3-image-area"></div>
                <div class="c3-text-area">
                    <h3>Informasi Kapal</h3>
                    <p>
                        Dulu, kapal ini merupakan sebuah kuda yang dipakai oleh pangeran diponegoro untuk berkelana. Namun, karena kesetiaannya yang luar biasa, kuda ini kemudian diubah menjadi kapal oleh seorang penyihir sebagai hadiah atas jasanya dalam membantu pangeran melawan penjajah. Kini, kapal ini dikenal dengan nama "Aterolas".
                    </p>
                </div>
            </div>
        </div>
</body>

</html>