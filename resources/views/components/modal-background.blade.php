<!-- Life is available only in the present moment. - Thich Nhat Hanh -->
<div {{$attributes->merge(['class' => 'modal-container h-full w-full top-0 z-10 absolute bg-gray-100 bg-opacity-60'])}}>
    <button class="dismiss-modal text-5xl hover:text-red-600 font-bold absolute right-8">
        &times;
    </button>
    <div class="h-full w-4/5 flex mx-auto items-center">
        <div class="dialog-box h-44 w-96 p-12 bg-slate-600 rounded-xl text-slate-200 
            shadow-md shadow-slate-800 mx-auto flex flex-col justify-center
            divide-y-2 divide-slate-50 divide-opacity-45">
            <p class="mb-5 message"></p>
            <div class="flex gap-x-2">
                <x-button class="cancel-btn" text="Cancel"/>
                <x-link-button class="dialog-box-link" link="#" text="Continue"/>
            </div>
        </div>
    </div>
</div>