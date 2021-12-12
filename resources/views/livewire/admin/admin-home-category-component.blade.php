<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Manage Home Categories
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="horizontal-group" Wire:submit.prevent="updateHomeCategory">

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3" wire:ignore>
                                    <label class="col-md-4 control-label">Choose Categories</label>
                                            <select class="sel_categories form-control" name="categories[]" multiple="multiple" wire:model="selected_categories">
                                                @foreach ($categories as $category )
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        <br>
                                    <label class="col-md-4 control-label">No Of Products</label><br>
                                    <input type="text" class="form-control input-md" wire:model="numberofproducts"><br>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.sel_categories').select2();
            $('.sel_categories').on('change',function(e){
                var data = $('.sel_categories').select2("val");
                @this.set('selected_categories',data);
            });
        });
    </script>

@endpush
