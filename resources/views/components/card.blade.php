<div class="card">
    <img src="{{ $imagem }}" alt="{{ $titulo }}" class="card-img-top">
    <div class="card-body">
        <h2 class="card-title">{{ $titulo }}</h2>
        <p class="card-text">{{ $descricao }}</p>
    </div>
</div>

<style>
    .card {
        border: 1px solid #ddd;
        border-radius: 5px;
        margin: 10px;
        padding: 10px;
        max-width: 300px;
    }
    .card-img-top {
        max-width: 100%;
        height: auto;
        border-radius: 5px 5px 0 0;
    }
</style>
