<html>
    <head>
        <title>Add users test</title>
    </head>
    <body>
        <form action="/addtest/add" method="post" enctype=”multipart/form-data”>
        @csrf
        @method("POST")
            <h3>Küsimus</h3>
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

            <hr>
            <h3>Küsimuse vastused</h3>
            <label for="q_a1">Esimese vastuse sisu (kui vajalik):</label>
            <br>
            <textarea id="q_a1" name="q_a1"></textarea>
            <br>
            <label for="q_img1">Esimese vastuse pilt:</label>
            <br>
            <input type="file" name=q_img1 id="q_img1">
            <br>
            <label for="q_correct1">Kas on õige?:</label>
            <br>
            <input type="checkbox" name="q_correct1" id="q_correct1">
            <hr>

            <label for="q_a2">Teise vastuse sisu (kui vajalik):</label>
            <br>
            <textarea id="q_a2" name="q_a2"></textarea>
            <br>
            <label for="q_img2">Teise vastuse pilt:</label>
            <br>
            <input type="file" name=q_img2 id="q_img2">
            <br>
            <label for="q_correct2">Kas on õige?:</label>
            <br>
            <input type="checkbox" name="q_correct2" id="q_correct2">
            <hr>
            <h3>Story osa</h3>
            <hr>

            <input type="submit" value="Send!!!">
        <form>
    </body>
</html>