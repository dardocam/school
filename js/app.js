function loadDataLocal(id) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function(){
    document.getElementById('content').innerHTML = this.responseText;
  }
  xhttp.open("GET", "http://localhost/olimpo/sucursal1.php?local=" + id , true);
  xhttp.send();
}
