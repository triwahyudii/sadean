@extends('admin')

@section('content')
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title fs-3">Wedding Organizer</h2>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="justify-content-start">
                        <a href="{{ url('/admin/wedding/create') }}" class="btn btn-success btn-sm m-2">
                            <i class="fa-regular fa-plus"></i> Add Data Wedding
                        </a>
                    </div>
                </div>
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Images</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td class="fw-bold">{{ $item['title'] }}</td>
                                <td>Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                                <td>
                                    <img src="{{ asset('/'.$item['images']) }}" width="50px">
                                </td>
                                <td>
                                    <a href="{{ url('/admin/wedding/' . $item['id']) }}" class="btn btn-info btn-sm"><i class="fa-regular fa-eye"></i> View </a>
                                    <a href="{{ url('/admin/wedding/edit/' . $item['id']) }}" class="btn btn-warning btn-sm"><i class="fa-regular fa-pen-to-square mr-3"></i> Edit </a>
                                    <form action="{{ url('/admin/wedding/' . $item['id']) }}" method="post" onsubmit="return confirm('Yakin menghapus data?')" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection