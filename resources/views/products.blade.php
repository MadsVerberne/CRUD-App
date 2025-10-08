<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CRUD App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- Header -->
    <header class="site-header">
        <div class="logo">
            <svg class="logo-icon" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M42.4379 44C42.4379 44 36.0744 33.9038 41.1692 24C46.8624 12.9336 42.2078 4 42.2078 4L7.01134 4C7.01134 4 11.6577 12.932 5.96912 23.9969C0.876273 33.9029 7.27094 44 7.27094 44L42.4379 44Z" fill="currentColor"></path>
            </svg>
            <h2 class="logo-text">CRUD APP</h2>
        </div>

        <nav class="site-nav">
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
            <a href="{{ route('welcome') }}">Home</a>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('login') }}">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
            @endif
        </nav>

        <button class="btn-primary">Bestel nu</button>
    </header>

    <!-- Main -->
    <main class="menu-container">
        <section class="menu-header">
            <h1>Our Menu</h1>
            <div class="menu-filters">
                <button>Appetizers</button>
                <button>Main Courses</button>
                <button>Desserts</button>
            </div>
        </section>

        <section class="menu-table-section">
            <table class="menu-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Crispy Calamari</td>
                        <td>Tender calamari rings, lightly battered and fried. Served with marinara sauce.</td>
                        <td><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8mbgpktldPcQso2VfCEVb1Lwi3wNlnRM5KjbLS7TzJOdUHbnIhWihlrIKrfLE9jYUlgCAtVtv6S510mKgsfd-DusEoKBR5Fm17rXoze6YjkgYfRGA1dftOS_jA_Iyt63NI92U6Je_6t2fs_qOicUWbmnsKr_2wDQ2zogzkNruXq6FDx9YOP5Z7UMorKnQFjiAEhums_AhcUC1W5yPXil-CK_MudpsNJ5kUe5RjCuvyrtRHkVlxHGLK9JrElepsvc3FyVDs2rJbho" alt="Crispy Calamari"></td>
                        <td>$12.99</td>
                        <td><span class="tag appetizer">Appetizer</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Grilled Salmon</td>
                        <td>Fresh Atlantic salmon, seasoned and grilled. Served with asparagus.</td>
                        <td><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCsRQ44_ZOeVV36jtZi9NBlaZiP1I6HNpaNQ4TAmcoh1JkttnyYX-8drNZisxgEXnkrcEAQoVPq6v4HTWWBOySx2h8etsn5mh_Z9wHN04NaOV0N1gfTwB75UAZsz-cu6Nm1N3l_hCRdTt9cu46uMihUELoHDltrGumz-t45TV5gvrFjxCVa7RQJUIreTZFdjTiIQ3STwioBOa0m0rENjm23Fpf4In4lU7fo0iGmJEl7ieFiBh80Rb5v0hJd88CLhw50bT3OqxWOk4" alt="Grilled Salmon"></td>
                        <td>$24.50</td>
                        <td><span class="tag main-course">Main Course</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Chocolate Lava Cake</td>
                        <td>Rich chocolate cake with a molten center, served with vanilla ice cream.</td>
                        <td><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcfBR8d3BHWtIwAVeLUTwnK34k_MJoONVQ6wr7Hox_MT3LOofHnxcEnd_fRqby60LrnzgLMNC4JoO_vwy3oKhdmUjNHCjHprHoqsjqSLsiwUsWAWErJZ7BZka5iMmmx0vDzPoZMaso3L3hIUmeqCd86MNQQ-dLZ6ygh_PS374XRJW4k6ggIcAfneZIEf_FIUovTkzY58FN87rnzppTMI8mQb7VontMtiiBfdRHst0TG8k7PRQ_5tSc_1J9ZVBjNOYsf1vbqMpBUkU" alt="Chocolate Lava Cake"></td>
                        <td>$9.75</td>
                        <td><span class="tag dessert">Dessert</span></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>


    <!-- Footer -->
    <footer class="site-footer">
        <p>© 2024 CRUD APP. All rights reserved.</p>
    </footer>

</body>

</html>