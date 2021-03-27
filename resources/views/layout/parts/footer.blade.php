
        <footer>
                <p class="text-gray-400">
                
                    &copy; Copyright {{date('Y')}} 
                    {{-- On dit que si on est pas sur about on affiche le liens faciliter pour afficher sur plusieur page  --}}
                    @if(!Route::is('app_about'))
                    &middot; <a href="{{route('app_about')}}"class="text-indigo-500 
                    hover:text-indigo-700 underline"> About Us</a>
                    @endif

                </p>
        </footer>