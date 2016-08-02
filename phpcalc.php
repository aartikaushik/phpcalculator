<!Doctype html>
<html>
    <body>
    
        <form action="getresult.php" method="post" onsubmit="check();">
            Enter the first number;
            <input type="number" name="first" id="first" step="0.01"/><br><br>
            Enter the second number;
            <input type="number" name="second" id="second" step="0.01"/><br><br>
            --------Menu---------<br>
            1- Choose 1 for Addition.
            2- Choose 2 for Subtraction.
            3- Choose 3 for Multiplicaion.
            4- Choose 4 for Division.<br><br>
            <input type="number" name="choice" id="choice"/><br><br>
            <input type="submit"/>
        </form>
        
<!--
        <script>
               function check(){
                        if(($('input[name="first"]').val() == "" || $('input[name="first"]').val() == null) || ($('input[name="second"]').val() == "" || $('input[name="second"]').val() == null) || ($('input[name="choice"]').val() == "" || $('input[name="choice"]').val() == null)){
                            alert("One of the field is not selected");
                            return false;
                        }
                        else{
                            return true;
                        }
                 }
        </script>
-->
        

<!--
        <script>
            var ajaxRequest = ajaxApp();
             function successFunc(response) {
                if(response['success'] !== undefined){  
                    $("#final_result").html(
                            response['success']
                        
                    );
                    $(document).ready(function() {
			         $('select').material_select();
                    });
                }
                else if(response['error'] == undefined) {
                    alert("error");
                }
            }
            function errorFunc() {
                alert("'Oops! some error occured'");
            }
            var ajaxOptions = {
                'url': '../getresult.php',
                'sendRequestParameter': true,
                'requestParameters': {
                    'choice': "" ,
                },
                'onSuccessCallback': successFunc,
                'onErrorCallback': errorFunc
            };
           ajaxRequest.initialize(ajaxOptions);
            
           $('#choice').change(function() {
                ajaxOptions.requestParameters.choice = $("#choice").val();        
			    ajaxRequest.sendRequest();
            });
            
            </script> 
-->



        </body>
    </html>