<div>
    <div class="row settings-row ">
        @foreach($books as $book)
        @if($book->url_category == $category->url_category)
        <div class="col s6 ">
            <div class="setting-box">
                <div class="card">
                    <a href="/buku/{{ $book->url_book }}">
                    <div class="card-image">
                        <img src="/sinpus/assets/images/book/{{ $book->picture_book }}">
                    </div>
                    <div class="card-content">
                        <p>{{ $book->nm_book }}</p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
