<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oteller - En İyi Fiyat Garantisi</title>
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

        .main-content {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 30px;
        }

        .filters {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            height: fit-content;
        }

        .filter-section {
            margin-bottom: 20px;
        }

        .filter-section h3 {
            color: #333;
            margin-bottom: 15px;
            font-size: 18px;
        }

        .filter-option {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .filter-option input[type="checkbox"] {
            margin-right: 10px;
        }

        .price-range {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .price-range input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .hotel-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .hotel-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            transition: transform 0.3s;
        }

        .hotel-card:hover {
            transform: translateY(-5px);
        }

        .hotel-image {
            width: 300px;
            height: 200px;
            overflow: hidden;
        }

        .hotel-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hotel-info {
            padding: 20px;
            flex: 1;
            display: flex;
            justify-content: space-between;
        }

        .hotel-details {
            flex: 1;
        }

        .hotel-name {
            font-size: 20px;
            color: #0071c2;
            margin-bottom: 10px;
            text-decoration: none;
        }

        .hotel-location {
            color: #666;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .hotel-features {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #666;
        }

        .hotel-price {
            text-align: right;
            min-width: 150px;
        }

        .price-value {
            font-size: 24px;
            color: #0071c2;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .book-button {
            background-color: #0071c2;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .book-button:hover {
            background-color: #005999;
        }

        .rating {
            background-color: #003580;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            margin-bottom: 10px;
            display: inline-block;
        }

        @media (max-width: 1024px) {
            .main-content {
                grid-template-columns: 1fr;
            }

            .filters {
                order: 2;
            }

            .hotel-card {
                flex-direction: column;
            }

            .hotel-image {
                width: 100%;
            }

            .hotel-info {
                flex-direction: column;
            }

            .hotel-price {
                text-align: left;
                margin-top: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="nav-container">
            <a href="/" class="logo">HotelBooking</a>
            <nav class="nav-links">
                <a href="/oteller">Oteller</a>
                <a href="/kampanyalar">Kampanyalar</a>
                <a href="/iletisim">İletişim</a>
                <a href="/giris">Giriş Yap</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Filters -->
        <aside class="filters">
            <div class="filter-section">
                <h3>Fiyat Aralığı</h3>
                <div class="price-range">
                    <input type="number" id="minPrice" placeholder="Min Fiyat" min="0">
                    <input type="number" id="maxPrice" placeholder="Max Fiyat" min="0">
                </div>
            </div>

            <div class="filter-section">
                <h3>Yıldız Sayısı</h3>
                <div class="filter-option">
                    <input type="checkbox" id="star5" value="5">
                    <label for="star5">5 Yıldız</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="star4" value="4">
                    <label for="star4">4 Yıldız</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="star3" value="3">
                    <label for="star3">3 Yıldız</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="star2" value="2">
                    <label for="star2">2 Yıldız</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="star1" value="1">
                    <label for="star1">1 Yıldız</label>
                </div>
            </div>

            <div class="filter-section">
                <h3>Otel Özellikleri</h3>
                <div class="filter-option">
                    <input type="checkbox" id="wifi" value="wifi">
                    <label for="wifi">Ücretsiz WiFi</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="parking" value="parking">
                    <label for="parking">Otopark</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="pool" value="pool">
                    <label for="pool">Havuz</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="restaurant" value="restaurant">
                    <label for="restaurant">Restoran</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="spa" value="spa">
                    <label for="spa">SPA</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="gym" value="gym">
                    <label for="gym">Spor Salonu</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="petFriendly" value="petFriendly">
                    <label for="petFriendly">Evcil Hayvan Dostu</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="beachAccess" value="beachAccess">
                    <label for="beachAccess">Plaj Erişimi</label>
                </div>
            </div>
        </aside>

        <!-- Hotel List -->
        <div class="hotel-list">
            @foreach ($hotels as $hotel)
            <div class="hotel-card" 
                data-price="{{ $hotel->price }}"
                data-stars="{{ $hotel->stars }}"
                data-wifi="{{ $hotel->has_wifi }}"
                data-parking="{{ $hotel->has_parking }}"
                data-pool="{{ $hotel->has_pool }}"
                data-restaurant="{{ $hotel->has_restaurant }}"
                data-spa="{{ $hotel->has_spa }}"
                data-gym="{{ $hotel->has_gym }}"
                data-pet-friendly="{{ $hotel->is_pet_friendly }}"
                data-beach-access="{{ $hotel->has_beach_access }}">
                <div class="hotel-image">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="{{ $hotel->name }}">
                </div>
                <div class="hotel-info">
                    <div class="hotel-details">
                        <div class="rating">{{ $hotel->stars }} Yıldızlı</div>
                        <h2 class="hotel-name">{{ $hotel->name }}</h2>
                        <div class="hotel-location">
                            <i class="fas fa-map-marker-alt"></i>
                            {{ $hotel->location }}
                        </div>
                        <div class="hotel-features">
                            @if($hotel->has_wifi)
                                <span class="feature"><i class="fas fa-wifi"></i> WiFi</span>
                            @endif
                            @if($hotel->has_parking)
                                <span class="feature"><i class="fas fa-parking"></i> Otopark</span>
                            @endif
                            @if($hotel->has_pool)
                                <span class="feature"><i class="fas fa-swimming-pool"></i> Havuz</span>
                            @endif
                            @if($hotel->has_restaurant)
                                <span class="feature"><i class="fas fa-utensils"></i> Restoran</span>
                            @endif
                        </div>
                        <p>{{ $hotel->description }}</p>
                    </div>
                    <div class="hotel-price">
                        <div class="price-value">₺{{ number_format($hotel->price, 2) }}</div>
                        <a href="#" class="book-button">Rezervasyon Yap</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hotels = document.querySelectorAll('.hotel-card');
            const minPriceInput = document.getElementById('minPrice');
            const maxPriceInput = document.getElementById('maxPrice');
            const starCheckboxes = document.querySelectorAll('input[id^="star"]');
            const featureCheckboxes = document.querySelectorAll('input[type="checkbox"]:not([id^="star"])');

            function filterHotels() {
                const minPrice = parseFloat(minPriceInput.value) || 0;
                const maxPrice = parseFloat(maxPriceInput.value) || Infinity;
                const selectedStars = Array.from(starCheckboxes)
                    .filter(cb => cb.checked)
                    .map(cb => parseInt(cb.value));
                const selectedFeatures = Array.from(featureCheckboxes)
                    .filter(cb => cb.checked)
                    .map(cb => cb.value);

                hotels.forEach(hotel => {
                    const price = parseFloat(hotel.dataset.price);
                    const stars = parseInt(hotel.dataset.stars);
                    
                    const matchesPrice = price >= minPrice && price <= maxPrice;
                    const matchesStars = selectedStars.length === 0 || selectedStars.includes(stars);
                    
                    const matchesFeatures = selectedFeatures.length === 0 || selectedFeatures.every(feature => {
                        switch(feature) {
                            case 'wifi': return hotel.dataset.wifi === '1';
                            case 'parking': return hotel.dataset.parking === '1';
                            case 'pool': return hotel.dataset.pool === '1';
                            case 'restaurant': return hotel.dataset.restaurant === '1';
                            case 'spa': return hotel.dataset.spa === '1';
                            case 'gym': return hotel.dataset.gym === '1';
                            case 'petFriendly': return hotel.dataset.petFriendly === '1';
                            case 'beachAccess': return hotel.dataset.beachAccess === '1';
                            default: return true;
                        }
                    });

                    hotel.style.display = matchesPrice && matchesStars && matchesFeatures ? 'flex' : 'none';
                });
            }

            minPriceInput.addEventListener('input', filterHotels);
            maxPriceInput.addEventListener('input', filterHotels);
            starCheckboxes.forEach(cb => cb.addEventListener('change', filterHotels));
            featureCheckboxes.forEach(cb => cb.addEventListener('change', filterHotels));
        });
    </script>
</body>
</html> 