<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
 <style>
    body{
      margin: 0;
      padding: 0;
      font-family: arial;
    }

    .container{
      position: absolute;
      left: 0;
      top:1;
      width: 100%;
      height: 100vh;
      animation: animate 64s ease-in-out infinite;
      background-size: cover;
    }

    .outer{
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100vh;
      background:rgba(0,0,0,0.5)

    }
    .details{
      position: absolute;
      left: 50%;
      top:50%;
      transform: translate(-50%,-50%);
      text-align: center;
    }
     .details h1{
      font-size: 4em;
      color: #fff;
    }
     .details h2{
      text-transform: capitalize;

    }

    .details h2 span:nth-child(1){
      color: red;
    }
     .details h2 span:nth-child(2){
      color: yellow;

    }


    @keyframes animate{
      0%,100%{
        background-image: url(Pictures/image1.jpeg);
      }
      12.5%{
        background-image: url(Pictures/image2.jpeg);
      }
      25%{
        background-image: url(Pictures/image3.jpeg);
      }
      37.5%{
        background-image: url(Pictures/image4.jpeg);
      }
      50%{
        background-image: url(Pictures/image5.jpeg);
      }
      62.5%{
        background-image: url(Pictures/image6.jpeg);
      }
      75%{
        background-image: url(Pictures/image7.jpeg);
      }
      87.5%{
        background-image: url(Pictures/image8.jpeg);
      }
    }
  </style>
</head>
<body>
  <?php include 'dropdown.php';?>
  <div class="container">
    <div class="outer">
      <div class="details">
      
          <h1>Welcome To ESAccounting</h1>

             <h2>
               <span>One stop for all your accounting issues</span>
               <span>Powered by elaine solar africa</span>
             </h2>

      </div>
    </div>  
  </div> 
</body>
</html>
