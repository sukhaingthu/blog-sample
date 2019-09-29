@extends ('backend.layouts.master')

@section('title','View Category')

@section('content')
<h1>View Category</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-7">
        
        @include('alerts')
        
        <a href="{{url('admin/category/create')}}" class="btn btn-primary mb-3"><i class="fas fa-plus-circle m-1"></i>Create</a>
        <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Action</td>
            </tr>
        </thead>
            
        <tbody>
            @foreach($category as $cat)
            <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->name}}</td>
                
                <td>
                    <a href="{{ url('admin/'.'category/' . $cat->id . '/edit') }}" class="btn btn-success"><i class="fas fa-edit m-1" ></i>Edit</a>
                   <a href="{{ url("admin/category/$cat->id/delete") }}" class="btn btn-danger"><i class="fas fa-trash-alt 
                    m-1"></i>Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
           
        </table>

        {{ $category->links() }}

        </div>
    </div>
    </div> 
@endsection