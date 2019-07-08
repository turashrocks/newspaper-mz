<div class="navigation">
    <div class="menu-div">
        <ul>
            @foreach($categories as $key=>$category)
                @if($loop->first)
                    <li><a class="menu" href="/">{{$category->name}}</a></li>
                @endif
            @endforeach
            @foreach($categories as $key=> $category)
                @if($key>0)
                    <li><a class="menu" href="{{ route('news.category', $category->id) }}">{{ $category->name}}</a></li>
                @endif
            @endforeach
        </ul>
        <form class="form-inline" style="float:right; margin-top:5px; margin-right:-14px;" name="search" action="{{ route('search')}}" method="GET">
            <div class="form-group">
            <input type="text" name="query" class="form-control" style="border:none;" id="query" value="{{ request()->input('query') }}" placeholder="অনুসন্ধান">
            </div>
            <button type="submit" name="search" style="width:35px; height:35px; background:#333; float:right; border:none;"><span style="color:#fff;" class="glyphicon glyphicon-search"></span></button>
        </form>
    </div>
</div>

<div id="mm" class="morenavigation" style="display: none;">
        <div class="moremenu-div">
            <ul>
                @foreach($tags as $key=>$tag)
                    @if($loop->first)
                        <li><a class="menu" href="/">{{$tag->name}}</a></li>
                    @endif
                @endforeach
                @foreach($tags as $key=> $tag)
                    @if($key>0)
                        <li><a class="menu" href="{{ route('news.tag', $tag->id) }}">{{ $tag->name}}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>