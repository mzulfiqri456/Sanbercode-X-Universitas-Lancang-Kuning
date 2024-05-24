<html>
  <body>
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form </h4>
    <style>
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .btn:active {
            background-color: #004080;
        }

        .btn-submit {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: green;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        .btn-submit:active {
            background-color: #004080;
        }
    </style>
    <form action="{{ route('welcome') }}" method="post">
        @csrf
        <label for="fname">First name:</label><br><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label><br><br>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="gender">Gender:</label><br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
        <label for="nationality">Nationality:</label><br><br>
        <select id="nationality" name="nationality"><br><br>
            <option value="indonesia" selected>Indonesian</option>
            <option value="singapore">Singaporean</option>
            <option value="malaysia">Malaysian</option>
            <option value="australia">Australian</option>
        </select><br><br>
        <label for="language">Language Spoken:</label><br><br>
        <input type="checkbox" id="indonesia" name="language" value="indonesia">
        <label for="indonesian">Bahasa Indonesia</label><br>
        <input type="checkbox" id="english" name="language" value="english">
        <label for="english">English</label><br>
        <input type="checkbox" id="other" name="language" value="other">
        <label for="other">Other</label><br><br>
        <label for="bio">Bio:</label><br><br>
        <textarea id="bio" name="bio" rows="10" cols="30"></textarea><br><br>
        <a href="/" class="btn">Kembali</a>
        <input type="submit" value="Sign Up" class="btn-submit">
    </form>
 </body>
</html>