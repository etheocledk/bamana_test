<header style="z-index:500">
    <nav class="fixed top-0 left-0 right-0 z-50">
        <div class="flex items-center justify-between w-full first-child-nav py-4"
            style="box-shadow: 0 1.2rem 3.2rem rgba(0, 0, 0, 0.03); background-color:rgba(255, 255, 255, 0.97);">

            @include('layouts.sections.menu.menu')

            <div class="cursor-pointer h-10  w-10 p-2 flex justify-center hover:bg-gray-100 rounded-full menu-icon">
                <img src="{{ asset('assets/images/svg/menu.svg') }}" alt="menu" id="open-menu2">
            </div>
            <div id="responsivity_modal" class="hidden">
                <div class="fixed w-4/6 top-0 right-0 h-screen z-1500"
                    style="background-color:rgba(255, 255, 255, 0.97);">
                    <div class="mt-6 ml-6 cursor-pointer h-10  w-10 p-2 flex justify-center hover:bg-gray-100 rounded-full"
                        id="close-menu2">
                        <img src="{{ asset('assets/images/svg/close-menu.svg') }}" alt="menu">
                    </div>
                    <div class="flex mt-8 w-full flex-col items-center">
                        <a href="/auth-logout" class=" mt-5 border-2 border-[#d10] hover:bg-[#d10] hover:text-white text-black px-4 py-2 rounded-[5px] font-[600]">Déconnexion</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
@include('shared.modals.logout')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var openMenuButton = document.getElementById('open-menu2');
        var closeMenuButton = document.getElementById('close-menu2');
        var responsivity_modal = document.getElementById('responsivity_modal');

        if (responsivity_modal && openMenuButton) {
            openMenuButton.addEventListener('click', function() {
                responsivity_modal.classList.remove('hidden');
            });
        }

        if (responsivity_modal && closeMenuButton) {
            closeMenuButton.addEventListener('click', function() {
                responsivity_modal.classList.add('hidden');
            });
        }
    });
</script>
