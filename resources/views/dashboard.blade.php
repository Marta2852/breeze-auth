<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-500 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-emerald-900 overflow-hidden shadow-xl shadow-pink-500/60 sm:rounded-lg">
                <div class="font-mono italic font-black p-6 text-pink-500 text-center">
                    {{ __("You're logged in!") }}
                    <p>Šis teksts rādās!</p>
                    <p>Man gribas <a class="underline decoration-green-700 decoration-double" href="https://www.spiritsandwine.lv/lv/likieris/jagermeister-3261">Jagermeister</a></p>
                </div>
        </div>
        <div class="flex items-center justify-center">
                <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRgoag0G5Z_5fDTXK9FcaSVbKEB2rYa38TPj_LIsmynW77JP3S5dENbNPjh5XBKkLxFare2Oj2fJBW02GocjdJO357bkHcLDQboUrDl7Bw" alt="Lietotāja attēls"
                     class="shadow-xl shadow-pink-500/60">
            </div>
    </div>
</x-app-layout>
