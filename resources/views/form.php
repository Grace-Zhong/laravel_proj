<!DOCTYPE html>   
<html>
    <head>
        <title> form </title>     

        <meta charset="utf-8" />
    </head>

    <body>
        <form action="/home/add" method="post">
        <!-- 'Date','Gender','Type','Ranking','Player','Country','Age','Points','Tournaments' -->
            <p> Date: <input type="text" name="Date" value=""></p>
            <p> Gender: <input type="text" name="Gender" value=""></p>
            <p> Type: <input type="text" name="Type" value=""></p>
            <p> Ranking: <input type="text" name="Gender" value=""></p>
            <p> Player: <input type="text" name="Player" value=""></p>
            <p> Country: <input type="text" name="Country" value=""></p>
            <p> Age: <input type="text" name="Age" value=""></p>
            <p> Points: <input type="text" name="Points" value=""></p>
            <p> Tournaments: <input type="text" name="Tournaments" value=""></p>
            @csrf
            <input type="submit" value="submit">
        </form>
    </body>
    
</html>