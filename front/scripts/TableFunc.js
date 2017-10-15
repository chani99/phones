//  Create a table with all data
function creaTable(response_text) {
    document.getElementById('result').innerHTML = "";
    var array = response_text;
    var tableBody = document.getElementById('result');
    var tr = document.createElement('TR');
    tr.setAttribute("id", 'th');
    tableBody.appendChild(tr);
    var keys = Object.keys(array[0]);
    for (i = 0; i < keys.length; i++) {
        var th = document.createElement('TH');
        th.appendChild(document.createTextNode(keys[i]));
        document.getElementById('th').appendChild(th);
    }


    for (i = 0; i < array.length; i++) {
        var tr = document.createElement('TR');
        tr.setAttribute("id", i);
        tableBody.appendChild(tr);

        for (var prop in array[i]) {
            var td = document.createElement('TD');
            td.appendChild(document.createTextNode(array[i][prop]));
            document.getElementById(i).appendChild(td);
        }
    }

}