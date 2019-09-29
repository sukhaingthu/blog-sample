@extends ('backend.layouts.master')

@section('title', 'Update Category')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">

            @include('alerts')

            <div class="card">
                <div class="card-header">
                    Update Category
                </div>
                <div class="card-body">
                    <form action="{{ url("admin/category/$cat->id/edit") }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $cat->name  }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('admin/category') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

