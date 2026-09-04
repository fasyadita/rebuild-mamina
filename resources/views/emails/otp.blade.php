<!DOCTYPE html>
<html>
<head>
    <title>Kode Verifikasi OTP - Mamina</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #fffdf0; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
        <h2 style="color: #3da5a5; text-align: center;">Mamina</h2>
        <p style="color: #4d5868; font-size: 16px;">Halo,</p>
        <p style="color: #4d5868; font-size: 16px;">Kami menerima permintaan untuk mereset password akun Mamina Anda. Berikut adalah kode OTP Anda:</p>
        
        <div style="text-align: center; margin: 30px 0;">
            <span style="display: inline-block; padding: 15px 30px; background-color: #fafbfc; border: 1px solid #edf0f3; border-radius: 8px; font-size: 28px; font-weight: bold; color: #3da5a5; letter-spacing: 5px;">
                {{ $otp }}
            </span>
        </div>

        <p style="color: #4d5868; font-size: 16px;">Masukkan kode tersebut pada halaman verifikasi. Kode ini berlaku selama 10 menit.</p>
        
        <p style="color: #4d5868; font-size: 14px; margin-top: 40px;">Jika Anda tidak merasa melakukan permintaan ini, abaikan saja email ini.</p>
        <br>
        <p style="color: #9ba5b6; font-size: 12px; text-align: center;">&copy; {{ date('Y') }} MAMINA INDONESIA. Semua hak cipta dilindungi.</p>
    </div>
</body>
</html>
