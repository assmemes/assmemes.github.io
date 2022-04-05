<!DOCTYPE html>

<html>
    <head>
    </head>
    
    <input type="text" id="feld" name="feld">
    <button onclick="onClick()">abschicken</button>
    <b id="status"></b>

    <script> 
        function onClick() {
            console.log(document.getElementById("feld").value)

            if(document.getElementById("feld").value == "gratis") {
                document.getElementById("status").textContent = "top";
                return;
            }
            document.getElementById("status").textContent = 
            document.getElementById("feld").value + " ok";
        }
    </script>

    <body>

    </body>
</html>
