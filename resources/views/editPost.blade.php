<!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Register</title>
</head>
<body class="bg-slate-200">
    @if($errors->any())
        <x-alert isError={{true}}>{{$errors->first()}}</x-alert>
    @endif
    <div class="h-screen flex-col content-center">
        <div class="flex justify-center items-center">
            <x-forms.form class="py-2" action="/users/posts/update/{{$post->id}}">
                @csrf
                <h2 class="text-3xl mt-3 font-bold">Edit Post</h2>
                <x-forms.group>
                    <label for="">Enter the title:</label>
                    <x-forms.input type="text" hint="This is the title of my post" 
                        name="title" required={{true}} value="{{$post->title}}"
                        @class(['bg-red-200' => $errors->has('title')]) />
                </x-forms.group>
                <x-forms.group>
                    <label for="">Select date:</label>
                    <x-forms.input type="date" hint="mnj@gmail.com"
                        name="date" required={{true}} value="{{$post->date}}"
                        @class(['bg-red-200' => $errors->has('date')]) />
                </x-forms.group>
                <x-forms.group>
                    <label for="description">Enter a description:</label>
                    <x-forms.text-area name="description">
                        {{$post->description}}
                    </x-forms.text-area>
                </x-forms.group>
                <x-forms.group class="flex">
                    <x-link-button link="/users/posts" text="Cancel"/>
                    <x-forms.submit class="px-14" text-content="Update" />
                </x-forms.group>
            </x-forms.form>
        </div>
    </div>
</body>
</html>