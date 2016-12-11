
	    <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/nice-select/js/jquery.nice-select.js"></script>
        <script src="assets/js/custom_jquery_file.js"></script>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBltdyY7gjqHbeK9G7OFLOJj1Xy5b0SaA4&libraries=places&callback=address"
        async defer></script>

        <script type="text/javascript">
            function address() {
              var input = document.getElementById('streetAddress');
              var options = {
                //types: ['(regions)'],
                componentRestrictions: {country: 'ng'}
              };

              autocomplete = new google.maps.places.Autocomplete(input, options);
            }
        </script>

        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=496223437090509";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </body>
</html>