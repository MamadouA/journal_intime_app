<!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
<div class="alert absolute left-1/2 -translate-x-1/2 w-1/3 text-center rounded-xl p-5
      {{$isError ? 'bg-red-400' : 'bg-green-300'}}">
    {{$slot}}
    <button class="dismiss-alert absolute top-0 right-0 mr-3 mt-1 font-extrabold size-5
      text-xl">&times;
    </button>
</div>