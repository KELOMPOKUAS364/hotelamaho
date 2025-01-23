<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Amaho Hotel Yogyakarta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #1c1c1e;
        }

        .login-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #fc9800;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #fc9800;
            border-radius: 4px;
            font-size: 16px;
            background-color: #f9f9f9;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #fc9800;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .login-container button:hover {
            background-color: #1c1c1e;
            color: #fc9800;
        }

        .login-container .divider {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
            color: #fc9800;
        }

        .login-container .divider::before,
        .login-container .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background-color: #fc9800;
            margin: 0 10px;
        }

        .login-container .oauth-button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #fc9800;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            background-color: #1c1c1e;
            color: #fc9800;
        }

        .login-container .oauth-button img {
            width: 20px;
            margin-right: 10px;
        }

        .login-container .oauth-button:hover {
            background-color: #fc9800;
            color: #1c1c1e;
        }

        .login-container .sign-up a {
            color: #fc9800;
            text-decoration: none;
        }

        .login-container .sign-up a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login - Amaho Hotel Yogyakarta</h1>

        <!-- Menampilkan pesan error jika ada -->
        <?php if ($this->session->flashdata('error')): ?>
            <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
        <?php endif; ?>

        <!-- Form Login -->
        <form action="<?php echo site_url('login/aksilogin'); ?>" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="divider">OR</div>

        <!-- OAuth Buttons -->
        <div class="oauth-button" onclick="location.href='<?php echo site_url('auth/microsoft'); ?>'">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft">
            Continue with Microsoft Account
        </div>
        <div class="oauth-button" onclick="location.href='<?php echo site_url('auth/apple'); ?>'">
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple">
            Continue with Apple
        </div>
    </div>
</body>
</html>
