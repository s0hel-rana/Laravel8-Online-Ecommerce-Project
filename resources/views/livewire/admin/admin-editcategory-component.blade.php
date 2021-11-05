<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p><strong>Edit category</strong>
                            <a class="btn btn-success pull-right" href="{{ route('admin.category') }}">All Category</a>
                        </p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                @if(Session::has('seccess_msg'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('seccess_msg') }}
                                    </div>
                                @endif
                                <form wire:submit.prevent="updateCategory">
                                    <div class="form-group">
                                        <label for="category">Category Name</label>
                                        <input type="text" class="form-control" id="category" aria-describedby="emailHelp" placeholder="input category name"  wire:model='name' wire:keyup="generateSlug" required>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" class="form-control" id="slug" aria-describedby="emailHelp" placeholder="input slug" wire:model="slug">
                                        
                                    </div>
                                    <div class="form-group">
                                        
                                       <button type="submit" class="btn btn-primary">Update</button>
                                        
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
