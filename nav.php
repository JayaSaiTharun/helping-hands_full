<nav class="flexer" style="position:sticky;top:0%;">
    <div id="company" class="flexer"><a href=""><img id='hhlogo' src="hhlogo.png" alt="hhlogo">HELPING HANDS</a></div>
    <ul class="flexer">
        <li><a href="">Home</a></li>
        <li><a href="">Dummy</a></li>
        <li><a href="">Dummy</a></li>
        <li><a href="">Dummy</a></li>
        <li><a href="">Dummy</a></li>
        <li><a href="">Dummy</a></li>
    </ul>
</nav>
<div id="mobilenav" onclick="opennav();"><span id="navopener">Ⅲ</span><div id="mnavcontainer">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis doloremque nemo soluta quibusdam cupiditate eius illo vel necessitatibus voluptatum accusantium porro neque culpa voluptates dolor, officia ullam dolorum molestias beatae.</div></div>
<script>
    function opennav(){
        document.getElementById("mobilenav").style.height = "100vh";
        document.getElementById("mobilenav").style.width = "100vw";
        document.getElementById("mobilenav").style.background = "grey";
        document.getElementById("mobilenav").style.top = "0";
        document.getElementById("mobilenav").style.right = "0";
        document.getElementById("mnavcontainer").style.display = "flex";
    }
</script>