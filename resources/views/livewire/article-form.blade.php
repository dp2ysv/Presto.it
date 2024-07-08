<div>

    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <div class="mb-3">
            <div class="customFormLabel textRed">{{__('ui.UploadImages')}}:</div>
            <input type="file" class="form-control" wire:model="temporary_images" multiple
            @if (count($images) >= 6)
            disabled
            @endif
            >
        </div>
        <div class="mb-3">
        @error('temporary_images.*')<span class="text-danger"><small>{{ $message }}</small></span> @enderror
        @error('temporary_images')<span class="text-danger">{{ $message }}</span> @enderror
        @if (!empty($images))
            <div class="row">
                <div class="col-12">
                <div class="customFormLabel textRed">{{__('ui.PreviewImages')}} ({{count($images)}}/6):</div>
                    <div class="d-flex flex-row justify-content-center">
                        @foreach ($images as $key => $image)
                            <div class="d-flex flex-column flex-wrap align-items-center my-3 mx-1">
                                <div class="createImgWrapper"><img src="{{$image->temporaryUrl()}}" alt="" class="img-preview"></div>
                                <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{$key}})"><i class="fa-solid fa-x" style="color: #ffffff;"></i></button>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        </div>

        <div class="mb-3">
            <div class="customFormLabel textRed">{{__('ui.Title')}}:</div>
            <input type="text" class="form-control" wire:model="title">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <div class="customFormLabel textRed">{{__('ui.Price')}}:</div>
            <input type="number" class="form-control" wire:model="price">
            @error('price') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <div class="customFormLabel textRed">{{__('ui.Description')}}:</div>
            <textarea wire:model="description" rows="15" cols="123" class="form-control"></textarea>
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="customFormLabel textRed">{{__('ui.Category')}}:</div>
        <select class="form-control" wire:model="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @if($category->id == 1) selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
        <div class="mt-3">
            <button type="submit" class="submitBtn">{{__('ui.Send')}}</button>
        </div>  
    </form>

    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
</div>