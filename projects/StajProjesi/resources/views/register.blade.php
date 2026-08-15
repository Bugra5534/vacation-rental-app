<!-- Navbar'ı çağırıyoruz -->
@include("layouts.navbar")

<style>
    #js-preloader, .js-preloader {
        display: none !important;
        opacity: 0 !important;
        visibility: hidden !important;
        z-index: -9999 !important;
    }

    .header-area {
        background-color: #fff !important;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.05) !important;
        /* position: relative sildik, navbar havada asılı duruyor */
    }

    .header-area .main-nav .nav li a,
    .header-area .main-nav .logo {
        color: #1e1e1e !important;
    }

    .form-control:focus {
        border-color: #f35525 !important;
        box-shadow: 0 0 0 0.25rem rgba(243, 85, 37, 0.25) !important;
    }
</style>

<!-- Kartın yukarı kaymasını engellemek için padding-top: 120px yaptık -->
<div style="background-color: #fdfdfd; min-height: 100vh; padding-top: 120px; padding-bottom: 50px;">
    <!-- min-height ayarını dikey ortalama bozulmasın diye esnettik -->
    <div class="container d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 170px);">

        <div class="card shadow-lg border-0" style="width: 100%; max-width: 450px; border-radius: 15px; background-color: #fff;">
            <div class="card-body p-5">

                <h2 class="text-center mb-2" style="font-weight: 800; color: #2a2a2a; letter-spacing: 1px;">
                    ASTRO<span style="color: #f35525;">STAY</span>
                </h2>
                <p class="text-center mb-4 text-muted">Yeni Bir Hesap Oluştur</p>

                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="row">
                        <!-- AD KISMI -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label" style="font-weight: 600;">Ad</label>
                            <input type="text" name="name" class="form-control py-2" placeholder="Adınız" value="{{ old('name') }}">
                            <!-- Hata varsa tam burada ince kırmızı yazıyla çıkacak -->
                            @error('name')
                            <small class="text-danger" style="font-weight: bold;">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- SOYAD KISMI -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label" style="font-weight: 600;">Soyad</label>
                            <input type="text" name="lastname" class="form-control py-2" placeholder="Soyadınız" value="{{ old('lastname') }}">
                            @error('lastname')
                            <small class="text-danger" style="font-weight: bold;">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <!-- E-POSTA KISMI -->
                    <div class="mb-3">
                        <label class="form-label" style="font-weight: 600;">E-posta Adresi</label>
                        <input type="email" name="email" class="form-control py-2" placeholder="ornek@mail.com" value="{{ old('email') }}">
                        @error('email')
                        <small class="text-danger" style="font-weight: bold;">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="row">
                        <!-- ŞİFRE KISMI -->
                        <div class="col-md-6 mb-4">
                            <label class="form-label" style="font-weight: 600;">Şifre</label>
                            <input type="password" name="password" class="form-control py-2" placeholder="••••••••">
                            @error('password')
                            <small class="text-danger" style="font-weight: bold;">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- ŞİFRE TEKRAR KISMI -->
                        <div class="col-md-6 mb-4">
                            <label class="form-label" style="font-weight: 600;">Şifre (Tekrar)</label>
                            <input type="password" name="password_confirmation" class="form-control py-2" placeholder="••••••••">
                        </div>
                    </div>

                    <button type="submit" class="btn w-100 text-white py-2 mt-2" style="background-color: #f35525; border-radius: 30px; font-weight: bold; font-size: 1.1rem; letter-spacing: 1px;">
                        KAYIT OL
                    </button>
                </form>

                <div class="text-center mt-4 pt-4 border-top">
                    <span class="text-muted">Zaten hesabın var mı?</span>
                    <a href="{{ route('login') }}" style="color: #f35525; text-decoration: none; font-weight: bold;">Giriş Yap</a>
                </div>

            </div>
        </div>

    </div>
</div>

@include('layouts.footer')
