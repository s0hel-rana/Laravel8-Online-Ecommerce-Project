<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add new Coupon
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-success pull-right" href="{{ route('admin.coupon') }}">All Coupon</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('message') }}
                                    </div>
                                @endif
                                <form class="form-horizontal" wire:submit.prevent="storeCoupon">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Coupon Code</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="coupon" aria-describedby="emailHelp" placeholder="Coupon Code"  wire:model='code'>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Coupon Type</label>
                                       <div class="col-md-4">
                                            <select class="form-control" wire:model="type" >
                                                <option value="">Select</option>
                                                <option value="fixed">Fixed</option>
                                                <option value="percent">Percent</option>
                                           </select>
                                       </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Coupon Value</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="value" aria-describedby="emailHelp" placeholder="Coupon Value" wire:model="value">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Cart Value</label>
                                       <div class="col-md-4">
                                        <input type="text" class="form-control" id="cart_value" aria-describedby="emailHelp" placeholder="Cart Value" wire:model="cart_value">
                                       </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Expiry Date</label>
                                       <div class="col-md-4" wire:ignore>
                                        <input type="text" class="form-control" id="expiry_date" aria-describedby="emailHelp" placeholder="Expiry_Date" wire:model="expiry_date">
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

        @push('scripts')
            <script>
                $(function(){
                   $('#expiry_date').datetimepicker({
                       format: 'Y-MM-DD'
                   })
                   .on('dp.change',function(ev){
                       var data = $('#expiry_date').val();
                       @this.set('expiry_date',data);
                   });
                });
            </script>
        @endpush

