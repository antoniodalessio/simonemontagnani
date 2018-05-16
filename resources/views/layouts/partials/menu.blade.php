<div class="menu__container">
    <button class="close-icon">
        <span class="icon-chiudi"></span>
    </button>
    <nav>
      <ul>
      @foreach ($page->menu as $item)
        @if ($item->parent_id == 0)
        <li @if ($item->page_id == $page->page_id) class="active" @endif>
          <a href="{{$item->uri}}">{{$item->title}}</a>
          @if (count($item->children) > 0)
            <ul class="submenu">
            @foreach ($item->children as $subitem)
              <li @if ($subitem->page_id == $page->page_id) class="active" @endif><a href="{{$subitem->uri}}">{{$subitem->title}}</a></li>
            @endforeach
            </ul>
          @endif
        </li>
        @endif
      @endforeach
      </ul>
    </nav>
</div>