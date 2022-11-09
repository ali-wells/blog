<div {{ $attributes->merge(['class' => 'border dark:border-gray-800 rounded']) }}>
    <h4 class="font-bold py-2 text-center">
        Newsletter
    </h4>

    <div class="border-t dark:border-gray-800 p-4">
        <p class="font-normal">
            Let me share with you my discoveries about the art of crafting websites, <span class="text-indigo-400">for&nbsp;free</span>.
        </p>

        <x-form method="POST" action="{{ route('subscribe') }}" class="mt-3">
            <input
                type="email"
                name="email"
                id="email"
                placeholder="homer@simpson.com"
                required
                class="dark:bg-gray-800 block dark:border-0 border-gray-200 placeholder-gray-200 dark:placeholder-gray-600 rounded w-full"
            />

            <button type="submit" class="bg-gradient-to-r from-purple-300 dark:from-purple-700 to-purple-400 dark:to-purple-800 block font-bold mt-4 px-3 py-2 rounded-sm shadow-md text-center text-purple-50 w-full">
                Sign me up!
            </button>
        </x-form>
    </div>
</div>
