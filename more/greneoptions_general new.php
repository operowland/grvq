<style>

#gadget-dock {
  background-color: #333;
  width: 50px;
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
-ms-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
-o-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);;
  -moz-border-radius: 2px 0 0 2px;
-ms-border-radius: 2px 0 0 2px;
-o-border-radius: 2px 0 0 2px;
-webkit-border-radius: 2px 0 0 2px;
border-radius: 2px 0 0 2px;;
  
  -moz-transition: right 0.15s ease-in-out;
-ms-transition: right 0.15s ease-in-out;
-o-transition: right 0.15s ease-in-out;
-webkit-transition: right 0.15s ease-in-out;
transition: right 0.15s ease-in-out;;
  
  position: fixed;
  left: -30px;
  top: 14px;
  z-index: 3000;
}


#gadget-dock:hover,

#gadget-dock.gadget-notifying,
#gadget-dock.gadget-opening {
  left: 0px;
}

/* expand the hover area */
#gadget-dock:after {
  content: '';
  display: block;
  width: 90px;
  height: 110%;
  position: absolute;
  top: -5%;
  left: -40px;
  z-index: -100;
}

#gadget-dock.gadget-opening:after {
  display: none;
}

.gadget-item {
  position: relative;
  z-index: 1;
}

.gadget-selected {
  z-index: 0;
}

.gadget-item:empty {
  display: none;
}

.gadget-menu {
  cursor: pointer;
  background-color: #333;
  border-top: 1px solid #585858;
  text-align: center;
  z-index: 0;
}

.gadget-icons {
  width: 50px;
  height: 50px;
  line-height: 50px;
}

.gadget-menu .gadget-title {
  display: none;
}

.gadget-selected .gadget-menu {
  background-color: white;
  border-color: #ccc;
}

.gadget-item:first-child .gadget-menu {
  border-top: 1px solid transparent;
  -moz-border-radius: 2px 0 0 0;
-ms-border-radius: 2px 0 0 0;
-o-border-radius: 2px 0 0 0;
-webkit-border-radius: 2px 0 0 0;
border-radius: 2px 0 0 0;
}

.gadget-selected.gadget-item:first-child .gadget-menu {
  border-color: #ccc;
  -moz-border-radius: 0;
-ms-border-radius: 0;
-o-border-radius: 0;
-webkit-border-radius: 0;
border-radius: 0;
}

.gadget-item:last-child .gadget-menu {
  -moz-border-radius: 0 0 0 2px;
-ms-border-radius: 0 0 0 2px;
-o-border-radius: 0 0 0 2px;
-webkit-border-radius: 0 0 0 2px;
border-radius: 0 0 0 2px;
}

.gadget-selected.gadget-item:last-child .gadget-menu {
  -moz-border-radius: 0;
-ms-border-radius: 0;
-o-border-radius: 0;
-webkit-border-radius: 0;
border-radius: 0;
}

.gadget-icon, .gadget-icon-selected {
  display: inline-block;
  max-width: 30px;
  max-height: 30px;
  vertical-align: middle;
}

.gadget-icon-selected {
  display: none;
}

.gadget-selected .gadget-icon {
  display: none;
}

.gadget-selected .gadget-icon-selected {
  display: inline-block;
}




.gadget-container {
  background-color: white;
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
-ms-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
-o-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);;
  line-height: 1.4em;
  text-align: left;
  visibility: hidden;
  z-index: -1;
  margin-left: 80%;
  word-wrap: break-word;
  max-width: 700px;
}


.gadget-container {
  
  -moz-transition: right 0.15s ease-in-out, opacity 0.15s ease-in-out;
-ms-transition: right 0.15s ease-in-out, opacity 0.15s ease-in-out;
-o-transition: right 0.15s ease-in-out, opacity 0.15s ease-in-out;
-webkit-transition: right 0.15s ease-in-out, opacity 0.15s ease-in-out;
transition: right 0.15s ease-in-out, opacity 0.15s ease-in-out;;
  
  opacity: 0;
  position: absolute;
  top: 0;
  right: -100px;
}


