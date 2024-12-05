<header class="max-w-full mx-auto mt-20 text-center">

    <h1 class="text-5xl text-white" style="font-family: 'shrikhand', serif;">
        Discover Your Next Coffee...
    </h1>
    
    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">

        <!--  Category -->
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl py-2.5">

            <x-category-dropdown />

        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">

                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

               
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

                <div class="relative">
                    <input type="text" 
                        name="search" 
                        placeholder="Search coffee..."
                        class="bg-transparent placeholder-black font-semibold text-sm pl-10 pr-3 py-2 w-full border border-gray-300 rounded-md"
                        value="{{ request('search') }}">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-600"></i>
                </div>

            </form>
        </div>

    </div>

</header>