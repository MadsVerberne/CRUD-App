<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Product - CRUD App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body>

    @include('partials.header')

    <main class="management-container">
        <div class="management-header">
            <h1>Edit Product</h1>
            <a href="{{ route('management') }}" class="btn-cancel">Back to Management</a>
        </div>

        <!-- Success / Error messages -->
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
        <div class="alert alert-error">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="form-group">
            <label>Existing Images</label>
            <div class="existing-images">
                @foreach($product->images as $image)
                <div class="image-container">
                    <img src="{{ asset('storage/' . $image->path) }}" width="100">
                    <form action="{{ route('products.image.destroy', $image->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Weet je zeker dat je deze afbeelding wilt verwijderen?')">
                            Delete
                        </button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="images">Add New Images</label>
                <input type="file" name="images[]" id="images" multiple>
            </div>



            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $product->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" required>{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" value="{{ $product->price }}" step="0.01" required>
            </div>

            <div class="form-group">
                <label>Categories</label>
                <div class="checkbox-group">
                    @foreach($categories as $category)
                    <label>
                        <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                            {{ $product->categories->contains($category->id) ? 'checked' : '' }}>
                        {{ $category->name }}
                    </label>
                    @endforeach
                </div>
            </div>

            <button type="submit">Update Product</button>
        </form>
    </main>

    @include('partials.footer')

</body>

</html>