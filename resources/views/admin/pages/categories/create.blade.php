@extends('admin.common.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        <form action="{{ route('categories.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="catName">Category Name</label>
                                    <input type="text" class="form-control" name="catName" id="catName" placeholder="Enter category name">
                                </div>
                                <div class="form-group">
                                    <label for="parentCat">Parent Category</label>
                                    <select class="custom-select rounded-0" name="parentCat" id="parentCat">
                                        <option value="">select parent category</option>
                                        @foreach($categoriesList as $key => $res)
                                            <option value="{{$res->id}}" >{{$res->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection