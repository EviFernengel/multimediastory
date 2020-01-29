<?php include 'template-parts/head.php'?>

<!-- <div id='preloader'>
    <h2>AI redt onze oceanen</h2>
    <div id="prewrapper">
        <div class='ball' id='ball1'></div>
        <div class='ball' id='ball2'></div>
        <div class='ball' id='ball3'></div>
        <div class='ball' id='ball4'></div>
    </div>
</div> -->

<div id='hero'>
    <video class="video-js" id="heroVideo" autoplay loop muted playsinline>
        <source src="vid/her.mp4" type="video/mp4">
    </video>
</div>

<div id='main'>
    <img src="img/sandWave.png" alt="" id='sandWave'>

    <div id='preface'>
        <h3>Oorzaken plastic soep</h3>
        <p>De Plastic Soep wordt veroorzaakt doordat wij mensen veel plastic produceren dat als afval in het milieu terecht komt. Wat veel mensen niet weten is dat het afval in zee voor <span class='orange'>80% vanaf het land afkomstig is</span>. Via verschillende omwegen zoals de wind, riolen, grachten of rivieren komt afval uiteindelijk in zee terecht. Dit betekent dat een deel van <span class='orange'>ons afval</span> op directe wijze in zee belandt.</p>

        <div class='questionContainer' id='questionCont1'>
            <button class='questionMark' id='question1'></button>
            <div class='underlay' id='underlay1'></div>
        </div>
    </div>

    <div id='river'>

        <div class='bottle' id='bottle1'>
            <div class='questionContainer' id='questionCont2'>
                <button class='questionMark' id='question2'></button>
                <div class='underlay' id='underlay2'></div>
            </div>
        </div>

        <div id='alinea1'>
            <h3>Wegwerpplastic</h3>
            <p>De <span class='orange'>meest voorkomende soorten afval</span> in rivieren en de oceaan zijn producten die je elke dag wel gebruikt. Een opvallend kenmerk van al deze producten is dat het <span class='orange'>single use</span>  plastic is, plastic dat <span class='orange'>éénmalig</span>  wordt gebruikt, en dus   na consumptie alweer wordt weggegooid.</p>

            <p id='kinds'>De meest voorkomende soorten afval zijn:</p>

            <div class='numberContainer'>
                <div class='numbers' id='one'></div>
                <p>Sigaretten</p>
            </div>
            <div class='numberContainer'>
                <div class='numbers' id='two'></div>
                <p>Etenswaar wikkels</p>
            </div>
            <div class='numberContainer'>
                <div class='numbers' id='three'></div>
                <p>Drinkflesjes</p>
            </div>

            <div id='extraNumbers'></div>

            <button class='questionMark' id='arrow'></button>
        </div>

        <div id='alinea2'>
            <h3>De rol van a.i.</h3>
            <p>Om de plastic soep te bestrijden zijn er met behulp van <span class='orange'>A.I.</span>  verschillende systemen ontwikkeld voor rivieren en oceanen. Deze helpen bijvoorbeeld bij het in kaart brengen en opruimen van het plastic. Hiermee speelt A.I. <span class='orange'>grote rol in verbeteren van het zeemilieu</span> .</p>

            <div class='questionContainer' id='questionCont3'>
                <button class='questionMark' id='question3'></button>
                <div class='underlay' id='underlay3'></div>
            </div>
        </div>

        <div class='bottle' id='bottle2'></div>


    </div>

</div>
 
<?php include 'template-parts/footer.php'?>