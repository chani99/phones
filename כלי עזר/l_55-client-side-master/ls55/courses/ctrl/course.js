 $.ajax('service/courses.json')
    .always(function(data) {
        $.ajax('views/course.html')
        .always(function(courseTemplate) {

            for (let i=0; i < data.length; i++) {
                var c = courseTemplate;
                c = c.replace("{{name}}", data[i].name);

                  let d = document.createElement('div');
            d.innerHTML = c;
            document.getElementById('courses').appendChild(d);
            }



        });

});