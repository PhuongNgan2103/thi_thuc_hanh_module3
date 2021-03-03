<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Thêm mới đại lý phân phối
        </div>
        <div class="card-body">
            <form action="{{route('agency.store')}}" method="post">
                @csrf
                <label class="form-label">Mã số đại lý</label>
                <input class="form-control" @if($errors->any()) value="{{old('code')}}"
                       @endif name="code" required>
                @if($errors->any())
                    <p class="text-danger">{{ $errors->first('code') }}</p>
                @endif
                <label class="form-label ">Tên đại lý</label>
                <input class="form-control" @if($errors->any()) value="{{old('name')}}"
                       @endif name="name" required>
                @if($errors->any())
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                @endif
                <label class="form-label">Điện thoại</label>
                <input class="form-control" @if($errors->any()) value="{{old('phone')}}"
                       @endif name="phone" required>
                @if($errors->any())
                    <p class="text-danger">{{ $errors->first('phone') }}</p>
                @endif
                <label class="form-label">Email</label>
                <input class="form-control" @if($errors->any()) value="{{old('email')}}"
                       @endif name="email" required>
                @if($errors->any())
                    <p class="text-danger">{{ $errors->first('email') }}</p>
                @endif
                <label class="form-label">Địa chỉ</label>
                <input class="form-control" @if($errors->any()) value="{{old('address')}}"
                       @endif name="address" required>
                @if($errors->any())
                    <p class="text-danger">{{ $errors->first('address') }}</p>
                @endif
                <label class="form-label">Tên người quản lý</label>
                <input class="form-control" @if($errors->any()) value="{{old('manager')}}"
                       @endif name="manager" required>
                @if($errors->any())
                    <p class="text-danger">{{ $errors->first('manager') }}</p>
                @endif
                <label class="form-label">Trạng thái</label>
                <select name="status" class="form-control">
                    <option>Hoạt động</option>
                    <option>Ngừng hoạt động</option>
                </select>
                <input type="submit" value="Thêm mới" class="btn btn-success mt-4">
                <a href="{{route('agency.index')}}" class="btn btn-secondary mt-4 ml-5">Back</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
