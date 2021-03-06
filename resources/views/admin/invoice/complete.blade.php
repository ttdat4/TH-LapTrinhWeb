@extends('admin')
@section('pageadmin')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách khách hàng</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table " width="100%" cellspacing="0" id="dataTable">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Ngày Tạo hoá đơn</th>
                            <th>SĐT</th>
                            <th>Địa chỉ</th>
                            <th>Tổng tiền hoá đơn</th>
                            <th>Trạng thái</th>
                            <th>Chi tiết hoá đơn</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->phonenumber}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{number_format($item->totalmoney,0,'','.')}} ₫</td>
                            <td><span style="    color: #12e643;
                                ">Hoàn tất đơn hàng</span> </td>
                            <td><a href="{{route('admins.khachhang.chitiet',$item->idinvoice)}}" class="btn btn-info btn-circle btn-sm"><i
                                        class="fas fa-info-circle"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('dataTable',)
@include('admin.pluginjs.datatable')
@endsection
