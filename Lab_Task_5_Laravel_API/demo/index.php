<!DOCTYPE html>
<html>
<body>

<div id="demo">
<h2>The XMLHttpRequest Object</h2>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>
<script>
function get(id){
    return document.getElementById(id);
}
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
   document.getElementById("demo").innerHTML =
    this.responseText;
    // var json=this.responseText;
    // var obj_arr=JSON.parse(json);

  }
  xhttp.open("GET", "Http://127.0.0.1:8000/api/medicine/list");
  xhttp.send();
}
</script>

</body>
</html>
