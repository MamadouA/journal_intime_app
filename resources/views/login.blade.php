<x-layout>
    @if($errors->any())
    <x-alert isError={{true}}>Email or password incorrect!</x-alert>
    @endif
    <div class="h-screen bg-slate-200 flex justify-center items-center">
        <x-forms.form action="authenticate">
        <h2 class="mb-8 text-3xl font-bold">Login</h2>
        <x-forms.group>
            <label for="email">Enter your email:</label>
            <x-forms.input type="email" hint="mamadou@gmail.com" name="email" id="email" required={{true}}
             @class(['bg-red-200' => $errors->any()])/>
        </x-forms.group>
        <x-forms.group>
            <label for="password">Enter your password:</label>
            <x-forms.input required type="password" hint="*****************" name="password" id="password" required={{true}}
                @class(['bg-red-200' => $errors->any()]) />
        </x-forms.group>
        <x-forms.group>
            <x-forms.submit text-content="Connexion" />
            <div class="mx-auto text-center text-nowrap">
                <span class="font-light">You don't have an account? <a class="font-bold underline" href="create">Sign up</a></span>
            </div>
        </x-forms.group>
    </x-forms.form>
</div>
</x-layout>