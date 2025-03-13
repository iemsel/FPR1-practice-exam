<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2">Edit this bar</h1>
            </div>
        </div>
        <div class="box">
                <form action="{{ route('bars.update', $bar) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        Name:
                        <input type="text" name="name" value="{{ old('name', $bar) }}">
                        @error('name')<p>{{ $message }}</p>@enderror
                    </div>
                    <div>
                        Waldo:
                        <input type="text" name="waldo" value="{{ old('waldo', $bar) }}">
                        @error('waldo')<p>{{ $message }}</p>@enderror
                    </div>
                    <div>
                        Grault:
                        <input type="number" name="grault" value="{{ old('grault', $bar) }}">
                        @error('grault')<p>{{ $message }}</p>@enderror
                    </div>
                    <button type="submit" class="button is-primary"> Submit</button>
                    <a href="{{ url()->previous() }}" class="button is-light">Cancel</a>
                    <button type="reset" class="button is-warning">Reset</button>
                </form>
        </div>
    </div>
</x-main>
