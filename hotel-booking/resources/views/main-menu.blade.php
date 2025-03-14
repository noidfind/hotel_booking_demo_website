<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Otel Rezervasyon - En İyi Fiyat Garantisi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f5f5;
        }

        .header {
            background-color: #003580;
            color: white;
            padding: 20px 0;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .nav-links a:hover {
            background-color: #004b9c;
        }

        .admin-link {
            display: flex;
            align-items: center;
            gap: 5px;
            background-color: #003580;
            color: white;
            padding: 8px 15px;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .admin-link:hover {
            background-color: #002855;
        }

        .admin-link i {
            font-size: 16px;
        }

        .hero {
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1566073771259-6a8506099945');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .hero-content h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-content p {
            font-size: 1.2em;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .search-box {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            max-width: 1000px;
            margin: -50px auto 0;
            position: relative;
            z-index: 1;
        }

        .search-form {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .search-input {
            flex: 1;
            min-width: 200px;
        }

        .search-input label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
        }

        .search-input input, .search-input select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .search-button {
            background-color: #0071c2;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
            margin-top: 24px;
            width: 100%;
        }

        .search-button:hover {
            background-color: #005999;
        }

        .main-content {
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 20px;
        }

        .section-title {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .destinations {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .destination-card {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            height: 200px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .destination-card:hover {
            transform: translateY(-5px);
        }

        .destination-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .destination-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 20px;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: white;
        }

        .destination-info h3 {
            margin-bottom: 5px;
            font-size: 20px;
        }

        .destination-info p {
            font-size: 14px;
            opacity: 0.9;
        }

        .offers {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .offer-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .offer-card:hover {
            transform: translateY(-5px);
        }

        .offer-image {
            height: 200px;
            overflow: hidden;
        }

        .offer-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .offer-content {
            padding: 20px;
        }

        .offer-content h3 {
            color: #333;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .offer-content p {
            color: #666;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .price {
            color: #0071c2;
            font-size: 18px;
            font-weight: bold;
            display: block;
        }

        .footer {
            background-color: #003580;
            color: white;
            padding: 40px 0;
            margin-top: 80px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .footer-section h3 {
            margin-bottom: 20px;
            font-size: 18px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: #febb02;
        }

        @media (max-width: 768px) {
            .hero {
                height: 300px;
            }

            .search-box {
                margin: 0 20px;
                padding: 20px;
            }

            .search-input {
                width: 100%;
            }

            .search-button {
                width: 100%;
            }

            .nav-links {
                display: none;
            }

            .nav-container {
                flex-direction: column;
                gap: 15px;
            }
        }

        /* Pop-up Styles */
        .popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .popup-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 90%;
        }

        .popup-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .popup-header h3 {
            margin: 0;
            color: #003580;
        }

        .close-button {
            background: none;
            border: none;
            font-size: 24px;
            color: #666;
            cursor: pointer;
        }

        .popup-body {
            text-align: center;
        }

        .popup-buttons {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 20px;
        }

        .linkedin-button {
            background-color: #0077b5;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .close-popup-button {
            background-color: #6c757d;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Pop-up -->
    <div class="popup" id="infoPopup">
        <div class="popup-content">
            <div class="popup-header">
                <h3>Hoş Geldiniz</h3>
                <button class="close-button" onclick="closePopup()">×</button>
            </div>
            <div class="popup-body">
                <p>Bu demo proje Tatildenince.com için baştan sona Çağrı Açıkgöz tarafından kodlanmıştır.</p>
                <div class="popup-buttons">
                    <a href="https://www.linkedin.com/in/cagriack/" target="_blank" class="linkedin-button">
                        <i class="fab fa-linkedin"></i>
                        LinkedIn Profilim
                    </a>
                    <button class="close-popup-button" onclick="closePopup()">Kapat</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="nav-container">
            <a href="/" class="logo">HotelBooking</a>
            <nav class="nav-links">
                <a href="/oteller">Oteller</a>
                <a href="/kampanyalar">Kampanyalar</a>
                <a href="/iletisim">İletişim</a>
                <a href="{{ route('admin.login') }}" class="admin-link">
                    <i class="fas fa-user-shield"></i>
                    Yönetici Girişi
                </a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Hayalinizdeki Tatili Keşfedin</h1>
            <p>En iyi oteller, en uygun fiyatlarla sizleri bekliyor</p>
        </div>
    </section>

    <!-- Search Box -->
    <div class="search-box">
        <form class="search-form" id="searchForm">
            <div class="search-input">
                <label><i class="fas fa-map-marker-alt"></i> Nereye Gidiyorsunuz?</label>
                <input type="text" placeholder="Şehir veya otel adı" id="location">
            </div>
            <div class="search-input">
                <label><i class="fas fa-calendar"></i> Giriş Tarihi</label>
                <input type="date" id="checkIn">
            </div>
            <div class="search-input">
                <label><i class="fas fa-calendar"></i> Çıkış Tarihi</label>
                <input type="date" id="checkOut">
            </div>
            <div class="search-input">
                <label><i class="fas fa-user"></i> Misafir Sayısı</label>
                <select id="guests">
                    <option value="1">1 Kişi</option>
                    <option value="2">2 Kişi</option>
                    <option value="3">3 Kişi</option>
                    <option value="4">4 Kişi</option>
                </select>
            </div>
            <button type="submit" class="search-button">Otel Ara</button>
        </form>
    </div>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Popular Destinations -->
        <h2 class="section-title">Popüler Destinasyonlar</h2>
        <div class="destinations">
            <div class="destination-card">
                <img src="https://images.unsplash.com/photo-1524231757912-21f4fe3a7200" alt="İstanbul">
                <div class="destination-info">
                    <h3>İstanbul</h3>
                    <p>1250+ otel</p>
                </div>
            </div>
            <div class="destination-card">
                <img src="https://images.unsplash.com/photo-1527838832700-5059252407fa" alt="Antalya">
                <div class="destination-info">
                    <h3>Antalya</h3>
                    <p>850+ otel</p>
                </div>
            </div>
            <div class="destination-card">
                <img src="https://images.unsplash.com/photo-1527838832700-5059252407fa" alt="Bodrum">
                <div class="destination-info">
                    <h3>Bodrum</h3>
                    <p>500+ otel</p>
                </div>
            </div>
        </div>

        <!-- Special Offers -->
        <h2 class="section-title">Özel Teklifler</h2>
        <div class="offers">
            <div class="offer-card">
                <div class="offer-image">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" alt="Lüks Otel">
                </div>
                <div class="offer-content">
                    <h3>Erken Rezervasyon Fırsatı</h3>
                    <p>%25'e varan indirimlerle yazın tadını çıkarın</p>
                    <span class="price">₺500'den başlayan fiyatlarla</span>
                </div>
            </div>
            <div class="offer-card">
                <div class="offer-image">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" alt="Aile Oteli">
                </div>
                <div class="offer-content">
                    <h3>Aile Paketi</h3>
                    <p>Çocuklar ücretsiz, ailece tatil keyfi</p>
                    <span class="price">₺750'den başlayan fiyatlarla</span>
                </div>
            </div>
            <div class="offer-card">
                <div class="offer-image">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" alt="Balayı Oteli">
                </div>
                <div class="offer-content">
                    <h3>Balayı Özel</h3>
                    <p>Romantik bir kaçamak için ideal fırsat</p>
                    <span class="price">₺1000'den başlayan fiyatlarla</span>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Hakkımızda</h3>
                <ul>
                    <li><a href="/hakkimizda">Şirket Bilgisi</a></li>
                    <li><a href="/kariyer">Kariyer</a></li>
                    <li><a href="/basin">Basın</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Yardım</h3>
                <ul>
                    <li><a href="/yardim">SSS</a></li>
                    <li><a href="/iletisim">İletişim</a></li>
                    <li><a href="/kosullar">Şartlar ve Koşullar</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>İş Ortaklığı</h3>
                <ul>
                    <li><a href="/ortaklik">Otelinizi Kaydedin</a></li>
                    <li><a href="/affiliate">Affiliate Program</a></li>
                    <li><a href="/reklam">Reklam Verin</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        // Tarih seçimi için minimum tarihleri ayarla
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('checkIn').min = today;
        document.getElementById('checkOut').min = today;

        // Giriş tarihi değiştiğinde çıkış tarihinin minimum değerini güncelle
        document.getElementById('checkIn').addEventListener('change', function(e) {
            const checkOutInput = document.getElementById('checkOut');
            checkOutInput.min = e.target.value;
            
            if (checkOutInput.value < e.target.value) {
                checkOutInput.value = e.target.value;
            }
        });

        // Form gönderimini yakala
        document.getElementById('searchForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const location = document.getElementById('location').value;
            const checkIn = document.getElementById('checkIn').value;
            const checkOut = document.getElementById('checkOut').value;
            const guests = document.getElementById('guests').value;

            if (!location || !checkIn || !checkOut) {
                alert('Lütfen tüm alanları doldurun!');
                return;
            }

            const checkInDate = new Date(checkIn);
            const checkOutDate = new Date(checkOut);
            
            if (checkOutDate <= checkInDate) {
                alert('Çıkış tarihi, giriş tarihinden sonra olmalıdır!');
                return;
            }

            alert(`Arama kriterleri:\nKonum: ${location}\nGiriş: ${checkIn}\nÇıkış: ${checkOut}\nMisafir: ${guests}`);
        });

        // Popüler destinasyonlar için tıklama olayı
        document.querySelectorAll('.destination-card').forEach(card => {
            card.addEventListener('click', function() {
                const city = this.querySelector('h3').textContent;
                document.getElementById('location').value = city;
                document.getElementById('location').focus();
            });
        });

        // Pop-up işlemleri
        function closePopup() {
            document.getElementById('infoPopup').style.display = 'none';
        }

        // Sayfa yüklendiğinde pop-up'ı göster
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('infoPopup').style.display = 'flex';
        });
    </script>
</body>
</html> 