@extends('layouts.layout')
@section('title', '用户列表')
@section('style')
    @parent
@endsection

@section('script')
    @parent
@endsection
@section('content')
    <div class="header">

        <h1 class="page-title">Users</h1>
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a> </li>
            <li class="active">Users</li>
        </ul>

    </div>
    <div class="row">
        <div class="col-sm-9 col-md-9">
            <form class="form-inline" style="margin-top:0px;" method="get" action="{{asset('/userList')}}">
                <input class="input-xlarge form-control" placeholder="搜索账号..." id="appendedInputButton" type="text">
                <button class="btn btn-default" type="button"><i class="fa fa-search"></i> 搜索</button>
            </form>
        </div>
    </div>
    <div class="main-content">
        <table class="table">
            <thead>
            <tr>
                <th>用户ID</th>
                <th>用户姓名</th>
                <th>创建时间</th>
                <th>用户状态</th>
                <th style="width: 3.5em;"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->username}}</td>
                <td>{{date("Y-m-d H:i:s",$user->created)}}</td>
                <td>{{$user->created ? "正常" : "关闭"}}</td>
                <td>
                    <a href="user.html"><i class="fa fa-pencil"></i></a>
                    <a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        {{$users->links()}}

        <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">Delete Confirmation</h3>
                    </div>
                    <div class="modal-body">
                        <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the user?<br>This cannot be undone.</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection