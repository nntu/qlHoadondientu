@extends('adminlte::page')
@section('content')





    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h3>
            h3. Lorem ipsum dolor sit amet.
          </h3>
          @can('donvi_create')
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route("hoadon.create") }}">
                        Thêm Hóa đơn
                    </a>
                </div>
            </div>
          @endcan
          <div class="row">
            <div class="col-md-6">
               <span class="badge badge-default">Label</span>
               <input type="text" id="fromDate" class="form-control date" value="{{ \Carbon\Carbon::parse('first day of this month')->format('Y-m-d H:i') }}">
            </div>
            <div class="col-md-6">
               <span class="badge badge-default">Label</span>
               <input type="text" id="toDate" class="form-control date" value="{{ \Carbon\Carbon::parse('last day of this month')->format('Y-m-d H:i') }}">

            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
               <span class="badge badge-default">Label</span>
               <select class="form-control" id="mst" name="mst">
                <option value="">-- All --</option>
                 @foreach($dsdonvi as $dv)
                        <option value="{{$dv->MST}}">{{$dv->MST}} - {{$dv->TenDonVi}}</option>
                  @endforeach
              </select>
            </div>
            <div class="col-md-6">
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <button type="button" id="searchButton" class="btn btn-success">
                Button
              </button>
            </div>
            <div class="col-md-4">
            </div>
          </div>
         <div class="row">
            <div class="col-md-12">
              <table id='tbhoadon' class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th width="10">
                          ID
                    </th>
                    <th>
                        MST
                    </th>
                    <th>
                      Đơn vị
                  </th>
                    <th>
                        Số Hóa đơn
                    </th>
                    <th>
                        Số Tiền
                    </th>
                    <th>
                        Ngày Hóa đơn
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
      </div>
    </div>
@section('scripts')
@parent
<script type="text/javascript">

   $(function () {
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    var table = $('#tbhoadon').DataTable({
        processing: true,
        serverSide: true,

        ajax: {

        'type': 'POST',
        'url': "{{ route('hddientu.getdatatable') }}",
        'data': {
                'ngaydau': function() { return $('#fromDate').val()},
            'ngaycuoi':function() { return $('#toDate').val()},
            'mst' : function() { return $('#mst').val()}
            }
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'MST', name: 'MST'},
            {data: 'TenDonVi', name: 'TenDonVi'},
            {data: 'sohoadon', name: 'sohoadon'},
            {data: 'sotien', name: 'sotien'},
            {data: 'ngayhoadon', name: 'ngayhoadon'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('#searchButton').click(function () {

table.ajax.reload();
});

  });
</script>
@endsection
@endsection
