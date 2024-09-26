<x-layout>
    <x-categories/>
    <h1 class="text-success">Ciao Mondo</h1>
    <div class="container mt-5">
        <div class="row">
            @forelse ($articles as $article)
                <x-card :article="$article"/>
            @empty
                <div class="col-12">
                    <h2 class="text-center">
                        Non è ancora presente nessun annuncio in vendita
                    </h2>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{$articles->links()}}
        </div>
    </div>
</x-layout>