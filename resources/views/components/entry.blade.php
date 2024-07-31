<!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
<div class="h-auto rounded-xl p-5 shadow-md shadow-slate-300 bg-slate-200">
    <p class="capitalize font-semibold">{{$title}}</p>
    <p class="font-light text-sm mt-1 mb-4">{{$date}}</p>
    <p>
        {{$description}}
    </p>
    <div class="flex gap-x-7 justify-end mr-8">
        <a href="posts/edit/{{$id}}" class="underline underline-offset-4 decoration-2
         text-emerald-500 hover:font-semibold">Edit</a>
        <a href="#" class="delete-btn underline underline-offset-4 decoration-2
         text-red-500 hover:font-semibold">Delete</a>
    </div>
</div>
<x-dialog-box class="h-screen w-screen top-0 left-0" id="delete-dialog" redirection="posts/destroy/{{$id}}">
    Are you sure you want to delete this post?   
</x-dialog-box>
