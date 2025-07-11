<!-- Custom Cursor SVG -->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="800" style="display: none">
    <defs>
        <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 35 -15"
                result="goo" />
            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
        </filter>
    </defs>
</svg>

<!-- Custom Cursor -->
<div id="cursor" class="Cursor"></div>