<div class="alert {{ $tipo }} p-4 mb-4 rounded">
    {{ $slot }}
</div>

<style>
    .alert.success {
        background-color: #d4edda;
        color: #155724;
    }
    .alert.error {
        background-color: #f8d7da;
        color: #721c24;
    }
</style>
