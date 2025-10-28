<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - CRUD App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- Header / Nav -->
    @include('partials.header')

    <!-- Main -->
    <main class="management-container">
        <div class="management-header">
            <h1>Product Management</h1>
            <a href="{{ route('addproduct') }}" class="btn-primary">
                <span class="icon">+</span> New Product
            </a>

        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="id">1</td>
                        <td><img src="https://images.unsplash.com/photo-1604908177523-894c621e2f22?crop=entropy&cs=tinysrgb&fit=crop&h=60&w=60" alt="Caesar Salad"></td>
                        <td>Caesar Salad</td>
                        <td>Fresh romaine lettuce with croutons and Parmesan cheese.</td>
                        <td>€12.50</td>
                        <td><span class="badge Starter">Starter</span></td>
                        <td>
                            <div>
                                <a href="{{ route('editproduct', ['id' => 1]) }}" class="btn-edit">
                                    <span class="material-symbols-outlined">edit</span>
                                </a>
                                <button class="btn-delete"><span class="material-symbols-outlined">delete</span></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="id">2</td>
                        <td><img src="https://images.unsplash.com/photo-1603133872879-3f7b98786f16?crop=entropy&cs=tinysrgb&fit=crop&h=60&w=60" alt="Spaghetti Carbonara"></td>
                        <td>Spaghetti Carbonara</td>
                        <td>Spaghetti with bacon, egg, and Parmesan cheese.</td>
                        <td>€16.00</td>
                        <td><span class="badge Main">Main</span></td>
                        <td>
                            <div>
                                <a href="{{ route('editproduct', ['id' => 1]) }}" class="btn-edit">
                                    <span class="material-symbols-outlined">edit</span>
                                </a>
                                <button class="btn-delete"><span class="material-symbols-outlined">delete</span></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="id">3</td>
                        <td><img src="https://images.unsplash.com/photo-1627308595229-7830a5c91f9f?crop=entropy&cs=tinysrgb&fit=crop&h=60&w=60" alt="Tiramisu"></td>
                        <td>Tiramisu</td>
                        <td>Italian dessert with coffee, mascarpone, and cocoa.</td>
                        <td>€8.00</td>
                        <td><span class="badge Dessert">Dessert</span></td>
                        <td>
                            <div>
                                <a href="{{ route('editproduct', ['id' => 1]) }}" class="btn-edit">
                                    <span class="material-symbols-outlined">edit</span>
                                </a>
                                <button class="btn-delete"><span class="material-symbols-outlined">delete</span></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="id">4</td>
                        <td><img src="https://images.unsplash.com/photo-1617196037818-6044b3a0e3f1?crop=entropy&cs=tinysrgb&fit=crop&h=60&w=60" alt="Grilled Salmon"></td>
                        <td>Grilled Salmon</td>
                        <td>Salmon fillet grilled with lemon and herbs.</td>
                        <td>€22.00</td>
                        <td><span class="badge Main">Main</span></td>
                        <td>
                            <div>
                                <a href="{{ route('editproduct', ['id' => 1]) }}" class="btn-edit">
                                    <span class="material-symbols-outlined">edit</span>
                                </a>
                                <button class="btn-delete"><span class="material-symbols-outlined">delete</span></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="id">5</td>
                        <td><img src="https://images.unsplash.com/photo-1601924582975-c7f91a3f99b5?crop=entropy&cs=tinysrgb&fit=crop&h=60&w=60" alt="Tomato Soup"></td>
                        <td>Tomato Soup</td>
                        <td>Homemade tomato soup with fresh basil.</td>
                        <td>€7.50</td>
                        <td><span class="badge Starter">Starter</span></td>
                        <td>
                            <div>
                                <a href="{{ route('editproduct', ['id' => 1]) }}" class="btn-edit">
                                    <span class="material-symbols-outlined">edit</span>
                                </a>
                                <button class="btn-delete"><span class="material-symbols-outlined">delete</span></button>
                            </div>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Footer -->
    @include('partials.footer')

</body>

</html>