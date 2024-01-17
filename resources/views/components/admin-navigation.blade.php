<div class="navigation">
    <div class="left_container">
        <i class="fa-solid fa-bars"></i>
    </div>
    <div class="right_container">
        <i class="fa-regular fa-bell"></i>
        <img src="{{ Auth()->user()->user_image }}" alt="" onclick="triggerLogout()"/>
        <div class="absolute_card">
            <a href="/logout">Logout</a>
        </div>
    </div>
</div>