.gadget-container:hover,
.gadget-item:hover .gadget-container,

.gadget-selected .gadget-container {
  visibility: visible;
  left: 0px;
  opacity: 1;
}

.gadget-selected .gadget-container {
  border: 1px solid #ccc;
  -moz-border-radius: 2px 0 0 2px;
-ms-border-radius: 2px 0 0 2px;
-o-border-radius: 2px 0 0 2px;
-webkit-border-radius: 2px 0 0 2px;
border-radius: 2px 0 0 2px;;
  cursor: auto;
  z-index: -100;
}

.gadget-selected.gadget-dock-overflow-bottom .gadget-container {
  position: fixed;
  bottom: 27px;
  top: auto;
}

.gadget-selected.gadget-dock-overflow-client-area .gadget-container {
  position: fixed;
  top: 0;
  bottom: 24px;
}




/* HACK: Because IE8 ignores max-width when "overflow-y: scroll" is set */
/* the scroll-bar is shown by the child element of .gadget-container.   */
.gadget {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  /* IE scroll-bar */
  scrollbar-arrow-color: white;
  scrollbar-track-color: white;
  scrollbar-face-color: #999;
  scrollbar-highlight-color: #999;
  scrollbar-shadow-color: #999;
  scrollbar-3dlight-color: white;
  scrollbar-darkshadow-color: white;
}
.gadget-selected.gadget-dock-overflow-client-area .gadget {
  overflow-y: scroll;
}

.gadget::-webkit-scrollbar {
  width: 14px;
}

.gadget::-webkit-scrollbar:hover {
  background-color: #f3f3f3;
}

.gadget::-webkit-scrollbar-thumb {
  border-width: 0 0 0 4px;
  border-color: #999;
  border-style: solid;
}

.gadget::-webkit-scrollbar-thumb:hover {
  border-width: 0 0 0 12px;
}

.gadget::-webkit-scrollbar-button {
  width: 14px;
  height: 16px;
}

.gadget::-webkit-scrollbar-corner {
  background-color: transparent;
}


.gadget-content {
  display: none;
  overflow: hidden;
  position: relative;
}

.gadget-selected .gadget-content {
  display: block;
}

.gadget-container .gadget-title {
  display: block;
  background-color: #333;
  color: white;
  display: block;
  font-size: 14px;
  padding: 1px 16px 0 16px;
  height: 50px;
  line-height: 50px;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
  position: relative;
}

.gadget-container .gadget-title:hover {
  text-decoration: underline;
}

.gadget-selected .gadget-container .gadget-title {
  background-color: transparent;
  color: black;
  font-size: 16px;
  height: 40px;
}

.gadget-selected .gadget-container .gadget-title:hover {
  text-decoration: none;
}

.gadget-content {
  background-color: white;
}

.gadget-resize-detector {
  background-color: transparent;
  border-style: none;
  margin: 0;
  padding: 0;
  outline: 0;
  width: 0;
  height: 100%;
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1;
}

</style>









<div id="gadget-dock" class="">
  
  
  <div class="gadget-item" data-gadget-id="1">
<div class="gadget-menu">
    <div class="gadget-icons">
      <a href="http://www.greneavenue.com/"> <img class="gadget-icon" src="http://www.greneavenue.com/images/av1_2.png"></a>
      
    </div>
    <span class="gadget-title">greneavenue</span>
  </div>
  <div class="gadget-container">
    <div class="gadget">
      <a href="http://www.greneavenue.com/"> <span class="gadget-title">greneavenue</span></a>
      <div class="gadget-content"><ul class="gadget-linklist">
  
  
<li class="gadget-linklist-item">
  <a href="http://www.greneavenue.com/">greneavenue</a>
</li>

  
</ul></div>
    </div>
  </div></div>
  
  
  <div class="gadget-item" data-gadget-id="2">
<div class="gadget-menu">
    <div class="gadget-icons">
     <a href="http://www.grenebooks.greneavenue.com/"><img class="gadget-icon" src="http://www.greneavenue.com/images/av2_2.png"></a>
      
    </div>
    <span class="gadget-title">grenebooks</span>
  </div>
  <div class="gadget-container">
    <div class="gadget">
      <a href="http://www.grenebooks.greneavenue.com/"><span class="gadget-title">grenebooks</span></a>
      <div class="gadget-content"><ul class="gadget-linklist">
  
  
<li class="gadget-linklist-item">
  <a href="http://www.grenebooks.greneavenue.com/">grenebooks</a>
</li>

  
</ul></div>
    </div>
  </div></div>
  
  
  <div class="gadget-item" data-gadget-id="3">
<div class="gadget-menu">
    <div class="gadget-icons">
       <a href="http://www.grenecast.greneavenue.com/"><img class="gadget-icon" src="http://www.greneavenue.com/images/av3_2.png"></a>
      
    </div>
    <span class="gadget-title">grenecast</span>
  </div>
  <div class="gadget-container">
    <div class="gadget">
      <a href="http://www.grenecast.greneavenue.com/"><span class="gadget-title">grenecast</span></a>
      <div class="gadget-content"><ul class="gadget-linklist">
  
  
<li class="gadget-linklist-item">
  <a href="http://www.grenecast.greneavenue.com/">grenecast</a>
</li>

  
</ul></div>
    </div>
  </div></div>
  
  
  <div class="gadget-item" data-gadget-id="4">
<div class="gadget-menu">
    <div class="gadget-icons">
       <a href="http://www.greneidea.greneavenue.com/"><img class="gadget-icon" src="http://www.greneavenue.com/images/av6_2.png"></a>
      
    </div>
    <span class="gadget-title">greneidea</span>
  </div>
  <div class="gadget-container">
    <div class="gadget">
      <a href="http://www.greneidea.greneavenue.com/"><span class="gadget-title">greneidea</span></a>
      <div class="gadget-content"><ul class="gadget-linklist">
  
  
<li class="gadget-linklist-item">
  <a href="http://www.grenecast.greneavenue.com/">grenecast</a>
</li>

  
</ul></div>
    </div>
  </div></div>
  
  
  <div class="gadget-item" data-gadget-id="5">
<div class="gadget-menu">
    <div class="gadget-icons">
       <a href="http://www.grenepages.greneavenue.com/"><img class="gadget-icon" src="http://www.greneavenue.com/images/av4_2.png"></a>
      
    </div>
     <a href="http://www.grenepages.greneavenue.com/"><span class="gadget-title">grenepages</span></a>
  </div>
  <div class="gadget-container">
    <div class="gadget">
      <a href="http://www.grenepages.greneavenue.com/"><span class="gadget-title">grenepages</span></a>
      <div class="gadget-content"><ul class="gadget-linklist">
  
  
<li class="gadget-linklist-item">
  <a href="http://www.grenepages.greneavenue.com/">grenepages</a>
</li>

  
</ul></div>
    </div>
  </div></div>
  
  
  
  
  
  <div class="gadget-item" data-gadget-id="6">
<div class="gadget-menu">
    <div class="gadget-icons">
       <a href="http://www.greneshelter.greneavenue.com/"><img class="gadget-icon" src="http://www.greneavenue.com/images/av5_2.png"></a>
      
    </div>
    <span class="gadget-title">greneshelter</span>
  </div>
  <div class="gadget-container">
    <div class="gadget">
      <a href="http://www.greneshelter.greneavenue.com/"><span class="gadget-title">greneshelter</span></a>
      <div class="gadget-content"><ul class="gadget-linklist">
  
  
<li class="gadget-linklist-item">
  <a href="http://www.greneshelter.greneavenue.com/">greneshelter</a>
</li>

  
</ul></div>
    </div>
  </div></div>
  
  
  
  </div>