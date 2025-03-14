<!DOCTYPE html>
<html lang="tr" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetici Ayarları</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root[data-theme="light"] {
            --bg-color: #f5f5f5;
            --text-color: #333;
            --card-bg: white;
            --border-color: #ddd;
            --header-bg: #003580;
            --header-text: white;
        }

        :root[data-theme="dark"] {
            --bg-color: #1a1a1a;
            --text-color: #fff;
            --card-bg: #2d2d2d;
            --border-color: #404040;
            --header-bg: #002855;
            --header-text: #fff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            transition: all 0.3s ease;
        }

        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: var(--header-bg);
            color: var(--header-text);
            padding: 20px;
        }

        .sidebar-header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 20px;
        }

        .nav-links {
            list-style: none;
        }

        .nav-links a {
            color: var(--header-text);
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .nav-links a:hover {
            background-color: rgba(255,255,255,0.1);
        }

        .nav-links i {
            margin-right: 10px;
            width: 20px;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        .header {
            background: var(--card-bg);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .settings-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .settings-card {
            background: var(--card-bg);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .settings-card h3 {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .settings-card h3 i {
            color: var(--header-bg);
        }

        .setting-item {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--border-color);
        }

        .setting-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .setting-label {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 5px;
        }

        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .toggle-slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 24px;
        }

        .toggle-slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .toggle-slider {
            background-color: #003580;
        }

        input:checked + .toggle-slider:before {
            transform: translateX(26px);
        }

        .color-picker {
            width: 100%;
            padding: 8px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            background-color: var(--card-bg);
            color: var(--text-color);
        }

        .save-button {
            background-color: #003580;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s;
            margin-top: 20px;
        }

        .save-button:hover {
            background-color: #002855;
        }

        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 25px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            display: none;
            animation: slideIn 0.3s ease-out;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>Yönetici Paneli</h2>
                <p>Hoş geldiniz, Admin</p>
            </div>
            <ul class="nav-links">
                <li>
                    <a href="/admin/dashboard">
                        <i class="fas fa-home"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="/hotels">
                        <i class="fas fa-hotel"></i>
                        Oteller
                    </a>
                </li>
                <li>
                    <a href="/hotels/create">
                        <i class="fas fa-plus-circle"></i>
                        Yeni Otel Ekle
                    </a>
                </li>
                <li>
                    <a href="/admin/settings" class="active">
                        <i class="fas fa-cog"></i>
                        Ayarlar
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>Ayarlar</h1>
                <a href="{{ route('admin.logout') }}" class="logout-button">
                    <i class="fas fa-sign-out-alt"></i> Çıkış Yap
                </a>
            </div>

            <div class="settings-grid">
                <!-- Görünüm Ayarları -->
                <div class="settings-card">
                    <h3><i class="fas fa-palette"></i> Görünüm Ayarları</h3>
                    
                    <div class="setting-item">
                        <div class="setting-label">
                            <span>Gece Modu</span>
                            <label class="toggle-switch">
                                <input type="checkbox" id="darkModeToggle">
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                    </div>

                    <div class="setting-item">
                        <div class="setting-label">
                            <span>Yazı Boyutu</span>
                        </div>
                        <select class="color-picker" id="fontSize">
                            <option value="small">Küçük</option>
                            <option value="medium" selected>Orta</option>
                            <option value="large">Büyük</option>
                        </select>
                    </div>

                    <div class="setting-item">
                        <div class="setting-label">
                            <span>Ana Renk</span>
                        </div>
                        <input type="color" class="color-picker" id="primaryColor" value="#003580">
                    </div>
                </div>

                <!-- Bildirim Ayarları -->
                <div class="settings-card">
                    <h3><i class="fas fa-bell"></i> Bildirim Ayarları</h3>
                    
                    <div class="setting-item">
                        <div class="setting-label">
                            <span>E-posta Bildirimleri</span>
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                    </div>

                    <div class="setting-item">
                        <div class="setting-label">
                            <span>Yeni Rezervasyon Bildirimleri</span>
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                    </div>

                    <div class="setting-item">
                        <div class="setting-label">
                            <span>Sistem Bildirimleri</span>
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Güvenlik Ayarları -->
                <div class="settings-card">
                    <h3><i class="fas fa-shield-alt"></i> Güvenlik Ayarları</h3>
                    
                    <div class="setting-item">
                        <div class="setting-label">
                            <span>İki Faktörlü Doğrulama</span>
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                    </div>

                    <div class="setting-item">
                        <div class="setting-label">
                            <span>Oturum Süresi (dakika)</span>
                        </div>
                        <select class="color-picker">
                            <option value="30">30</option>
                            <option value="60" selected>60</option>
                            <option value="120">120</option>
                        </select>
                    </div>
                </div>
            </div>

            <button class="save-button" onclick="saveSettings()">
                <i class="fas fa-save"></i> Ayarları Kaydet
            </button>
        </div>
    </div>

    <div class="notification" id="notification">
        Ayarlar başarıyla kaydedildi!
    </div>

    <script>
        // Gece modu toggle
        const darkModeToggle = document.getElementById('darkModeToggle');
        const html = document.documentElement;

        darkModeToggle.addEventListener('change', function() {
            if (this.checked) {
                html.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
            } else {
                html.setAttribute('data-theme', 'light');
                localStorage.setItem('theme', 'light');
            }
        });

        // Sayfa yüklendiğinde tema kontrolü
        document.addEventListener('DOMContentLoaded', function() {
            const savedTheme = localStorage.getItem('theme') || 'light';
            html.setAttribute('data-theme', savedTheme);
            darkModeToggle.checked = savedTheme === 'dark';
        });

        // Ayarları kaydet
        function saveSettings() {
            const notification = document.getElementById('notification');
            notification.style.display = 'block';
            
            setTimeout(() => {
                notification.style.display = 'none';
            }, 3000);
        }

        // Ana renk değişimi
        document.getElementById('primaryColor').addEventListener('change', function(e) {
            document.documentElement.style.setProperty('--header-bg', e.target.value);
        });

        // Yazı boyutu değişimi
        document.getElementById('fontSize').addEventListener('change', function(e) {
            const sizes = {
                small: '14px',
                medium: '16px',
                large: '18px'
            };
            document.body.style.fontSize = sizes[e.target.value];
        });
    </script>
</body>
</html> 