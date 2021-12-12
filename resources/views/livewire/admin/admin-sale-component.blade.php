<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md 12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sale Setting
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="horizontal" wire:submit.prevent ="updateSale">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <label class="col-md-4 control-label">Status</label>
                                        <select class="form-control" wire:model="status">
                                            <option value="0">Inactive</option>
                                            <option value="1">Active</option>
                                        </select>
                                        <br>
                                    <label class="col-md-4 control-label">Sale Date</label><br>
                                    <input type="text" id="sale_date" placeholder="YYYY/MM/DD H:M:S" class="form-control input-md" wire:model="sale_date"><br>
                                    <button type="submit" class="btn btn-primary">Update</button>
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
        $(function(){
            $('#sale_date').datetimepicker({
                format : 'Y-MM-DD h:m:s',
            })
            .on('dp_change',function(ev){
                var data = $('#sale_date').val();
                @this.set('sale_date',data);
            });
        });
    </script>

@endpush
