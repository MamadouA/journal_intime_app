<!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
<div class="mt-2">
    <input {{ $attributes->merge(["class" => "w-full h-9 p-1 border-2 border-slate-400 
        rounded-md outline-none focus:border-slate-600"])}} type={{$type}} placeholder="{{$hint}}"
        name={{$name}}
        @if ($required)
            required
        @endif>
</div>