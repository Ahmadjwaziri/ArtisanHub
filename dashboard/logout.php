<?php 
session_start();
session_destroy();
echo '
<script>

alert("logout of the session Successfully");
window.location=("index.html");

</script>

';


?>