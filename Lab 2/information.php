<html>
    <head>
        <title> Receiving Input </title>
    </head>
         <body>
             <?php
                $name = $_GET['name'];
                $class = $_GET['class'];
                $uni = $_GET['university'];
                $hobby1 = $_GET['hobby1'];
                $hobby2 = $_GET['hobby2'];
                $hobby3 = $_GET['hobby3'];
                // print ("Hello, $name <br>"); 
                echo ("<h1> Hello, $name </h1>");
                print ("You are studying at $class, $uni");
                print ("<br> Your hobby :");
                echo ("<ul>
                        <li> $hobby1 </li>
                        <li> $hobby2 </li>
                        <li> $hobby3 </li>
                     </ul>
                     ");
             ?>
         </body>
</html>