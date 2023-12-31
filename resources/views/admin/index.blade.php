@extends('layouts.admin',['title'=>'User Admin'])

@section('content-header')
<h1 class="m-0"> <i class="fas fa-users"></i>User admins</h1>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <x-search />
    </div>
    <x-card-table>


        <thead>
            <tr>
                <th>No.</th>
                <th>Nama User</th>
                <th>User Name</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = $data->firstItem(); ?>
            @foreach ( $data as $row)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$row->nama }}</td>
                <td>{{$row->username }}</td>
                <td>{{$row->role }}</td>
            </tr>
            @endforeach
        </tbody>
    </x-card-table>

    <div class="card-body pb-0">
        {{ $data->appends(['search' => request()->search ])->links('vendor.pagination.page') }}
    </div>
</div>

@endsection