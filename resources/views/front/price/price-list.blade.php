<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        if(isset($_GET["choice"])){
            $web=$_GET["choice"];
            $c= count($web);
            $price= 0.0;

            for($i=0;$i<$c;$i++){
                if($web[$i]==8){
                    $price=$price+1;
                    Echo "JavaScript<br>";
                }

                if($web[$i]==50){
                    $price=$price+5;
                    Echo "html<br>";
                }
                if($web[$i]==30){
                    $price=$price+6;
                    Echo "css<br>";
                }
                if($web[$i]==50){
                    $price=$price+6;
                    Echo "jquery<br>";
                }
                if($web[$i]==30){
                    $price=$price+30;
                    Echo "payton<br>";
                }
     }            echo "Vas izbor  " .$price."KM<br>";


        }else{
            echo "Molimo Vas da izberete nesto sa liste";
        }
    ?>
</body>


<div class="container">
    <div class="col-sm-12">
        <div class="post">

            <table id="coupons" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>name</th>
                    <th>last_name</th>
                    <th>CouponType</th>
                    <th>email</th>
                    <th>site</th>
                    <th>question</th>
                </tr>
                </thead>
                <tbody>
                @foreach($choices as $choice)
                    <tr>
                        <td><ol type="a">
                                @foreach(explode(",", $choice->choice) as $row)
                                    <li>{{ $row }}</li>
                                @endforeach
                            </ol>
                        </td>
                        <td> {{ $choice['name'] }}</td>
                        <td> {{ $choice['last_name'] }}</td>
                        <td> {{ $choice['email'] }}</td>
                        <td> {{ $choice['site'] }}</td>
                        <td> {{ $choice['question'] }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>


        </div>
    </div>
</div>


</html>

