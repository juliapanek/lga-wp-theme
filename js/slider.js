function removeOverlayDiv(id) {
  var div = jQuery("#" + id);

  var overlay = jQuery("#" + id + "-overlay-a");
  if (!overlay.length)
     overlay = jQuery("#" + id + "-overlay-b");

  if (overlay.length) {
    overlay.fadeOut(100, function() {
      overlay.remove();
    });
    div.fadeIn(500);
  }
}

function fadeOutCurrentDiv(id, func) {
  var div = jQuery("#" + id);

  var overlay = jQuery("#" + id + "-overlay-a");
  if (!overlay.length)
     overlay = jQuery("#" + id + "-overlay-b");

  if (overlay.length)
			overlay.fadeOut(100, func);
  else
    div.fadeOut(100);
}

function replaceOverlayDiv(id, html, fadeOutPrevious) {
  var div = jQuery("#" + id);

  var aId = id + "-overlay-a";
  var bId = id + "-overlay-b";

  var newOverlay = document.createElement("div");
  newOverlay.setAttribute("id", aId);

  var overlay = jQuery("#" + aId);
  if (overlay.length)
    newOverlay.setAttribute("id", bId);
  else
    overlay = jQuery("#" + bId);

  var parent = div.parent();

  newOverlay.style["position"] = "absolute";
  newOverlay.style["top"] = parent.css("margin-top");
  newOverlay.style["left"] = parent.css("margin-left");
  newOverlay.style["box-sizing"] = "border-box";
  newOverlay.innerHTML = html;

  div.after(newOverlay);
  newOverlay = jQuery("#" + newOverlay.getAttribute("id"));

  if (fadeOutPrevious)
    if (overlay.length)
      overlay.fadeOut(100, function() {
        overlay.remove();
      });
    else
      div.fadeOut(100);

  newOverlay.hide().fadeIn(500, function() {
    if (overlay.length && !fadeOutPrevious)
      overlay.remove();
  });
}
