<header class="masthead">
    <p class="masthead-intro">Kedar Joyner</p>
    <h1 class="masthead-heading">UX/UI Designer</h1>
</header>
<section class="introduction-section">
    <div class="container">
        <h1>Introduction</h1>
        <p>Hello! My name is Kedar, rhymes with cheddar, and I'm a <strong>photographer</strong> and <strong>front end dev</strong> intern at <a href="http://dirigiblestudio.com/">Dirigible Studio</a> here in Madison, Wisco.
            <p />

        <p>I think it's important to help make the internet a <strong>beautiful place</strong>, whether that be through words, photography, or web design, and I'm excited to have found a community at <a href="https://www.thinkful.com/">Thinkful</a> that shares my belief.</p>

        <p>I also think it's important to push yourself and <strong>learn</strong> one new thing every day, no matter what that may be. Did you know a duel between three people is called a <a href="http://www.futilitycloset.com/wp-content/uploads/2010/12/2010-12-16-truel.jpg">truel?</a></p>
    </div>
</section>

<section class="location-section">
    <div class="container">
        <h1>Where I'm From</h1>
        <p>I call <a href="https://upload.wikimedia.org/wikipedia/commons/2/2a/1855_Colton_Map_of_Wisconsin_-_Geographicus_-_Wisconsin-colton-1855.jpg">Madison, Wisconsin</a> my home, the land of dairy (Get outta here, California!). My favorite part about <b>Madison</b> is that we're a city built around a large <a href="http://www.wisc.edu/">university</a>. There's a vibrant crowd here that keeps this city bold and <strong>progressive</strong>.

            The isles of <a href="http://www.quickmeme.com/img/50/50507a001a1b91078f63c8da7f340e9a529c7f22a65d0666ce1128bde8513d42.jpg">cheese</a> in every grocery store aren't so bad either.

        <p>You can find me in the city, <strong>camera</strong> in hand, documenting the stories around me, or in little cafe's writing about my daily <a href="http://www.kedarjoyner.com/blog/">adventures</a> and the people I meet.</p>
    </div>
</section>

<section class="questions-section">
    <div class="container">
        <h1>More About Me</h1>
        <h2>What are your favorite hobbies?</h2>
        <p>I love to explore new cities, take photographs, eat tacos, catnap with my cat, bike to big lakes, hold hands, play video games, dance in hay lofts, spend weekends with my grandpa, drink good <a href="http://www.proof66.com/whiskey/eagle-rare-10yr-bourbon.html">whiskey</a>, and sit outside all night on porches.</h2>

        <h2>What's your dream job?</h2>
        <p>A professional turtle racer. Just kidding, I would love to be a full-time <strong>creative</strong> who's given an array of responsibilities in front-end work, photography, design, and whatever else comes my way.</p>

        <h2>What music have you been listening to lately?</h2>
        <p>My husband and I recently roadtripped through Arizona listening to the band <a href="http://houndmouth.com/">Houdmouth</a>. I don't know what it is about them, but they make you want to keep driving and driving. Start with the song <a href="https://www.youtube.com/watch?v=Y8wifV5RYr8">"Sedona"</a> first.</p>
    </div>
</section>

<footer class="content-footer">
    <div class="footer-container">
        <p>Say hi to me on these social networks:</p>

        <a target="_blank" href="https://github.com/kedarjoyner"><i class="fa fa-github-alt fa-inverse fa-2x"></i></a>
        &nbsp;
        <a href="https://twitter.com/kedmasterk"><i class="fa fa-twitter fa-inverse fa-2x"></i></a>
        &nbsp;
        <a href="https://instagram.com/kedarjoyner/"><i class="fa fa-instagram fa-inverse fa-2x"></i></a>

        <p>Cover Image via <a href="http://www.kedarjoyner.com">Kedar Joyner Photography</a></p>
    </div>
</footer>

<style>
    body {
        /* Typography Declaration */
        color: #222222;
        font-size: 1em;
        font-family: "Open Sans", "Helvetica Neue", sans-serif;
    }

    .masthead-heading,
    .masthead-intro,
    .content-footer {
        text-align: center;
    }

    .masthead {
        padding: 11em 0;
        background-image: url('https://images.unsplash.com/photo-1512716679859-da19b4af9c38?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top center;
        border-top: solid 2em #B69760;
    }

    .masthead-intro {
        /* Text Declarations */
        margin-bottom: 0.1em;
        font-family: "Gentium Book Basic,"Georgia, serif;
        font-size: 4em;
        color: #FFFFFF;
        text-transform: uppercase;
        letter-spacing: .08em;
    }


    .masthead-heading {
        /*Layout Declarations */
        margin-top: -0.2em;
        /* Typography Declarations */
        font-family: "Open Sans", "Helvetica Neue", sans-serif;
        font-weight: light;
        font-size: 1.5em;
        letter-spacing: -0.01em;
        text-transform: uppercase;
        color: #FFFFFF;
    }

    /* Text Declarations for Sections */

    .introduction-section>p,
    .location-section>p,
    .content-footer>p,
    .questions-section>p {
        font-weight: 300;
        letter-spacing: 0.05em;
    }

    /* Section Styling */

    .introduction-section,
    .location-section,
    .questions-section {
        max-width: 38em;
        margin-left: auto;
        margin-right: auto;
        margin-top: 2em;
    }

    .questions-section>h2 {
        /*Typography Declarations */
        font-family: "Gentium Book Basic", Georgia, serif;
        font-size: 1.1 em;
        font-weight: bold;
        color: #222222;
    }

    /* Footer Styling */

    .fa-stack fa-lg {
        display: inline-block;
    }

    .footer-container>p {
        color: white;
    }

    .content-footer {
        padding: 2em 0;
        margin-top: 3em;
        background: #2b3840;
    }

    a {
        text-decoration: none;
        font-weight: bold;
    }

    a:link {
        color: #B69760;
    }

    a:visited {
        color: #B69760;
    }

    a: hover {
        color: #B69760;
    }

    @media only screen and (max-width: 571px) {
        .masthead {
            padding: 5em 0;
        }

        .masthead-intro {
            font-size: 3em;
        }

        .masthead-heading {
            font-size: .5em;
        }

        .container {
            padding: 0 3em;
        }

        .footer-container {
            padding: 0 3em;
        }
    }
</style>