@extends('adminlte::page')
@section('content')

<div class="card">
    <div class="card-header">
        Thêm hoa đơn mới
    </div>

    <div class="card-body">
        <form action="{{ route("hddientu.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('MST') ? 'has-error' : '' }}">
                <label for="MST">Đơn vị*</label>
                <select id="MST" name ='MST' placeholder="Choose one thing" data-allow-clear="1">
                    @foreach($dsdonvi as $donvi)
                    <option value="{{$donvi->MST}}">{{$donvi->MST}} - {{$donvi->TenDonVi}} </option>
                    @endforeach
                  </select>
                @if($errors->has('MST'))
                <em class="invalid-feedback">
                    {{ $errors->first('MST') }}
                </em>
                @endif
                <p class="helper-block">

                </p>
            </div>
            <div class="form-group row">
                <div class="col-lg-6 {{ $errors->has('mauso') ? 'has-error' : '' }}">  <label for="mauso">Mẫu Số*</label>
                    <input id="mauso" name="mauso" class="form-control "
                        value="{{ old('mauso', isset($product) ? $product->mauso : '') }}">
                    @if($errors->has('mauso'))
                    <em class="invalid-feedback">
                        {{ $errors->first('mauso') }}
                    </em>
                    @endif
                    <p class="helper-block">
                    </p> </div>
                <div class="col-lg-6  {{ $errors->has('kyhieu') ? 'has-error' : '' }}"><label for="kyhieu">Ký Hiệu</label>
                    <input id="kyhieu" name="kyhieu" class="form-control "
                        value="{{ old('kyhieu', isset($product) ? $product->kyhieu : '') }}">
                    @if($errors->has('kyhieu'))
                    <em class="invalid-feedback">
                        {{ $errors->first('kyhieu') }}
                    </em>
                    @endif
                    <p class="helper-block">

                    </p></div>
              </div>



            <div class="form-group {{ $errors->has('sohoadon') ? 'has-error' : '' }}">
                <label for="sohoadon">sohoadon</label>
                <input id="sohoadon" name="sohoadon" class="form-control "
                    value="{{ old('sohoadon', isset($product) ? $product->sohoadon : '') }}">
                @if($errors->has('sohoadon'))
                <em class="invalid-feedback">
                    {{ $errors->first('sohoadon') }}
                </em>
                @endif
                <p class="helper-block">

                </p>
            </div>

            <div class="form-group {{ $errors->has('sotien') ? 'has-error' : '' }}">
                <label for="sotien">Số tiền</label>
                <input type="number" id="sotien" name="sotien" class="form-control "
                    value="{{ old('sotien', isset($product) ? $product->sotien : '') }}" step=1>
                @if($errors->has('sotien'))
                <em class="invalid-feedback">
                    {{ $errors->first('sotien') }}
                </em>
                @endif
                <p class="helper-block">

                </p>
            </div>

            <div class="form-group {{ $errors->has('matracuu') ? 'has-error' : '' }}">
                <label for="matracuu">matracuu</label>
                <input  id="matracuu" name="matracuu" class="form-control "
                    value="{{ old('matracuu', isset($product) ? $product->matracuu : '') }}">
                @if($errors->has('matracuu'))
                <em class="invalid-feedback">
                    {{ $errors->first('matracuu') }}
                </em>
                @endif
                <p class="helper-block">

                </p>
            </div>

            <div class="form-group {{ $errors->has('diachitracuu') ? 'has-error' : '' }}">
                <label for="diachitracuu">diachitracuu</label>
                <input id="diachitracuu" name="diachitracuu" class="form-control "
                    value="{{ old('diachitracuu', isset($product) ? $product->diachitracuu : '') }}">
                @if($errors->has('diachitracuu'))
                <em class="invalid-feedback">
                    {{ $errors->first('diachitracuu') }}
                </em>
                @endif
                <p class="helper-block">

                </p>
            </div>

            <div class="form-group {{ $errors->has('ngayhoadon') ? 'has-error' : '' }}">
                <label for="ngayhoadon">ngayhoadon</label>
                <input id="ngayhoadon" name="ngayhoadon" class="form-control date"
                    value="{{ old('ngayhoadon', isset($product) ? $product->ngayhoadon : '') }}">
                @if($errors->has('ngayhoadon'))
                <em class="invalid-feedback">
                    {{ $errors->first('ngayhoadon') }}
                </em>
                @endif
                <p class="helper-block">

                </p>
            </div>
            <div class="form-group {{ $errors->has('nguoithanhtoan') ? 'has-error' : '' }}">
                <label for="nguoithanhtoan">nguoithanhtoan</label>
                <input id="nguoithanhtoan" name="nguoithanhtoan" class="form-control "
                    value="{{ old('nguoithanhtoan', isset($product) ? $product->nguoithanhtoan : '') }}">
                @if($errors->has('nguoithanhtoan'))
                <em class="invalid-feedback">
                    {{ $errors->first('nguoithanhtoan') }}
                </em>
                @endif
                <p class="helper-block">

                </p>
            </div>


            <div class="form-group {{ $errors->has('ngaythanhtoan') ? 'has-error' : '' }}">
                <label for="ngaythanhtoan">ngaythanhtoan</label>
                <input id="ngaythanhtoan" name="ngaythanhtoan" class="form-control date"
                    value="{{ old('ngaythanhtoan', isset($product) ? $product->ngaythanhtoan : '') }}">
                @if($errors->has('ngaythanhtoan'))
                <em class="invalid-feedback">
                    {{ $errors->first('ngaythanhtoan') }}
                </em>
                @endif
                <p class="helper-block">

                </p>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <label for="">File PDF</label>
                <input required type="file" class="form-control" name="filepdf[]" multiple>
                </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                    <label for="">File Hoa đơn (.ZIP hoặc XML)</label>
                    <input required type="file" class="form-control" name="filehoadon[]" multiple>
                    </div>
                    </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>

@endsection
@section('adminlte_js')
@parent
<script type="text/javascript">
   $(function () {

        $('#MST').select2({
        theme: 'bootstrap4',
        width: 'style',
        placeholder: $(this).attr('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
        });



});

</script>
@endsection
