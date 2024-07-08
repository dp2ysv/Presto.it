<x-layout>
    <div class="container-fluid">
    <div class="d-flex justify-content-center align-items-center wrapper">
            <div class="col-12 text-center">
                <h1 class="display-4">Accedi</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-9 col-lg-6 min-vh-100 bg-white articleFormWrapper">
                <form method="post" action="{{route("login")}}">
                    @csrf
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
                    <button type="submit" class="submitBtn">Accedi</button>
                    <p class="mt-3">Non sei registrato? <a href="{{ route('register') }}">Registrati</a></p>
                </form>
            </div>
        </div>
    </div>

</x-layout>