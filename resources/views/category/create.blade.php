@include('adminheader')

<div class="conatiner">
    <div class="row">

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Add Category</strong>
                </div>
                <div class="card-body">
                  <!-- Credit Card -->
                  <div id="pay-invoice">
                      <div class="card-body">
                          
                          <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                             
                              <div class="form-group">
                                  <label for="cc-payment" class="control-label mb-1">Category name</label>
                                  <input id="cc-pament" name="category_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                             
                             <span class="text-danger">
                                @error('category_name')
                                    {{$message}}
                                @enderror
                             </span>
                                </div>
                              <div class="form-group has-success">
                                  <label for="cc-name" class="control-label mb-1">Category Pic</label>
                                  <input id="cc-name" name="category_pic" type="file" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                  <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                  <span>
                                    @error('category_pic')
                                        {{$message}}
                                    @enderror
                                 </span>
                                </div>
                              
                           
                              <div>
                                  <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                      Add</button>
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
