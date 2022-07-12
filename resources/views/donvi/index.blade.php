@extends('adminlte::page')

@section('content')

<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route("donvi.create") }}">
            Thêm Đơn vị
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
       Danh sach Đơn vị
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="tbdonvi" class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            Mã số Thuế
                        </th>
                        <th>
                            Tên Đơn vị
                        </th>

                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
@section('adminlte_js')
@parent
<script type="text/javascript">
  $(function () {

    var table = $('#tbdonvi').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('donvi.getdatatable') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'MST', name: 'MST'},
            {data: 'TenDonVi', name: 'TenDonVi'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

  });
</script>

@endsection
@endsection
