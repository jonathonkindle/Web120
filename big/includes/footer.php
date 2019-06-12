    <!-- START Footer -->
        <footer>
            <p><small>&copy; 2018 - <?=date('Y')?> by <a class="a-footer" href="#" target="_blank">Jonathon Kindle</a>, All Rights Reserved ~ <a class="a-footer" href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a class="a-footer" href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
        </footer>
        <!-- END Footer --> 

        <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
        <script>
        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
                var y = document.getElementById("mydropbtn");
                if (y.className === "dropbtn") {
                    y.className += " responsive";
                } else {
                    y.className = "dropbtn";
                }
            }

            $(document).ready(function(){
                $(".animsition").animsition();
            });
        </script>
    </div>
    <!-- END WRAPPER -->

    </body>
</html>