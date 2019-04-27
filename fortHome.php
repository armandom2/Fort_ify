<!DOCTYPE html>
<html>
    <head>
        <title> Fortnite Looker </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body {
              font-family: Arial;
            }
            
            * {
              box-sizing: border-box;
            }
            .navigationBar{
                display:flex;
                
            }
            
            form.navigationBar input[type=text] {
              padding: 10px;
              font-size: 17px;
              border: 1px solid grey;
              float: left;
              width: 26%;
              height:10%;
              background: #f1f1f1;
            }
            
            form.navigationBar button {
              float: left;
              width: 4%;
              padding: 10px;
              background: #2196F3;
              color: white;
              font-size: 17px;
              border: 1px solid grey;
              border-left: none;
              cursor: pointer;
              height:10%;
            }
            
            
            #theImg0,#theImg1,#theImg2,#theImg3,#theImg4,#theImg5,#theImg6,#theImg7,#theImg8{
                width:100%; 
                height:40%;
            }
            
            #img0,#img1,#img2,#img3,#img4,#img5,#img6,#img7,#img8{
                width:30px;
                height:30px;
            }
            #fniteBanner{
                
            }
            #banner{
                
            }
            header{
                padding-top:2%;
                position:sticky;
                top:0;
                background-color:darkBlue;
                width:100%;
                
            }
            nav{
                padding-left: 4%;
                font-size:20px;
                    
            }
            
            #rankingsTab, #newsTab, #streamingTab, #faqTab{
                padding-left:30px;
                color:white;
            }
        </style>
        
    </head>
    <body>
        
        <header>
            <form class="navigationBar">
                <div id = "logo">
                    <h3 style = "color:white;">Fort-ify </h3>
                </div>
                <button type = "button" id="ps4Tab" >PS4</button>
                <button type = "button" id="xbxTab" >XBX</button>
                <button type = "button" id="pcTab" >PC</button>
                <input type="text" placeholder="Enter your Epic Games username..." name="search" id = "searchQ">
                <button type="button" id ="searchButton"><i class="fa fa-search"></i></button>
                <nav>
                    <a href id = "rankingsTab"src = "index.php">Rankings</a>
                    <a href id = "newsTab" src = "index.php">News</a>
                    <a href id = "streamingTab" src = "index.php">Streaming</a>
                    <a href id = "faqTab" src = "index.php">FAQ</a>
                </nav>
            </form>
        </header>
        
        
        
        
        </br>
      
        


        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script type="text/javascript">
        
        $(function(){
            
            //**********************************************************************
            //*******************_______NAVIGATION BAR_______***********************
            var type = "getPCPlayer.php";
            $("#ps4Tab").on("click",function(){
                type = "getPS4Player.php";
                // console.log(type);
            });
            $("#xbxTab").on("click",function(){
                type = "getXBXPlayer.php";
                // console.log(type);
            });
            $("#pcTab").on("click",function(){
                type = "getPCPlayer.php";
                // console.log(type);
            });
            
            
            // ****************_______search ajax call_______********************
            $.ajax({
                type:"GET" ,
                url: "api/" + console,
                dataType: "json",
                data:{
                    "search": $("#searchQ").val()
                },
                success:function(data, status){
                    
                }
            });
        
        
            
            
        });            

        </script>

    </body>
</html>