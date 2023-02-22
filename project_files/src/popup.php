<?php

function displayPopup(): void
{

    echo '<div class="popup-content">
        <section class="header">
            <span class="close">&times;</span>
            <h1>PYTHON BACKEND</h1>
        </section>
        <section class="image">
            <img src="../public_html/images/banner.jpg" alt="Code photo">
        </section>
        <section class="popup-line"></section>
        <section class="text">
            <p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam tempus sapien non dapibus.
Nam eget dictum augue, non rutrum elit. Aliquam fermentum cursus nibh. Duis vehicula placerat
                molestie.
                Donec mollis nisl in purus dictum ullamcorper. Orci varius natoque penatibus et magnis dis
                parturient montes,
                nascetur ridiculus mus. Pellentesque vitae dictum ipsum. Fusce suscipit ipsum eget accumsan tempor
</p>
        </section>
        <button id="closeButton">CLOSE</button>
    </div>';
}

displayPopup();