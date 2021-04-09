@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Product</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Product</label>
                    <input type="text" 
                            name="name" 
                            value="{{ old('name') }}" 
                            class="form-control @error('name') is-invalid @enderror" />
                    @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="type" class="form-control-label">Tipe Product</label>
                    <input type="text" 
                            name="type" 
                            value="{{ old('type') }}" 
                            class="form-control @error('type') is-invalid @enderror" />
                    @error('type') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="description" class="form-control-label">Deskripsi Product</label>
                    <br>
                    <textarea cols="142" rows="4" name="description"
                            class="ckeditor from-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                    @error('description') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="price" class="form-control-label">Harga Product</label>
                    <input type="number" 
                            name="price" 
                            value="{{ old('price') }}" 
                            class="form-control @error('price') is-invalid @enderror" />
                    @error('price') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="quantity" class="form-control-label">Kualitas Product</label>
                    <input type="number" 
                            name="quantity" 
                            value="{{ old('quantity') }}" 
                            class="form-control @error('quantity') is-invalid @enderror" />
                    @error('quantity') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="from-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Tambah Product
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection