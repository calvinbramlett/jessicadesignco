<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 860 384" class="rainbow-overlay">
  <defs>
    <radialGradient cx="52.773%" cy="110.152%" fx="52.773%" fy="110.152%" r="98.466%" gradientTransform="matrix(-.00001 1 -1.07951 -.00007 1.717 .574)" id="rainbow-gradient">
      <stop stop-color="#0B0B0B" stop-opacity="0" offset="0%"/>
      <stop stop-color="#FF00EC" stop-opacity=".161" offset="45.714%">
        <animate attributeName="stop-color" dur="5s" values="#FF00EC;#FF0000;#FF00EC;" repeatCount="indefinite" />
      </stop>
      <stop stop-color="#FF0000" offset="55.854%">
        <animate attributeName="stop-color" dur="7s" values="#FF0000;#FF6500;#FF0000;" repeatCount="indefinite" />
      </stop>
      <stop stop-color="#FF6500" offset="62.957%">
        <animate attributeName="stop-color" dur="9s" values="#FF6500;#FFD900;#FF6500;" repeatCount="indefinite" />
      </stop>
      <stop stop-color="#FFD900" offset="68.642%">
        <animate attributeName="stop-color" dur="5s" values="#FFD900;#70E502;#FFD900;" repeatCount="indefinite" />
      </stop>
      <stop stop-color="#70E502" offset="75.829%">
        <animate attributeName="stop-color" dur="7s" values="#70E502;#0285DB;#70E502;" repeatCount="indefinite" />
      </stop>
      <stop stop-color="#0285DB" offset="79.991%">
        <animate attributeName="stop-color" dur="9s" values="#0285DB;#4200FF;#0285DB;" repeatCount="indefinite" />
      </stop>
      <stop stop-color="#4200FF" offset="84.66%">
        <animate attributeName="stop-color" dur="5s" values="#4200FF;#9400FF;#4200FF" repeatCount="indefinite" />
      </stop>
      <stop stop-color="#9400FF" stop-opacity="0" offset="100%"/>
    </radialGradient>

    <radialGradient cx="50%" cy="50%" fx="50%" fy="50%" r="50.455%" gradientTransform="matrix(0 -1 .90474 0 .048 1)" id="black-overlay">
      <stop stop-color="#000000" stop-opacity="0" offset="0%"/>
      <stop stop-color="#000000" offset="100%"/>
    </radialGradient>
    <path id="gradient-path" d="M1 1h858v382H1z"/>
  </defs>

  <g id="rainbow-border" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity=".362">
    <g id="rainbow-gradient-container" style="mix-blend-mode:screen">
      <use fill="url(#rainbow-gradient)" xlink:href="#gradient-path"/>
      <use stroke="#000000" fill="url(#black-overlay)" xlink:href="#gradient-path"/>
    </g>
  </g>
</svg>
