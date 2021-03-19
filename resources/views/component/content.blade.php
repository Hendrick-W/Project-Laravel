<div style="text-align:center;height:500px">
  <p>Content is {{$content}}</p>
  <hr style="width:200px"/>
  @if (count($data) > 0)
      @foreach ($data as $dat)
          <p>Name : {{ $dat->name }}</p>
          <p>Stok : {{ $dat->stock }}</p>
          <p>Harga : {{ $dat->harga }}</p>
          <hr style="width:200px"/>
      @endforeach
  @endif
  </div>