<div>

    <div class="card shadow bg-danger border border-light w-50 mt-5 mx-auto">
        <div class="card-header">
            <h5 class="text-white text-center mt-2">Delete Post?</h5>
        </div>
        <div class="card-body">
            <h6 class="text-center text-white">Are you sure you want to delete this post?</h6>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center">
                <button class="btn" style="background-color:rgb(109, 199, 240);" wire:click="delete()">
                    Yes
                </button>
                <button class="btn btn-secondary mx-2" wire:click="back()">
                    No
                </button>
            </div>
        </div>
    </div>

</div>

