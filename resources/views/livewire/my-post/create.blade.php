<div>
    <h1 class="text-white text-center offset-1">Create Post</h1>
    <div class="card offset-4 mt-5" id="post-create">

    @if (session('message'))
        <div class="alert alert-success mt-2 text-center">{{ session('message') }}</div>
    @endif
        <div class="card-header" style="background-color:rgb(109, 199, 240);">
            <h5 class="text-center mt-3">Select Category</h5>
            <select name="category" id="select-cat" class="text-center" wire:model.defer="category">
                <option hidden="true">Category</option>
                <option selected disabled>Category</option>
                <option value="others">Others</option>
                <option value="drama">Drama</option>
                <option value="action">Action</option>
                <option value="sweet">Sweet</option>
                <option value="comedy">Comedy</option>
                <option value="horror">Horror</option>
                <option value="love Story">Love Story</option>
                <option value="sad Story">Sad Story</option>
                <option value="sports">Sports</option>
                <option value="school">School</option>
            </select>
                @error('category')
                    <p class="text-danger text-center">{{ $message }}</p>
                @enderror
        </div>
        <div class="card-body">
            <textarea class="form-control" name="remarks" id="" cols="58" rows="5" wire:model.defer="remarks"></textarea>
        </div>

            @error('remarks')
                <p class="text-danger text-center">{{ $message }}</p>
            @enderror
        <button class="btn" style="background-color:rgb(109, 199, 240);" wire:click="addPost()">Post</button>
    </div>
</div>


<style>
    #post-create {
        width: 460px;
    }
    #select-cat {
        width: 120px;
        margin-left: 39%;
    }
</style>
