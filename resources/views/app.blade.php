<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
</head>

<body style="background: linear-gradient(0deg, #EDE9E6, #EDE9E6, #f4f9ff,  #ffffff);"">
    <nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="container flex flex-wrap items-center justify-between mx-auto w-full">
            <a href="https://flowbite.com/" class="flex items-center">
                <img src="{{ asset('assets/logo.svg') }}" class="h-6 mr-3 sm:h-9" alt="Logo">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white font-logo-font" style="font-family: 'Fira Sans', sans-serif;">eSkolar</span>
            </a>
            <div class="flex md:order-2">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">Get started</button>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 lg:space-x-16 xl:space-x-16 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Scholarships</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Forums</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="w-screen 2xl:pt-20 xl:pt-20 lg:pt-20">
        <div class="flex flex-col lg:flex-row w-screen 2xl:pl-10">
          <div class="lg:w-1/2 xl:p-20 p-12 pt-20 md: flex items-center justify-center flex-col">
            <h1 class="2xl:text-7xl text-6xl font-bold text-gray-800">
              <span>Empowering</span> students to bring them closer to achieving their dreams.
            </h1>
            <div class="my-4">
              <p class="text-lg text-gray-700">
                Find a suitable scholarship and achieve your academic goals. Browse scholarships, connect with peers, and start your journey to success today.
              </p>
            </div>
            <form class="w-full pt-5">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-white-50 rounded-lg border border-gray-300 focus:ring-white focus:border-white dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search scholarship" required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
          </div>
          <div class="lg:w-1/2 flex items-center justify-center">
            <img src="{{ asset('assets/vector.png') }}" class="object-cover lg:block hidden xl:w-[700px] xl:h-[700px] lg:w-[500px] lg:h-[500px]" alt="Image">
          </div>
        </div>
    </div>
      
    <div class="w-screen pt-16">
        <h1 class="xl:text-6xl text-5xl text-center font-bold">What's Our Purpose</h1>
        <p class="text-center xl:w-[65%] md:w-[85%] sm:w-[85%] w-[85%] pt-4 mx-auto">This tool aims to simplify the scholarship search process for students by providing reliable information and instructions for legitimate scholarships. Additionally, it aims to assist educational institutions in providing accurate information to students seeking financial assistance.</p>
        <div class="flex flex-wrap justify-center items-center w-full lg:space-x-10 mt-20 lg:px-1 px-10 md:px-0 md:space-y-0 md:space-x-[1%] 2xl:space-y-0 xl:space-y-0 lg:space-y-0 space-y-4 min-w-sm">
            <div class="2xl:w-[400px] 2xl:h-[500px] lg:w-[300px] lg:h-[400px] md:w-[250px] md:h-[380px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="2xl:h-[60%] xl:h-[50%] lg:h-[50%] md:h-[50%] 2x:block xl:block lg:block md:block hidden">
                  <img class="rounded-t-lg w-full h-full object-cover" src="{{ asset('assets/search.png') }}" alt="" />
                </div> 
                <div class="p-5 h-[50%] 2xl:h-[40%]">
                  <a href="#">
                    <h5 class="mb-2 text-2xl lg:text-lg font-bold tracking-tight text-black-50 dark:text-white">Find Scholarship</h5>
                  </a>
                  <p class="mb-3 text-sm lg:text-base font-normal text-gray-700 dark:text-gray-400">Search for scholarships that best suits for you with ease. Easily gain the information and the process on how to apply.</p>
                  <a href="#" class="inline-flex items-center text-sm lg:text-base font-medium text-center text-neutral-500">
                    <i>Search scholarship</i>
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
                </div>
            </div>
            <div class="2xl:w-[400px] 2xl:h-[500px] lg:w-[300px] lg:h-[400px] md:w-[250px] md:h-[380px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="2xl:h-[60%] xl:h-[50%] lg:h-[50%] md:h-[50%] 2x:block xl:block lg:block md:block hidden p-10">
                  <img class="rounded-t-lg w-full h-full object-cover" src="{{ asset('assets/post.png') }}" alt="" />
                </div> 
                <div class="p-5 h-[50%] 2xl:h-[40%]">
                  <a href="#">
                    <h5 class="mb-2 text-2xl lg:text-lg font-bold tracking-tight text-black-50 dark:text-white">Share Knowledge</h5>
                  </a>
                  <p class="mb-3 text-sm lg:text-base font-normal text-gray-700 dark:text-gray-400">Post scholarship opportunities and other financial assistance that that you know to help other students.</p>
                  <a href="#" class="inline-flex items-center text-sm lg:text-base font-medium text-center text-neutral-500">
                    <i>Post scholarship</i>
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
                </div>
            </div>

            <div class="2xl:w-[400px] 2xl:h-[500px] lg:w-[300px] lg:h-[400px] md:w-[250px] md:h-[380px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="2xl:h-[60%] xl:h-[50%] lg:h-[50%] md:h-[50%] 2x:block xl:block lg:block md:block hidden p-10">
                  <img class="rounded-t-lg w-full h-full object-cover" src="{{ asset('assets/forum.jpg') }}" alt="" />
                </div> 
                <div class="p-5 h-[50%] 2xl:h-[40%]">
                  <a href="#">
                    <h5 class="mb-2 text-2xl lg:text-lg font-bold tracking-tight text-black-50 dark:text-white">Join Discussions</h5>
                  </a>
                  <p class="mb-3 text-sm lg:text-base font-normal text-gray-700 dark:text-gray-400">Ask for assistance or clarrification about particular concerns. Guide other students and discuss related topics.</p>
                  <a href="#" class="inline-flex items-center text-sm lg:text-base font-medium text-center text-neutral-500">
                    <i>Join discussions</i>
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
                </div>
              </div>
              
        </div>
    </div>

    <div class="h-screen w-screen">

    </div>

    <div class="h-[300px] w-screen bg-white flex items-center justify-center">
        <h1 class="xl:text-6xl text-4xl text-center font-bold">footer ni</h1>
    </div>

</body>
</html>