<div class="nav-first-section flex flex-row gap-2 ">
    <div class="icon-wrap p-3 w-auto h-auto ">
        <i class="bi bi-list  w-10 text-white "></i>

    </div>
    <div class="logo-wrap" class="w-auto h-auto">
       <a href="{{asset("/home")}}">
        <img class="w-[53px]"
        src="data:image/png;base64,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"
        alt="" srcset="">
       </a>

    </div>
    <div class="menu-category text-white pl-5">

       
        <ul class="flex flex-row gap-4 mt-3 " >
          @foreach ($categories as $ct)
              
            <li ><a class="text-white" href="{{asset('categories-new/'. $ct->id)}}">{{$ct->name}}</a></li>
            @endforeach
         

        </ul>
    </div>
</div>