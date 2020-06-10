<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vremenska prognoza</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
        body {
          background: url('https://images.unsplash.com/photo-1561583534-09e822ba83ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1912&q=80');
        }
        #txtHint{
          color: white;
        }
        </style>


        <script>
function prikaziPrognozu(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;

    }
  }
  xmlhttp.open("GET","homeee.php?q="+str,true);
  xmlhttp.send();


  var image = document.getElementById("slikaa");
  var dropd = document.getElementById("vp");
  image.src = dropd.value+'.png';
}
</script>


    </head>
    <body>
<div class="container" id="cont" style="
  display: flex;
  align-items: center;
  justify-content: center;
  width:90%;">
<div class="card border-dark mb-3 p-1">
  
  <div class="card-img-overlay" style="height:20%">
      <h3>Vremenska prognoza</h3>
    </div>
  <div class="card-body bg-light">
    <h4 class="card-title"><a><br>Odabir grada:</a></h4>
        <div class="card-body mx-4 mt-4 bg-dark" >
          <div class="form-group">

            <div class="col-sm-6 col-md-10">
              <select id="vp" name="vp" onchange="prikaziPrognozu(this.value)" class="form-control">
                <option value="">Izaberi grad:</option>
                <option value="Nis">Niš</option>
                <option value="Beograd">Beograd</option>
                <option value="Kopaonik">Kopaonik</option>
                </select>
                <div id="txtHint"><b>Vremenska prognoza za izabran grad će se prikazati ovde:</b></div>
              </select>
            </div>
          </div>
<img id="slikaa" src="ok.png" style="width:20%"/>



<hr>
<a href="max.php" class="text-muted">Maksimalna temperatura</a>
        </div>
    </div>
  </div>
</div>
    </body>
</html>
