@extends('admin.common.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List of All Users</h3>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>    
                                    <th>SNo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($userList as $key => $userObj)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$userObj->name}}</td>
                                        <td>{{$userObj->email}}</td>                                    
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SNo</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <br>
                            <div class="pagination justify-content-center">  {!! $userList->render() !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection