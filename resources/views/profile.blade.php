<style>
    * {
  box-sizing: border-box;
  margin: 0px;
  padding: 0px;
  transition: background-color 0.6s ease, color 0.3s ease, border-color 0.6s ease;
}

body {
  font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Ubuntu, "Helvetica Neue", sans-serif;
  color: var(--primary-color);
  background-color: var(--bkg-color);
}

:root {
  --bkg-color: #15202b;
  --wallpaper-color: #3e5366;

  --primary-color: white;
  --secondary-text: #8898a6;

  --border-color: #38444d;

  --pfp-border: 4px;

  /* Color accents*/
  --classic-blue: 29, 161, 241;
  --avocado-green: 25, 191, 100;
  --orange-sun: 255, 174, 30;
  /* --- */

  --accent-color-rgb: var(--orange-sun);
  --accent-color: rgb(var(--accent-color-rgb));
}

.light-theme {
  --bkg-color: white;
  --wallpaper-color: #C4CFD6;

  --primary-color: #0F1419;
  --secondary-text: #5B6F83;

  --border-color: #ECEEF0;

  --pfp-border: 4px;
}

.dark-theme {
  --bkg-color: #000000;
  --wallpaper-color: #2F3336;

  --primary-color: #D9D9D9;
  --secondary-text: #6D767D;

  --border-color: #2F3336;

  --pfp-border: 4px;
}

.content {
  width: 600px;
  border: 1px solid var(--border-color);
  margin: 40px auto;
}

/* ------ General ------ */
.header {
  font-size: 18px;
  font-weight: 800;
  color: var(--primary-color);
}

.secondary {
  color: var(--secondary-text);
}

.subtext {
  font-size: 14px;
  color: var(--secondary-text);

  /* optional */
  margin-top: 3px;
}

a {
  color: var(--accent-color);
  text-decoration: none;
}

/* ------ Navigation ------ */
.navigation {
  display: grid;
  grid-template: auto auto / 60px auto;
  padding: 8px;
}

.navigation > div {
  /*   border: 1px solid red; */
}

.arrow_back {
  grid-row: 1/3;
  align-self: center;
  margin-left: 10px;

  /*   border: 1px solid red; */
  cursor: pointer;
  position: relative;
}

.arrow_back > svg {
  fill: var(--accent-color);
  width: 25px;
}

/* Circle */
.arrow_back:hover:after {
  opacity: 0.1;
}

.arrow_back:after {
  content: "";

  position: absolute;
  width: 40px;
  height: 40px;
  background-color: var(--accent-color);

  left: -6px;
  top: 50%;
  transform: translateY(-50%);
  opacity: 0;
  border-radius: 50%;

  transition: opacity 0.3s;
}

/* ------ WALLPAPER ------ */
.wallpaper {
  background-color: var(--wallpaper-color);
  height: 200px;
}

/* ------ Pre-bio ------ */
.pre-bio {
  display: flex;
/*     border: 1px solid red; */

  justify-content: flex-end;
  position: relative;
  padding-bottom: 12px;
}

.pfp {
  background-color: salmon;
  width: calc(130px - 2 * var(--pfp-border));
  height: calc(130px - 2 * var(--pfp-border));
  position: absolute;

  bottom: 0%;
  left: 0%;
  border-radius: 50%;

  border: var(--pfp-border) solid var(--bkg-color);

  background-image: url("https://pbs.twimg.com/profile_images/1370524209458388996/ORUlQRtS_200x200.jpg");
  background-size: cover;

  cursor: pointer;
}

.pfp:hover:after {
  content: "";

  background-color: var(--bkg-color);
  width: 100%;
  height: 100%;
  border-radius: 50%;

  position: absolute;
  opacity: 0.1;
}

.btn {
  font-weight: 600;
  border: 1px solid var(--accent-color);
  color: var(--accent-color);
  padding: 12px 20px;
  border-radius: 99999px;
  cursor: pointer;
  background-color: rgba(var(--accent-color-rgb), 0);
  transition: background-color 0.2s;
}

.btn:hover {
  background-color: rgba(var(--accent-color-rgb), 0.1);
}

/* ------ BIO ------ */
.bio {
  padding: 15px;
  padding-bottom: 0px;
}

.bio > div {
  margin-bottom: 12px;
  color: var(--primary-color);
}

/* ------ Tabs ------ */
.tabs {
  display: flex;
  align-items: stretch;

  font-weight: 700;
  font-size: 15px;
  color: var(--secondary-text);
}

.tabs > div {
  flex-grow: 1;
  text-align: center;

  padding: 18px;

  position: relative;
  cursor: pointer;
  transition: all 0.2s;

  background-color: rgba(var(--accent-color-rbg), 0);
}

.tabs > div:hover {
  color: var(--accent-color);
  background-color: rgba(var(--accent-color-rgb), 0.1);
}

.selected {
  color: var(--accent-color);
  border-bottom: 3px solid var(--accent-color);
}

/* -------------------- */
/* OTHER */
/* -------------------- */
.controls {
  margin: auto;
  border: 1px solid var(--border-color);
  width: 600px;
  margin-bottom: 150px;
  padding: 10px;
}

button {
  padding: 10px;
  cursor: pointer;
}
</style>
<body>
    <div class="content">
      <div class="navigation">
        <div class="arrow_back">arrow</div>
        <div class="header">Codegem</div>
        <div class="subtext">25 Tweets</div>
      </div>
      <div class="wallpaper">
      </div>
      <div class="bio">

        <div class="pre-bio">
          <div class="pfp"></div>

          <div class="btn">Edit profile</div>
        </div>

        <div>
          <div class="header">Codegem</div>
          <div class="subtext">@codegem_io</div>
        </div>

        <div>🚀 We show you how to code cool stuff</div>
        <div><a href="https://linktr.ee/codegem">linktr.ee/codegem</a>
          <span class="secondary">Joined March 2021</span></div>

        <div>
          15 <span class="secondary">Following</span>
          12 <span class="secondary">Followers</span>
        </div>
      </div>

      <div class="tabs">
        <div class="selected">Tweets</div>
        <div>Tweets & replies</div>
        <div>Media</div>
        <div>Likes</div>
      </div>
    </div>


    <div class="controls">
      <button onclick="switchTheme();" class="btn">Switch theme</button>
    </div>
    </body>
<script>
    function main() {
  const back = document.querySelector(".arrow_back");

  back.innerHTML =
    '<svg viewBox="0 0 24 24" class="r-61mi1v r-4qtqp9 r-yyyyoo r-1q142lx r-50lct3 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1srniue"><g><path d="M20 11H7.414l4.293-4.293c.39-.39.39-1.023 0-1.414s-1.023-.39-1.414 0l-6 6c-.39.39-.39 1.023 0 1.414l6 6c.195.195.45.293.707.293s.512-.098.707-.293c.39-.39.39-1.023 0-1.414L7.414 13H20c.553 0 1-.447 1-1s-.447-1-1-1z"></path></g></svg>';

  const tabs = document.querySelectorAll(".tabs > div");

  const selectTab = (tab) => () => {
    tabs.forEach(tab => tab.classList.remove("selected"));
    tab.classList.add("selected");
  };

  tabs.forEach(tab => {
    tab.addEventListener("click", selectTab(tab));
  });
}

window.addEventListener("load", main);


function switchTheme() {
   document.body.classList.toggle('light-theme');
   // document.body.classList.toggle('dark-theme');
}
</script>
