 function createtemps(data) {
     document.getElementById('result').innerHTML = "";

     $.ajax('../views/phonetemplate.html').always(function(courseTemplate) {
         for (let i = 0; i < data.length; i++) {
             var c = courseTemplate;
             c = c.replace("{{name}}", data[i].Phone_Name);
             c = c.replace("{{manu}}", data[i].Manufacturer_Name);
             c = c.replace("{{imgsrc}}", "../../back/images/" + data[i].Image_Name);

             let d = document.createElement('div');
             d.innerHTML = c;
             document.getElementById('result').appendChild(d);
         }



     });

 }