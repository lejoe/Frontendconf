<div class="row lastBeforeFooter">
    <div class="column grid_6">
        <h2>Propose a Talk</h2>
        <form action="/propose/add/"  method="post">
        <fieldset>
            <legend>Tell us about Your Talk</legend>
            <p class="fsContent">

                <label for="title">Talk title <span class="mandatory">★ mandatory</span></label>
                <input type="text" name="title" class="maxWidth" autofocus required><br>
                <label for="abstract">Abstract <span class="mandatory">★ mandatory</span></label>
                <textarea name="abstract" class="maxWidth" rows="15" required></textarea>
            </p>
        </fieldset>

        <fieldset>
            <legend>Tell us about you</legend>
            <p class="fsContent">
                <label for="name">Name <span class="mandatory">★ mandatory</span></label>
                <input type="text" name="name" class="maxWidth" required><br>
                <label for="name">Email <span class="mandatory">★ mandatory</span></label>
                <input type="email" name="email" class="maxWidth" required><br>
                <label for="bio">A short bio <span class="mandatory">★ mandatory</span></label>
                <textarea name="bio" class="maxWidth" rows="5" required></textarea>
                <label for="profession">Profession</label>
                <input type="text" name="profession" class="maxWidth"><br>
                <label for="name">Company</label>
                <input type="text" name="company" class="maxWidth"><br>
                <label for="name">Twitter-Name</label>
                <input type="text" name="twitter" class="maxWidth"><br>
                <label for="name">Your Website</label>
                <input type="url" value="http://"name="website" class="maxWidth"><br>
            </p>
        </fieldset>

        <fieldset>
            <legend>Orgnisational Stuff</legend>
            <p class="fsContent">
                <label for="datePreferenceForTalk">Do you have a preference for the day of your talk?</label>
                <input type="radio" name="datePreferenceForTalk" value="None"> None
                <input type="radio" name="datePreferenceForTalk" value="Friday"> Friday
                <input type="radio" name="datePreferenceForTalk" value="Saturday"> Saturday <br><br>
                <label for="costsCovered">Does your company pay for your expenses?</label>
                <input type="radio" name="costsCovered" value="Yes"> Yes
                <input type="radio" name="costsCovered" value="Some"> Some
                <input type="radio" name="costsCovered" value="No"> No<br>
            </p>
        </fieldset>
        <br>
        <input class="button" type="submit" value="Submit Proposal">
        </form>
    </div>
    <div class="column grid_6">

    </div>
</div>