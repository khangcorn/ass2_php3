@extends('client.layout.master')

@section('content')
    <div class="first-new-section  ">
        <div class="news ms-2 me-4 ">
            <div class="row ">
                <div class="col-lg-6 m-0 ">

                    <div class="head-new-content ms-5 mt-3">
                        @if (!empty($categoriesNew))
                            <h1 class="text-4xl text-black"><a href="{{ 'detail-new/' . $categoriesNew[0]->news_id }}"
                                    class="text-4xl text-black no-underline font-bold	">{{ $categoriesNew[0]->news_title }}</a>
                            </h1>
                        @endif
                        <div class="img-wrap">

                            <img class="w-[90%]"
                                src="https://media.cnn.com/api/v1/images/stellar/prod/240719130407-05-biden-gallery-update-071924.jpg?c=16x9&q=w_1280,c_fill"
                                alt="">

                        </div>

                        <div class="title-new border-b-[1px] border-stone-50">
                            <div class="header-new ">

                                @if (!empty($categoriesNew))
                                    <a class="text-black" href="">{{ $categoriesNew[0]->news_title }}</a>
                                @endif

                            </div>

                            <div class="menu-news">
                                <ul class="w-[90%]">
                                    @foreach ($categoriesNew as $news)
                                        <li><a href="" class="text-black" class="text-black" class="text-black">
                                                {{ $news->news_title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>



                </div>
                <div class="col-lg-3 ml-[-50px]">
                    <div class="first-new-second-section">
                        <div class="first-new-block">



                            <div class="second-section-image">
                                <img width="100" height="100"
                                    src="https://media.cnn.com/api/v1/images/stellar/prod/c-2024-06-29t011026z-1702008836-rc2hk8ar2wl0-rtrmadp-3-usa-election-biden-next.jpg?c=16x9&q=h_653,w_1160,c_fill/f_webp"
                                    alt="" srcset="">
                            </div>
                            <a href="" class="text-black" class="text-black">How Biden would be replaced, according
                                to Democrats’ rules</a>


                        </div>
                        <div class="second-new-block">
                            <div class="second-section-image">
                                <img width="100" height="100"
                                    src="https://media.cnn.com/api/v1/images/stellar/prod/c-2024-06-29t011026z-1702008836-rc2hk8ar2wl0-rtrmadp-3-usa-election-biden-next.jpg?c=16x9&q=h_653,w_1160,c_fill/f_webp"
                                    alt="" srcset="">
                            </div>
                            <a href="" class="text-black" class="text-black">How Biden would be replaced, according
                                to Democrats’ rules</a>


                        </div>
                        <div class="third-new-block">
                            <div class="second-section-image">
                                <img width="100" height="100"
                                    src="https://media.cnn.com/api/v1/images/stellar/prod/c-2024-06-29t011026z-1702008836-rc2hk8ar2wl0-rtrmadp-3-usa-election-biden-next.jpg?c=16x9&q=h_653,w_1160,c_fill/f_webp"
                                    alt="" srcset="">
                            </div>
                            <a href="" class="text-black" class="text-black">How Biden would be replaced, according
                                to Democrats’ rules</a>


                        </div>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="first-new-third-section">
                        <div class="first-new-block">
                            <div class="second-section-image">
                                <img width="300" height="300"
                                    src="https://media.cnn.com/api/v1/images/stellar/prod/c-2024-06-29t011026z-1702008836-rc2hk8ar2wl0-rtrmadp-3-usa-election-biden-next.jpg?c=16x9&q=h_653,w_1160,c_fill/f_webp"
                                    alt="" srcset="">

                            </div>

                            <a href="" class="text-black" class="text-black">How Biden would be replaced, according
                                to Democrats’ rules</a>

                        </div>
                        <div>
                            <div>
                                <div class="new-list">
                                    <div class="new-list-title">
                                        <a href="" class="text-black" class="text-black">How Biden would be replaced,
                                            according to Democrats’ rules</a>
                                    </div>
                                    <div class="new-list-title">
                                        <a href="" class="text-black" class="text-black">How Biden would be replaced,
                                            according to Democrats’ rules</a>
                                    </div>
                                    <div class="new-list-title">
                                        <a href="" class="text-black" class="text-black">How Biden would be replaced,
                                            according to Democrats’ rules</a>
                                    </div>
                                    <div class="new-list-title">
                                        <a href="" class="text-black" class="text-black">How Biden would be
                                            replaced,
                                            according to Democrats’ rules</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>





        </div>
    </div>

    <div class="second-new-section m-5">
        <div class="news mt-5 ms-2 me-4">
            <div class="row">

                <div class="col-lg-3">
                    <div class="second-new-second-section ">
                        <div>
                            <hr>
                            <div class="w-[10px] h-1 bg-red-700"></div>
                        </div>
                        <h1 class="text-base">MORE TOP STORIES </h1>
                        <div class="second-new-block">
                            <div class="second-section-image">
                                <img width="100" height="100"
                                    src="https://media.cnn.com/api/v1/images/stellar/prod/c-2024-06-29t011026z-1702008836-rc2hk8ar2wl0-rtrmadp-3-usa-election-biden-next.jpg?c=16x9&q=h_653,w_1160,c_fill/f_webp"
                                    alt="" srcset="">
                            </div>
                            <a href="" class="text-black" class="text-black">How Biden would be replaced,
                                according to Democrats’ rules</a>


                        </div>
                        <div class="second-new-block">

                            <div class="second-section-image">
                                <img width="100" height="100"
                                    src="https://media.cnn.com/api/v1/images/stellar/prod/c-2024-06-29t011026z-1702008836-rc2hk8ar2wl0-rtrmadp-3-usa-election-biden-next.jpg?c=16x9&q=h_653,w_1160,c_fill/f_webp"
                                    alt="" srcset="">
                            </div>
                            <a href="" class="text-black" class="text-black">How Biden would be replaced,
                                according to Democrats’ rules</a>


                        </div>
                        <div class="third-new-block">
                            <div class="second-section-image">
                                <img width="100" height="100"
                                    src="https://media.cnn.com/api/v1/images/stellar/prod/c-2024-06-29t011026z-1702008836-rc2hk8ar2wl0-rtrmadp-3-usa-election-biden-next.jpg?c=16x9&q=h_653,w_1160,c_fill/f_webp"
                                    alt="" srcset="">
                            </div>
                            <a href="" class="text-black" class="text-black">How Biden would be replaced,
                                according to Democrats’ rules</a>


                        </div>
                    </div>

                </div>
                <div class="col-lg-6 w-[700px]">
                    <div class="">
                        <hr>
                        <div class="w-[10px] h-1 bg-red-700"></div>
                    </div>
                    <div class="head-new-content ms-5 mt-3">
                        <h1>Obama, Pelosi privately expressed concerns over Biden</h1>
                        <div class="img-wrap">
                            <img style="width: 90%; height:90%;"
                                src=" {{ asset('https://media.cnn.com/api/v1/images/stellar/prod/20240711-obama-pelosi-split.jpg?c=16x9&q=w_1280,c_fill') }}"
                                alt="" srcset="">
                        </div>

                        <div class="title-new border-b-[1px] border-stone-50">
                            <div class="header-new">
                                <a href="" class="text-black" class="text-black">The end for Biden’s candidacy
                                    feels clear, according to CNN
                                    interviews with dozens of people in touch with the two Democrats</a>

                            </div>

                            <div class="menu-news">
                                <ul>
                                    <li><a href="" class="text-black" class="text-black">Analysis Democrats keep
                                            piling on as Biden stands
                                            firm</a>
                                    </li>
                                    <li><a href="" class="text-black" class="text-black">See moment Biden
                                            mistakenly calls Zelensky ‘President
                                            Putin’ 1:53</a></li>
                                    <li><a href="" class="text-black" class="text-black">Live Updates Biden’s news
                                            conference seen as ‘progress’
                                            by
                                            aides</a></li>
                                    <li><a href="" class="text-black" class="text-black">Takeaways from Biden’s
                                            remarks as he attempts to assuage
                                            concerns over campaign</a></li>
                                    <li><a href="" class="text-black" class="text-black">Biden says ‘Vice
                                            President Trump’ when discussing Harris
                                            0:51</a></li>
                                    <li><a href="" class="text-black" class="text-black">Fact Check Biden’s false
                                            and misleading claims at
                                            high-stakes news conference </a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="second-new-third-section">
                        <div class="second-new-block">
                            <div class="second-section-image">
                                <img width="300" height="300"
                                    src="https://media.cnn.com/api/v1/images/stellar/prod/c-2024-06-29t011026z-1702008836-rc2hk8ar2wl0-rtrmadp-3-usa-election-biden-next.jpg?c=16x9&q=h_653,w_1160,c_fill/f_webp"
                                    alt="" srcset="">

                            </div>

                            <a href="" class="text-black">How Biden would be replaced, according to Democrats’
                                rules</a>

                        </div>
                        <div>
                            <div>
                                <div class="new-list">
                                    <div class="new-list-title">
                                        <a href="" class="text-black" class="text-black">How Biden would be
                                            replaced,
                                            according to Democrats’ rules</a>
                                    </div>
                                    <div class="new-list-title">
                                        <a href="" class="text-black" class="text-black">How Biden would be
                                            replaced,
                                            according to Democrats’ rules</a>
                                    </div>
                                    <div class="new-list-title">
                                        <a href="" class="text-black" class="text-black">How Biden would be
                                            replaced,
                                            according to Democrats’ rules</a>
                                    </div>
                                    <div class="new-list-title">
                                        <a href="" class="text-black" class="text-black">How Biden would be
                                            replaced,
                                            according to Democrats’ rules</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>





        </div>
    </div>


    <div class="advertiment w-full h-[10rem] ">
        <div class="m-5  ">
            <div class="ml-56">
                <img class="justify-center" src="https://tpc.googlesyndication.com/simgad/839090280924019120"
                    alt="" srcset="">
            </div>
        </div>
    </div>

    <div class="third-new-section ml-10">
        <div class="ml-3">
            <h1 class="text-3xl"> Feature Sections</h1>
        </div>
        <div class="news mt-5 ms-2 me-4">
            <div class="row">

                <div class="col-lg-3">
                    <div class="second-new-second-section ">
                        <div>
                            <hr>
                            <div class="w-[10px] h-1 bg-red-700"></div>
                        </div>
                        <h1 class="text-base">MORE TOP STORIES </h1>
                        <div class="second-new-block">
                            <div class="second-section-image">
                                <img width="100" height="100"
                                    src="https://media.cnn.com/api/v1/images/stellar/prod/c-2024-06-29t011026z-1702008836-rc2hk8ar2wl0-rtrmadp-3-usa-election-biden-next.jpg?c=16x9&q=h_653,w_1160,c_fill/f_webp"
                                    alt="" srcset="">
                            </div>
                            <a href="" class="text-black">How Biden would be replaced, according to Democrats’
                                rules</a>


                        </div>
                        <div class="second-new-block">

                            <div class="second-section-image">
                                <img width="100" height="100"
                                    src="https://media.cnn.com/api/v1/images/stellar/prod/c-2024-06-29t011026z-1702008836-rc2hk8ar2wl0-rtrmadp-3-usa-election-biden-next.jpg?c=16x9&q=h_653,w_1160,c_fill/f_webp"
                                    alt="" srcset="">
                            </div>
                            <a href="" class="text-black">How Biden would be replaced, according to Democrats’
                                rules</a>


                        </div>
                        <div class="third-new-block">
                            <div class="second-section-image">
                                <img width="100" height="100"
                                    src="https://media.cnn.com/api/v1/images/stellar/prod/c-2024-06-29t011026z-1702008836-rc2hk8ar2wl0-rtrmadp-3-usa-election-biden-next.jpg?c=16x9&q=h_653,w_1160,c_fill/f_webp"
                                    alt="" srcset="">
                            </div>
                            <a href="" class="text-black">How Biden would be replaced, according to Democrats’
                                rules</a>


                        </div>
                    </div>

                </div>
                <div class="col-lg-6 w-[700px]">
                    <div class="">
                        <hr class="w-[90%]">
                        <div class="w-[10px] h-1 bg-red-700"></div>
                    </div>
                    <div class="head-new-content ms-5 mt-3">
                        <h1>Obama, Pelosi privately expressed concerns over Biden</h1>
                        <div class="img-wrap">
                            <img style="width: 90%; height:90%;"
                                src=" {{ asset('https://media.cnn.com/api/v1/images/stellar/prod/20240711-obama-pelosi-split.jpg?c=16x9&q=w_1280,c_fill') }}"
                                alt="" srcset="">
                        </div>

                        <div class="title-new border-b-[1px] border-stone-50">
                            <div class="header-new">
                                <a href="" class="text-black">The end for Biden’s candidacy feels clear, according
                                    to CNN
                                    interviews with dozens of people in touch with the two Democrats</a>

                            </div>

                            <div class="menu-news">
                                <ul>
                                    <li><a href="" class="text-black" class="text-black">Analysis Democrats keep
                                            piling on as Biden stands
                                            firm</a>
                                    </li>
                                    <li><a href="" class="text-black" class="text-black">See moment Biden
                                            mistakenly calls Zelensky ‘President
                                            Putin’ 1:53</a></li>
                                    <li><a href="" class="text-black" class="text-black">Live Updates Biden’s news
                                            conference seen as ‘progress’
                                            by
                                            aides</a></li>
                                    <li><a href="" class="text-black" class="text-black">Takeaways from Biden’s
                                            remarks as he attempts to assuage
                                            concerns over campaign</a></li>
                                    <li><a href="" class="text-black" class="text-black">Biden says ‘Vice
                                            President Trump’ when discussing Harris
                                            0:51</a></li>
                                    <li><a href="" class="text-black" class="text-black">Fact Check Biden’s false
                                            and misleading claims at
                                            high-stakes news conference </a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="second-new-third-section">
                        <div class="second-new-block">
                            <div class="second-section-image">
                                <img width="300" height="300"
                                    src="https://media.cnn.com/api/v1/images/stellar/prod/c-2024-06-29t011026z-1702008836-rc2hk8ar2wl0-rtrmadp-3-usa-election-biden-next.jpg?c=16x9&q=h_653,w_1160,c_fill/f_webp"
                                    alt="" srcset="">

                            </div>

                            <a href="" class="text-black">How Biden would be replaced, according to Democrats’
                                rules</a>

                        </div>
                        <div>
                            <div>
                                <div class="new-list">
                                    <div class="new-list-title">
                                        <a href="" class="text-black">How Biden would be replaced,
                                            according to Democrats’ rules</a>
                                    </div>
                                    <div class="new-list-title">
                                        <a href="" class="text-black">How Biden would be replaced,
                                            according to Democrats’ rules</a>
                                    </div>
                                    <div class="new-list-title">
                                        <a href="" class="text-black">How Biden would be replaced,
                                            according to Democrats’ rules</a>
                                    </div>
                                    <div class="new-list-title">
                                        <a href="" class="text-black">How Biden would be replaced,
                                            according to Democrats’ rules</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>





        </div>
    </div>

    <div class="four-new-section m-5 ">
        <div>
            <h1 class="text-3xl">Photos You Should See</h1>
        </div>
        <div class="recomend-photo flex flex-row gap 2">
            <div class="new-photos grid grid-cols-3 gap-4">
                <div class="shrink w-64 ">
                    <img class="ml-3 w-[200px] h-[100px]"
                        src="https://media.cnn.com/api/v1/images/stellar/prod/gettyimages-960538988.jpg?q=w_2000,c_fill/f_webp"
                        alt="" srcset="">
                    <div>
                        <h1 class="text-base font-medium"> Beyoncé stayed in $100,000 per night suite in the Middle
                            East’s ‘best hotel’</h1>
                    </div>
                </div>
                <div class="shrink w-64 ">
                    <img class="ml-3 w-[200px] h-[100px]"
                        src="https://media.cnn.com/api/v1/images/stellar/prod/gettyimages-960538988.jpg?q=w_2000,c_fill/f_webp"
                        alt="" srcset="">
                    <div>
                        <h1 class="text-base font-medium"> Beyoncé stayed in $100,000 per night suite in the Middle
                            East’s ‘best hotel’</h1>
                    </div>
                </div>
                <div class="shrink w-64 ">
                    <img class="ml-3 w-[200px] h-[100px]"
                        src="https://media.cnn.com/api/v1/images/stellar/prod/gettyimages-960538988.jpg?q=w_2000,c_fill/f_webp"
                        alt="" srcset="">
                    <div>
                        <h1 class="text-base font-medium"> Beyoncé stayed in $100,000 per night suite in the Middle
                            East’s ‘best hotel’</h1>
                    </div>
                </div>
                <div class="shrink w-64 ">
                    <img class="ml-3 w-[200px] h-[100px]"
                        src="https://media.cnn.com/api/v1/images/stellar/prod/gettyimages-960538988.jpg?q=w_2000,c_fill/f_webp"
                        alt="" srcset="">
                    <div>
                        <h1 class="text-base font-medium"> Beyoncé stayed in $100,000 per night suite in the Middle
                            East’s ‘best hotel’</h1>
                    </div>
                </div>
                <div class="shrink w-64 ">
                    <img class="ml-3 w-[200px] h-[100px]"
                        src="https://media.cnn.com/api/v1/images/stellar/prod/gettyimages-960538988.jpg?q=w_2000,c_fill/f_webp"
                        alt="" srcset="">
                    <div>
                        <h1 class="text-base font-medium"> Beyoncé stayed in $100,000 per night suite in the Middle
                            East’s ‘best hotel’</h1>
                    </div>
                </div>
                <div class="shrink w-64 ">
                    <img class="ml-3 w-[200px] h-[100px]"
                        src="https://media.cnn.com/api/v1/images/stellar/prod/gettyimages-960538988.jpg?q=w_2000,c_fill/f_webp"
                        alt="" srcset="">
                    <div>
                        <h1 class="text-base font-medium"> Beyoncé stayed in $100,000 per night suite in the Middle
                            East’s ‘best hotel’</h1>
                    </div>
                </div>
                <div class="shrink w-64 ">
                    <img class="ml-3 w-[200px] h-[100px]"
                        src="https://media.cnn.com/api/v1/images/stellar/prod/gettyimages-960538988.jpg?q=w_2000,c_fill/f_webp"
                        alt="" srcset="">
                    <div>
                        <h1 class="text-base font-medium"> Beyoncé stayed in $100,000 per night suite in the Middle
                            East’s ‘best hotel’</h1>
                    </div>
                </div>
                <div class="shrink w-64 ">
                    <img class="ml-3 w-[200px] h-[100px]"
                        src="https://media.cnn.com/api/v1/images/stellar/prod/gettyimages-960538988.jpg?q=w_2000,c_fill/f_webp"
                        alt="" srcset="">
                    <div>
                        <h1 class="text-base font-medium"> Beyoncé stayed in $100,000 per night suite in the Middle
                            East’s ‘best hotel’</h1>
                    </div>
                </div>
                <div class="shrink w-64 ">
                    <img class="ml-3 w-[200px] h-[100px]"
                        src="https://media.cnn.com/api/v1/images/stellar/prod/gettyimages-960538988.jpg?q=w_2000,c_fill/f_webp"
                        alt="" srcset="">
                    <div>
                        <h1 class="text-base font-medium"> Beyoncé stayed in $100,000 per night suite in the Middle
                            East’s ‘best hotel’</h1>
                    </div>
                </div>
            </div>

            <div class="advertisment w-[700px] h-auto grid place-items-center">
                <div>
                    <img class="w-[400px] h-[300px]"
                        src="https://assets.airtrfx.com/media-em/cx/60f7ae9b544c9_wh-hong-kong-01-sharp-island.jpg"
                        alt="" srcset="">

                </div>
            </div>
        </div>

    </div>
    <div class="fith-new-section ">
        <div class="w-full h-[55rem] bg-black m-0 p-8 ">
            <div class="header">
                <h1 class="text-white text-4xl">
                    In Case You Missed It</h1>
            </div>

            <div class="fith-new-content grid grid-cols-2 gap-x-4">
                <div class="hot-fith-new-content">
                    <img class="w-auto h-auto"
                        src="https://media.cnn.com/api/v1/images/stellar/prod/20240708-investigates-idf-netzah-yehuda-final.jpg?c=16x9&q=h_653,w_1160,c_fill/f_webp"
                        alt="" srcset="">
                    <h1 class="text-white m-1 text-2xl">The US held off sanctioning this Israeli army unit despite
                        evidence of abuses. Now its forces are shaping the fight in Gaza</h1>
                </div>
                <div class="list-fith-new-content m-0 p-0">
                    <div class="title-new border-b-[1px] border-stone-50">
                        <h1 class="text-base text-white">
                            Illustration by Alberto Mier/CNN
                            The US held off sanctioning this Israeli army unit despite evidence of abuses. Now its
                            forces are shaping the fight in Gaza
                            As cartels take a stake in ‘green gold,’ US and Mexico rethink how avocados reach
                            American kitchens</h1>
                    </div>
                    <div class="title-new border-b-[1px] border-stone-50">
                        <h1 class="text-base text-white">
                            Illustration by Alberto Mier/CNN
                            The US held off sanctioning this Israeli army unit despite evidence of abuses. Now its
                            forces are shaping the fight in Gaza
                            As cartels take a stake in ‘green gold,’ US and Mexico rethink how avocados reach
                            American kitchens</h1>
                    </div>
                    <div class="title-new border-b-[1px] border-stone-50">
                        <h1 class="text-base text-white">
                            Illustration by Alberto Mier/CNN
                            The US held off sanctioning this Israeli army unit despite evidence of abuses. Now its
                            forces are shaping the fight in Gaza
                            As cartels take a stake in ‘green gold,’ US and Mexico rethink how avocados reach
                            American kitchens</h1>
                    </div>
                    <div class="title-new border-b-[1px] border-stone-50">
                        <h1 class="text-base text-white">
                            Illustration by Alberto Mier/CNN
                            The US held off sanctioning this Israeli army unit despite evidence of abuses. Now its
                            forces are shaping the fight in Gaza
                            As cartels take a stake in ‘green gold,’ US and Mexico rethink how avocados reach
                            American kitchens</h1>
                    </div>
                    <div class="title-new border-b-[1px] border-stone-50">
                        <h1 class="text-base text-white">
                            Illustration by Alberto Mier/CNN
                            The US held off sanctioning this Israeli army unit despite evidence of abuses. Now its
                            forces are shaping the fight in Gaza
                            As cartels take a stake in ‘green gold,’ US and Mexico rethink how avocados reach
                            American kitchens</h1>
                    </div>
                    <div class="title-new border-b-[1px] border-stone-50">
                        <h1 class="text-base text-white">
                            Illustration by Alberto Mier/CNN
                            The US held off sanctioning this Israeli army unit despite evidence of abuses. Now its
                            forces are shaping the fight in Gaza
                            As cartels take a stake in ‘green gold,’ US and Mexico rethink how avocados reach
                            American kitchens</h1>
                    </div>
                </div>

            </div>
            <div class="advertiment w-full  ">
                <div class="m-5  ">
                    <div class="ml-56">
                        <img class="justify-center" src="https://tpc.googlesyndication.com/simgad/839090280924019120"
                            alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


<body>
