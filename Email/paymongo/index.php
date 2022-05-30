<!DOCTYPE html>
<html>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            width: 30%;
            margin: 0 auto;
            margin-top: 2%;
        }
        .output{
            border: 10px solid;

        }
    </style>
<body>

<div class="container"> 
    <h1>24/7 Balikbayan</h1>
    <form action="process.php" method="post">
        <input type="text" name="Name" id="">
        <input type="hidden" value = "Success" name="Success" id="">
        <label for="romms">Choose a room</label>
            <select id ="rooms" name="myDropDown">
            <option value="600000 Deluxe Room">Family rooms (7 pax)</option>
            <option value=400000>Family rooms (6 pax)</option>
            <option value=300000>Family rooms (4 pax)</option>
            <option value=250000>Twinsharing rooms</option>
            <option value=200000>Couple rooms</option>
            <option value="100000">Attic room</option>
            <option value="300000">Private pool with hotel</option>
            </select>
            
        <input type="submit" value="Gcash">
    </form>

</body>
</html>
        