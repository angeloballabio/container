@if ($paginator->hasPages())
{{-- <ul class="flex justify-between"> --}}
<ul class="d-flex justify-content-start">
    <!-- prev -->
    @if ($paginator->onFirstPage())
    {{-- <li class="w-16 px-2 py-1 text-center rounded border bg-gray" style="list-style-type:none;">Prev</li> --}}
    <li class="w-20 px-2 py-1 text-center rounded border shadow bg-white cursor-pointer" style="list-style-type:none;"  {{-- wire:click="previousPage" --}} >@lang('pagination.previous')</li>
    @else
    <li class="w-20 px-2 py-1 text-center rounded border shadow bg-white cursor-pointer" style="list-style-type:none;"  wire:click="previousPage" >@lang('pagination.previous')</li>
    @endif
    <!-- prev end -->

    <!-- numbers -->
    @foreach ($elements as $element)
   {{--  <div class="flex"> --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="{{-- mx-2 --}} w-10 px-2 py-1 text-center rounded border shadow bg-blue-500 text-white cursor-pointer" style="list-style-type:none;" wire:click="gotoPage({{$page}})">{{$page}}</li>
        @else
        <li class="{{-- mx-2 --}} w-10 px-2 py-1 text-center rounded border shadow bg-white cursor-pointer" style="list-style-type:none;" wire:click="gotoPage({{$page}})">{{$page}}</li>
        @endif
        @endforeach
        @endif
   {{--  </div> --}}
    @endforeach
    <!-- end numbers -->


    <!-- next  -->
    @if ($paginator->hasMorePages())
    <li class="w-20 px-2 py-1 text-center rounded border shadow bg-white cursor-pointer" style="list-style-type:none;" wire:click="nextPage">@lang('pagination.next')</li>
    @else
    {{-- <li class="w-16 px-2 py-1 text-center rounded border bg-gray" style="list-style-type:none;">Next</li> --}}
    <li class="w-20 px-2 py-1 text-center rounded border shadow bg-white cursor-pointer" style="list-style-type:none;" {{-- wire:click="nextPage" --}}>@lang('pagination.next')</li>
    @endif
    <!-- next end -->
</ul>
@endif
