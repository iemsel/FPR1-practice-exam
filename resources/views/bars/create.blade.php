<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2">Create a new bar</h1>
            </div>
        </div>
        <div class="box">
                <form action="{{ route('bars.store') }}" method="POST">
                    @csrf
                    <div>
                        Name:
                        <input type="text" name="name" value="{{ old('name') }}">
                        @error('name')<p>{{ $message }}</p>@enderror
                    </div>
                    <div>
                        Waldo:
                        <input type="text" name="waldo" value="{{ old('waldo') }}">
                        @error('waldo')<p>{{ $message }}</p>@enderror
                    </div>
                    <div>
                        Grault:
                        <input type="number" name="grault" value="{{ old('waldo') }}">
                        @error('grault')<p>{{ $message }}</p>@enderror
                    </div>
                    <button type="submit" class="button is-primary"> Submit</button>
                    <a href="{{ url()->previous() }}" class="button is-light">Cancel</a>
                    <button type="reset" class="button is-warning">Reset</button>
                </form>
        </div>
    </div>
</x-main>
