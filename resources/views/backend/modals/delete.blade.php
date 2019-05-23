<div id="deletemodal" class="modal-bg hidden fixed top-0 left-0 right-0 bottom-0 w-full h-full overflow-auto z-50">
    <div class="bg-red-600 relative p-8 max-w-xs mx-auto my-10 sm:my-32 shadow-lg rounded">
        <div id="deletemodelclose" class="absolute top-0 right-0 m-3 text-white cursor-pointer">
            <svg class="w-6 h-6 stroke-current" aria-hidden="true" focusable="false" data-prefix="far" data-icon="times-circle" class="svg-inline--fa fa-times-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm101.8-262.2L295.6 256l62.2 62.2c4.7 4.7 4.7 12.3 0 17l-22.6 22.6c-4.7 4.7-12.3 4.7-17 0L256 295.6l-62.2 62.2c-4.7 4.7-12.3 4.7-17 0l-22.6-22.6c-4.7-4.7-4.7-12.3 0-17l62.2-62.2-62.2-62.2c-4.7-4.7-4.7-12.3 0-17l22.6-22.6c4.7-4.7 12.3-4.7 17 0l62.2 62.2 62.2-62.2c4.7-4.7 12.3-4.7 17 0l22.6 22.6c4.7 4.7 4.7 12.3 0 17z"></path></svg>
        </div>
        <div class="mt-2">
            <form action="" method="POST" class="remove-record text-center">
                @csrf
                @method('DELETE')
                <div class="md:flex md:items-center mb-6">
                    <h3 class="text-xl text-white font-bold">Are you sure you want to delete {{ $name ?? '' }}?</h3>
                </div>
                <div class="md:flex md:items-center">
                    <button class="mx-auto uppercase text-sm shadow bg-red-800 hover:bg-red-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-8 rounded" type="submit">
                        Delete
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>