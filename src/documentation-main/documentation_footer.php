			</div>

		</div>

	</div>

<?php include_once("../includes/footer.php"); ?>

<!-- start Google Search -->
<script>
	var gcseCallback = function() {

		// remove active class so spinner dissapears when google custom search is ready
		document.querySelector(".documentationSearch-spinner").className = "documentationSearch-spinner";

		// show search results container
		// need to hide it initially to stop jumping
	    var googleSearchResults = document.getElementById("googleSearchResults");
        var gcseFormInput = document.querySelector("#documentationSearch .gsc-input-box input");
        var gcseFormButton = document.querySelector("#documentationSearch .gsc-search-button input");
        var gcseFormClose = document.querySelector("#documentationSearch .gsst_a");
        googleSearchResults.style.display = "none";

        gcseFormInput.addEventListener("keydown", function(event){
           if (event.key === "Enter" && event.currentTarget.value !== "") {
              showSearchContainer();
           }
        });

        gcseFormButton.addEventListener("click", function(){
            var gcseFormButtonInput = document.querySelector("#documentationSearch .gsc-input-box input");
            if (gcseFormButtonInput.value !== "") {
                showSearchContainer();
            }
        });

        gcseFormClose.addEventListener("click", function(){
            hideSearchContainer();
        });

        function hideSearchContainer() {
            googleSearchResults.style.display = "none";
        }

        function showSearchContainer() {
            // slight delay so we can't see jump
            setTimeout(function() {
                googleSearchResults.style.display = "block";
            }, 250);
        }

	}
	window.__gcse = {
	  callback: gcseCallback
	};

  (function() {
    var cx = '003879901698459284705:hy3o2uvb28a';
    var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
  })();
</script>
<!-- end Google search -->

<?php include_once("../includes/analytics.php"); ?>

</body>

</html>