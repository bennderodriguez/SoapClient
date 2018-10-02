<!DOCTYPE html>
<html>
    <body>

        <h1>The XMLHttpRequest Object</h1>

        <button type="button" onclick="loadDoc()">Request data</button>

        <p id="demo"></p>

        <script>
            function loadDoc() {
                var zurl ="http://s4qa.gruposanchez.com.mx:8000/sap/bc/srt/wsdl/flv_10002A111AD1/bndg_url/sap/bc/srt/rfc/sap/zws_crea_pedido/350/zws_crea_pedido/zws_crea_pedido?sap-client=350";
                var zuser = "webservice";
                var zpwd = "webservice";
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("demo").innerHTML = this.responseText;
                    }
                };
                xhttp.open("POST", zurl+"&username="+zuser+"&password="+zpwd, true);
                xhttp.setRequestHeader("username", "webservice");
                xhttp.setRequestHeader("password", "webservice");
                xhttp.send();
            }
        </script>

    </body>
</html>