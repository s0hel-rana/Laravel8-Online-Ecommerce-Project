<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Manage Home Categories
                    </div>
                    <div class="panel-body">
                        <form class="horizontal-group">

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <label class="col-md-4 control-label">Choose Categories</label>

                                    <select class="sel_categories form-control" name="categories[]" multiple="multiple">
                                        @foreach ($categories as $category )
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <label class="col-md-4 control-label">No Of Products</label><br>
                                    <input type="text" class="form-control input-md"><br>
                                    <button type="submit" class="btn btn-primary">Save</button>
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
        });
    </script>

@endpush
