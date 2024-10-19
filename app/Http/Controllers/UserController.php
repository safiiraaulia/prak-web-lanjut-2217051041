<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;


    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
{
    $data = [
        'title' => 'List User',
        'users' => $this->userModel->getUser(),
    ];

    return view('list_user', $data);
}


public function create(){
    $kelasModel = new Kelas();

    // Mengambil data kelas menggunakan method getKelas
    $kelas = $kelasModel->getKelas();

    $data = [
        'title' => 'Create User',
        'kelas' => $kelas,
    ];

    return view('create_user', $data);
}

public function store(Request $request)
{
// Validasi input
$request->validate([
    'nama' => 'required|string|max:255',
    'npm' => 'required|string|max:255',
    'kelas_id' => 'required|integer',
    'foto' =>
    'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', //Validasi untuk foto
    ]);

// Meng-handle upload foto
if ($request->hasFile('foto')) {
    $foto = $request->file('foto');
// Menyimpan file foto di folder 'uploads'
$foto_name = $foto->hashName();
$fotoPath = $foto->move(('upload/img'), $foto_name);
} else {
// Jika tidak ada file yang diupload, set fotoPathmenjadi null atau default
$fotoPath = null;
}
// Menyimpan data ke database termasuk path foto
$this->userModel->create([
    'nama' => $request->input('nama'),
    'npm' => $request->input('npm'),
    'kelas_id' => $request->input('kelas_id'),
    'foto' => $fotoPath, // Menyimpan path foto
    ]);
    return redirect()->to('/user')->with('success', 'User berhasil ditambahkan');
}

public function show($id){
    $user = $this->userModel->getUser($id);

    $data = [
        'title' => 'Profile',
        'user' => $user,
    ];

    return view('profile', $data);
}

public function edit($id)
{
    $user = UserModel::findOrFail($id);
    $kelasModel = new Kelas(); 
    $kelas = $kelasModel->all();
    $title = 'Edit User';

    return view('edit_user', compact('user', 'kelas', 'title'));
}

public function update(Request $request, $id)
{
    $user = UserModel::findOrFail($id);
    
    // Validasi input
    $request->validate([
        'nama' => 'required',
        'npm' => 'required',
        'kelas_id' => 'required',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
    ]);
    
    // Update user fields
    $user->nama = $request->nama;
    $user->npm = $request->npm;
    $user->kelas_id = $request->kelas_id;
    
    // Handle file upload
    if ($request->hasFile('foto')) {
        if ($user->foto && file_exists(public_path($user->foto))) {
            unlink(public_path($user->foto));
        }
        
        $file = $request->file('foto');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $filename);
        
        $user->foto = 'uploads/' . $filename;
    }
    
    $user->save();
    
    // Flash message
    return redirect()->route('user.list')->with('success', 'User berhasil diupdate');
}

  
  public function destroy($id)
  {
    $user = UserModel::findOrFail($id);
    
    // Menghapus file foto jika ada
    if ($user->foto && file_exists(public_path($user->foto))) {
        unlink(public_path($user->foto));
    }

    // Menghapus user dari database
    $user->delete();

    return redirect()->route('user.list')->with('success', 'User berhasil dihapus');
}

}