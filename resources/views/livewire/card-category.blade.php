<div>
    <div class="row settings-row">
        @foreach($category as $ctg)
        <div class="col s6 ">
            <div class="setting-box z-depth-1 center ">
                <a href="/kategori/{{ $ctg->url_category }}">
                    <i class="mdi mdi-book-open-page-variant"></i>
                    <h6>{{ $ctg->nm_category}}</h6>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
