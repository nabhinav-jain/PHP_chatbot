<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Chatbot</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="text-center">PHP Chatbot</h1>

        <!-- chatbot media component start -->
        <!-- .d-flex class for edge only -->
        <div class="media d-flex">
            <img src="chatbot.jpg" alt="..." class="rounded-circle img-thumbnail" width="75px">
            <div class="media-body">
                <h5 style="margin: 10px;">Chatbot</h5>
                <span style="margin-left: 10px;">Online</span>
            </div>
        </div>
        <!-- chatbot media component end -->

      <!-- chatting area after here -->
        <div id="chatContainer" class="container border overflow-auto" style="height:500px;">


        <!-- this code is for reference of design it will be created dynamically (start) -->


            <!-- chatbot message area
            <div class="w-50 float-left shadow-sm" style="margin: 10px; padding: 5px;">
                <span>Chat:</span>
                <span style="margin-top: 10px; padding: 5px;">How are you?</span>
            </div>

             user message area -->
             <!-- <div class="w-50 float-right shadow-sm" style="margin: 10px; padding: 5px; float: right;">
                <span>You:</span>
                <span style="margin-top: 10px; padding: 5px;">good wbu</span>
            </div>  -->

             <!-- this code is for reference of design it will be created dynamically (end) -->
        </div> 

        <!-- after this is div for user input -->
        <div class="input-group">
            <input type="text" id="textbox" class="form-control">
            <div class="input-group-append">
                <button id="sendBtn" class="btn btn-primary" type="button">send</button>
            </div>

        </div>


    <!-- container for full page end after here -->
    </div>
    

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- my js files -->
    <script src="js/app.js"></script>
  
</body>
</html>