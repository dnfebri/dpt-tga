<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row my-2">
                <div class="col-md-4">
                    <h1 class="m-0">{{ $pemilih->total() }} Daftar Pemilih</h1>
                </div>
                <div class="col-md-3">
                    <input wire:model="searchName" type="text" class="form-control" placeholder="Cari Nama" autofocus>
                </div>
                <div class="col-md-2">
                    <select class="form-select" wire:model="select">
                        <option selected value="">Jenis Kelamin</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content  ---------------------------------------------------------------------------------------------------------->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">TGL Lahir</th>
                                <th scope="col">Jenis <br>Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">TPS</th>
                                <th scope="col">KD <br>Desa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemilih as $key => $row)
                            <tr>
                                <th scope="row">{{ $pemilih->firstItem() + $key }}</th>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->tgl_lahir }}</td>
                                <td>{{ $row->jenis_kelamin }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->kd_tps }}</td>
                                <td>{{ $row->kd_desa }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-start">
                        Showing 
                        {{ $pemilih->firstItem() }}
                        to
                        {{ $pemilih->lastItem() }}
                        of
                        {{ $pemilih->total() }}
                    </div>
                    <div class="d-flex justify-content-end">
                        {{ $pemilih->links() }}
                    </div>
                    
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
</div>