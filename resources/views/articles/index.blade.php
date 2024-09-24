<x-layout>
    <x-categories/>
    <h1 class="text-success">Ciao Mondo</h1>
    <div class="container mt-5">
        <div class="row">
            @foreach ($articles as $article)
                <x-card :article="$article"/>
            @endforeach
        </div>
    </div>
</x-layout>