<div class="row lastBeforeFooter">
    <div class="column grid_6">
        <h2>Propose a Talk</h2>
        <form action="/propose/add/"  method="post">
        <fieldset>
            <legend>Tell us about Your Talk</legend>
            <p class="fsContent">

                <label for="title">Talk title</label>
                <input type="text" name="title" class="maxWidth"><br>
                <label for="abstract">Abstract</label>
                <textarea name="abstract" class="maxWidth" rows="15"></textarea>
            </p>
        </fieldset>

        <fieldset>
            <legend>Tell us about you</legend>
            <p class="fsContent">
                <label for="name">Name</label>
                <input type="text" name="name" class="maxWidth"><br>
                <label for="profession">Profession</label>
                <input type="text" name="profession" class="maxWidth"><br>
                <label for="name">Company</label>
                <input type="text" name="name" class="maxWidth"><br>
                <label for="name">Email</label>
                <input type="email" name="email" class="maxWidth"><br>
                <label for="name">Twitter-Name</label>
                <input type="text" name="name" class="maxWidth"><br>
                <label for="name">Your Website</label>
                <input type="text" name="name" class="maxWidth"><br>
            </p>
        </fieldset>

        <fieldset>
            <legend>Orgnisational Stuff</legend>
            <p class="fsContent">
                <label for="name">Do you have a preference for the day of your talk?</label>
                <input type="radio" name="preference" value="none"> None
                <input type="radio" name="preference" value="none"> Friday
                <input type="radio" name="preference" value="none"> Saturday <br><br>
                <label for="name">Does your company pay for your expenses?</label>
                <input type="radio" name="preference" value="none"> Yes
                <input type="radio" name="preference" value="none"> No
                <input type="radio" name="preference" value="none"> I don't know<br>
            </p>
        </fieldset>
        <br>
        <input class="button" type="submit" value="Submit Proposal">
        </form>
    </div>
    <div class="column grid_6">

    </div>
</div>