<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}
/*
input[type=submit] {
    /*background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}
*/

input[type=submit]:hover {
    background-color: #45a049;
}
/*
.container {
    border-radius: 5px;
    padding: 10px;
}
*/
.col-3 {
    float: left;
    width: 10%;
    margin-top: 6px;
}

.col-7 {
    float: left;
    width: 50%;
    margin-top: 6px;
}

/* untuk menghaspus isian */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* responsive 
@media screen and (max-width: 100%) {
    .col-3, .col-7, input[type=submit] {
       /* width: 80%;
        margin-top: 0;
    }
}*/
</style>
</head>
<body>

<h2>Responsive Form</h2>
<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>

<div class="container">
  <form action="#">
    <div class="row">
      <div class="col-3">
        <label for="fname">Pilih Agen</label>
      </div>
      <div class="col-7">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-3">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-7">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-3">
        <label for="country">Country</label>
      </div>
      <div class="col-7">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-3">
        <label for="subject">Subject</label>
      </div>
      <div class="col-7">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>

    	<!--
    <div class="row">
      <input type="submit" value="Submit">
    </div>
		-->

  </form>
</div>

</body>
</html>
