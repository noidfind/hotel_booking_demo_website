<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otel Düzenle</title>
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
            padding: 20px;
            min-height: 100vh;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        input:focus, textarea:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0,123,255,0.3);
        }
        textarea {
            height: 120px;
            resize: vertical;
        }
        .error {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
        }
        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }
        .submit-button {
            background-color: #28a745;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            flex: 1;
        }
        .submit-button:hover {
            background-color: #218838;
        }
        .back-button {
            background-color: #6c757d;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            font-size: 16px;
            transition: background-color 0.3s;
            flex: 1;
        }
        .back-button:hover {
            background-color: #5a6268;
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 10px;
        }
        .feature-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
        }
        .feature-item:hover {
            background-color: #f8f9fa;
            border-color: #007bff;
        }
        .feature-item input[type="checkbox"] {
            width: auto;
        }
        .feature-item i {
            color: #007bff;
            font-size: 18px;
        }
        select.form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Otel Düzenle</h1>

        <form action="{{ route('hotels.update', $hotel->id) }}" method="POST" id="hotelForm">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Otel Adı:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $hotel->name) }}" required>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="location">Konum:</label>
                <input type="text" id="location" name="location" value="{{ old('location', $hotel->location) }}" required>
                @error('location')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="address">Adres:</label>
                <input type="text" id="address" name="address" value="{{ old('address', $hotel->address) }}">
                @error('address')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="phone">Telefon:</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone', $hotel->phone) }}">
                @error('phone')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">Fiyat (₺):</label>
                <input type="number" id="price" name="price" min="0" step="0.01" value="{{ old('price', $hotel->price) }}" required>
                @error('price')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Açıklama:</label>
                <textarea id="description" name="description" required>{{ old('description', $hotel->description) }}</textarea>
                @error('description')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="stars">Yıldız Sayısı:</label>
                <select id="stars" name="stars" class="form-control">
                    <option value="1" {{ $hotel->stars == 1 ? 'selected' : '' }}>1 Yıldız</option>
                    <option value="2" {{ $hotel->stars == 2 ? 'selected' : '' }}>2 Yıldız</option>
                    <option value="3" {{ $hotel->stars == 3 ? 'selected' : '' }}>3 Yıldız</option>
                    <option value="4" {{ $hotel->stars == 4 ? 'selected' : '' }}>4 Yıldız</option>
                    <option value="5" {{ $hotel->stars == 5 ? 'selected' : '' }}>5 Yıldız</option>
                </select>
            </div>

            <div class="form-group">
                <label>Otel Özellikleri:</label>
                <div class="features-grid">
                    <label class="feature-item">
                        <input type="checkbox" name="has_wifi" value="1" {{ old('has_wifi', $hotel->has_wifi) ? 'checked' : '' }}>
                        <i class="fas fa-wifi"></i> Ücretsiz WiFi
                    </label>
                    <label class="feature-item">
                        <input type="checkbox" name="has_parking" value="1" {{ old('has_parking', $hotel->has_parking) ? 'checked' : '' }}>
                        <i class="fas fa-parking"></i> Otopark
                    </label>
                    <label class="feature-item">
                        <input type="checkbox" name="has_pool" value="1" {{ old('has_pool', $hotel->has_pool) ? 'checked' : '' }}>
                        <i class="fas fa-swimming-pool"></i> Havuz
                    </label>
                    <label class="feature-item">
                        <input type="checkbox" name="has_restaurant" value="1" {{ old('has_restaurant', $hotel->has_restaurant) ? 'checked' : '' }}>
                        <i class="fas fa-utensils"></i> Restoran
                    </label>
                    <label class="feature-item">
                        <input type="checkbox" name="has_spa" value="1" {{ old('has_spa', $hotel->has_spa) ? 'checked' : '' }}>
                        <i class="fas fa-spa"></i> SPA
                    </label>
                    <label class="feature-item">
                        <input type="checkbox" name="has_gym" value="1" {{ old('has_gym', $hotel->has_gym) ? 'checked' : '' }}>
                        <i class="fas fa-dumbbell"></i> Spor Salonu
                    </label>
                    <label class="feature-item">
                        <input type="checkbox" name="is_pet_friendly" value="1" {{ old('is_pet_friendly', $hotel->is_pet_friendly) ? 'checked' : '' }}>
                        <i class="fas fa-paw"></i> Evcil Hayvan Dostu
                    </label>
                    <label class="feature-item">
                        <input type="checkbox" name="has_beach_access" value="1" {{ old('has_beach_access', $hotel->has_beach_access) ? 'checked' : '' }}>
                        <i class="fas fa-umbrella-beach"></i> Plaj Erişimi
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="amenities">Ek Özellikler:</label>
                <textarea id="amenities" name="amenities" placeholder="Her özelliği yeni bir satıra yazın">{{ $hotel->amenities }}</textarea>
            </div>

            <div class="button-group">
                <button type="submit" class="submit-button">Değişiklikleri Kaydet</button>
                <a href="/hotels" class="back-button">Geri Dön</a>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('hotelForm');
            const nameInput = document.getElementById('name');
            const locationInput = document.getElementById('location');
            const priceInput = document.getElementById('price');
            const phoneInput = document.getElementById('phone');

            form.addEventListener('submit', function(e) {
                let isValid = true;
                const errors = [];

                if (nameInput.value.trim().length < 3) {
                    errors.push('Otel adı en az 3 karakter olmalıdır.');
                    isValid = false;
                }

                if (locationInput.value.trim().length < 5) {
                    errors.push('Lütfen geçerli bir konum giriniz.');
                    isValid = false;
                }

                if (priceInput.value <= 0) {
                    errors.push('Lütfen geçerli bir fiyat giriniz.');
                    isValid = false;
                }

                if (!isValid) {
                    e.preventDefault();
                    alert(errors.join('\n'));
                }
            });

            phoneInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length > 0) {
                    if (value.length > 10) {
                        value = value.substr(0, 10);
                    }
                    const matches = value.match(/^(\d{3})(\d{3})(\d{4})$/);
                    if (matches) {
                        e.target.value = `${matches[1]} ${matches[2]} ${matches[3]}`;
                    } else {
                        e.target.value = value;
                    }
                }
            });

            priceInput.addEventListener('input', function(e) {
                let value = parseFloat(e.target.value);
                if (isNaN(value) || value < 0) {
                    e.target.value = 0;
                }
            });
        });
    </script>
</body>
</html>
