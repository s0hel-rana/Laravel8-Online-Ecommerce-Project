<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <p><strong>All Categories</strong>
                            <a class="btn btn-success pull-right" href="{{ route('admin.addcategory') }}">Add New</a>
                        </p>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>

                        @endif
                        <table class="table table-strip">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)

                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        <a href="{{route('admit.editcategory',['category_slug'=>$category->slug])}}"><i class ="fa fa-edit fa-2x"></i></a>
                                        <a href="#" wire:click.prevent="deleteCategory({{$category->id}})" style="margin-left: 10px"><i class ="fa fa-times fa-2x text-danger"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                         {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
