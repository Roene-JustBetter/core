<cookie-notice name="cookie-notice" show-until-close v-cloak>
    <dialog slot-scope="{ close, accept }" class="container rounded bg-white p-6 shadow fixed inset-x-0 bottom-4 z-30">
        <div class="flex flex-wrap items-center justify-between">
            <div class="flex-1 items-center">
                <div class="cookie-consent__message text-sm text-black">
                    {{ $slot }}
                </div>
            </div>
            <x-rapidez::button @click="accept" variant="outline" class="mt-3 w-full shrink-0 md:ml-6 md:w-auto">
                {{ $button ?? __('Accept coockies') }}
            </x-rapidez::button>
        </div>
    </dialog>
</cookie-notice>