 function createtemps(data) {
     
        $.ajax('views/phone-template.html')
        .always(function(Template) {

            for (let i=0; i < data.length; i++) {
                var c = Template;
                c = c.replace("{{name}}", data[i].name);

                  let d = document.createElement('div');
            d.innerHTML = c;
            document.getElementById('result').appendChild(d);
            }



        });

}