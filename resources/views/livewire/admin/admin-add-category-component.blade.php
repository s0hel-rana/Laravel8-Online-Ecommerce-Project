<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add new category
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-success pull-right" href="{{ route('admin.category') }}">All Category</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                                @if(Session::has('seccess_msg'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('seccess_msg') }}
                                    </div>
                                @endif
                                <form class="form-horizontal" wire:submit.prevent="storeCategory">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Category Name</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="category" aria-describedby="emailHelp" placeholder="Category name"  wire:model='name' wire:keyup="generateSlug" required>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Slug</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="slug" aria-describedby="emailHelp" placeholder="Category slug" wire:model="slug">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"></label>
                                       <div class="col-md-4">
                                           <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>

                                    </div>

                                </form>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
