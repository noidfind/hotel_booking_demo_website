<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Otel Ekle</title>
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
            background-color: #007bff;
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
            background-color: #0056b3;
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
        <h1>Yeni Otel Ekle</h1>

        <form action="{{ route('hotels.store') }}" method="POST" id="hotelForm">
            @csrf
            <div class="form-group">
                <label for="name">Otel Adı:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="location">Konum:</label>
                <input type="text" id="location" name="location" value="{{ old('location') }}" required>
                @error('location')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="address">Adres:</label>
                <textarea id="address" name="address">{{ old('address') }}</textarea>
                @error('address')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="phone">Telefon:</label>
                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="0xxx xxx xx xx">
                @error('phone')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">Fiyat (₺):</label>
                <input type="number" id="price" name="price" min="0" step="0.01" value="{{ old('price') }}" required>
                @error('price')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Açıklama:</label>
                <textarea id="description" name="description" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="stars">Yıldız Sayısı:</label>
                <select id="stars" name="stars" class="form-control" required>
                    @for($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}" {{ old('stars', 3) == $i ? 'selected' : '' }}>{{ $i }} Yıldız</option>
                    @endfor
                </select>
                @error('stars')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Otel Özellikleri:</label>
                <div class="features-grid">
                    <label class="feature-item">
                        <input type="checkbox" name="has_wifi" value="1" {{ old('has_wifi') ? 'checked' : '' }}>
                        <i class="fas fa-wifi"></i> Ücretsiz WiFi
                    </label>
                    <label class="feature-item">
                        <input type="checkbox" name="has_parking" value="1" {{ old('has_parking') ? 'checked' : '' }}>
                        <i class="fas fa-parking"></i> Otopark
                    </label>
                    <label class="feature-item">
                        <input type="checkbox" name="has_pool" value="1" {{ old('has_pool') ? 'checked' : '' }}>
                        <i class="fas fa-swimming-pool"></i> Havuz
                    </label>
                    <label class="feature-item">
                        <input type="checkbox" name="has_restaurant" value="1" {{ old('has_restaurant') ? 'checked' : '' }}>
                        <i class="fas fa-utensils"></i> Restoran
                    </label>
                    <label class="feature-item">
                        <input type="checkbox" name="has_spa" value="1" {{ old('has_spa') ? 'checked' : '' }}>
                        <i class="fas fa-spa"></i> SPA
                    </label>
                    <label class="feature-item">
                        <input type="checkbox" name="has_gym" value="1" {{ old('has_gym') ? 'checked' : '' }}>
                        <i class="fas fa-dumbbell"></i> Spor Salonu
                    </label>
                    <label class="feature-item">
                        <input type="checkbox" name="is_pet_friendly" value="1" {{ old('is_pet_friendly') ? 'checked' : '' }}>
                        <i class="fas fa-paw"></i> Evcil Hayvan Dostu
                    </label>
                    <label class="feature-item">
                        <input type="checkbox" name="has_beach_access" value="1" {{ old('has_beach_access') ? 'checked' : '' }}>
                        <i class="fas fa-umbrella-beach"></i> Plaj Erişimi
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="amenities">Ek Özellikler:</label>
                <textarea id="amenities" name="amenities" placeholder="Her özelliği yeni bir satıra yazın">{{ old('amenities') }}</textarea>
            </div>

            <div class="button-group">
                <button type="submit" class="submit-button">Otel Ekle</button>
                <a href="{{ route('admin.dashboard') }}" class="back-button">Geri Dön</a>
            </div>
        </form>
    </div>

    <script>
        // Form doğrulama
        document.getElementById('hotelForm').addEventListener('submit', function(e) {
            let isValid = true;
            const name = document.getElementById('name').value.trim();
            const location = document.getElementById('location').value.trim();
            const price = document.getElementById('price').value.trim();
            
            if (name.length < 3) {
                alert('Otel adı en az 3 karakter olmalıdır.');
                isValid = false;
            }
            
            if (location.length < 5) {
                alert('Lütfen geçerli bir konum giriniz.');
                isValid = false;
            }
            
            if (price <= 0) {
                alert('Lütfen geçerli bir fiyat giriniz.');
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault();
            }
        });

        // Fiyat formatı
        document.getElementById('price').addEventListener('input', function(e) {
            let value = e.target.value;
            if (value < 0) {
                e.target.value = 0;
            }
        });
    </script>
</body>
</html>
