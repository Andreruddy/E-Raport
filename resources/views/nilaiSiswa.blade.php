@extends('layouts.master')
@section('content')
    <div class="section-header">
        <h4>Nilai Siswa</h4>    
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8">
                      <table class="table table-md">
                        <thead>
                          <tr>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa[0]->mapel as $nilai)
                        <tr>
                            <td>{{$maple->siswa->nama_siswa}}</td>
                            <td>{{$mapel->nama_mapel}}</td>
                            <td>{{$nilai->pivot->nilai}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    {{-- {{$mapel->links()}} --}}
                    {{-- {{$siswa->links()}} --}}
                </table>
            </div>
        </div>
    </div>
@endsection