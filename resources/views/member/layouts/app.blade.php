<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Mamina')</title>
    <link rel="icon" href="{{ asset('img/logo-2.png') }}" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">


    <!-- Additional Styles Section -->
    @stack('styles')
</head>

<body>
    <!-- Navbar -->
    @include('member.layouts.navbar')

    <!-- Main Content -->
    <main style="margin-top: 90px;"> <!-- Tambahkan margin karena navbar fixed -->
        <!-- Flash Messages -->
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- Dynamic Content -->
        @yield('content')
    </main>

    <!-- Footer -->
    @include('member.layouts.footer')
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Additional Scripts Section -->
    <!-- Additional Scripts Section -->
    @if(session('cart_added'))
    <div id="successCartModal" class="success-modal-overlay">
        <div class="mamina-modal-content success-cart-modal">
            <div class="success-icon-wrapper">
                <div class="success-circle">
                    <i class="fa-solid fa-check"></i>
                </div>
                <div class="bubble bubble-1"></div>
                <div class="bubble bubble-2"></div>
            </div>
            
            <h3 class="modal-title-success">Berhasil Ditambahkan!</h3>
            
            <p class="modal-description-success">
                Layanan pilihan Anda telah berhasil ditambahkan ke keranjang. Anda dapat melihat dan mengelola pesanan melalui ikon keranjang pada menu navigasi di atas.
            </p>
            
            <div class="modal-buttons-vertical">
                <a href="{{ url('/member/keranjang') }}" class="btn-lihat-keranjang">
                    <i class="fa-solid fa-basket-shopping"></i> Lihat Keranjang
                </a>
                <button type="button" class="btn-kembali" onclick="closeSuccessCartModal()">
                    Kembali
                </button>
            </div>
            
            <div class="modal-footer-text">
                MAMINA CARE <span class="dots"><span class="dot-pink"></span><span class="dot-green"></span></span>
            </div>
        </div>
    </div>

    <style>
        .success-modal-overlay {
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: rgba(50, 70, 70, 0.45);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .success-cart-modal {
            max-width: 400px !important;
            background: #ffffff !important;
            border-radius: 25px !important;
            padding: 40px 30px 30px !important;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            animation: modalIn 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
        }

        .success-icon-wrapper {
            position: relative;
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .success-circle {
            width: 80px;
            height: 80px;
            background: #439294;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 35px;
            z-index: 2;
            position: relative;
        }
        
        .success-circle::before {
            content: '';
            position: absolute;
            inset: -15px;
            background: #eaf8f6;
            border-radius: 50%;
            z-index: -1;
        }

        .bubble {
            position: absolute;
            border-radius: 50%;
        }

        .bubble-1 {
            width: 20px;
            height: 20px;
            background: #ffd9d2;
            top: 0;
            right: 5px;
        }

        .bubble-2 {
            width: 14px;
            height: 14px;
            background: #ffffff;
            border: 2px solid #eaf8f6;
            bottom: 10px;
            left: 5px;
        }

        .modal-title-success {
            font-family: 'Fredoka', sans-serif;
            font-size: 24px;
            font-weight: 700;
            color: #303030;
            margin-bottom: 15px;
        }

        .modal-description-success {
            font-family: 'Nunito', sans-serif;
            font-size: 14px;
            line-height: 1.6;
            color: #7d7d7d;
            margin-bottom: 30px;
        }

        .modal-buttons-vertical {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 25px;
        }

        .btn-lihat-keranjang {
            background: #439294;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 12px;
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            font-size: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: 0.2s ease;
        }

        .btn-lihat-keranjang:hover {
            background: #377d7f;
            color: #ffffff;
        }

        .btn-kembali {
            background: #ffffff;
            color: #439294;
            border: 2px solid #d7eeee;
            padding: 12px 20px;
            border-radius: 12px;
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            font-size: 15px;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .btn-kembali:hover {
            background: #f7fcfc;
        }

        .modal-footer-text {
            font-family: 'Nunito', sans-serif;
            font-size: 11px;
            font-weight: 800;
            color: #b0b0b0;
            letter-spacing: 1px;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .dots {
            display: flex;
            gap: 4px;
        }
        
        .dot-pink, .dot-green {
            width: 6px;
            height: 6px;
            border-radius: 50%;
        }
        .dot-pink { background: #ffd9d2; }
        .dot-green { background: #d7eeee; }

    </style>
    <script>
        function closeSuccessCartModal() {
            document.getElementById('successCartModal').style.display = 'none';
        }
        
        // Klik area luar modal untuk menutup
        document.getElementById('successCartModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeSuccessCartModal();
            }
        });
    </script>
    @endif
    
    @stack('scripts')
</body>

</html>
