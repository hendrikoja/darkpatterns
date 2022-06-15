<!-- REDO, REDO IT ALL WTF LOL -->
<html>
    <head>
        <title>Add questions</title>
        <link rel="stylesheet" href="/css/questionadd.css">
    </head>
    <body>
        @csrf
        @method("POST")
            <h3>Küsimus</h3>
            <div class="adderContainer">
                <div class="addBox">
                    <form action="/addtest/add" method="post" enctype=”multipart/form-data”>
                        <label for="q_desc">Küsimuse sisu:</label>
                        <br>
                        <textarea id="q_desc" name="q_desc"></textarea>

                        <br>

                        <label for="q_points">Küsimuse punktid:</label>
                        <br>
                        <input type="number" id="q_points" name="q_points">

                        <br>

                        <label for="q_category">Küsimuse kategooria (1 - tavaline, 2 - draggable(???)):</label>
                        <br>
                        <input type="number" id="q_category" name="q_category" max=2 min=1>
                        <br>
                        <input type="submit" value="Send!!!">
                    </form>
                </div>
                <div class="addBox">
                    <form action="/addtest/add" method="post" enctype=”multipart/form-data”>
                        <label for="q_desc">Küsimuse vastus:</label>
                        <br>
                        <textarea id="q_desc" name="q_desc"></textarea>
                        <br>
                        <input type="submit" value="Send!!!">
                    </form>
                </div>
            </div>
            <hr>
        <form>
    </body>
</html>