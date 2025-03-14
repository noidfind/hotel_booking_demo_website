<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetici Paneli</title>
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
            min-height: 100vh;
        }

        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #003580;
            color: white;
            padding: 20px;
        }

        .sidebar-header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 20px;
        }

        .sidebar-header h2 {
            font-size: 20px;
            margin-bottom: 5px;
        }

        .nav-links {
            list-style: none;
        }

        .nav-links li {
            margin-bottom: 10px;
        }

        .nav-links a {
            color: white;
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
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            color: #333;
            font-size: 24px;
        }

        .logout-button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .logout-button:hover {
            background-color: #c82333;
        }

        .content-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .hotels-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .hotels-table th,
        .hotels-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .hotels-table th {
            background-color: #f8f9fa;
            font-weight: 600;
            color: #333;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .edit-button,
        .delete-button {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .edit-button {
            background-color: #007bff;
            color: white;
        }

        .edit-button:hover {
            background-color: #0056b3;
        }

        .delete-button {
            background-color: #dc3545;
            color: white;
        }

        .delete-button:hover {
            background-color: #c82333;
        }

        .add-hotel-button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
            transition: background-color 0.3s;
        }

        .add-hotel-button:hover {
            background-color: #218838;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
        }

        .stat-card i {
            font-size: 24px;
            color: #003580;
            margin-bottom: 10px;
        }

        .stat-card h3 {
            color: #666;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .stat-card p {
            color: #333;
            font-size: 24px;
            font-weight: bold;
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
                    <a href="/admin/settings">
                        <i class="fas fa-cog"></i>
                        Ayarlar
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>Dashboard</h1>
                <div class="header-buttons">
                    <a href="{{ route('admin.logout') }}" class="logout-button">
                        <i class="fas fa-sign-out-alt"></i> Çıkış Yap
                    </a>
                 
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="stats-container">
                <div class="stat-card">
                    <i class="fas fa-hotel"></i>
                    <h3>Toplam Otel</h3>
                    <p>{{ $hotels->count() }}</p>
                </div>
                <div class="stat-card">
                    <i class="fas fa-bed"></i>
                    <h3>Aktif Rezervasyon</h3>
                    <p>0</p>
                </div>
                <div class="stat-card">
                    <i class="fas fa-users"></i>
                    <h3>Toplam Kullanıcı</h3>
                    <p>0</p>
                </div>
                <div class="stat-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Aylık Gelir</h3>
                    <p>₺0</p>
                </div>
            </div>

            <!-- Hotels Table -->
            <div class="content-card">
                <a href="/hotels/create" class="add-hotel-button">
                    <i class="fas fa-plus"></i> Yeni Otel Ekle
                </a>

                <table class="hotels-table">
                    <thead>
                        <tr>
                            <th>Otel Adı</th>
                            <th>Konum</th>
                            <th>Fiyat</th>
                            <th>Yıldız</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hotels as $hotel)
                        <tr>
                            <td>{{ $hotel->name }}</td>
                            <td>{{ $hotel->location }}</td>
                            <td>₺{{ number_format($hotel->price, 2) }}</td>
                            <td>{{ $hotel->stars }} Yıldız</td>
                            <td class="action-buttons">
                                <a href="/hotels/{{ $hotel->id }}/edit" class="edit-button">
                                    <i class="fas fa-edit"></i> Düzenle
                                </a>
                                <form action="/hotels/{{ $hotel->id }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-button" onclick="return confirm('Bu oteli silmek istediğinizden emin misiniz?')">
                                        <i class="fas fa-trash"></i> Sil
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html> 