@extends('layouts.master')

@section('title')
    Danh sách User
@endsection

@section('content')
    <div class=" container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h1 class="mb-4">Danh sách user</h1>

                    <a class="btn btn-primary" href="{{ url('admin/users/create') }}">Thêm mới</a>

                    @if (isset($_SESSION['status']) && $_SESSION['status'])
                        <div class="alert alert-success">
                            {{ $_SESSION['msg'] }}
                        </div>

                        @php
                            unset($_SESSION['status']);
                            unset($_SESSION['msg']);
                        @endphp
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>IMAGE</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>CREATED AT</th>
                                <th>UPDATED AT</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $user)
                                <tr>
                                    <td><?= $user['id'] ?></td>
                                    <td>
                                        <img src="{{ asset($user['avatar']) }}" alt="" width="100px">
                                    </td>
                                    <td><?= $user['name'] ?></td>
                                    <td><?= $user['email'] ?></td>
                                    <td><?= date('d/m/Y H:i:s', strtotime($user['created_at'])) ?></td>
                                    <td><?= date('d/m/Y H:i:s', strtotime($user['updated_at'])) ?></td>
                                    <td>

                                        <a class="btn btn-info"
                                            href="{{ url('admin/users/' . $user['id'] . '/show') }}">Xem</a>
                                        <a class="btn btn-warning"
                                            href="{{ url('admin/users/' . $user['id'] . '/edit') }}">Sửa</a>
                                        <a class="btn btn-danger" href="{{ url('admin/users/' . $user['id'] . '/delete') }}"
                                            onclick="return confirm('Chắc chắn xóa không?')">Xóa</a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
