<div style="text-align:center;height:500px">
  <p>Content is {{$content}}</p>
  <hr style="width:200px"/>
  <div id="example"></div>
  {{-- @if($content == 'Product')
  {!! Form::open(array('route'=>array('product.add'), 'method'=>'post')) !!}
    <div class="form-group">
       {!! Form::label('name', 'Name:',['class'=>'control-label']) !!}
       {!! Form::text('name', '', array('id' => 'name','class'=>'form-control','name'=>'name')) !!}<br/>

       {!! Form::label('stok', 'Stok:',['class'=>'control-label']) !!}
       {!! Form::text('stok', '', array('id' => 'name','class'=>'form-control','name'=>'stok')) !!}<br/>

       {!! Form::label('harga', 'Harga:',['class'=>'control-label']) !!}
       {!! Form::text('harga', '', array('id' => 'name','class'=>'form-control','name'=>'harga')) !!}
    </div>
    <button type="submit" class="btn btn-block btn-success">Save</button>
{!! Form::close() !!}
@endif
  @if ($data && (gettype($data) == 'array' || gettype($data) == 'object'))
    @foreach ($data as $dat)
      <p>Name : {{ $dat->name }}</p>
      <p>Stok : {{ $dat->stock }}</p>
      <p>Harga : {{ $dat->harga }}</p>
      <hr style="width:200px"/>
    @endforeach
  @else
    <p>{{$data}}</p>
  @endif --}}
  </div>
  <script src="{{asset('./js/app.js')}}"></script>