<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Ons Menu</h1>

        <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-100 border-b">
                    <th class="px-6 py-3 text-left">ID</th>
                    <th class="px-6 py-3 text-left">Naam</th>
                    <th class="px-6 py-3 text-left">Beschrijving</th>
                    <th class="px-6 py-3 text-left">Type</th>
                    <th class="px-6 py-3 text-left">Prijs</th>
                    <th class="px-6 py-3 text-left">Afbeelding</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-3">{{ $product->id }}</td>
                    <td class="px-6 py-3">{{ $product->name }}</td>
                    <td class="px-6 py-3">{{ $product->description }}</td>
                    <td class="px-6 py-3">{{ $product->type }}</td>
                    <td class="px-6 py-3">€{{ number_format($product->price, 2) }}</td>
                    <td class="px-6 py-3">
                        @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-20 h-20 object-cover rounded">
                        @else
                        Geen afbeelding
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>