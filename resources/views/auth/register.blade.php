<x-layout>
    <h1 class="text-center mt-3">
        Registrati per poter caricare i tuoi annunci
    </h1>
    <div class="container mt-5 FormWrapper">
        <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="regName" class="form-label">Nome</label>
                <input type="text" class="form-control" id="regName" aria-describedby="emailHelp" name="name">
            </div>
            <div class="mb-3">
                <label for="regEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="regEmail" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
                <label for="regPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="regPassword" aria-describedby="emailHelp" name="password">
            </div>
            <div class="mb-3">
                <label for="regPasswordConfirm" class="form-label">Conferma password</label>
                <input type="password" class="form-control" id="regPasswordConfirm" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-outline-primary mt-3 px-4 py-2">Registrati</button>
        </form>
    </div>
</x-layout>
