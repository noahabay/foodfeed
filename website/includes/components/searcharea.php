<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("live-search").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("live-search").innerHTML=this.responseText;
    }

  }
  xmlhttp.open("GET","includes/components/searchresults.php?searchQuery="+str, true);
  xmlhttp.send();
}


</script>


<div class="search-container">
    <form  class="form">
        <input type="text" class="form-control" id="homepagesearchbar" placeholder="Search" size="30" onkeyup="showResult(this.value)">
        <button type="submit" class="search-button">
        <img src="images/search.jpg">
        </button>

        
    </form>
    <div id="live-search"></div>

</div>