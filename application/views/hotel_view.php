<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amaho Hotel</title>
 <!-- Menu Login -->
<!-- Menu Login dan Logout -->
<div class="login-container">
    <a href="javascript:void(0);" class="logout-link" onclick="window.location.href='login';">Logout</a>
</div>

    <style>
        .logout-container {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 1000;
}
    
        .logout-link {
    background-color: #1c1c1e;  
    color: #f0d574;
    padding: 10px 20px;
    font-size: 1.1rem;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;

}

.logout-link:hover {
    background-color: #ffd700;
    color:#1c1c1e;
}

.login-container {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 1000;
}

.login-link {
    background-color: #1c1c1e;
    color: #f0d574;
    padding: 10px 20px;
    font-size: 1.1rem;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.login-link:hover {
    background-color: #ffd700;
    color: #1c1c1e;
}

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background-color: #f8f8f8;
            color: #333;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100%;
            background-color: #1c1c1e;
            position: fixed;
            top: 0;
            left: -250px;
            transition: left 0.3s ease;
            padding: 20px 10px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.3);
        }

        .sidebar.active {
            left: 0;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: #f0d574;
            text-decoration: none;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            transition: color 0.3s ease;
        }

        .sidebar ul li a:hover {
            color: #ffd700;
        }

        .sidebar ul li a i {
            margin-right: 10px;
        }

        /* Tombol toggle */
        .menu-toggle {
            font-size: 1.5rem;
            background-color: #1c1c1e;
            color: #f0d574;
            border: none;
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 1000;
            cursor: pointer;
            border-radius: 50%;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        .menu-toggle:hover {
            background-color: #ffd700;
            color: #1c1c1e;
        }

        /* Header */
        .header {
            background-image: url('/kerkomfita/assets/images/banner1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 300px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .header h1 {
    font-size: 2.5rem;
    color: #ffd700;
    margin-bottom: 5px; /* Kurangi jarak bawah */
}

.header h2 {
    font-size: 1.2rem;
    margin-top: 0; /* Hilangkan jarak atas */
}

        /* Rooms Section */
        .rooms {
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .room {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: #fff;
            padding: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .room:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .room img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .room h3 {
            margin: 10px 0;
            font-size: 1.2rem;
            color: #1c1c1e;
        }

        .room p {
            margin: 0 0 15px;
            color: #555;
            font-size: 1rem;
        }

        /* Footer */
        .footer {
            background-color: #1c1c1e;
            padding: 20px 0;
            color: #f0d574;
        }

        .footer-nav {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 10px 0;
            padding: 0;
        }

        .footer-nav li {
            display: inline-block;
        }

        .footer-nav a {
            text-decoration: none;
            color: #f0d574;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .footer-nav a:hover {
            color: #ffd700;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 15px 0;
        }

        .social-icons a {
            font-size: 1.2rem;
            color: #f0d574;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: #ffd700;
        }

        .footer p,
        .footer address {
            text-align: center;
            margin: 5px 0;
        }

        .footer address a {
            color: #f0d574;
            text-decoration: none;
        }

        .footer address a:hover {
            color: #ffd700;
        }
    </style>
</head>

<body>
    <!-- Tombol Menu -->
    <button class="menu-toggle"><i class="fas fa-ellipsis-h"></i></button>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li><a href="hotel"><i class="fas fa-tachometer-alt"></i> Home</a></li>
            <li><a href="checkinout"><i class="fas fa-home"></i> checkin checkout</a></li>
            <li><a href="pemesanan"><i class="fas fa-home"></i> Pemesanan Kamar</a></li>
            <li><a href="tamu"><i class="fas fa-home"></i> Tamu</a></li>
            <li><a href="pelanggan"><i class="fas fa-home"></i> Pelanggan</a></li>
            <li><a href="inventaris"><i class="fas fa-calendar"></i> Inventaris</a></li>
            <li><a href="ManajemenKeuangan"><i class="fas fa-folder"></i>Invoice</a></li>
            <li><a href="contact"><i class="fas fa-book"></i> contact us</a></li>
        </ul>
    </div>

    <!-- Header -->
    <div class="header">
        <h1>Welcome to Amaho Hotel</h1>
        <h2>Enjoy The Experience</h2>
    </div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Amaho Yogyakarta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Umum */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 1100px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            color: #555;
            text-align: center;
            font-size: 16px;
        }

        /* Sekilas Section */
        .facilities {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .facility {
            text-align: center;
            background: #f4f4f4;
            padding: 20px;
            margin: 10px;
            width: 200px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .facility i {
            font-size: 40px;
            color: #ff9800;
            margin-bottom: 10px;
        }

        .facility h3 {
            font-size: 16px;
            color: #333;
        }

        .facility:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>HOTEL AMAHO YOGYAKARTA </h2>
        <p>
        AMAHO Hotel Yogyakarta adalah hotel bintang lima yang menawarkan pengalaman menginap mewah dengan sentuhan budaya lokal yang kental. Terletak strategis di pusat kota Yogyakarta, hotel ini memadukan kenyamanan modern dengan nuansa tradisional Jawa, menciptakan suasana yang hangat dan menyambut bagi setiap tamu.
        </p>

        <div class="facilities">
            <div class="facility">
                <i class="fas fa-bed"></i>
                <h3>200 Kamar dan Layanan Apartemen</h3>
            </div>
            <div class="facility">
                <i class="fas fa-users"></i>
                <h3>Ruang Konvensi dan Ruang Serbaguna</h3>
            </div>
            <div class="facility">
                <i class="fas fa-utensils"></i>
                <h3>Tempat Makanan dan Minuman</h3>
            </div>
            <div class="facility">
                <i class="fas fa-th-large"></i>
                <h3>Fasilitas dan Area Hiburan</h3>
            </div>
        </div>
    </div>
</body>
</html>

    <!-- Rooms Section -->
    <section class="rooms">
        <div class="room">
            <img src="/kerkomfita/assets/images/executive1.jpg" alt="Executive Room">
            <h3>Executive Room</h3>
            <p>Rp1.500.000,00/Night</p>
        </div>
        <div class="room">
            <img src="/kerkomfita/assets/images/deluxe1.jpg" alt="Deluxe Room">
            <h3>Deluxe Room</h3>
            <p>Rp1.000.000,00/Night</p>
        </div>
        <div class="room">
            <img src="/kerkomfita/assets/images/junior1.jpg" alt="Junior Room">
            <h3>Junior Room</h3>
            <p>Rp750.000,00/Night</p>
        </div>
    </section>

   <!-- Footer -->
   <footer class="footer">
        <ul class="footer-nav">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Karir</a></li>
            <li><a href="#">Lokasi & Kontak</a></li>
            <li><a href="#">Kebijakan Privasi</a></li>
            <li><a href="#">Buletin</a></li>
        </ul>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <p>HOTEL AMAHO YOGYAKAKRTA</p>
        <p>Managed by <a href="hotel">Discovery Hotels & Resorts</a></p>
        <address>
            Jalan yogyakarta, gang 23, Yogyakarta 132, Indonesia<br>
            Tel: 0081-2346-71230 | Fax: 0857-1345-9775 | Email: <a href="mailto:welcome@hotelamaho.com">welcome@hotelamaho.com</a>
        </address>
    </footer>

    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const sidebar = document.querySelector('.sidebar');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });
    </script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</body>
</html>
