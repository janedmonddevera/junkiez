<?php

    wp_footer();

?>

<script>

var loadingScreen = document.querySelector(".loadingScreen");

window.addEventListener('load', function() {
  console.log('nice');
  loadingScreen.classList.add('d-none');
})

</script>
</body>

</html>