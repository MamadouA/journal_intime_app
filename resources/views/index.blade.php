<x-layout>
    @if($errors->any())
        <x-alert isError={{true}}>{{$errors->first()}}</x-alert>
    @else
        @if(session('status'))
            <x-alert isError={{false}}>{{session('status')}}</x-alert>
        @endif
    @endif
    <h1 class="mx-auto text-center py-7 font-bold text-2xl">Daily Journal</h1>
    <div class="flex gap-x-5 w-5/6 p-5 mx-auto">
        <div class="flex flex-col gap-y-4 basis-4/6">
            @foreach ($posts as $post)
                <x-entry :id="$post->id" :title="$post->title" :date="$post->date" :description="$post->description"/>
            @endforeach
            @if ($posts->isEmpty())
                <h3 class="m-auto font-thin italic text-3xl">No post available.</h3>
            @endif
        </div>
        <div class="basis-2/6">
            <div class="h-50 p-3 pb-6 sticky top-5 right-0 bg-slate-300 rounded-xl opacity-50 text-center">
                <div>
                    <div class="mb-9 p-2 italic">
                        "The distinction between past, present and future is only a 
                        stubbornly persistent illusion - Albert Enistein" 
                    </div>
                    <a class="w-4/5 block mt-6 px-16 pt-0 pb-2 mx-auto outline outline-emerald-500
                    bg-slate-400 hover:bg-slate-500 bg-opacity-55 rounded-md" href="posts/create">
                        <span class="text-xl font-bold">+</span> New Entry
                    </a>
                    <a class="logout-btn w-4/5 block mt-6 px-16  pt-1 pb-2 mx-auto outline outline-emerald-500
                    bg-slate-400 hover:bg-slate-500 bg-opacity-55 rounded-md" href="#">
                        Deconnexion
                    </a>
                </div>
            </div>
        </div>
    </div> 
    <x-dialog-box id="logout-dialog" redirection="logout">
        Are you sure you want to log out?   
    </x-dialog-box>
</x-layout>