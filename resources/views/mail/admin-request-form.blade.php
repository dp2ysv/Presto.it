<x-layout>
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center wrapper">
            <div class="col-12 text-center">
                <h1 class="display-4">Vuoi diventare revisore?</h1>
            </div>
            
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-9 col-lg-6 min-vh-100 bg-white articleFormWrapper">
                
                
                <form method="post" action="{{route("user.submitadminrequest")}}">
                    @csrf
                    <div class="mb-3">
                        <div class="customFormLabel">Nome</div>
                        <input type="text" class="form-control" name="name">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <div class="customFormLabel">Email</div>
                        <input type="email" class="form-control" name="email">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <div class="customFormLabel">Parlaci di te</div>
                        <textarea name="description" rows="15" cols="123" class="form-control"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="mt-3">
                        <button type="submit" class="acceptButton">Invia</button>
                    </div>
                </form>
                
                
                
                
                
                
            </div>
        </div>
    </div>
</x-layout>
