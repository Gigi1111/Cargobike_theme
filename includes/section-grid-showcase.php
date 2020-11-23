<div class="grid-wrapper" id="">
           
<div class="main-display">

        <ul  class="flex-container center">
            <li class="flex-item item1"></li>
            <li class="flex-item item2"></li>
            <li class="flex-item item3"></li>
            <li class="flex-item item4"></li>
            <li class="flex-item item5"></li>
            <li class="flex-item item6"></li>
            <li class="flex-item item7"></li>
        </ul>
</div>
    




    <style>

        .grid-wrapper{
            height: 500px;
            width: auto;
            /* padding: 0; */
            margin-top: 0px !important;
        }
        .main-display {
            margin:0;
            padding: 0;
            width: auto;
            height: 100%;
            max-height: 600px;
            background:  url("/wp-content/themes/mytheme/images/bike0.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            /* background-color: #cccccc; */
            /* filter: blur(1px); */
        }
        /* .right-display { */
            /* background: linear-gradient( rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url("/wp-content/themes/mytheme/images/brand-image4.jpg"); */
            
        /* } */


        .flex-container {
  padding: 0;
  margin: 0;
  list-style: none;
  display: flex;
}

.flex-start { 
  justify-content: flex-start; 
}

.flex-end { 
  justify-content: flex-end; 
}  
.flex-end li {
  background: gold;
}

.center { 
  justify-content: center; 
}  
.center li {
  /* background: deepskyblue; */
}

.space-between { 
  justify-content: space-between; 
}  
.space-between li {
  background: lightgreen;
}

.space-around { 
  justify-content: space-around; 
}
.space-around li {
  background: hotpink; 
}

.space-evenly { 
  justify-content: space-evenly; 
}
.space-evenly li {
  /* background: #bada55;  */
}

.flex-item {
    background: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("/wp-content/themes/mytheme/images/bike1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-color: #cccccc;
    /* background: tomato; */
  padding: 5px;
  width: 60px;
  height: 50px;
  margin: 5px;
  line-height: 50px;
  color: white;
  font-weight: bold;
  font-size: 2em;
  text-align: center;
}


    </style>
</div>