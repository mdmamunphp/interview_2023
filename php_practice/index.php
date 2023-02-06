

    <html>
            <head>
                <title> Practicle</title>
            </head>
            <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
            <script>
               

               var  func_insert=function(){
                var name=$("#name").val();
                    var data="name="+name;
                    $.ajax({
                    url: "http://localhost:8000/interview_2023/php_practice/insert.php",
                        data:data,
                        success: function(data){
                            alert(`AJAX call was successful! ${data}`);
                     
                          
                        },
                        error: function() {
                            alert('There was some error performing the AJAX call!');
                        }
                    });
                }

                
                    $.ajax({
                    url: "http://localhost:8000/interview_2023/php_practice/insert.php",
                    success: function(view){
                        // alert(`all data ${view}`);.
                        //  var data = JSON.parse(view);
                        // console.table(data);
                        console.log(view);
                        var rows = "";
                            for (var i = 0; i < view.length; i++) {
                            rows += "<tr><td>name:" + view[i]["name"] + "</td><td>pass:" + view[i].pass + "</td></tr>";
                            
                            }
                            // $("#dataContainer").html(rows);
                        
                        $("#all_data_view").html(rows);

                    },
                        error: function() {
                            alert('There was some error performing the AJAX call!');
                        }
                    });
                
            </script>
            <body>

                    <form   method="post">
                        <table callspace="1" callpading="1">
                            <tr>
                                <td>name</td>
                                <td><input type="text"  name="name"  id="name"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="email"  name="email" id="email"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password"  name="password" id="password"></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><textarea type="textarea"  name="textarea" id="textarea" rows="4" cols="50"></textarea></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                    <select name="gender" id="gender" style="width:150px;text-align:center">
                                        <option value="0">Select</option> 
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>                             
                                    </select>
                                </td>

                            </tr>
                            <tr>
                                <td>Subject</td>
                                <td>
                                    <input type="checkbox" name="bangla" id="bangla" value="bangla"><label for="bangla">bangla</label>
                                    <input type="checkbox" name="math" id="math" value="math"><label for="math">math</label>
                                    <input type="checkbox" name="english" id="english" value="english"><label for="english">English</label>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>Class</td>
                                <td>
                                    <input type="radio" name="class" id="bangla" value="bangla"><label for="bangla">bangla</label>
                                    <input type="radio" name="class" id="math" value="math"><label for="math">math</label>
                                    <input type="radio" name="class" id="english" value="english"><label for="english">English</label>
                                </td>
                                
                            </tr>
                            <tr>
                               
                                <td>
                                    <input type="submit" name="login" id="login" value="Send" onclick="func_insert()" >
                                   
                                </td>
                                <td>
                                    <input type="submit" name="login" id="login" value="All View" onclick="func_view()" >
                                   
                                </td>
                            </tr>
                        </table>

                    </form>
                    <div id="all_data_view">

                    </div>
            </body>
    </html>