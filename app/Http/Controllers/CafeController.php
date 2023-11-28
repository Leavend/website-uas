<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Models\CafeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class CafeController extends Controller
{
    public function listCafe()
    {
        $Title = 'Cafe - Cafe Guide City';
        $DataCafe = Cafe::getCafe();
        return view('cafe.list', compact(['Title', 'DataCafe']));
    }

    public function addCafe()
    {
        $Title = 'Add - Cafe - Cafe Guide City';
        return view('cafe.add', compact(['Title']));
    }

    public function insertCafe(Request $request)
    {
        $validator = $request->validate([
            'name' => ['required'],
            'description' => 'required|string',
            'number_phone' => 'required',
            'location' => 'required|string',
            'url_link_maps' => ['required', 'url'],
            'range_rate_price' => 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Validate images if needed
        ], [
            'cafe_name.required' => 'Cafe name is required.',
            'description.required' => 'Description is required.',
            'number_phone.required' => 'Phone number is required.',
            'location.required' => 'Location is required.',
            'url_link_maps.required' => 'Map link is required.',
            'url_link_maps.url' => 'Invalid URL format for map link.',
            'range_rate_price.required' => 'Price range is required.',
            'images.*.image' => 'Invalid image format.',
            'images.*.mimes' => 'Allowed image formats: jpeg, png, jpg, gif, svg.',
            'images.*.max' => 'Image size should not exceed 10 MB.',
        ]);

        try {
            DB::transaction(function () use ($validator, $request) {
                $cafe = Cafe::create([
                    'name' => $validator['name'],
                    'description' => $validator['description'],
                    'number_phone' => $validator['number_phone'],
                    'location' => $validator['location'],
                    'url_link_maps' => $validator['url_link_maps'],
                    'range_rate_price' => $validator['range_rate_price'],
                ]);

                // Simpan gambar ke direktori
                foreach ($request->file('images') as $image) {
                    $imagePath = $image->storeAs(
                        'cafe_images/' . $cafe->id,
                        $image->getClientOriginalName(),
                        'public'
                    );

                    CafeImage::create([
                        'cafe_id' => $cafe->id,
                        'path_file' => $imagePath,
                    ]);
                }
            });

            return redirect()->route('cafe.list')->with('success', 'Cafe added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to add cafe: ' . $e->getMessage())->withInput();
        }
    }

    public function editCafe($id)
    {
        $Title = 'Edit - Cafe - Cafe Guide City';
        $DataCafe = Cafe::find($id);
        $DataImages = CafeImage::where('cafe_id', $id)->get();
        return view('cafe.edit', compact(['Title', 'DataCafe', 'DataImages']));
    }

    public function updateCafe(Request $request, $id)
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'number_phone' => 'required',
            'location' => 'required|string',
            'url_link_maps' => ['required', 'url'],
            'range_rate_price' => 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ], [
            'name.required' => 'Cafe name is required.',
            'description.required' => 'Description is required.',
            'number_phone.required' => 'Phone number is required.',
            'location.required' => 'Location is required.',
            'url_link_maps.required' => 'Map link is required.',
            'url_link_maps.url' => 'Invalid URL format for map link.',
            'range_rate_price.required' => 'Price range is required.',
            'images.*.image' => 'Invalid image format.',
            'images.*.mimes' => 'Allowed image formats: jpeg, png, jpg, gif, svg.',
            'images.*.max' => 'Image size should not exceed 10 MB.',
        ]);

        try {
            DB::transaction(function () use ($request, $id) {
                $cafe = Cafe::findOrFail($id);
                $cafe->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'number_phone' => $request->number_phone,
                    'location' => $request->location,
                    'url_link_maps' => $request->url_link_maps,
                    'range_rate_price' => $request->range_rate_price,
                ]);

                if ($request->hasFile('images')) {
                    foreach ($request->file('images') as $image) {
                        $imagePath = $image->storeAs(
                            'cafe_images/' . $cafe->id,
                            $image->getClientOriginalName(),
                            'public'
                        );

                        CafeImage::create([
                            'cafe_id' => $cafe->id,
                            'path_file' => $imagePath,
                        ]);
                    }
                }
            });

            return redirect()->route('cafe.list')->with('success', 'Cafe updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update cafe: ' . $e->getMessage())->withInput();
        }
    }

    public function deleteCafe($id)
    {
        try {
            DB::transaction(function () use ($id) {
                $cafe = Cafe::findOrFail($id);
                $cafe->delete();
            });
            return redirect()->route('cafe.list')->with('success', 'Cafe deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete cafe: ' . $e->getMessage());
        }
    }
}
