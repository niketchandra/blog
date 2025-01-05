<div>
    <h1> No surplus words or unnecessary actions. - Marcus Aurelius </h1>
    <form action="adduserdata" method="post">
        @csrf
    <label for="php">php</label>
    <input type="checkbox" name="skill[]" value="php" id="php">
    <label for="node">Node</label>
    <input type="checkbox" name="skill[]" value="node" id="node">
    <label for="java">java</label>
    <input type="checkbox" name="skill[]" value="java" id="java">
        <!-- <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required> -->

     <br>
     <label for="male">Male</label>
    <input type="radio" name="gender" value="male" id="male">
    <label for="female">Female</label>
    <input type="radio" name="gender" value="female" id="female">
        </br>
        <label for="city">City:</label>
        <select name=city>
            <option value="delhi">Delhi</option>
            <option value="mumbai">Mumbai</option>
            <option value="pune">Pune</option>
            <option value="bangalore">Bangalore</option>
        </select>            
        <br>
    <lable for="age"> </label><input type="range" name="age" min="1" max="60" id="age">
    <br>
        <button type="submit">Submit</button>
</div>
