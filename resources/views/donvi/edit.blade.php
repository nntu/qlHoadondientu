@extends('adminlte::page')

@section('content')

<div class="card">
    <div class="card-header">
        Sửa đơn vị
    </div>

    <div class="card-body">
        <form action="{{ route("donvi.update") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('MST') ? 'has-error' : '' }}">
                <label for="MST">Mã Số Thuế*</label>
                <input type="text" id="MST" name="MST" class="form-control"
                    value="{{ old('MST', isset($donvi) ? $donvi->MST : '') }}">
                @if($errors->has('MST'))
                <em class="invalid-feedback">
                    {{ $errors->first('MST') }}
                </em>
                @endif
                <p class="helper-block">

                </p>
            </div>
            <div class="form-group {{ $errors->has('TenDonVi') ? 'has-error' : '' }}">
                <label for="TenDonVi">Tên Đơn vị*</label>
                <input id="TenDonVi" name="TenDonVi" class="form-control "
                    value="{{ old('TenDonVi', isset($donvi) ? $donvi->TenDonVi : '') }}">
                @if($errors->has('TenDonVi'))
                <em class="invalid-feedback">
                    {{ $errors->first('TenDonVi') }}
                </em>
                @endif
                <p class="helper-block">

                </p>
            </div>
            <div class="form-group {{ $errors->has('TenDonVi') ? 'has-error' : '' }}">
                <label for="DiaChi">Địa Chỉ</label>
                <input id="DiaChi" name="DiaChi" class="form-control "
                    value="{{ old('DiaChi', isset($donvi) ? $donvi->DiaChi : '') }}">
                @if($errors->has('DiaChi'))
                <em class="invalid-feedback">
                    {{ $errors->first('DiaChi') }}
                </em>
                @endif
                <p class="helper-block">

                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>

@endsection
