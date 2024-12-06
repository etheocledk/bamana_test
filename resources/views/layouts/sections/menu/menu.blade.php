<div class="flex items-center justify-between gap-12 w-full">
    <h1 class="font-[800] text-3xl">BAMANA</h1>
    <form action="{{ route('auth.logout') }}" class="normal_menu" id="logoutForm" method="POST">
        @csrf
        @method('GET')
        <button type="button" class="logout-btn" onclick="logoutAlert()">
            Déconnexion
        </button>
    </form>
</div>
<style>
    .is_active {
        color: #003169;
        border-bottom: 1px solid #003169;
    }

    .menu-icon {
        display: none;
    }

    .official-logo {
        width: 200px;
    }

    @media (max-width: 1000px) {
        .menu-icon {
            display: block;
        }

        .normal_menu,
        .logout-drodown,
        .new-logo {
            display: none;
        }
    }

    header {
        margin-bottom: 80px;
    }

    .first-child-nav {
        padding-left: 60px;
        padding-right: 60px;
    }

    @media (max-width: 450px) {
        .official-logo {
            width: 150px;
        }

        .first-child-nav {
            padding: 15px 20px;
        }

    }
</style>
