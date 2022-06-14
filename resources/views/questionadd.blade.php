<html>
    <head>
        <title>Add users test</title>
    </head>
    <body>
        <form action="/addtest/add" method="post">
        @csrf
        @method("POST")

            <label for="q_desc">Küsimuse sisu:</label>
            <input type="text" id="q_desc" name="q_desc">

            <br>

            <label for="q_points">Küsimuse punktid:</label>
            <input type="number" id="q_points" name="q_points">

            <br>

            <input type="submit" value="Send!!!">
        <form>
    </body>
</html>