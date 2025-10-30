<footer class="site-footer">
    <p>© 2025 CRUD APP. All rights reserved.</p>
</footer>
@if (session('success'))
<script>
    alert("{{ session('success') }}");
</script>
@endif

@if (session('error'))
<script>
    alert("{{ session('error') }}");
</script>
@endif