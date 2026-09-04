<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lupa Password - Mamina</title>

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    {{-- Font Awesome --}}
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            min-height: 100%;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background: #fffdf0;
        }

        /* =========================================
           FORGOT PASSWORD PAGE
        ========================================= */
        .forgot-page {
            width: 100%;
            min-height: 100vh;

            display: flex;

            overflow: hidden;

            background: #fffdf0;
        }

        /* =========================================
           LEFT
        ========================================= */
        .forgot-left {
            width: 52%;
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 50px;

            text-align: center;

            background:
                radial-gradient(circle at 20% 20%,
                    rgba(214, 247, 232, 0.95),
                    transparent 38%),
                radial-gradient(circle at 85% 80%,
                    rgba(255, 218, 209, 0.70),
                    transparent 38%),
                #fffdf0;
        }

        .forgot-left-content {
            width: 100%;
            max-width: 600px;

            margin-top: -20px;
        }

        /* LOGO */
        .forgot-logo {
            width: 210px;

            margin: 0 auto 28px;
        }

        .forgot-logo img {
            width: 100%;
            height: auto;

            display: block;
        }

        /* TITLE */
        .forgot-left-title {
            margin: 0 0 12px;

            color: #3da5a5;

            font-size: 32px;
            font-weight: 800;

            line-height: 1.25;
        }

        /* DESCRIPTION */
        .forgot-left-description {
            margin: 0 auto;

            color: #59616d;

            font-size: 17px;
            font-weight: 500;

            line-height: 1.55;
        }

        /* =========================================
           RIGHT
        ========================================= */
        .forgot-right {
            width: 48%;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;

            padding: 50px 70px;

            background: #ffffff;

            /* border-radius: 55px 0 0 55px; */

            box-shadow:
                -10px 0 30px rgba(0, 0, 0, 0.03);
        }

        .forgot-form-container {
            width: 100%;
            max-width: 510px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* =========================================
           HEADER
        ========================================= */
        .forgot-title {
            margin: 0;

            text-align: center;

            color: #ee9d99;

            font-size: 38px;
            font-weight: 800;
        }

        .forgot-subtitle {
            margin: 8px 0 45px;

            text-align: center;

            color: #9ba5b6;

            font-size: 16px;
            font-weight: 500;
        }

        /* =========================================
           FORM
        ========================================= */
        .form-group {
            margin-bottom: 25px;
        }

        .form-label-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .form-label {
            margin: 0;

            color: #4d5868;

            font-size: 15px;
            font-weight: 700;
        }

        .forgot-password {
            color: #ee9d99;

            font-size: 13px;
            font-weight: 600;

            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        /* =========================================
           OTP INPUT
        ========================================= */
        .otp-container {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-bottom: 25px;
        }

        .otp-input {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 20px;
            font-weight: 700;
            color: #3da5a5;
            border: 1px solid #edf0f3;
            border-radius: 12px;
            background: #fafbfc;
            outline: none;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.015);
            transition: 0.2s;
        }

        .otp-input:focus {
            border-color: #3da5a5;
            background: #ffffff;
            box-shadow: 0 0 0 3px rgba(61, 165, 165, 0.10);
        }

        .resend-text {
            text-align: center;
            font-size: 14px;
            color: #9ba5b6;
            margin-bottom: 25px;
        }
        
        .resend-link {
            color: #ee9d99;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
        }

        .resend-link:hover {
            text-decoration: underline;
        }



        /* =========================================
           BUTTON
        ========================================= */
        .forgot-button {
            width: 100%;
            height: 64px;

            margin-top: 15px;

            border: none;
            border-radius: 32px;

            background: #3da5a5;

            color: #ffffff;

            font-family: 'Nunito', sans-serif;

            font-size: 18px;
            font-weight: 800;

            cursor: pointer;

            transition: 0.2s;
        }

        .forgot-button:hover {
            background: #329292;

            transform: translateY(-1px);
        }

        /* =========================================
           REGISTER
        ========================================= */
        .register-text {
            margin: 48px 0 0;

            text-align: center;

            color: #737d8d;

            font-size: 16px;
        }

        .register-link {
            color: #ee9d99;

            font-weight: 800;

            text-decoration: underline;
        }

        /* =========================================
           MOBILE
        ========================================= */
        @media (max-width: 768px) {

            .forgot-page {
                flex-direction: column;

                overflow-y: auto;
            }

            .forgot-left {
                width: 100%;
                min-height: 420px;

                padding: 45px 25px 55px;
            }

            .forgot-left-content {
                margin-top: 0;
            }

            .forgot-logo {
                width: 170px;

                margin-bottom: 22px;
            }

            .forgot-left-title {
                font-size: 25px;
            }

            .forgot-left-description {
                font-size: 14px;
            }

            .forgot-right {
                width: 100%;
                min-height: auto;

                margin-top: -30px;

                padding: 45px 25px 50px;

                border-radius: 40px 40px 0 0;
            }

            .forgot-form-container {
                min-height: auto;
            }

            .forgot-title {
                font-size: 32px;
            }

            .forgot-subtitle {
                margin-bottom: 35px;
            }
        }

        @media (max-width: 480px) {

            .forgot-left {
                min-height: 370px;

                padding: 40px 20px 50px;
            }

            .forgot-logo {
                width: 145px;
            }

            .forgot-left-title {
                font-size: 22px;
            }

            .forgot-left-description {
                font-size: 13px;
            }

            .forgot-right {
                padding: 40px 20px 45px;
            }

            .forgot-title {
                font-size: 29px;
            }

            .forgot-subtitle {
                font-size: 14px;
            }

            .otp-input {
                width: 45px;
                height: 45px;
                font-size: 18px;
            }
            .otp-container {
                gap: 8px;
            }

            .forgot-button {
                height: 58px;

                font-size: 16px;
            }

            .register-text {
                font-size: 14px;
            }
        }
    </style>
</head>


<body>

    <div class="forgot-page">

        {{-- =========================================
             BAGIAN KIRI
        ========================================== --}}
        <section class="forgot-left">

            <div class="forgot-left-content">

                {{-- LOGO --}}
                <div class="forgot-logo">
                    <img
                        src="{{ asset('img/logo-2.png') }}"
                        alt="Mamina">
                </div>

                {{-- JUDUL --}}
                <h1 class="forgot-left-title">
                    Mendampingi Ibu &amp; Si Kecil
                </h1>

                {{-- DESKRIPSI --}}
                <p class="forgot-left-description">
                    Nikmati kemudahan berkonsultasi dan memantau tumbuh kembang
                    <br>
                    si kecil bersama Mamina.
                </p>

            </div>

        </section>


        {{-- =========================================
             BAGIAN KANAN
        ========================================== --}}
        <section class="forgot-right">

            <div class="forgot-form-container">

                {{-- JUDUL --}}
                <h2 class="forgot-title">
                    Verifikasi OTP
                </h2>

                <p class="forgot-subtitle">
                    Masukkan 6 digit kode yang telah dikirimkan ke <br> email Anda.
                </p>


                {{-- FORM --}}
                <form
                    action="{{ route('guest.verifikasi.post') }}"
                    method="POST" id="otp-form">

                    @csrf

                    @if (session('status'))
                        <div style="padding: 15px; margin-bottom: 20px; border-radius: 10px; color: #2d6b6b; background-color: #e6f6f6; border: 1px solid #c2ecec; font-size: 15px; font-weight: 600; text-align: center;">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div style="padding: 15px; margin-bottom: 20px; border-radius: 10px; color: #e74c3c; background-color: #fcebeb; border: 1px solid #f9d5d5; font-size: 15px; font-weight: 600; text-align: center;">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="otp-container">
                        <input type="text" name="otp[]" class="otp-input" maxlength="1" pattern="\d*" required>
                        <input type="text" name="otp[]" class="otp-input" maxlength="1" pattern="\d*" required>
                        <input type="text" name="otp[]" class="otp-input" maxlength="1" pattern="\d*" required>
                        <input type="text" name="otp[]" class="otp-input" maxlength="1" pattern="\d*" required>
                        <input type="text" name="otp[]" class="otp-input" maxlength="1" pattern="\d*" required>
                        <input type="text" name="otp[]" class="otp-input" maxlength="1" pattern="\d*" required>
                    </div>
                    
                    <p class="resend-text" id="resend-wrapper">
                        Tidak menerima kode? <a href="#" class="resend-link" id="resend-btn" style="pointer-events: none; color: #aab2c0;">Kirim ulang (00:59)</a>
                    </p>

                    {{-- BUTTON --}}
                    <button
                        type="submit"
                        class="forgot-button">
                        Verifikasi
                    </button>

                </form>

                {{-- BACK TO LOGIN --}}
                <p class="register-text">
                    Ingat password Anda?
                    <a href="{{ route('guest.login') }}" class="register-link">Masuk</a>
                </p>

                {{-- FOOTER --}}
                <div style="text-align: center; margin-top: 50px; color: #cbd5e1; font-size: 11px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase;">
                    &copy; 2024 MAMINA INDONESIA &bull; TUMBUH KEMBANG SEHAT
                </div>

            </div>

        </section>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const inputs = document.querySelectorAll(".otp-input");
            
            inputs.forEach((input, index) => {
                // Prevent typing non-numeric
                input.addEventListener("input", function(e) {
                    this.value = this.value.replace(/[^0-9]/g, "");
                    if (this.value.length === 1 && index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    }
                });

                // Handle backspace
                input.addEventListener("keydown", function(e) {
                    if (e.key === "Backspace" && this.value === "" && index > 0) {
                        inputs[index - 1].focus();
                    }
                });

                // Handle paste
                input.addEventListener("paste", function(e) {
                    e.preventDefault();
                    const pastedData = e.clipboardData.getData('text').replace(/[^0-9]/g, '').slice(0, inputs.length);
                    if (pastedData) {
                        for (let i = 0; i < pastedData.length; i++) {
                            inputs[i].value = pastedData[i];
                        }
                        const focusIndex = pastedData.length < inputs.length ? pastedData.length : inputs.length - 1;
                        inputs[focusIndex].focus();
                    }
                });
            });

            // Timer Logic
            let timeLeft = 59;
            const resendBtn = document.getElementById("resend-btn");
            const resendWrapper = document.getElementById("resend-wrapper");

            const timer = setInterval(() => {
                timeLeft--;
                if (timeLeft <= 0) {
                    clearInterval(timer);
                    resendWrapper.innerHTML = 'Tidak menerima kode? <a href="#" class="resend-link" onclick="resendOTP(event)">Kirim ulang</a>';
                } else {
                    let formattedTime = timeLeft < 10 ? "0" + timeLeft : timeLeft;
                    resendBtn.innerHTML = `Kirim ulang (00:${formattedTime})`;
                }
            }, 1000);
        });

        // Dummy function for resend
        function resendOTP(e) {
            e.preventDefault();
            // In a real app, make an AJAX/fetch request here to send a new OTP
            alert('Kode OTP baru telah dikirimkan!');
            // Reload page to reset timer or implement timer reset logic here
            window.location.reload();
        }
    </script>
</body>

</html>