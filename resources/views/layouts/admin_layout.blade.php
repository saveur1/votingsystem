<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Voting System</title>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />
    <link rel="icon" href="/images/utora_logo.png" type="image/x-icon"/>
</head>
<body>

<div id="app">
    <x-sidebar />
    <section id="interface">
        <x-admin-navigation></x-admin-navigation>
        <div class="app_main_content">
            @yield("content")
        </div>
    </section>
</div>

<div id="modal_holder"></div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/micromodal/dist/micromodal.min.js"></script>
<script type="text/javascript">

  document.addEventListener("DOMContentLoaded", function() {
        try {
            
            MicroModal.init({
            awaitCloseAnimation: true,
            onShow: function(modal) {
                console.log("micromodal open");
            },
            onClose: function(modal) {
                console.log("micromodal close");
            },
            openTrigger:"data-custom-open"
            });
            
        } catch (e) {
            console.log("micromodal error: ", e);
        }
  });

    function upload_images(){
        document.querySelector(".create_new_user_form .left_pannel .profile input[type=file]").click();
    
        document.getElementById("upload_image").addEventListener("change",function(){
            const reader = new FileReader();
            reader.onload = function(event){
                document.querySelector(".create_new_user_form .left_pannel img").setAttribute("src",event.target.result);
            };

            reader.readAsDataURL(this.files[0]);
        });
    }

    function handleChangedParty(event){
        const selected_id = event.value;
        const selected = Array.from(event.querySelectorAll('option')).find(option => option.value === `${selected_id}`);
        const image_holder = document.querySelector(".party_info .party_logo img")
        image_holder.setAttribute("src", selected.getAttribute("data-image"));
    }

    function triggerLogout(){
        const logoutCard = document.querySelector(".absolute_card");

        if(logoutCard.classList.contains("show_absolute_card"))
            logoutCard.classList.remove("show_absolute_card");
        else
            logoutCard.classList.add("show_absolute_card");
    }
    
    </script>
</body>
</html>