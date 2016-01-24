

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<button type="button" onclick="foo()">Refresh</button>

<p id="demo">Up next:</p>

<script>
function foo () {
      $.ajax({
        url:"getBest.php", //the page containing php script
        type: "POST", //request type
        success:function(result){
        document.getElementById("demo").innerHTML = "Up next: ".concat(result);

       }
     });
 }
</script>

