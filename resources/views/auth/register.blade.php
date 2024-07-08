<x-layout>
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center wrapper">
            <div class="col-12 text-center">
                <h1 class="display-4">Registrati</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-9 col-lg-6 min-vh-100 bg-white articleFormWrapper">
                <form method="post" action="{{route("register")}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome e cognome</label>
                        <input type="text" class="form-control" name="name">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Password</label>
                        <input type="password" class="form-control" name="password">
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>


                    <button type="submit" class="submitBtn">Registrati</button>
                    <p class="mt-3">Sei registrato? <a href="{{ route('login') }}">Accedi</a></p>
                </form>
            </div>
        </div>
    </div>

</x-layout>