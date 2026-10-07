@include('adminheader')

<div class="conatiner">
    <div class="row">

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Update Category</strong>
                </div>
                <div class="card-body">
                    <!-- Credit Card -->
                    <div id="pay-invoice">
                        <div class="card-body">

                            <form action="{{ route('category.update', $category->_id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Category name</label>
                                    <input id="cc-pament" value="{{ $category->cat_name }}" name="category_name"type="text" class="form-control" aria-required="true" aria-invalid="false">

                                    <span class="text-danger">
                                        @error('cat_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Category Pic</label>
                                    <input id="cc-name" name="cat_pic" type="file"
                                        class="form-control cc-name valid" data-val="true"
                                        data-val-required="Please enter the name on card" autocomplete="cc-name"
                                        aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                        data-valmsg-replace="true"></span>
                                    <span>
                                        @error('cat_pic')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>


                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div> <!-- .card -->

        </div><!--/.col-->



    </div>
</div>
@include('adminfooter')
