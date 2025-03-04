Danh sach nha san xuat
@foreach($nsx as $row)
    <li>{{$row->ten}} - {{$row->logo}} - {{$row->status}}</li>
@endforeach
