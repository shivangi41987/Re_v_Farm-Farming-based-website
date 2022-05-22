function addLand() {
    // var id = document.getElementById("farmerContent")

    // var xhttp = new XMLHttpRequest();
    // xhttp.onreadystatechange = function () {
    //     if (this.readyState == 4 && this.status == 200) {
    //         id.innerHTML = this.responseText;
    //     }
    // };
    // xhttp.open("GET", ".././Dashboard/landlordAdd.php", true);
    // xhttp.send();
     
}

function calculate() {
    var cost = document.getElementById("cost")
    var area = document.getElementById("area").value
    var price = document.getElementById("price").value
    var month = document.getElementById("month").value

    var amount = price * area * month
    cost.innerHTML += '<h2>Total amount = <br><i class="fa fa-rupee-sign"> </i>  ' + amount + ' </h2>'

}