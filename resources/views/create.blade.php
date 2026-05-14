<x-layout>
  <div class="space-y-12">
    
    <!-- 1. CREATE NEW IDEA FORM -->
    <form method="POST" action="/ideas">
       @csrf
       <div class="col-span-full">
          <label for="ideas" class="block text-sm/6 font-medium text-white">Create a new blade:</label>
          <div class="mt-2">
             <textarea id="ideas" name="ideas" cols="30" rows="3" class="block w-full rounded-md bg-white/5 px-3 text-white" placeholder="Type your idea here..."></textarea>
          </div>
          <p class="mt-3 text-sm/6 text-gray-400">You have an idea want to save for later.</p>
       </div>
       
       <div class="mt-4">
          <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-400">
              Save Idea
          </button>
       </div>
    </form>

    <!-- 2. LISTING ALL IDEAS & ACTIONS -->
    <div class="mt-10 text-white">
        @if($ideas->count())
            <h2 class="font-bold text-lg mb-4">Ideas in podcast!</h2>
            <ul class="space-y-4">
                @foreach($ideas as $singleIdea)
                    <li class="flex items-center justify-between p-4 bg-white/5 rounded-md">
                        <div>
                            <span class="text-sm block">{{ $singleIdea->description }}</span>
                            <!-- Link to take user to the specific edit page -->
                            <a href="/ideas/{{ $singleIdea->id }}" class="text-xs text-indigo-400 hover:underline">Edit details</a>
                        </div>
    </div>

  </div>
</x-layout>
