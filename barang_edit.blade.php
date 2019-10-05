@extends('template')
@section('content')
  <section class="main-section">
    <div class="content">
      <h1>Ubah barang</h1>
      <hr>
      @if($errors->any())
      <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <li><strong>{{ $error }}</strong>
          @endforeach
        </div>
      @endif

      @foreach($data as $datas)
      <form action="{{ route('barang.update',$datas->id)}}"method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="from-group">
          <label for="id">Id:</label>
          <input type="text" class="form-control" id="id" name="id" value="{{ $datas->id}}">
        </div>
        <div class="from-group">
          <label for="nama">kd_barang:</label>
          <input type="text" class="form-control" id="kd_barang" name="kd_barang" value="{{ $datas->kd_barang }}">
        </div>
        <div class="from-group">
          <label for="nama">nama_barang::</label>
          <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $datas->nama_barang}}">
        </div>
        <div class="from-group">
          <label for="nama">stok:</label>
          <input type="text" class="form-control" id="stok" name="stok" value="{{ $datas->stok}}">
        </div>
        <div class="from-group">
          <label for="nama">harga:</label>
          <input type="text" class="form-control" id="harga" name="harga" value="{{ $datas->harga}}">
        </div>
        <div class="from-group">
          <button type="submit" class="btn btn-md btn-primary">Submit</button>
          <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
      </form>
      @endforeach
    </div>
  </section>
  @endsection
