@extends('admin.layouts.master')

@section('page')
    Add Products
@endsection

@section('content')
<div class="row">
                    <div class="col-lg-10 col-md-10">
                        @include('admin.layouts.message')
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Product</h4>
                            </div>
                                


                            <div class="content">
                                {!! Form::open(['url' => 'admin/products','files'=>'true']) !!}
                                    <div class="row">
                                        <div class="col-md-12">
                                           
                                           @include('admin.products.addfield')
                                            

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info btn-fill btn-wd">Add Product</button>
                                            </div>

                                        </div>

                                    </div>
                                {!! Form::close() !!}
                                    
                                  <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>
@endsection