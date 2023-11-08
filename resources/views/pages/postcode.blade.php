<x-app>
    <form method="POST" action="{{route('pages.postcode.store')}}" class="mb-8">
        @csrf
        <div class="mb-4">
            <label for="postcode" class="block text-sm font-medium leading-6 text-gray-900">Postcode</label>
            <div class="mt-2">
                <input type="text" name="postcode" id="postcode" class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="you@example.com" />
            </div>
        </div>
        <button  type="submit" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Search</button>
    </form>

    @if($errors->any())
        <div class="bg-red-500 p-4 rounded">
            <h4 class="text-white">{{$errors->first()}}</h4>
        </div>
    @elseif(session()->get('postcode'))
        <div class="flex flex-col space-y-4 p-4 bg-gray-300 mb-4">
            <div>{{ session()->get('postcode') }}</div>
            <div>{{ session()->get('parliamentary_constituency') }}</div>
            <div>{{ session()->get('nuts') }}</div>
            <div>{{ session()->get('pfa') }}</div>
        </div>
    @endif
</x-app>
