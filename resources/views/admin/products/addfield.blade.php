<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}" id="name">
        {{ Form::label('product_name', 'Product Name') }}
        {{ Form::text('name','',['class' => 'form-control border-input','placeholder'=>'Macbook'])}}
        <span class="text-danger">{{$errors->has('name')? $errors->first('name') : '' }} </span>                                    
    </div>

    <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
        {{ Form::label('product_price','Product Price') }}
        {{ Form::text('price','',['class' => 'form-control border-input','placeholder'=>'$2500'])}}
        <span class="text-danger">{{$errors->has('price')? $errors->first('price') : '' }} </span>                                      
    </div>

    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
        {{ Form::label('Descrition','Product Description') }}
        {{ Form::textarea('description','',['class' => 'form-control border-input'])}}
        <span class="text-danger">{{$errors->has('description')? $errors->first('description') : '' }} </span>                                        
    </div>

    <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
        <label>Product Image:</label>
        <input type="file" class="form-control border-input" name="image" id="image" >
        <div id="thumb-output"></div>
        <span class="text-danger">{{$errors->has('image')? $errors->first('image') : '' }} </span>
    </div>