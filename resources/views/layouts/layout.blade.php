<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="icon" href="/images/utora_logo.png" type="image/x-icon"/>
</head>
<body>
  
    @yield("content")

<script type="text/javascript">
        const bars = document.querySelector("#bars");
        const collabsable = document.querySelector("#home .navbar .collapsable_links");
        collabsable.style.height = "0px";

        bars.addEventListener("click", function(event) {
            if(collabsable.style.height == "0px")
                collabsable.style.height = "200px";
            else
                collabsable.style.height = "0px";
        });

        function upload_images(){
            document.querySelector("#voter_dashboard input[type=file]").click();
        
            document.getElementById("upload_image").addEventListener("change",function(){
                const reader = new FileReader();
                reader.onload = function(event){
                    document.querySelector("#voter_dashboard img").setAttribute("src",event.target.result);
                };

                reader.readAsDataURL(this.files[0]);
            });
        }
    </script>
</body>
</html>