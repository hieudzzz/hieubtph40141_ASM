
<aside class="col-md-3 p-3">
    <h2>Các Tin Mới Nhất</h2>
    <ul class="list-unstyled">
        @foreach ($tinMoiNhatThem as $tin)
            <li class="mb-2">

                <a href="{{ route('client.chitiet', $tin->id) }}" class="text-dark">
                    <img src="{{ asset('storage/images/' . $tin->image) }}" alt="{{ $tin->tieuDe }}" class="img-fluid" >

                    {{ $tin->tieuDe }}
                </a>
            </li>
        @endforeach
    </ul>
</aside>

