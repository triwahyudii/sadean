@extends('admin')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Wedding</h4>
                </div>
                <form action="{{ url('/admin/wedding/store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <div class="input-form container pb-2 m-3">
                            <label class="pt-1" for="title">Title</label>
                            <div class="input-group" for="title">
                                <input type="text" name="title" id="title" class="form-control input m-2 rounded-3" placeholder="Title">
                            </div>
                            <label class="pt-1" for="price">Price</label>
                            <div class="input-group">
                                <input type="text" name="price" id="price" class="form-control input m-2 rounded-3" placeholder="Price">
                            </div>
                            <label class="pt-1" for="desc">Description</label>
                            <div class="input-group">
                                <textarea class="form-control input m-2 rounded-3" name="desc" id="desc" rows="8" placeholder="Description"></textarea>
                            </div>
                            <div class="pt-1">
                                <label for="formFileMultiple" class="form-label">Images</label>
                                <input class="form-control" type="file" name="images" id="formFileMultiple">
                            </div>
                            <div class="d-flex pt-3">
                                <a href="{{ url('/admin/wedding/') }}" class="btn btn-secondary btn-sm justify-content-start me-2"><i class="fa-solid fa-arrow-left"></i> Back</a>
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