@extends('layouts.admin')
@section('content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Chỉnh sửa người dùng
            </div>
            <div class="card-body">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Họ và tên</label>
                        <input class="form-control" type="text" name="name" value="{{ $user->name }}" id="name">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email" value="{{ $user->email }}" id="email"
                            disabled>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input class="form-control" type="password" name="password" id="password">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Xác Nhận Mật khẩu</label>
                        <input class="form-control" type="password" name="password_confirm" id="password-confirm">
                        @error('password-confirm')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Nhóm quyền</label>
                        <select class="form-control" id="">
                            <option>Chọn quyền</option>
                            <option>Danh mục 1</option>
                            <option>Danh mục 2</option>
                            <option>Danh mục 3</option>
                            <option>Danh mục 4</option>
                        </select>
                    </div>

                    <button type="submit" name="btn-add" value="Thêm mới" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection
