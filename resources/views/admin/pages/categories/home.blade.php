@extends('admin.common.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Categories Tree View</h3>
                            <div class="card-tools">
                                <a href="{{route('categories.create')}}" type="button" class="btn bg-info btn-outline-info pull-right">Create</a>
                            </div>                            
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach($categoriesList as $key => $catObj)
                                    @if($catObj->sub_cat == '[]')
                                    <tr>
                                        <td class="border-0">{{$catObj->name}}</td>
                                        <td class="border-0">
                                            <div class="btn-group">
                                                <a href="{{route('categories.edit',['id' => $catObj->id])}}" type="button" class="btn bg-olive btn-outline-olive">Edit</a>
                                                <a href="{{route('categories.delete',['id' => $catObj->id])}}" type="button" class="btn bg-danger btn-outline-danger">Del</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @else
                                    <tr class="expandable-body">
                                        <td>
                                            <div class="p-0">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr data-widget="expandable-table" aria-expanded="false">
                                                            <td>
                                                                <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                                {{$catObj->name}}
                                                            </td>
                                                            <td class="border-0">
                                                                <div class="btn-group">
                                                                    <a href="{{route('categories.edit',['id' => $catObj->id])}}" type="button" class="btn bg-olive btn-outline-olive">Edit</a>
                                                                    <a href="{{route('categories.delete',['id' => $catObj->id])}}" type="button" class="btn bg-danger btn-outline-danger">Del</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr class="expandable-body">
                                                            <td>
                                                                <div class="p-0">
                                                                    <table class="table table-hover">
                                                                        <tbody>
                                                                        @foreach($catObj->sub_cat as $skey => $subCatObj)
                                                                            <tr>
                                                                                <td>{{$subCatObj->name}}</td>
                                                                                <td class="border-0">
                                                                                    <div class="btn-group">
                                                                                        <a href="{{route('categories.edit',['id' => $subCatObj->id])}}" type="button" class="btn bg-olive btn-outline-olive">Edit</a>
                                                                                        <a href="{{route('categories.delete',['id' => $subCatObj->id])}}" type="button" class="btn bg-danger btn-outline-danger">Del</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr> 
                                    @endif 
                                    @endforeach                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection