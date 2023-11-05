@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100 rtl'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Inventaris'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Data Inventaris LAB</h6>
                    </div>
                  
                    <div>
                        <table class="table table-borderless">
                            <thead>
                                <a href="/tambahinventaris" class="btn btn-primary ms-2">+ Tambah</a>
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                  {{ $message }}
                                </div>
                                @endif
                              <tr>  
                                <th scope="col">ID</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Kodebarang</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Tempat Penyimpanan</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                @foreach($data as $row )
                                <td scope='row'>{{ $row->id }}</td>
                                <td>{{ $row->namabarang  }}</td>
                                <td>{{ $row->deskripsi  }}</td>
                                <td>{{ $row->kodebarang}}</td>
                                <td>{{ $row->jumlah }}</td>
                                <td>{{ $row->tempatpenyimpanan }}</td>
                                <td>
                                    <a href="/tampilkandata/{{ $row->id }}"  class="btn btn-primary">Edit</a>
                                    <a href="/deletedata/{{ $row->id }}" type="button" class="btn btn-primary">detele</a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                            
                          </table>
                          
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection