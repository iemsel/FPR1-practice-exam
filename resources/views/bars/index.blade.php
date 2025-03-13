<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2">All the bars</h1>
            </div>
            <div class="column">
                <a href="{{ route('bars.create') }}" class="button is-primary is-pulled-right">
                    Add bars
                </a>
            </div>
        </div>

        <!-- Show session flash message if available -->
        @if(session('success'))
            <div class="notification is-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Loop through bars and display each one -->
        @foreach($bars as $bar)
            <x-bar.list-item :bar="$bar"></x-bar.list-item>
        @endforeach

        <!-- Pagination links -->
        {{ $bars->links() }}
    </div>
</x-main>
