
<script>
    $("#aboutdiv").hide();
    $(document).ready(function () {
        $("#about").click(function () {
            if ($('#aboutdiv').is(":hidden")) {
                $("#aboutdiv").slideDown('slow');
            } else {
                $("#aboutdiv").slideUp('slow');
            }

        });

    });
</script>
</body>
</html>
<?php
