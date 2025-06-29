<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #ffffff;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(90deg, #03AED2 0%, #003083 100%);
            color: #fff;
            padding: 32px 0;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }
        .header div {
            margin: 0;
        }
        .header .title {
            font-family: 'Pacifico', cursive;
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 2px;
        }
        .header .subtitle {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            margin-top: 8px;
            color: #e0f7fa;
        }
        .content {
            margin: 20px 0;
            text-align: left;
            padding: 0 20px;
        }
        .content p {
            color: #555555;
            line-height: 1.6;
        }
        .success-card {
            background-color: #dff0d8;
            color: #3c763d;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            text-align: center;
        }
        .success-card img {
            margin-right: 10px;
            width: 24px;
            height: 24px;
        }
        .success-card p {
            font-size: 24px;
            margin: 0;
        }
        .footer {
            background-color: #f9f9f9;
            padding: 20px 0;
            color: #777777;
            border-radius: 0 0 8px 8px;
            text-align: center;
        }
        .footer p {
            margin: 0;
            line-height: 1.6;
        }
        .social-icons {
            margin-top: 10px;
        }
        .social-icons a {
            margin: 0 5px;
        }
        .social-icons img {
            width: 32px;
            height: 32px;
            vertical-align: middle;
        }
        .footer-links {
            margin-top: 10px;
            font-size: 14px;
        }
        .footer-links a {
            color: #777777;
            text-decoration: none;
            margin: 0 10px;
        }
        .footer-links a:hover {
            text-decoration: underline;
        }
        .footer-copyright {
            margin-top: 10px;
            font-size: 12px;
            color: #999999;
        }
        .btn {
            display: inline-block;
            background-color: #003083;
            color: #fff !important;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="title">
                Sahabat<span style="color:#FFD600;">BK</span>
            </div>
            <div class="subtitle">
                Konseling Sekolah
            </div>
        </div>        
        <div class="content">
            <div class="success-card">
                <img src="https://img.icons8.com/color/48/000000/lock-2.png" alt="Reset">
                <p>Reset Password</p>
            </div>
            <p style="font-size: 16px;">Hi {{ $user->name ?? '' }},</p>
            <p style="font-size: 16px;">Kami menerima permintaan untuk mereset password akun Anda di <b>SahabatBK.com</b>.<br>
            Silakan klik tombol di bawah ini untuk mengatur password baru:</p>
            <div style="text-align:center;">
                <a href="{{ $url }}" class="btn" target="_blank">Reset Password</a>
            </div>
            <p style="font-size: 16px; margin-top: 20px;">Jika Anda tidak meminta reset password, abaikan email ini.</p>
        </div>
        <div class="footer">
            <p style="font-size: 14px;">Terima kasih atas dukungannya! <span style="font-size: 20px;" role="img" aria-label="heart">😍</span></p>
            <p style="font-size: 14px;">Aplikasi Konseling SahabatBK.com.</p>
            <div class="social-icons">
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook"></a>
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter"></a>
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Instagram"></a>
            </div>
            <div class="footer-links">
                <a href="{{ url('/kebijakan-privasi') }}">KEBIJAKAN PRIVASI</a>
            </div>
            <p class="footer-copyright">Dibuat oleh SAHABATBK</p>
        </div>
    </div>
</body>
</html>