<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
// use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function listAdmin()
    {
        $Title = 'Admin List';
        $DataAdmin = User::getAdmin();
        // dd($DataAdmin);
        return view('admin.list', compact(['Title', 'DataAdmin']));
    }

    public function addAdmin()
    {
        $Title = 'Create Admin';
        return view('admin.add', compact(['Title']));
    }

    public function insertAdmin(Request $request)
    {
        $validator = $request->validate([
            'username' => ['required', Rule::unique('users', 'username')],
            'name' => 'required|string',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'nim' => [
                'required',
                'regex:/^20\d{6}$/',
                Rule::unique('users', 'nim')->ignore($request->id), // Add ignore for updates
            ],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Make image field nullable for updates
            'password' => 'required|min:8',
            'ig' => ['required', 'regex:/^(https?:\/\/)?(www\.)?instagram\.com\/[a-zA-Z0-9_]+\/?$/'],
            'ln' => ['required', 'regex:/^(https?:\/\/)?(www\.)?linkedin\.com\/[a-zA-Z0-9\/-]+$/'],
        ], [
            'username.required' => 'Username is required.',
            'username.unique' => 'Username already exists.',
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'email.unique' => 'Email already exists.',
            'nim.required' => 'Nim is required.',
            'nim.regex' => 'Nim must start with 20 and have 8 digits.',
            'nim.unique' => 'Nim already exists.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters.',
            'ig.required' => 'Kolom Instagram harus diisi.',
            'ig.regex' => 'Format Instagram tidak valid. Pastikan memasukkan tautan profil yang benar.',
            'ln.required' => 'Kolom LinkedIn harus diisi.',
            'ln.regex' => 'Format LinkedIn tidak valid. Masukkan tautan profil yang benar.',
        ]);

        $validator['id'] = $request->id;

        try {
            $imagePath = null; // Set default image path to null

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $this->uploadImage($image);
            }

            $user = new User();
            $user->username = trim($request->username);
            $user->name = trim($request->name);
            $user->email = trim($request->email);
            $user->nim = trim($request->nim);
            $user->image = $imagePath; // Save the image path correctly
            $user->ig;
            $user->ln = $imagePath;
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('admin.list')->with('success', "Successfully added admin data for $user->name.");
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors([$e->getMessage()]);
        }
    }

    private function uploadImage($image)
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('uploads/', $imageName);
        return 'uploads/' . $imageName;
    }

    public function profileAdmin()
    {
        try {
            $Title = 'Admin Profile';
            $adminProfile = User::findOrFail(auth()->id()); // Menggunakan model Admin, misalnya, untuk mendapatkan profil admin dari database

            return view('admin.profile', compact('adminProfile', 'Title')); // Menampilkan tampilan profil admin dengan data yang diteruskan
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors([$e->getMessage()]);
        }
    }

    public function uploadImageProfile(Request $request)
    {
        $validatedData = $request->validate([
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:10240', // Max 5MB
        ], [
            'profile_image.*' => 'The image must be a file of type: jpeg, png, jpg, gif and less than 10MB.',
        ]);

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = Auth::id() . '_' . time() . '.' . $image->getClientOriginalExtension();

            // Adjust storage path as needed based on your project structure
            try {
                // Save image to storage
                $image->storeAs('uploads', $imageName);

                // Save image name to user model
                $user = Auth::user(); // Retrieve the correct user object

                if ($user) {
                    $user->image = $imageName;
                    $user->save();

                    return redirect()->back()->with('success', 'Image uploaded successfully');
                } else {
                    return redirect()->back()->with('error', 'User not found');
                }
            } catch (\Illuminate\Contracts\Filesystem\FileNotFoundException $e) {
                return redirect()->back()->with('error', 'File not found. Please try again.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Failed to upload image. Please try again.');
            }
        }

        return redirect()->back()->with('error', 'No image found to upload');
    }


    public function editAdmin($id)
    {
        $User = User::find($id);
        // dd($User);
        if (!empty($User)) {
            $Title = 'Edit Admin - ' . $User->name;
            return view('admin.edit', compact('User', 'Title'));
        } else {
            abort(404);
        }
    }

    public function updateAdmin(Request $request, $id)
    {
        $request->validate([
            'username' => ['required', 'string', Rule::unique('users', 'username')->ignore($id)],
            'name' => 'required|string',
            'nim' => [
                'required',
                'regex:/^20\d{6}$/',
                Rule::unique('users', 'nim')->ignore($id),
            ],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($id)],
            'password' => 'nullable|string|min:8', // Menambahkan validasi untuk password baru
            'ig' => ['required', 'regex:/^(https?:\/\/)?(www\.)?instagram\.com\/[a-zA-Z0-9_]+\/?$/'],
            'ln' => ['required', 'regex:/^(https?:\/\/)?(www\.)?linkedin\.com\/[a-zA-Z0-9\/-]+$/'],
        ], [
            'username.required' => 'Username is required.',
            'username.unique' => 'Username already exists.',
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'email.unique' => 'Email already exists.',
            'nim.required' => 'Nim is required.',
            'nim.regex' => 'Nim must start with 20 and have 8 digits.',
            'nim.unique' => 'Nim already exists.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters.',
            'ig.required' => 'Kolom Instagram harus diisi.',
            'ig.regex' => 'Format Instagram tidak valid. Pastikan memasukkan tautan profil yang benar.',
            'ln.required' => 'Kolom LinkedIn harus diisi.',
            'ln.regex' => 'Format LinkedIn tidak valid. Masukkan tautan profil yang benar.',
        ]);

        $user = User::findOrFail($id);

        if (!$user) {
            return redirect()->route('admin.list')->with('error', 'The user data was not found.');
        }

        $user->fill($request->only(['username', 'name', 'email', 'nim', 'ig', 'ln']));

        // Memperbarui password hanya jika ada input password baru
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.list')->with('success', "The admin data for $user->username has been successfully updated.");
    }



    public function deleteAdmin($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', "The user $user->username has been successfully deleted.");
    }
}
