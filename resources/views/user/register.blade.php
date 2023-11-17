@extends('user.skeleton')

@section('main')

<div class="bg-main">
</div>
<div class="container vh-min-100 align-items-md-center d-flex justify-content-center">
    <div class="my-3 mt-5 my-md-0 mt-md-0 my-lg-3 mt-lg-5">
        <div class="text-center">
            <img class="img-fluid" src="{{asset('./img/logo-perqara.png')}}" alt="logo-perqara.png">
        </div>
        <h2 class="text-center text-white mt-5">REGISTRASI</h2>
        <div class="card-register mt-3">
            <form action="" method="post">
                <label for="nama" class="fw-bold">Nama Lengkap</label>
                <input class="form-control mt-2 mb-4 p-3 border-black" type="text" id="nama" require>

                <label for="instansi" class="fw-bold">Instansi (beserta cabang jika ada)</label>
                <input class="form-control mt-2 mb-4 p-3 border-black" type="text" id="instansi">

                <label for="jabatan" class="fw-bold">Jabatan</label>
                <input class="form-control mt-2 mb-4 p-3 border-black" type="text" id="jabatan" require>

                <div class="row g-0">
                    <div class="col-md-6 col-12 pe-0 pe-md-3">
                        <label for="phone" class="fw-bold">No. HP</label>
                        <input class="form-control mt-2 mb-4 p-3 border-black" type="text" id="jabatan" require>
                    </div>
                    <div class="col-md-6 col-12 ps-0 ps-md-3">
                        <label for="email" class="fw-bold">Email</label>
                        <input class="form-control mt-2 mb-4 p-3 border-black" type="email" id="email" require>
                    </div>
                </div>

                <label for="kategori" class="fw-bold">Kategori</label>
                <select class="form-select mt-2 mb-4 p-3 border-black" require>
                    <option value="default" class="d-none" selected disabled></option>
                    <option value="advokat">Advokat</option>
                    <option value="media">Media</option>
                    <option value="community">Community</option>
                    <option value="vip">VIP</option>
                    <option value="lainnya">Lainnya</option>
                </select>
                <button type="submit" class="btn btn-info mt-4 p-3 w-100 text-white fw-bold">KIRIM</button>
            </form>
        </div>
    </div>
</div>


@endsection