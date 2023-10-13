@extends('admin')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Gorden</h4>
                </div>
                <form action="{{ url('/admin/transfer/store') }}" method="post">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <div class="input-form container pb-2 m-3">
                            <label class="pt-1" for="name">Title</label>
                            <div class="input-group" for="name">
                                <input type="text" name="name" id="name"  class="form-control input m-2 rounded-3" placeholder="Title">
                            </div>
                            <label class="pt-1" for="desc">Description</label>
                            <div class="input-group">
                                <input type="text" name="desc" id="desc"  class="form-control input m-2 rounded-3" placeholder="Description">
                            </div>
                            <label class="pt-1" for="price">Price</label>
                            <div class="input-group">
                                <input type="text" name="price" id="price"  class="form-control input m-2 rounded-3" placeholder="Price">
                            </div>
                            <label class="pt-1">Nama Penerima</label>
                            <div class="input-group">
                                <input type="text" name="nama_penerima" id="nama_penerima"  class="form-control input m-2 rounded-3" placeholder="Nama Penerima">
                            </div>
                            <label class="pt-1">Nomor Rekening Penerima</label>
                            <div class="input-group">
                                <input type="number" name="nomor_rekening_penerima" id="nomor_rekening_penerima"  class="form-control input m-2 rounded-3" placeholder="Nomor Rekening Penerima">
                            </div>
                            <div class="d-flex pt-3">
                                <a href="{{ url('/admin/transfer/') }}" class="btn btn-secondary btn-sm justify-content-start me-2"><i class="fa-solid fa-arrow-left"></i> Back</a>
                                <button class="btn btn-primary btn-sm bg-primary justify-content-end" type="submit"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection