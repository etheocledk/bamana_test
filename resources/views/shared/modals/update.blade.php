<div id="updateModal" class="fixed inset-0 bg-black/60 z-[999] hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="panel border-0 py-1 px-4 rounded-lg overflow-hidden w-[450px] my-8 bg-white">
            <div class="flex mt-5 items-center justify-center">
                <span class="flex items-center justify-center w-16 h-16 rounded-full">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5"
                            d="M3 10.4167C3 7.21907 3 5.62028 3.37752 5.08241C3.75503 4.54454 5.25832 4.02996 8.26491 3.00079L8.83772 2.80472C10.405 2.26832 11.1886 2.00013 11.9999 2.00013C12.8113 2.00013 13.595 2.26832 15.1622 2.80472L15.735 3.00079C18.7416 4.02996 20.2449 4.54454 20.6224 5.08241C21 5.62028 21 7.21907 21 10.4167V13.5834C21 16.781 21 18.3798 20.6224 18.9177C20.2449 19.4555 18.7416 19.9701 15.735 20.9993L15.1622 21.1954C13.595 21.7318 12.8113 22 11.9999 22C11.1886 22 10.405 21.7318 8.83772 21.1954L8.26491 20.9993C5.25832 19.9701 3.75503 19.4555 3.37752 18.9177C3 18.3798 3 16.781 3 13.5834V10.4167Z"
                            stroke="#187945" stroke-width="1.5" />
                        <path d="M15 9L9 15M9 9L15 15" stroke="#187945" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </span>
            </div>
            <div class="p-5 text-center">
                <p class="text-lg">Voulez-vous vraiment modifier votre mot de passe ?</p>
                <div class="flex justify-center gap-6 items-center mt-8">
                    <button type="button"
                        style="color: #187945; background-color: transparent; border: 1px solid #187945;
                         padding: 0.375rem 1.75rem; border-radius: 0.25rem;
                         transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;"
                        onclick="closeUpdateModal()">Annuler</button>
                    <button type="button" class="btn flex items-center" id="confirmButton" onclick="confirmUpdate()"
                        style="background-color: #187945; color: white;">
                        <div class="hidden" id="loader-success">
                            <svg class="w-6 h-6 mr-3 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="#fff"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="#fff"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </div>
                        Modifier
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function updateModal() {
        document.getElementById('updateModal').classList.remove('hidden');

    }

    function closeUpdateModal() {
        document.getElementById('updateModal').classList.add('hidden');
    }

    function confirmUpdate() {
        resetPasswordForm = document.getElementById('resetPasswordForm');

        if (resetPasswordForm) {
            resetPasswordForm.submit();
        }
    }
</script>
