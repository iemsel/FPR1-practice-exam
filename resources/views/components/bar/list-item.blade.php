<article class="media {{ $bar->grault >= 3.1415927 ? 'has-background-success-light' : '' }}">
    <div class="media-content">
        <div class="content">
            <a class="is-size-5" href="{{ route('bars.show', $bar) }}">
                {{ $bar->name }}
            </a>
            <br>
            User: {{ $bar->user->name }}
            <br>
            Waldo: {!! $bar->waldo !!}
            <br>
            Grault: {!!$bar->grault!!}
            <br>
            Ordan: {!!$bar->ordan!!}
            <br>
            Created at: {!!$bar->created_at!!}
        </div>
    </div>
</article>
