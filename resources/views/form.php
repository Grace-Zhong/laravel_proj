<!DOCTYPE html>   
<html>
    <head>
        <title> form </title>     

        <meta charset="utf-8" />
    </head>

    <body>
        <form action="/home/add" method="post">
        <!-- 'Date','Gender','Type','Ranking','Player','Country','Age','Points','Tournaments' -->
            <p> Date: <input type="date" name="Date" value=""></p>
            <p> Gender: 
                <label><input type="radio" name="Gender" value="men">men</label>
                <label><input type="radio" name="Gender" value="women">women</label>
            </p>
            <p> Type:
                <label><input type="radio" name="Type" value="singles">singles</label>
            </p>
            <p> Rankings: <input type="text" name="Rankings" value="" disabled="disabled"></p>
            <p> Player: <input type="text" name="Player" value=""></p>
            <p> Country: <input type="text" name="Country" value=""></p>
            <p> Age: <input type="text" name="Age" value=""></p>
            <p> Points: <input type="text" name="Points" value=""></p>
            <p> Tournaments: <input type="text" name="Tournaments" value=""></p>
            <?php @csrf ?>
            <input type="submit" value="submit">
        </form>
    </body>
    
</html>