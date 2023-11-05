<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6 class="text-center">Edit Data Inventaris </h6>
                </div>
                
              <div class="col-8 ml-2 mb-2" >
                <div class="card justify-content-center">
                  <div>
                    <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3 mt-3">
                        <label for="#" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="#" placeholder="Masukan Nama Barang" name="namabarang"
                        value="{{ $data->namabarang }}">
                      </div>
                      <div class="mb-3 mt-3">
                        <label for="#" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="#" placeholder="Masukan Deskispsi" name="deskripsi"
                        value="{{ $data->deskripsi }}">
                      </div>
                      <div class="mb-3 mt-3">
                        <label for="#" class="form-label">Kode barang</label>
                        <input type="text" class="form-control" id="#" placeholder="Masukan Kode Barang" name="kodebarang"
                        value="{{ $data->kodebarang }}">
                      </div>
                      <div class="mb-3 mt-3">
                        <label for="#" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" id="#" placeholder="Masukan Jumlah " name="jumlah"
                        value="{{ $data->jumlah }}">
                      </div> <div class="mb-3 mt-3">
                        <label for="#" class="form-label">{{ $data->tempatpenyimpanan }}</label>
                        <select class="form-select" name="tempatpenyimpanan">
                          <option>Lemari laboratorium 1</option>
                          <option>Lemari laboratorium 2</option>
                          <option>Lemari laboratorium 3</option>
                          <option>Lemari laboratorium 4</option>
                          <option>Lemari laboratorium 5</option>
                        </select>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary ms-2">Submit</button>
                        </div>
                   
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>