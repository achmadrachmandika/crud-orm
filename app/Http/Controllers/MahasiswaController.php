<?php
namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
class MahasiswaController extends Controller
{

/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */

    public function cariMahasiswa(Request $request)
    {
        $cari = $request->cari;
        $mahasiswas = Mahasiswa::where('nama', 'like', '%'.$cari.'%')->paginate(5);
        return view('mahasiswas.index', compact('mahasiswas'));
    }
    
        public function index()
    {
 //fungsi eloquent menampilkan data menggunakan pagination
//  $mahasiswas = Mahasiswa::all(); // Mengambil semua isi tabel
//     $posts = Mahasiswa::orderBy('Nim', 'desc')->paginate(6);

        $mahasiswas = Mahasiswa::paginate(5);
        return view('mahasiswas.index', compact('mahasiswas'));
    // with('i', (request()->input('page', 1) - 1) * 5);
    }
        public function create()
        {
        return view('mahasiswas.create');
    }
    public function store(Request $request)
    {
 //melakukan validasi data
    $request->validate([
    'nim' => 'required',
    'nama' => 'required',
    'kelas' => 'required',
    'jurusan' => 'required',
    'no_handphone' => 'required',
    ]);
    
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa Berhasil Ditambahkan');
        }
        public function show($nim)
        {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Mahasiswa = Mahasiswa::find($nim);
        return view('mahasiswas.detail', compact('Mahasiswa'));
        }
        public function edit($nim)
        {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk
        // diedit
        $Mahasiswa = Mahasiswa::find($nim);
        return view('mahasiswas.edit', compact('Mahasiswa'));
        }
        public function update(Request $request, $nim)
        {
        //melakukan validasi data
        $request->validate([
        'nim' => 'required',
        'nama' => 'required',
        'kelas' => 'required',
        'jurusan' => 'required',
        'no_handphone' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Mahasiswa::find($nim)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa Berhasil Diupdate');
        }
        public function destroy( $nim)
        {
        //fungsi eloquent untuk menghapus data
        Mahasiswa::find($nim)->delete();
        return redirect()->route('mahasiswas.index')-> with('success', 'Mahasiswa Berhasil Dihapus');
        }
};