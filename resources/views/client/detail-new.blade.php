@extends('client.layout.master')
@section('content')
    @if (!$newDetails)
        <span class="text-danger"> Something went wrong </span>
    @else
        <div class="container ml-10">
            <div class="new-category-wrapper mb-4 ">
                <div class="new-category-type text-black">
                    <h4 class="">World / Asia</h4>
                </div>
            </div>
            <div class="new-title ">
                <div class="w-[70%] pr-10">
                    <h1 class="text-5xl text-black">{{ $newDetails->title }}</h1>
                </div>
            </div>

            <div class="new-content-wrapper ">

                <div class="content-wrapper grid grid-cols-3 gap-2 mt-5">
                    <div class="main-content col-span-2 ">
                        <div class="img-wrapper">
                            <img class=" "
                                src="https://media.cnn.com/api/v1/images/stellar/prod/ananda-palace-and-valley.jpg?c=16x9&q=h_653,w_1160,c_fill/f_webp"
                                alt="" srcset="">
                        </div>

                        <div class="graph-content px-5 font-normal">

                            {{ $newDetails->content }}




                        </div>


                        <div class="most-readed-news-section px-5">
                            <div class="news-title">
                                <div class="w-10 bg-[#f70a26] h-2 mb-4"></div>
                                <h1 class="text-xl"> Most readed</h1>
                            </div>
                            <div class="news-wrapper grid grid-cols-2 gap-3">
                                <div class="first-section ">
                                    <div class="title flex flex-row p-3 border-b-[0.2px] border-black">

                                        <h1 class="mt-2 text-2xl font-bold text-[#f70a26]">1 </h1>


                                        <p class=" pl-3">
                                            President Joe Biden tests positive for Covid-19 at pivotal moment in reelection
                                            campaign
                                        </p>

                                    </div>
                                    <div class="title flex flex-row p-3 border-b-[0.2px] border-black">

                                        <h1 class="mt-2 text-2xl font-bold text-[#f70a26]">1 </h1>


                                        <p class=" pl-3">
                                            President Joe Biden tests positive for Covid-19 at pivotal moment in reelection
                                            campaign
                                        </p>

                                    </div>
                                    <div class="title flex flex-row p-3 border-b-[0.2px] border-black">

                                        <h1 class="mt-2 text-2xl font-bold text-[#f70a26]">1 </h1>


                                        <p class=" pl-3">
                                            President Joe Biden tests positive for Covid-19 at pivotal moment in reelection
                                            campaign
                                        </p>

                                    </div>
                                    <div class="title flex flex-row p-3 border-b-[0.2px] border-black">

                                        <h1 class="mt-2 text-2xl font-bold text-[#f70a26]">1 </h1>


                                        <p class=" pl-3">
                                            President Joe Biden tests positive for Covid-19 at pivotal moment in reelection
                                            campaign
                                        </p>

                                    </div>
                                </div>
                                <div class="second-section">
                                    <div class="title flex flex-row p-3  border-b-[0.2px] border-black">

                                        <h1 class="mt-2 text-2xl font-bold text-[#f70a26]">1 </h1>


                                        <p class=" pl-3">
                                            President Joe Biden tests positive for Covid-19 at pivotal moment in reelection
                                            campaign
                                        </p>

                                    </div>
                                    <div class="title flex flex-row p-3  border-b-[0.2px] border-black">

                                        <h1 class="mt-2 text-2xl font-bold text-[#f70a26]">1 </h1>


                                        <p class=" pl-3">
                                            President Joe Biden tests positive for Covid-19 at pivotal moment in reelection
                                            campaign
                                        </p>

                                    </div>
                                    <div class="title flex flex-row p-3  border-b-[0.2px] border-black">

                                        <h1 class="mt-2 text-2xl font-bold text-[#f70a26]">1 </h1>


                                        <p class=" pl-3">
                                            President Joe Biden tests positive for Covid-19 at pivotal moment in reelection
                                            campaign
                                        </p>

                                    </div>
                                    <div class="title flex flex-row p-3  border-b-[0.2px] border-black">

                                        <h1 class="mt-2 text-2xl font-bold text-[#f70a26]">1 </h1>


                                        <p class=" pl-3">
                                            President Joe Biden tests positive for Covid-19 at pivotal moment in reelection
                                            campaign
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="side-content pl-10">

                        <div class="news-title border-t-[0.5px] border-black">

                            <div class="w-3 bg-[#f70a26] h-1 mb-4"></div>
                            <h1 class="text-xl"> Most readed</h1>
                            <div class="content-recs flex flex-row mt-3">
                                <img class="w-[40%]"
                                    src="https://media.cnn.com/api/v1/images/stellar/prod/best-hotel-products-for-home-cnnu.jpg?c=16x9&q=h_144,w_256,c_fill"
                                    alt="" srcset="">
                                <p class="pl-3">
                                    I made my house feel like a 5-star hotel
                                    — here’s how you can do it too
                                </p>

                            </div>
                            <div class="content-recs flex flex-row mt-3">
                                <img class="w-[40%]"
                                    src="https://media.cnn.com/api/v1/images/stellar/prod/best-hotel-products-for-home-cnnu.jpg?c=16x9&q=h_144,w_256,c_fill"
                                    alt="" srcset="">
                                <p class="pl-3">
                                    I made my house feel like a 5-star hotel
                                    — here’s how you can do it too
                                </p>

                            </div>
                            <div class="content-recs flex flex-row mt-3">
                                <img class="w-[40%]"
                                    src="https://media.cnn.com/api/v1/images/stellar/prod/best-hotel-products-for-home-cnnu.jpg?c=16x9&q=h_144,w_256,c_fill"
                                    alt="" srcset="">
                                <p class="pl-3">
                                    I made my house feel like a 5-star hotel
                                    — here’s how you can do it too
                                </p>

                            </div>
                            <div class="content-recs flex flex-row mt-3">
                                <img class="w-[40%]"
                                    src="https://media.cnn.com/api/v1/images/stellar/prod/best-hotel-products-for-home-cnnu.jpg?c=16x9&q=h_144,w_256,c_fill"
                                    alt="" srcset="">
                                <p class="pl-3">
                                    I made my house feel like a 5-star hotel
                                    — here’s how you can do it too
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    @endif
@endsection
