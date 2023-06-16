@extends('dashboard')
@section('content')


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Danh sách user</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <style type="text/css">
    .table>tbody>tr>td,
    .table>tfoot>tr>td {
        vertical-align: middle;
    }

    @media screen and (max-width: 600px) {
        table#cart tbody td .form-control {
            width: 20%;
            display: inline !important;
        }

        .actions .btn {
            width: 36%;
            margin: 1.5em 0;
        }

        .actions .btn-info {
            float: left;
        }

        .actions .btn-danger {
            float: right;
        }

        table#cart thead {
            display: none;
        }

        table#cart tbody td {
            display: block;
            padding: .6rem;
            min-width: 320px;
        }

        table#cart tbody tr td:first-child {
            background: #333;
            color: #fff;
        }

        table#cart tbody td:before {
            content: attr(data-th);
            font-weight: bold;
            display: inline-block;
            width: 8rem;
        }

        table#cart tfoot td {
            display: block;
        }

        table#cart tfoot td .btn {
            display: block;
        }
    }
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
    <h2 class="text-center">Danh sách người dùng</h2>
    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:40%">Ảnh đại diện</th>
                    <th style="width:30%">Họ tên</th>
                    <th style="width:30%">Chi tiết</th>

                </tr>
            </thead>
            <tbody>
                @foreach($users as $data)
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img src="../upload/{{$data->image}}" alt="picture"
                                    class="img-responsive" />
                            </div>

                        </div>
                    </td>
                    <td data-th="Subtotal" class="text-left">{{$data->name}}</td>

                    <td data-th="Price"><a href="{{route('detail_user',$data->id) }}"><i
                                class="fa-sharp fa-solid fa-eye"></i></a>
                    </td>
                </tr>
                
            </tbody>
            <tfoot>
                @endforeach 
            </tfoot>
        </table>    {{$users->links()}}
    </div>

    <script src="https://kit.fontawesome.com/51a2bee5af.js" crossorigin="anonymous"></script>
</body>

</html>
@endsection