<div class="nav-second-section ">
    <div class="menu-category text-white pl-5">
        <ul class="flex flex-row gap-6 mt-2">
            <li><a href="">Watch
                </a></li>
            <li><a href="">Listen
                </a></li>
            <li><a href="">Live TV</a></li>
            <div class="search-wrapper  w-auto h-auto ">
                <form action="{{ route('filter-new') }}" class="flex flex-row gap-1" method="get">
                    <input type="text" class="form-control h-[30px]" name="search">
                    <button class="" type="submit">
                        <i class="bi bi-search text-white"></i>
                    </button>
                </form>

            </div>
            <div class="user-form">
                <form action="">
                    <button class=" mt-[-15px] p-2 border-1 hover:bg-white hover:text-black ">
                        Sign In </button>
                </form>
            </div>
        </ul>
    </div>



</div>
