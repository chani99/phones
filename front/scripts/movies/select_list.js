 $(document).ready(function() {
     // Gets the products from DB for select option
     (function() {
         let DirectorApiMethod = 'Director';
         let customerApiUrl = "../../Back/api/api.php";
         var data = {
             ctrl: DirectorApiMethod,
             select: 'selectlist'
         }
         sendAJAX("GET", customerApiUrl, data, 'selectlist');
     })();


 });