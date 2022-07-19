@extends('adminlte::page')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Post</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('hddientu.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('hddientu.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Đơn vị: *</strong>
                <select id="MST" name ='MST' placeholder="Choose one thing" data-allow-clear="1">
                    @foreach($dsdonvi as $donvi)
                    <option value="{{$donvi->MST}}">{{$donvi->MST}} - {{$donvi->TenDonVi}} </option>
                    @endforeach
                  </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Ký Hiệu: *</strong>
              <input type="text" name="kyhieu" class="form-control" placeholder="kyhieu">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Số Hóa Đơn: *</strong>
              <input type="text" name="sohoadon" class="form-control" placeholder="sohoadon">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Ngày Hóa Đơn: *</strong>
              <input type="text" name="ngayhoadon" class="form-control date" placeholder="ngayhoadon">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Số Tiền: *</strong>
              <input type="text" name="sotien" class="form-control" placeholder="sotien">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Mã tra cứu: *</strong>
              <input type="text" name="matracuu" class="form-control" placeholder="matracuu">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Địa chỉ Tra cứu: *</strong>
              <input type="text" name="diachitracuu" class="form-control" placeholder="diachitracuu">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Địa chỉ Tra cứu: *</strong>
              <input type="text" name="diachitracuu" class="form-control" placeholder="diachitracuu">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

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
