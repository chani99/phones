 function createtemps(data, manu) {
     document.getElementById('result').innerHTML = "";

     $.ajax('../views/phonetemplate.html').always(function(courseTemplate) {
         for (let i = 0; i < data.length; i++) {
             
             if (manu == 'all' || data[i].Manufacturer_Name == manu) {
                insertToHTML(data[i]);
             }
             
         
        }


        function insertToHTML(data) {
            var c = courseTemplate;
            c = c.replace("{{name}}", data.Phone_Name);
            c = c.replace("{{manu}}", data.Manufacturer_Name);
            c = c.replace("{{imgsrc}}", "../../back/images/" + data.Image_Name);

            let d = document.createElement('div');
            d.innerHTML = c;
            document.getElementById('result').appendChild(d);
     }

     });

 }