@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Category Id</th>
                            </thead>
                            <tbody>
                            @foreach($subcategory_list as $item)
                                <tr>

                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->subcategory_name }}</td>
                                    <td>{{ $item->category_id }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
