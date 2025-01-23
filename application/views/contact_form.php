<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f4ea;
            color: #333;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }
        header .menu {
            font-size: 16px;
        }
        header .menu a {
            margin: 0 10px;
            color: #333;
            text-decoration: none;
        }
        header .menu a:hover {
            text-decoration: underline;
        }
        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }
        .contact-info {
            width: 45%;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        .contact-info h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .contact-info p {
            margin: 8px 0;
        }
        .contact-info a {
            color: #007bff;
            text-decoration: none;
        }
        .contact-info a:hover {
            text-decoration: underline;
        }
        .map {
            width: 50%;
        }
        .map iframe {
            width: 100%;
            height: 450px;
            border: none;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <header>
        <div class="menu">
            <a href="hotel">Kembali</a>
           
        </div>
        
    </header>
    <div class="container">
        <div class="contact-info">
            <h2>AMAHO YOGYAKARTA</h2>
            <p>Jalan Yogyakarta, gang 23, Yogyakarta 132, Indonesia</p>
            <h3>General Inquiries</h3>
            <p>Email: <a href="welcome@hotelamaho.com">welcome@hotelamaho.com</a></p>
            <p>Fax: <a href="tel:085713459775">0857-1345-9775</a></p>
            <p>Tel: <a href="0081234671230">0081-2346-71230</a></p>
        </div>
        <div class="map">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.709366524748!2d110.36695407319533!3d-7.820555677663438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57a3764d144d%3A0x349a0a7f9e27a691!2sIndies%20HERITAGE%20Hotel!5e0!3m2!1sid!2sid!4v1735736679379!5m2!1sid!2sid" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</body>
</html>
