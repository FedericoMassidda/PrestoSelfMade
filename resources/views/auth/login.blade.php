<x-layout>
    <h1 class="text-center mt-3">
        Accedi o registrati per caricare i tuoi annunci
    </h1>
    <div class="container mt-5 FormWrapper">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="loginEmail" class="form-label">Email</label>
                <input type="text" class="form-control" id="loginEmail" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
                <label for="loginPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="loginPassword" name="password">
            </div>
            <button type="submit" class="btn btn-outline-success mt-3 px-4 py-2">Login</button>
        </form>
    </div>
    <div class="container mt-4 d-flex align-items-center">
        <h4 class="me-4 align-self-end">Non sei ancora registrato?</h4>
        <a href="{{route('register')}}">
            <button type="button" class="btn btn-outline-primary mt-3 px-4 py-2">Registrati</button>
        </a>
    </div>
</x-layout>
