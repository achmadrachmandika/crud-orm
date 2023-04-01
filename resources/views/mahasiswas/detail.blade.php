@extends('mahasiswas.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Mahasiswa
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nim<br> </b>{{$Mahasiswa->nim}}</li>
                    <li class="list-group-item"><b>Nama<br>          </b>{{$Mahasiswa->nama}}</li>
                    <li class="list-group-item"><b>Kelas<br>         </b>{{$Mahasiswa->kelas}}</li>
                    <li class="list-group-item"><b>Jurusan<br>       </b>{{$Mahasiswa->jurusan}}</li>
                    <li class="list-group-item"><b>No_Handphone<br>  </b>{{$Mahasiswa->no_handphone}}</li>
                    <li class="list-group-item"><b>Email<br> </b>{{$Mahasiswa->email}}</li>
                    <li class="list-group-item"><b>Tanggal Lahir<br> </b>{{$Mahasiswa->tanggal_lahir}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('mahasiswas.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection