 $(document).ready(function() {
     // Gets the products from DB for select option
     (function() {
         let PhonesApiMethod = 'manu';
         let customerApiUrl = "../../back/api/api.php";
         var data = {
             ctrl: PhonesApiMethod,
             select: 'selectlist'
         }
         sendAJAX("GET", customerApiUrl, data, 'selectlist');
     })();


 });