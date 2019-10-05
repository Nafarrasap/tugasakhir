@extends('template')
@section('content')
    <section class="main-section">
      <div class="content">
        <h1>Tambah barang</h1>
        <hr>
        @if($errors->any())
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <li><strong>{{ $error }}</strong>
          @endforeach
        </div>
        @endif

        <form action="{{ route('barang.store') }}" method="post">
          {{ csrf_field() }}
          <div class="from-group">
            <label for="nama">Id:</label>
            <input type="text" class="form-control" id="usr" name="id">
          </div>
          <div class="from-group">
            <label for=kd_barang>kd_barang</label>
            <input type="text" class="form-control" id="kd_barang" name="kd_barang">
          </div>
          <div class="from-group">
            <label for="nama">nama_barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
          </div>
          <div class="from-group">
            <label for="nama">stok</label>
            <input type="text" class="form-control" id="stok" name="stok">
          </div>
          <div class="from-group">
            <label for="nama">harga</label>
            <textarea class="form-control" id="harga" name="harga"></textarea>
          </div>
          <div class="from-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
          </div>
        </form>
      </div>
    </section>
    @endsection
