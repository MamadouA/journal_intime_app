<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Register</title>
</head>
<body>
    @if($errors->any())
        <x-alert isError={{true}}>{{$errors->first()}}</x-alert>
    @else
        @if(session('status'))
            <x-alert isError={{false}}>{{session('status')}}</x-alert>
        @endif
    @endif
    <div class="h-screen bg-slate-200 flex justify-center items-center">
        <x-forms.form action="store">
            @csrf
            <h2 class="text-3xl mt-5 font-bold">Register</h2>
            <x-forms.group>
                <label for="">Enter your fullname:</label>
                <x-forms.input type="text" hint="Mamadou Ndiaye" 
                    name="fullname" required={{true}} @class(['bg-red-200' => $errors->has('fullname')]) />
            </x-forms.group>
            <x-forms.group>
                <label for="">Enter your email:</label>
                <x-forms.input type="email" hint="mnj@gmail.com"
                    name="email" required={{true}} @class(['bg-red-200' => $errors->has('email')]) />
            </x-forms.group>
            <x-forms.group>
                <label for="">Enter your password:</label>
                <x-forms.input required type="password" hint="*****************" 
                    name="password" required={{true}} 
                    @class(['bg-red-200' => $errors->has('password')])/>
            </x-forms.group>
            <x-forms.group>
                <label for="">Confirm your password:</label>
                <x-forms.input type="password" hint="*****************" 
                    name="password_confirmation" required={{true}}
                    @class(['bg-red-200' => $errors->has('password')])
                    />
            </x-forms.group>
            <x-forms.group>
                <x-forms.submit text-content="Sign up" />
                <div class="mx-auto text-center text-nowrap">
                    <span class="font-light">You already have an account? <a class="font-bold underline" href="login">Sign in</a></span>
                </div>
            </x-forms.group>
        </x-forms.form>
    </div>
</body>
</html>