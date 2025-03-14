<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    // Otel listesi gösterme
    public function index()
    {
        // Tüm otelleri al
        $hotels = Hotel::all();

        // Otelleri bir view'e gönder
        return view('hotels', compact('hotels'));
    }

    // Otel oluşturma formu
    public function create()
    {
        // Otel ekleme formunu göster
        return view('hotels.create');
    }

    protected function validateHotel(Request $request)
    {
        return $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'stars' => 'required|integer|min:1|max:5',
            'has_wifi' => 'boolean',
            'has_parking' => 'boolean',
            'has_pool' => 'boolean',
            'has_restaurant' => 'boolean',
            'has_spa' => 'boolean',
            'has_gym' => 'boolean',
            'is_pet_friendly' => 'boolean',
            'has_beach_access' => 'boolean',
            'amenities' => 'nullable|string',
        ]);
    }

    // Otel kaydetme işlemi
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'stars' => 'required|integer|min:1|max:5',
            'has_wifi' => 'boolean',
            'has_parking' => 'boolean',
            'has_pool' => 'boolean',
            'has_restaurant' => 'boolean',
            'has_spa' => 'boolean',
            'has_gym' => 'boolean',
            'is_pet_friendly' => 'boolean',
            'has_beach_access' => 'boolean',
            'amenities' => 'nullable|string',
        ]);

        // Boolean alanları için değerleri ayarla
        $booleanFields = [
            'has_wifi',
            'has_parking',
            'has_pool',
            'has_restaurant',
            'has_spa',
            'has_gym',
            'is_pet_friendly',
            'has_beach_access'
        ];

        foreach ($booleanFields as $field) {
            $validatedData[$field] = $request->has($field) && $request->input($field) == '1';
        }

        try {
            $hotel = Hotel::create($validatedData);
            return redirect()->route('admin.dashboard')->with('success', 'Otel başarıyla eklendi.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Otel eklenirken bir hata oluştu: ' . $e->getMessage());
        }
    }

    // Otel silme işlemi
    public function destroy($id)
    {
        // Veritabanında ilgili oteli bul
        $hotel = Hotel::findOrFail($id);
        
        // Oteli sil
        $hotel->delete();

        // Silme işleminden sonra otel listesine yönlendirme
        return redirect('/hotels')->with('success', 'Otel başarıyla silindi.');
    }

    // Otel güncelleme formu
    public function edit($id)
    {
        // Güncellenecek oteli bul
        $hotel = Hotel::findOrFail($id);
        
        // Otel düzenleme formunu göstermek için oteli view'e gönder
        return view('hotels.edit', compact('hotel'));
    }

    // Otel güncelleme işlemi
    public function update(Request $request, $id)
    {
        $hotel = Hotel::findOrFail($id);
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'stars' => 'required|integer|min:1|max:5',
            'has_wifi' => 'nullable|boolean',
            'has_parking' => 'nullable|boolean',
            'has_pool' => 'nullable|boolean',
            'has_restaurant' => 'nullable|boolean',
            'has_spa' => 'nullable|boolean',
            'has_gym' => 'nullable|boolean',
            'is_pet_friendly' => 'nullable|boolean',
            'has_beach_access' => 'nullable|boolean',
            'amenities' => 'nullable|string',
        ]);

        // Boolean alanları için değerleri ayarla
        $booleanFields = [
            'has_wifi',
            'has_parking',
            'has_pool',
            'has_restaurant',
            'has_spa',
            'has_gym',
            'is_pet_friendly',
            'has_beach_access'
        ];

        foreach ($booleanFields as $field) {
            $validatedData[$field] = $request->has($field) ? true : false;
        }

        try {
            $hotel->update($validatedData);
            return redirect()->route('hotels.index')->with('success', 'Otel başarıyla güncellendi.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Otel güncellenirken bir hata oluştu: ' . $e->getMessage());
        }
    }
}
