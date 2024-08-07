<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.layout.partials.css')
</head>

<body>
    <div class="container-fluid">
        <header class="ms-0 me-0 p-0">
            <nav class=" flex flex-row justify-between bg-black w-full h-[50px]">
             @include('client.layout.partials.header-section.nav-first-section')


                @include('client.layout.partials.header-section.nav-second-section')
            </nav>
        </header>
  
        @yield('content')
  

        <footer class="container-fluid w-full h-[50rem] bg-black border-[0.5px] border-white  ">
      
               @include('client.layout.partials.footer')

        </footer>
    </div>



</body>

@include('client.layout.partials.js')
