<html>
    <head>
        <title>Add users test</title>
    </head>
    <body>
        <form action="/addtest/add" method="post">
        @csrf
        @method("POST")

            <label for="username">Username:</label>
            <input type="text" id="username" name="username">

            <label for="points">Points:</label>
            <input type="number" id="points" name="points">

            <label for="start">Start time:</label>
            <input type="datetime-local" id="start" name="start" step="1">

            <label for="stop">Stop time:</label>
            <input type="datetime-local" id="stop" name="stop" step="1">

            <input type="submit" value="Send!!!">
        <form>
    </body>
</html>