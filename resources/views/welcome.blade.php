<html>
<head>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        function updateDatabase(newLat, newLng) {
            // make an ajax request to a PHP file
            // on our site that will update the database
            // pass in our lat/lng as parameters
            $.ajax({
                type: "POST",
                url: "{{route('home')}}",

            }),
            $.post(
                "/MapController/update_coords",
                { 'newLat': newLat, 'newLng': newLng, 'var1': 'value1' }
            )
                .done(function(data) {
                    alert("Database updated");
                });
        }





    </script>
    <?php echo $map['js']; ?>
</head>
<body>
<input type="text" id="myPlaceTextBox" />

<?php echo $map['html']; ?>
</body>
</html>