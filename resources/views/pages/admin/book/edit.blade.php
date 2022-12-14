@extends('layouts.panel')

@section('title', 'Memperbarui Buku')

@section('content')
<div class="container-xxl">
  <div class="hk-pg-body">
  	<div class="hk-pg-header mb-3">
      <h1 class="pg-title">Memperbarui Buku</h1>
    </div>
    <a href="{{ url('admin/book') }}" class="btn btn-sm btn-outline-success mb-4">Kembali</a>

    <div class="row edit-profile-wrap">
      <div class="col-lg-10 col-sm-9 col-10">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab_block_1">

            <form action="{{ url('admin/book/edit') }}/{{ $book->id_book }}" method="POST" enctype="multipart/form-data">@csrf
              <div class="row gx-3">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label">Preview</label>
                    <a href="{{ url('sinpus/assets/images/book/'.$book->picture_book) }}" data-fancybox>
                      <img src="{{ url('sinpus/assets/images/book/'.$book->picture_book) }}" class="img-fluid rounded" width="150">
                    </a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label">Foto Buku</label>
                    <input class="form-control" type="file" name="picture_book" />
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label class="form-label">Judul Buku</label>
                    <input class="form-control" type="text" name="nm_book" value="{{ $book->nm_book }}">
                    @error('nm_book')<p class="text-danger">{{ $message }}</p>@enderror
                  </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Kategori</label>
                        <select class="form-select" name="category">
                            <option value="{{ $book->id_category }}">{{ $book->nm_category}}</option>
                            <div>
                            @foreach($category as $ctg)
                            <option value="{{ $ctg->id_category }}">{{ $ctg->nm_category }}</option>
                            @endforeach
                            </div>
                        </select>
                        @error('kategori')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label">Author</label>
                    <input class="form-control" type="text" name="author_book" value="{{ $book->author_book }}">
                    @error('author_book')<p class="text-danger">{{ $message }}</p>@enderror
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label class="form-label">Deskripsi</label>
                    <textarea id="classic" name="description">{{ $book->description }}</textarea>
                    @error('description')<p class="text-danger">{{ $message }}</p>@enderror
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-success mt-5">Edit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<!-- Load TinyMce -->
<script src="/panel/vendors/tinymce/tinymce.min.js"></script>
<script>
  tinymce.init({
  selector: 'textarea#classic',
  plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
  imagetools_cors_hosts: ['picsum.photos'],
  menubar: 'file edit view insert format tools table help',
  toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
  toolbar_sticky: true,
  autosave_ask_before_unload: true,
  autosave_interval: '30s',
  autosave_prefix: '{path}{query}-{id}-',
  autosave_restore_when_empty: false,
  autosave_retention: '2m',
  image_advtab: true,
  link_list: [
    { title: 'My page 1', value: 'http://www.tinymce.com' },
    { title: 'My page 2', value: 'http://www.moxiecode.com' }
  ],
  image_list: [
    { title: 'My page 1', value: 'http://www.tinymce.com' },
    { title: 'My page 2', value: 'http://www.moxiecode.com' }
  ],
  image_class_list: [
    { title: 'None', value: '' },
    { title: 'Some class', value: 'class-name' }
  ],
  importcss_append: true,
  file_picker_callback: function (callback, value, meta) {
    /* Provide file and text for the link dialog */
    if (meta.filetype === 'file') {
    callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
    }

    /* Provide image and alt text for the image dialog */
    if (meta.filetype === 'image') {
    callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
    }

    /* Provide alternative source and posted for the media dialog */
    if (meta.filetype === 'media') {
    callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
    }
  },
  templates: [
    { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
    { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
    { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
  ],
  template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
  template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
  height: 400,
  image_caption: true,
  quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
  noneditable_noneditable_class: 'mceNonEditable',
  toolbar_mode: 'sliding',
  contextmenu: 'link image imagetools table',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
   });
</script>
@endpush
