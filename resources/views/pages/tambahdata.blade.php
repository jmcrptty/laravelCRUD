@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100 rtl'])

@section('content')
  
    <div class="container-fluid py-4">
        <div class="row ">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 class="text-center">Tambah Data Inventaris </h6>
                    </div>
                    
                  <div class="col-8 ml-2 mb-2" >
                    <div class="card justify-content-center">
                      <div class="card-body"> 
                        <form action="/insertdata" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3 mt-3">
                            <label for="#" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="#" placeholder="Masukan Nama Barang" name="namabarang">
                          </div>
                          <div class="mb-3 mt-3">
                            <label for="#" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="#" placeholder="Masukan Deskispsi" name="deskripsi">
                          </div>
                          <div class="mb-3 mt-3">
                            <label for="#" class="form-label">Kode barang</label>
                            <input type="text" class="form-control" id="#" placeholder="Masukan Kode Barang" name="kodebarang">
                          </div>
                          <div class="mb-3 mt-3">
                            <label for="#" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" id="#" placeholder="Masukan Jumlah " name="jumlah">
                          </div> <div class="mb-3 mt-3">
                            <label for="#" class="form-label">Tempat Peyimpanan</label>
                            <select class="form-select" name="tempatpenyimpanan">
                              <option>Lemari laboratorium 1</option>
                              <option>Lemari laboratorium 2</option>
                              <option>Lemari laboratorium 3</option>
                              <option>Lemari laboratorium 4</option>
                              <option>Lemari laboratorium 5</option>
                            </select>
                            <div class="mt-2">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                       
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection