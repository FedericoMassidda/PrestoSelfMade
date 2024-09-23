<div class="container">
    <h1 class="text-center mt-3">
        Pubblica il tuo articolo
    </h1>
    <div class="container mt-5 FormWrapper">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <form wire:submit="store">
            <div class="createArticleWrapper">
                <div class="mb-3 createInput">
                    <label for="ArticleTitle" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="ArticleTitle" aria-describedby="emailHelp" wire:model="title">
                </div>
                <div class="mb-3 createInput">
                    <label for="ArticlePrice" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="ArticlePrice" aria-describedby="emailHelp" wire:model="price">
                </div>
                <div class="createInput">
                    <label for="ArticleCategory">Categoria</label>
                    <select class="form-select mt-1 selectInput" id="ArticleCategory" aria-label="Default select example" wire:model="category_id">
                        <option selected>Scegli la categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="articleDescription" class="form-label">Descrizione</label>
                <textarea class="form-control" id="articleDescription" rows="3" wire:model="description"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-primary mt-3 px-4 py-2">Pubblica</button>
        </form>
    </div>
</div>
