@extends('mahasiswas.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Mahasiswa
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('mahasiswas.update', $Mahasiswa->nim) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" name="nim" class="form-control" id="nim" value="{{ $Mahasiswa->nim }}"
                            ariade-scribedby="nim">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $Mahasiswa->nama }}"
                            ariade-scribedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="Kelas">Kelas</label>
                        <input type="kelas" name="kelas" class="form-control" id="kelas" value="{{ $Mahasiswa->kelas }}"
                            ariade-scribedby="kelas">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="jurusan" name="jurusan" class="form-control" id="jurusan"
                            value="{{ $Mahasiswa->jurusan }}" ariade-scribedby="jurusan">
                    </div>
                    <div class="form-group">
                        <label for="no_Handphone">No_Handphone</label>

                        <input type="text" name="no_handphone" class="form-control" id="no_handphone"
                            value="{{ $Mahasiswa->no_handphone }}" ariade-scribedby="no_handphone">
                    </div>

                    <div class="form-group">
                        <label for="Email">Email</label>
                    
                        <input type="text" name="email" class="form-control" id="email" aria-describedby="email">
                    </div>
                    
                    <div class="form-group">
                        <label for="Date">Tanggal Lahir</label>
                    
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" aria-describedby="tanggal_lahir">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection