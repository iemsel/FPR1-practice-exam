<x-main>
    <style>
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <br>
    <div class="is-flex is-justify-content-space-between">
        <div class="content">
            <h1>
                <strong>{{ $bar->name }}</strong>
            </h1>
            Waldo: {!! $bar->waldo !!}
            <br>
            Grault: {!!$bar->grault!!}
            <br>
            Ordan: {!!$bar->ordan!!}
            <br>
            Created at: {!!$bar->created_at!!}
        </div>
        <div>
            <a href="{{ route('bars.edit', $bar) }}" class="button is-primary">Edit</a>
            <button id="myBtn" class="button is-danger">Delete</button>
        </div>
    </div>

    <x-modal>
        <form id="delete-post" method="POST" action="{{ route('bars.destroy', $bar) }}">
            @csrf
            @method('DELETE')
            <p>Click "Confirm" to delete this bar.</p>
            <br>
            <strong>CAUTION!</strong> This action cannot be undone.
            <div class="modal-footer">
                <button type="submit" form="delete-post" class="button is-danger">Confirm</button>
                <button type="button" id="cancel-button" class="button is-light cancel">Cancel</button>
            </div>
        </form>
    </x-modal>
</x-main>
