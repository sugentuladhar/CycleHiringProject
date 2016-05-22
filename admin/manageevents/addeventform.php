
<form action="addevent.php" method="post" enctype="multipart/form-data">
    <table border="0">
        <tr>
            <td style="color: #ffffff;">Event name:</td>
            <td><input type="text" name="eventname"></td>
        </tr>
        <tr>
            <td style="color: #ffffff;">Event date:</td>
            <td><input type="text" name="eventdate"></td>
        </tr>
        <tr>
            <td style="color: #ffffff;">Event description:</td>
            <td><input type="text" name="eventdescription"></td>
        </tr>
        <tr>
            <td style="color: #ffffff;">Event image:</td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td><input type="submit" name="ADD"></td>
        </tr>
    </table>
</form>