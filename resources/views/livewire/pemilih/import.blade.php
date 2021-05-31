<div>
    <div class="row">
        <div class="col-md-10">
            <div class="card mt-4">
                <form wire:submit.prevent="save">
                    <h5 class="card-header bg-gray-dark">Import Pemilih</h5>
                    <div class="card-body">
                        <small>* Pilih file dengan extention .xlsx / xls</small>
                        <div class="mb-3 row">
                            <label for="import" class="col-sm-2 col-form-label">Import Excel</label>
                            <div class="col-sm-10">
                                {{-- Didalm input atribut name="file" di gandi dengan wire:model="file" --}}
                                <input class="form-control @error('file') is-invalid @enderror" type="file"
                                    wire:model="file">
                                @error('file')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <a href="{{ route('pemilih.example') }}" class="btn btn-primary">
                            Example Excel <i class="ml-2 fas fa-file-download"></i>
                        </a>
                    </div>
                    <div class="card-footer d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-success">Simpan <i class="ml-2 fas fa-save"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            @if (session('massage'))
            <div class="alert alert-success" role="alert">
                {{ session('massage') }}
            </div>
            @endif

            {{-- @dump($errors) --}}

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- <table class="table table-striped display" id="example">
              <thead>
                 <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                 </tr>
              </thead>
              <tbody>
                 <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                 </tr>
                 <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                 </tr>
                 <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                 </tr>
                 <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                 </tr>
                 <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                 </tr>
                 <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                 </tr>
                 <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                 </tr>
              </tbody>
           </table> --}}


        </div>
    </div>
</div>