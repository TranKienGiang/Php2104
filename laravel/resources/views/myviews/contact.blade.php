<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<div class="header"><x-header name="header"></x-header></div>
<div class="container">
        <div style="text-align:center">
                <h2>Contact Us</h2>
                <p>Swing by for a cup of coffee, or leave us a message:</p>
        </div>
        <div class="row">
                <div class="column">
                        <img src="https://www.w3schools.com/w3images/map.jpg" style="width:100%">
                </div>
                <div class="column">
                        <form action="/action_page.php">
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                                <label for="country">Country</label>
                                <select id="country" name="country">
                                        <option value="australia">Australia</option>
                                        <option value="canada">Canada</option>
                                        <option value="usa">USA</option>
                                </select>
                                <label for="subject">Subject</label>
                                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                                <input type="submit" value="Submit">
                        </form>
                </div>
        </div>
</div>
<x-alert></x-alert>

<style type="text/css">
        div.header{

                height: 85px;
        }
        img{
                width: 100%;
                height: auto;
        }
        h2{
                color: #001489;
                text-align: center;
                
        }
        body {
                font-family: Arial, Helvetica, sans-serif;
        }

        * {
                box-sizing: border-box;
        }

        /* Style inputs */
        input[type=text], select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
        }

        input[type=submit] {
                background-color: #04AA6D;
                color: white;
                padding: 12px 20px;
                border: none;
                cursor: pointer;
        }

        input[type=submit]:hover {
                background-color: #45a049;
        }

        /* Style the container/contact section */
        .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 10px;
        }

        /* Create two columns that float next to eachother */
        .column {
                float: left;
                width: 50%;
                margin-top: 6px;
                padding: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
                content: "";
                display: table;
                clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
                .column, input[type=submit] {
                        width: 100%;
                        margin-top: 0;
                }
        }
       
</style>


