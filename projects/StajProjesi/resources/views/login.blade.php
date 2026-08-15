<!-- Navbar'ı çağırıyoruz -->
@include("layouts.navbar")

<style>
    /* Preloader'ı gizleyen kodumuz */
    #js-preloader, .js-preloader {
        display: none !important;
        opacity: 0 !important;
        visibility: hidden !important;
        z-index: -9999 !important;
    }

    /* Navbar'ı beyaz ve sabit yapan kodumuz */
    .header-area {
        background-color: #fff !important;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.05) !important;
        position: relative !important;
    }

    .header-area .main-nav .nav li a,
    .header-area .main-nav .logo {
        color: #1e1e1e !important;
    }

    /* Form odaklanma rengi */
    .form-control:focus {
        border-color: #f35525 !important;
        box-shadow: 0 0 0 0.25rem rgba(243, 85, 37, 0.25) !important;
    }
</style>

<div style="background-color: #fdfdfd; min-height: 90vh; padding-top: 50px; padding-bottom: 50px;">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">
        <!-- Altın Oran: max-width 500px -->
        <div class="card shadow-lg border-0" style="width: 100%; max-width: 500px; border-radius: 15px; background-color: #fff;">
            <div class="card-body p-5">

                <h2 class="text-center mb-2" style="font-weight: 800; color: #2a2a2a; letter-spacing: 1px;">
                    ASTRO<span style="color: #f35525;">STAY</span>
                </h2>
                <p class="text-center mb-4 text-muted">Tekrar Hoş Geldin!</p>

                <!-- Eğer oturumda bir success (başarı) mesajı varsa yeşil kutuda göster -->
                @if (session('success'))
                    <div class="alert alert-success" style="border-radius: 10px; margin-bottom: 20px;">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    <!-- Güvenlik kilidi (Bunu koymazsan Laravel formu kabul etmez) -->
                    @csrf

                    <!-- E-POSTA KISMI -->
                    <div class="mb-3">
                        <label class="form-label" style="font-weight: 600;">E-posta Adresi</label>
                        <input type="email" name="email" class="form-control py-2" placeholder="ornek@mail.com" value="{{ old('email') }}">

                        <!-- E-posta hatası varsa burada çıkacak -->
                        @error('email')
                        <small class="text-danger" style="font-weight: bold;">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- ŞİFRE KISMI -->
                    <div class="mb-4">
                        <label class="form-label" style="font-weight: 600;">Şifre</label>
                        <input type="password" name="password" class="form-control py-2" placeholder="••••••••">

                        <!-- Şifre hatası varsa (boş bırakıldıysa) burada çıkacak -->
                        @error('password')
                        <small class="text-danger" style="font-weight: bold;">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- GİRİŞ YAP BUTONU -->
                    <button type="submit" class="btn w-100 text-white py-2 mt-2" style="background-color: #f35525; border-radius: 30px; font-weight: bold; font-size: 1.1rem; letter-spacing: 1px;">
                        GİRİŞ YAP
                    </button>
                </form>

                <div class="text-center mt-4 pt-4 border-top">
                    <span class="text-muted">Hesabın yok mu?</span>
                    <a href="{{ route('register') }}" style="color: #f35525; text-decoration: none; font-weight: bold;">Hemen Kayıt Ol</a>
                </div>

            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
