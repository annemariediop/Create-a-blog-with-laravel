@if ($paginator->hasPages())
    <ul class=" list-group list-group-horizontal-md list-group-horizontal-sm mb-3">

       @if ($paginator->onFirstPage())
           <li class="list-group-item disabled"><span class="page-link"><i class="fa-solid fa-backward"></i></span></li>
       @else
       <li class="list-group-item"><a class="page-link" href="{{$paginator->previousPageUrl()}}" rel="prev"><i class="fa-solid fa-backward"></i></a></li>
       @endif

        @foreach ($elements as $element)
            @if (is_string($element))
            <li class="list-group-item disabled"> <span class="page-link">{{$element}}</span></li>
                
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class=" list-group-item active"> <span class="page-link">{{$page}}</span></li>
                        
                    @else
                    <li class="list-group-item"> <a class="page-link" href="{{$url}}">{{$page}}</a></li>
                    @endif 
                @endforeach
                 
           
            @endif
            
        @endforeach

        @if ($paginator->hasMorePages())
     
        <li class="list-group-item"><a class="page-link" href="{{$paginator->nextPageUrl()}}" rel="next"><i class="fa-solid fa-forward"></i></a></li>
    @else
    <li class="list-group-item disabled"><span class="page-link"><i class="fa-solid fa-forward" ></i></span></li>
    @endif
    </ul>
    
@endif