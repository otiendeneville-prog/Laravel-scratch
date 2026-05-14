
<x-layout>
  
  <form method="POST" action="/ideas/{{ $idea->id }}" >
   @csrf
   @method("PATCH")
   <div class="col-span-full">
      <label for="idea" class="block text-sm/6 font-medium text-white">New Idea</label>
      <div class="mt-2">
         <textarea  id="idea" name="idea"  cols="30" rows="3" class="block w-full rounded-md bg-white/5 px-3"></textarea>
      </div>
           <p class="mt- 3 text-sm/6 text-white">You have an idea want to save for later.</p>
   </div>
    @method('PATCH')
   <div class="mt-6 flex items-center gap-x-6">
      <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Update</button>
   </div>
   <div class="mt-6 flex items-center gap-x-6">
      <button type="submit" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Delete</button>
      <form action="/idea/{{$idea->id}}" method="POST">
         @csrf
         @method('DELETE');
      
      </form>
   </div>
   <div class="mt-6 text-white">
      @if($ideas -> count())
      <h2 class="font-bold">Ideas in podcast!</h2>
      @foreach($ideas as $idea)
         <li class="text-sm">{{$idea->description}}</li>
      @endforeach
      @endif
   </div>
  </form>

</x-layout>


  


  





