<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $datas = User::get();
        $type_menu = 'admin';

        return view('pages.admin.index', compact('type_menu', 'datas'));
    }

    public function create()
    {
        $type_menu = 'admin';
        return view('pages.admin.create', compact('type_menu'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd(request()->hasFile('pas_foto'));
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required',
            'pas_foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $photoPath = null;

        if (request()->hasFile('pas_foto')) {
            $photo = $request->file('pas_foto');
            $filename = date('Ymd_His') . '_' . uniqid() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('upload/pas_foto'), $filename);
            $photoPath = 'upload/pas_foto/' . $filename;
            $photo = $filename;
        } 
        // dd($photo);
        //   dd($data['pas_foto']);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'pas_foto' => $photo,
        ]);

        return redirect()->route('admin')->with('success', 'Admin created successfully.');
    }

    public function show(Admin $admin)
    {
        return view('pages.admin.show', compact('admin'));
    }

    public function edit( $id)
    {
        $admin = User::findOrFail($id);
        return view('pages.admin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'username' => 'required|string|unique:users,username,' . $id,
            'password' => 'nullable|string|min:6|confirmed',
            'pas_foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $admin = User::findOrFail($id);

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->username = $request->username;

        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }

        if ($request->hasFile('pas_foto')) {
            if ($admin->pas_foto && file_exists(public_path('upload/pas_foto/' . $admin->pas_foto))) {
                unlink(public_path('upload/pas_foto/' . $admin->pas_foto));
            }

            $photo = $request->file('pas_foto');
            $filename = date('Ymd_His') . '_' . uniqid() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('upload/pas_foto'), $filename);
            $admin->pas_foto = $filename;
        }

        $admin->save();

        return redirect()->route('admin.index')->with('success', 'Admin updated successfully.');
    }

    public function destroy(User $admin)
    {
        if ($admin->pas_foto && file_exists(public_path('upload/pas_foto/' . $admin->pas_foto))) {
            unlink(public_path('upload/pas_foto/' . $admin->pas_foto));
        }
    
        $admin->delete();
    
        return redirect()->route('admin.index')->with('success', 'Admin berhasil dihapus.');
    }
}
